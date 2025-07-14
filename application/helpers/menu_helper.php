<?php

// function print_social_icon($url,$title)
// {
// $op='<ul class="share-social-icon">
// 	<li>
// 		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$url.'" >
// 			<i class="fa fa-facebook"></i>
// 		</a>
// 	</li>
// 	<li>
// 		<a target="_blank" href="http://www.twitter.com/share?text='.$title.'&amp;url='.$url.'" >
// 			<i class="fa fa-twitter"></i>
// 		</a>
// 	</li>
// 	<li>
// 		<a target="_blank" href="http://pinterest.com/pin/create/button/?url='.$url.'" >
// 			<i class="fa fa-pinterest"></i>
// 		</a>
// 	</li>
// 	<li>
// 		<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url='.$url.'&amp;title='.$title.'&amp;summary=&amp;source=" >
// 			<i class="fa fa-linkedin"></i>
// 		</a>
// 	</li>
// </ul>';
// echo $op;
// }
// function number_format1($money, $b = "")
// {
//     $money = explode('.', $money)[0];
//     $len = strlen($money);
//     $m = '';
//     $money = strrev($money);
//     for ($i = 0; $i < $len; $i++) {
//         if (($i == 3 || ($i > 3 && ($i - 1) % 2 == 0)) && $i != $len) {
//             $m .= ',';
//         }
//         $m .= $money[$i];
//     }
//     return strrev($m);
// }
function print_rating($rating)
{
    ?>
    <?php
    if ($rating > 0) {
        ?>
        <i class="fa-solid fa-star" style="color:#FFD700 !important"></i>
        <?php
    } else {
        ?>
        <i class="fa fa-star-o" style="color:#FFD700 !important"></i>
        <?php
    }
    if ($rating > 1) {
        ?>
        <i class="fa-solid fa-star" style="color:#FFD700 !important"></i>
        <?php
    } else {
        ?>
        <i class="fa fa-star-o" style="color:#FFD700 !important"></i>
        <?php
    }
    if ($rating > 2) {
        ?>
        <i class="fa-solid fa-star" style="color:#FFD700 !important"></i>
        <?php
    } else {
        ?>
        <i class="fa fa-star-o" style="color:#FFD700 !important"></i>
        <?php
    }
    if ($rating > 3) {
        ?>
        <i class="fa-solid fa-star" style="color:#FFD700 !important"></i>
        <?php
    } else {
        ?>
        <i class="fa fa-star-o" style="color:#FFD700 !important"></i>
        <?php
    }
    if ($rating > 4) {
        ?>
        <i class="fa-solid fa-star" style="color:#FFD700 !important"></i>
        <?php
    } else {
        ?>
        <i class="fa fa-star-o" style="color:#FFD700 !important"></i>
        <?php
    }
    ?>

    <?php
}
function get_user_info_by_mail($email, $fname, $lname, $pic)
{
    $ret = $GLOBALS['CI']->My_model->select_where("customers", ['email' => $email]);
    if (isset($ret[0])) {
        if ($ret[0]['status'] == 'active') {
            $_SESSION['user_id'] = $ret[0]['customers_id'];
            $_SESSION['user_name'] = $ret[0]['firstname'];
            if ($ret[0]['mobile'] != "") {
                $msg = "Dear " . $ret[0]['firstname'] . " Welcome to Shingavi Jewellers! Thank you for Signing at Shingavi Jewellers Ptd Ltd";
                // old_template 1207163411224533139
                if (!empty($_POST['mobile'])) {
                    send_massage($_POST['mobile'], $msg, '1707169892006947524');
                }
            }
            setcookie('user_id', base64_encode($_SESSION['user_id']), time() + (86400 * 365), "/");
            $log['user_id'] = $ret[0]['customers_id'];
            $log['login_time'] = time();

            $GLOBALS['CI']->My_model->insert("login_log", $log);

            return ['status' => 'Success', 'massage' => 'Already User Registered'];
        } else {
            return ['status' => 'Failed', 'massage' => 'UnAuthorized user'];
        }
    } else {
        $id = $GLOBALS['CI']->My_model->insert("customers", ['email' => $email, 'firstname' => $fname, 'lastname' => $lname, 'reg_time' => time(), 'status' => 'active', 'profile_photo' => $pic]);

        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $fname;
        setcookie('user_id', base64_encode($_SESSION['user_id']), time() + (86400 * 365), "/");
        $log['user_id'] = $id;
        $log['login_time'] = time();

        $GLOBALS['CI']->My_model->insert("login_log", $log);

        return ['status' => 'Success', 'massage' => 'New User Registered'];
    }
}

