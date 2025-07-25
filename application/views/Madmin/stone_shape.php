<div class="container-fluid">
    <div class="row">
        <div class="col-12 ">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Stone shape <span id="heading">Add</span></h4>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>Madmin/stone_shape_add" method="post" enctype="multipart/form-data" id="form1">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Stone Shape Label</label>
                            <input type="text" class="form-control" name="stone_shape_name" id="stone_shape_name" placeholder="Stone shape" required style="width:480px !important">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Add</button>
                        </div>
                    </form>
                    <form action="<?=base_url()?>Madmin/stone_shape_update" method="post" enctype="multipart/form-data" id="form2">
                        <input type="hidden" name="stone_shape_id" id="stone_shape_id1" placeholder="Stone shape" required class="form-control">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Stone Shape Label</label>
                            <input type="text" class="form-control" name="stone_shape_name" id="stone_shape_name1" placeholder="Stone shape" required style="width:480px !important">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update</button>
                            <button class="btn btn-danger" type="button" onclick="cancel()"><b>Cancel</b></button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= site_url() ?>Madmin/stone_shape" method="get">
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
                    <div class="table-responsive">
                        <table class="table mb-0 table-bordered text-center table-sm ">

                            <thead class="">
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Stone shape</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $i=$start; 
                            if(count($stone_shape)>0){
                                foreach ($stone_shape as $value) {
                                    ?>
                                    <tr>
                                    <td><?=++$i;?></td>
                                    <td><?=$value['stone_shape_name'];?></td>
                                    <td>
                                        <button class="btn btn-outline-primary btn-sm" onclick="updatediamondclarity('<?=$value['stone_shape_id'];?>','<?=$value['stone_shape_name'];?>')"><i class="fa fa-edit"></i></button>
                                    
                                        <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/stone_shape_delete/<?=$value['stone_shape_id'];?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td class="text-center" colspan="20">No Record Found</td>
                                </tr>
                                <?php
                            }
                            ?>
                                
                            
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
function updatediamondclarity(stone_shape_id,stone_shape_name){
	$('#stone_shape_id1').val(stone_shape_id);
    $('#stone_shape_name1').val(stone_shape_name);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
    $("#heading").html("Update");
}
function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');
$("#heading").html("Add");
}
</script>