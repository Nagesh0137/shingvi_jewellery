<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Silver Product List</h4>
            </div>
        </div>
    </div>
	<div class="row mt-0">
		
		<div class="col-md-12">
			<div class="card">
				<div class="col-md-12 p-2">
				<form action="<?=base_url();?>Madmin/search_silver_product_list" method="get">
					<div class="row">
						<div class="col-md-4 mt-2">
						<select name="cat_id" onchange="group_name(this)" id="cat_id"  class="form-select" required>
							<option value="">Category</option>
							<?php foreach($category as $value){
							if($value['category_name']=='Silver'){
							?>
							<option value="<?=$value['category_id'];?>"><?=$value['category_name'];?></option>
							<?php } } ?>
						</select>
						</div>
						<div class="col-md-4 mt-2">
						<select name="group_id" class="form-select" id="group_list" required>
						<option value="all">All</option>
						</select>
						</div>
						<div class="col-md-1 text-center pt-2">
							<button class="btn btn-primary">Search</button>
						</div>
					</div>
				</form>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 d-flex justify-content-end align-items-center">
							<button id="deleteAllButton" class="btn btn-danger btn-sm">Delete Selected Products</button>
						</div>
					</div>
					<div class="table-responsive">
					<table class="table text-center mt-3 table-sm table-bordered cat_table mb-5 table-hover">
						<thead>
							<tr>
								<th>
									<input type="checkbox" id="selectAll" class="form-check-input"> Select All
								</th>
								<th width="90px">Action</th>
								<th width="1%">SN</th>
								<th width="1%">Add Label</th>
								<th width="1%">Special Day</th>
								<th width="1%">Label</th>
								<th>Group</th>
								<th>Product</th>
								<th>Product Id</th>
								<th>Current Price</th>
								<th>Quantity</th>
								<th>Image</th>
								<th class="d-none">Image</th>
							</tr>
						</thead>
						<tbody>
						<style>
							.out-of-stock {
								background: red !important;
								color: white !important;
							}
						</style>
							<?php
							$i=0;
								foreach($products as $row2)
								{
								$group_cat=$this->My_model->select_where("category",['category_id'=>$row2['cat_id']]);
								$group_id1=$this->My_model->select_where("product_group",['product_group_id'=>$row2['group_id']]);
								$i++;
								if($group_cat[0]['category_name']=="Silver"){
								?>
										<tr>
											<td class="text-center">
											<input type="checkbox" class="productCheckbox" value="<?= $row2['prod_gold_id']; ?>" />
										</td>
											<td style="font-size: 16px;" class="d-flex aling-items-center justify-content-around <?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												<a href="<?=base_url();?>Madmin/silver_product_list_View/<?=$row2['prod_gold_id'];?>" class="btn btn-success p-0 m-0" style="height:3vh;width:3vh"><i class="fa fa-print"></i></a>
												&nbsp;
												<a href="<?=base_url();?>Madmin/silver_product_list_update/<?=$row2['prod_gold_id'];?>" class="btn btn-primary p-0 m-0" style="height:3vh;width:3vh"><i class="fa fa-edit"></i></a>
												&nbsp;
												<a href="<?=base_url();?>Madmin/silver_product_list_delete/<?=$row2['prod_gold_id'];?>" onclick="return confirm('Are You Sure...')" class="btn btn-danger p-0 m-0" style="height:3vh;width:3vh"><i class="fa fa-trash"></i></a> 

											</td>
											<td class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>"><?=$i;?></td>
											<td class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												<button onclick="add_product_label(<?=$row2['prod_gold_id']?>)" class="btn btn-primary btn-sm pl-0 pr-0 pt-0 pb-0">&nbsp;&nbsp;ADD&nbsp;LABEL&nbsp;&nbsp;</button>
											</td>
											<td style="width:15% !important" class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
											<?php
												if ($row2['special_days_id'] != null) {
													$special_id = explode("||", $row2['special_days_id']);
													if (count($special_id) > 0 && !empty($special_id)) {
														$button_colors = ['btn-primary', 'btn-secondary', 'btn-success', 'btn-danger', 'btn-warning', 'btn-info', 'btn-light', 'btn-dark'];
														foreach ($special_id as $key3 => $row3) {
															$color_class = $button_colors[$key3 % count($button_colors)];
															?>
															<button class="btn <?= $color_class ?> btn-sm pl-0 pr-0 pt-0 pb-0 my-1 text-capitalize" 
																	onclick="remove_special_day_offer(<?= $row2['prod_gold_id'] ?>, <?= $row3 ?>)">
																<i class="ri-close-line fw-bold">
																	<?= getspecialdays($row3); ?> 
																</i>
															</button>
															<?php
														}
													}
												}else{
													?>
													N/A
													<?php
												}
												?>
											</td>
											<td style="width:15% !important" class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
											<?php
												if($row2['label']=="")
												{
												?>
												N/A
												<?php
												}
												else
												{
													?>
													<?php
													$label=explode("||",$row2['label']);
													foreach($label as $key4=>$row4){
														?>
														<button onclick="remove_product_labels(<?=$row2['prod_gold_id']?>,`<?= $row4 ?>`)" class="btn btn-danger btn-sm pl-0 pr-0 pt-0 pb-0 my-1">
														&nbsp;<i class="ri-close-line"></i>&nbsp;</i>
														<?= $row4 ?>
														</button>
														<?php
													}
													?>
												
													<?php
												}
												?>
											</td>
											
											<td class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												<?=$group_id1[0]['product_group_name'];?>
											</td>
											<td class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												<?=$row2['product_name']?>
											</td>
											<td class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												<?=$row2['product_id']?>
											</td>
											<td class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												&#8377;&nbsp;<?=number_format($madmin->silverprice($row2['prod_gold_id']));?>&nbsp;/-
											</td>
											<td class="<?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												<?=print_qty($row2['product_qty'])?> 
											</td>
											<td class="text-center <?= (stripos(trim($row2['label']), 'Out Of Stock') !== false) ? 'out-of-stock' : '' ?>">
												<?php
												$aa=explode('||',$row2['product_image']);
												$iimg=base_url().'uploads/'.$aa[0];
												?>
												<img src="<?=$iimg;?>" style="height:100px;width:100px;">
											</td>
											
										</tr>
									<?php
									}
								}
								if($i==0)
								{
									?>
									<tr>
										<td colspan="9" class="bg-danger">No Record Found</td>
									</tr>
									<?php
								}
							?>
						</tbody>
					</table>
					<br>
					<?php
					pagination($total_pages,$page_no);
					?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script>
						
	document.getElementById('selectAll').addEventListener('click', function () {
		const checkboxes = document.querySelectorAll('.productCheckbox');
		checkboxes.forEach(checkbox => checkbox.checked = this.checked);
	});

	document.getElementById('deleteAllButton').addEventListener('click', function () {
		const selectedProducts = [];
		const checkboxes = document.querySelectorAll('.productCheckbox:checked');
		checkboxes.forEach(checkbox => selectedProducts.push(checkbox.value));

		if (selectedProducts.length > 0 && confirm('Are you sure you want to delete the selected products?')) {
			// Encode the product IDs to prevent disallowed characters in the URL
			const encodedProducts = encodeURIComponent(selectedProducts.join(','));
			window.location.href = '<?= base_url(); ?>Madmin/silver_product_list_delete_all/' + encodedProducts;
		} else {
			alert('Please select products to delete.');
		}
	});

