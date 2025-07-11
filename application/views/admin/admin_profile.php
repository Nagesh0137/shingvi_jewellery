<div class="container">
   <div class="row">

      <div class="col-lg-12">
         <div class="iq-edit-list-data">
            <div class="tab-content">
               <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Admin Information</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <form method="POST" action="<?= base_url() ?>admin/update_admin_profile" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-md-3 text-center">
                                 <div class="profile-img-edit border border-light col-12">
                                    <?php
                                    if (!empty($admin_det[0]['admin_profile_logo'])) {
                                       $img = $admin_det[0]['admin_profile_logo'];
                                    } else {
                                       $img = '219983.png';
                                    }
                                    ?>
                                    <img class="profile-pic rounded-circle pt-1 w- 100" src="<?= base_url() ?>uploads/<?= $img ?>" style="width: 150px;height: 150px;object-fit: cover;" alt="profile-pic" loading="lazy">
                                    <div class="p-image d-flex mt-2 mb-2 align-items-center justify-content-center">
                                       <span class="material-symbols-outlined btn border p-1 border-success edit-icon" style="cursor: pointer;"><i class="fa fa-pencil text-primary"></i></span>
                                       <input name="admin_profile_logo" class="file-upload form-control" type="file" accept="image/*" style="display: none;" />
                                       <input name="admin_profile_logo1" value="<?= $admin_det[0]['admin_name'] ?>" class="form-control" type="hidden">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-9">
                                 <input type="hidden" name="admin_tbl_id" value="<?= $admin_det[0]['admin_tbl_id'] ?>">
                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="uname" class="form-label">Admin Name:</label>
                                       <input type="text" class="form-control" id="uname" value="<?= $admin_det[0]['admin_name'] ?>" name="admin_name" pattern="^[^0-9]*$" title="Name should not contain any numbers">

                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname" class="form-label">Admin Email:</label>
                                       <input type="text" name="admin_email" value="<?= $admin_det[0]['admin_email'] ?>" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname" class="form-label">Admin Mobile:</label>
                                       <input type="text" name="admin_mobile_no" value="<?= $admin_det[0]['admin_mobile_no'] ?>" class="form-control" pattern="^[987]\d{9}$" title="Enter valid 10-digit mobile number starting with 9, 8, or 7">

                                    </div>


                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 text-center">
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