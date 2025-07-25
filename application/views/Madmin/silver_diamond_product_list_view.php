
<style type="text/css">
	.textcol{color:red;font-weight:bold;font-size:18px;}
</style>
<div class="container-fluid">
		<?php foreach ($product as $value) {
		$cat_id=$this->db->query("SELECT * from category where category_id='".$value['cat_id']."'")->result_array()[0];
		$group_id=$this->db->query("SELECT * from product_group where product_group_id='".$value['group_id']."'")->result_array()[0];
		$rate_silver=$this->db->query("SELECT * FROM  rate_silver order by rate_silver_id DESC")->result_array()[0];
		$diamond_rate=$this->db->query("SELECT * from rate_diamond order by rate_diamond_id DESC")->result_array()[0];
		// print_r($rate_silver);
		// print_r($diamond_rate);
		 ?>
	<div class="row" style="border-top:10px solid #564A7D;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">
		<div class="col-md-3">
			<span class="textcol">Category</span>
			<h3><?=$cat_id['category_name'];?></h3>
		</div>
		<div class="col-md-3">
			<span class="textcol">Group</span>
			<h3><?=$group_id['product_group_name'];?></h3>
		</div>
		<div class="col-md-3">
			<span class="textcol">Billing Type</span>
			<h3><?=$value['billing_type'];?></h3>
		</div>
		<div class="col-md-3">
			<span class="textcol">Caret</span>
			<h3><?=$value['caret'];?></h3>
		</div>
		<br>
		<div class="col-md-3">
			<span class="textcol">Product Id</span>
			<h3><?=$value['product_id'];?></h3>
		</div>
		<div class="col-md-3">
			<span class="textcol">Product Name</span>
			<h3><?=$value['product_name'];?></h3>
		</div>
		<div class="col-md-6">
			<span class="textcol">Product Details</span>
			<h3><?=$value['product_details'];?></h3>
		</div>
	</div>
	<hr>
	<div class="row" style="border-top:10px solid #564A7D;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;">
		<div class="col-md-4">
			<span class="textcol">Product Ref</span>
			<h3><?=$product_diamond_details[0]['product_ref'];?></h3>
		</div>
		<div class="col-md-4">
			<span class="textcol">Certificate No</span>
			<h3><?=$product_diamond_details[0]['certificate_no'];?></h3>
		</div>
		<div class="col-md-4">
			<span class="textcol">Style No</span>
			<h3><?=$product_diamond_details[0]['style_no'];?></h3>
		</div>
		<div class="col-md-4">
			<span class="textcol">Vendor Size</span>
			<h3><?=$product_diamond_details[0]['vendor_size'];?></h3>
		</div>
		<div class="col-md-4">
			<span class="textcol">Design</span>
			<h3><?=$product_diamond_details[0]['design'];?></h3>
		</div>
	</div>
	<hr>
	<div class="row" >
		<div class="col-md-3">
			<span class="textcol">Todays Rate</span>
			<h3><?=$rate_silver['silver_amt'];?></h3>
		</div>
		<div class="col-md-3">
			<span class="textcol">Gross Weight</span>
			<h3><?=$value['cross_weight'];?></h3>
		</div>
		<div class="col-md-3">
			<span class="textcol">Other Weight</span>
			<h3><?=$value['other_weight'];?></h3>
		</div>
		<div class="col-md-3">
			<span class="textcol">Net Weight:</span>
			<h3><?=$value['net_weight'];?></h3>
		</div>
		<div class="col-md-4">
			<?php 
			$metal_amt=($rate_silver['silver_amt']/10)*$value['net_weight'];
			$metal_amt1= float_rate_check(number_format($metal_amt,3,'.',''));
			?>
			   <span class="textcol">Metal Amount:  <span style="color:black;"><?=$metal_amt1;?></span></span>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<span class="textcol">Labour Amt(p/g)</span>
			<h2><?=$value['labour_char'];?></h2>
		</div>
		<div class="col-md-3">
			<span class="textcol">Labour Tot Amt</span>
			<?php 
			$labouramt=$value['net_weight']*$value['labour_char'];
			$labouramt1= float_rate_check(number_format($labouramt,3,'.',''));
			?>
			<h2><?=$labouramt1;?></h2>
		</div>
		<div class="col-md-3">
			<span class="textcol">Wastage Per(%)</span>
			<h2><?=$value['wastage_per'];?></h2>
		</div>
		<div class="col-md-3">
			<span class="textcol">Wastage Amount</span>
			<?php 
			$Wastage=$metal_amt1*$value['wastage_per']/100;
			$Wastage1= float_rate_check(number_format($Wastage,3,'.',''));
			?>
			<h2><?=$Wastage1;?></h2>
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered table-striped table-hover table-sm">
			<tr>
				<th class="textcol">OTHER DESC:</th>
				<th class="textcol">OTHER AMOUNT</th>
			</tr>
		<?php $other_amt=0; foreach ($product_gold_other_price_det as $value1) {
			$other_amt+=$value1['other_amt_det'];
		 ?>
			<tr>
			<td><?=$value1['other_desc_det'];?></td>
			<td><?=$value1['other_amt_det'];?></td>
		    </tr>
	    <?php } ?>
	    <tr>
	    	<td class="textcol text-right">OTHER TOTAL AMT:</td>
	    	<td><b><?=$other_amt;?></b></td>
	    </tr>
		</table>
	</div>
	
	<hr>
	<div class="row">
		<div class="col-md-4">
			<span class="textcol">Stone Rate:<span style="color:black;margin-left:5px;"><?=$diamond_rate['diamond_amt'];?></span></span>
		</div>
	</div>
	<div class="row">
		<table class="table table-striped table-bordered table-hover table-sm">
			<tr>
				<th class="textcol">Stone</th>
				<th class="textcol">Shape</th>
				<th class="textcol">Color</th>
				<th class="textcol">Quality</th>
				<th class="textcol">PCS</th>
				<th class="textcol">caret</th>
				<th class="textcol">Wt(Gms)</th>
				<th class="textcol">Rate</th>
			</tr>
			<?php $stotalamt=0; foreach($product_diamond_data as  $valued){
			$diamond_color=$this->db->query("SELECT * from diamond_color WHERE diamond_color_id='".$valued['stone_color_id']."'")->result_array()[0];
            $diamond_clarity=$this->db->query("SELECT * from diamond_clarity WHERE diamond_clarity_id='".$valued['stone_quality_id']."'")->result_array()[0];
	        $srate=($diamond_rate['diamond_amt']/1)*$valued['stone_caret'];
            $colrate=$srate*$diamond_color['dec_amt']/100;
            $clarate=$srate*$diamond_clarity['dec_amt']/100;
            $stotal=$srate-$clarate-$colrate;
			$stotal1= float_rate_check(number_format($stotal,3,'.',''));
			$stotalamt+=$stotal1;
			 ?>
			<tr>
				<td><?=$valued['stone_type_name'];?></td>
				<td><?=$valued['stone_shape_name'];?></td>
				<td><?=$valued['stone_color_name'];?></td>
				<td><?=$valued['stone_quality_name'];?></td>
				<td><?=$valued['stone_pcs'];?></td>
				<td><?=$valued['stone_caret'];?></td>
				<td><?=$valued['stone_wt'];?></td>
				<td><?=$stotal;?></td>
			</tr>
		    <?php } ?>
		    <tr>
		    	<td colspan="7" class="text-right font-weight-bold">Total Amount</td>
		    	<td><b><?=$stotalamt;?></b></td>
		    </tr>
		</table>
	</div>
	<hr>
	<div class="row bg-warning p-2">
		<div class="col-md-4 text-center">
			<span class="textcol">GST(%):- </span>
			<span class="font-weight-bold h2 ml-2 text-dark"><?=$value['gst_per'];?></span>
		</div>
		<div class="col-md-4 text-center">
			<?php
			 $net_amt=$metal_amt1+$labouramt1+$Wastage1+$other_amt+$stotalamt;
	         $gstamt1=$net_amt*$value['gst_per']/100;
	         $gstamt2=float_rate_check(number_format($gstamt1,3,'.',''));
	         $tottt=$net_amt+$gstamt2;
	         $tottt1=float_rate_check(number_format($tottt,3,'.',''));

			 ?>
			<span class="textcol">GST Rate:- </span>
			<span class="font-weight-bold h2 ml-2 text-dark"><?=$gstamt2;?></span>
		</div>
		<div class="col-md-4 text-center">
			<span class="textcol">Total Amount:- </span>
			<span class="font-weight-bold h2 ml-2 text-dark"><?=$tottt1;?></span>
		</div>
	</div>
  <?php } ?>
<hr>
  <div class="row">
  	<h2 class="font-weight-bold text-danger">Filter List :</h2>
  	<table class="table table-striped table-hover table-sm table-bordered">
  		<tr>
  			<th class="textcol">Filter Title</th>
  			<th class="textcol">Filter Name</th>
  		</tr>
  		<?php foreach ($filter as $valuef) {
  			$filter_title=$this->db->query("SELECT * from filter_title where filter_title_id='".$valuef['filter_title']."'")->result_array()[0];
  			$filter_name=$this->db->query("SELECT * from filter_name where filter_name_id='".$valuef['filter_name']."'")->result_array()[0];
  		 ?>
  			<tr>
  				<td><?=$filter_title['filter_title'];?></td>
  				<td><?=$filter_name['filter_name'];?></td>
  			</tr>
  		<?php } ?>
  	</table>
  </div>
</div>

<?php
function float_rate_check($val){
$a=explode('.', $val);
if(isset($a[1])) {
	if ($a[1]>100) {
	return  $c=$a[0]+1;
	}
	else{
	return  $c=$a[0];
	}
}
else{
	return  $c=$a[0];
}
}
?>