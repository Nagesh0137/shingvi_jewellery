<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Today Subscriber Details</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/today_subscriber" method="get">
                        <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" value="<?= $this->input->get('q') ?>" placeholder="Search..." name="q">
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
                        <table class="table table-bordered table-sm text-center mb-0">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Subscriber Details</th>
                                    <th>Visting Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(!empty($total_today_customer) && count($total_today_customer)>0){
                                    $i=$start;
                                    foreach($total_today_customer as $key=>$row){
                                        ?>
                                        <tr>
                                            <td><?= ++$i ?></td>
                                            <td><?= $row['subcriber_details'] ?></td>
                                            <td><?= date('d M Y',strtotime($row['entry_date'])) ?></td>
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
                        pagination($ttl_pages,$page_no)
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>