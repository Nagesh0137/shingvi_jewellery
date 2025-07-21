<?php
// unset($_SESSION['wishlist']);
if (isset($_SESSION['wishlist']) && count($_SESSION['wishlist']) > 0) {
  $wListArray = $_SESSION['wishlist'];
  $pList = [];
  foreach ($wListArray as $key => $row) {
    $p = $this->My_model->select_where("numbers_tbl", ['status' => 'active', 'numbers_tbl_id' => $row]);
    if (isset($p[0])) {
      $pList[] = $p[0];
    } else {
      echo $row . "<br>";
    }
  }
  ?>
  <div class="alert alert-success text-dark-emphasis fs-sm border-0 rounded-4 mb-0" role="alert">
    Congratulations 🎉 You have added <span class="fw-semibold"
      id="totalWishlist"><?= count($_SESSION['wishlist']) ?></span> to your Wishlist. <span class="fw-semibold"></span>
  </div>
<?php } else {
  ?>
  <div class="alert alert-success text-dark-emphasis fs-sm border-0 rounded-4 mb-0" role="alert">
    Your Wishlist Is <span class="fw-semibold">Empty</span> .<a href="<?= base_url() ?>user/product"> <span
        class="fw-semibold">View Products</span></a>
  </div>
  <?php
} ?>

<!-- Items -->
<?php
if (isset($_SESSION['wishlist']) && count($_SESSION['wishlist']) > 0) {
  ?>

  <!-- Item -->
  <?php
  $totalPrice = 0;
  foreach ($pList as $row) {
    $totalPrice += $row['price'];
    ?>
    <input type="hidden" name="numbers_tbl_id" value="<?= $row['numbers_tbl_id'] ?>">
    <div class="d-flex align-items-center" id="wishListBlock_<?= $row['numbers_tbl_id'] ?>">
      <a class="position-relative flex-shrink-0" href="<?=base_url()?>">
        <span class="badge text-bg-success position-absolute top-0 start-0 z-2 mt-0 ms-0">Saved
          <?= $row['original_price'] - $row['price'] ?></span>
        <img src="https://cdn.pixabay.com/photo/2013/07/12/16/37/sim-151267_1280.png" width="90" alt="Thumbnail">
      </a>
      <div class="w-100 ps-3">
        <h5 class="fs-sm fw-medium lh-base mb-2">
          <a class="hover-effect-underline" href="<?=base_url()?>"><?= $row['mobile_number'] ?></a>
        </h5>
        <div class="h6 pb-1 mb-2">&#8377; <?= number_format($row['price']) ?></div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="">
            <del>&#8377; <?= number_format($row['original_price']) ?></del>
            <span>
              <?= getCategoryName($row['category_tbl_id']) ?>
            </span>
          </div>
          <button type="button"
            onclick="removeWishlist('wishListBlock_<?= $row['numbers_tbl_id'] ?>','<?= $row['numbers_tbl_id'] ?>')"
            class="text-danger btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm"
            aria-label="Remove from cart"></button>
        </div>
      </div>
    </div>
  <?php } ?>
  <script>
    function removeWishlist(blockId, numberId) {
      // 1. Remove block from UI
      document.getElementById(blockId).remove();
      var ttlProduct = document.getElementById('totalWishlist');
      var ttlAmt = document.getElementById('ttlAmt');
      // 2. Send AJAX to server to remove from session
      $.ajax({
        url: '<?= base_url() ?>user/remove_wishlist',
        type: 'POST',
        dataType: 'json',
        data: {
          id: numberId
        },
        success: function (response) {
          if (response.totalWishlist == 0) {
            location.reload();
          }
          ttlProduct.innerHTML = response.totalWishlist;
          ttlAmt.innerHTML = '&#8377; ' + Number(response.ttlAmt).toLocaleString('en-IN');

          console.log('Removed from wishlist:', response);

        },
        error: function (response) {
          console.log(response);
          // Silently handle error - user will see item still in wishlist if removal failed
          // alert('Error removing item from wishlist');
        }
      });
    }
  </script>
  <!-- Footer -->
  <div class="offcanvas-header flex-column align-items-start">
    <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
      <span class="text-light-emphasis">Subtotal:</span>
      <span class="h6 mb-0" id="ttlAmt">&#8377; <?= number_format($totalPrice) ?></span>
    </div>
    <div class="d-flex w-100 gap-3">
      <a class="btn btn-lg btn-secondary w-100 rounded-pill" href="<?= base_url() ?>user/">Shop More</a>
      <button type="submit" class="btn btn-lg btn-primary w-100 rounded-pill" href="#buyNowModal"
        data-bs-toggle="modal">Checkout</button>
    </div>
  </div>



<?php } ?>