</script>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
    	<div class="col-md-12 text-center">
    		<h2>Choose Label</h2>
    	</div>
		<div class="row d-flex justify-content-around align-items-center">
                <div class="col-md-6 d-flex justify-content-around align-items-center flex-wrap">
                <?php
                if (!empty($special_days) && count($special_days) > 0) {
                    $colors = ['btn-primary', 'btn-secondary', 'btn-success', 'btn-danger', 'btn-warning', 'btn-info', 'btn-dark'];
                    foreach ($special_days as $key => $row) {
                        $colorClass = $colors[$key % count($colors)];
                        ?>
                        <button onclick="add_special_days(<?=$row['special_days_id']?>)" 
                        class="text-capitalize btn <?= $colorClass ?> btn-sm my-1">
                            <?= $row['special_day'] ?>&nbsp;&nbsp;&nbsp;
                        </button>
                        <?php
                    }
                }
                ?>

                </div>
                <div class="col-md-6">
                    <h6>Add Other Label</h6>
                    <button class="mr-2 m-2 btn btn-danger lbl_btn" id="New" onclick="add_product_label2('New')">NEW</button>
                    <button class="mr-2 m-2 btn btn-danger lbl_btn" id="New" onclick="add_product_label2('wedding')">Wedding</button>
                    <button class="mr-2 m-2 btn btn-primary lbl_btn" id="Top-Selling" onclick="add_product_label2('Top Selling')">TOP SELLING</button>
                    <button class="mr-2 m-2 btn btn-primary lbl_btn" id="Trending" onclick="add_product_label2('Trending')">TRENDING</button>
                    <button class="mr-2 m-2 btn btn-warning lbl_btn" id="Sale" onclick="add_product_label2('Sale')">SALE</button>
                    <button class="mr-2 m-2 btn btn-success lbl_btn" id="Special" onclick="add_product_label2('Special')">SPECIAL</button>
					<button class="btn btn-primary lbl_btn" id="Execlusive-Collection" onclick="add_product_label2('Execlusive Collection')">Execlusive Collection</button>
                    <button class="btn btn-danger lbl_btn" id="Out-Of-Stock" onclick="add_product_label2('Out Of Stock')">OUT OF STOCK</button>
                    <br>
                    <button class="mr-2 m-2 btn btn-secondary lbl_btn" id="Gift" onclick="add_product_label2('Gift')"> <i class="fa fa-gift" style="font-size: 25px;"></i><br> Gift</button>
					

                    <button class="mr-2 m-2 btn btn-info lbl_btn" id="Coin" onclick="add_product_label2('Coin')"> <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="coins" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-coins fa-w-16 fa-2x"><path fill="currentColor" d="M0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zM320 128c106 0 192-28.7 192-64S426 0 320 0 128 28.7 128 64s86 64 192 64zM0 300.4V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4zm416 11c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5v63.6zM192 160C86 160 0 195.8 0 240s86 80 192 80 192-35.8 192-80-86-80-192-80zm219.3 56.3c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2z" class=""></path></svg><br> Coin</button>
                </div>
            </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	function group_name(cat)
	{
		$.ajax({
            url : "<?=base_url()?>Madmin/group_name_fetch",
            type : 'POST',
            data : {cat_id:cat.value},
            dataType : 'json'
            }).done(function(res){
            	var opt="<option value='all'>All</option>";
            	$.each(res, function(key,val){
            		opt+="<option value='"+val.product_group_id+"'>"+val.product_group_name+"</option>";
            	});
            	$("#group_list").html(opt);
            });
	}
