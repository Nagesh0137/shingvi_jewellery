<div class="container-fluid">
<div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Silver + Diamond Product List</h4>
            </div>
        </div>
    </div>
	<div class="row mt-0 bg-white p-2">
        
		<div class="col-md-12">
			<form action="<?=base_url();?>Madmin/search_silver_diamond_product_list" method="get">
				<div class="row p-1  ml-1 mr-1">
				
					<div class="col-md-4 mt-2">
					<select name="cat_id" onchange="group_name(this)" id="cat_id"  class="form-select" required>
						<option value="">Category</option>
						<?php foreach($category as $value) {
						if(strtolower($value['category_name']=='diamond')){ ?>
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
		<div class="col-md-12">
			<table class="table table-striped mt-3 text-center table-sm table-bordered cat_table mb-5">
                <br>
                <thead>
					<tr>
						<th width="90px">Action</th>
						<th width="1%">SN</th>
						<th width="1%">Label</th>
						<th>Group</th>
						<th>Product</th>
						<th>Product Id</th>
						<th>Current&nbsp;Price</th>
						<th>Details</th>
						<th>Image</th>
					</tr>
                </thead>
                <tbody>
					<?php
					   $i=0;
						foreach($products as $row2)
						{
				         $group_cat=$this->My_model->select_where("category",['category_id'=>$row2['cat_id']]);
				         $group_id1=$this->My_model->select_where("product_group",['product_group_id'=>$row2['group_id']]);
				         $i++;
						 if(trim(strtolower($group_cat[0]['category_name']))=="diamond"){
						 ?>
								<tr style="<?=($row2['label']=='Out Of Stock') ? 'background: red;color: white;':''?> ">
									<td style="font-size: 16px;">
										<a href="<?=base_url();?>Madmin/silver_diamond_product_list_View/<?=$row2['prod_gold_id'];?>" class="btn btn-success pl-1 pr-1 pt-0 pb-0 mb-1"><i class="fa fa-print"></i></a>

										<a href="<?=base_url();?>Madmin/silver_diamond_product_list_update/<?=$row2['prod_gold_id'];?>" class="btn btn-primary pl-1 pr-1 pt-0 pb-0 mb-1"><i class="fa fa-edit"></i></a>
										

										<a href="<?=base_url();?>Madmin/silver_diamond_product_list_delete/<?=$row2['prod_gold_id'];?>" onclick="return confirm('Are You Sure...')" class="btn btn-danger pl-1 pr-1 pt-0 pb-0 mb-1"><i class="fa fa-trash"></i></a> 
									</td>
									<td><?=$i;?></td>
									<td style="width: 100px;">
										<?php
										if($row2['label']=="")
										{
										?>
										<button onclick="add_product_label(<?=$row2['prod_gold_id']?>)" class="btn btn-primary btn-sm pl-0 pr-0 pt-0 pb-0">&nbsp;&nbsp;ADD&nbsp;LABEL&nbsp;&nbsp;</button>
										<?php
										}
										else
										{
											?>
										<button onclick="add_product_label2('',<?=$row2['prod_gold_id']?>)" class="btn btn-danger btn-sm pl-0 pr-0 pt-0 pb-0">
											&nbsp;<i class="fa fa-close">&nbsp;</i><?=str_replace(" ","&nbsp;",$row2['label'])?>&nbsp;</button>
											<?php
										}
										?>
									</td>
									<td>
										<?=$group_id1[0]['product_group_name'];?>
									</td>
									<td>
										<?=$row2['product_name']?>
									</td>
									<td>
										<?=$row2['product_id']?>
									</td>
									<td>
									<?=number_format($madmin->silverdiamondprice($row2['prod_gold_id']));?>
									</td>
									<td style="text-overflow: ellipsis;overflow: hidden;">
										<?=$row2['product_details']?>
									</td>
									<td>
										<?php
										$aa=explode('||',$row2['product_image']);
										?>
										<a href="<?=base_url();?>uploads/<?=$aa[0];?>" target="blank">Show Image</a>
										<!-- <img src="<?=base_url();?>uploads/<?=$aa[0];?>" style="height:100px;width:100px;"> -->
									</td>
									
								</tr>
							<?php
					     	}
						}
						if($i==0)
						{
							?>
							<tr>
								<td colspan="20" class="bg-danger text-center">No Record Found</td>
							</tr>
							<?php
						}
					?>
                </tbody>
				</table>
		</div>
	</div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
    	<div class="col-md-12 text-center">
    		<h2>Choose Label</h2>
    	</div>
    	<div class="col-md-12 text-center">
    		<button class="mr-2 m-2 btn btn-danger" onclick="add_product_label2('New')">NEW</button>
    		<button class="mr-2 m-2 btn btn-primary" onclick="add_product_label2('Top Selling')">TOP SELLING</button>
    		<button class="mr-2 m-2 btn btn-primary" onclick="add_product_label2('Trending')">TRENDING</button>
    		<button class="mr-2 m-2 btn btn-warning" onclick="add_product_label2('Sale')">SALE</button>
    		<button class="mr-2 m-2 btn btn-success" onclick="add_product_label2('Special')">SPECIAL</button>
    		<button class="btn btn-danger" onclick="add_product_label2('Out Of Stock')">OUT OF STOCK</button>
    		<br>
    		<button class="mr-2 m-2 btn btn-secondary" onclick="add_product_label2('Gift')"> <i class="fa fa-gift" style="font-size: 25px;"></i><br> Gift</button>
    		<button class="mr-2 m-2 btn btn-info" onclick="add_product_label2('Coin')"> <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="coins" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-coins fa-w-16 fa-2x"><path fill="currentColor" d="M0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zM320 128c106 0 192-28.7 192-64S426 0 320 0 128 28.7 128 64s86 64 192 64zM0 300.4V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4zm416 11c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5v63.6zM192 160C86 160 0 195.8 0 240s86 80 192 80 192-35.8 192-80-86-80-192-80zm219.3 56.3c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2z" class=""></path></svg><br> Coin</button>
    	</div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function group_name(cat)
	{
		$.ajax({
            url : "<?=base_url()?>madmin/group_name_fetch",
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
	function add_product_label(id)
	{
		pl_id=id;
		$('.bd-example-modal-lg').modal('toggle');
	}
	function add_product_label2(label,id="")
	{

		if(id=="")
		{
			$('.bd-example-modal-lg').modal('toggle');
			id=pl_id;
		}

		$.ajax({
            url : "<?=base_url()?>madmin/add_product_label",
            type : 'POST',
            data : {prod_gold_id:id,label:label},
            dataType : 'json'
            }).done(function(res){
            	if(res.status=='success')
            	{
            		location.reload();
            	}
            	else
            	{
            		alert('Failed');
            	}
          });
	}
</script>
