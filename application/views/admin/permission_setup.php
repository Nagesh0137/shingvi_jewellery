<style>
    /* Custom Styling for Mobile View */
    .container-fluid {
        padding: 15px;
    }

    h3 {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 20px;
    }




    .table th,
    .table td {
        padding: 12px;
        text-align: center;
        vertical-align: middle;
        border: 1px solid #dee2e6;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 123, 255, 0.05);
    }

    .table-striped tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.1);
    }

    .table-sm th,
    .table-sm td {
        padding: 8px;
    }

    /* Checkbox Styling */
    input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    /* Mobile-Specific Adjustments */
    @media (max-width: 767.98px) {
        h3 {
            font-size: 20px;
        }

        .table th,
        .table td {
            font-size: 14px;
            padding: 8px;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
        }
    }
</style>


<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="business-header">
                <h4>SetUp Permissions</h4>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-responsive table-sm table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Page</th>
                        <?php foreach ($positions as $row) { ?>
                            <th><?= $row['admin_position'] ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($permission_urls as $key => $row) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row['admin_permission_url'] ?></td>
                            <?php foreach ($positions as $row2) { ?>
                                <td>
                                    <input type="checkbox"
                                        <?= (isset($this->My_model->select_where("admin_permission", ["admin_permission_urls_id" => $row['admin_permission_urls_id'], "admin_position_id" => $row2['admin_position_id']])[0])) ? 'checked' : '' ?>
                                        onclick="togglePermission('<?= $row['admin_permission_urls_id'] ?>', '<?= $row2['admin_position_id'] ?>', this)">
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script type="text/javascript">
    function togglePermission(admin_permission_urls_id, admin_position_id, elmt) {
        if (elmt.checked) {
            $.ajax({
                "url": "<?= base_url() ?>admin/set_admin_permission",
                "method": "post",
                "data": {
                    "admin_permission_urls_id": admin_permission_urls_id,
                    "admin_position_id": admin_position_id
                }
            }).done(function(res) {
                console.log(res);
            });
        } else {
            $.ajax({
                "url": "<?= base_url() ?>admin/remove_admin_permission",
                "method": "post",
                "data": {
                    "admin_permission_urls_id": admin_permission_urls_id,
                    "admin_position_id": admin_position_id
                }
            }).done(function(res) {
                console.log(res);
            });
        }
    }
</script>