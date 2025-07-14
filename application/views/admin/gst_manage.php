	<div class="container-fluid">
		
		<form action="<?=base_url()?>jadmin/gst_add" method="post" enctype="multipart/form-data" id="form1">
			<div class="row">
				<div class="col-md-12">
					<h3 class="heading"><b>Gold Rates</b></h3>
				</div>
				<div class="col-md-3 mt-2">
					<b>GST Label(%)</b>
					<input type="text" name="gst_label" id="gst_label" onkeyup="gstcal(this.value)" placeholder="GST Value" required class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');">
				</div>
				<div class="col-md-3 mt-2">
					<b>CGST(%)</b>
					<input type="text" name="cgst" class="form-control" id="cgst" readonly required>
				</div>
				<div class="col-md-3 mt-2">
					<b>SGST(%)</b>
					<input type="text" name="sgst" class="form-control" id="sgst" readonly required>
				</div>
				<div class="col-md-3 mt-2">
					<b>IGST(%)</b>
					<input type="text" name="igst" class="form-control" id="igst" readonly required>
				</div>
				<div class="col-md-8 text-right">
					<br>
					<button class="btn btn-warning"><b>Add GST</b></button>
				</div>
			</div>
		</form>
		<form action="<?=base_url()?>jadmin/gst_update" method="post" enctype="multipart/form-data" id="form2">
			<div class="row">
				<div class="col-md-12">
					<h3 class="alert bg-warning text-center pb-1 pt-1 mb-2" style="color: black;"><b>GST Updates</b></h3>
				</div>
				<div class="col-md-3 mt-2">
					<b>GST Label(%)</b>
					<input type="text" name="gst_label" id="gst_label1" onkeyup="gstcal1(this.value)" placeholder="GST Value" required class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');">
				</div>
				<div class="col-md-3 mt-2">
					<b>CGST</b>
					<input type="hidden" name="gst_id" class="form-control" id="gst_id1" readonly required>
					<input type="text" name="cgst" class="form-control" id="cgst1" readonly required>
				</div>
				<div class="col-md-3 mt-2">
					<b>SGST</b>
					<input type="text" name="sgst" class="form-control" id="sgst1" readonly required>
				</div>
				<div class="col-md-3 mt-2">
					<b>IGST</b>
					<input type="text" name="igst" class="form-control" id="igst1" readonly required>
				</div>
				<div class="col-md-8 text-right">
					<br>
					<button type="button" class="btn btn-danger" onclick="cancel()"><b>Cancel</b></button>
					<button class="btn btn-warning"><b>Update GST</b></button>
				</div>
			</div>
		</form>
		<div class="row mt-2">
			<div class="col-md-12 pt-2" style="border-top:2px solid black;">
				<h2 class="font-weight-bold text-primary text-uppercase">GST List :- </h2>
			</div>
			<div class="col-md-12 table-responsive"><br>
				<table class="table table-hover table-lg">
					<tr>
						<th>Sr. No.</th>
						<th>GST Label</th>
						<th>CGST</th>
						<th>SGST</th>
						<th>IGST</th>
						<th>Action</th>
					</tr> 
					<?php $i=1; foreach ($gst as $value) { ?>
					<tr>
						<td><?=$i++;?></td>
						<td><?=$value['gst_label'];?></td>
						<td><?=$value['cgst'];?></td>
						<td><?=$value['sgst'];?></td>
						<td><?=$value['igst'];?></td>
						<td>
							<a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>jadmin/gst_delete/<?=$value['gst_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							<button class="btn btn-warning" onclick="updategold('<?=$value['gst_id'];?>','<?=$value['gst_label'];?>','<?=$value['cgst'];?>','<?=$value['sgst'];?>','<?=$value['igst'];?>')"><i class="fa fa-edit"></i></button>
						</td>
					</tr>
				    <?php } ?>
				</table>
			</div>
		</div>
	</div>
	<style type="text/css">
		#form2{
			display:none;
		}
	</style>
<script type="text/javascript">
function updategold(gst_id,gst_label,igst,cgst,sgst){
	$('#gst_id1').val(gst_id);
    $('#gst_label1').val(gst_label);
    $('#igst1').val(igst);
    $('#cgst1').val(cgst);
    $('#sgst1').val(sgst);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
}

function gstcal(val){
var csgst=Number(val)/2;
 $('#igst').val(val);
 $('#cgst').val(csgst);
 $('#sgst').val(csgst);
}
function gstcal1(val){
var csgst=Number(val)/2;
 $('#igst1').val(val);
 $('#cgst1').val(csgst);
 $('#sgst1').val(csgst);
}

function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');
}
</script>