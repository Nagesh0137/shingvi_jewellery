<div class="container mt-5">
  <?php foreach($order as $ord): ?>
    <div class="card shadow-lg rounded-4 mb-5">
      <div class="card-body">
        <h4 class="mb-4">Order Details</h4>
<?php 
  // Initialize all status flags as false
$pending = $processing = $dispatch = $delivered = $rejected = false;

switch ($ord['order_status']) {
    case 'pending':
        $pending = true;
        break;

    case 'processing':
        $processing = true;
        break;

    case 'dispatch':
        $dispatch = true;
        break;

    case 'delivered':
        $delivered = true;
        break;

    case 'rejected':
        $rejected = true;
        break;

    default:
        // Unknown status, do nothing or log
        break;
}

?>
        <div class="row mb-3">
          <div class="col-md-4">
            <p><strong>Name:</strong> <?= $ord['name'] ?></p>
            <p><strong>Email:</strong> <?= $ord['email'] ?></p>
            <p><strong>Mobile:</strong> <?= $ord['mobile'] ?></p>
            <p><strong>Address:</strong> <?= $ord['cust_address'] ?></p>
            <p><strong>City / Pincode:</strong> <?= $ord['cust_city'] ?> - <?= $ord['cust_pincode'] ?></p>
          </div>
          <div class="col-md-4">
            <?php if($ord['payment_type'] == 'Online'){ ?><p><strong>Order ID:</strong> <?= $ord['orderId'] ?></p> <?php } ?>
            <p><strong>Order Date:</strong> <?= $ord['order_date'] ?></p>
            <?php 
              if($pending){
            ?> <p class="text-capitalize"><strong>Order Status:</strong><b class="text-warning"> <?= $ord['order_status'] ?></b></p>
            <?php } ?>

            <?php 
              if($processing){
            ?> <p class="text-capitalize"><strong>Order Status:</strong><b class="text-primary"> <?= $ord['order_status'] ?></b></p>
            <p class="text-capitalize"><strong>Processing Date:</strong><b class="text-primary"> <?= date('d M Y h:i: A',$ord['processing_time']) ?></b></p>
            <?php } ?>

             <?php 
              if($dispatch){
            ?> <p class="text-capitalize"><strong>Order Status:</strong><b class="text-dark"> <?= $ord['order_status'] ?></b></p>
            <p class="text-capitalize"><strong>Processing Date:</strong><b class="text-primary"> <?= date('d M Y h:i: A',$ord['processing_time']) ?></b></p>
            <p class="text-capitalize"><strong>Dispatched Date:</strong><b class="text-primary"> <?= date('d M Y h:i: A',$ord['dispatch_time']) ?></b></p>

            <?php } ?>

             <?php 
              if($delivered){
            ?> <p class="text-capitalize"><strong>Order Status:</strong><b class="text-success"> <?= $ord['order_status'] ?></b></p>
            <p class="text-capitalize"><strong>Processing Date:</strong><b class="text-primary"> <?= date('d M Y h:i: A',$ord['processing_time']) ?></b></p>
            <p class="text-capitalize"><strong>Dispatched Date:</strong><b class="text-primary"> <?= date('d M Y h:i: A',$ord['dispatch_time']) ?></b></p>
            <p class="text-capitalize"><strong>Delivered Date:</strong><b class="text-primary"> <?= date('d M Y h:i: A',$ord['delivered_time']) ?></b></p>
            <?php } ?>

             <?php 
              if($rejected){
            ?> <p class="text-capitalize"><strong>Order Status:</strong><b class="text-danger"> <?= $ord['order_status'] ?></b></p>
            <p class="text-capitalize"><strong>Rejected Date:</strong><b class="text-primary"> <?= date('d M Y h:i: A',$ord['rejected_time']) ?></b></p>

            <?php } ?>
            <p><strong>Payment Type:</strong> <?= $ord['payment_type'] ?></p>
            <p><strong>Payment Status:</strong> <?= $ord['pay_status'] ?></p>
          </div>
          <div class="col-md-4">
          
            <?php 
              if($processing){
            ?> <p class="text-capitalize p-2 border"><strong>Processing Remark:</strong><br><b> <?= $ord['processing_remark'] ?></b></p>
            <?php } ?>

             <?php 
              if($dispatch){
            ?>
            <p class="text-capitalize p-2 border"><strong>Processing Remark:</strong><br><b> <?= $ord['processing_remark'] ?></b></p>
            <p class="text-capitalize p-2 border"><strong>Dispatch Remark:</strong><br><b> <?= $ord['dispatch_remark'] ?></b></p>


            <?php } ?>

             <?php 
              if($delivered){
            ?> 
                        <p class="text-capitalize p-2 border"><strong>Processing Remark:</strong><br><b> <?= $ord['processing_remark'] ?></b></p>
            <p class="text-capitalize p-2 border"><strong>Dispatch Remark:</strong><br><b> <?= $ord['dispatch_remark'] ?></b></p>
            <p class="text-capitalize p-2 border"><strong>Delivered Remark:</strong><br><b> <?= $ord['delivered_remark'] ?></b></p>


            <?php } ?>

             <?php 
              if($rejected){
            ?>Rejected            <p class="text-capitalize p-2 border"><strong>Dispatch Remark:</strong><b class="text-primary"> <?= $ord['rejected_time'] ?></b></p>


            <?php } ?>
          </div>
        </div>

        <h5 class="mt-4 mb-3">Products (<?= $ord['ttlProducts'] ?>)</h5>
        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Qty</th>
                <th>Size</th>
                <th>Original Price</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach($order_det as $prod): ?>
                <?php if($prod['order_tbl_id'] == $ord['order_tbl_id']): ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td>
                    <?php
                      $images = explode("||", $prod['product_image']);
                      $img = !empty($images[0]) ? base_url('uploads/'.$images[0]) : '';
                    ?>
                    <img src="<?= $img ?>" alt="Product Image" width="60">
                  </td>
                  <td><?= $prod['product_name'] ?></td>
                  <td><?= $prod['category_name'] ?></td>
                  <td><?= $prod['qty'] ?></td>
                  <td><?= $prod['size'] ?></td>
                  <td>₹<?= number_format($prod['original_price']) ?></td>
                  <td>₹<?= number_format($prod['subtotal']) ?></td>
                </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

       <div class="mt-1 w-100" style="max-width: 400px; float: right;">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>Sub Total</th>
              <td>₹<?= number_format($ord['sub_total_amount']) ?></td>
            </tr>
            <tr>
              <th>Charges</th>
              <td>₹<?= number_format($ord['order_charges'], 2) ?></td>
            </tr>
            <tr class="table-dark">
              <th>Total Amount</th>
              <td><strong>₹<?= number_format($ord['total_amount'], 2) ?></strong></td>
            </tr>
          </tbody>
        </table>
      </div>

      </div>
    </div>
  <?php endforeach; ?>
</div>
