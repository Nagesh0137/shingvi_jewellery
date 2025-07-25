<div class="container-fluid">
    <div class="row">
        <div class="col-12 ">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Diamond Clarity <span id="heading">Add</span></h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Add Form -->
                    <form action="<?=base_url()?>Madmin/diamond_clarity_add" method="post" enctype="multipart/form-data" id="form1" style="display: block;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Diamond Clarity Label</label>
                                    <input type="text" class="form-control" name="diamond_clarity" id="diamond_clarity" onkeyup="gstcal(this.value)" placeholder="Diamond clarity" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Decrease Amt(%)</label>
                                    <input type="text" class="form-control" name="dec_amt" id="dec_amt" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');" placeholder="Enter Decrease Amount here e.g.: 5" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Add Diamond Clarity</button>
                        </div>
                    </form>
                  
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="<?= site_url() ?>Madmin/diamond_clarity" method="get">
                        <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" placeholder="Search..." name="q" value="<?= $this->input->get("q") ?>">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                                &nbsp;&nbsp;
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        <table class="table table-bordered table-hover mb-0 table-sm text-center">

                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Diamond clarity</th>
                                    <th>Decs Amt</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=$start; if(isset($diamond_clarity) && count($diamond_clarity)>0){ foreach ($diamond_clarity as $value) { ?>
                                    <tr>
                                        <td><?=++$i;?></td>
                                        <td><?=$value['diamond_clarity'];?></td>
                                        <td><?=$value['dec_amt'];?>%</td>
                                        <td>
                                            <!-- <button class="btn btn-outline-primary btn-sm" onclick="updatediamondclarity('<?=$value['diamond_clarity_id'];?>','<?=$value['diamond_clarity'];?>','<?=$value['dec_amt'];?>')"><i class="fa fa-edit"></i></button> -->
                                            <a href="<?= base_url() ?>Madmin/edit_diamond_calrity/<?= $value['diamond_clarity_id'] ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>

                                            <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/diamond_clarity_delete/<?=$value['diamond_clarity_id'];?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                           
                                        </td>
                                    </tr>
                                <?php } }else{ ?>
                                    <tr>
                                        <td class="text-center" colspan="20">No Record Found</td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                        <br>
                        <?php
                        pagination($ttl_pages,$page_no);
                        ?>
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