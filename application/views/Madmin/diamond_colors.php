<div class="container-fluid">
    <div class="row">
        <!-- Page Header -->
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between form-heading p-3 mb-4" style="margin-top: -10px;">
                <h4 class="mb-0 font-size-18">Diamond Color <span id="heading">Add</span></h4>
            </div>
        </div>

        <!-- Add/Update Form Section -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <!-- Add Form -->
                    <form action="<?= base_url() ?>Madmin/diamond_color_add" method="post" enctype="multipart/form-data" id="form1">
                        <div class="mb-3">
                            <label for="diamond_color" class="form-label">Diamond Color Label</label>
                            <input type="text" class="form-control" id="diamond_color" onkeyup="gstcal(this.value)" placeholder="Diamond Color" name="diamond_color" required>
                        </div>
                        <div class="mb-3">
                            <label for="dec_amt" class="form-label">Decrease Amt (%)</label>
                            <input type="text" class="form-control" name="dec_amt" id="dec_amt" oninput="this.value=this.value.replace(/[^0-9.]/g, ''); this.value=this.value.replace(/(\..*)\./g, '$1');" placeholder="Enter Decrease Amount e.g., 5" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-md">Add Diamond Color</button>
                        </div>
                    </form>

                    <!-- Update Form -->
                    <form action="<?= base_url() ?>Madmin/diamond_color_update" method="post" enctype="multipart/form-data" id="form2">
                        <input type="hidden" name="diamond_color_id" id="diamond_color_id1" required>
                        <div class="mb-3">
                            <label for="diamond_color1" class="form-label">Diamond Color Label</label>
                            <input type="text" class="form-control" name="diamond_color" id="diamond_color1" placeholder="Diamond Color" required>
                        </div>
                        <div class="mb-3">
                            <label for="dec_amt1" class="form-label">Decrease Amt (%)</label>
                            <input type="text" class="form-control" name="dec_amt" id="dec_amt1" oninput="this.value=this.value.replace(/[^0-9.]/g, ''); this.value=this.value.replace(/(\..*)\./g, '$1');" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-md">Update Diamond Color</button>
                            <button class="btn btn-danger" type="button" onclick="cancel()">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Diamond Color</h4>

                    <!-- Search Form -->
                    <form action="<?= site_url() ?>Madmin/diamond_color" method="get">
                    <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" placeholder="Search..." name="q" value="<?= $this->input->get("q") ?>">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                                &nbsp;&nbsp;
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm text-center">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Diamond Color</th>
                                    <th>Decrease Amt (%)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $start; 
                                if(count($diamond_color)>0){
                                  
                                foreach ($diamond_color as $value): ?>
                                    <tr>
                                        <td><?= ++$i; ?></td>
                                        <td><?= $value['diamond_color']; ?></td>
                                        <td><?= $value['dec_amt']; ?>%</td>
                                        <td>
                                            <button class="btn btn-outline-primary btn-sm" onclick="updatediamondcolor('<?= $value['diamond_color_id']; ?>', '<?= $value['diamond_color']; ?>', '<?= $value['dec_amt']; ?>')">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a href="<?= base_url(); ?>Madmin/diamond_color_delete/<?= $value['diamond_color_id']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to permanently delete this data?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                                  
                                }else{
                                    ?>
                                    <tr>
                                        <td class="text-center" colspan="20">No Record Found</td>
                                    </tr>
                                    <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <br>
                    <?php pagination($ttl_pages, $page_no); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    #form2 {
        display: none;
    }
    .form-label {
        font-weight: bold;
    }
</style>

<!-- Scripts -->
<script>
    function updatediamondcolor(diamond_color_id, diamond_color, diamond_color_amt) {
        $('#diamond_color_id1').val(diamond_color_id);
        $('#diamond_color1').val(diamond_color);
        $('#dec_amt1').val(diamond_color_amt);
        $('#form1').hide();
        $("#heading").text("Update");
        $('#form2').show();
    }

    function cancel() {
        $("#heading").text("Add");
        $('#form1').show();
        $('#form2').hide();
    }
</script>
