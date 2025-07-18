<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashfree Checkout Integration</title>
    <script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<script>
    const cashfree = Cashfree({ mode: "production" });

    function openCheckout() {
        let checkoutOptions = {
            paymentSessionId: "<?= $response['payment_session_id'] ?>",
            redirectTarget: "_modal",
        };

        cashfree.checkout(checkoutOptions).then((result) => {
            if (result.error) {
                console.log("Payment error or popup closed", result.error);
                                $.ajax({
                    url: "<?= base_url() ?>user/orderDetails",
                    type: "POST",
                    dataType: "json",
                    data: { order_id: "<?= $response['order_id'] ?>" },
                    success: function(res) {
                        // Ensure it's a parsed object if needed
                         res2 = JSON.parse(res);
                        if (res2.order_status === 'PAID') {
                            window.location.href = "<?= base_url() ?>user/PaymentSuccess?order_id=" + 
                                encodeURIComponent(res2.order_id) + "&bill=<?= $bill ?>&payment_session=<?= $response['payment_session_id'] ?>";
                        } else {
                             console.log("Order not paid yet:", res2);
                                window.location.href = "<?= base_url() ?>user/PaymentFailed?order_id=" + 
                                encodeURIComponent(res2.order_id) + "&bill=<?= $bill ?>&payment_session=<?= $response['payment_session_id'] ?>";
                            
                        }
                    },
                    error: function(err) {
                        console.error("AJAX error:", err);
                    }
                });
            }

            if (result.redirect) {
                console.log("Payment will be redirected");
            }

            if (result.paymentDetails) {
                console.log("Payment completed, checking status...");
                console.log(result.paymentDetails);

                $.ajax({
                    url: "<?= base_url() ?>user/orderDetails",
                    type: "POST",
                    dataType: "json",
                    data: { order_id: "<?= $response['order_id'] ?>" },
                    success: function(res) {
                        // Ensure it's a parsed object if needed
                         res2 = JSON.parse(res);
                        if (res2.order_status === 'PAID') {
                            window.location.href = "<?= base_url() ?>user/PaymentSuccess?order_id=" + 
                                encodeURIComponent(res2.order_id) + "&bill=<?= $bill ?>";
                        } else {
                            
                                console.log("Order not paid yet:", res2);
                                window.location.href = "<?= base_url() ?>user/PaymentFailed?order_id=" + 
                                encodeURIComponent(res2.order_id) + "&bill=<?= $bill ?>&payment_session=<?= $response['payment_session_id'] ?>";
                            
                        }
                    },
                    error: function(err) {
                        console.error("AJAX error:", err);
                    }
                });
            }
        });
    }

    // ✅ Trigger automatically on load
    window.onload = openCheckout;
</script>

</body>
</html>
