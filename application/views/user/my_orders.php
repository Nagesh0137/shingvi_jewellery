<?php
// Get tab from query string, default to 'pending'
$tab = $_GET['tab'] ?? 'pending';
function tabActive($t, $tab)
{
    return $t == $tab ? 'active' : '';
}

// Map tab to order_status values
$status_map = [
    'pending' => 'pending',
    'on_the_way' => 'on the way',
    'delivered' => 'delivered',
];

?>
<style>
    .orders-tabs {
        margin-bottom: 20px;
    }

    .orders-tabs .btn {
        margin-right: 10px;
        border-radius: 6px;
        font-weight: 500;
    }

    .orders-tabs .btn.active {
        background: #e74c3c;
        color: #fff;
    }

    .orders-table th,
    .orders-table td {
        text-align: center;
        vertical-align: middle;
    }

    .orders-empty {
        text-align: center;
        margin: 60px 0;
        font-size: 2rem;
    }

    .orders-empty .pending {
        color: #e74c3c;
        font-weight: bold;
    }

    .orders-table {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 0;
    }

    h1 {
        font-weight: bold;
        margin-bottom: 30px;
    }
</style>
<div class="container">
    <h1>Your Orders</h1>
    <div class="orders-tabs">
        <a href="?tab=pending" class="btn <?php echo tabActive('pending', $tab); ?>">Pending</a>
        <a href="?tab=on_the_way" class="btn <?php echo tabActive('on_the_way', $tab); ?>">On The Way</a>
        <a href="?tab=delivered" class="btn <?php echo tabActive('delivered', $tab); ?>">Delivered</a>
    </div>
    <div class="table-responsive">
        <table class="table orders-table">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Order Date</th>
                    <th>Payment Mode</th>
                    <th>Payment Status</th>
                    <th>Amount</th>
                    <th>View Order</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $orders = [];
                if (!empty($user_details)) {
                    foreach ($user_details as $order) {
                        $status = strtolower($order['order_status']);
                        if (
                            ($tab == 'pending' && $status == 'pending') ||
                            ($tab == 'on_the_way' && $status == 'on the way') ||
                            ($tab == 'delivered' && $status == 'delivered')
                        ) {
                            $orders[] = $order;
                        }
                    }
                }
                if (empty($orders)) {
                    $tabLabel = ucfirst(str_replace('_', ' ', $tab));
                    echo '<tr><td colspan="5" class="orders-empty">No <span class="pending">' . $tabLabel . '</span> Order Available</td></tr>';
                } else {
                    foreach ($orders as $key => $order) {
                        echo '<tr>';
                        echo '<td>' . ($key + 1) . '.</td>';
                        echo '<td>' . date('d-m-Y', strtotime($order['order_date'])) . '</td>';
                        echo '<td>' . htmlspecialchars($order['payment_type']) . '</td>';
                        echo '<td>' . htmlspecialchars(ucfirst($order['pay_status'])) . '</td>';
                        echo '<td> ₹ ' . number_format($order['total_amount']) . '</td>';
                        echo '<td><a href="' . base_url('user/order_view/' . $order['order_tbl_id']) . '" class="btn btn-sm btn-primary">View</a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>