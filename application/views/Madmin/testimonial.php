<div class="container-fluid">
    <!-- start page title -->
    <div class="col-12 ">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
            <h4 class="mb-sm-0 font-size-18">Testimonial Details</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-<?= isset($testimonial_det[0]) ? '12' : '6' ?>">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (isset($testimonial_det[0])) {
                    ?>
                        <form action="<?= base_url() ?>Madmin/update_testimonial" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="web_testimonial_id" value="<?= $testimonial_det[0]['web_testimonial_id'] ?>">
                            <input type="hidden" name="testimonial_img1" value="<?= $testimonial_det[0]['testimonial_img'] ?>">
                        <?php
                    } else {
                        ?>
                            <form action="<?= base_url() ?>Madmin/add_testimonial" method="post" enctype="multipart/form-data">
                            <?php
                        }
                            ?>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name" value="<?= (isset($testimonial_det[0])) ? $testimonial_det[0]['testimonial_details'] : '' ?>" name="testimonial_details">
                                <label for="floatingnameInput">Enter Customer Testimony</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name" required value="<?= (isset($testimonial_det[0])) ? $testimonial_det[0]['testimonial_person'] : '' ?>" name="testimonial_person">
                                        <label for="floatingnameInput">Enter Customer Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="file" name="testimonial_img" class="form-control">
                                        <label for="floatingSelectGrid">Choose Photo 400 x 400</label>
                                    </div>

                                </div>
                            </div>
                            <?php
                            $rate = 5;
                            if (isset($testimonial_det[0]['testimonial_img'])) {
                            ?>
                                <div class="col-md-2">
                                    <img src="<?= base_url() ?>uploads/<?= $testimonial_det[0]['testimonial_img'] ?>" width="100%" style="height:200px;width:200px;object-fit:cover">
                                </div>
                                <br>
                            <?php
                                $rate = $testimonial_det[0]['rating'];
                            }
                            ?>
                            <div class="col-md-6">
                                <input type="text" name="rating" id="rating" value="5" hidden>
                                <p class="text-muted float-start me-3">
                                    <span class="text-dark fw-bold">BAD</span>
                                    <span class="bx bxs-star <?= ($rate >= 1) ? 'text-warning' : 'text-danger' ?>" onclick="star(1)"></span>
                                    <span class="bx bxs-star <?= ($rate >= 2) ? 'text-warning' : 'text-danger' ?>" onclick="star(2)"></span>
                                    <span class="bx bxs-star <?= ($rate >= 3) ? 'text-warning' : 'text-danger' ?>" onclick="star(3)"></span>
                                    <span class="bx bxs-star <?= ($rate >= 4) ? 'text-warning' : 'text-danger' ?>" onclick="star(4)"></span>
                                    <span class="bx bxs-star <?= ($rate >= 5) ? 'text-warning' : 'text-danger' ?>" onclick="star(5)"></span>
                                    <span class="text-dark fw-bold">GOOD</span>
                                </p>

                                <!-- <span  style="font-size: 17px;">
                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                <button type="button" class="starbutton" onclick="star(1)"><i class="fa fa-star st <?= ($rate >= 1) ? 'star-checked' : '' ?>"  style="font-size: 17px;"></i></button>
                                <button type="button" class="starbutton"  onclick="star(2)"><i class="fa fa-star st <?= ($rate >= 2) ? 'star-checked' : '' ?>"  style="font-size: 17px;"></i></button>
                                <button type="button" class="starbutton" onclick="star(3)"><i class="fa fa-star st <?= ($rate >= 3) ? 'star-checked' : '' ?>"  style="font-size: 17px;"></i></button>
                                <button type="button" class="starbutton" onclick="star(4)"><i class="fa fa-star st <?= ($rate >= 4) ? 'star-checked' : '' ?>"  style="font-size: 17px;"></i></button>
                                <button type="button" class="starbutton"  onclick="star(5)"><i class="fa fa-star st <?= ($rate >= 5) ? 'star-checked' : '' ?>"  style="font-size: 17px;"></i></button>
                            &nbsp;Good
                            </span> -->
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary w-md">Update & Save</button>
                            </div>
                            </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <?php
        if (!isset($testimonial_det)) {
        ?>
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
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Action</th>
                                        <th>Person Name</th>
                                        <th>Image</th>
                                        <th>Testimony</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (count($web_testimonial) && isset($web_testimonial)) {
                                        foreach ($web_testimonial as $key => $row) {
                                    ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>Madmin/edit_testimonial/<?= $row['web_testimonial_id'] ?>" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= base_url() ?>Madmin/delete_testimonial/<?= $row['web_testimonial_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record ?...')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                                <td><?= $row['testimonial_person'] ?></td>
                                                <td>
                                                    <div class="mt-4 mt-md-0">
                                                        <?php
                                                        $imagePath = FCPATH . 'uploads/' . $row['testimonial_img'];
                                                        if (is_file($imagePath)):
                                                        ?>
                                                            <img class="rounded-circle avatar-xl" alt="200x200" src="<?= base_url('uploads/' . $row['testimonial_img']) ?>" data-holder-rendered="true">
                                                        <?php else: ?>
                                                            <p>Image not available</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>

                                                <td><?= $row['testimonial_details'] ?></td>
                                                <td><?= $row['rating'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<script>
    let rate = 0; // This should be dynamically set, depending on the initial rating.

    function star(value) {
        rate = value;
        // Optionally, update the display based on the rating.
        // This might involve sending the rating to the server or just updating the display.
        updateStars();
    }

    function updateStars() {
        const stars = document.querySelectorAll('.bx.bxs-star');
        stars.forEach((star, index) => {
            if (index < rate) {
                star.classList.add('text-warning');
            } else {
                star.classList.remove('text-warning');
            }
        });
    }
</script>