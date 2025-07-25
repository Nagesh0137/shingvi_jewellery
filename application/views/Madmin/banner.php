    <div class="container-fluid">
        <!-- start page title -->
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Banner Details</h4>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                            if(isset($banner_det[0]))
                            {
                            ?>
                            <form action="<?=base_url()?>Madmin/update_banner" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="web_banner_id" value="<?=$banner_det[0]['web_banner_id']?>">
                            <?php
                            }
                            else
                            {
                                ?>
                                <form action="<?=base_url()?>Madmin/add_banner" method="post" enctype="multipart/form-data">
                                <?php
                            }
                            ?>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Banner Redirection Link</label>
                                <input type="link" name="banner_link" class="form-control" value="<?=(isset($banner_det[0]['banner_link'])) ? $banner_det[0]['banner_link']:'' ?>" placeholder="Enter Banner Redirection Link">
                            </div>

                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-email-input" class="form-label">Banner Size</label>
                                        <select class="form-select" name="banner_size">
                                            <option value="Gold" <?=(isset($banner_det[0]['banner_size'])) ? ($banner_det[0]['banner_size'] =='Gold') ? 'selected' :'' :'' ?>>1000 x 805 (Gold Product Banner)</option>
                                            <option value="Silver" <?=(isset($banner_det[0]['banner_size'])) ? ($banner_det[0]['banner_size'] =='Silver') ? 'selected' :'' :'' ?>>1000 x 805 (Silver Product Banner)</option>
                                            <option value="half" <?=(isset($banner_det[0]['banner_size'])) ? ($banner_det[0]['banner_size'] =='half') ? 'selected' :'' :'' ?>>571 x 295 (Half Screen)</option>
                                            <option value="full" <?=(isset($banner_det[0]['banner_size'])) ? ($banner_det[0]['banner_size'] =='full') ? 'selected' :'' :'' ?>>1440 x 431 (Full Screen)</option>
                                            <option value="portrait" <?=(isset($banner_det[0]['banner_size'])) ? ($banner_det[0]['banner_size'] =='portrait') ? 'selected' :'' :'' ?>>225 x 463 (Portrait Screen)</option>
                                            <option value="exclusive_collection" <?=(isset($banner_det[0]['banner_size'])) ? ($banner_det[0]['banner_size'] =='exclusive_collection') ? 'selected' :'' :'' ?>> 617px X 380px (Portrait Screen)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="<?=(isset($banner_det[0]['banner_img'])) ? 'col-md-6':'col-md-6' ?> mt-2">
                                    Choose Banner
                                    <input type="file" accept="image/*" name="banner_img" class="form-control">
                                </div>
                                <?php
                                if ((isset($banner_det[0]['banner_img']))) 
                                {
                                ?>
                                <div class="col-md-2">
                                    <img src="<?=base_url('uploads/'.$banner_det[0]['banner_img'])?>" width="100%">
                                </div>
                                <?php
                                }
                                ?>
                                
                            </div>
                            <?php
                            if(isset($banner_det[0]))
                            {
                            ?>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary w-md">UPDATE BANNER</button>
                            </div>
                            <?php
                            }
                            else
                            {
                                ?>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary w-md">SAVE BANNER</button>
                                </div>
                                <?php
                            }
                                ?>
                           
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
           <?php
           if(!isset($banner_det[0])){
            ?>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>Madmin/banner" method="get">
                            <div class="col-sm-12">
                                <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="searchTableList" placeholder="Search..." value="<?= $this->input->get("q") ?>" name="q">
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
                            <table class="table table-bordered text-center table-sm mb-0">

                                <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Action</th>
                                        <th>Size</th>
                                        <th>Added On</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(count($web_banner) && isset($web_banner)){
                                        $i=$start;
                                        foreach($web_banner as $key=>$row){
                                            ?>
                                            <tr>
                                                <td><?= ++$i ?></td>
                                                <td>
                                                    <a href="<?=base_url('Madmin/edit_banner/'.$row['web_banner_id'])?>" class="btn btn-primary btn-sm"><i class="fa fa-edit" ></i></a>
                                                    <a href="<?=base_url('Madmin/delete_banner/'.$row['web_banner_id'])?>" class="btn btn-danger btn-sm py-1 px-2" onclick="return confirm('Are You Sure..')"><i class="fa fa-trash" ></i></a>
                                                </td>
                                                <td><?= $row['banner_size'] ?></td>
                                                <td><?= date('d M Y',strtotime($row['entry_date'])) ?></td>
                                                <td>
                                                <?php
                                                    $file_path = FCPATH . 'uploads/' . $row['banner_img'];
                                                    if (file_exists($file_path) && $row['banner_img'] != '') {
                                                        ?>
                                                        <a href="<?= base_url('uploads/' . $row['banner_img']) ?>" title="Click To Open Image In New Tab" target="__blank">
                                                            <img class="avatar-xl rounded" alt="200x200" src="<?= base_url('uploads/' . $row['banner_img']) ?>" data-holder-rendered="true">
                                                        </a>
                                                        <?php
                                                    } else {
                                                        echo 'N/A';
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
                        </div>

                    </div>
                </div>
            </div>
            <?php
           }
           ?>
          
        </div>
        <!-- end row -->

        
    </div>