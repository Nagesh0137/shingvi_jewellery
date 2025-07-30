<?php
$order = $order[0];
$company = $company_det[0];
$order_det = $order_det;

// Product images
$product_images = explode('||', $order_det[0]['product_image']);

?>

<main id="main" class="printMain">
    <section class="invoice section-ptb">
        <div class="container">
            <div class="col-xl-10 mx-xl-auto">
                <div class="ptb-30 ptb-xl-50 plr-15 plr-sm-30 plr-xl-50 extra-bg box-shadow invoice-content">

                    <!-- Company & Invoice Info -->
                    <div class="row row-mtm">
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="invoice-theme-logo">
                                    <a href="#" class="d-block theme-logo">
                                        <img src="<?= base_url('uploads/' . $company['company_logo']) ?>" class="width-112 img-fluid" alt="logo">
                                    </a>
                                </div>
                                <div class="invoice-detail mst-22">
                                    <h2 class="font-32 meb-19">Invoice</h2>
                                    <div class="ul-mtm-15">
                                        <span class="d-block"><strong>Order:</strong> <?= $order['cOrderId'] ?></span>
                                        <span class="d-block"><strong>Total:</strong> ₹<?= number_format($order['total_amount'], 2) ?></span>
                                        <span class="d-block"><strong>Date:</strong> <?= date('d M Y', strtotime($order['order_date'])) ?></span>
                                        <span class="d-block text-capitalize"><strong>Payment Type  :</strong> <?= $order['payment_type'] ?></span>
                                        <span class="d-block text-capitalize"><strong>Payment :</strong> <?= $order['pay_status'] ?></span>
                                        <?php 
                                        if($order['pay_status'] == 'paid')
                                        {
                                            
                                        ?>
                                        <span class="d-block"><strong>Paid Amount :</strong> ₹<?= number_format($order['paid_amount']) ?></span>
                                       <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- To / From -->
                        <div class="col-12 col-sm-6">
                            <div class="row ul-mtm30">
                                <div class="col-12">
                                    <div class="ul-mtm-15">
                                        <span class="heading-weight">To</span>
                                        <span><?= $order['c_name'] ?>, <?= $order['cust_address'] ?>, <?= $order['cust_city'] ?> - <?= $order['cust_pincode'] ?></span>
                                        <span class="heading-weight">Mobile</span>
                                        <span><?= $order['c_mobile'] ?></span>
                                        <span class="heading-weight">Email</span>
                                        <span><?= $order['c_email'] ?></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ul-mtm-15">
                                        <span class="heading-weight">From</span>
                                        <span><?= $company['company_name'] ?>, <?= $company['company_address'] ?></span>
                                        <span class="heading-weight">Email</span>
                                        <span><?= $company['company_email'] ?></span>
                                        <span class="heading-weight">Mobile</span>
                                        <span><?= $company['mobile_no'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products Table -->
                    <div class=" table-responsive mt-2">
                    <table class="table table-bordered mst-30e">
    <thead class="heading-weight">
        <tr style="white-space:nowrap;">
            <th style="width:10%;">Image</th>
            <th style="width:40%;">Product</th>
            <th style="width:15%;">Price</th>
            <th style="width:10%;" class="text-center">Qty</th>
            <th style="width:15%;" class="text-end">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($order_det as $item): ?>
            <tr style="white-space:nowrap;">
                <td>
                    <?php
                        $first_img = explode('||', $item['product_image'])[0];
                    ?>
                    <img src="<?= base_url('uploads/' . $first_img) ?>" class="img-fluid border" style="width: 60px;">
                </td>
                <td><?= $item['product_name'] ?></td>
                <td>₹<?= number_format($item['original_price'], 2) ?></td>
                <td class="text-center"><?= $item['qty'] ?></td>
                <td class="text-end">₹<?= number_format($item['subtotal'], 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" class="text-end">Subtotal</td>
            <td class="text-end">₹<?= number_format($order['sub_total_amount'], 2) ?></td>
        </tr>
        <tr>
            <td colspan="4" class="text-end">Charges</td>
            <td class="text-end">₹<?= number_format($order['order_charges'], 2) ?></td>
        </tr>
        <tr class="heading-weight">
            <td colspan="4" class="text-end"><strong>Total</strong></td>
            <td class="text-end"><strong>₹<?= number_format($order['total_amount'], 2) ?></strong></td>
        </tr>
    </tfoot>
</table>    
                    </div>
                    


                    <!-- Terms and Contact -->
                    <div class="mst-15">By paying, you agree to our terms.</div>
                    <div class="mst-30 pst-30 bst">
                        <div class="ul-mtm15">
                            <span class="d-block"><strong>Tel:</strong> <a href="tel:+91<?= $company['mobile_no'] ?>" class="body-dominant-color">+91 <?= $company['mobile_no'] ?></a></span>
                            <span class="d-block"><strong>Email:</strong> <a href="mailto:<?= $company['company_email'] ?>" class="body-dominant-color"><?= $company['company_email'] ?></a></span>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="invoice-button mst-30">
                        <div class="ul-mt30 justify-content-center">
                            <div class="invoice-print-button" data-animate="animate__fadeIn">
                                <!--<a href="javascript:void(0)" onclick="printInvoiceContent()" class="body-secondary-color d-flex align-items-center">-->
                                <!--            <i class="ri-printer-line icon-16 mer-5"></i><span class="text-decoration-underline">Print invoice</span>-->
                                <!--        </a>-->

                            </div>
                            <div class="invoice-download-button" data-animate="animate__fadeIn">
                                <button type="button" class="invoice-download body-secondary-color d-flex align-items-center">
                                    <i class="ri-download-line icon-16 mer-5"></i><span class="text-decoration-underline">Download invoice</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div> <!-- end invoice-content -->
            </div>
        </div>
    </section>
</main>
<script>
function printInvoiceContent() {
    const originalContent = document.body.innerHTML;
    const printSection = document.querySelector('#main').innerHTML;
    document.body.innerHTML = printSection;
    window.print();
    document.body.innerHTML = originalContent;
    location.reload(); // to reapply JavaScript/CSS functionality if needed
}
</script>
