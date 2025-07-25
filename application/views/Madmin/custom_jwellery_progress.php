<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Custom Jwellery Progress List</h4>
            </div>
        </div>
    </div>
	<div class="row">
    <style>
        table{
            white-space: nowrap;
        }
    </style>
		<div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-sm table-striped table-hover table-bordered" id="dt_example">
				<thead>
					<tr>
						<th></th>
						<th>Sr. No.</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Time</th>
						<th>Address</th>
						<th>Amount</th>
						<th>Gold Color</th>
						<th>Diamond Clarity</th>
						<th>Gold Purity</th>
						<th>Description</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=0;
                    if(count($custom_jwellery)>0){

                    
					foreach($custom_jwellery as $row)
					{
						?>
						<tr>
                            <td>
                                <a href="<?=base_url()?>Madmin/custom_jwellery_progress_confirm/<?=$row['custom_jwellery_id']?>"><button class="btn btn-success btn-block btn-sm ">Confirm</button></a>
                                <a href="<?=base_url()?>Madmin/custom_jwellery_progress_cancel/<?=$row['custom_jwellery_id']?>"><button class="btn btn-danger btn-block btn-sm" onclick="return Confirm('Are You Sure');">Cancel</button></a>
                            </td>
                            <td><?=++$i?></td>
                            <td><?=!empty($row['name']) ? $row['name'] : 'N/A';?></td>
                            <td><?=!empty($row['phone_number']) ? $row['phone_number'] : 'N/A';?></td>
                            <td><?=!empty($row['email']) ? $row['email'] : 'N/A';?></td>
                            <td><?=!empty($row['date_time']) ? date('d M Y', $row['date_time']) : 'N/A';?></td>
                            <td><?=!empty($row['address']) ? $row['address'] : 'N/A';?></td>
                            <td><?=!empty($row['budget']) ? $row['budget'] . '/-' : 'N/A';?></td>
                            <td><?=!empty($row['gold_color']) ? $row['gold_color'] : 'N/A';?></td>
                            <td><?=!empty($row['diamond_clarity']) ? $row['diamond_clarity'] : 'N/A';?></td>
                            <td><?=!empty($row['gold_purity']) ? $row['gold_purity'] : 'N/A';?></td>
                            <td><?=!empty($row['description']) ? $row['description'] : 'N/A';?></td>
                            <td>
                                <?php
                                if (!empty($row['image'])) {
                                    $aa = explode('||', $row['image']);
                                    $iimg = base_url() . 'uploads/' . $aa[0];
                                    echo '<img src="' . $iimg . '" class="rounded" style="height:100px;width:100px;">';
                                } else {
                                    echo 'N/A';
                                }
                                ?>
                            </td>
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