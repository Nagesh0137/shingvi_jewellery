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
      <h5 class="heading">Admin Management</h5>
    </div>
    <hr>
  </div>

  <div class="card-body">
    <form action="<?= base_url() ?>admin/add_admin" class="g-3 row needs-validation" method="post"
      enctype="multipart/form-data" novalidate>
      <div class="col-12 col-md-4">
        <label for="admin_name" class="form-label">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Enter Full Name"
          required />
        <div class="invalid-feedback">Please provide a valid name.</div>
      </div>

      <div class="col-12 col-md-4">
        <label for="admin_email" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="admin_email" name="admin_email" placeholder="Enter Email Address"
          required />
        <div class="invalid-feedback">Please provide a valid email.</div>
      </div>

      <div class="col-12 col-md-4">
        <label for="admin_mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
        <input type="tel" class="form-control" id="admin_mobile" name="admin_mobile" placeholder="Enter Mobile Number"
          pattern="[0-9]{10}" required />
        <div class="invalid-feedback">Please provide a valid 10-digit mobile number.</div>
      </div>

      <div class="col-12 col-md-4">
        <label for="admin_password" class="form-label">Password <span class="text-danger">*</span></label>
        <input type="password" class="form-control" id="admin_password" name="admin_password"
          placeholder="Enter Password" minlength="6" required />
        <div class="invalid-feedback">Password must be at least 6 characters long.</div>
      </div>

      <div class="col-12 col-md-4">
        <label for="admin_position" class="form-label">Position <span class="text-danger">*</span></label>
        <select class="form-select" id="admin_position" name="admin_position" required>
          <option value="" disabled selected>Select Position</option>
          <?php if (!empty($positions)) {
            foreach ($positions as $position) { ?>
              <option value="<?= $position['admin_position_id'] ?>"><?= $position['admin_position'] ?></option>
            <?php }
          } ?>
        </select>
        <div class="invalid-feedback">Please select a position.</div>
      </div>

      <div class="col-12 col-md-4 ">
        <label for="admin_profile_logo" class="form-label">Profile Photo</label>
        <input type="file" class="form-control" id="admin_profile_logo" name="admin_profile_logo" accept="image/*" />
        <div class="form-text">Accepted formats: JPG, PNG, GIF (Max: 2MB)</div>
      </div>



      <div class="col-md-12 text-center">
        <button class="btn btn-ml btn-success text-uppercase mt-4" type="submit"><b>Save Admin</b></button>
        <button class="btn btn-ml btn-secondary text-uppercase mt-4 ms-2" type="reset"><b>Reset</b></button>
      </div>
    </form>
  </div>

  <div class="table-responsive border-dark rounded-3 mt-3">
    <table class="table table-bordered table-hover dt_example table-striped align-middle m-0">
      <thead>
        <tr class="text-nowrap">
          <th scope="col">Action</th>
          <th scope="col">Sr No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Position</th>

        </tr>
      </thead>
      <tbody>
        <?php if (!empty($admin_data)) {
          $i = 0;
          foreach ($admin_data as $admin) {
            $i++;
            ?>
            <tr>
              <td class="text-nowrap">
                <a class="btn btn-danger btn-sm shadow"
                  href="<?= base_url() ?>admin/delete_admin/<?= $admin['admin_tbl_id'] ?>"
                  onclick="return confirm('Are you sure you want to delete this admin?')" title="Delete">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-info btn-sm shadow" href="<?= base_url() ?>admin/edit_admin/<?= $admin['admin_tbl_id'] ?>"
                  title="Edit">
                  <i class="fas fa-pencil-alt"></i>
                </a>
              </td>
              <td><?= $i ?></td>
              <td><?= htmlspecialchars($admin['admin_name']) ?></td>
              <td><?= htmlspecialchars($admin['admin_email']) ?></td>
              <td><?= htmlspecialchars($admin['admin_mobile_no']) ?></td>
              <td>
                <?php
                if (!empty($admin['admin_position'])) {
                  foreach ($positions as $position) {
                    if ($position['admin_position_id'] == $admin['admin_position']) {
                      echo htmlspecialchars($position['admin_position']);
                      break;
                    }
                  }
                } else {
                  echo 'N/A';
                }
                ?>
              </td>
            </tr>
          <?php } ?>
        <?php } else { ?>
          <tr>
            <td colspan="7" class="text-center">
              <strong>No records found</strong>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


<script>
  // Form validation
  (function () {
    'use strict';
    window.addEventListener('load', function () {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  // File upload validation
  document.getElementById('admin_profile_logo').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (file) {
      const fileSize = file.size / 1024 / 1024; // Convert to MB
      const fileType = file.type;

      if (fileSize > 2) {
        alert('File size must be less than 2MB');
        e.target.value = '';
        return;
      }

      if (!fileType.match('image.*')) {
        alert('Please select a valid image file');
        e.target.value = '';
        return;
      }
    }
  });

  // Mobile number validation
  document.getElementById('admin_mobile').addEventListener('input', function (e) {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length > 10) {
      this.value = this.value.slice(0, 10);
    }
  });
</script>