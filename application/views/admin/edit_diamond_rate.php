<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4"
                style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Update diamond Rates</h4>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <form action="<?= base_url() ?>admin/diamond_rate_update" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="rate_diamond_id" value="<?= $diamond_rate[0]['rate_diamond_id'] ?>"
                            id="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Enter Todays
                                        Rate(10g)</label>
                                    <input type="text" name="diamond_amt" id="diamond_amt1" placeholder="Todays Price"
                                        required class="form-control"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                        value="<?= $diamond_rate[0]['diamond_amt'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Todays Rate Date</label>

                                    <input type="hidden" name="from_date" id="from_date1" class="form-control">
                                    <input type="hidden" name="to_date" id="to_date1" class="form-control">

                                    <input type="date" name="ratedate" id="ratedate1" required class="form-control"
                                        value="<?= $diamond_rate[0]['ratedate'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Enter Todays Rate
                                        Time</label>
                                    <input type="time" name="ratetime" id="ratetime1" required class="form-control"
                                        value="<?= $diamond_rate[0]['ratetime'] ?>">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update Rate</button>

                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

    </div>
</div>

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