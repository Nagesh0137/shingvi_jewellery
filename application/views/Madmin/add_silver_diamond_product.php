

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Add New Silver + Diamond Product</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>Madmin/add_silver_diamond_product_save" method="post" enctype="multipart/form-data">
                        <div class="row">
                                
                                <div class="col-md-3 mt-2">
                                    <label class="form-label">Category:</label>
                                    <select name="cat_id" onchange="group_name(this)" id="category_id"  class="form-select" required>
                                        <option value="">Category</option>
                                        <?php foreach($category as $value) {
                                            if(strtolower(trim($value['category_name']))=='diamond') {
                                        ?>
                                        <option value="<?=$value['category_id'];?>"><?=$value['category_name'];?></option>
                                        <?php }  } ?>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label class="form-label"> Group </label>
                                    <select name="group_id" class="form-select" id="group_id" required>
                                        <option value=""> Group List </option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-none">
                                    <label class="form-label">Filter Title</label>
                                    <select name="filter_title" class="form-select" onchange="filtername(this)" id="filter_title_id" hidden>
                                        <option value="">Filter Title List </option>
                                        <option value="none">None</option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-none">
                                    <label class="form-label">Filter Name </label>
                                    <select name="filter_name" class="form-select" id="filter_name_id" hidden>
                                        <option value="">Filter Name List  </option>
                                        <option value="none">None</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-3 mt-2">
                                    <label class="form-label">Billing Type</label>
                                    <select name="billing_type" class="form-select" onchange="billingtype(this)" id="billing_type" required>
                                        <option value="">Choose Type</option>
                                        <option value="manual">Manual</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label class="form-label">Purity </label>
                                    <select name="purity" class="form-select" onchange="silverratefecth(this)" id="purity" required>
                                        <option value="">Choose purity</option>
                                        <option value="50">50 %</option>
                                        <option value="70">70 %</option>
                                        <option value="85">85 %</option>
                                        <option value="92.5">92.5 %</option>
                                        <option value="100">100 %</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Product ID</label>
                                    <input type="text" name="product_id"  required class="form-control" placeholder="Enter Product ID...">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Enter Product name</label>
                                    <input type="text" name="product_name"  required class="form-control" placeholder="Enter Product name">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Available Qty</label>
                                    <input type="number" name="product_qty"  required class="form-control" placeholder="Enter Product ID..." value="0">
                                </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Select Product Images</label>
                                <input type="file" name="product_images[]"  required class="form-control" multiple>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Enter Product Details</label>
                                <textarea name="product_details" class="form-control" rows="2" ></textarea>
                            </div>
                            <div class="col-md-6 mt-2">
                                    <label class="form-label">Ref. Product</label>
                                    <input type="text" name="product_ref"  required class="form-control" placeholder="Enter Product Ref.">
                            </div>
                            <div class="col-md-6 mt-2">
                                    <label class="form-label">Certificate No</label>
                                    <input type="text" name="certificate_no"  required class="form-control" placeholder="Enter Certificate No">
                            </div>
                            <div class="col-md-6 mt-2">
                                    <label class="form-label">Style No</label>
                                    <input type="text" name="style_no"  required class="form-control" placeholder="Enter Style No">
                            </div>
                            <div class="col-md-6 mt-2">
                                    <label class="form-label">Vendor Size</label>
                                    <input type="text" name="vendor_size"  required class="form-control" placeholder="Enter Vendor Size">
                            </div>
                            <div class="col-md-6 mt-2">
                                    <label class="form-label">Design</label>
                                    <input type="text" name="design"  required class="form-control" placeholder="Enter Design">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-12 mt-3" id="ratechart" style="border-right: 1px solid black;border-left: 1px solid black;border-top: 1px solid black;border-bottom: 1px solid black;padding-top: 15px;padding-bottom: 15px;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="">Todays Rate(10g)</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="silver_rate" id="silver_rate_fetch" class="bg-danger disabled chartinput" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="">Gross Weight</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="cross_weight" onkeyup="net_weight_check()" id="cross_weight" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="">Other Weight</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="other_weight" onkeyup="net_weight_check()" id="other_weight" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="" style="color: black;line-height: 25px;vertical-align: middle;">Net Weight:</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="net_weight" id="net_weight" class="bg-warning disabled chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  readonly>
                                            <span class="chartspan"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 pt-2 pb-2 bg-warning"  style="border-top: 1px solid grey;">
                                    <div class="col-md-6 text-right"><b class="" style="color: black;line-height: 25px;vertical-align: middle;">Metal Amount</b></div>
                                    <div class="col-md-6">						
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="metal_amt" id="metal_amt" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">					
                                    <div class="col-md-3">
                                        <label class="">Labour Amt(p/g)</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="labour_char" onkeyup="net_weight_check(this)" id="labour_char" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan">-</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="">Labour Tot Amt</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="labour_amt"  id="labour_amt" class="bg-warning disabled chartinput" value="0" readonly>
                                            <span class="chartspan" >₹</span>
                                        </div>
                                    </div>   
                                    <div class="col-md-3">
                                        <label class="">Wastage Per(%)</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="wastage_per" onkeyup="net_weight_check(this)" id="wastage_per" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan">%</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="">Wastage Amount</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="wastage_amt"  id="wastage_amt" class="bg-warning disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 bg-warning mt-2" id="other_data">
                                        <table class="w-100 mt-1">
                                            <thead>
                                                <tr>
                                                    <th class="font-weight-bold text-uppercase text-dark">Other Desc</th>
                                                    <th class="font-weight-bold text-uppercase text-dark">Other Amount</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="add_tbody">
                                                <tr>
                                                    <td>
                                                <input type="text" name="other_desc_det[]" class="chartinput"  placeholder="Other Desc..." >
                                                    </td>
                                                    <td>
                                                <input type="text" name="other_amt_det[]" class="chartinput other_amt_class" onkeyup="get_total_other_amt()" placeholder="Other Amt..." value="0">
                                                    </td>
                                                    <td>
                                                        <labelutton type="button" class="" onclick="add_row()"><i class="fa fa-plus"></i></labelutton>
                                                    </td>
                                                </tr>				
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 bg-warning">
                                        <div class="row p-3">
                                            <div class="col-md-8 text-right">
                                                <span class="d-inline-block mt-1" style="color: black;text-transform:uppercase;font-weight:bold;color:red;">Other Total Amt</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="other_amt" onkeyup="net_weight_check()" id="other_amt" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value=this.value.replace(/(\..*)\./g, '$1');" value="0">
                                                <span class="chartspan">₹</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-2 mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <label class="">Stone Rates</label>
                                                <div class="col-md-12 p-0 m-0">
                                                    <input type="text" name="stone_rate" id="stone_rate" class="bg-warning disabled chartinput" value="<?=$rate_diamond['diamond_amt'];?>" readonly>
                                                    <span class="chartspan">₹</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="border:1px solid black;padding:20px 10px 20px 10px;">
                                        <div class="row">
                                            <div class="col-md-3">
                                            <label class="">Stone Type</label>
                                            <select  name="stone_type_id" id="stone_type" class="chartinput">
                                                <option value="" selected disabled>Select Type</option>
                                                <?php foreach($stone_type as $tvalue) { ?>
                                                    <option value="<?=$tvalue['stone_type_id'];?>"><?=$tvalue['stone_type_name'];?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                            <div class="col-md-3">
                                            <label class="">Stone Shape</label>
                                            <select name="stone_shape_id" id="stone_shape" class="chartinput">
                                                <option>Select Shape</option>
                                                <?php foreach($stone_shape as $svalue) { ?>
                                                    <option value="<?=$svalue['stone_shape_id'];?>"><?=$svalue['stone_shape_name'];?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                            <div class="col-md-3">
                                            <label class="">Stone Color</label>
                                            <div class="col-md-12 p-0 m-0">
                                            <select class="w-100 pt-1 pb-1" name="stone_color_id" id="stone_color" onchange="stonerate();">
                                                <option value="0">Choose Color</option>
                                                <?php foreach($diamond_color as $dcolor) { ?>
                                                    <option value="<?=$dcolor['diamond_color_id'];?>"><?=$dcolor['diamond_color'];?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label class="">Diamond Clarity</label>
                                            <div class="col-md-12 p-0 m-0">
                                            <select class="w-100 pt-1 pb-1" name="stone_clarity1" id="stone_clarity" onchange="stonerate();">
                                                <option value="0">Choose Clarity</option>
                                                <?php foreach($diamond_clarity as $dcolor) { ?>
                                                    <option value="<?=$dcolor['diamond_clarity_id'];?>"><?=$dcolor['diamond_clarity'];?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                            <label class="">Stone PCS</label>
                                            <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="stone_pcs1" id="stone_pcs" class="chartinput" value="0">
                                            <span class="chartspan">-</span>
                                            </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label class="">Stone Caret</label>
                                            <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="stone_caret1" id="stone_caret" onkeyup="stonerate();" class="chartinput" value="0">
                                            <span class="chartspan">-</span>
                                            </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label class="">Wt (Gms)</label>
                                            <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="wt_gms1" id="wt_gms" class="disabled chartinput" value="0">
                                            <span class="chartspan">-</span>
                                            </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label class="">Rate</label>
                                            <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="stone_total1" id="stone_amt" class="disabled chartinput" value="0">
                                            <span class="chartspan">-</span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12 text-center">
                                                <labelutton type="button" class="btn btn-warning" onclick="addstonedetails()"><b>Add Stone</b></labelutton>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-12 mt-2 mb-2 table-responsive">
                                            <table class="w-100 table-bordered">
                                                <thead>
                                                <tr>
                                                    <th class="font-weight-bold">Stone</th>
                                                    <th class="font-weight-bold">Shape</th>
                                                    <th class="font-weight-bold">Color</th>
                                                    <th class="font-weight-bold">Quality</th>
                                                    <th class="font-weight-bold">PCS</th>
                                                    <th class="font-weight-bold">Caret</th>
                                                    <th class="font-weight-bold">Wt (Gms)</th>
                                                    <th class="font-weight-bold">Rate</th>
                                                    <th class="font-weight-bold"></th>
                                                </tr>
                                                </thead>
                                                <tbody id="stone_data">
                                                
                                                </tbody>
                                            </table>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="">GST</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <select name="gst_per" id="gst_per" class="chartinput" onchange="net_weight_check()">
                                                <option value="0">0</option>
                                                <?php foreach ($gst as $value) { ?>
                                                    <option value="<?=$value['gst_label'];?>"><?=$value['gst_label'];?></option>
                                                <?php } ?>
                                            </select>
                                            <!-- <input type="text"  onkeyup="" id="gst_per"  value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> -->
                                            <span class="chartspan">%</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="">GST Amount</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="gst_amt" id="gst_amt" class="bg-warning disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>					
                                </div>
                                <div class="row mt-3 pt-2 pb-2 bg-warning"  style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class="" style="color:black;line-height:25px;vertical-align:middle;">Total Amount: </b></div>
                                    <div class="col-md-6">						
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="total_amt" id="total_amt" onkeyup="net_weight_check()" class="bg-warning disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mt-3" id="fixedbilling" style="border-right: 1px solid black;border-left: 1px solid black;border-top: 1px solid black;border-bottom: 1px solid black;padding-top: 15px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="">Todays Rate(10g)</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="silver_rate1" id="silver_rate_fetch1" class="bg-danger disabled chartinput" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="">Amount</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="fixed_amount" id="fixed_amount" onkeyup="fixed_billing_cal()" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="">GST(%)</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <select name="fixed_gst_per" id="fixed_gst_per" class="chartinput" onchange="fixed_billing_cal()">
                                                <option value="0">0</option>
                                                <?php foreach ($gst as $value) { ?>
                                                    <option value="<?=$value['gst_label'];?>"><?=$value['gst_label'];?></option>
                                                <?php } ?>
                                            </select>
                                            <span class="chartspan">%</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="">GST Amt</label>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="fixed_gst_amt" id="fixed_gst_amt" onkeyup="fixed_billing_cal()" class="bg-warning disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 pt-2 pb-2 bg-warning"  style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class="" style="color:black;line-height:25px;vertical-align:middle;">Total Amount: </b></div>
                                    <div class="col-md-6">						
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="fixed_total_amt" id="fixed_total_amt" class="bg-warning disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right mt-3 pr-0">
                                <button class="btn btn-primary" type="submit">SAVE PRODUCT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
function addstonedetails(){
var stone_type1=$('#stone_type').val();
var stone_shape1=$('#stone_shape').val();
var stone_color1=$('#stone_color').val();
var stone_clarity1=$('#stone_clarity').val();
var stone_pcs1=$('#stone_pcs').val();
var stone_caret1=$('#stone_caret').val();
var wt_gms1=$('#wt_gms').val();
var stone_amt1=$('#stone_amt').val();
if((stone_pcs1==null || stone_pcs1==0) && (stone_caret1==null || stone_caret1==0) && (wt_gms1==null || wt_gms1==0) && (stone_amt1==null || stone_amt1==0)){
	alert("Not Pass Empty value");
}
else{
$.ajax({
    url : "<?=base_url()?>madmin/stone_data_fetch",
    type : 'POST',
    data : {stone_type:stone_type1,stone_shape:stone_shape1,stone_color:stone_color1,stone_clarity:stone_clarity1},
    dataType : 'json'
    }).done(function(res){
    	var stone_type12=res.stone_type.stone_type_name;
    	var stone_shape12=res.stone_shape.stone_shape_name;
    	var stone_color12=res.color.diamond_color;
    	var stone_clarity12=res.clarity.diamond_clarity;
var da='<tr class="w-100"><th><input type="text" name="stone_type_id[]" value="'+stone_type1+'" class="p-0 w-75" hidden readonly placeholder="S Type"><input type="text" name="stone_type_name[]" value="'+stone_type12+'" class="p-0 w-75"  readonly placeholder="S Type"></th><th><input type="text" name="stone_shape_id[]" value="'+stone_shape1+'" class="p-0 w-75" hidden readonly placeholder="S Shape"><input type="text" name="stone_shape_name[]" value="'+stone_shape12+'" class="p-0 w-75"  readonly placeholder="S Shape"></th><th><input type="text" name="stone_color_id[]" value="'+stone_color1+'" class="p-0 w-75" hidden readonly placeholder="S Color"><input type="text" name="stone_color_name[]" value="'+stone_color12+'" class="p-0 w-75"  readonly placeholder="S Color"></th><th><input type="text" name="stone_quality_id[]" value="'+stone_clarity1+'" class="p-0 w-75" hidden readonly placeholder="S Quality"><input type="text" name="stone_quality_name[]" value="'+stone_clarity12+'" class="p-0 w-75"  readonly placeholder="S Quality"></th><th><input type="text" name="stone_pcs[]" value="'+stone_pcs1+'" class="p-0 w-75" readonly placeholder="S PCS"></th><th><input type="text" name="stone_caret[]" value="'+stone_caret1+'" class="p-0 w-75 scaret"  readonly placeholder="S Caret"></th><th><input type="text" name="stone_wt[]" value="'+wt_gms1+'" class="p-0 w-75" readonly placeholder="S Wt (Gms)"></th><th><input type="text" name="stone_amt[]" value="'+stone_amt1+'" class="p-0 w-75 samt" readonly placeholder="S Rate"></th><th style="width:10px;"><button class="btn btn-danger btn-sm" type="button" onclick="removeaddstonedetails(this,'+stone_caret1+')"><i class="fa fa-times"></i></button></th></tr>';
$('#stone_data').append(da);
$('#stone_pcs').val("0");
$('#stone_caret').val("0");
$('#wt_gms').val("0");
$('#stone_amt').val("0");
scaret_other_wt(stone_caret1);
 });
}
}
function removeaddstonedetails(a,caret)
{ 
var owt=$('#other_weight').val();
var scar=Number(owt)-Number(caret);
$('#other_weight').val(scar);
 a.closest("tr").remove();
 net_weight_check();	
}
function scaret_other_wt(stone_caret1){
// var sum = 0;
// $('.scaret').each(function()
// {
//     sum += parseFloat($(this).val());
// });
var owt=$('#other_weight').val();
var scar=Number(stone_caret1)+Number(owt);
$('#other_weight').val(scar);
net_weight_check();
}
</script>
<script type="text/javascript">
	function stonerate(){
	var stone_rate1=$('#stone_rate').val();
	var stone_color1=$('#stone_color').val();
	var stone_clarity1=$('#stone_clarity').val();
	var stone_caret1=$('#stone_caret').val();
	var wt_gms1=$('#wt_gms').val();
	var cla=0;
	var col=0;
	if(stone_color1!=0 && stone_clarity1!=0){
	$.ajax({
            url : "<?=base_url()?>madmin/stone_rate_fetch",
            type : 'POST',
            data : {stone_color:stone_color1,stone_clarity:stone_clarity1},
            dataType : 'json'
            }).done(function(res){
            	cla=res.clarity.dec_amt;
            	col=res.color.dec_amt;
            	var srate=(Number(stone_rate1)/1)*stone_caret1;
            	var wtgms=((stone_caret1)*2);
            	var clarate=((srate*cla/100));
                var colrate=((srate*col/100));
                var stotal=Number(srate)-Number(clarate)-Number(colrate);
	             $('#wt_gms').val(wtgms);
	             $('#stone_amt').val(stotal);
            });
        }
        else{
        	alert("Choose Stone Color | Stone Clarity");
        }
        
	}

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
        	   $('#silver_rate_fetch1').val(val);
        	   $('#ratechart').css('display','none');
        	   $('#fixedbilling').css('display','inline-block');
        	   $('#fixed_amount').val('0');
			   $('#fixed_gst_per').val('0');
			   $('#fixed_gst_amt').val('0');
			   $('#fixed_total_amt').val('0');
        	  }
        	  
        	});
        });
}
	function  billingtype(type) {
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
</script>
<script type="text/javascript">
function group_name(cat)
{
	$.ajax({
        url : "<?=base_url()?>madmin/group_name_fetch",
        type : 'POST',
        data : {cat_id:cat.value},
        dataType : 'json'
        }).done(function(res){
        	var opt="<option value=''>Choose Group</option>";
        	$.each(res, function(key,val){
        		opt+="<option value='"+val.product_group_id+"'>"+val.product_group_name+"</option>";
        	});
        	$("#group_id").html(opt);
        });
}
function  filtertitle(group){
var cat=$('#category_id').val();
$.ajax({
        url : "<?=base_url()?>madmin/filter_title_fetch",
        type : 'POST',
        data : {cat_id:cat,group_id:group.value},
        dataType : 'json'
        }).done(function(res){
        	var opt="<option value=''>Choose Filter Title</option>";
        	    opt="<option value='none'>None</option>";
        	$.each(res, function(key,val){
        		opt+="<option value='"+val.filter_title_id+"'>"+val.filter_title+"</option>";
        	});
        	$("#filter_title_id").html(opt);
        });
}
function  filtername(title){
var cat=$('#category_id').val();
var group_id1=$('#group_id').val();
$.ajax({
        url : "<?=base_url()?>madmin/filter_name_fetch",
        type : 'POST',
        data : {cat_id:cat,group_id:group_id1,filter_tit_id:title.value},
        dataType : 'json'
        }).done(function(res){
        	var opt="<option value=''>Filter Name</option>";
        	    opt="<option value='none'>None</option>";
        	$.each(res, function(key,val){
        		opt+="<option value='"+val.filter_name_id+"'>"+val.filter_name+"</option>";
        	});
        	$("#filter_name_id").html(opt);
        });
}
</script>
<script type="text/javascript">
	function net_weight_check(a="no"){
	var cross_weight1=$('#cross_weight').val();
	var other_weight1=$('#other_weight').val();
	var silver_rate_fetch1=$('#silver_rate_fetch').val();
	var net_weight_cal=(Number(cross_weight1)-Number(other_weight1)).toFixed(2);
	// alert(net_weight_cal);
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
		if (a.id=='wastage_per' && a.value>0) {
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
	var stone_amt1=$('#stone_amt').val();
	var gst_per1=$('#gst_per').val();

var sum = 0;
$('.samt').each(function(){
    sum += parseFloat($(this).val());
});

	var tot=Number(labour_amt1)+Number(wastage_amt1)+Number(other_amt1)+Number(metal_amt11)+Number(sum);
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
	}
	function show_inner_span(a)
	{
		if(a.getElementsByTagName('span')[0].style.display=='')
		a.getElementsByTagName('span')[0].style.display='none';
		else
			a.getElementsByTagName('span')[0].style.display='';
	}
</script>


