<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/job_applied_details" method="get">
                        <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" value="<?= $this->input->get('q') ?>" placeholder="Search..." name="q" >
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                                &nbsp;&nbsp;
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-sm">
                            <thead>
                                <tr>
                                    <th>Srno</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact Details</th>
                                    <th>Resume</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(!empty($application_details) && count($application_details)>0){
                                        $i=$start;
                                        foreach($application_details as $key=>$row){
                                            ?>
                                            <tr>
                                                <td><?= ++$i ?></td>
                                                <td><?= !empty($row['name']) ? $row['name']:'N/A' ?></td>
                                                <td><?= !empty($row['email']) ? $row['email']:'N/A' ?></td>
                                                <td><?= !empty($row['mobile']) ? $row['mobile']:'N/A' ?></td>
                                                <td>
                                                    
                                                    <?php
                                                        // Path to the uploaded file
                                                        $document_upload = FCPATH . "uploads/" . $row['resume'];

                                                        // Check if the file exists and the resume field is not empty
                                                        if (!empty($row['resume']) && file_exists($document_upload)) {
                                                            ?>
                                                            <a href="<?= base_url() ?>uploads/<?= $row['resume'] ?>" target="_blank">
                                                                <button class="btn btn-primary btn-sm">View Resume</button>
                                                            </a>
                                                            <?php
                                                        } else {
                                                            echo "N/A"; // Display "N/A" if the file doesn't exist or the resume is empty
                                                        }
                                                    ?>
                                                </td>

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
                        <br>
                        <?php
                        pagination($ttl_pages,$page_no);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>