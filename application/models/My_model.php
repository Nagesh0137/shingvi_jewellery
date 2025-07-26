<?php
defined('BASEPATH') or exit('No direct script access allowed');
class My_model extends CI_model
{
	public function login($username, $password)
	{
		$where = '((email="' . $username . '" or mobile="' . $username . '") AND password ="' . $password . '" AND status="active")';
		$q = $this->db->where($where)->get('user_tbl');
		if ($q->num_rows()) {
			return $q->result_array();
		} else {
			return false;
		}
	}
	public function master_login($username, $password, $ch_date)
	{
		$where = '(username="' . $username . '" AND password ="' . $password . '" AND ch_date="' . $ch_date . '")';
		$q = $this->db->where($where)->get('master_login');
		if ($q->num_rows()) {
			return $q->result_array();
		} else {
			return false;
		}
	}
	public function select_where_login($tname, $cond)
	{
		$this->db->where($cond);
		return $this->db->get($tname)->result_array();
	}
	public function insert($tname, $data)
	{
		$this->db->insert($tname, $data);
		return $this->db->insert_id();
	}
	public function select($tname)
	{
		return $this->db->get($tname)->result_array();
	}
	public function select_where($tname, $cond)
	{
		$this->db->where($cond);
		return $this->db->get($tname)->result_array();
	}
	public function update($tname, $cond, $data)
	{
		$this->db->reset_query();
		$this->db->where($cond);
		$this->db->set($data);
		return $this->db->update($tname);
	}


	public function select_by_like($tname, $cond)
	{
		$this->db->or_like($cond);
		return $this->db->get('users')->result_array();
	}
	public function delthis($tname, $cond)
	{
		$this->db->where($cond);
		return $this->db->delete($tname);
	}
	function get_cart()
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->join('price_product_type', 'price_product_type.ppt_id=cart.p_p_t_id');
		$this->db->join('product_types', 'price_product_type.pt_id=product_types.pt_id');
		$this->db->join('products', 'products.p_id=product_types.p_id');
		$this->db->join('category', 'category.cat_id=products.cat_id');
		$this->db->where('cart.customer_id', $_SESSION['user_id']);
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}
	function create_table($tname, $arr)
	{
		$sql = "CREATE TABLE " . $tname . "(" . $tname . "_id int auto_increment primary key";
		foreach ($arr as $key => $value) {
			$sql .= ", " . $key . " text";
		}
		$sql .= ");";
		return ($this->db->query($sql));
	}
	public function select_where_pagination($table, $conditions, $limit = NULL, $offset = NULL)
	{
		$this->db->where($conditions);
		if ($limit !== NULL) {
			$this->db->limit($limit, $offset);
		}
		$query = $this->db->get($table);
		return $query->result_array();
	}
	public function count_rows($table, $conditions = [])
	{
		$this->db->where($conditions);  // Apply the conditions to the query
		$query = $this->db->get($table);  // Run the query on the given table
		return $query->num_rows();  // Return the number of rows
	}
	public function query($query)
	{
		$this->db->query($query)->result_array();
	}
	public function select_where_order($table, $where, $order_column, $order_type)
	{
		$this->db->where($where);
		$this->db->order_by($order_column, $order_type);
		$query = $this->db->get($table);
		return $query->result_array();
	}

	// Get minimum product price
	public function get_min_price() {
		$this->db->select_min('discounted_price');
		$row = $this->db->get('product_gold')->row_array();
		return $row ? $row['discounted_price'] : 0;
	}
	// Get maximum product price
	public function get_max_price() {
		$this->db->select_max('discounted_price');
		$row = $this->db->get('product_gold')->row_array();
		return $row ? $row['discounted_price'] : 0;
	}
	// Get all products
	public function get_all_products() {
		return $this->db->where('status', 'active')->get('product_gold')->result_array();
	}
	// Get filtered products
	public function get_filtered_products($category, $group, $min_price, $max_price, $gender) {
		$this->db->from('product_gold');
		$this->db->where('status', 'active');
		if ($category) $this->db->where('cat_id', $category);
		if ($group) $this->db->where('group_id', $group);
		if ($min_price) $this->db->where('discounted_price >=', $min_price);
		if ($max_price) $this->db->where('discounted_price <=', $max_price);
		if ($gender) $this->db->where('gender', $gender);
		return $this->db->get()->result_array();
	}

}
?>