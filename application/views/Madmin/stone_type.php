<div class="container-fluid">
    <div class="row">
        <div class="col-12 ">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Stone Type</h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <?php
                if(isset($stone_data[0])){
                ?>
                    <form action="<?=base_url()?>Madmin/stone_type_update" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="stone_type_id" value="<?= $stone_data[0]['stone_type_id'] ?>" class="form-control">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Enter Stone Type Name</label>
                            <input type="text" class="form-control" name="stone_type_name" id="stone_type_name" value="<?= $stone_data[0]['stone_type_name'] ?>" placeholder="Stone Type" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update</button>
                        </div>
                    </form>
                <?php
                } else {
                ?>
                    <form action="<?=base_url()?>Madmin/stone_type_add" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Enter Stone Type Name</label>
                            <input type="text" class="form-control" name="stone_type_name" id="stone_type_name" placeholder="Stone Type" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Add</button>
                        </div>
                    </form>
                <?php
                }
                ?>

                  

                    <!-- <form action="<?=base_url()?>Madmin/stone_type_update" method="post" enctype="multipart/form-data" id="form2">
                        <input type="hidden" name="stone_type_id" id="stone_type_id1" placeholder="Stone Type" required class="form-control">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Update Stone Type Name</label>
                            <input class="form-control me-auto" type="text" name="stone_type_name" id="stone_type_name1" placeholder="Stone Type" required  style="width:450px">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update</button>
                            <button type="button" onclick="cancel()" class="btn btn-danger">Cancel</button>
                        </div>
                    </form> -->

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">    
                        <div class="table-responsive">
                            <table class="table table-sm text-center table-bordered">
                                <thead class="">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Stone Type</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($stone_type as $value) { ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$value['stone_type_name'];?></td>
                                        <td>
                                            <!-- <button class="btn btn-outline-primary py-1 px-2" onclick="updatediamondclarity('<?=$value['stone_type_id'];?>','<?=$value['stone_type_name'];?>')"><i class="fa fa-edit"></i></button> -->

                                            <a href="<?= base_url() ?>Madmin/edit_stone_type_name/<?= $value['stone_type_id'] ?>" class="btn btn-outline-primary py-1 px-2"><i class="fa fa-edit"></i></a>

                                            <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/stone_type_delete/<?=$value['stone_type_id'];?>" class="btn btn-outline-danger py-1 px-2"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
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
function updatediamondclarity(stone_type_id,stone_type_name){
	$('#stone_type_id1').val(stone_type_id);
    $('#stone_type_name1').val(stone_type_name);
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