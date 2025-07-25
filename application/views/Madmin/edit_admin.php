
<div class="container-fluid">
<div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">UPDATE ADMIN <?=$admin_det[0]['admin_name']?></h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>Madmin/update_admin" method="post">
                        <input type="hidden" name="admin_tbl_id" value="<?=$admin_det[0]['admin_tbl_id']?>">
                        <div class="row">
                           
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Admin Name</label>
                                <input type="text" name="admin_name" value="<?=$admin_det[0]['admin_name']?>" placeholder="Enter Admin Name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Admin Mobile</label>
                                <input type="text" name="admin_mobile" value="<?=$admin_det[0]['admin_mobile']?>" placeholder="Enter Admin Mobile" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Admin Email</label>
                                <input type="text" name="admin_email" value="<?=$admin_det[0]['admin_email']?>" placeholder="Enter Admin Email" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Admin City</label>
                                <input type="text" name="admin_city" value="<?=$admin_det[0]['admin_city']?>" placeholder="Enter Admin City" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Admin Country</label>
                                <input type="text" name="admin_contry" value="<?=$admin_det[0]['admin_contry']?>" placeholder="Enter Admin Country" class="form-control" readonly required value="INDIA">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Admin Password</label>
                                <input type="text" name="admin_password" value="<?=$admin_det[0]['admin_password']?>" placeholder="Enter Admin Password" class="form-control" required minlength="6">
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-sm btn-primary">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
