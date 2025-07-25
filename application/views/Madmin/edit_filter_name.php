<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                        <h4 class="mb-sm-0 font-size-18">Update Filter Title</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>Madmin/update_new_filter_name" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="filter_name_id" value="<?=$filter_name1[0]['filter_name_id']?>">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Select Category</label>
                            <?php 
                            $group_cat=$this->My_model->select_where("category",['category_id'=>$filter_name1[0]['cat_id']]);
                            ?>
                            <select name="cat_id" onchange="group_name2(this)" id="cat_id2"  class="form-select" required>
                                <option style="color:green;font-size:25px;" value="<?=$group_cat[0]['category_id'];?>"><?=$group_cat[0]['category_name'];?></option>
                                <?php foreach($group_category as $value){ 
                                if($group_cat[0]['category_id']!=$value['category_id']){
                                ?>
                                <option value="<?=$value['category_id'];?>"><?=$value['category_name'];?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Group</label>
                                    <?php 
                                    $group_id1=$this->My_model->select_where("product_group",['product_group_id'=>$filter_name1[0]['group_id']]);
                                    ?>
                                    <select name="group_id" class="form-control" onchange="filter_title2(this)" id="group_list2" required>
                                        <option style="color:green;font-size:25px;" value="<?=$group_id1[0]['product_group_id'];?>"><?=$group_id1[0]['product_group_name'];?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Filter Title</label>
                                    <?php 
                                    $filter_title1=$this->My_model->select_where("filter_title",['filter_title_id'=>$filter_name1[0]['filter_tit_id']]);
                                    ?>
                                    <select name="filter_tit_id" class="form-select" id="filter_tit_id2" required>
                                        <option style="color:green;font-size:25px;" value="<?=$filter_title1[0]['filter_title_id'];?>"><?=$filter_title1[0]['filter_title'];?></option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Enter Filter Name</label>
                                <input type="text" name="filter_name" class="form-control" placeholder="Enter Filter Name" required value="<?=$filter_name1[0]['filter_name']?>">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update Now</button>
                        </div>
                    </form>
                        
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
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
	function group_name2(cat)
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
            	$("#group_list2").html(opt);
            });
	}
</script>
<script type="text/javascript">
	function filter_title2(group)
	{
		var cat_id3=$('#cat_id2').val();
		$.ajax({
            url:"<?=base_url()?>madmin/filte_title_fetch",
            type:'POST',
            data:{cat_id:cat_id3,group_id:group.value},
            dataType:'json'
            }).done(function(res){
            	var opt="<option value=''>Filter Title</option>";
            	$.each(res, function(key,val){
            		opt+="<option value='"+val.filter_title_id+"'>"+val.filter_title+"</option>";
            	});
            	$("#filter_tit_id2").html(opt);
            });
	}
</script>
<script type="text/javascript">
	function group_name3(cat)
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
            	$("#group_list3").html(opt);
            });
	}
</script>
<script type="text/javascript">
	function filter_title3(group)
	{
		var cat_id5=$('#cat_id3').val();
		$.ajax({
            url:"<?=base_url()?>madmin/filte_title_fetch",
            type:'POST',
            data:{cat_id:cat_id5,group_id:group.value},
            dataType:'json'
            }).done(function(res){
            	var opt="<option value='all'>All</option>";
            	$.each(res, function(key,val){
            		opt+="<option value='"+val.filter_title_id+"'>"+val.filter_title+"</option>";
            	});
            	$("#filter_tit_id3").html(opt);
            });
	}
</script>