<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">PROCESSING ORDER</h4>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/order_confirm" method="get">
                        <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" value="<?= $this->input->get("q") ?>" placeholder="Search..." name="q">
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
                    <table class="table text-center table-hover table-sm table-bordered ">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Phone No</th>
                                <th>Order&nbsp;Amount</th>
                                <th>Order Date</th>
                                <th>Process Start Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $i=$start; 
                        if(isset($order) && count($order)>0){
                        foreach ($order as  $value) { ?>
                            <tbody>
                                <tr>
                                    <td><?=++$i;?></td>
                                    <td><?=$value['name'];?></td>
                                    <td><?=$value['email'];?></td>
                                    <td><?=$value['phone_number'];?></td>
                                    <td style="font-weight: bold;">&#8377;&nbsp;<?=number_format1($value['pay_amount'])?>/-</td>
                                    <td><?= date('d M Y ',$value['date_time']);?></td>
                                    <td><?= date('d M Y ',strtotime($value['process_date']));?></td>
                                    <td><a href="<?=base_url();?>Madmin/order_confirm_view?id=<?=$value['user_billing_details_id'];?>"><button class="btn btn-primary"><i class="fa fa-print"></i> View</button></a></td>
                                </tr>
                            </tbody>
                        <?php } }else {?>
                            <tfoot>
                                <tr>
                                    <td colspan="20" class="text-center"><h4 class="text-center text-danger pt-3 pb-2">Currently No Processing Orders</h4></td>
                                </tr>
                            </tfoot>
                        <?php } ?>
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