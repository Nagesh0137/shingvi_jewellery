<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Update Newslater Details</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>Madmin/update_newslater_details">
                        <input type="hidden" name="newslater_tbl_id" value="<?= $newslater_details[0]['newslater_tbl_id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Newslater First Image <span class="text-danger">(500px X 750px)</span></label>
                                            <input type="file" name="newslater_first_image" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <a href="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_first_image'] ?>" title="Click On Image To Open In New Tab" target="__blank">
                                            <img src="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_first_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="newslater_image">
                                        </a>
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Newslater Second Image <span class="text-danger">(500px X 333px)</span></label>
                                            <input type="file" name="newslater_second_image" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <a href="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_second_image'] ?>" title="Click On Image To Open In New Tab" target="__blank">
                                            <img src="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_second_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="newslater_image">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Newslater Thired Image <span class="text-danger">(612px X 408px)</span></label>
                                            <input type="file" name="newslater_thired_image" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <a href="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_thired_image'] ?>" title="Click On Image To Open In New Tab" target="__blank">
                                            <img src="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_thired_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="newslater_image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Newslater Title</label>
                                                <input type="text" name="newslatertitle" class="form-control" id="formrow-firstname-input" placeholder="Enter Newslater Title" value="<?= $newslater_details[0]['newslatertitle'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-password-input" class="form-label">Newslater Description</label>
                                            <textarea name="newlater_description" placeholder="Enter Newslater Description" id="" class="form-control"><?= $newslater_details[0]['newlater_description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-md">Update & Save Details</button>
                        </div>
                    </form> -->
                    <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>Madmin/update_newslater_details">
    <input type="hidden" name="newslater_tbl_id" value="<?= $newslater_details[0]['newslater_tbl_id'] ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Newslater First Image <span class="text-danger">(500px X 750px)</span></label>
                        <input type="file" name="newslater_first_image" class="form-control" id="first_image" onchange="validateImage(this, 500, 750, 'first_image_error')">
                        <span id="first_image_error" class="text-danger"></span>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <a href="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_first_image'] ?>" title="Click On Image To Open In New Tab" target="__blank">
                        <img src="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_first_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="newslater_image">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Newslater Second Image <span class="text-danger">(500px X 333px)</span></label>
                        <input type="file" name="newslater_second_image" class="form-control" id="second_image" onchange="validateImage(this, 500, 333, 'second_image_error')">
                        <span id="second_image_error" class="text-danger"></span>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <a href="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_second_image'] ?>" title="Click On Image To Open In New Tab" target="__blank">
                        <img src="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_second_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="newslater_image">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Newslater Thired Image <span class="text-danger">(612px X 408px)</span></label>
                        <input type="file" name="newslater_thired_image" class="form-control" id="third_image" onchange="validateImage(this, 612, 408, 'third_image_error')">
                        <span id="third_image_error" class="text-danger"></span>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <a href="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_thired_image'] ?>" title="Click On Image To Open In New Tab" target="__blank">
                        <img src="<?= base_url() ?>uploads/<?= $newslater_details[0]['newslater_thired_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="newslater_image">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Newslater Title</label>
                        <input type="text" name="newslatertitle" class="form-control" id="formrow-firstname-input" placeholder="Enter Newslater Title" value="<?= $newslater_details[0]['newslatertitle'] ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="formrow-password-input" class="form-label">Newslater Description</label>
                    <textarea name="newlater_description" placeholder="Enter Newslater Description" id="" class="form-control"><?= $newslater_details[0]['newlater_description'] ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary w-md">Update & Save Details</button>
    </div>
</form>

<script>
    function validateImage(input, requiredWidth, requiredHeight, errorElementId) {
        const file = input.files[0];
        if (file) {
            const image = new Image();
            image.onload = function () {
                // Check if the image size matches the required width and height
                if (image.width !== requiredWidth || image.height !== requiredHeight) {
                    // Display an error message
                    document.getElementById(errorElementId).textContent = `The image must be ${requiredWidth}px X ${requiredHeight}px.`;

                    // Clear the file input field
                    input.value = '';
                } else {
                    // Clear the error message if image size is correct
                    document.getElementById(errorElementId).textContent = '';
                }
            };
            // Set the source of the image to check its dimensions
            image.src = URL.createObjectURL(file);
        }
    }
</script>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>