function get_product_gold_search_exact($str)
{
    $a = " ( ";
    $arr = ['product_gold.product_name', 'product_gold.product_details', 'product_gold.label'];
    foreach ($arr as $row) {
        if ($a != " ( ")
            $a .= " OR ";
        $a .= " UPPER(" . $row . ") = '" . strtoupper($str) . "' ";
    }
    $a .= " ) ";
    return $a;
}
function getspecialdays($special_days_id)
{
    $ret = $GLOBALS['CI']->My_model->select_where("special_days", ['status' => 'active', 'special_days_id' => $special_days_id]);
    if (isset($ret[0])) {
        return $ret[0]['special_day'];
    } else {
        return "";
    }
}
function getgroupname($product_group_id)
{
    $ret = $GLOBALS['CI']->My_model->select_where("product_group", ['status' => 'active', 'product_group_id' => $product_group_id]);
    if (isset($ret[0]) && !empty($ret)) {
        return $ret[0]['product_group_name'];
    } else {
        return "";
    }
}


function get_product_gold_search($str)
{
    $a = " ( ";
    $arr = ['product_gold.product_name', 'product_gold.product_details', 'product_gold.label'];
    foreach ($arr as $row) {
        if ($a != " ( ")
            $a .= " OR ";
        $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str) . "%' ";
    }
    $a .= " ) ";
    return $a;
}

function get_product_gold_search2($str)
{
    $strs = explode(" ", $str);
    $a = " ( ";
    $arr = ['product_gold.product_name', 'product_gold.product_details', 'product_gold.label'];
    foreach ($strs as $str2) {
        foreach ($arr as $row) {
            if ($a != " ( ")
                $a .= " OR ";
            $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str2) . "%' ";
        }
    }
    $a .= " ) ";
    return $a;
}
function get_cat_and_group_search($str)
{
    $a = " ( ";
    $arr = ['category.category_name', 'category.category_details'];
    foreach ($arr as $row) {
        if ($a != " ( ")
            $a .= " OR ";
        $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str) . "%' ";
    }
    $a .= " ) ";
    return $a;
}

function get_cat_and_group_search_exact($str)
{
    $a = " ( ";
    $arr = ['category.category_name', 'category.category_details'];
    foreach ($arr as $row) {
        if ($a != " ( ")
            $a .= " OR ";
        $a .= " UPPER(" . $row . ") = '" . strtoupper($str) . "' ";
    }
    $a .= " ) ";
    return $a;
}

function get_cat_and_group_search2($str)
{
    $strs = explode(" ", $str);
    $a = " ( ";
    $arr = ['category.category_name', 'category.category_details'];
    foreach ($strs as $str2) {
        foreach ($arr as $row) {
            if ($a != " ( ")
                $a .= " OR ";
            $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str2) . "%' ";
        }
    }
    $a .= " ) ";
    return $a;
}



function get_prod_filter_search_exact($str)
{
    $a = " ( ";
    $arr = ['filter_name.filter_name', 'filter_title.filter_title'];
    foreach ($arr as $row) {
        if ($a != " ( ")
            $a .= " OR ";
        $a .= " UPPER(" . $row . ") = '" . strtoupper($str) . "' ";
    }
    $a .= " ) ";
    return $a;
}

