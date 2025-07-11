<?php if (isset($_SESSION['toast_message']) && isset($_SESSION['toast_color'])): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            executeToast("<?php echo addslashes($_SESSION['toast_message']); ?>", "<?php echo addslashes($_SESSION['toast_color']); ?>");
        });
    </script>
    <?php unset($_SESSION['toast_message'], $_SESSION['toast_color']);
endif; ?>

<script>
    function executeExampleTimer(message, type) {
        let timerInterval;
        Swal.fire({
            title: message,
            html: '<b></b>',
            icon: type,
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                    const b = Swal.getHtmlContainer().querySelector('b');
                    if (b) {
                        b.textContent = Swal.getTimerLeft();
                    }
                }, 100);
            },
            willClose: () => {
                clearInterval(timerInterval);
            }
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log("Closed by the timer");
            }
        });
    }

    function executeToast(message, type = "success") {
        Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: toast => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            }
        }).fire({
            icon: type,
            title: message
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
    <div class="offcanvas-header border-bottom justify-content-between">
        <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
        <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <h6>Account Settings</h6>
        <div class="p-2 text-start mt-3">
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch1">
                <label class="form-check-label" for="settings-switch1">Auto updates</label>
            </div><!--end form-switch-->
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                <label class="form-check-label" for="settings-switch2">Location Permission</label>
            </div><!--end form-switch-->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="settings-switch3">
                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
            </div><!--end form-switch-->
        </div><!--end /div-->
        <h6>General Settings</h6>
        <div class="p-2 text-start mt-3">
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch4">
                <label class="form-check-label" for="settings-switch4">Show me Online</label>
            </div><!--end form-switch-->
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
            </div><!--end form-switch-->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="settings-switch6">
                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
            </div><!--end form-switch-->
        </div><!--end /div-->
    </div><!--end offcanvas-body-->
</div>
<!--end Rightbar/offcanvas-->
<!--end Rightbar-->
<!--Start Footer-->
<footer class="footer text-center text-sm-start d-print-none">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <div class="card mb-0 rounded-bottom-0">
                    <div class="card-body py-3">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <p class="text-muted mb-0">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    <a href="https://a2zithub.org" target="_blank"
                                        class="text-primary text-decoration-none fw-semibold">
                                        A2Z IT Hub
                                    </a>
                                    - All Rights Reserved
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end">
                                    <span class="text-muted">
                                        Powered by
                                        <a href="https://a2zithub.org" target="_blank"
                                            class="text-primary text-decoration-none">
                                            <i class="iconoir-code me-1"></i>A2Z IT Hub
                                        </a>
                                    </span>
                                    <span class="text-muted ms-2">
                                        <i class="iconoir-heart text-danger"></i>
                                        Crafted with Excellence
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--end footer-->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- Javascript  -->
<!-- vendor js -->

<script src="<?= base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>

<script src="<?= base_url() ?>assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url() ?>assets/data/stock-prices.js"></script>
<script src="<?= base_url() ?>assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="<?= base_url() ?>assets/libs/jsvectormap/maps/world.js"></script>
<script src="<?= base_url() ?>assets/js/pages/index.init.js"></script>
<script src="<?= base_url() ?>assets/js/app.js"></script>

<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>


<!-- datatable -->
<script src="<?= base_url() ?>assets/datatables/datatables.bundle.js"></script>
<script src="<?= base_url() ?>assets/datatables/datatables.export.js"></script>
<script>
    $(document).ready(function () {
        $('.dt_example').dataTable({
            responsive: true,
            dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                extend: 'colvis',
                text: 'Column Visibility',
                titleAttr: 'Col visibility',
                className: 'btn-outline-default'
            },
            {
                extend: 'csvHtml5',
                text: 'CSV',
                titleAttr: 'Generate CSV',
                className: 'btn-outline-default'
            },
            {
                extend: 'print',
                text: 'Print',
                titleAttr: 'Print Table',
                className: 'btn-outline-default'
            }

            ]
        });
    });


    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>


</body>
<!--end body-->


<!-- Mirrored from mannatthemes.com/rizz/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 14:11:07 GMT -->

</html>