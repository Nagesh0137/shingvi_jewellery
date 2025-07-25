<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Add Product Filter</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <form action="<?=base_url()?>Madmin/product_filter_add_search" method="get" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label class="form-label">Category</label>
                            <select name="cat_id" onchange="group_name1(this)" id="cat_id"  class="form-select" required>
                                <option value="">Category</option>
                                <?php foreach($category as $value) { ?>
                                <option value="<?=$value['category_id'];?>"><?=$value['category_name'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="form-label">Group</label>
                            <select name="group_id" onchange="filter_title1(this)" class="form-select" id="group_list" required>
                                <option value="">Group List</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="form-label">Filter Title</label>
                            <select name="filter_tit_id" onchange="filter_name1(this)" class="form-select" id="filter_tit_id1" required>
                                <option value="">Filter Title</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="form-label">Filter Name</label>
                            <select name="filter_name_id" class="form-select" id="filter_name_id" required>
                                <option value="">Filter Title</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary btn-sm mt-4">Search Product</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <?php if(isset($prod[0])){ ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                    <h4 class="mb-sm-0 font-size-18">Product List</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered table-sm text-center">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.&nbsp;&nbsp;</th>
                                            <th>Status&nbsp;&nbsp;</th>
                                            <th>Product Name&nbsp;&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; 
                                        foreach($prod as $value)
                                        {
                                        $filter=$this->db->query("SELECT * from product_filter where prod='".$value['prod_gold_id']."' AND cat='".$cat_id."' AND group_id='".$group_id."' AND filter_title='".$filter_tit_id."' AND filter_name='".$filter_name_id."' AND status='active'")->result_array();
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td>
                                                <?php if(isset($filter[0]['filter_id'])){  ?>
                                                    <button class="btn btn-danger btn-sm"  onclick="apply_filter_on_product(<?=$cat_id?>,<?=$group_id?>,<?=$value['prod_gold_id']?>,<?=$filter_tit_id?>,<?=$filter_name_id?>,this)"><i class="fa fa-times"></i> Remove</button>
                                                <?php }else{ ?>
                                                    <button class="btn btn-success btn-sm" onclick="apply_filter_on_product(<?=$cat_id?>,<?=$group_id?>,<?=$value['prod_gold_id']?>,<?=$filter_tit_id?>,<?=$filter_name_id?>,this)"><i class="fa fa-check"></i> Apply</button>
                                                <?php } ?>
                                            </td>
                                            <td><?=$value['product_name'];?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }else{
            ?>
            <div class="col-lg-6 ">
                <div class="card card-body text-center">
                <h4 class="card-title">Filter Gold Products</h4>
                <p class="card-text">Refine your selection by applying <br> filters or reset them to view all available gold products.</p>

                    
                </div>
            </div>
            <?php
        } ?>
    </div>
	
</div>

<script type="text/javascript">
	function group_name1(cat)
	{
		$.ajax({
            url : "<?=base_url()?>madmin/group_name_fetch",
            type : 'POST',
            data : {cat_id:cat.value},
            dataType : 'json'
            }).done(function(res){
            	var opt="<option value=''>Choose Group</option>";
            	$.each(res, function(key,val){
            		opt+="<option value='"+val.product_group_id+"'>"+val.product_group_name+"</option>";
            	});
            	$("#group_list").html(opt);
            });
	}
</script>
<script type="text/javascript">
	function filter_title1(group)
	{
		var cat_id1=$('#cat_id').val();
		$.ajax({
            url:"<?=base_url()?>madmin/filte_title_fetch",
            type:'POST',
            data:{cat_id:cat_id1,group_id:group.value},
            dataType:'json'
            }).done(function(res){
            	var opt="<option value=''>Filter Title</option>";
            	$.each(res, function(key,val){
            		opt+="<option value='"+val.filter_title_id+"'>"+val.filter_title+"</option>";
            	});
            	$("#filter_tit_id1").html(opt);
            });
	}
</script>
<script type="text/javascript">
	function filter_name1(tit)
	{
		var cat_id3=$('#cat_id').val();
		var group_list3=$('#group_list').val();
		$.ajax({
            url : "<?=base_url()?>madmin/prod_filter_name_fetch",
            type : 'POST',
            data : {cat_id:cat_id3,group_id:group_list3,tit_id:tit.value},
            dataType : 'json'
            }).done(function(res){
            	var opt="<option value=''>Choose Filter Name</option>";
            	$.each(res, function(key,val){
            		opt+="<option value='"+val.filter_name_id+"'>"+val.filter_name+"</option>";
            	});
            	$("#filter_name_id").html(opt);
            });
	 }
	 function apply_filter_on_product(cat_id,group_id,prod_id,ftid,fnid,elmt)
	 {
	 	$.ajax({
            url : "<?=base_url()?>madmin/apply_filter_on_product",
            type : 'POST',
            data : {cat:cat_id,group_id:group_id,prod:prod_id,filter_title:ftid,filter_name:fnid},
            dataType : 'json'
            }).done(function(res){
            	if(res.status=='added')
            	{
            		elmt.innerHTML='<i class="fa fa-times"></i> Remove';
            		elmt.classList.remove( "btn-success" );
            		elmt.classList.add( "btn-danger" );
            	}
            	else
            	{
            		elmt.innerHTML='<i class="fa fa-check"></i> Apply';
            		elmt.classList.remove( "btn-danger" );
            		elmt.classList.add( "btn-success" );
            	}
            });	
	 }
</script>
