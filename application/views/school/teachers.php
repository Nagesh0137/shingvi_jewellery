<div class="container-fluid bg-white p-3">
    <div class="row">
        <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data" action="<?= isset($det[0]) ? base_url('school/update_teacher') : base_url('school/save_teacher') ?>">
            <div class="row">
                <h5><?= isset($det[0]) ? 'Edit' : 'Add' ?> Teacher</h5>

                <input type="hidden" name="teacher_id" value="<?= @$det[0]['teacher_id'] ?>">

                <div class="form-group col-md-4">
                
                <label>Name *</label>
                <input type="text" name="teacher_name" class="form-control" value="<?= @$det[0]['teacher_name'] ?>" required>
            </div>
                <div class="form-group col-md-4">
                
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" value="<?= @$det[0]['mobile'] ?>">
            </div>

                <div class="form-group col-md-4">
                
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?= @$det[0]['email'] ?>">
            </div>

                <!-- Job Position -->
                <div class="form-group col-md-4">
                
                <label>Job Position</label>
                <select name="job_position" class="form-control">
                    <option value="">Select Position</option>
                    <?php foreach ($positions as $pos): ?>
                        <option <?= @$det[0]['job_position'] == $pos['position_name'] ? 'selected' : '' ?> value="<?= $pos['position_name'] ?>"><?= $pos['position_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

                <!-- State -->
                <div class="form-group col-md-4">
                
                <label>State</label>
                <select name="state_id" class="form-control" id="state_id" required>
                    <option value="">Select State</option>
                    <?php foreach ($states as $s): ?>
                        <option <?= @$det[0]['state_id'] == $s['state_id'] ? 'selected' : '' ?> value="<?= $s['state_id'] ?>"><?= $s['state_name'] ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
                <!-- District -->
                <div class="form-group col-md-4">
                
                <label>District</label>
                <select name="district_id" class="form-control" id="district_id" required>
                    <option value="">Select District</option>
                </select>
            </div>

                <!-- City -->
                <div class="form-group col-md-4">
                
                <label>City</label>
                <select name="city_id" class="form-control" id="city_id" required>
                    <option value="">Select City</option>
                </select>
            </div>

                <!-- Address -->
                <div class="form-group col-md-4">
                
                <label>Address</label>
                <textarea name="address" class="form-control"><?= @$det[0]['address'] ?></textarea>
            </div>


                <div class="form-group col-md-4">
                
                <label>Salary</label>
                <input type="number" name="salary" class="form-control" value="<?= @$det[0]['salary'] ?>">
            </div>

                <div class="form-group col-md-4">
                
                <label>Experience (Years)</label>
                <input type="number" name="experience_years" class="form-control" value="<?= @$det[0]['experience_years'] ?>">
            </div>

                <div class="form-group col-md-4">
                
                <label>Profile Picture</label>
                <input type="file" name="profile_picture" class="form-control">
            </div>

                <div class="form-group col-md-4">
                
                <label>Aadhar Card</label>
                <input type="file" name="aadhar_card" class="form-control">
            </div>

                <div class="form-group col-md-4">
                
                <label>PAN Card</label>
                <input type="file" name="pan_card" class="form-control">
            </div>

                <button class="btn btn-success mt-2"><?= isset($det[0]) ? 'Update' : 'Save' ?></button>
                <div class="form-group col-md-4">
                    
                </div>
            </div>
            </form>
            
        </div>

        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Job</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $row): ?>
                    <tr>
                        <td><?= $row['teacher_name'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['job_position'] ?></td>
                        <td>
                            <a href="<?= base_url('school/edit_teacher/' . $row['teacher_id']) ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a onclick="return confirm('Delete this teacher?')" href="<?= base_url('school/delete_teacher/' . $row['teacher_id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){

    function loadDistricts(state_id, selected = '', callback = null) {
        $.post("<?= base_url('school/get_districts') ?>", { state_id }, function(res){
            let options = '<option value="">Select District</option>';
            $.each(JSON.parse(res), function(i, row){
                let sel = row.district_id == selected ? 'selected' : '';
                options += `<option value="${row.district_id}" ${sel}>${row.district_name}</option>`;
            });
            $("#district_id").html(options).trigger("change");
            if (typeof callback === 'function') {
                callback();
            }
        });
    }

    function loadCities(district_id, selected = '') {
        $.post("<?= base_url('school/get_cities') ?>", { district_id }, function(res){
            let options = '<option value="">Select City</option>';
            $.each(JSON.parse(res), function(i, row){
                let sel = row.city_id == selected ? 'selected' : '';
                options += `<option value="${row.city_id}" ${sel}>${row.city_name}</option>`;
            });
            $("#city_id").html(options);
        });
    }

    $('#state_id').change(function() {
        loadDistricts($(this).val());
    });

    $('#district_id').change(function() {
        loadCities($(this).val());
    });

    // Pre-fill on edit — now correctly placed inside the script
    <?php if (isset($det[0])): ?>
        loadDistricts("<?= $det[0]['state_id'] ?>", "<?= $det[0]['district_id'] ?>", function(){
            loadCities("<?= $det[0]['district_id'] ?>", "<?= $det[0]['city_id'] ?>");
        });
    <?php endif; ?>
});
</script>
