<?php
// Product/order details are in $order_details[0]
$order = !empty($order_details[0]) ? $order_details[0] : null;
?>
<div class="container" style="max-width:900px;margin:auto;padding:40px 0;">
    <h1 class="mb-4" style="font-weight:bold;">Order Details</h1>
    <?php if ($order): ?>
    <div class="card mb-4 shadow-sm border-0" style="border-radius:16px;overflow:hidden;">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center bg-light" style="min-height:260px;">
                <?php 
                $imgs = isset($order['product_image']) ? explode('||', $order['product_image']) : [];
                $img = !empty($imgs[0]) ? base_url('uploads/' . $imgs[0]) : base_url('uploads/dummy_profile.png');
                ?>
                <img src="<?= $img ?>" alt="<?= htmlspecialchars($order['product_name']) ?>" class="img-fluid" style="max-height:220px;max-width:100%;border-radius:12px;object-fit:cover;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title mb-2" style="font-weight:600;"> <?= htmlspecialchars($order['product_name']) ?> </h3>
                    <p class="mb-1 text-muted">Category: <b><?= htmlspecialchars($order['category_name']) ?></b></p>
                    <!-- <p class="mb-1">Order ID: <b><?= htmlspecialchars($order['order_tbl_id']) ?></b></p> -->
                    <p class="mb-1">Order Date: <b><?= date('d-m-Y', strtotime($order['order_date'])) ?></b></p>
                    <p class="mb-1">Order Status: <span class="badge bg-info text-dark"> <?= ucfirst($order['order_status']) ?> </span></p>
                    <p class="mb-1">Payment Mode: <b><?= htmlspecialchars($order['payment_type']) ?></b></p>
                    <p class="mb-1">Payment Status: <b><?= ucfirst($order['pay_status']) ?></b></p>
                    <p class="mb-1">Quantity: <b><?= $order['qty'] ?></b></p>
                    <p class="mb-1">Size: <b><?= !empty($order['size']) ? $order['size'] : 'NA' ?></b></p>
                    <hr>
                    <div class="mb-2">
                        <?php if (!empty($order['discount_amount']) && $order['discount_amount'] > 0): ?>
                            <span class="fs-5 fw-bold text-success">₹ <?= number_format($order['final_amount_after_discount'], 2) ?></span>
                            <span class="text-muted text-decoration-line-through ms-2">₹ <?= number_format($order['original_price'], 2) ?></span>
                            <span class="badge bg-success ms-2">Save ₹<?= number_format($order['discount_amount'], 2) ?></span>
                        <?php else: ?>
                            <span class="fs-5 fw-bold text-success">₹ <?= number_format($order['original_price'], 2) ?></span>
                        <?php endif; ?>
                    </div>
                    <p class="mb-0">Total: <b>₹ <?php 
                        $amt = is_numeric($order['original_price']) ? (float)$order['original_price'] : 0;
                        $qty = is_numeric($order['qty']) ? (int)$order['qty'] : 0;
                        echo number_format($amt * $qty, 2);
                    ?></b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
        <div class="card-body">
            <h5 class="mb-3">Product Description</h5>
            <p><?= nl2br(htmlspecialchars($order['product_details'])) ?></p>
        </div>
    </div>
    <?php else: ?>
        <div class="alert alert-warning text-center">Order details not found.</div>
    <?php endif; ?>
</div>
