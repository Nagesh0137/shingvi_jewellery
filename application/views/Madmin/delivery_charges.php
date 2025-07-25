<div class="container-fluid">
    <div class="row">
        <?php
        if(isset($del_charge[0])){
            ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>Madmin/update_delivery_charges" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="delivery_charges_per_tbl_id" value="<?= $del_charge[0]['delivery_charges_per_tbl_id'] ?>">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label class="form-label font-weight-bold">Enter Minimum Purchase Amount</label>
                                    <input type="number" id="minamt_purchase_product" name="minamt_purchase_product" class="form-control" required value="<?= $del_charge[0]['minamt_purchase_product'] ?>" placeholder="Enter Minimum Purchase Amount ">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label font-weight-bold">Enter Percentage To Apply On Purchase Order</label>
                                    <input type="number" id="purchase_percentage" name="purchase_percentage"  class="form-control" required placeholder="Enter Percentage To Apply On Purchase Order" value="<?= $del_charge[0]['purchase_percentage'] ?>" >
                                </div>

                                <!-- <div class="col-md-6 mt-2">
                                    <label class="form-label font-weight-bold">Total Amount After Applying Percentage</label>
                                    <input type="text" id="total_amount" name="total_amount" class="form-control" readonly>
                                </div> -->

                                <div class="col-md-12 mt-2 text-center">
                                    <button type="submit" class="btn btn-dark">Save Info</button>
                                </div>
                            </div>
                        </form>

                        <script>
                            document.getElementById('purchase_percentage').addEventListener('input', calculateTotal);
                            document.getElementById('minamt_purchase_product').addEventListener('input', calculateTotal);

                            function calculateTotal() {
                                let minAmount = parseFloat(document.getElementById('minamt_purchase_product').value) || 0;
                                let percentage = parseFloat(document.getElementById('purchase_percentage').value) || 0;

                                // Calculate the total amount
                                let totalAmount = minAmount + (minAmount * (percentage / 100));
                                document.getElementById('total_amount').value = totalAmount.toFixed(2);
                            }
                        </script>
                    </div>
                </div>
            </div>
            <?php
        }else{
            ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>Madmin/save_delivery_charges" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label class="form-label font-weight-bold">Enter Minimum Purchase Amount</label>
                                    <input type="number" id="minamt_purchase_product" name="minamt_purchase_product" value="" class="form-control" required placeholder="Enter Minimum Purchase Amount ">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label font-weight-bold">Enter Percentage To Apply On Purchase Order</label>
                                    <input type="number" id="purchase_percentage" name="purchase_percentage" value="" class="form-control" required placeholder="Enter Percentage To Apply On Purchase Order">
                                </div>

                                <!-- <div class="col-md-6 mt-2">
                                    <label class="form-label font-weight-bold">Total Amount After Applying Percentage</label>
                                    <input type="text" id="total_amount" name="total_amount" class="form-control" readonly>
                                </div> -->

                                <div class="col-md-12 mt-2 text-center">
                                    <button type="submit" class="btn btn-dark">Save Info</button>
                                </div>
                            </div>
                        </form>

                        <script>
                            document.getElementById('purchase_percentage').addEventListener('input', calculateTotal);
                            document.getElementById('minamt_purchase_product').addEventListener('input', calculateTotal);

                            function calculateTotal() {
                                let minAmount = parseFloat(document.getElementById('minamt_purchase_product').value) || 0;
                                let percentage = parseFloat(document.getElementById('purchase_percentage').value) || 0;

                                // Calculate the total amount
                                let totalAmount = minAmount + (minAmount * (percentage / 100));
                                document.getElementById('total_amount').value = totalAmount.toFixed(2);
                            }
                        </script>
                    </div>
                </div>
            </div>
            <?php
        }
        
        ?>
       
        <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Delivery Charges List</h4>
                        
                            <div class="table-responsive">
                                <table class="table table-sm m-0 text-center table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Srno</th>
                                            <th>Minimum Purchase Amount</th>
                                            <th>Delivery Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($delivery_charges) && count($delivery_charges)>0){
                                            foreach($delivery_charges as $key=>$row){
                                                ?>
                                                <tr>
                                                    <td style="font-size: 20px;" class="d-flex align-items-center justify-content-center">
                                                        <a href="<?= base_url() ?>Madmin/edit_delivery_charges/<?= $row['delivery_charges_per_tbl_id'] ?>" class="btn btn-outline-primary py-1 px-2"><i class="fa fa-edit"></i></a> &nbsp;
                                                        <a href="<?= base_url() ?>Madmin/delete_delivery_charges/<?= $row['delivery_charges_per_tbl_id'] ?>" class="btn btn-outline-danger py-1 px-2" onclick="return confirm('Are You Sure To Delete These Record ?..')"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <td><?= $key+1 ?></td>
                                                    <td><?= $row['minamt_purchase_product'] ?></td>
                                                    <td><?= $row['purchase_percentage'] ?> %</td>
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