function get_prod_filter_search($str)
{
    $a = " ( ";
    $arr = ['filter_name.filter_name', 'filter_title.filter_title'];
    foreach ($arr as $row) {
        if ($a != " ( ")
            $a .= " OR ";
        $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str) . "%' ";
    }
    $a .= " ) ";
    return $a;
}

function get_prod_filter_search2($str)
{
    $strs = explode(" ", $str);
    $a = " ( ";
    $arr = ['filter_name.filter_name', 'filter_title.filter_title'];
    foreach ($strs as $str2) {
        foreach ($arr as $row) {
            if ($a != " ( ")
                $a .= " OR ";
            $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str2) . "%' ";
        }
    }
    $a .= " ) ";
    return $a;
}


function get_prod_review_search($str)
{
    $a = " ( ";
    $arr = ['product_review.text'];
    foreach ($arr as $row) {
        if ($a != " ( ")
            $a .= " OR ";
        $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str) . "%' ";
    }
    $a .= " ) ";
    return $a;
}
function get_prod_review_search2($str)
{
    $strs = explode(" ", $str);
    $a = " ( ";
    $arr = ['product_review.text'];
    foreach ($strs as $str2) {
        foreach ($arr as $row) {
            if ($a != " ( ")
                $a .= " OR ";
            $a .= " UPPER(" . $row . ") LIKE '%" . strtoupper($str2) . "%' ";
        }
    }
    $a .= " ) ";
    return $a;
}
function user_mob($user_id)
{
    $res = $GLOBALS['CI']->My_model->select("customers", ['customers_id' => $user_id]);
    if (isset($res[0])) {
        if ($res[0]['mobile'] != "") {
            if (strlen($res[0]['mobile']) == 10)
                return '91' . $res[0]['mobile'];
            elseif (strlen($res[0]['mobile']) == 12)
                return $res[0]['mobile'];
            else
                return "";
        } else
            return '';
    } else
        return "";
}

