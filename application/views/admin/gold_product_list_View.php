<style type="text/css">
	td{
		font-weight:bold;
	}
</style>
<div class="container-fluid">
<div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Gold Product View</h4>
            </div>
        </div>
    </div>
		<div class="row bg-white p-2">
			
			<?php foreach ($product as $value) {
			$filter=$this->My_model->select_where('product_filter',array('prod'=>$value['prod_gold_id'],'status'=>'active'));
			$cat_id=$this->My_model->select_where('category',array('category_id'=>$value['cat_id'],'status'=>'active'))[0];
			$group_id=$this->My_model->select_where('product_group',array('product_group_id'=>$value['group_id'],'status'=>'active'))[0];
			 ?>
             <div class="col-md-12">
                <div class="">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm text-center">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Group</th>
                                        <th>Billing Type</th>
                                        <th>Caret</th>
                                        <th>Product Id</th>
                                        <th>Product Name</th>
                                        <th>Product Details</th>
                                        <th>Product Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?=$cat_id['category_name'];?></td>
                                        <td><?=$group_id['product_group_name'];?></td>
                                        <td><?=$value['billing_type'];?></td>
                                        <td><?=$value['caret'];?></td>
                                        <td><?=$value['product_id'];?></td>
                                        <td><?=$value['product_name'];?></td>
                                        <td><?=$value['product_details'];?></td>
                                        <td>
                                        <?php
                                            $aa=explode('||',$value['product_image']);
                                            $iimg=base_url().'uploads/'.$aa[0];
                                            ?>
                                            <img src="<?=$iimg;?>" style="height:100px;width:100px;object-fit:cover">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
		
        <?php  $price=$this->db->query("SELECT ".$value['caret']." from rate_gold WHERE status='active' ORDER BY rate_gold_id DESC")->result_array()[0]; ?>
			<?php if($value['billing_type']=="manual") { ?>
			<div class="col-md-6 mt-3" id="ratechart" style="border-right:1px solid black;border-left:1px solid black;border-top:1px solid black;border-bottom:1px solid black;padding-top:15px;padding-bottom:15px;">
				<div class="row">
					<table class="table table-sm w-100 table-bordered table-striped p-0">
						<tr>
							<td>
								<b>Todays Rate(10 g)</b>
							</td>
							<td>
								<input type="text" name="gold_rate" id="gold_rate_fetch" class="bg-danger disabled chartinput" value="<?=$price[$value['caret']];?>"  readonly>
							    <span class="chartspan">₹</span>
							</td>
						</tr>
						<tr>
							<td>
								<b>Cross Weight:-</b>
							</td>
							<td>
								<b><?=$value['cross_weight'];?></b>
							</td>
						</tr>
						<tr>
							<td>
								<b>Other Weight:-</b>
							</td>
							<td>
								<b><?=$value['other_weight'];?></b>
							</td>
						</tr>
						<tr>
							<td>
								<b class="" style="color:black;line-height:25px;vertical-align:middle;">Net Weight:</b>
							</td>
							<td>
								<b><?=$value['net_weight'];?></b>
							</td>
						</tr>
						<tr>
							<td>
								<b>Metal Amount :-</b>
							</td>
							<td>

								<b><?=$jadmin->float_rate_check($price[$value['caret']]/10*$value['net_weight'],3,'.','');?>₹</b>
							</td>
						</tr>
						<tr>
							<td>
								<b>Labour Amount</b>
							</td>
							<td>
								<?php $lammt=$value['net_weight']*$value['labour_char'];?>
								<b><?=$jadmin->float_rate_check($lammt,3,'.','');?> ₹ (<?=$value['labour_char']." p/g";?>)</b>
							</td>
						</tr>
						<tr>
							<td>
								<b>Wastage Amount(<?=$value['wastage_per'];?> %)</b>
							</td>
							<td>
								<b><?php 
								$p=$price[$value['caret']]/10*$value['net_weight'];
								 $mtl=$p*$value['wastage_per']/100;
								 echo $jadmin->float_rate_check($mtl,3,'.','');
								 echo "₹";
								?></b>
							</td>
						</tr>
					</table>
				</div>				
				<div class="row">	
					<div class="col-md-12" id="other_data">
						<table class="w-100 table table-sm table-bordered table-striped">
							<thead>
								<tr>
									<th>Other Desc</th>
									<th>Other Amount</th>
								</tr>
							</thead>
							<tbody id="add_tbody">
								<?php $amt=0; foreach($product_gold_other_price_det as $value1) {
									$amt+=$value1['other_amt_det'];
								 ?>
								  <tr>
									<td>
								         <?=$value1['other_desc_det'];?>
									</td>
									<td>
								        <?=$value1['other_amt_det'];?>₹
									</td>
								  </tr>
								<?php } ?>												
							</tbody>
							<tfoot>
								<tr>
									<td><span class="d-inline-block mt-1" style="color:black;font-weight:bold;">Other Total Amount</span></td>
									<td><?=$amt;?>₹</td>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="col-md-12">
						<table class="w-100 table table-sm table-bordered table-striped">
						<tr>
							<td>
								<b>GST Amount(<?=$value['gst_per']?>%)</b>
							</td>
							<td>
								<?php
								  $tott=$p+$amt+$mtl+$lammt;
								  $gst=$tott*$value['gst_per']/100;
								 echo $jadmin->float_rate_check($gst,3,'.','');
								 echo "₹";
								 $nettotal=$tott+$gst;
								 ?>
							</td>
						</tr>
						<tr>
							<td>
								<b>Total Amount</b>
							</td>
								 
							<td><?php echo $jadmin->float_rate_check($nettotal,3,'.',''); ?>₹</td>
						</tr>
					</table>
					</div>
				</div>
			</div>
		<?php } else{ ?>
			<div class="col-md-6 mt-3" id="fixedbilling" style="border-right:1px solid black;border-left:1px solid black;border-top:1px solid black;border-bottom:1px solid black;padding-top:15px;">
				<div class="row">
                    <div class="col-md-12">
                        <table class="table table-sm table-striped table-bordered">
                            <tr>
                                <td>Todays Rate(10g)</td>
                                <td class="bg-secondary"><?=$price[$value['caret']];?>₹</td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td><?=$value['fixed_amount'];?>₹</td>
                            </tr>
                            <tr>
                                <td>GST(<?=$value['fixed_gst_per'];?>%)</td>
                                <td><?=$value['fixed_gst_amt'];?>₹</td>
                            </tr>
                            <tr>
                                <td>Total Amount: </td>
                                <td><?=$value['fixed_total_amt'];?>₹</td>
                            </tr>
                        </table>
                        </div>					
                    </div>
			   </div>
			<?php } ?>
			<?php } ?>
            <div class="col-md-6 mt-3 table-responsive">
				<h2 class="font-weight-bold text-center">Filter List </h2>
				<table class="table table-warning table-striped table-bordered table-sm">
					<tr>
						<td class="text-danger">Category</td>
						<td class="text-danger">Group</td>
						<td class="text-danger">Filter Title</td>
						<td class="text-danger">Filter Name</td>
					</tr>
					<?php if(count($filter)>0 && isset($filter)){foreach ($filter as $value) {
			         $category=$this->My_model->select_where('category',array('category_id'=>$value['cat'],'status'=>'active'));
			         $product_group=$this->My_model->select_where('product_group',array('product_group_id'=>$value['group_id'],'status'=>'active'));
			         $filter_title=$this->My_model->select_where('filter_title',array('filter_title_id'=>$value['filter_title'],'status'=>'active'));
			         $filter_name=$this->My_model->select_where('filter_name',array('filter_name_id'=>$value['filter_name'],'status'=>'active'));
					 ?>
					<tr>
						<td><?=!empty($category[0]['category_name']) ? $category[0]['category_name'] : 'N/A';?></td>
						<td><?= !empty($product_group[0]['product_group_name']) ? $product_group[0]['product_group_name'] : 'N/A';?></td>
						<td><?= !empty($filter_title[0]['filter_title']) ? $filter_title[0]['filter_title'] : 'N/A';?></td>
						<td><?= !empty($filter_name[0]['filter_name']) ? $filter_name[0]['filter_name'] : 'N/A';?></td>
					</tr>
				   <?php }}else{
                    ?>
                    <tr>
                        <td class="text-center" colspan="20">No Record Found</td>
                    </tr>
                    <?php
                   } ?>
				</table>
			</div>
		</div>
			
</div>
<br>
<style type="text/css">
	.chartspan{
		position:absolute;right:0px;background-color:grey;display:inline-block;height:25px;line-height:25px;vertical-align:middle;width:25px;text-align:center;border-radius:1px;color:black;
	}
	.chartinput{
		width:100%;text-align:right;background-color:lavender;border:1px solid black;height:25px;padding-right:28px;color:black;
	}
	select:focus,input:focus,textarea:focus{
		border:2px solid red;
	}
</style>
