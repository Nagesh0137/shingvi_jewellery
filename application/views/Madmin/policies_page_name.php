<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>Madmin/pages_name_save" method="post" enctype="multipart/form-data" id="form1">
                        <div class="row">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                        <h4 class="mb-sm-0 font-size-18">POLICIES PAGES NAME</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <b>Pages Name </b>
                                <input type="text" name="pages_name" id="pages_name"  placeholder="Pages Name" required class="form-control">
                            </div>
                            <div class="col-md-8 text-right">
                                <br>
                                <button class="btn btn-primary"><b>Add Page Name</b></button>
                            </div>
                        </div>
                    </form>
                    <form action="<?=base_url()?>Madmin/pages_name_update" method="post" enctype="multipart/form-data" id="form2">
                        <div class="row">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                        <h4 class="mb-sm-0 font-size-18">POLICIES PAGES NAME UPDATE</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <b>Charges Label Name</b>
                                <input type="hidden" name="pages_name_id" id="pages_name_id1"  required class="form-control">
                                <input type="text" name="pages_name" id="pages_name1"  placeholder="Charges Label" required class="form-control">
                            </div>
                            <div class="col-md-8 text-right">
                                <br>
                                <button class="btn btn-primary"><b>Update Pages Name</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                <h4 class="mb-sm-0 font-size-18">Pages Name List</h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered  table-sm text-center">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Page Name</th>
                                <th>Action</th>
                            </tr> 
                            <?php $i=1; foreach ($pages_name as $value) { ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$value['pages_name'];?></td>
                                <td>
                                    <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/pages_name_delete/<?=$value['pages_name_id'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    <button class="btn btn-sm btn-primary" onclick="updatecharges('<?=$value['pages_name_id'];?>','<?=$value['pages_name'];?>')"><i class="fa fa-edit"></i></button>
                                    <a href="<?=base_url();?>Madmin/pages_name_view/<?=$value['pages_name_id'];?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

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
function updatecharges(pages_name_id,pages_name){
	$('#pages_name_id1').val(pages_name_id);
    $('#pages_name1').val(pages_name);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
}

function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');
}
</script>