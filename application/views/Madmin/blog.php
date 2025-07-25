<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Blog Details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-md-<?= isset($blog_det[0])?'12':'6' ?>">
            <div class="card">
                <div class="card-body">
                    <?php
                        if(isset($blog_det[0]))
                        {
                        ?>
                        <form action="<?=base_url()?>Madmin/update_blog" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="web_blog_id" value="<?=$blog_det[0]['web_blog_id']?>">
                        <?php
                        }
                        else
                        {
                            ?>
                        <form action="<?=base_url()?>Madmin/add_blog" method="post" enctype="multipart/form-data">
                            <?php
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="blog_by" class="form-label">Blog By</label>
                                    <input type="text" name="blog_by" class="form-control" value="<?=(isset($blog_det[0])) ? $blog_det[0]['blog_by']: $_SESSION['admin_name']?>" placeholder="Blog By">
                                </div>
                                <div class="col-md-12">
                                    <label for="blog_label" class="form-label">Blog Label</label>
                                    <input type="text" name="blog_label" value="<?=(isset($blog_det[0])) ? $blog_det[0]['blog_label']: '' ?>" class="form-control" placeholder="Enter Blog label">
                                </div>
                                <div class="col-md-12">
                                    <label for="blog_det" class="form-label">Blog Type</label>
                                    <select name="blog_type" class="form-select" required>
                                        <option value="" selected>Select Blog Type</option>
                                        <option value="Image" <?=(isset($blog_det[0])) ? ($blog_det[0]['blog_type']=='Image') ? 'selected':'' :'' ?>>Image</option>
                                        <option value="Video" <?=(isset($blog_det[0])) ? ($blog_det[0]['blog_type']=='Video') ? 'selected':'' :'' ?>>Video</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="blog_image" class="form-label">Blog Image</label>
                                    <input type="file" name="blog_image" <?= !isset($blog_det[0])?'required':'' ?> class="form-control">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="blog_desc">Blog Description</label>
                                    <textarea name="blog_details" class="form-control" rows="<?= isset($blog_det[0])?'5':'8' ?>" placeholder="Enter Blog Description" ><?=(isset($blog_det[0]['blog_details'])) ? $blog_det[0]['blog_details']:'' ?></textarea>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <?php
                                        if(isset($blog_det[0]))
                                        {
                                            if($blog_det[0]['blog_type']=='Image')
                                            {
                                            ?>
                                            <div class="col-md-2">
                                                <img src="<?=base_url()?>uploads/<?=$blog_det[0]['blog_image']?>" width="100%" style="height:100px;width:200px;object-fit:cover">
                                            </div>
                                            <?php
                                            }
                                            else
                                            {
                                                ?>
                                            <div class="col-md-2">
                                                <video src="<?=base_url()?>uploads/<?=$blog_det[0]['blog_image']?>" controls width="100%">
                                                </video>
                                            </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 text-center">
                            <?php
                            if(isset($blog_det[0])){
                                ?>
                                 <button type="submit" class="btn btn-primary btn-sm">Update & Save Blog</button>
                                <?php
                            }else{
                                ?>
                                <button type="submit" class="btn btn-primary btn-sm">Save Blog</button>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <?php
            if(!isset($blog_det)){
                ?>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <style>
                        table th, table td {
                            max-width: 150px; /* Adjust column widths */
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: nowrap;
                        }
                    </style>
                    <form action="<?= base_url() ?>Madmin/blog" method="get">
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
                    <div class="table-responsive">
                        <table class="table align-middle dt-responsive nowrap w-100 table-check table-bordered text-center table-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Blog By</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Blog Image</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(isset($web_blog) && count($web_blog)>0){
                                    $i=$start;
                                    foreach($web_blog as $key=>$row){
                                        ?>
                                        <tr>
                                            <td><?= ++$i ?></td>
                                            <td class="d-flex align-item-center">
                                                <a href="<?=base_url('Madmin/edit_blog/'.$row['web_blog_id'])?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" ></i></a> &nbsp;
                                                <a href="<?=base_url('Madmin/delete_blog/'.$row['web_blog_id'])?>" onclick="return confirm('Are You Sure..')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" ></i></a>
                                            </td>
                                            <td><?= $row['blog_by'] ?></td>
                                            <td>
                                                <?= strlen($row['blog_label']) > 50 ? substr($row['blog_label'], 0, 50) . '...' : $row['blog_label'] ?>
                                            </td>
                                            <td><?= $row['blog_type'] ?></td>
                                            <td><?= strlen($row['blog_details']) > 50 ? substr($row['blog_details'], 0, 50) . '...' : $row['blog_details'] ?></td>
                                            <td>
                                                <?php
                                                if(strtolower($row['blog_type']) == 'image'){
                                                    $blog_image=FCPATH."uploads/".$row['blog_image'];
                                                    if(file_exists($blog_image)){
                                                        ?>
                                                        <img src="<?= base_url() ?>uploads/<?= $row['blog_image'] ?>" alt="" class="rounded avatar-lg">
                                                        <?php
                                                    }else{
                                                        ?>
                                                        N/A
                                                        <?php
                                                    }
                                                }else{
                                                    ?>
                                                    
                                                    <div class="col-md-5">
                                                        <video src="<?=base_url()?>uploads/<?=$row['blog_image']?>" controls width="100%" style="height:250px;width:250px">
                                                        </video>
                                                    </div>
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
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div><!--end card-->
        </div><!--end col-->
        <?php
        }
        ?>
    </div><!--end row-->
    

</div>