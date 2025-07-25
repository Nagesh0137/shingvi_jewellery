<div class="container-fluid">
<?php
function nl2br2($string) {
$string = str_replace(array('\r\n', '\r', '\n'), "<br />", $string);
$string = ltrim($string, "'"); 
$string = rtrim($string, "'"); 
return $string;
}
function br2nl2($text)
{
    $breaks = array("<br />","<br>","<br/>");  
    $text = str_ireplace($breaks, "\r\n", $text);
    return $text;
}
?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Web Owner Desk Details</h4>
            </div>
        </div>
    </div>
                        
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                <form action="<?=base_url()?>Madmin/owner_desk_details_save" method="post" enctype="multipart/form-data" id="form1">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="col-xxl-12 col-lg-12 mb-3">
                            <label for="" class="form-label">Owner Desk Title</label>
                            <input type="text" name="owner_desk_title" placeholder="Enter Owner Desk Title" class="form-control" required>
                        </div>
                        <div class="col-xxl-12 col-lg-12">
                            <label for="" class="form-label">Owner Desk Image</label>
                            <input type="file" accept="image/*" name="owner_desk_image" class="form-control" id="owner_desk_image" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-xxl-12 col-lg-12">
                            <label for="" class="form-label">Owner Desk Desc</label>
                            <textarea name="owner_desk_desc" class="form-control" rows="5" placeholder="Enter Owner Desk Description" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <br>
                        <button class="btn btn-primary">Add Owner Desk Details</button>
                    </div>
                </div>
            </form>
            <!-- <form action="<?=base_url()?>Madmin/owner_desk_details_update" method="post" enctype="multipart/form-data" id="form2">
                <div class="row">
                    <div class="col-xxl-4 col-lg-4">
                        <label for="" class="form-label">Owner Desk Title</label>
                        <input type="hidden" name="owner_desk_id" id="owner_desk_id" class="form-control" required>
                        <input type="text" name="owner_desk_title" id="owner_desk_title" class="form-control" required>
                    </div>
                    <div class="col-xxl-4 col-lg-4 mt-2">
                        <label for="" class="form-label">Owner Desk Desc</label>
                        <span id="textt"></span>
                    </div>
                    <div class="col-xxl-4 col-lg-4">
                        <label for="" class="form-label">Owner Desk Image</label>
                        <input type="file" name="owner_desk_image" class="form-control" >
                        <input type="hidden" name="owner_desk_image1" id="owner_desk_image" class="form-control">
                    </div>
                    <div class="col-md-4 mt-2">
                        <span id="img"></span>
                    </div>
                    <div class="col-md-12 text-right">
                        <br>
                        <button class="btn btn-primary">Update Owner Desk Details</button>
                        <button class="btn btn-danger" onclick="cancel()">Cancel</button>
                    </div>
                </div>
            </form> -->
                    
                  
                </div>
                <?php
                if(!isset($about_details[0])){
                    ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-bordered text-center dt-responsive nowrap w-100 table-check" id="job-list">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Sr. No.</th>
                                    <th>Owner Desk Title</th>
                                    <th>Owner Desk Desc</th>
                                    <th>Owner Desk Image</th>
                                </tr>
                               
                                <?php
                                 foreach ($web_owner_desk_details as $key=>$value) {
                                    $tex=nl2br2($value['owner_desk_desc']);
                                    $tex1=trim(br2nl2($tex));
                                    $tex2=preg_replace('/\s+/', ' ', $tex1);
                                        ?>
                                        <tr>
                                        <td class="btn-group">
                                            <!-- <button class="btn btn-outline-primary btn-sm" onclick='updateownerdesk("<?=$value['owner_desk_id'] ?>","<?=$value['owner_desk_title'];?>","<?=$tex2;?>","<?=$value['owner_desk_image'];?>")'><i class="fa fa-edit"></i></button>
                                            &nbsp;&nbsp; -->
                                            <a href="<?= base_url() ?>Madmin/update_owner_desk/<?= $value['owner_desk_id'] ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            &nbsp;&nbsp;
                                            <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/owner_desk_details_delete/<?=$value['owner_desk_id'];?>"><button  class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                                        </td>
                                            <td><?=$key+1;?></td>
                                            <td><?=$value['owner_desk_title'];?></td>
                                            <td><?=$value['owner_desk_desc'];?></td>
                                            <td>
                                                <?php
                                                $owner_desk_image=FCPATH . "uploads/" . $value['owner_desk_image'];
                                                if(file_exists($owner_desk_image)){
                                                    ?>
                                                    <img class="rounded me-2" alt="200x200" width="200" src="<?= base_url() ?>uploads/<?= $value['owner_desk_image'] ?>" style="height:100px;width:100px;object-fit:cover" data-holder-rendered="true">
                                                    <?php
                                                }else{
                                                    ?>
                                                    N/A
                                                    <?php
                                                }
                                                ?>
                                            </td>						
                                        </tr>
                                        <?php
                                    }
                                    ?>
                            </thead>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
                <?php
                }
                ?>
                <!-- end card body -->
            </div><!--end card-->
        </div><!--end col-->

    </div><!--end row-->
    

</div>
<style type="text/css">
		#form2{
			display:none;
		}
	</style>
<script type="text/javascript">
function updateownerdesk(owner_desk_id,owner_desk_title,owner_desk_desc,owner_desk_image){
	var iim="<img src='<?=base_url();?>uploads/"+owner_desk_image+"' style='height:100px;width:100px;'>";
	var textt="<textarea class='form-control' name='owner_desk_desc' required rows='5' id='owner_desk_desc'>"+owner_desk_desc+"</textarea>"
	$('#owner_desk_id').val(owner_desk_id);
    $('#owner_desk_title').val(owner_desk_title);
    $('#textt').html(textt);
    $('#owner_desk_image').val(owner_desk_image);
    $('#img').html(iim);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
}
function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');
}
</script>
<script>
    document.getElementById('owner_desk_image').addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!allowedTypes.includes(file.type)) {
                alert('Only JPEG, PNG, and GIF files are allowed.');
                this.value = ''; // Clear the input
            }
        }
    });
</script>
