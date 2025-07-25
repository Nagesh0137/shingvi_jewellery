<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Order Charges Apply</h4>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="<?=base_url()?>Madmin/order_charges_save" method="post" enctype="multipart/form-data" id="form1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                        <h4 class="mb-sm-0 font-size-18">Order Charges Apply</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Charges Label Name</label>
                                    <input type="text" name="charges_label" id="charges_label"  placeholder="Charges Label" required class="form-control">
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label class="form-label">Amount &#8377;</label>
                                    <input type="number" name="rate" class="form-control" id="rate" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');" required value="0">
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label class="form-label">Percent %</label>
                                    <input type="number" name="percent" class="form-control" id="percent" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');" required value="0">
                                </div>
                                <div class="col-md-12 text-center">
                                    <br>
                                    <button class="btn btn-primary">Add Charges</button>
                                </div>
                            </div>
                        </form>
                        <form action="<?=base_url()?>Madmin/order_charges_update" method="post" enctype="multipart/form-data" id="form2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                        <h4 class="mb-sm-0 font-size-18">ORDER CHARGES APPLY UPDATE</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <b>Charges Label Name</b>
                                    <input type="hidden" name="charges_id" id="charges_id1"  required class="form-control">
                                    <input type="text" name="charges_label" id="charges_label1"  placeholder="Charges Label" required class="form-control">
                                </div>
                                <div class="col-md-3 mt-2">
                                    <b>Amount &#8377;</b>
                                    <input type="text" name="rate" id="rate1" class="form-control"  oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');" required>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <b>Percent %</b>
                                    <input type="text" name="percent" id="percent1" class="form-control"  oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');" required>
                                </div>
                                <div class="col-md-12 text-center">
                                    <br>
                                    <button class="btn btn-warning"><b>Update Charges</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                <h4 class="mb-sm-0 font-size-18">Charges List</h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover table-sm">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Charges Label</th>
                                <th>Rate</th>
                                <th>Percent</th>
                                <th>Action</th>
                            </tr> 
                            <?php $i=1; foreach ($order_charges as $value) { ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$value['charges_label'];?></td>
                                <td><?=(float)$value['rate'];?> &#8377;</td>
                                <td><?=(float)$value['percent'];?> %</td>
                                <td>
                                    <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/order_charges_delete/<?=$value['charges_id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    <button class="btn btn-warning btn-sm" onclick="updatecharges('<?=$value['charges_id'];?>','<?=$value['charges_label'];?>','<?=$value['rate'];?>','<?=(float)$value['percent'];?>')"><i class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	</div>
	<style type="text/css">
		#form2{
			display:none;
		}
	</style>
<script type="text/javascript">
function updatecharges(charges_id,charges_label,rate,percent){
	$('#charges_id1').val(charges_id);
    $('#charges_label1').val(charges_label);
    $('#rate1').val(rate);
    $('#percent1').val(percent);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
}

function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');
}
</script>