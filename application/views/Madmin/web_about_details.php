<div class="container-fluid">
    <?php
    function nl2br2($string)
    {
        $string = str_replace(array('\r\n', '\r', '\n'), "<br />", $string);
        $string = ltrim($string, "'");
        $string = rtrim($string, "'");
        return $string;
    }
    function br2nl2($text)
    {
        $breaks = array("<br />", "<br>", "<br/>");
        $text = str_ireplace($breaks, "\r\n", $text);
        return $text;
    }
    ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Web About Details</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-<?= isset($about_data[0]) ? '12' : '6' ?>">
            <div class="card">
                <div class="card-body border-bottom">
                    <?php
                    if (isset($about_data[0])) {
                    ?>
                        <form action="<?= base_url() ?>Madmin/update_about_details" method="post" enctype="multipart/form-data" id="form1">
                            <input type="hidden" name="about_id" value="<?= $about_data[0]['about_id'] ?>">
                            <div class="row g-3">
                                <div class="col-xxl-6 col-lg-6">
                                    <label for="about_title" class="form-label">About Title</label>
                                    <input type="text" placeholder="Enter About title" name="about_title" class="form-control" value="<?= $about_data[0]['about_title'] ?>" required>
                                </div>

                                <div class="col-xxl-6 col-lg-6">
                                    <label for="about_desc" class="form-label">About Description</label>
                                    <textarea id="ckeditor" name="about_desc" placeholder="Enter About Description" class="form-control" rows="4" required><?= $about_data[0]['about_desc'] ?></textarea>
                                </div>
                                <div class="col-xxl-4 col-lg-6">
                                    <label for="about_image" class="form-label">About Image</label>

                                    <input type="file" name="about_image" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url() ?>uploads/<?= $about_data[0]['about_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary">Update & Save About Details</button>
                                </div>
                            </div>
                        </form>
                    <?php
                    } else {
                    ?>
                        <form action="<?= base_url() ?>Madmin/about_details_save" method="post" enctype="multipart/form-data" id="form1">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-xxl-12 col-lg-12">
                                            <label for="about_title" class="form-label">About Title</label>
                                            <input type="text" placeholder="Enter About title" name="about_title" class="form-control" required>
                                        </div>
                                        <div class="col-xxl-12 col-lg-12">
                                            <label for="about_image" class="form-label">About Image</label>
                                            <input type="file" name="about_image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-xxl-12 col-lg-12">
                                        <label for="about_desc" class="form-label">About Description</label>
                                        <textarea id="ckeditor" name="about_desc" placeholder="Enter About Description" class="form-control" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary">Save About Details</button>
                                </div>
                            </div>
                        </form>
                    <?php
                    }
                    ?>


                </div>
                <!-- end card body -->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-lg-<?= isset($about_data[0]) ? '12' : '6' ?>">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (!isset($about_details[0])) {
                    ?>
                        <div class="table-responsive">
                            <table class="table align-middle table-bordered text-center dt-responsive nowrap w-100 table-check" id="job-list">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">About Title</th>
                                        <th scope="col">About Desc</th>
                                        <th scope="col">About Image</th>
                                    </tr>
                                    <?php
                                    if (count($web_about_details) > 0) {
                                        $i = 0;
                                        foreach ($web_about_details as $key => $value) {
                                    ?>
                                            <tr>
                                                <td class="btn-group">
                                                    <a href="<?= base_url() ?>Madmin/edit_about_details/<?= $value['about_id'] ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                    &nbsp;
                                                    <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?= base_url(); ?>Madmin/about_details_delete/<?= $value['about_id']; ?>"><button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button></a> &nbsp;&nbsp;

                                                </td>
                                                <td><?= $key + 1; ?></td>
                                                <td><?= $value['about_title']; ?></td>
                                                <td>
                                                    <?= strlen($value['about_desc']) > 100 ? substr($value['about_desc'], 0, 100) . '...' : $value['about_desc']; ?>
                                                </td>

                                                <td>
                                                    <?php
                                                    $about_image = FCPATH . "uploads/" . $value['about_image'];
                                                    if (file_exists($about_image)) {
                                                    ?>
                                                        <img class="rounded me-2" alt="200x200" width="200" src="<?= base_url() ?>uploads/<?= $value['about_image'] ?>" style="height:100px;width:100px;object-fit:cover" data-holder-rendered="true">
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
                                </thead>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </div><!--end row-->


</div>
<style type="text/css">
    #form2 {
        display: none;
    }
</style>