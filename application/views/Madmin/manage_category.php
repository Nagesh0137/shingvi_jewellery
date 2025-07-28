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
    <!-- start page title -->
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
            <h4 class="mb-sm-0 font-size-18">Main Category Details</h4>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/add_new_category" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Enter Category Name</label>
                                    <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="formrow-password-input" class="form-label">Choose Category Image (Square Image)</label>
                                    <input type="file" name="category_image" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Category Details / Description</label>
                                    <textarea name="category_details" rows="5" placeholder="Enter Category Description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/manage_category" method="get">
                        <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" value="<?= $this->input->get("q") ?>" placeholder="Search..." name="q">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                                &nbsp;&nbsp;
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
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
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Details</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($category) && count($category) > 0) {
                                    $i = $start;
                                    foreach ($category as $key => $row) {
                                ?>
                                        <tr>
                                            <td><?= ++$i ?></td>
                                            <td class="d-flex">

                                                <button type="button" class="btn btn-primary waves-effect btn-sm p-0 m-0 pb-0" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg<?= $key + 1 ?>" style="height:3vh;width:3vh"><i class="ri-edit-box-line "></i></button> &nbsp;&nbsp;

                                                <a href="<?= base_url() ?>Madmin/delete_category/<?= $row['category_id'] ?>" onclick="return confirm('Are You Sure to delete permanant data ?');" class="btn btn-danger btn-sm p-0 m-0 pb-0" style="height:3vh;width:3vh">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <div class="modal fade bs-example-modal-lg<?= $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-center fw-bold" id="myLargeModalLabel">Update <?= $row['category_name'] ?></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <form action="<?= base_url() ?>Madmin/update_new_category" method="post" enctype="multipart/form-data">
                                                                                    <input type="hidden" name="category_id" value="<?= $row['category_id'] ?>">
                                                                                    <div class="mb-3">
                                                                                        <label for="formrow-firstname-input" class="form-label">Enter Category Details / Description</label>
                                                                                        <textarea name="category_details" class="form-control" rows="4"><?= br2nl2(nl2br2($row['category_details'])) ?></textarea>
                                                                                    </div>

                                                                                    <div class="row">

                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="formrow-email-input" class="form-label">Category Name</label>
                                                                                                <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" required value="<?= $row['category_name'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="formrow-password-input" class="form-label">Choose Category Image (Square Image)</label>
                                                                                                <input type="file" name="category_image" class="form-control">
                                                                                                <input type="hidden" name="category_image1" value="<?= $row['category_image']; ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div class="col-lg-4">
                                                                                            <div class="mb-3">
                                                                                                <?php
                                                                                                $category_image = FCPATH . "uploads/" . $row['category_image'];
                                                                                                if (file_exists($category_image)) {
                                                                                                ?>

                                                                                                    <img class="rounded me-2" alt="200x200" width="200" src="<?= base_url() ?>uploads/<?= $row['category_image'] ?>" data-holder-rendered="true" style="height:100px;width:100px;object-fit:cover">
                                                                                                <?php
                                                                                                } else {
                                                                                                ?>
                                                                                                    N/A
                                                                                                <?php
                                                                                                }
                                                                                                ?>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div>
                                                                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <!-- end card body -->
                                                                        </div>
                                                                        <!-- end card -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                            </td>
                                            <td><?= $row['category_name'] ?></td>
                                            <td>
                                                <?php
                                                $category_image = FCPATH . "uploads/" . $row['category_image'];
                                                if (file_exists($category_image)) {
                                                ?>

                                                    <img class="rounded me-2" alt="200x200" width="200" src="<?= base_url() ?>uploads/<?= $row['category_image'] ?>" data-holder-rendered="true" style="height:100px;width:100px;object-fit:cover">
                                                <?php
                                                } else {
                                                ?>
                                                    N/A
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td><?= str_replace("\\", "", $row['category_details']) ?></td>
                                            <td><?= date('d M Y h:i A', $row['entry_time']) ?></td>

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
                        <?php
                        pagination($ttl_pages, $page_no);
                        ?>
                    </div>

                </div>
            </div>
        </div><!--end col-->
    </div>
    <!-- end row -->

</div>