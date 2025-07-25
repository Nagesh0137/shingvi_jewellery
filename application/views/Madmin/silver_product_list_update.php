<div class="container-fluid">
    <div class="row">
        <?php foreach ($product as $value) {
        $filter=$this->My_model->select_where('product_filter',array('prod'=>$value['prod_gold_id'],'status'=>'active'));
        $cat_id=$this->My_model->select_where('category',array('status'=>'active'));
        $group_id=$this->My_model->select_where('product_group',array('status'=>'active'));
        ?>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    
                    <form action="<?=base_url();?>Madmin/silver_product_list_update_information" method="post">
                        <div class="row">
                            <div class="col-md-3 mt-2">
                                <label class="form-label font-weight-bold text-danger text-uppercase">Category :-</label>
                                <input type="hidden" name="prod_gold_id" value="<?=$value['prod_gold_id'];?>">
                                <select name="cat_id" class="form-select">
                                    <?php foreach($cat_id as $catvalue) { ?>
                                    <?php if($catvalue['category_id']==$value['cat_id']){ ?>
                                    <option value="<?=$catvalue['category_id']?>" selected><?=$catvalue['category_name']?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <div class="col-md-3 mt-2">
                                <label class="form-label font-weight-bold text-danger text-uppercase">Group :-</label>
                                <select name="group_id" class="form-select">
                                    <?php foreach($group_id as $groupvalue) { ?>
                                    <option value="<?=$groupvalue['product_group_id']?>" <?php if($groupvalue['product_group_id']==$value['group_id']) { echo "selected"; } ?>><?=$groupvalue['product_group_name']?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="col-md-3 mt-2">
                                <label class="form-label font-weight-bold text-danger text-uppercase">Billing Type :-</label>
                                <select name="billing_type" class="form-select" id="billing_type">
                                    <option><?=$value['billing_type'];?></option>
                                </select>
                                <h2></h2>
                            </div>
                            <div class="col-md-3 mt-2">
                                <label class="form-label form-label">Purity </label>
                                <select name="purity" class="form-select" onchange="silverratefecth(this)" id="purity" required>
                                    <option value="">Choose purity</option>
                                    <option value="50" <?php if($value['purity']=="50"){ echo "selected";}?>>50 %</option>
                                    <option value="70" <?php if($value['purity']=="70"){ echo "selected";}?>>70 %</option>
                                    <option value="85" <?php if($value['purity']=="85"){ echo "selected";}?>>85 %</option>
                                    <option value="92.5" <?php if($value['purity']=="92.5"){ echo "selected";}?>>92.5 %</option>
                                    <option value="100" <?php if($value['purity']=="100"){ echo "selected";}?>>100 %</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mt-2">
                                <label class="form-label font-weight-bold text-danger">Product ID :-</label>
                                <input type="text" name="product_id" value="<?=$value['product_id'];?>" class="form-control">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label font-weight-bold text-danger">Product name :-</label>
                                <input type="text" name="product_name" value="<?=$value['product_name'];?>" class="form-control">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label font-weight-bold text-danger">Available Quantity:-</label>
                                <input type="number" name="product_qty" value="<?=(int)$value['product_qty'];?>" class="form-control" required>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label font-weight-bold text-danger">Product Details :-</label>
                                <input type="text" name="product_details" value="<?=$value['product_details'];?>" class="form-control">
                            </div>
                            <div class="col-md-12 mt-2 text-center">
                                <button class="btn btn-dark">Update Info</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <form action="<?=base_url();?>Madmin/silver_product_list_update_images" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-center p-1 rounded bg-primary text-white rounded-lg">All Product Images</h4>
                                        <input type="hidden" name="prod_gold_id" value="<?=$value['prod_gold_id'];?>">
                                    </div>
                                    <table class="table table-reponsive table-bordered text-center">
                                    <?php
                                    $aa=explode('||',$value['product_image']);
                                    $i=1;
                                    if(count($aa)>0) {
                                    foreach($aa as $imgvalue) {
                                    $iimg=base_url().'uploads/'.$imgvalue;
                                    ?>
                                    <tr>
                                        <td>
                                            <button class="btn btn-danger btn-sm my-2" type="button" onclick="deleteimg(<?=$value['prod_gold_id'];?>,'<?=$imgvalue?>')"><i class="fa fa-trash"></i></=>
                                        </td>
                                        <td>
                                            <img src="<?=$iimg;?>" style="height:80px;width:80px;object-fit:contain">
                                        </td>
                                        <td>
                                            <input type="file" name="upimg[]" class="form-control">
                                            <input type="hidden" name="upimage[]" class="form-control" value="<?=$imgvalue;?>">
                                        </td>
                                
                                    </tr>

                                    <?php 
                                    }
                                    }
                                    else{
                                        ?>
                                        <tr>
                                            <th class="text-center" colspan="20">
                                                No Record Found
                                            </th>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </table>
                            </div>
                        </div>
                        <div class="col-md-12 text-center mt-1">
                            <button class="btn btn-dark">Update Image</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url();?>Madmin/silver_product_list_update_new_images" method="post" enctype="multipart/form-data">
                        <div class="row" style="">
                            <div class="col-md-12 p-2">
                                <h4 class="bg-primary text-white rounded p-1 text-center">Add New Images</h4>
                                <input type="hidden" name="prod_gold_id" value="<?=$value['prod_gold_id'];?>">
                                <input type="file" name="newupimg[]" id="newImages" class="form-control" multiple accept="image/*">
                            </div>
                            <div class="col-md-12 p-2" id="imagePreviewContainer"></div>
                            
                            <script>
                                document.getElementById('newImages').addEventListener('change', function(event) {
                                    let previewContainer = document.getElementById('imagePreviewContainer');
                                    previewContainer.innerHTML = ''; // Clear previous previews
                            
                                    let files = event.target.files;
                                    if (files.length > 0) {
                                        for (let i = 0; i < files.length; i++) {
                                            let file = files[i];
                            
                                            if (file.type.startsWith('image/')) { // Check if it's an image
                                                let reader = new FileReader();
                                                reader.onload = function(e) {
                                                    let imgElement = document.createElement('img');
                                                    imgElement.src = e.target.result;
                                                    imgElement.style.width = '100px';
                                                    imgElement.style.margin = '5px';
                                                    imgElement.style.borderRadius = '5px';
                                                    imgElement.style.boxShadow = '0 0 5px rgba(0,0,0,0.2)';
                                                    previewContainer.appendChild(imgElement);
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        }
                                    }
                                });
                            </script>
                            <div class="col-md-12 text-center mt-1">
                                <button class="btn btn-dark">Add New Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                        <?php
                        if($value['billing_type']=="manual"){
                            ?>
                            <div class="row">
                                <?php $price=$this->db->query("SELECT * from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0]; ?>
                                    <?php if($value['billing_type']=="manual") { ?>			
                                <?php $price=$this->db->query("SELECT * from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0]; ?>
                                <div class="col-md-12 mt-3"  style="border-right: 1px solid black;border-left: 1px solid black;border-top: 1px solid black;border-bottom: 1px solid black;padding-top: 15px;padding-bottom: 15px;">
                                <form action="<?=base_url();?>Madmin/silver_product_list_update_billing" method="post" enctype="multipart/form-data">
                                    <h2 class="font-weight-bold text-white text-center bg-primary rounded">Billing Data </h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label ">Todays Rate :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="hidden" name="prod_gold_id" value="<?=$value['prod_gold_id'];?>">
                                                <input type="text" name="silver_rate" id="silver_rate_fetch" class="bg-danger disabled chartinput" value="<?=$price['silver_amt'];?>" readonly>
                                                <span class="chartspan">₹</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Gross Weight :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="cross_weight" onkeyup="net_weight_check()" id="cross_weight" class="chartinput" value="<?=$value['cross_weight'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                <span class="chartspan"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Other Weight :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="other_weight" onkeyup="net_weight_check()" id="other_weight" class="chartinput" value="<?=$value['other_weight'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                <span class="chartspan"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 pt-2 pb-2 bg-warning"  style="border-top: 1px solid grey;">
                                        <div class="col-md-6 text-right"><label class="form-label " style="color: black;line-height: 25px;vertical-align: middle;">Net Weight :-</label></div>
                                        <div class="col-md-6">						
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="net_weight" id="net_weight" class="bg-danger disabled chartinput" value="<?=$value['net_weight'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  readonly>
                                                <span class="chartspan"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">					
                                        <div class="col-md-12">
                                            <label class="form-label ">Metal Amount :-</label>
                                            <?php $mmamt=$price['silver_amt']/10*$value['net_weight'];?>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="metal_amt" id="metal_amt" class="chartinput disabled" value="<?=$data->float_rate_check($mmamt,3,'.','');?>" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required readonly>
                                                <span class="chartspan">₹</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Labour amt(p/g) :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="labour_char" onkeyup="net_weight_check(this)" id="labour_char" class="chartinput" value="<?=$value['labour_char'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                <span class="chartspan">-</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label ">Labour Tot Amt :-</label>
                                            <?php (float)$lamtt=$value['net_weight']*(float)$value['labour_char'];?>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="labour_amt"  id="labour_amt" class="bg-danger disabled chartinput" value="<?=$data->float_rate_check($lamtt,3,'.','');?>" readonly>
                                                <span class="chartspan" >₹</span>
                                            </div>
                                        </div>   
                                        <div class="col-md-6">
                                            <label class="form-label ">Wastage Per(%) :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="wastage_per" onkeyup="net_weight_check(this)" id="wastage_per" class="chartinput" value="<?=$value['wastage_per'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                <span class="chartspan">%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <?php 
                                            $p=$price['silver_amt']/10*$value['net_weight'];
                                            $mtl=$p*$value['wastage_per']/100;
                                            ?>
                                            <label class="form-label ">Wastage Amount :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="wastage_amt"  id="wastage_amt" class="bg-danger disabled chartinput" value="<?=$data->float_rate_check($mtl,3,'.','');?>" readonly>
                                                <span class="chartspan">₹</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="other_data">
                                            <table class="w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Other Desc</th>
                                                        <th>Other Amount</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="add_tbody">
                                                    <?php $amt=0; $ooii=0; foreach($product_gold_other_price_det as $value1) {
                                                        $amt+=$value1['other_amt_det'];
                                                    ?>
                                                    <tr>
                                                        <td>
                                                    <input type="hidden" name="product_gold_other_price_det_id" class="chartinput"  placeholder="Other Desc..." value="<?=$value1['product_gold_other_price_det_id'];?>" >
                                                    <input type="text" name="other_desc_det1[]" class="chartinput"  placeholder="Other Desc..." value="<?=$value1['other_desc_det'];?>" >
                                                        </td>
                                                        <td>
                                                    <input type="text" name="other_amt_det1[]" class="chartinput other_amt_class" onkeyup="get_total_other_amt()" placeholder="Other Amt..." value="<?=$value1['other_amt_det'];?>">
                                                        </td>
                                                        <td>
                                                            <?php if($ooii==0) { ?>
                                                            <labelutton tyform-label pe="button" onclick="add_row()"><i class="fa fa-plus"></i></labelutton>
                                                            <?php $ooii++; } ?>
                                                            <labelutton tyform-label pe="button" onclick="delete_other_row(<?=$value1['product_gold_other_price_det_id'];?>,<?=$value1['product_gold_id'];?>)"><i class="fa fa-trash"></i></labelutton>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>												
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row p-3">
                                                <div class="col-md-6 text-right">
                                                    <span class="d-inline-block mt-1" style="color:black;font-weight:bold;">Other Total Amount :-</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="other_amt" onkeyup="net_weight_check()" id="other_amt" class="chartinput" value="<?=$amt;?>" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" value="0">
                                                    <span class="chartspan">₹</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label ">GST :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <select name="gst_per" id="gst_per" class="chartinput" onchange="net_weight_check()">
                                                    <option value="<?=$value['gst_per']?>"><?=$value['gst_per']?> %</option>
                                                    <?php foreach ($gst as $value) {
                                                        if ($value['gst_per']!=$value['gst_label']){
                                                    ?>
                                                        <option value="<?=$value['gst_label'];?>"><?=$value['gst_label'];?></option>
                                                    <?php } } ?>
                                                </select>
                                                <span class="chartspan">%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                                $tott=$mtl+$p+$amt+$lamtt;;
                                                $gst=$tott*$value['gst_per']/100;
                                                $nettotal=$tott+$gst;
                                                ?>
                                            <label class="form-label ">GST Amount :-</label>
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="gst_amt" id="gst_amt" class="bg-danger disabled chartinput" value="<?=$data->float_rate_check($gst,3,'.','');?>" readonly>
                                                <span class="chartspan">₹</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 pt-2 pb-2 bg-warning"  style="border-top:1px solid grey;">
                                        <div class="col-md-6 text-right"><label class="form-label " style="color:black;line-height:25px;vertical-align:middle;">Total Amount :- </label></div>
                                        <div class="col-md-6">						
                                            <div class="col-md-12 p-0 m-0">
                                                <input type="text" name="total_amt" id="total_amt" onkeyup="net_weight_check()" class="bg-danger disabled chartinput" value="<?=$data->float_rate_check($nettotal,3,'.','');?>" readonly>
                                                <span class="chartspan">₹</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 pt-2 pb-2 text-center"  style="border-top:1px solid grey;">
                                        <div class="col-md-12 ">
                                            <button class="btn btn-dark">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>			
                            <?php } ?>
                        <?php }else if($value['billing_type'] == 'fixed'){ ?>
                            <h4 class="font-weight-bold text-white bg-primary rounded text-center p-2">Filter List</h4>
                            <table class="table table-warning table-striped table-bordered text-center">
                                <tr>
                                    <td class="text-danger">Category</td>
                                    <td class="text-danger">Group</td>
                                    <td class="text-danger">Filter Title</td>
                                    <td class="text-danger">Filter Name</td>
                                </tr>
                                <?php foreach ($filter as $value) {
                                $category=$this->My_model->select_where('category',array('category_id'=>$value['cat'],'status'=>'active'));
                                $product_group=$this->My_model->select_where('product_group',array('product_group_id'=>$value['group_id'],'status'=>'active'));
                                $filter_title=$this->My_model->select_where('filter_title',array('filter_title_id'=>$value['filter_title'],'status'=>'active'));
                                $filter_name=$this->My_model->select_where('filter_name',array('filter_name_id'=>$value['filter_name'],'status'=>'active'));
                                ?>
                                <tr>
                                    <td><?=$category[0]['category_name'];?></td>
                                    <td><?=$product_group[0]['product_group_name'];?></td>
                                    <td><?=$filter_title[0]['filter_title'];?></td>
                                    <td><?=$filter_name[0]['filter_name'];?></td>
                                </tr>
                            <?php } ?>
                            </table>
                        <?php } ?>
                    

                        </div>
                    </div>
                </div>
       

        <?php } ?>
    </div>
</div>

<style type="text/css">
	#ratechart{
		display:none;
	}
</style>
<style type="text/css">
	.chartspan{
		position: absolute;right: 0px;background-color:grey;display:inline-block;height:25px;line-height:25px; vertical-align:middle;width:25px;text-align:center;border-radius:1px;color: black;
	}
	.chartinput{
		width: 100%; text-align: right;background-color:lavender;border: 1px solid black;height: 25px; padding-right:28px;color: black;
	}
	select:focus,input:focus,textarea:focus{
		border:2px solid red;
	}
</style>
<script type="text/javascript">
	function silverratefecth(purity)
{
	var billing_type=$('#billing_type').val();
	var purity1=purity.value;
	if (purity1=="") {
       $('#silver_rate_fetch').val('');
       $('#ratechart').css('display','none'); 
       $('#cross_weight').val('0');
       $('#other_weight').val('0');
       $('#net_weight').val('0');
       $('#labour_char').val('0');
       $('#labour_amt').val('0');
       $('#wastage_per').val('0');
       $('#wastage_amt').val('0');
       $('#other_amt').val('0');
       $('#gst_per').val('0');
       $('#gst_amt').val('0');
       $('#total_amt').val('0');          	
	}
	$.ajax({
        url : "<?=base_url()?>madmin/silverratefecth",
        type : 'POST',
        data : {purity_id:purity.value},
        dataType : 'json'
        }).done(function(res){
        	var opt="";
        	$.each(res, function(key,val){
        	  if(billing_type=='manual'){		
        	       $('#silver_rate_fetch').val(val);
            	   var price=val;
            	   $('#ratechart').css('display','inline-block');
		           var net_weight=$('#net_weight').val();
		           var metal_amt1=Number(price/10);
		           var metal_amt123=call1(metal_amt1*Number(net_weight));
		           $('#metal_amt').val(metal_amt123);
		           var labour_char=$('#labour_char').val();
				   var labamt=call1(Number(labour_char)*net_weight);
		           $('#labour_amt').val(labamt);
		           var wastage_per=$('#wastage_per').val();
	 			   var wastamt=call1(metal_amt123*Number(wastage_per)/100);
		           $('#wastage_amt').val(wastamt);
		           var other_amt=$('#other_amt').val();
				   var net_amt=Number(metal_amt123)+Number(labamt)+Number(wastamt)+Number(other_amt);
		           var gst_per=$('#gst_per').val();
	               var gstamt1=call1(net_amt*Number(gst_per)/100);
	 			   var tot=call1(net_amt+gstamt1);
		           $('#gst_amt').val(gstamt1);
		           $('#total_amt').val(tot);            	  	
            	}
            	  
            	});
            });
	}

	function billingtype(type){
	 var typ=type.value;
	 if(typ=='manual'){
	   $('#ratechart').css('display','inline-block');
	   $('#fixedbilling').css('display','none');
	   $('#cross_weight').val('0');
       $('#other_weight').val('0');
       $('#net_weight').val('0');
       $('#labour_char').val('0');
       $('#labour_amt').val('0');
       $('#wastage_per').val('0');
       $('#wastage_amt').val('0');
       $('#other_amt').val('0');
       $('#gst_per').val('0');
       $('#gst_amt').val('0');
       $('#total_amt').val('0');
	 }
	 else{
	 $('#ratechart').css('display','none');
	 $('#fixedbilling').css('display','inline-block');
	 $('#fixed_amount').val('0');
     $('#fixed_gst_per').val('0');
     $('#fixed_gst_amt').val('0');
     $('#fixed_total_amt').val('0');
	 }
	}

	function delete_other_row(other_id,prod_id) {
		if(confirm("Are Your Sure Delete Other Amount Row...")){
		$.ajax({
        url : "<?=base_url()?>madmin/gold_product_list_update_del_other",
        type : 'POST',
        data : {other_id:other_id,prod_id:prod_id},
        dataType : 'json'
        }).done(function(res){
        	if (res=="success"){
        	window.location.reload()
        	}
        });
       }
	}

</script>
<script type="text/javascript">
	function net_weight_check(a="no"){
	var cross_weight1=$('#cross_weight').val();
	var other_weight1=$('#other_weight').val();
	var silver_rate_fetch1=$('#silver_rate_fetch').val();
	var net_weight_cal=(Number(cross_weight1)-Number(other_weight1)).toFixed(2);
	$('#net_weight').val(net_weight_cal);
	var metal_amt1=(Number(silver_rate_fetch1)/10)*net_weight_cal;
	var metal_amt2=metal_amt1.toFixed(3);
	var metal_amt3=call1(metal_amt2);
	$('#metal_amt').val(metal_amt3);
	if (a!="no") {
		if (a.id=='labour_char' && a.value>0) {
	   $('#wastage_per').val('0');
	   $('#wastage_amt').val('0');
		}
		if (a.id=='wastage_per' && a.value>0){
		 $('#labour_char').val('0');
	     $('#labour_amt').val('0');
		}
	}
	labour_char_cal();
	wastage_per_cal();
	gst();
	}
	function call1(num){
	var aa=num.toString().split(".")[0];
	var ab=num.toString().split(".")[1];
	if (ab>=100) {
	 num=parseInt(num)+1;
	}
	else{
	 num=parseInt(num);
	}
	return num;
	}
	function labour_char_cal(){
	var labour_char1=$('#labour_char').val();
	var nwt=$('#net_weight').val();
	var ntot=Number(nwt)*Number(labour_char1).toFixed(3);
	var labour_char_cal2=call1(ntot);
	$('#labour_amt').val(labour_char_cal2);
	}
	function wastage_per_cal(){
	var labour_char1=$('#labour_char').val();
	var wastage_per1=$('#wastage_per').val();
	var metal_amt1=$('#metal_amt').val();
	var wastage_per_cal1=((metal_amt1*wastage_per1/100)).toFixed(3);
	var wastage_per_cal2=call1(wastage_per_cal1);
	$('#wastage_amt').val(wastage_per_cal2);
	}
	function gst(){
	var labour_amt1=$('#labour_amt').val();
	var wastage_amt1=$('#wastage_amt').val();
	var other_amt1=$('#other_amt').val();
	var metal_amt11=$('#metal_amt').val();
	var gst_per1=$('#gst_per').val();
	var tot=Number(labour_amt1)+Number(wastage_amt1)+Number(other_amt1)+Number(metal_amt11);
	var gstamt1=((tot*gst_per1/100)).toFixed(3);
	var gstamt2=call1(gstamt1);
	$('#gst_amt').val(gstamt2);
	var finaltot=Number(tot)+Number(gstamt2);
	var finaltot1=call1(finaltot);
	$('#total_amt').val(finaltot1);
	}
	function fixed_billing_cal(){
	var fixed_amount11=$('#fixed_amount').val();
	var fixed_gst_per1=$('#fixed_gst_per').val();
	var gstamt1=((fixed_amount11*fixed_gst_per1/100)).toFixed(3);
	var gstamt2=call1(gstamt1);
	$('#fixed_gst_amt').val(gstamt2);
	var finaltot=Number(fixed_amount11)+Number(gstamt2);
	var finaltot1=call1(finaltot);
	$('#fixed_total_amt').val(finaltot1);
	}
</script>

<script type="text/javascript">
	function add_row()
	{
		var rr='<tr><td><input type="text" name="other_desc_det[]" class="chartinput"  placeholder="Other Desc..." ></td><td><input type="text" name="other_amt_det[]" class="chartinput other_amt_class"  placeholder="Other Amt..." onkeyup="get_total_other_amt()"></td><td  onclick="remove_row(this)" class="" style="cursor:pointer;"><div class="bg-danger text-white text-center "><i class="fa fa-close"></i></div></td></tr>';
		$("#add_tbody").append(rr);
	}
	function remove_row(a)
	{ 
		a.closest("tr").remove();
		get_total_other_amt();
	}
	function get_total_other_amt()
	{
		var otc=document.getElementsByClassName('other_amt_class');
		var ttl=0;
		for(var i=0;i<otc.length;i++)
		{
			ttl=Number(ttl)+Number(otc[i].value);
		}
		$("#other_amt").val(ttl);
		net_weight_check();
	}
	function show_inner_span(a)
	{
		if(a.getElementsByTagName('span')[0].style.display=='')
		a.getElementsByTagName('span')[0].style.display='none';
		else
			a.getElementsByTagName('span')[0].style.display='';
	}
	function deleteimg(pr_id,img_name)
	{
		$.ajax({
        url : "<?=base_url()?>madmin/remove_product_image",
        type : 'POST',
        data : {pr_id:pr_id,img_name:img_name},
        dataType : 'json'
        }).done(function(res){
        	if (res=="success"){
        	window.location.reload()
        	}
        });
	}
</script>
