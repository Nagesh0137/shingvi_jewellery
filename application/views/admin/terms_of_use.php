<div class="container">
    <?php if (isset($terms_of_use_det[0])) { ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>admin/update_terms_of_use"
                            method="post" enctype="multipart/form-data">
                            <div class="row">
                                <input type="hidden" name="terms_of_use_tbl_id" value="<?= $terms_of_use_det[0]['terms_of_use_tbl_id'] ?>">
                                <div class="col-md-4">
                                    <label for="formrow-firstname-input" class="form-label">Enter Terms Of Use Name</label>
                                    <input type="text" name="terms_of_use_name" class="form-control"
                                        placeholder="Enter Terms Of Use Name" value="<?= $terms_of_use_det[0]['terms_of_use_name'] ?>" required>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Terms Of Use Description</label>
                                    <textarea id="ckeditor" name="terms_of_use_details" rows="3" placeholder="Enter Terms Of Use Description"
                                        class="form-control"><?= $terms_of_use_det[0]['terms_of_use_details'] ?></textarea>
                                </div>
                                <div class="text-center col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>admin/save_terms_of_use" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="formrow-firstname-input" class="form-label">Enter Terms Of Use Name</label>
                                    <input type="text" name="terms_of_use_name" class="form-control"
                                        placeholder="Enter Terms Of Use Name" required>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Terms Of Use Description</label>
                                    <textarea id="ckeditor" name="terms_of_use_details" rows="3" placeholder="Enter Terms Of Use Description"
                                        class="form-control"></textarea>
                                </div>
                                <div class="text-center col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>admin/manage_category" method="get">
                            <div class="col-sm-12">
                                <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="searchTableList"
                                            value="<?= $this->input->get("q") ?>" placeholder="Search..." name="q">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table text-center table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Action</th>
                                        <th>Disclaimer Name</th>
                                        <th>Disclaimer Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($terms_of_use) && count($terms_of_use) > 0) {
                                        foreach ($terms_of_use as $key => $row) {
                                    ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td class="d-flex">

                                                    <a href="<?= base_url() ?>admin/edit_terms_of_use/<?= $row['terms_of_use_tbl_id'] ?>"
                                                        class="btn btn-info btn-sm p-0 m-0 pb-0" style="height:3vh;width:3vh">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="<?= base_url() ?>admin/delete_terms_of_use/<?= $row['terms_of_use_tbl_id'] ?>"
                                                        onclick="return confirm('Are You Sure to delete permanant data ?');"
                                                        class="btn btn-danger btn-sm p-0 m-0 pb-0" style="height:3vh;width:3vh">
                                                        <i class="fa fa-trash"></i>
                                                    </a>

                                                </td>
                                                <td><?= $row['terms_of_use_name'] ?></td>
                                                <td><?= $row['terms_of_use_details'] ?></td>
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
                            <br>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>