<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4"
                style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">diamond Rates</h4>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>admin/diamond_rate_add" method="post" enctype="multipart/form-data"
                        id="form1">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Enter Todays Rate(10g)</label>
                            <input type="text" name="diamond_amt" id="diamond_amt" placeholder="Todays Price" required
                                class="form-control"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Todays Rate Date</label>
                                    <input type="date" name="ratedate" value="<?= date('Y-m-d'); ?>" required
                                        class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Enter Todays Rate
                                        Time</label>
                                    <input type="time" name="ratetime" value="<?= date("h:i"); ?>" required
                                        class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Add Today Date</button>
                        </div>
                    </form>

                    <form action="<?= base_url() ?>admin/diamond_rate_update" method="post" enctype="multipart/form-data"
                        id="form2">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Enter Todays Rate(10g)</label>
                            <input type="text" name="diamond_amt" id="diamond_amt1" placeholder="Todays Price" required
                                class="form-control"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                style="width:480px">
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Todays Rate Date</label>
                                    <input type="hidden" name="rate_diamond_id" id="rate_diamond_id1" required
                                        class="form-control">
                                    <input type="hidden" name="from_date" id="from_date1" class="form-control">
                                    <input type="hidden" name="to_date" id="to_date1" class="form-control">

                                    <input type="date" name="ratedate" id="ratedate1" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Enter Todays Rate
                                        Time</label>
                                    <input type="time" name="ratetime" id="ratetime1" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update Rate</button>
                            <button class="btn btn-danger" type="button" onclick="cancel()"><b>Cancel</b></button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form style="border-bottom:1px solid black;" action="<?= base_url() ?>admin/diamond_rate_search"
                        method="get" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">From Date</label>
                                    <input type="date" name="from_date" value="<?= $this->input->get('from_date') ?>"
                                        class="form-control" title="From Date" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">To Date</label>
                                    <input type="date" value="<?= $this->input->get("to_date") ?>" name="to_date"
                                        class="form-control" title="To Date" required>
                                </div>
                            </div>
                            <div class="col-md-2 mt-4">
                                <button type="submit" class="btn btn-primary"><i class="bx bx-search"></i></button>
                            </div>
                        </div>

                    </form>
                    <style>
                        table {
                            white-space: nowrap !important;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }
                    </style>
                    <div class="table-responsive">
                        <table class="table mb-0 table-sm table-bordered mt-3 border-info text-center">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($rate as $value) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= date('d M Y', strtotime($value['ratedate'])); ?></td>
                                        <td><?= date('g:i a', strtotime($value['ratetime'])); ?></td>
                                        <td><?= $value['diamond_amt']; ?></td>
                                        <td>

                                            <!-- <button class="btn btn-outline-primary py-1 px-2" onclick="updatediamond('<?= $value['rate_diamond_id']; ?>','<?= $value['ratedate']; ?>','<?= $value['ratetime']; ?>','<?= $value['diamond_amt']; ?>','<?php if (isset($search['from_date'])) {
                                                echo $search['from_date'];
                                            } ?>','<?php if (isset($search['to_date'])) {
                                                echo $search['to_date'];
                                            } ?>')"><i class="fa fa-edit"></i></button> -->
                                            <a href="<?= base_url() ?>admin/edit_diamond_rate/<?= $value['rate_diamond_id'] ?>"
                                                class="btn btn-outline-primary py-1 px-2"><i class="fa fa-edit"></i></a>

                                            <a onclick="return confirm('Are You Sure to permanant Delete this data...')"
                                                href="<?= base_url(); ?>admin/diamond_rate_delete/<?= $value['rate_diamond_id']; ?><?php if (isset($search['from_date'])) {
                                                    echo "/" . $search['from_date'];
                                                } ?><?php if (isset($search['to_date'])) {
                                                    echo "/" . $search['to_date'];
                                                } ?>"
                                                class="btn btn-outline-danger py-1 px-2"><i class="fa fa-trash"></i></a>

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
<style type="text/css">
    #form2 {
        display: none;
    }
</style>
<script type="text/javascript">
    function updatediamond(rate_diamond_id, ratedate, ratetime, diamond_amt1, from_date, to_date) {
        $('#rate_diamond_id1').val(rate_diamond_id);
        $('#from_date1').val(from_date);
        $('#to_date1').val(to_date);
        $('#ratedate1').val(ratedate);
        $('#ratetime1').val(ratetime);
        $('#diamond_amt1').val(diamond_amt1);
        $('#form1').css('display', 'none');
        $('#form2').css('display', 'inline-block');
    }

    function cancel() {
        $('#form1').css('display', 'inline-block');
        $('#form2').css('display', 'none');
    }
</script>