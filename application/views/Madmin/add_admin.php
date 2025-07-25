<style type="text/css">
	b{
		color: black;
	}
</style>
	
	<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Add New Admin</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="<?=base_url()?>Madmin/save_admin_details" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Admin Name</label>
                        <input type="text" name="admin_name" placeholder="Enter Admin Name" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Admin Email</label>
                        <input type="text" name="admin_email" required class="form-control" placeholder="Enter Admin Email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Admin Mobile</label>
                        <input type="text" name="admin_mobile" required class="form-control" placeholder="Enter Admin Mobile">
                    </div>
                    <div class="col-md-6 mb-3 d-none">
                        <label class="form-label">Admin City</label>
                        <input type="text" name="admin_city" required class="form-control" value="Ahmednagar">
                    </div>
                    <div class="col-md-6 mb-3 d-none">
                        <label class="form-label">country</label>
                        <input type="text" name="admin_contry" value="India" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Enter Password</label>
                        <input type="text" name="admin_password" required class="form-control" placeholder="Enter Admin Password">
                    </div>
                    <div class="col-md-12 text-center mt-3">
                        <button class="btn btn-dark">Add Admin</button>
                    </div>
                </div>
		</form>
                </div>
            </div>
        </div>
    </div>
		
	</div>
	
