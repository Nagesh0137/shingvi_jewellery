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
                <h4 class="mb-sm-0 font-size-18"><?= isset($product_group1[0])? ' Update ':'' ?>Manage Product Group</h4>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <?php
                if(isset($product_group1[0])){
                ?>
                <form action="<?=base_url()?>admin/update_new_product_group" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="product_group_id" value="<?=$product_group1[0]['product_group_id']?>">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label class="form-label">Enter Category Name</label>
                            <?php 
                            $group_cat = $this->My_model->select_where("category", ['category_id' => $product_group1[0]['group_category']]);
                            ?>
                            <select name="group_category" class="form-select" required>
                                <option value="<?=$group_cat[0]['category_id'];?>"><?=$group_cat[0]['category_name'];?></option>
                                <?php foreach($group_category as $value) {
                                    if($group_cat[0]['category_id'] != $value['category_id']){
                                ?>
                                <option value="<?=$value['category_id'];?>"><?=$value['category_name'];?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label class="form-label">Enter Product Group Name</label>
                            <input type="text" name="product_group_name" class="form-control" placeholder="Enter Product Group Name" value="<?=$product_group1[0]['product_group_name']?>" required>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Choose Product Group Image (Square Image 300 x 300)</label>
                            <input type="file" value="<?=$product_group1[0]['product_group_image']?>" name="product_group_image" class="form-control" id="productGroupImageUpdate" onchange="validateImage('productGroupImageUpdate', 'submitButtonUpdate')">
                            <input type="hidden" name="product_group_image1" value="<?=$product_group1[0]['product_group_image']?>">
                            <span id="imageErrorUpdate" style="color: red;"></span> <!-- Error message will be shown here -->
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label class="form-label">Enter Product Group Details / Description</label>
                            <textarea name="product_group_details" placeholder="Enter Product Group Details" class="form-control"><?=br2nl2(nl2br2($product_group1[0]['product_group_details']))?></textarea>
                        </div>
                        <div class="col-lg-3">
                            <img src="<?=base_url()?>uploads/<?=$product_group1[0]['product_group_image']?>" width="200px">
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <button class="btn btn-primary btn-sm" id="submitButtonUpdate">Update Now</button>
                        </div>
                    </div>
                </form>

<script>
    function validateImage(inputId, submitButtonId) {
    const fileInput = document.getElementById(inputId);
    const file = fileInput.files[0];
    const submitButton = document.getElementById(submitButtonId);
    const errorMessage = document.getElementById('imageErrorUpdate');
    
    if (file) {
        const img = new Image();
        img.onload = function() {
            // Check if the image dimensions are 300x300
            if (img.width !== 300 || img.height !== 300) {
                errorMessage.textContent = 'Please upload an image with dimensions 300px x 300px.';
                submitButton.disabled = true; // Disable submit button
                fileInput.value = ''; // Reset file input
            } else {
                errorMessage.textContent = ''; // Clear error message
                submitButton.disabled = false; // Enable submit button
            }
        };
        img.src = URL.createObjectURL(file);
    }
}


</script>
<?php
}else{
?>
<form action="<?= base_url() ?>admin/add_new_product_group" method="post" enctype="multipart/form-data" onsubmit="return validateImage('productGroupImageAdd')">
    <div class="row">
        <div class="col-lg-4 mb-3">
            <label class="form-label">Enter Category Name</label>
            <select name="group_category" class="form-select" required>
                <option value="">Category</option>
                <?php foreach($group_category as $value) { ?>
                    <option value="<?=$value['category_id'];?>"><?=$value['category_name'];?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-lg-4 mb-3">
            <label class="form-label">Enter Product Group Name</label>
            <input type="text" name="product_group_name" class="form-control" placeholder="Enter Product Group Name" required>
        </div>
        <div class="col-lg-4">
            <label class="form-label">Choose Product Group Image (Square Image)</label>
            <input type="file" name="product_group_image" class="form-control" id="productGroupImageAdd" required onchange="validateImage('productGroupImageAdd')">
            <span id="imageError" style="color: red;"></span> <!-- Error message will appear here -->
        </div>
        <div class="mb-3 col-lg-4">
            <label class="form-label">Enter Product Group Details / Description</label>
            <textarea name="product_group_details" placeholder="Enter Product Group Details" class="form-control"></textarea>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-primary btn-sm" id="submitButtonAdd" type="submit">Add Product Group</button>
        </div>
    </div>
</form>

<script>
function validateImage(imageId) {
    const fileInput = document.getElementById(imageId);
    const file = fileInput.files[0];
    const errorMessage = document.getElementById('imageError');
    const submitButton = document.getElementById(imageId === 'productGroupImageAdd' ? 'submitButtonAdd' : 'submitButtonUpdate');

    if (file) {
        const img = new Image();
        img.onload = function() {
            // Check if the image dimensions are 300x300
            if (img.width !== 300 || img.height !== 300) {
                errorMessage.textContent = 'Please upload an image with dimensions 300px x 300px.';
                submitButton.disabled = true; // Disable submit button
                fileInput.value = ''; // Reset file input
            } else {
                errorMessage.textContent = ''; // Clear error message
                submitButton.disabled = false; // Enable submit button
            }
        };
        img.src = URL.createObjectURL(file);
    }
}
</script>

<?php
}
?>
                   
                </div>
            </div>
        </div>
        <?php
        if(!isset($product_group1[0])){
            ?>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex flex-wrap gap-2">
                            <?php foreach ($group_category as  $value) { ?>
                                <a href="<?=base_url();?>admin/manage_product_group/<?=$value['category_id'];?>" class="btn btn-primary" >
                                    <?=$value['category_name'];?>
                                </a>
                            <?php } ?>
                        </div>
                        <form action="<?= base_url() ?>admin/manage_product_group" method="get">
                            <div class="col-sm-12">
                                <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="searchTableList" value="<?= $this->input->get("q") ?>" placeholder="Search..." name="q">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
                                    </div>
                                 
                                </div>
                            </div>
                        </form>
                        </div>
                        
                        <div class="table-responsive">
                                        
                            <table class="table table-bordered text-center mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:100px;">Action</th>
                                        <th>Disable</th>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(count($product_group)>0 && isset($product_group)){
                                        $i=$start;
                                        foreach($product_group as $key=>$row){
                                            $img=base_url('uploads/'.$row['product_group_image']);
					                        $cat=$this->My_model->select_where('category',array('category_id'=>$row['group_category']))[0];
                                            ?>
                                           <tr>
                                           <td >
                                                <a href="<?=base_url()?>admin/edit_product_group/<?=$row['product_group_id']?>" class="btn btn-primary btn-sm p-0 m-0 py-0 px-0" style="height:3vh;width:3vh">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?=base_url()?>admin/delete_product_group/<?=$row['product_group_id']?>" onclick="return confirm('Are You Sure to delete permanant data ?');" class="btn btn-danger btn-sm p-0 m-0 py-0 px-0" style="height:3vh;width:3vh">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                
                                                
                                            </td>
                                            <td>
                                                <a href="<?=base_url()?>admin/deactivate_product_group/<?=$row['product_group_id']?>"><button class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Disable These Product ?....')">Disable</button></a>
                                            </td>
                                            <td><?=++$i?></td>
                                            <td><?=$row['product_group_name']?></td>
                                            <td><?=$cat['category_name']?></td>
                                            <td class="text-wrap">
                                                <?php
                                                if (!empty($row['product_group_details'])) {
                                                    // Remove all slashes and print only text
                                                    $cleanDescription = str_replace(['\\', '/'], '', $row['product_group_details']);
                                                    echo nl2br($cleanDescription); // Convert newlines to <br> and display
                                                } else {
                                                    echo "N/A";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $product_group_image=FCPATH . "uploads/" . $row['product_group_image'];
                                                if(!empty($row['product_group_image']) &&file_exists($product_group_image)){
                                                    ?>
                                                    <img class="rounded me-2" alt="200x200" width="200" src="<?= base_url() ?>uploads/<?= $row['product_group_image'] ?>" data-holder-rendered="true" style="height:100px;width:100px;object-fit:cover">
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
                                    }else{
                                        ?>
                                        <tr>
                                            <td class="col-md-12" colspan="20">No Reocrd Found</td>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                       <h4 class="card-title">Deactivated Groups</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:100px;">Action</th>
                                        <th style="width:100px;">Activate</th>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i=0;
                                    foreach($deactivate_product_group as $row)
                                    {
                                        $img=base_url('uploads/'.$row['product_group_image']);
                                        $cat=$this->My_model->select_where('category',array('category_id'=>$row['group_category']))[0];
                                        ?>
                                        <tr>
                                            <td style="font-size: 20px;">
                                                <a href="<?=base_url()?>admin/edit_product_group/<?=$row['product_group_id']?>" class="btn btn-primary btn-sm p-0 m-0 " style="height:3vh;width:3vh">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?=base_url()?>admin/delete_product_group/<?=$row['product_group_id']?>" onclick="return confirm('Are You Sure to delete permanant data ?');" class="btn btn-danger p-0 m-0 btn-sm" style="height:3vh;width:3vh">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                
                                                
                                            </td>
                                            <td><a href="<?=base_url()?>admin/activate_product_group/<?=$row['product_group_id']?>"><button class="btn btn-sm btn-success" onclick="return confirm('Are You Sure To Active These Product ?....')">Activate</button></a></td>
                                            <td><?=++$i?></td>
                                            <td><?=$row['product_group_name']?></td>
                                            <td><?=$cat['category_name']?></td>
                                            <td>
                                                <?php
                                                if(nl2br2($row['product_group_details']) != null){
                                                    ?>
                                                    <?=nl2br2($row['product_group_details'])?>
                                                    <?php
                                                }else{
                                                    ?>
                                                    NA
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $image=FCPATH . "uploads/" . $row['product_group_image'] ;
                                                if(!empty($row['product_group_image']) && file_exists($image)){
                                                    ?>
                                                    <a href="<?=$img;?>" target="_blank" style="font-weight:bold;">
                                                        <img src="<?= base_url() ?>uploads/<?= $row['product_group_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="">
                                                    </a>
                                                    <?php
                                                }else{
                                                    ?>
                                                    NA
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    if($i==0)
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="20" class="text-center"><b>No Record Found</b></td>
                                        </tr>
                                        <?php
                                    }
                                    ?> 
                                </tbody>
                            </table>
                           
                           
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <?php
        if(!isset($product_group1[0])){
            ?>
        
            <?php
        }
        ?>
    </div>
</div>