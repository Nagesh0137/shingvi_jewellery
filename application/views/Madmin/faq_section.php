<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">FAQ Section</h4>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php
            if(isset($faq_data[0]) && count($faq_data)>0){
                ?>
                 <div class="card">
                <div class="card-body">
                    <form class="row gy-2 gx-3 align-items-center" action="<?= base_url() ?>Madmin/update_faq_section" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="faq_tbl_id" value="<?= $faq_data[0]['faq_tbl_id'] ?>">
                        <div class="col-sm-auto col-md-6">
                            <label class="form-label" for="autoSizingInputGroup">Enter Question</label>
                            <div class="input-group">
                                <input type="text" name="faq_question" class="form-control" placeholder="Enter FAQ Question" value="<?= $faq_data[0]['faq_question'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-auto col-md-6">
                            <label class="form-label" for="autoSizingInput">Enter Answer</label>
                            <textarea name="faq_answer" placeholder="Enter FAQ Answer" id="" class="form-control"><?= $faq_data[0]['faq_answer'] ?></textarea>
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary w-md" id="submitButton">Update & Save</button>
                        </div>
                    </form>
                    
                </div>
                <!-- end card body -->
            </div>
                <?php
            }else{
                ?>
                 <div class="card">
                <div class="card-body">
                    <form class="row gy-2 gx-3 align-items-center" action="<?= base_url() ?>Madmin/add_faq_section" method="post" enctype="multipart/form-data">
                        <div class="col-sm-auto col-md-6">
                            <label class="form-label" for="autoSizingInputGroup">Enter Question</label>
                            <div class="input-group">
                                <input type="text" name="faq_question" class="form-control" placeholder="Enter FAQ Question">
                            </div>
                        </div>
                        <div class="col-sm-auto col-md-6">
                            <label class="form-label" for="autoSizingInput">Enter Answer</label>
                            <textarea name="faq_answer" placeholder="Enter FAQ Answer" id="" class="form-control"></textarea>
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary w-md" id="submitButton">Save</button>
                        </div>
                    </form>
                    
                </div>
                <!-- end card body -->
            </div>
                <?php
            }
            ?>
           
            <!-- end card -->
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Srno</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                if(!empty($faq_details) && count($faq_details)>0){
                                    foreach($faq_details as $key=>$row){
                                        ?>
                                        <tr>
                                            <td class="btn-group">
                                                
                                                <a href="<?= base_url() ?>Madmin/edit_faq_details/<?= $row['faq_tbl_id'] ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>

                                                &nbsp;&nbsp;

                                                <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?= base_url() ?>Madmin/delete_faq_details/<?= $row['faq_tbl_id'] ?>"><button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                                                
                                            </td>
                                            <td><?= $key+1 ?></td>
                                            <td><?= $row['faq_question'] ?></td>
                                            <td><?= $row['faq_answer'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <tr>
                                        <td class="text-center" colspan="20">No Record Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                               
                               
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>