</script>
<script type="text/javascript">
		function show_cat(cat_id,elmt)
	{
		var cat=document.getElementsByClassName('cat_table');
		for(var i=0;i<cat.length;i++)
		{
			cat[i].style.display = 'none';
		}
		document.getElementById('cat_table_'+cat_id).style.display="";

		var cat_btns=document.getElementsByClassName('cat_btn');
		for(var j=0;j<cat_btns.length;j++)
		{
			cat_btns[j].classList.remove("btn-primary");
			cat_btns[j].classList.add("btn-dark");
		}
		elmt.classList.remove("btn-dark");
		elmt.classList.add("btn-primary");
	}
	function show_all_cat(elmt)
	{
		var cat=document.getElementsByClassName('cat_table');
		for(var i=0;i<cat.length;i++)
		{
			cat[i].style.display = '';
		}

		var cat_btns=document.getElementsByClassName('cat_btn');
		for(var j=0;j<cat_btns.length;j++)
		{
			cat_btns[j].classList.remove("btn-primary");
			cat_btns[j].classList.add("btn-dark");
		}
		elmt.classList.remove("btn-dark");
		elmt.classList.add("btn-primary");
	}
		var pl_id=0;
	function add_product_label(id)
	{
		pl_id=id;
		$('.bd-example-modal-lg').modal('toggle');
	}
	function add_product_label2(label, id = "") {
		if (id == "") {
			$('.bd-example-modal-lg').modal('toggle');
			id = pl_id;  // Make sure pl_id is defined globally
		}

		$.ajax({
			url: `<?= base_url() ?>Madmin/add_product_label`,
			type: 'POST',
			data: {
				'prod_gold_id': id,
				'label': label
			},
			dataType: 'json',  // Ensure server returns JSON response
			success: function(res) {
				console.log(res);
				if (res.status === 'success') {
					alert(res.message);  // Show success message
					location.reload();   // Reload the page
				} else if (res.status === 'info') {
					alert(res.message);
				}
				else if (res.status === 'fail') {
					alert(res.message || 'Failed to update product label.');
				}
			},
			error: function(xhr, status, error) {
				console.error("AJAX Error: ", error);
				alert('Something went wrong. Please try again.');
			}
		});
	}

	function add_special_days(special_day_id,id=""){
        if(id=="")
		{
			$('.bd-example-modal-lg').modal('toggle');
			id=pl_id;
		}
        $.ajax({
            url:`<?= base_url() ?>Madmin/add_special_day_offer`,
            dataType:'json',
            type:'POST',
            data:{
                "special_days_id":special_day_id,
                "prod_gold_id":id
            },
            success:function(res){
                if(res.status==='success'){
                    alert('Special day added successfully!');
                    location.reload();
                }else{
                    alert('Something went wrong !');
                    location.reload();
                }
            },
            error:function(xhr,status,error){
                console.log(error);
            }
        })
        console.log(id + " " + special_day_id);
    }
    function remove_special_day_offer(prod_gold_id, special_day_id) {
        $.ajax({
            url: '<?= base_url() ?>Madmin/remove_special_product',
            type: 'POST',
            data: {
                prod_gold_id: prod_gold_id,
                special_days_id: special_day_id
            },
            dataType: 'json',
            success: function(res) {
                console.log(res);
                if (res.status === 'success') {
                    alert('Special day removed successfully!');
                    location.reload(); 
                } else {
                    alert(res.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(`Error: ${error}`);
                console.log(xhr.responseText); 
            }
        });
    }
	function remove_product_labels(prod_gold_id,label){
		$.ajax({
			url:`<?= base_url() ?>Madmin/remove_product_labels`,
			data:{
				'prod_gold_id':prod_gold_id,
				'label':label
			},
			dataType:'json',
			type:'POST',
			success:function(res){
				if(res.status == 'success'){
					alert('Product Label removed successfully!');
                    location.reload(); 
				}else{
					alert(res.message);
                   
				}
			},
			error:function(xhr,status,error){
				console.log(error);
			}
		})
		console.log(prod_gold_id + " " + label);
	}

</script>
