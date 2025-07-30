<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Update Profile Details</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/save_admin_edit_details" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4 mt-2">
                                <label class="form-label">Name</label>
                                <input type="hidden" name="admin_tbl_id" value="<?= $admin_det['admin_tbl_id']; ?>" required class="form-control">
                                <input type="text" name="admin_name" value="<?= $admin_det['admin_name']; ?>" required readonly class="form-control">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label class="form-label">Email</label>
                                <input type="text" name="admin_email" value="<?= $admin_det['admin_email']; ?>" required class="form-control">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label class="form-label">Mobile</label>
                                <input type="text" name="admin_mobile_no" value="<?= $admin_det['admin_mobile_no']; ?>" required class="form-control">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label class="form-label">City</label>
                                <input type="text" name="admin_city" value="<?= $admin_det['admin_city']; ?>" required class="form-control">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label class="form-label">country</label>
                                <input type="text" name="admin_contry" value="<?= $admin_det['admin_contry']; ?>" required class="form-control">
                            </div>
                            <div class="col-md-4 mt-2"> </div>
                            <div class="col-md-4 mt-2">
                                <label class="form-label">Old Password</label>
                                <input type="text" name="old_password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label class="form-label">New Password</label>
                                <input type="text" name="new_password" class="form-control" placeholder="New Password">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label class="form-label">Confirm Password</label>
                                <input type="text" name="confirm_password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-8 text-right">
                                <br>
                                <button class="btn btn-primary">Update Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>