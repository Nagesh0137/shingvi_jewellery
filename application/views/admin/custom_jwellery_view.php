<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4"
                style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Pending Custom Jwellery </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">

                    <?php foreach ($custom_jwellery as $value) { ?>
                        <div class="text-center">
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-account-circle text-primary h1"></i>
                            </div>
                            <h5 class="mt-3 mb-1"><?= !empty($value['name']) ? $value['name'] : 'N/A'; ?></h5>
                        </div>
                    <?php } ?>

                    <ul class="list-unstyled mt-4">
                        <?php foreach ($custom_jwellery as $value) { ?>
                            <li>
                                <div class="d-flex">
                                    <i class="bx bx-phone text-primary fs-4"></i>
                                    <div class="ms-3">
                                        <h6 class="fs-14 mb-2">Phone</h6>
                                        <p class="text-muted fs-14 mb-0">
                                            <?= !empty($value['phone_number']) ? $value['phone_number'] : 'N/A'; ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-3">
                                <div class="d-flex">
                                    <i class="bx bx-mail-send text-primary fs-4"></i>
                                    <div class="ms-3">
                                        <h6 class="fs-14 mb-2">Email</h6>
                                        <p class="text-muted fs-14 mb-0">
                                            <?= !empty($value['email']) ? $value['email'] : 'N/A'; ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-3">
                                <div class="d-flex">
                                    <i class="bx bx-map text-primary fs-4"></i>
                                    <div class="ms-3">
                                        <h6 class="fs-14 mb-2">Location</h6>
                                        <p class="text-muted fs-14 mb-0">
                                            <?= !empty($value['address']) ? $value['address'] : 'N/A'; ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </div><!--end col-->
        <div class="col-xl-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-semibold">Overview</h5>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <?php foreach ($custom_jwellery as $value) { ?>
                                    <tr>
                                        <th scope="col">Budget:</th>
                                        <td scope="col"><?= !empty($value['budget']) ? $value['budget'] : 'N/A'; ?> &#8377;
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gold Color:</th>
                                        <td><?= !empty($value['gold_color']) ? $value['gold_color'] : 'N/A'; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Diamond Clarity</th>
                                        <td><?= !empty($value['diamond_clarity']) ? $value['diamond_clarity'] : 'N/A'; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gold Purity</th>
                                        <td><?= !empty($value['gold_purity']) ? $value['gold_purity'] : 'N/A'; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Description</th>
                                        <td><?= !empty($value['description']) ? $value['description'] : 'N/A'; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Product Image</th>
                                        <td>
                                            <?php
                                            if (!empty($value['image'])) {
                                                $aa = explode('||', $value['image']);
                                                $iimg = base_url() . 'uploads/' . $aa[0];
                                                ?>
                                                <img class="rounded me-2" alt="200x200" width="200" src="<?= $iimg; ?>"
                                                    data-holder-rendered="true">
                                            <?php } else { ?>
                                                <p>N/A</p>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="hstack gap-2">
                        <a href="<?= base_url(); ?>admin/custom_jwellery_progress/<?= $value['custom_jwellery_id']; ?>"
                            class="btn btn-soft-primary w-100">
                            Progress
                        </a>
                        <a href="<?= base_url(); ?>admin/custom_jwellery_cancel/<?= $value['custom_jwellery_id']; ?>"
                            class="btn btn-soft-danger w-100" onclick="return confirm('Are You Sure...')">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

</div>