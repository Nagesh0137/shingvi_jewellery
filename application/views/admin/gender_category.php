<div class="container-fluid p-3 bg-white">
    <h4>Gender Category</h4>

    <?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-info"><?= $this->session->flashdata('msg') ?></div>
    <?php endif; ?>

    <form method="POST" action="<?= base_url('admin/save_gender_category') ?>">
        <input type="hidden" name="gender_category_id" value="<?= @$det[0]['gender_category_id'] ?>">
        <div class="row">
            <div class="col-md-4">
                <label>Name</label>
                <input type="text" name="gender_category_name" class="form-control" required
                    value="<?= @$det[0]['gender_category_name'] ?>">
            </div>

            <div class="col-md-4 mt-4">
                <button class="btn btn-success mt-2"><?= isset($det[0]) ? 'Update' : 'Save' ?></button>
            </div>
        </div>
    </form>

    <hr>

    <table class="table table-bordered table-sm mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Gender Category</th>
                <th>Status</th>
                <th>Entry Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($list as $row): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['gender_category_name'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td><?= date('d M y h:i a', $row['entry_time']) ?></td>
                    <td>
                        <a href="<?= base_url('admin/gender_category?edit_id=' . $row['gender_category_id']) ?>"
                            class="btn btn-sm btn-primary">Edit</a>
                        <a href="<?= base_url('admin/delete_gender_category/' . $row['gender_category_id']) ?>"
                            onclick="return confirm('Delete?')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>