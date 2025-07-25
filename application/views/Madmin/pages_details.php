<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Add Details Form -->
                    
                         <form action="<?= base_url() ?>Madmin/pages_details_save" method="post" enctype="multipart/form-data" id="form1">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                    <h4 class="mb-sm-0 font-size-18"><?= $pages_name[0]['pages_name']; ?> -> Add Policies Page Details</h4>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Details Title</label>
                                <input type="text" name="page_title" id="page_title" placeholder="Enter Title..." required class="form-control">
                                <input type="hidden" name="pages_name_id" value="<?= $pages_name[0]['pages_name_id']; ?>" class="form-control">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Details Information</label>
                                <input type="text" name="page_title_description" id="page_title_description" placeholder="Enter Information..." required class="form-control">
                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <button class="btn btn-primary px-4">Add Details</button>
                            </div>
                        </div>
                    </form>
                   
                    <form action="<?= base_url() ?>Madmin/pages_details_update" method="post" enctype="multipart/form-data" id="form2">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                    <h4 class="mb-sm-0 font-size-18"><?= $pages_name[0]['pages_name']; ?> -> Update Policies Page Details</h4>
                                </div>
                            </div>
                        </div>
                     
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Details Title</label>
                                <input type="hidden" name="pages_name_id" id="pages_name_id1" value="<?= $pages_name[0]['pages_name_id']; ?>" class="form-control">
                                <input type="hidden" name="page_details_id" id="page_details_id1" class="form-control">
                                <input type="text" name="page_title" id="page_title1" placeholder="Enter Title..." required class="form-control">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Details Information</label>
                                <input type="text" name="page_title_description" id="page_title_description1" placeholder="Enter Information..." required class="form-control">
                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <button class="btn btn-primary px-4">Update Details</button>
                            </div>
                        </div>
                    </form>
                    <!-- Update Details Form -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                            <?php if (isset($pages_name[0])): ?>
                                <h4><?= $pages_name[0]['pages_name']; ?> -> Details List:</h4>
                            <?php else: ?>
                                <h4>No Page Name Found</h4>
                                <p>Please check the provided ID or add a new page.</p>
                            <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover table-sm">
                            <thead class="">
                                <tr>
                                    <th>Sr</th>
                                    <th>Details Title</th>
                                    <th>Details Information</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; foreach ($pages_details as $value) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $value['page_title']; ?></td>
                                    <td><?= $value['page_title_description']; ?></td>
                                    <td class="d-flex">
                                        <a href="<?= base_url(); ?>Madmin/pages_details_delete/<?= $value['page_details_id']; ?>" 
                                        class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')" 
                                        title="Delete">
                                        <i class="fa fa-trash"></i>
                                        </a> &nbsp;
                                        <button class="btn btn-warning btn-sm" onclick="updatecharges('<?= $value['page_details_id']; ?>', '<?= $value['page_title']; ?>', '<?= $value['page_title_description']; ?>')" 
                                                title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<style>
    #form2 {
        display: none;
    }
    .page-title-box {
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    function updatecharges(page_details_id, page_title, page_title_description) {
        $('#page_details_id1').val(page_details_id);
        $('#page_title1').val(page_title);
        $('#page_title_description1').val(page_title_description);
        $('#form1').hide();
        $('#form2').fadeIn();
    }

    function cancel() {
        $('#form2').hide();
        $('#form1').fadeIn();
    }
</script>
