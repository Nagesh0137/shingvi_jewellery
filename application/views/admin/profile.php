<div class="container">
   <div class="row">
      
      <div class="col-lg-12">
         <div class="iq-edit-list-data">
            <div class="tab-content">
               <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Company Information</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <form method="POST" action="<?=base_url()?>admin/company_details_update" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-md-3 text-center">
                                 <div class="profile-img-edit border border-light col-12">
                                    <?php 
                                       if(!empty($company_det[0]['company_logo']))
                                       {
                                          $img = $company_det[0]['company_logo'];
                                       }
                                       else{
                                          $img = '219983.png';
                                       }
                                    ?>
                                      <img class="profile-pic  w- 100" src="<?=base_url()?>uploads/<?=$img?>" style="width: 150px;" alt="profile-pic" loading="lazy">
                                      <div class="p-image d-flex mt-2 mb-2 align-items-center justify-content-center">
                                          <span class="material-symbols-outlined border p-1 border-success edit-icon" style="cursor: pointer;"><i class="fa fa-pencil text-primary"></i></span>
                                           <input name="company_logo" class="file-upload form-control" type="file" accept="image/*" style="display: none;"/>
                                           <input name="company_logo1" value="<?=$company_det[0]['company_logo'] ?>" class="form-control" type="hidden">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                 <input type="hidden" name="company_det_id" value="<?=$company_det[0]['company_det_id']?>">
                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="uname" class="form-label">Company Name:</label>
                                       <input type="text" class="form-control" id="uname" value="<?=$company_det[0]['company_name']?>" name="company_name"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname" class="form-label">Company Email:</label>
                                       <input type="text" name="company_email" value="<?=$company_det[0]['company_email']?>" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname" class="form-label">Company Mobile:</label>
                                       <input type="text" name="mobile_no" value="<?=$company_det[0]['mobile_no']?>" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="cname" class="form-label">FaceBook Link:</label>
                                       <input type="text" class="form-control" name="facebook_link" value="<?=$company_det[0]['facebook_link']?>" placeholder="Enter Facebook Link">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="cname" class="form-label">Instagram Link:</label>
                                       <input type="text" class="form-control" name="instagram_link" value="<?=$company_det[0]['instagram_link']?>" placeholder="Enter Facebook Link">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="cname" class="form-label">Linkedin Link:</label>
                                       <input type="text" class="form-control" name="linkedin_link" value="<?=$company_det[0]['linkedin_link']?>" placeholder="Enter linkedin Link">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label class="form-label">Address:</label>
                                       <textarea class="form-control" name="company_address" rows="5" style="line-height: 22px;"><?=$company_det[0]['company_address']?></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mt-1 text-center">
                              <button type="submit" class="btn btn-primary me-2 text-center">Submit</button>
                           </div>
                           
                           
                        </form>
                     </div>
                  </div>
               </div>
               <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the file input, image, and edit icon elements
        var fileUpload = document.querySelector('.file-upload');
        var profilePic = document.querySelector('.profile-pic');
        var editIcon = document.querySelector('.edit-icon');

        // Add an onclick event to the edit icon
        editIcon.addEventListener('click', function() {
            // Trigger the click event on the file input
            fileUpload.click();
        });

        // Add an event listener to the file input for when a file is selected
        fileUpload.addEventListener('change', function(event) {
            // Check if a file is selected
            if (event.target.files && event.target.files[0]) {
                var reader = new FileReader();

                // Read the selected file
                reader.onload = function(e) {
                    // Update the src of the image to the selected file
                    profilePic.src = e.target.result;
                };

                // Convert the file to a data URL
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    });
</script>
               <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Change Password</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <form>
                           <div class="form-group">
                              <label for="cpass" class="form-label">Current Password:</label>
                              <a href="#" class="float-end">Forgot Password</a>
                              <input type="Password" class="form-control" id="cpass" value="">
                           </div>
                           <div class="form-group">
                              <label for="npass" class="form-label">New Password:</label>
                              <input type="Password" class="form-control" id="npass" value="">
                           </div>
                           <div class="form-group">
                              <label for="vpass" class="form-label">Verify Password:</label>
                              <input type="Password" class="form-control" id="vpass" value="">
                           </div>
                           <button type="submit" class="btn btn-primary me-2">Submit</button>
                           <button type="reset" class="btn btn-danger-subtle">cancel</button>
                        </form>
                     </div>
                  </div>
               </div>
               
               
            </div>
         </div>
      </div>
   </div>
</div>