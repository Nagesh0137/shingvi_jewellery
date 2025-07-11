<!-- Page content -->
<main class="content-wrapper">
  <div class="container py-5 mb-2 mb-sm-3 mb-md-4 mb-lg-5 mt-lg-2 mt-xl-4">

    <!-- Page title -->
    <div class="text-center mb-5">
      <h1 class="text-center">Products</h1>
      <em class="text-center pb-2 pb-sm-3">Browse our collection of premium mobile numbers, special digits, and VIP
        services.</em>
    </div>


    <!-- Filters -->
    <div class="bg-body mb-3 mb-sm-4" style="margin-top: -4.5rem">
      <div class="row align-items-center pt-5">
        <div class="col-5 col-sm-8 col-md-9 d-flex gap-2 pb-3 mt-4">
          <div class="d-none d-sm-block w-100 me-1">
            <select class="form-select rounded-pill" data-select="{
                  &quot;classNames&quot;: {
                    &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;filter-select&quot;, &quot;rounded-pill&quot;]
                  }
                }" aria-label="Sorting">
              <option value="">Sort by</option>
              <option value="popular" selected="">Most popular</option>
              <option value="match">Best match</option>
              <option value="new">New arrivals</option>
              <option value="price-asc">Price ascending</option>
              <option value="price-desc">Price descending</option>
            </select>
          </div>
          <div class="dropdown w-100 d-none d-md-block me-1">
            <button type="button"
              class="btn btn-outline-secondary dropdown-toggle filter-select justify-content-between w-100 text-body fw-normal rounded-pill px-3"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Category
              <span class="ms-1 me-auto" id="categoryCount"></span></button>
            <div class="dropdown-menu w-100 p-3">
              <div class="d-flex flex-column gap-2">
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="living-room" checked=""
                    onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                  <label for="living-room" class="form-check-label d-flex align-items-end">
                    Living room
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">657</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="bedroom" checked=""
                    onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                  <label for="bedroom" class="form-check-label d-flex align-items-end">
                    Bedroom
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">528</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="kitchen"
                    onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                  <label for="kitchen" class="form-check-label d-flex align-items-end">
                    Kitchen
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">342</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="office"
                    onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                  <label for="office" class="form-check-label d-flex align-items-end">
                    Office
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">283</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="lighting" checked=""
                    onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                  <label for="lighting" class="form-check-label d-flex align-items-end">
                    Lighting
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">395</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="decoration"
                    onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                  <label for="decoration" class="form-check-labe d-flex align-items-endl">
                    Decoration
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">204</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="accessories" checked=""
                    onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                  <label for="accessories" class="form-check-label d-flex align-items-end">
                    Accessories
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">190</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown w-100 d-none d-lg-block me-1">
            <button type="button"
              class="btn btn-outline-secondary dropdown-toggle filter-select justify-content-between w-100 text-body fw-normal rounded-pill px-3"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Type
              <span class="ms-1 me-auto" id="typeCount"></span></button>
            <div class="dropdown-menu w-100 p-3">
              <div class="d-flex flex-column gap-2">
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="armchair"
                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                  <label for="armchair" class="form-check-label d-flex align-items-end">
                    Armchair
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">324</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="sofa"
                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                  <label for="sofa" class="form-check-label d-flex align-items-end">
                    Sofa
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">275</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="ottoman"
                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                  <label for="ottoman" class="form-check-label d-flex align-items-end">
                    Ottoman
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">117</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="bench"
                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                  <label for="bench" class="form-check-label d-flex align-items-end">
                    Bench
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">86</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="bed"
                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                  <label for="bed" class="form-check-label d-flex align-items-end">
                    Bed frame
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">263</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="lamp"
                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                  <label for="lamp" class="form-check-label d-flex align-items-end">
                    Lamp
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">415</span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <input type="checkbox" class="form-check-input fs-base" id="stool"
                    onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                  <label for="stool" class="form-check-labe d-flex align-items-end">
                    Stool
                    <span class="fs-xs text-body-secondary ps-2 ms-auto">104</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Selected filters -->
    <div class="d-flex flex-wrap align-items-center gap-2 text-nowrap mt-n3 mb-3 mb-lg-4">
      <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
        <i class="ci-close fs-sm me-1 ms-n1"></i>
        Living room
      </button>
      <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
        <i class="ci-close fs-sm me-1 ms-n1"></i>
        Bedroom
      </button>
      <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
        <i class="ci-close fs-sm me-1 ms-n1"></i>
        Lighting
      </button>
      <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
        <i class="ci-close fs-sm me-1 ms-n1"></i>
        Accessories
      </button>
      <div class="nav ps-1">
        <a class="nav-link fs-xs text-decoration-underline px-0" href="#!">Clear all</a>
      </div>
    </div>



    <!-- Products grid -->
    <div class="row row-cols-12 row-cols-sm-12 row-cols-md-4 row-cols-lg-3 row-cols-xl-4 g-4">

      <!-- Item -->
      <?php
      foreach ($product as $row) {

        ?>
        <div class="col-6 m-0 mt-2 pt-0" style="padding:3px;">
          <div class="card shadow-sm p-0 m-0 border-1 text-dark position-relative overflow-hidden">
            <!-- VIP Badge -->

            <div class="card-body" style="padding: 12px;">
              <div class="d-flex w-100 justify-content-between align-items-center mb-1" style="vertical-align: middle;">
                <span class="badge bg-dark-subtle text-dark" style="font-size: 12px;vertical-align: middle;">Save
                  ₹<?= $row['original_price'] - $row['price'] ?></span>
                <span class="text-muted small">
                  <i onclick="addToWishlist('<?= $row['numbers_tbl_id'] ?>')" class="ci-heart fs-5 text-danger"
                    style="cursor: pointer;"></i>
                </span>
              </div>
              <!-- <div class="text-center mb-2">
                    <i class="ci-phone text-primary fs-2 mb-2"></i>
                  </div> -->
              <h6 class="card-title text-center m-0 fw-bold text-dark" style="font-size: 17px;">
                <?= $row['mobile_number'] ?>
              </h6>
              <div class="text-center p-0 m-0 mt-2">
                <span style="font-size:12px;"
                  class="mb-1 text-decoration-line-through text-muted">₹<?= $row['original_price'] ?></span>
                <br>
                <span style="font-size:16px;" class="mb-1 fw-bold text-success">₹<?= $row['price'] ?></span>
              </div>
              <div class=" mt-1">
                <a class="nav-link w-100 float-end animate-underline fs-base px-0" href="#newAddressModal"
                  data-bs-toggle="modal">
                  <button onclick="buyNow('<?= $row['numbers_tbl_id'] ?>')"
                    class="btn btn-warning btn-sm float-end w-100 flex-fill fw-bold" style="font-size: 11px;">
                    <i class="ci-shopping-cart me-1"></i> Buy Now
                  </button>
                </a>
                <!-- onclick="buyNow('<?= $row['numbers_tbl_id'] ?>')" -->
                <!-- <button class="btn btn-outline-primary btn-sm" style="font-size: 11px;">
                      <i class="ci-eye"></i>
                    </button> -->
              </div>
            </div>
          </div>
        </div>

      <?php } ?>
      <div class="modal fade" id="newAddressModal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="newAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newAddressModalLabel"><img
                  src="https://cdn.pixabay.com/photo/2013/07/12/16/37/sim-151267_1280.png" width="30" alt="Thumbnail">
                Buy Now</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3 g-lg-4 needs-validation" action="<?= base_url() ?>user/save_order" method="POST"
                novalidate="">
                <input type="hidden" name="numbers_tbl_id" id="numbers_tbl_id">
                <div class="col-lg-4">
                  <div class="position-relative">
                    <label for="add-cname" class="form-label">Customer Name</label>
                    <input type="text" placeholder="Enter Full Name" name="customer_name" class="form-control"
                      id="add-cname" required="">
                    <div class="invalid-feedback">Please enter your Full Name</div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="position-relative">
                    <label for="add-cmob" class="form-label">Customer Mobile No.</label>
                    <input type="text" pattern="[7-9]{1}[0-9]{9}" placeholder="Enter Mobile No, Starting With 7,8 Or 9"
                      name="customer_mobile" class="form-control" id="add-cmob" required="">
                    <div class="invalid-feedback">Please enter 10 Digit Mobile No!</div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="position-relative">
                    <label for="add-cemail" class="form-label">Customer Email</label>
                    <input type="email" placeholder="Enter Email" name="customer_email" class="form-control"
                      id="add-cemail" required="">
                    <div class="invalid-feedback">Please enter your Email!</div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="position-relative">
                    <label for="add-pincode" class="form-label">Pincode</label>
                    <input type="number" placeholder="Enter Pincode" name="customer_pincode" class="form-control"
                      id="add-pincode" required="">
                    <div class="invalid-feedback">Please enter your Pincode!</div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="position-relative">
                    <label for="add-address" class="form-label">Address</label>
                    <textarea class="form-control" placeholder="Enter Address" name="address" id="add-address"
                      required=""></textarea>
                    <div class="invalid-feedback">Please enter your address!</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex float-end gap-3 pt-2 pt-sm-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ORDER NOW</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script>
        function addToWishlist(id) {
          $.ajax({
            url: '<?= base_url("user/add_to_wishlist") ?>',
            type: 'POST',
            data: { id: id },
            success: function (response) {
              console.log(response);
              // You can show toast or update icon here
            }
          });
        }

        function buyNow(id) {
          var buyId = id;
          document.getElementById('numbers_tbl_id').value = id;
          // $.ajax({
          //   url: '<?= base_url("user/add_to_buy") ?>',
          //   type: 'POST',
          //   data: { id: id },
          //   success: function (response) {
          //     console.log(response);
          //     // Redirect or show message if needed
          //   }
          // });
        }
      </script>

    </div>


    <!-- Pagination -->
    <div class="text-center pt-5 mt-md-2 mt-lg-3 mt-xl-4 mb-xxl-3 mx-auto" style="max-width: 306px">
      <p class="fs-sm">Showing 16 from 64</p>
      <div class="progress mb-3" role="progressbar" aria-label="Items shown" aria-valuenow="25" aria-valuemin="0"
        aria-valuemax="100" style="height: 4px">
        <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 25%"></div>
        <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 25%"></div>
      </div>
      <div class="nav justify-content-center">
        <a class="nav-link animate-underline fs-base pt-2 pb-0 px-0" href="#!">
          <span class="animate-target my-1 me-2">Show more</span>
          <i class="ci-chevron-down fs-lg"></i>
        </a>
      </div>
    </div>
  </div>
</main>