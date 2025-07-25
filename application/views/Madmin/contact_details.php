<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Update Contact Details</h4>
            </div>
        </div>
    </div>
                        
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
             
                <div class="card-body border-bottom">
                    <form action="<?=base_url();?>Madmin/contact_details_save" enctype="multipart/form-data" method="post">
                            <div class="row g-3">
                                <div class="col-xxl-4 col-lg-6">
                                    <label for="Primary Email" class="form-label">Primary Email</label>
                                    <input type="text" class="form-control" id="textTableList" placeholder="Primary Email ..." name="email1" value="<?=$web_contact_details['email1'];?>">
                                </div>
                                <div class="col-xxl-4 col-lg-6">
                                    <label for="Primary Email" class="form-label">Secondary Email</label>
                                    <input type="text" class="form-control" id="textTableList" placeholder="Secondary Email ..."  name="email2" value="<?=$web_contact_details['email2'];?>">
                                </div>
                                <div class="col-xxl-2 col-lg-6">
                                    <label for="" class="form-label">Calling Mobile</label>
                                    <input type="text" name="mobile_no" value="<?=$web_contact_details['mobile_no'];?>" class="form-control" placeholder="Enter Contact Details" required>
                                </div>
                                <div class="col-xxl-2 col-lg-6">
                                    <label for="" class="form-label">Whatsapp Mobile</label>
                                    <input type="text" name="mobile_no2" value="<?=$web_contact_details['mobile_no2'];?>" placeholder="Enter Contact Details" class="form-control" required>
                                </div>
                                <div class="col-xxl-4 col-lg-4">
                                    <label for="" class="form-label">Web Logo</label>
                                    <input type="hidden" name="cont_id" value="<?=$web_contact_details['cont_id'];?>" class="form-control d-none" required>
                                    <input type="hidden"  name="logo1" value="<?=$web_contact_details['logo'];?>" class="form-control d-none" required>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                                <div class="col-xxl-2 col-lg-4">
                                    <div>
                                        <img src="<?= base_url() ?>uploads/<?=$web_contact_details['logo'];?>" alt="" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary">Update & Save</button>
                                </div>
                            </div>
                    </form>
                </div>
              
                <!-- end card body -->
            </div><!--end card-->
        </div><!--end col-->

    </div><!--end row-->
    

</div>