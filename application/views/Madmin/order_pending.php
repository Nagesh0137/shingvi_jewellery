<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
        <h4 class="mb-sm-0 font-size-18">Pending Orders</h4>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="<?= base_url() ?>Madmin/order_pending" method="get">
            <div class="col-sm-12">
              <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                <div class="position-relative">
                  <input type="text" class="form-control" id="searchTableList" value="<?= $this->input->get('q') ?>" placeholder="Search..." name="q">
                  <i class="bx bx-search-alt search-icon"></i>
                </div>
                &nbsp;&nbsp;
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
                </div>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table text-center table-hover table-sm table-bordered ">
              <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Action</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Phone No</th>
                  <th>Order&nbsp;Amount</th>
                  <th>Order Date</th>
                  <th>Total Items</th>
                  <th>Order Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($order) && count($order) > 0) {
                  $i = $start;
                  foreach ($order as $key => $row) {
                ?>
                    <tr>
                      <td><?= ++$i; ?></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#orderProcessModal" data-orderid="<?= $row['order_tbl_id'] ?>">
                          Process Order ✔
                        </button>
                        <a onclick="return confirm('Are You Sure You Want To Reject This Order?')"><button data-bs-toggle="modal" data-bs-target="#orderRejectedModal" data-orderid="<?= $row['order_tbl_id'] ?>" type="button" class="btn btn-sm btn-outline-danger">
                            Reject Order &times;
                          </button></a>
                      </td>
                      <td><?= $row['c_name']; ?></td>
                      <td><?= $row['c_email']; ?></td>
                      <td><?= $row['c_mobile']; ?></td>
                      <td style="font-weight: bold;">&#8377;&nbsp;<?= number_format1($row['sub_total_amount']) ?>/-</td>
                      <td><?= date('d M Y ', $row['order_time']); ?></td>
                      <td><?= $row['ttlProducts'] ?></td>
                      <td><?= date('d M Y h:i a', $row['order_time']) ?></td>
                      <td><a href="<?= base_url(); ?>Madmin/order_info/<?= $row['order_tbl_id']; ?>"><button class="btn btn-primary"><i class="fa fa-print"></i> VIEW</button></a></td>
                    </tr>
                  <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td class="text-center" colspan="20">No Record Found</td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <br>
            <?php
            pagination($ttl_pages, $page_no);
            ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Order Process Modal -->
<div class="modal fade" id="orderProcessModal" tabindex="-1" aria-labelledby="orderProcessModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('Madmin/process_order') ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderProcessModalLabel">Process Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="order_tbl_id" id="orderTblId">
          <div class="mb-3">
            <label for="remarks" class="form-label">Remarks</label>
            <textarea id="ckeditor" name="remarks" id="remarks" rows="4" class="form-control" placeholder="Enter remarks here..."></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal fade" id="orderRejectedModal" tabindex="-1" aria-labelledby="orderRejectedModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('Madmin/reject_order') ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderProcessModalLabel">Reject Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="order_tbl_id" id="orderTblId">
          <div class="mb-3">
            <label for="remarks" class="form-label">Remarks</label>
            <textarea id="ckeditor" name="remarks" id="remarks" rows="4" class="form-control border border-danger" placeholder="Enter remarks here..."></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('orderProcessModal');
    modal.addEventListener('show.bs.modal', function(event) {
      var button = event.relatedTarget;
      var orderId = button.getAttribute('data-orderid');
      var input = modal.querySelector('#orderTblId');
      input.value = orderId;
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('orderRejectedModal');
    modal.addEventListener('show.bs.modal', function(event) {
      var button = event.relatedTarget;
      var orderId = button.getAttribute('data-orderid');
      var input = modal.querySelector('#orderTblId');
      input.value = orderId;
    });
  });
</script>