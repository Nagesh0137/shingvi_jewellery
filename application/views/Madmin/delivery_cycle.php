<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <?php
            if(isset($delivery_data[0])){
                ?>
                <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/update_delivery_cycle_details" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="delivery_cycle_tbl_id" value="<?= $delivery_data[0]['delivery_cycle_tbl_id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Delivery Label</label>
                                    <input type="text" class="form-control" id="formrow-email-input" placeholder="Enter Delivery Cycle Label" value="<?= $delivery_data[0]['delivery_cycle_label'] ?>" required name="delivery_cycle_label">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Delivery Cycle Description</label>
                                    <textarea class="form-control" name="delivery_cycle_description" id="formrow-password-input" required placeholder="Delivery Cycle Description"><?= $delivery_data[0]['delivery_cycle_description'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update & Save Details</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
                <?php
            }else{
                ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>Madmin/save_delivery_cycle_details" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-email-input" class="form-label">Delivery Label</label>
                                        <input type="text" class="form-control" id="formrow-email-input" placeholder="Enter Delivery Cycle Label" name="delivery_cycle_label" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-password-input" class="form-label">Delivery Cycle Description</label>
                                        <textarea class="form-control" name="delivery_cycle_description" id="formrow-password-input" required placeholder="Delivery Cycle Description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Save Details</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <?php
            }
            ?>
            
            <!-- end card -->
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                   
                    <div class="table-responsive">
                        <table class="table text-center table-bordered table-sm m-0">
                            <thead>
                                <tr>
                                    <th>Srno</th>
                                    <th>Action</th>
                                    <th>label</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($details)>0 && !empty($details)){
                                    foreach($details as $key=>$row){
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $key+1 ?></th>
                                            <td class="d-flex">
                                                <a href="<?= base_url() ?>Madmin/edit_delivery_cycle/<?= $row['delivery_cycle_tbl_id'] ?>" class="btn btn-outline-primary py-1 px-2"><i class="fa fa-edit"></i></a>
                                                &nbsp;
                                                <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?= base_url() ?>Madmin/delete_delivery_cycle/<?= $row['delivery_cycle_tbl_id'] ?>" class="btn btn-outline-danger py-1 px-2"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td><?= $row['delivery_cycle_label'] ?></td>
                                            <td><?= $row['delivery_cycle_description'] ?></td>
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