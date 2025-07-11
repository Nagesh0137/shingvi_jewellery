<style type="text/css">
    th,
    td,
    tr,
    table {
        border: 1px solid lightgray;
    }
</style>
<div class="container bg-white p-4">
    <div class="row">
        <div class="col-12">
            <h3 class="heading">Admin Positions</h3>
        </div>
        <hr>
    </div>
    <div class="card-body">
        <form action="<?= base_url() ?>admin/save_admin_position" class="g-3 row needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="col-12 col-md-6">
                <label for="validationCustom01" class="form-label">Name <span class="text-danger">*</span> </label>
                <input type="text" class="form-control" id="validationCustom01" name="admin_position" placeholder="Enter Full Name" required />
                <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-md-12 text-center">
                <button class="btn btn-ml btn-success text-uppercase mt-4"><b>Save</b></button>
            </div>
        </form>
    </div>

    <div class="table-responsive border-dark rounded-3 mt-3">
        <table class="table table-bordered table-hover table-striped align-middle m-0">
            <thead>
                <tr class="text-nowrap">
                    <th scope="col">Action</th>
                    <th scope="col">Sr No</th>
                    <th scope="col">Position Name</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($positions)) {
                    $i = 0;
                    foreach ($positions as $value) {
                        $i++;
                ?>
                        <tr>
                            <td class="text-nowrap">
                                <a class="btn btn-danger btn-sm shadow"
                                    href="<?= base_url() ?>admin/delete_position/<?= $value['admin_position_id'] ?>"
                                    onclick="return confirm('Are you sure you want to delete this position?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td><?= $i ?></td>
                            <td><?= $value['admin_position']; ?></td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="3" class="text-center">
                            <strong>No records found</strong>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>