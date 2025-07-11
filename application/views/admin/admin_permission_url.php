<div class="container bg-white p-4">
    <div class="row">
        <div class="col-12">
            <div class="business-header">
                <h4>Add Admin Permission Method</h4>
            </div>
        </div>
        <hr>
    </div>

    <!-- Form to Add Permission -->
    <form action="<?= base_url() ?>admin/save_admin_permission_url" method="POST">
        <div class="row">
            <div class="col-12 col-md-6 mt-2">
                <div class="form__group field">
                    <label for="admin_permission_url" class="form__label fw-bold">Permission Method Name&nbsp;<span
                            class="text-danger">*</span></label><br>
                    <input type="text" class="form__field form-control text-black" name="admin_permission_url"
                        placeholder="Enter Admin Permission Method Name" required>
                </div>
            </div>
            <div class="col-12 col-md-6 text-center mt-3">
                <button type="submit" class="btn btn-success text-uppercase mt-2"><b>Add Permission</b></button>
            </div>
        </div>
    </form>

    <!-- Permission Method List -->
    <div class="container mt-4">
        <?php if (!empty($permission_urls)) {
            $i = $start;
            foreach ($permission_urls as $key => $row) {
                $i++;
        ?>
                <div class="card p-2 shadow-sm mb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">#<?= $i ?> - <?= htmlspecialchars($row['admin_permission_url']) ?></h6>
                        <a href="<?= base_url() ?>admin/delete_permission_url/<?= $row['admin_permission_urls_id'] ?>"
                            onclick="return confirm('Are you sure you want to delete this permission?')"
                            class="btn btn-outline-danger btn-sm" title="Delete">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </div>

            <?php } ?>
        <?php } else { ?>
            <p class="text-center mt-3">No Record Found</p>
        <?php } ?>
        <?php pagination($ttl_pages, $page_no); ?>

    </div>
</div>