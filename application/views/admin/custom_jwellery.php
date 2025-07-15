<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4"
                style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Custom Jwellery Pending</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-md-12 text-center">
            <h3 class="bg-warning font-weight-bold pt-2 pb-2 pl-2 text-uppercase"><b style="color: black;font-weight:bold;">Custom Jwellery Pending</b></h3>
        </div> -->

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Info
                                </th>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Time</th>
                                <th>Address</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            if (count($custom_jwellery) > 0) {
                                foreach ($custom_jwellery as $row) {
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url() ?>admin/custom_jwellery_view/<?= $row['custom_jwellery_id'] ?>"><button
                                                    class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                        </td>
                                        <td><?= ++$i ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['phone_number']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= date('Y-m-d', strtotime($row['date_time'])); ?></td>
                                        <td><?= $row['address']; ?></td>
                                        <td><?= $row['budget']; ?>&#8377;/-</td>
                                    </tr>
                                    <?php
                                }
                            } else {
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