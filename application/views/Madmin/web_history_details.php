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
                <h4 class="mb-sm-0 font-size-18">Web History Details</h4>
            </div>
        </div>
    </div>
                        
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <form action="<?=base_url()?>Madmin/history_details_save" method="post" enctype="multipart/form-data" id="form1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xxl-12 col-lg-12 mb-2">
                                        <label for="" class="form-label">History Title</label>
                                        <input type="text" placeholder="Enter History Title" name="history_title" class="form-control" required>
                                    </div>
                                    <div class="col-xxl-12 col-lg-12">
                                        <label for="" class="form-label">History Image</label>
                                        <input type="file" name="history_image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-xxl-12 col-lg-12">
                                    <label for="" class="form-label">History Desc</label>
                                    <textarea name="history_desc" placeholder="Enter History Description" class="form-control" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-2">
                                <button class="btn btn-primary">Add History Details</button>
                            </div>
                        </div>
                    </form>
                    <form action="<?=base_url()?>Madmin/history_details_update" method="post" enctype="multipart/form-data" id="form2">
                        <div class="row">
                            
                            <div class="col-xxl-6 col-lg-6">
                                <label for="" class="form-label">History Title</label>
                                <input type="hidden" name="history_id" id="history_id" class="form-control" required>
                                <input type="text" name="history_title" id="history_title" class="form-control" required>
                            </div>
                            <div class="col-xxl-6 col-lg-6">
                                <label for="" class="form-label">History Desc</label>
                                <span id="textt"></span>
                            </div>
                            <div class="col-xxl-6 col-lg-6">
                                <label for="" class="form-label">History Image</label>
                                <input type="file" name="history_image" class="form-control" >
                                <input type="hidden" name="history_image1" id="history_image" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <span id="img"></span>
                            </div>
                            <div class="col-md-12 text-right mt-1">
                                <button class="btn btn-primary">Update History Details</button>
                                <button class="btn btn-danger" onclick="cancel()" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-bordered text-center dt-responsive nowrap w-100 table-check" id="job-list">
                            <thead>
                                <tr>
                                <th scope="col">Action</th>
                                <th scope="col"> No.</th>
                                <th scope="col">History Title</th>
                                <th scope="col">History Desc</th>
                                <th scope="col">History Image</th>
                                </tr>
                                <?php $i=1; foreach ($web_history_details as $value) {
                                $tex=nl2br2($value['history_desc']);
                                $tex1=trim(br2nl2($tex));
                                $tex2=preg_replace('/\s+/', ' ', $tex1);
                                ?>
                                        <tr>
                                        <td class="btn-group">
                                            <!-- <button class="btn btn-outline-primary btn-sm" onclick='updateownerdesk("<?=$value['history_id'];?>","<?=$value['history_title'];?>","<?=$tex2;?>","<?=$value['history_image'];?>")'><i class="fa fa-edit"></i></button> -->
                                            
                                            <a href="<?= base_url() ?>Madmin/edit_history_details/<?= $value['history_id'] ?>"  class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>

                                            &nbsp;&nbsp;

                                            <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/history_details_delete/<?=$value['history_id'];?>"><button  class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                                            
                                        </td>
                                        <td><?=$i++;?></td>
                                        <td><?=$value['history_title'];?></td>
                                        <td><?=$value['history_desc'];?></td>
                                            <td>
                                                <?php
                                                $history_image=FCPATH . "uploads/" . $value['history_image'];
                                                if(file_exists($history_image)){
                                                    ?>
                                                    <img class="rounded me-2" alt="200x200" width="200" src="<?= base_url() ?>uploads/<?= $value['history_image'] ?>" style="height:100px;width:100px;object-fit:cover" data-holder-rendered="true">
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
function updateownerdesk(history_id,history_title,history_desc,history_image){
	var iim="<img src='<?=base_url();?>uploads/"+history_image+"' class='mt-2' style='height:100px;width:100px;'>";
	var textt="<textarea class='form-control' name='history_desc' required rows='5' id='history_desc'>"+history_desc+"</textarea>"
	$('#history_id').val(history_id);
    $('#history_title').val(history_title);
    $('#textt').html(textt);
    $('#history_image').val(history_image);
    $('#img').html(iim);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
}
function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');

}
</script>