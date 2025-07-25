<?php
if ($admin_det['admin_position'] != 'master_admin') {
    ?>
    <form action="<?= base_url() ?>Madmin/save_admin_authontication" method="post">
        <input type="hidden" name="admin_id" value="<?= $admin_det['admin_tbl_id'] ?>">
        <div class="container-fluid" style="background-color: white;box-shadow: 0px 0px 10px 0px lavender;">
            <div class="row p-5 justify-content-center">
                <div class="col-md-12 mb-5">
                    <h1 style="color: black;" class="text-center"><?= $admin_det['admin_name'] ?> Authontications</h1>
                </div>
                <?php
                foreach ($auths as $row) {
                    $res = $this->My_model->select_where(
                        "admin_authontication",
                        ['admin_id' => $admin_det['admin_tbl_id'], 'authontication_tbl_id' => $row['authontication_tbl_id']]
                    );
                    ?>
                    <div class="col-md-3 mb-2">
                        <label class="p-2 text-center pt-3" style="border: 2px solid lavender; display: block; user-select: none; cursor: pointer;">
                            <input type="checkbox" name="authontication_tbl_id[]" value="<?= $row['authontication_tbl_id'] ?>" style="width: 20px; height: 20px;" <?= isset($res[0]) ? 'checked' : '' ?>>
                            <h3><?= $row['authontication_name'] ?></h3>
                        </label>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-12 text-center mt-3">
                    <button class="btn btn-primary btn-lg">UPDATE AUTHONTICATION</button>
                </div>
            </div>
        </div>
    </form>
    <?php
} else {
    ?>
    <div class="container-fluid" style="background-color: white;box-shadow: 0px 0px 10px 0px lavender;">
        <div class="row">
            <div class="col-md-12">
                <br><br><br><br>
                <h1 class="text-center" style="color: black;">
                    <span class="text-danger">oops...!</span><br> Cannot Add Authority To Master Admin
                </h1>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
    <?php
}
?>
