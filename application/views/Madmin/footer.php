                </div>
                <!-- End Page-content -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 text-dark fw-bold">
                                <script>document.write(new Date().getFullYear())</script> © .
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block text-dark fw-bold">
                                Developed by a2zinfotechs.com
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="rightbar-overlay"></div>
    <style>
            /* General Toast Style */
    .toast {
        font-family: 'Arial', sans-serif; /* Change font */
        border-radius: 8px;              /* Round corners */
        padding: 15px;                   /* Add padding */
        font-size: 14px;                 /* Change font size */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow */
    }

    /* Success Toast Style */
    .toast-success {
        background-color: #4CAF50 !important; /* Green background */
        color: white; /* White text */
        border-left: 5px solid #388E3C; /* Green left border */
    }

    /* Error Toast Style */
    .toast-error {
        background-color: #F44336 !important; /* Red background */
        color: white; /* White text */
        border-left: 5px solid #D32F2F; /* Red left border */
    }

    /* Info Toast Style */
    .toast-info {
        background-color: #2196F3 !important; /* Blue background */
        color: white; /* White text */
        border-left: 5px solid #1976D2; /* Blue left border */
    }

    /* Warning Toast Style */
    .toast-warning {
        background-color: #FF9800 !important; /* Orange background */
        color: white; /* White text */
        border-left: 5px solid #F57C00; /* Orange left border */
    }

    /* Override Toast Position (if necessary) */
    .toast-top-right {
        top: 20px; /* Change the vertical position */
        right: 20px; /* Change the horizontal position */
    }

    /* Override Toast Progress Bar (if necessary) */
    .toast-progress-bar {
        background-color: #FFEB3B !important; /* Yellow progress bar */
    }

    </style>
        <!-- Include Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Include jQuery (Required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true, 
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
<script>
    $(document).ready(function () {
        <?php if ($this->session->flashdata('success')): ?>
            toastr.success("<?= $this->session->flashdata('success'); ?>");
            <?php $this->session->unset_userdata('success'); ?> 
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            toastr.error("<?= $this->session->flashdata('error'); ?>");
            <?php $this->session->unset_userdata('error'); ?> 
        <?php endif; ?>
        <?php if ($this->session->flashdata('info')): ?>
            toastr.info("<?= $this->session->flashdata('info'); ?>");
            <?php $this->session->unset_userdata('info'); ?>
        <?php endif; ?>
        <?php if ($this->session->flashdata('warning')): ?>
            toastr.warning("<?= $this->session->flashdata('warning'); ?>");
            <?php $this->session->unset_userdata('warning'); ?>
        <?php endif; ?>
    });
</script>
    </script>
        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>sj_admin_assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/jszip/jszip.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>sj_admin_assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url() ?>sj_admin_assets/js/pages/datatables.init.js"></script>    

        <script src="<?= base_url() ?>sj_admin_assets/js/app.js"></script>
        

    </body>
</html>
