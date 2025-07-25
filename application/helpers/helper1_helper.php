<?php
if (!function_exists('encrypt_url_part')) {
  function encrypt_url_part($url_part)
  {
    $CI =& get_instance();
    $CI->load->library('encryption');
    return urlencode($CI->encryption->encrypt($url_part));
  }
}

function getTimeBasedGreeting()
{
  $hour = date('H'); // 24-hour format (00 to 23)

  if ($hour >= 5 && $hour < 12) {
    return "Good Morning";
  } elseif ($hour >= 12 && $hour < 17) {
    return "Good Afternoon";
  } elseif ($hour >= 17 && $hour < 21) {
    return "Good Evening";
  } else {
    return "Good Night";
  }
}
function send_massage($mobile2,$msg,$teplate_id)
{
  if($mobile2!="")
  {
    if(strlen($mobile2)==10)
      $mobile='91'.$mobile2;
    elseif(strlen($mobile2)==12)
      $mobile=$mobile2;
    else
      $mobile="";
  }
  else
    $mobile='';

  if($mobile!="")
  {
    $msg=urlencode($msg);
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://smsindia.techmartonline.com/api/sendhttp.php?authkey=83421AhlMv82TL6114c74bP1&mobiles=91,'.$mobile.'&message='.$msg.'&country=91&route=4&DLT_TE_ID='.$teplate_id.'&response=json&sender=SHGJPL',
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


if (!function_exists('decrypt_url_part')) {
  function decrypt_url_part($encrypted_part)
  {
    $CI =& get_instance();
    $CI->load->library('encryption');
    return $CI->encryption->decrypt(urldecode($encrypted_part));
  }
}

function number_format1($money, $b = "")
{
  $money = explode('.', $money)[0];
  $len = strlen($money);
  $m = '';
  $money = strrev($money);
  for ($i = 0; $i < $len; $i++) {
    if (($i == 3 || ($i > 3 && ($i - 1) % 2 == 0)) && $i != $len) {
      $m .= ',';
    }
    $m .= $money[$i];
  }
  return strrev($m);
}
function getCategoryName($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("category_tbl", ['category_tbl_id' => $id]);
  if (isset($data[0]))
    return $data[0]['category_name'];
  else
    return "-";
}
function getStateName($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("state", ['state_id' => $id]);
  if (isset($data[0]))
    return $data[0]['state_name'];
  else
    return "-";
}
function getDistrictName($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("district", ['district_id' => $id]);
  if (isset($data[0]))
    return $data[0]['district_name'];
  else
    return "-";
}
function calculate_time_difference($time1, $time2)
{
  // Convert the times to DateTime objects
  $datetime1 = new DateTime($time1);
  $datetime2 = new DateTime($time2);

  // Calculate the difference between the two DateTime objects
  $interval = $datetime1->diff($datetime2);

  // Extract hours and minutes from the interval
  $hours = $interval->h + ($interval->days * 24); // Includes days converted to hours
  $minutes = $interval->i;

  // Return an array with hours and minutes
  return [
    'hours' => $hours,
    'minutes' => $minutes,
  ];
}

function getAmountInWords($number)
{
  $no = floor($number);
  $point = round($number - $no, 2) * 100;
  $hundred = null;
  $digits_1 = strlen($no);
  $i = 0;
  $str = array();
  $words = array(
    '0' => '',
    '1' => 'one',
    '2' => 'two',
    '3' => 'three',
    '4' => 'four',
    '5' => 'five',
    '6' => 'six',
    '7' => 'seven',
    '8' => 'eight',
    '9' => 'nine',
    '10' => 'ten',
    '11' => 'eleven',
    '12' => 'twelve',
    '13' => 'thirteen',
    '14' => 'fourteen',
    '15' => 'fifteen',
    '16' => 'sixteen',
    '17' => 'seventeen',
    '18' => 'eighteen',
    '19' => 'nineteen',
    '20' => 'twenty',
    '30' => 'thirty',
    '40' => 'forty',
    '50' => 'fifty',
    '60' => 'sixty',
    '70' => 'seventy',
    '80' => 'eighty',
    '90' => 'ninety'
  );
  $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
  while ($i < $digits_1) {
    $divider = ($i == 2) ? 10 : 100;
    $number = floor($no % $divider);
    $no = floor($no / $divider);
    $i += ($divider == 10) ? 1 : 2;
    if ($number) {
      $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
      $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
      $str[] = ($number < 21) ? $words[$number] .
        " " . $digits[$counter] . $plural . " " . $hundred
        :
        $words[floor($number / 10) * 10]
        . " " . $words[$number % 10] . " "
        . $digits[$counter] . $plural . " " . $hundred;
    } else
      $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    $words[floor($point / 10)] . " " .
    $words[$point % 10] : '';
  return $result . "Rupees " . ($points ? "and " . $points . " Paise" : "");
}

function convertPaiseToWords($paise)
{
  $rupees = floor($paise / 100);
  $remainingPaise = $paise % 100;
  $amountInWords = getAmountInWords($rupees);

  if ($remainingPaise > 0) {
    $amountInWords .= " and " . getAmountInWords($remainingPaise / 100) . " Paise";
  }

  return $amountInWords;
}


function sortArrayByColumn(array $array, string $column): array
{
  usort($array, function ($a, $b) use ($column) {
    return strcmp($a[$column], $b[$column]);
  });

  return $array;
}
function getUnitName($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("unit_tbl", ['unit_tbl_id' => $id]);
  if (isset($data[0]))
    return $data[0]['unit_name'];
  else
    return "";
}
function getSupplierName($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("supplier_tbl", ['supplier_tbl_id' => $id]);
  if (isset($data[0]))
    return $data[0]['supplier_name'];
  else
    return "";
}
function getAllProductMaterialsName($id)
{
  return $GLOBALS['CI']->My_model->select_where("plant_raw_materials", ['plant_id' => $id, 'status' => 'active']);
}
function getProdCategoryName($id)
{
  return $GLOBALS['CI']->My_model->select_where("raw_materials", ['raw_materials_id' => $id])[0]['raw_materials_name'];
}
function getPlatName($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("plant_tbl", ['plant_tbl_id' => $id]);
  if (isset($data[0]['plant_name'])) {
    return $data[0]['plant_name'];
  } else {
    return '-';
  }
}
function getFuelType_name($id)
{
  return $GLOBALS['CI']->My_model->select_where("fueling_type", ['fueling_type_id' => $id])[0]['fueling_type_name'];
}
function getVehNo($id)
{
  return $GLOBALS['CI']->My_model->select_where("vehicle_tbl", ['vehicle_tbl_id' => $id])[0]['vehicle_no'];
}
function getVehicleType_name($id)
{
  return $GLOBALS['CI']->My_model->select_where("vehicle_type", ['vehicle_type_id' => $id])[0]['vehicle_type_name'];
}
function category_name($id)
{
  return $GLOBALS['CI']->My_model->select_where("gallery_cat_tbl", ['gallery_cat_tbl_id' => $id])[0]['gallery_cat_name'];
}
function getEmpName($id)
{
  return $GLOBALS['CI']->My_model->select_where("emp_tbl", ['emp_tbl_id' => $id])[0]['emp_name'];
}

function getPaymentName($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("payment_type", ['payment_type_id' => $id]);
  if (isset($data[0])) {
    return $data[0]['payment_type_name'];
  } else {
    return '-';
  }
}
//API Helper
function getIdByToken($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("emp_tbl", ['token' => $id]);
  if (isset($data[0]['emp_tbl_id'])) {
    return $data[0]['emp_tbl_id'];
  } else {
    return 'no';
  }
}
function getSIdByToken($id)
{
  $data = $GLOBALS['CI']->My_model->select_where("supplier_tbl", ['token' => $id]);
  if (isset($data[0]['supplier_tbl_id'])) {
    return $data[0]['supplier_tbl_id'];
  } else {
    return 'no';
  }
}

function print_social_icon($url, $title)
{
  $wamsg = urlencode('*' . trim($title) . '*

Send You The Bill..

Click On The Link To Open Bill 

' . $url . '

This Bill Is *System generated.*');
  $op = '<ul class="share-social-icon">
    <li>
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '" class="facebook">
            <i class="fa fa-facebook"></i>
        </a>
    </li>
    <li>
        <a target="_blank" href="http://www.twitter.com/share?text=' . $title . '&amp;url=' . $url . '" class="twitter">
            <i class="fa fa-twitter"></i>
        </a>
    </li>
    <li>
        <a target="_blank" href="http://pinterest.com/pin/create/button/?url=' . $url . '" class="pinterest">
            <i class="fa fa-pinterest"></i>
        </a>
    </li>
    <li>
        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=' . $url . '&amp;title=' . $title . '&amp;summary=&amp;source=" class="linked-in">
            <i class="fa fa-linkedin"></i>
        </a>
    </li>

    <li>
        <a target="_blank" href="https://wa.me/?text=' . $wamsg . '" class="whatsapp">
            <i class="fa fa-whatsapp"></i>
        </a>
    </li>
    
</ul>';
  echo $op;
}

function pagination($ttl_pages, $c_page)
{
  ?>
  <style type="text/css">
    .pag {
      text-align: center;
    }

    .pag li {
      display: inline-block;
      color: white !important;
      font-weight: bold !important;
    }

    .not_active_pag {
      display: inline-block;
      background-color: #2A3042;
      padding: 3px;
      padding-left: 7px;
      padding-right: 7px;
      color: white;
      border: 2px solid white;
      transition-duration: 0.2s;
    }

    .not_active_pag:hover {
      color: white;
      opacity: 0.8;
    }

    .active_pag {
      display: inline-block;
      border: 2px solid #55497C;
      background-color: white !important;
      padding: 3px;
      padding-left: 7px;
      padding-right: 7px;
      color: #55497C !important;
    }

    ::-webkit-scrollbar {
      width: 5px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb {
      background: #06AAE1;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #b30000;
    }
  </style>
  <?php
  if ($ttl_pages > 1) {
    ?>
    <ul class="pag">
      <?php
      $predotdot = "";
      $postdotdot = "";
      for ($i = 1; $i <= $ttl_pages; $i++) {
        if ($ttl_pages > (int) $ttl_pages)
          $ttl_pages = (int) $ttl_pages + 1;

        $near = "NO";

        if ((($c_page - 3) < $i) && ($c_page + 3) > $i)
          $near = "YES";

        if (($near == "YES") || ($i == 1) || ($i == (int) $ttl_pages)) {
          $_GET['page_no'] = $i;
          $link = "?" . http_build_query($_GET, '', '&');
          ?>
          <li>
            <a class="<?= ($i == $c_page) ? 'active_pag' : 'not_active_pag' ?>" href="<?= $link ?>">
              <?= ($i) ?>
            </a>
          </li>
          <?php
        } else {

          if (($i < $c_page) && ($predotdot == "")) {
            $predotdot = "Y";
            ?>
            <li>
              <a class="not_active_pag" href="">
                ...
              </a>
            </li>

            <?php
          }

          if (($i > $c_page) && ($postdotdot == "")) {
            $postdotdot = "Y";
            ?>
            <li>
              <a class="not_active_pag" href="">
                ...
              </a>
            </li>
            <?php
          }

        }
      }
      ?>
    </ul>
    <?php
  }
?>
<?php
}
function pagination_product($ttl_pages, $c_page)
{
  ?>
  <style type="text/css">
    .pag {
      text-align: center;
      display: flex !important;
      flex-direction: row !important;
      justify-content: center !important;
      align-items: center !important;
      flex-wrap: wrap !important;
      list-style: none !important;
      margin: 0 !important;
      padding: 0 !important;
    }

    .pag li {
      display: inline-block !important;
      color: white;
      font-weight: bold;
      margin: 2px !important;
      list-style: none !important;
    }

    .not_active_pag {
      display: inline-block !important;
      background-color:rgb(255, 255, 255) !important;
      padding: 8px 12px !important;
      color: black !important;
      border: 2px solid white !important;
      transition-duration: 0.2s;
      text-decoration: none !important;
      border-radius: 4px !important;
    }

    .not_active_pag:hover {
      color: white;
      opacity: 0.8;
      text-decoration: none !important;
    }

    .active_pag {
      display: inline-block !important;
      border: 2px solid #55497C;
      background-color: white;
      padding: 8px 12px !important;
      color: #55497C;
      text-decoration: none !important;
      border-radius: 4px;
    }

    ::-webkit-scrollbar {
      width: 5px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb {
      background: #06AAE1;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #b30000;
    }
  </style>
  <?php
  if ($ttl_pages > 1) {
    ?>
    <ul class="pag">
      <?php
      $predotdot = "";
      $postdotdot = "";
      for ($i = 1; $i <= $ttl_pages; $i++) {
        if ($ttl_pages > (int) $ttl_pages)
          $ttl_pages = (int) $ttl_pages + 1;

        $near = "NO";

        if ((($c_page - 3) < $i) && ($c_page + 3) > $i)
          $near = "YES";

        if (($near == "YES") || ($i == 1) || ($i == (int) $ttl_pages)) {
          $_GET['page_no'] = $i;
          $link = "?" . http_build_query($_GET, '', '&');
          ?>
          <li>
            <a class="<?= ($i == $c_page) ? 'active_pag' : 'not_active_pag' ?>" href="<?= $link ?>">
              <?= ($i) ?>
            </a>
          </li>
          <?php
        } else {

          if (($i < $c_page) && ($predotdot == "")) {
            $predotdot = "Y";
            ?>
            <li>
              <a class="not_active_pag" href="">
                ...
              </a>
            </li>

            <?php
          }

          if (($i > $c_page) && ($postdotdot == "")) {
            $postdotdot = "Y";
            ?>
            <li>
              <a class="not_active_pag" href="">
                ...
              </a>
            </li>
            <?php
          }

        }
      }
      ?>
    </ul>
    <?php
  }
?>
<?php
}
function print_share_btn($company_det, $dn = "", $dname = "")
{
  ?>

  <style type="text/css">
    .d-none {
      display: none;
    }

    .modal-in {
      position: fixed;
      left: 50%;
      transform: translate(-50%, 0);
      -webkit-animation: fadein 0.5s;
      /* Safari, Chrome and Opera > 12.1 */
      -moz-animation: fadein 0.5s;
      /* Firefox < 16 */
      -ms-animation: fadein 0.5s;
      /* Internet Explorer */
      -o-animation: fadein 0.5s;
      /* Opera < 12.1 */
      animation: fadein 0.5s;
    }

    @keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Firefox < 16 */
    @-moz-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Internet Explorer */
    @-ms-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Opera < 12.1 */
    @-o-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .share-social-icon {
      text-align: center;
      margin-right: 40px;
    }

    .share-social-icon li {
      display: inline-block;
    }

    .share-social-icon li a {
      display: inline-block;
      color: white;
      width: 25px;
      padding: 10px;
      line-height: 25px;
      text-align: center;
      transition-duration: 0.3s;
      font-size: 20px;
      border-radius: 0px;
    }

    .whatsapp {
      border: 1px solid green;
      background-color: green;
      color: white;
    }

    .whatsapp:hover {
      background-color: white;
      color: green;
    }

    .linked-in {
      border: 1px solid #0e76a8;
      background-color: #0e76a8;
      color: white;
    }

    .linked-in:hover {
      background-color: white;
      color: #0e76a8;
    }

    .pinterest {
      border: 1px solid red;
      background-color: red;
      color: white;
    }

    .pinterest:hover {
      background-color: white;
      color: red;
    }

    .twitter {
      border: 1px solid #1DA1F2;
      background-color: #1DA1F2;
      color: white;
    }

    .twitter:hover {
      background-color: white;
      color: #1DA1F2;
    }

    .facebook {
      border: 1px solid #4267B2;
      background-color: #4267B2;
      color: white;
    }

    .facebook:hover {
      background-color: white;
      color: #4267B2;
    }

    .share-social-icon li a:hover {
      border: 1px solid black;
    }

    .gradient-border {
      --borderWidth: 10px;
      background: white;
      position: relative;
    }

    .gradient-border:after {
      content: '';
      position: absolute;
      top: calc(-1 * var(--borderWidth));
      left: calc(-1 * var(--borderWidth));
      height: calc(100% + var(--borderWidth) * 2);
      width: calc(100% + var(--borderWidth) * 2);
      background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
      z-index: -1;
      animation: animatedgradient 3s ease alternate infinite;
      background-size: 300% 300%;
    }


    @keyframes animatedgradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }
  </style>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <center>
    <button onclick="printDiv('section-to-print')">Print <i class="fa fa-print"></i></button>
    <button onclick="divmodal.classList.toggle('d-none')">SHARE BILL<i class="fa fa-share-alt"></i></button>
    <div style="width: 60%;margin-top: 50px;" class="modal-in d-none" id="divmodal">
      <div class="gradient-border" id="box">
        <br>
        <span style=" font-size: 40px;
  background: -webkit-linear-gradient(red,blue);
  -webkit-background-clip: text;
  font-family: tahoma;
  font-weight: bold;
  -webkit-text-fill-color: transparent;
  ">SHARE BILL</span>
        <br>
        <?php
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        print_social_icon($url, $company_det);

        $wamsg = urlencode('*' . trim($company_det) . '*

Send You The Bill..

Click On The Link To Open Bill 

' . $url . '

This Bill Is *System generated.*');

        ?>
        <div style="margin-top: 10px;width: 50%;float: center;">
          <form action="<?= base_url() ?>admin/send_txt_msg/" method="post">
            <input type="text" placeholder="Enter 10 Digit WhatsApp Number" minlength="10" maxlength="10"
              style="width: 100%;height: 30px;font-size: 25px; text-align: center;" id="share_mob" value="<?= $dn ?>"
              name="Phno"><span style="color: red;font-family: tahoma;letter-spacing: 4px;"><?= $dname ?></span><br>
            <button style="margin-top: 10px;" onclick="share_number(share_mob)" type="button">SEND TO ABOVE NUMBER ON
              WHATSAPP</button>
            <br><br>
            <textarea name="Msg" style="width: 500px;margin-left: -50px;" rows="10"><?= urldecode($wamsg) ?></textarea>
            <button style="margin-top: 10px;" type="submit">SEND TO ABOVE NUMBER ON MASSAGE</button>
          </form>
          <br>
          <br>
        </div>
      </div>
    </div>
  </center>
  <script type="text/javascript">
    function share_number(a) {
      var b = a.value;
      if (b.length == 10) {
        var str = "<?= $wamsg ?>";
        window.location.assign("https://wa.me/+91" + b + "/?text=" + str);
      }
      else {
        alert("Enter 10 Digit Mobile Number");
        a.focus();
      }

    }
  </script>
  <script type="text/javascript">
    function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();

      document.body.innerHTML = originalContents;
    }
  </script>
  <?php
}
function admin_name($cid)
{
  if (isset($GLOBALS['CI']->My_model->select_where("admin_tbl", ['admin_tbl_id' => $cid])[0]['admin_name'])) {
    return $GLOBALS['CI']->My_model->select_where("admin_tbl", ['admin_tbl_id' => $cid])[0]['admin_name'];
  }
}
?>
<?php
// function nl2br2($string)
// {
//   $string = str_replace(array('\r\n', '\r', '\n'), "<br />", $string);
//   $string = ltrim($string, "'");
//   $string = rtrim($string, "'");
//   return $string;
// }
// function br2nl2($text)
// {
//   $breaks = array("<br />", "<br>", "<br/>");
//   $text = str_ireplace($breaks, "\r\n", $text);
//   return $text;
// }
function escape_output($string)
{
  $newString = str_replace('\r\n', '<br/>', $string);
  $newString = str_replace('\n\r', '<br/>', $newString);
  $newString = str_replace('\r', '<br/>', $newString);
  $newString = str_replace('\n', '<br/>', $newString);
  $newString = str_replace('\\\\\\', "'", $newString);
  $newString = str_replace('\'', '', $newString);
  return $newString;
}
function escape_output_ta($string)
{
  $string = str_replace("\\r", "\r", str_replace("\\n", "\n", $string));
  $string = ltrim($string, "'");
  $string = rtrim($string, "'");
  return $string;
}

function br2nl($input)
{
  return preg_replace('/<br\s?\/?>/ius', "\n", str_replace("\n", "", str_replace("\r", "", htmlspecialchars_decode($input))));
}
if (!function_exists('check_phonepe_payment_status')) {
  function check_phonepe_payment_status($merchantId, $merchantTransactionId, $saltKey, $saltIndex, $baseUrl)
  {
    $apiPath = "/pg/v1/status/{$merchantId}/{$merchantTransactionId}";
    $xVerify = hash('sha256', $apiPath . $saltKey) . "###" . $saltIndex;
    $url = $baseUrl . $apiPath;

    $headers = [
      "Content-Type: application/json",
      "X-VERIFY: $xVerify"
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
  }
}
function print_qty($qty)
{
  if ($qty == "") {
    echo "<span style='color:blue;'>Available</span>";
  } else if ($qty == 0) {
    echo "<big style='color:red;'>$qty Qty</big>";
  } else {
    echo "$qty Qty";
  }
}

?>