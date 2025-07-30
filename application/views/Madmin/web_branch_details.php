<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Web Branch Details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <form action="<?= base_url() ?>Madmin/branch_details_save" method="post" enctype="multipart/form-data" id="form1">
                        <div class="row g-3">
                            <div class="col-xxl-4 col-lg-6">
                                <label for="blog_by" class="form-label">Branch Name</label>
                                <input type="text" name="branch_name" placeholder="Enter Branch Name" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-6">
                                <label for="blog_label" class="form-label">Branch Mobile No</label>
                                <input type="text" placeholder="Enter Branch Mobile No" name="branch_mobile_no" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_det" class="form-label">Branch Phone No</label>
                                <input type="text" name="branch_phone_no" placeholder="Enter Branch Phone No" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_image" class="form-label">Branch Email</label>
                                <input type="text" name="branch_email" placeholder="Enter Branch Email" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_image" class="form-label">Branch Image</label>
                                <input type="file" name="branch_image" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_desc">Branch Address</label>
                                <textarea id="ckeditor" name="branch_address" class="form-control" rows="4" placeholder="Enter Branch Address"></textarea>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_desc">Branch Location</label>
                                <textarea id="ckeditor" name="branch_location" class="form-control" rows="4" placeholder="Enter Blog Description"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary">Add Branch</button>
                            </div>
                        </div>
                    </form>
                    <form action="<?= base_url() ?>Madmin/branch_details_update" method="post" enctype="multipart/form-data" id="form2">
                        <input type="hidden" name="branch_id" id="branch_id" class="form-control" required>
                        <div class="row g-3">
                            <div class="col-xxl-4 col-lg-6">
                                <label for="blog_by" class="form-label">Branch Name</label>
                                <input type="text" name="branch_name" id="branch_name" placeholder="Enter Branch Name" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-6">
                                <label for="blog_label" class="form-label">Branch Mobile No</label>
                                <input type="text" placeholder="Enter Branch Mobile No" name="branch_mobile_no" id="branch_mobile_no" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_det" class="form-label">Branch Phone No</label>
                                <input type="text" name="branch_phone_no" id="branch_phone_no" placeholder="Enter Branch Phone No" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_image" class="form-label">Branch Email</label>
                                <input type="text" name="branch_email" id="branch_email" placeholder="Enter Branch Email" class="form-control" required>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_image" class="form-label">Branch Image</label>
                                <input type="file" name="branch_image" class="form-control">
                                <input type="hidden" name="branch_image1" id="branch_image" class="form-control">
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <span id="img"></span>
                            </div>
                            <div class="col-xxl-12 col-lg-12">
                                <label for="blog_desc">Branch Address</label>
                                <textarea id="ckeditor" name="branch_address" id="branch_address" class="form-control" rows="4" placeholder="Enter Branch Address"></textarea>
                            </div>
                            <div class="col-xxl-4 col-lg-4">
                                <label for="blog_desc">Branch Location</label>
                                <textarea id="ckeditor" name="branch_location" id="branch_location" class="form-control" rows="4" placeholder="Enter Blog Description"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary"><b>Update Branch Details</b></button>
                                <button class="btn btn-danger" onclick="cancel()" type="button"><b>Cancel</b></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <style>
                        table {
                            white-space: nowrap;
                        }

                        td {
                            white-space: nowrap;
                            /* Prevents text from wrapping onto the next line */
                            overflow: hidden;
                            /* Hides text that overflows */
                            text-overflow: ellipsis;
                            /* Adds the ellipsis (...) when text is too long */
                            max-width: 200px;
                            /* Set the max-width for the td element */
                        }
                    </style>
                    <div class="table-responsive">
                        <table class="table align-middle dt-responsive nowrap w-100 table-check table-bordered text-center table-hover" id="job-list">
                            <thead>
                                <tr>
                                    <th scope="col">Action</th>
                                    <th scope="col">No</th>
                                    <th scope="col">Branch Name</th>
                                    <th scope="col">Branch Mobile</th>
                                    <th scope="col">Branch Phone</th>
                                    <th scope="col">Branch Email</th>
                                    <th scope="col">Branch Address</th>
                                    <th scope="col">Branch Location</th>
                                    <th scope="col">Branch Image</th>
                                </tr>
                            </thead>
                            <style>

                            </style>
                            <tbody>
                                <?php
                                if (count($web_branch_details) > 0) {
                                    foreach ($web_branch_details as $key => $value) {
                                ?>
                                        <tr>
                                            <td class="btn-group">
                                                <button class="btn btn-outline-primary btn-sm" onclick="updatebranch('<?= $value['branch_id']; ?>','<?= $value['branch_name']; ?>','<?= $value['branch_mobile_no']; ?>','<?= $value['branch_phone_no']; ?>','<?= $value['branch_email']; ?>','<?= $value['branch_address']; ?>','<?= $value['branch_location']; ?>','<?= $value['branch_image']; ?>')"><i class="fa fa-edit"></i></button> &nbsp;

                                                <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?= base_url(); ?>Madmin/branch_details_delete/<?= $value['branch_id']; ?>"><button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button></a>

                                            </td>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $value['branch_name']; ?></td>
                                            <td><?= $value['branch_mobile_no']; ?></td>
                                            <td><?= $value['branch_phone_no']; ?></td>
                                            <td><?= $value['branch_email']; ?></td>
                                            <td><?= $value['branch_address']; ?></td>
                                            <td class="ellipse-button">
                                                <?php echo $value['branch_location']; ?>
                                            </td>
                                            <td>
                                                <?php
                                                $branch_image = FCPATH . "uploads/" . $value['branch_image'];
                                                if (file_exists($branch_image)) {
                                                ?>
                                                    <img class="rounded me-2" alt="200x200" width="200" src="<?= base_url() ?>uploads/<?= $value['branch_image'] ?>" style="height:100px;width:100px;object-fit:contain" data-holder-rendered="true">
                                                <?php
                                                } else {
                                                ?>
                                                    N/A
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td class="text-center" colspan="20">No Record Found</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>

                <!-- end card body -->
            </div><!--end card-->
        </div><!--end col-->

    </div><!--end row-->


</div>
<style type="text/css">
    #form2 {
        display: none;
    }
</style>
<script type="text/javascript">
    function updatebranch(branch_id, branch_name, branch_mobile_no, branch_phone_no, branch_email, branch_address, branch_location, branch_image) {
        var iim = "<img src='<?= base_url(); ?>uploads/" + branch_image + "' style='height:100px;width:100px;object-fit:contain'>";
        $('#branch_id').val(branch_id);
        $('#branch_name').val(branch_name);
        $('#branch_mobile_no').val(branch_mobile_no);
        $('#branch_phone_no').val(branch_phone_no);
        $('#branch_email').val(branch_email);
        $('#branch_address').val(branch_address);
        $('#branch_location').val(branch_location);
        $('#branch_image').val(branch_image);
        $('#img').html(iim);
        $('#form1').css('display', 'none');
        $('#form2').css('display', 'inline-block');
    }

    function cancel() {
        $('#form1').css('display', 'inline-block');
        $('#form2').css('display', 'none');
    }
</script>