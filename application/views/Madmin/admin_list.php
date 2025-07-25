<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Admin List</h4>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table text-center table-bordered table-sm" id="dt_example">
				<thead>
					<tr>
						<th>Action</th>
						<th width="1%">SN</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Password</th>
						<th>Added Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=0;
                    if(count($admin_list)>0){
					foreach($admin_list as $row)
					{
					?>
					<tr>
						<td>
							<a href="<?=base_url()?>Madmin/edit_admin/<?=$row['admin_tbl_id']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit "></i></a>
                            <a href="<?=base_url()?>Madmin/delete_admin/<?=$row['admin_tbl_id']?>" onclick="return confirm('Are You Sure..')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            <a href="<?=base_url()?>Madmin/admin_authontication/<?=$row['admin_tbl_id']?>" class="btn btn-info btn-sm"><i class="fa fa-cog"></i></a>
						</td>
						<td><?=++$i?></td>
						<td><?=$row['admin_name']?></td>
						<td><?=$row['admin_email']?></td>
						<td><?=$row['admin_mobile']?></td>
						<td><?=$row['admin_password']?></td>
						<td><?=date('d-M-Y',strtotime($row['entry_date']))?></td>
					</tr>
					<?php
					}
                }else{
                    ?>
                    <tr>
                        <td class="text-center" colspan="20">No Record Found</td>
                    </tr>
                    <?php
                }

					?>
				</tbody>
			</table>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
</div>