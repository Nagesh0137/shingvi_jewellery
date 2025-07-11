<?php
// function admin_name($cid)
// {
//   return $GLOBALS['CI']->My_model->select_where("admin_tbl", ['admin_tbl_id' => $cid])[0]['admin_name'];
// }
function getStopName($id)
{
  $data = $GLOBALS['CI']->db->query("SELECT * FROM stops WHERE status='active' AND stops_id='" . $id . "'")->result_array();
  if (isset($data[0]['stops_id'])) {
    return $data[0]['stop_name'];
  } else {
    return '-';
  }
}
if (!function_exists('u_name')) {
  function u_name($id)
  {
    $CI = &get_instance();
    $user = $CI->db->query("SELECT name FROM user_tbl WHERE user_tbl_id = " . $CI->db->escape($id))->row_array();
    return $user ? $user['name'] : 'N/A';
  }
}

function user_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("user_tbl", ['user_tbl_id' => $cid, 'status' => 'active']);
  if (isset($data[0])) {
    return $data[0]['u_name'];
  } else {
    return '-';
  }
}
function tripId()
{
  $count = $GLOBALS['CI']->db->query("SELECT COUNT(trip_tbl_id) as count FROM trip_tbl where entry_date='" . date('Y-m-d') . "'")->row_array();
  $today = date('dmy');
  return $today . str_pad($count['count'] + 1, 2, '0', STR_PAD_LEFT);
}
function getBrandName($id)
{
  $data = $GLOBALS['CI']->db->query("SELECT * FROM vehicle_brand_tbl WHERE status='active' AND vehicle_brand_tbl_id='" . $id . "'")->result_array();
  if (isset($data[0]['brand_name'])) {
    return $data[0]['brand_name'];
  } else {
    return '-';
  }
}
function driver_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("driver_tbl", ['driver_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['d_name'];
  } else {
    return '-';
  }
}
function trip_booking_id($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("trip_tbl", ['trip_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['trip_booking_id'];
  } else {
    return '-';
  }
}

function city_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("city_tbl", ['city_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['city_name'];
  } else {
    return '-';
  }
}

function city_by_point_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("stops", ['stops_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['city'];
  } else {
    return '-';
  }
}

function vehicle_number($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("vehicle_tbl", ['vehicle_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['vehicle_no'];
  } else {
    return '-';
  }
}

function vehicle_tbl_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("vehicle_tbl", ['vehicle_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['name_model'];
  } else {
    return '-';
  }
}
function vehicle_brand($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("vehicle_brand_tbl", ['vehicle_brand_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['brand_name'];
  } else {
    return '-';
  }
}


function nil(&$inp, $ret = "")
{
  if (isset($inp))
    return $inp;
  else
    return $ret;
}


function owner_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("owner_tbl", ['owner_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['ow_name'];
  } else {
    return '-';
  }
}

function vehicle_type($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("vehicle_type_tbl", ['vehicle_type_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['type_name'];
  } else {
    return '-';
  }
}


function filter_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("filter_tbl", ['filter_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['filter'];
  } else {
    return '-';
  }
}
function cate_name($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("category_tbl", ['category_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['category_name'];
  } else {
    return '-';
  }
}

function ride_cat($cid)
{
  $data = $GLOBALS['CI']->My_model->select_where("ride_category_tbl", ['ride_category_tbl_id' => $cid]);
  if (isset($data[0])) {
    return $data[0]['r_cat_name'];
  } else {
    return '-';
  }
}


function driver_id($id)
{
  $id = $GLOBALS['CI']->db->escape_like_str($id);
  $result = $GLOBALS['CI']->db->query("SELECT * FROM driver_tbl WHERE d_name LIKE '%{$id}%'")->result_array();
  return $result[0]['driver_tbl_id'] ?? null;
}


function Limit_Tooltip($text, $wordLimit = null)
{
  $wordLimit = empty($wordLimit) ? 3 : $wordLimit;

  $words = explode(' ', $text);
  $shortText = implode(' ', array_slice($words, 0, $wordLimit));
  $ellipsis = count($words) > $wordLimit ? '..' : '';

  $escapedFullText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  $escapedShortText = htmlspecialchars($shortText . $ellipsis, ENT_QUOTES, 'UTF-8');

  return "<span data-bs-toggle=\"tooltip\" title=\"$escapedFullText\">$escapedShortText</span>";
}

function check($value)
{
  return !empty($value) ? htmlspecialchars($value, ENT_QUOTES, 'UTF-8') : 'N/A';
}




?>