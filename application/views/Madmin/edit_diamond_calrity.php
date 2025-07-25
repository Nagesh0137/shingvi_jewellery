<div class="container-fluid">
    <div class="row">
        <div class="col-12 ">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Diamond Clarity <span id="heading">Add</span></h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Add Form -->
                   
                    <form action="<?=base_url()?>Madmin/diamond_clarity_update" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="diamond_clarity_id" id="diamond_clarity_id1" placeholder="Diamond clarity" value="<?= $diamond_calrity_data[0]['diamond_clarity_id'] ?>" required class="form-control">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Diamond Clarity Label</label>
                                    <input type="text" class="form-control" name="diamond_clarity" id="diamond_clarity1" value="<?= $diamond_calrity_data[0]['diamond_clarity'] ?>" placeholder="Diamond clarity" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Decrease Amt(%)</label>
                                    <input type="text" class="form-control" name="dec_amt" id="dec_amt1" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');" value="<?= $diamond_calrity_data[0]['dec_amt'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <button type="submit" class="btn btn-primary w-md">Update Diamond Clarity</button>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script type="text/javascript">
function updatediamondclarity(diamond_clarity_id,diamond_clarity,diamond_clarity_amt){
	$('#diamond_clarity_id1').val(diamond_clarity_id);
    $('#diamond_clarity1').val(diamond_clarity);
    $('#dec_amt1').val(diamond_clarity_amt);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
    $("#heading").html("Update")
}
function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');
$("#heading").html("Add")

}
</script>