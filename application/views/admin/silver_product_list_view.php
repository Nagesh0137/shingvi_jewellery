<style type="text/css">
	td{
		font-weight:bold;
	}
</style>
<div class="container-fluid">
	<div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Silver Product View</h4>
            </div>
        </div>
    </div>
	<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered text-center table-sm">
									<thead>
										<tr>
											<th>
												Category
											</th>
											<th>Group</th>
											<th>Billing Type</th>
											<th>Purity</th>
											<th>Product ID</th>
											<th>Product Name</th>
											<th>Product Details</th>
											<th>Product Image</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($product as $value) {

										$filter = $this->My_model->select_where("product_filter", [
											"prod" => $value["prod_gold_id"],
											"status" => "active",
										]);
										$cat_id = $this->My_model->select_where("category", [
											"category_id" => $value["cat_id"],
											"status" => "active",
										])[0];
										$group_id = $this->My_model->select_where("product_group", [
											"product_group_id" => $value["group_id"],
											"status" => "active",
										])[0];
										?>
																
										<tr>
											<td><?= $cat_id["category_name"] ?></td>
											<td><?= $group_id["product_group_name"] ?></td>
											<td><?= $value["billing_type"] ?></td>
											<td><?= $value["purity"] ?> %</td>
											<td><?= $value["product_id"] ?></td>
											<td><?= $value["product_name"] ?></td>
											<td><?= $value["product_details"] ?></td>
											<td>
											<?php
											$aa = explode("||", $value["product_image"]);
											$iimg = base_url() . "uploads/" . $aa[0];
											?>
											<img src="<?= $iimg ?>" style="height:100px;width:100px;object-fit:cover" class="rounded">
											</td>
										</tr>
										<?php
										} ?>
									</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h2 class="font-weight-bold bg-primary text-white rounded px-2 ">Filter List</h2>
					<table class="table table-warning table-striped table-sm table-bordered ">
						<tr>
							<td>Category</td>
							<td>Group</td>
							<td>Filter Title</td>
							<td>Filter Name</td>
						</tr>
						<?php foreach ($filter as $value) {
							$category = $this->My_model->select_where("category", [
								"category_id" => $value["cat"],
								"status" => "active",
							]);
							$product_group = $this->My_model->select_where("product_group", [
								"product_group_id" => $value["group_id"],
								"status" => "active",
							]);
							$filter_title = $this->My_model->select_where("filter_title", [
								"filter_title_id" => $value["filter_title"],
								"status" => "active",
							]);
							$filter_name = $this->My_model->select_where("filter_name", [
								"filter_name_id" => $value["filter_name"],
								"status" => "active",
							]);
							?>
						<tr>
							<td><?= $category[0]["category_name"] ?></td>
							<td><?= $product_group[0]["product_group_name"] ?></td>
							<td><?= $filter_title[0]["filter_title"] ?></td>
							<td><?= $filter_name[0]["filter_name"] ?></td>
						</tr>
					<?php
      				} ?>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
				<?php foreach ($product as $value) {
					$filter = $this->My_model->select_where("product_filter", [
						"prod" => $value["prod_gold_id"],
						"status" => "active",
					]);
					$cat_id = $this->My_model->select_where("category", [
						"category_id" => $value["cat_id"],
						"status" => "active",
					])[0];
					$group_id = $this->My_model->select_where("product_group", [
						"product_group_id" => $value["group_id"],
						"status" => "active",
					])[0];
					?>
					<?php $price = $this->db->query(
								"SELECT silver_amt from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC"
							)
							->result_array()[0]; ?>
					<?php if ($value["billing_type"] == "manual") { ?>
						<div class="col-md-12" id="ratechart">
							<div class="row">
								<table class="table table-sm w-100 table-bordered table-striped p-0">
									<tr>
										<td>
											<b>Todays Rate(10 g)</b>
										</td>
										<td>
											<input type="text" name="silver_rate" id="silver_rate_fetch" class="bg-danger disabled chartinput" value="<?= $price[
												"silver_amt"
											] ?>"  readonly>
											<span class="chartspan">₹</span>
										</td>
									</tr>
									<tr>
										<td>
											<b>Cross Weight:-</b>
										</td>
										<td>
											<b><?= $value["cross_weight"] ?></b>
										</td>
									</tr>
									<tr>
										<td>
											<b>Other Weight:-</b>
										</td>
										<td>
											<b><?= $value["other_weight"] ?></b>
										</td>
									</tr>
									<tr>
										<td>
											<b class="" style="color:black;line-height:25px;vertical-align:middle;">Net Weight:</b>
										</td>
										<td>
											<b><?= $value["net_weight"] ?></b>
										</td>
									</tr>
									<tr>
										<td>
											<b>Metal Amount :-</b>
										</td>
										<td>
											<b><?= ($price["silver_amt"] / 10) * $value["net_weight"] ?>₹</b>
										</td>
									</tr>
									<tr>
										<td>
											<b>Labour Amount</b>
										</td>
										<td>
											<b><?= (float) ($lbr_amt =
													$value["net_weight"] *
													(float) $value["labour_char"]) ?>₹ (<?= $value["labour_char"] .
											" p/g" ?>)</b>
										</td>
									</tr>
									<tr>
										<td>
											<b>Wastage Amount(<?= $value["wastage_per"] ?> %)</b>
										</td>
										<td>
											<b><?php
										$p = ($price["silver_amt"] / 10) * $value["net_weight"];
										echo $mtl = ($p * $value["wastage_per"]) / 100;
										echo "₹";
										?></b>
										</td>
									</tr>
								</table>
							</div>				
							<div class="row">	
								<div class="col-md-12" id="other_data">
									<table class="w-100 table table-sm table-bordered table-striped">
										<thead>
											<tr>
												<th>Other Desc</th>
												<th>Other Amount</th>
											</tr>
										</thead>
										<tbody id="add_tbody">
											<?php
											$amt = 0;
											foreach ($product_gold_other_price_det as $value1) {
												$amt += $value1["other_amt_det"]; ?>
											<tr>
												<td>
													<?= $value1["other_desc_det"] ?>
												</td>
												<td>
													<?= $value1["other_amt_det"] ?>₹
												</td>
											</tr>
											<?php
									}
									?>												
										</tbody>
										<tfoot>
											<tr>
												<td><span class="d-inline-block mt-1" style="color:black;font-weight:bold;">Other Total Amount</span></td>
												<td><?= $amt ?>₹</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="col-md-12">
									<table class="w-100 table table-sm table-bordered table-striped">
									<tr>
										<td>
											<b>GST Amount(<?= $value["gst_per"] ?>%)</b>
										</td>
										<td>
											<?php
												$tott = $p + $amt + $lbr_amt + $mtl;
												echo $gst = ($tott * $value["gst_per"]) / 100;
												echo "₹";
												$nettotal = $tott + $gst;
												?>
										</td>
									</tr>
									<tr>
										<td>
											<b>Total Amount</b>
										</td>
										<td><?php echo $nettotal; ?>₹</td>
									</tr>
								</table>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="col-md-12 mt-3 p-2" id="fixedbilling">
							<div class="row">
							<div class="col-md-12">
								<table class="table table-sm table-striped table-bordered">
									<tr>
										<td>Todays Rate(10g)</td>
										<td class="bg-secondary"><?= $price["silver_amt"] ?>₹</td>
									</tr>
									<tr>
										<td>Amount</td>
										<td><?= $value["fixed_amount"] ?>₹</td>
									</tr>
									<tr>
										<td>GST(<?= $value["fixed_gst_per"] ?>%)</td>
										<td><?= $value["fixed_gst_amt"] ?>₹</td>
									</tr>
									<tr>
										<td>Total Amount: </td>
										<td><?= $value["fixed_total_amt"] ?>₹</td>
									</tr>
								</table>
								</div>					
							</div>
						</div>
						<?php } ?>
					<?php
    				} ?>
				</div>
				</div>
			</div>
		</div>
		

</div>
<br>
<style type="text/css">
	.chartspan{
		position:absolute;right:0px;background-color:grey;display:inline-block;height:25px;line-height:25px;vertical-align:middle;width:25px;text-align:center;border-radius:1px;color:black;
	}
	.chartinput{
		width:100%;text-align:right;background-color:lavender;border:1px solid black;height:25px;padding-right:28px;color:black;
	}
	select:focus,input:focus,textarea:focus{
		border:2px solid red;
	}
</style>
