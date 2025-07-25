<div class="container-fluid">
<div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Add Special Days Offer</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
            if(isset($special_details[0])){
                ?>
                <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url() ?>Madmin/update_special_offers" enctype="multipart/form-data">
                        <input type="hidden" name="special_days_id" value="<?= $special_details[0]['special_days_id'] ?>">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Special Days Name</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Special Days Name" name="special_day" value="<?= $special_details[0]['special_day'] ?>">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="formrow-firstname-input" class="form-label">Special Days Banner Image (310px X 300px)</label>
                                <input type="file" class="form-control" id="formrow-firstname-input" placeholder="Enter Special Days Name" name="special_banner_image">
                            </div>
                            <div class="mb-3 col-md-6">
                                <?php
                                $imgpath=FCPATH . "uploads/" . $special_details[0]['special_banner_image'];
                                if(!empty($imgpath) && file_exists($imgpath)){
                                    ?>
                                    <img src="<?= base_url() ?>uploads/<?= $special_details[0]['special_banner_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="">
                                    <?php
                                }else{
                                    ?>
                                    N/A
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update & Save Details</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
                <?php
            }else{
                ?>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="<?= base_url() ?>Madmin/save_special_offers" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Special Days Name</label>
                                    <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Special Days Name" name="special_day">
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Special Days Banner Image (310px X 300px) </label>
                                    <input type="file" class="form-control" id="formrow-firstname-input" placeholder="Enter Special Days Name" name="special_banner_image">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Save Details</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <?php
            }
        ?>
        
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm text-center mb-0">

                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Srno</th>
                                    <th>Special Day</th>
                                    <th>Banner Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(!empty($special_days) && count($special_days)>0){
                                    $i=$start;
                                    foreach($special_days as $key=>$row){
                                        ?>
                                        <tr>
                                            <td style="font-size: 20px;" class="d-flex align-items-center justify-content-center">
                                                <a href="<?= base_url() ?>Madmin/edit_special_offer/<?= $row['special_days_id'] ?>" class="btn btn-outline-primary py-1 px-2"><i class="fa fa-edit"></i></a> &nbsp;
                                                <a href="<?= base_url() ?>Madmin/delete_spcial_offer/<?= $row['special_days_id'] ?>" class="btn btn-outline-danger py-1 px-2" onclick="return confirm('Are You Sure To Delete These Record ?..')"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td><?= ++$i ?></td>
                                            <td class="text-capitalize"><?= $row['special_day'] ?></td>
                                            <td>
                                            <?php
                                                $imgpath=FCPATH . "uploads/" . $row['special_banner_image'];
                                                if(!empty($imgpath) && file_exists($imgpath)){
                                                    ?>
                                                    <img src="<?= base_url() ?>uploads/<?= $row['special_banner_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="">
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
                                        <td class="text-center" colspan="20">No Record Found</td>
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
    </div>
</div>