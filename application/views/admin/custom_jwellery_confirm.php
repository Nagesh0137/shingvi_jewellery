<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Custom Jwellery Confirm List</h4>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm text-center table-hover table-bordered" id="dt_example">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Date</th>
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
                                foreach($custom_jwellery as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=++$i?></td>
                                        <td><?=!empty($row['name']) ? $row['name'] : 'N/A';?></td>
                                        <td><?=!empty($row['phone_number']) ? $row['phone_number'] : 'N/A';?></td>
                                        <td><?=!empty($row['email']) ? $row['email'] : 'N/A';?></td>
                                        <td><?=!empty($row['date_time']) ? date('d M Y', $row['date_time']) : 'N/A';?></td>
                                        <td><?=!empty($row['address']) ? $row['address'] : 'N/A';?></td>
                                        <td><?=!empty($row['budget']) ? $row['budget'] . '&#8377; /-' : 'N/A';?> </td>
                                        <td><?=!empty($row['gold_color']) ? $row['gold_color'] : 'N/A';?></td>
                                        <td><?=!empty($row['diamond_clarity']) ? $row['diamond_clarity'] : 'N/A';?></td>
                                        <td><?=!empty($row['gold_purity']) ? $row['gold_purity'] : 'N/A';?></td>
                                        <td><?=!empty($row['description']) ? $row['description'] : 'N/A';?></td>
                                        <td>
                                            <?php
                                            if (!empty($row['image'])) {
                                                $aa = explode('||', $row['image']);
                                                $iimg = base_url() . 'uploads/' . $aa[0];
                                                echo '<img src="' . $iimg . '" style="height:100px;width:100px;" class="rounded">';
                                            } else {
                                                echo 'N/A';
                                            }
                                            ?>
                                        </td>
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