function is_valid_cat($cat_id)
{
    $res = $GLOBALS['CI']->db->query('SELECT prod_gold_id FROM product_gold WHERE status="active" AND label!="Out Of Stock" AND  cat_id="' . $cat_id . '" LIMIT 1')->result_array();
    if (count($res) > 0)
        return true;
    else
        return false;
}
function is_valid_group($group_id)
{
    $res = $GLOBALS['CI']->db->query('SELECT prod_gold_id FROM product_gold WHERE status="active" AND label!="Out Of Stock" AND  group_id="' . $group_id . '" LIMIT 1')->result_array();
    if (count($res) > 0)
        return true;
    else
        return false;
}
function send_massage($mobile2, $msg, $teplate_id)
{
    if ($mobile2 != "") {
        if (strlen($mobile2) == 10)
            $mobile = '91' . $mobile2;
        elseif (strlen($mobile2) == 12)
            $mobile = $mobile2;
        else
            $mobile = "";
    } else
        $mobile = '';

    if ($mobile != "") {
        $msg = urlencode($msg);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://smsindia.techmartonline.com/api/sendhttp.php?authkey=83421AhlMv82TL6114c74bP1&mobiles=91,' . $mobile . '&message=' . $msg . '&country=91&route=4&DLT_TE_ID=' . $teplate_id . '&response=json&sender=SHGJPL',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=91k324u6bdpvt9kr8jgoonbjk6'
            ),
        ));

        $response = curl_exec($curl);
        // echo $response;
        curl_close($curl);
        // $response;
    }
}
// Function to generate a random OTP
function generateOTP()
{
    $otp = '';
    for ($i = 0; $i < 4; $i++) {
        $otp .= mt_rand(0, 9); // Generate random digits
    }
    return $otp;
}
function send_bulk_massage($mobile, $msg, $teplate_id)
{
    if ($mobile != "") {
        $msg = urlencode($msg);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://smsindia.techmartonline.com/api/sendhttp.php?authkey=83421AhlMv82TL6114c74bP1&mobiles=91,' . $mobile . '&message=' . $msg . '&country=91&route=4&DLT_TE_ID=' . $teplate_id . '&response=json&sender=SHINGV',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=91k324u6bdpvt9kr8jgoonbjk6'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}


function check_nav($func, $auth_urls)
{

    if ($_SESSION['admin_position'] != 'master_admin') {
        if (in_array($func, $auth_urls)) {
            return true;
        } else {
            $ser = $GLOBALS['CI']->db->query("SELECT * FROM authontication_tbl,authontication_urls WHERE authontication_tbl.authontication_tbl_id=authontication_urls.authontication_tbl_id AND authontication_tbl.status='active' AND authontication_urls.authontication_url='" . $func . "'")->result_array();
            if (isset($ser[0])) {
                return false;
            } else {
                return true;
            }
        }
    } else {
        return true;
    }
}
function get_images_most_viewed($cat_id)
{
    $res = $GLOBALS['CI']->db->query('SELECT product_gold.prod_gold_id,product_gold.product_image,product_gold.product_name FROM product_gold,product_visiter WHERE product_visiter.prod_id=product_gold.prod_gold_id AND product_gold.cat_id="' . $cat_id . '" AND status="active" AND label!="Out Of Stock" GROUP BY product_gold.prod_gold_id ORDER BY count(product_visiter.prod_id) DESC LIMIT 7')->result_array();
    return $res;
}
function get_gift_category()
{
    return $GLOBALS['CI']->db->query('SELECT category.* FROM product_gold,category WHERE product_gold.cat_id=category.category_id AND category.status="active" AND product_gold.status="active" AND label!="Out Of Stock" AND label="Gift" GROUP BY product_gold.cat_id ORDER BY count(cat_id) ASC')->result_array();

}
// function escape_output($string)
// {
//     $newString = str_replace('\r\n', '<br/>', $string);
//     $newString = str_replace('\n\r', '<br/>', $newString);
//     $newString = str_replace('\r', '<br/>', $newString);
//     $newString = str_replace('\n', '<br/>', $newString);
//     $newString = str_replace('\\\\\\', "'", $newString);
//     $newString = str_replace('\'', '', $newString);
//     return $newString;
// }
// function escape_output_ta($string)
// {
//     $string = str_replace("\\r", "\r", str_replace("\\n", "\n", $string));
//     $string = ltrim($string, "'");
//     $string = rtrim($string, "'");
//     return $string;
// }
function filter_mobile($a)
{
    if (strlen($a) == 10)
        return "91" . $a;
    else
        return 0;
}
function partition($list, $p)
{
    $listlen = count($list);
    $partlen = floor($listlen / $p);
    $partrem = $listlen % $p;
    $partition = array();
    $mark = 0;
    for ($px = 0; $px < $p; $px++) {
        $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
        $partition[$px] = array_slice($list, $mark, $incr);
        $mark += $incr;
    }
    return $partition;
}
// function print_qty($qty)
// {
//     if ($qty == "") {
//         echo "<span style='color:blue;'>Available</span>";
//     } else if ($qty == 0) {
//         echo "<big style='color:red;'>$qty Qty</big>";
//     } else {
//         echo "$qty Qty";
//     }
// }

function print_qty2($qty)
{
    if ($qty == "") {
        return "";
    } else if ($qty == 0) {
        return "<span style='color:red;'>No Stock Availabe, This Product Will Be Dispatched In 5-15 Days</span>";
    } else if ($qty <= 5) {
        echo "<span style='color:red;'>Only $qty qty left</span>";
    }
}


// function encrypt($data, $encryptionKey="ABCDEFGHIJKLMNOPQRSTUVWXYZZXCVBNHGFADSEQRWTY123567") 
// {
//     error_reporting(0);
//     $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-128-CBC'));
//     $encrypted = openssl_encrypt($data, 'AES-128-CBC', $encryptionKey, 0, $iv);
//     return base64_encode($iv.$encrypted);
// }
// function decrypt($encryptedData, $encryptionKey="ABCDEFGHIJKLMNOPQRSTUVWXYZZXCVBNHGFADSEQRWTY123567") 
// {
//     error_reporting(0);
//     $encryptedData = base64_decode($encryptedData);
//     $ivLength = openssl_cipher_iv_length('AES-128-CBC');
//     $iv = substr($encryptedData, 0, $ivLength);
//     $encrypted = substr($encryptedData, $ivLength);
//     return openssl_decrypt($encrypted, 'AES-128-CBC', $encryptionKey, 0, $iv);
// }
function print_data($data)
{
    echo "<pre>";
    print_r($data);
}
function sanitize_input_data($data)
{
    $sanitized = array();
    foreach ($data as $key => $value) {
        // Remove extra spaces and apply htmlspecialchars to prevent XSS
        // $sanitized[$key] = htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
        $sanitized[$key] = strip_tags(trim($value));
    }
    return $sanitized;
}
function resizeImage($source, $destination, $newWidth, $newHeight)
{
    list($width, $height, $type) = getimagesize($source);

    $image = null;
    switch ($type) {
        case IMAGETYPE_JPEG:
            $image = imagecreatefromjpeg($source);
            break;
        case IMAGETYPE_PNG:
            $image = imagecreatefrompng($source);
            break;
        case IMAGETYPE_GIF:
            $image = imagecreatefromgif($source);
            break;
        default:
            return false; // Unsupported format
    }

    $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    // Save the resized image
    imagejpeg($resizedImage, $destination, 80); // Adjust quality (80 is good)

    // Free memory
    imagedestroy($image);
    imagedestroy($resizedImage);

    return true;
}

// pagination helper 

if (!function_exists('initialize_pagination')) {
    function initialize_pagination($base_url, $total_rows, $per_page = 5, $uri_segment = 3)
    {
        $ci = &get_instance();
        $ci->load->library('pagination');

        $config['base_url'] = $base_url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = $uri_segment;

        // Customize pagination styling (optional)
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = ['class' => 'page-link'];

        $ci->pagination->initialize($config);

        return $ci->pagination->create_links();
    }
}
function createCashfreeOrder($customer_id, $customer_name, $customer_email, $customer_phone, $orderAmount, $returnUrl)
{
    $curl = curl_init();

    $postData = json_encode([
        'order_amount' => $orderAmount,
        'order_currency' => 'INR',
        'customer_details' => [
            'customer_id' => $customer_id,
            'customer_name' => $customer_name,
            'customer_email' => $customer_email,
            'customer_phone' => $customer_phone
        ],
        'order_meta' => [
            'return_url' => $returnUrl
        ]
    ]);

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.cashfree.com/pg/orders',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_HTTPHEADER => array(
            'X-Client-Secret: dd6712b4f88c7d6195586b59fe5cd0e898adb89c',
            'X-Client-Id: 24376169216c7a5e7beae86f59167342',
            'x-api-version: 2023-08-01',
            'Content-Type: application/json',
            'Accept: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}
function getPaymentDetails($orderId)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.cashfree.com/pg/orders/$orderId/payments",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-api-version: 2022-09-01",
            "x-client-id: 24376169216c7a5e7beae86f59167342",
            "x-client-secret: dd6712b4f88c7d6195586b59fe5cd0e898adb89c"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return $response;
    }
}
function getCashfreeOrderDetails($orderId)
{
    $clientId = "24376169216c7a5e7beae86f59167342";
    $clientSecret = "dd6712b4f88c7d6195586b59fe5cd0e898adb89c";
    $apiUrl = "https://api.cashfree.com/pg/orders/" . $orderId;

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $apiUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-api-version: 2023-08-01",
            "x-client-id: $clientId",
            "x-client-secret: $clientSecret"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return ['error' => true, 'message' => $err];
    } else {
        return $response; // return as array
    }
}


// end pagination helper 


function compress_image()
{
    return "https://jewelnagar.com/image_compressor.php?image=";
}
?>