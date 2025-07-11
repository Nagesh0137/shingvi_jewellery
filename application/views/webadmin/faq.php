<?php if (isset($edit_faq)) { ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit FAQ</h5>

                <form action="<?= base_url() ?>admin    /update_faq" method="post">
                    <input type="hidden" name="faq_tbl_id" value="<?= $edit_faq[0]['faq_tbl_id'] ?>">
                    <div class="row">
                        <div class="form-floating col-md-12 mb-3">
                            <input type="text" value="<?= $edit_faq[0]['question'] ?>" name="question" class="form-control" id="floatingQuestionInput" placeholder="Enter question" required>
                            <label for="floatingQuestionInput">Question <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating col-md-12 mb-3">
                            <textarea name="answer" class="form-control" id="floatingAnswerInput" style="height: 120px;" placeholder="Enter answer" required><?= $edit_faq[0]['answer'] ?></textarea>
                            <label for="floatingAnswerInput">Answer <span class="text-danger">*</span></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-md">UPDATE</button>
                            <a href="<?= base_url() ?>admin /faq" class="btn btn-secondary w-md">CANCEL</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php } else { ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add FAQ</h5>

                <form action="<?= base_url() ?>admin    /save_faq" method="post">
                    <div class="row">
                        <div class="form-floating col-md-12 mb-3">
                            <input type="text" name="question" class="form-control" id="floatingQuestionInput" placeholder="Enter question" required>
                            <label for="floatingQuestionInput">Question <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating col-md-12 mb-3">
                            <textarea name="answer" class="form-control" id="floatingAnswerInput" style="height: 120px;" placeholder="Enter answer" required></textarea>
                            <label for="floatingAnswerInput">Answer <span class="text-danger">*</span></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-md">SAVE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">FAQ List</h4>
                <table id="datatable-buttons" class="table table-sm table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        if (isset($faq_list) && !empty($faq_list)) {
                            foreach ($faq_list as $row) {
                                $i++;
                        ?>
                                <tr id="myEdit<?= $i ?>">
                                    <td><?= $i ?></td>
                                    <td>
                                        <span id="question_span<?= $i ?>"><?= $row['question'] ?></span>
                                    </td>
                                    <td>
                                        <span id="answer_span<?= $i ?>"><?= strlen($row['answer']) > 100 ? substr($row['answer'], 0, 100) . '...' : $row['answer'] ?></span>
                                    </td>
                                    <td style="width: 120px">
                                        <a href="<?= base_url() ?>admin /edit_faq/<?= $row['faq_tbl_id'] ?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="<?= base_url() ?>admin /delete_faq/<?= $row['faq_tbl_id'] ?>" onclick="return confirm('Are You Sure You Want to Delete this FAQ?')" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                        if ($i == 0) {
                            ?>
                            <tr>
                                <td colspan="4" class="text-center p-4">
                                    <h4 class="text-muted">No FAQ Found</h4>
                                    <p class="text-muted">Click "Add FAQ" button above to create your first FAQ entry.</p>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>