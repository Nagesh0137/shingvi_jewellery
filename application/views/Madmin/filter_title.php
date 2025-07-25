<div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                    <h4 class="mb-sm-0 font-size-18">Filter Title</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-<?= isset($filter_title1[0])?'12':'6' ?>">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        if(isset($filter_title1[0])){
                                            ?>
                                             <form action="<?=base_url()?>Madmin/update_new_filter_title" method="post" enctype="multipart/form-data">
                                             <input type="hidden" name="filter_title_id" value="<?=$filter_title1[0]['filter_title_id']?>">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Select Category</label>
                                                <?php 
                                                $group_cat=$this->My_model->select_where("category",['category_id'=>$filter_title1[0]['cat_id']]);
                                                ?>
                                                <select name="cat_id" onchange="group_name1(this)"  class="form-select" required>
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
                                                        $group_id1=$this->My_model->select_where("product_group",['product_group_id'=>$filter_title1[0]['group_id']]);
                                                        ?>
                                                        <select name="group_id" class="form-select" id="group_list" required>
                                                            <option style="color:green;font-size:25px;" value="<?=$group_id1[0]['product_group_id'];?>"><?=$group_id1[0]['product_group_name'];?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Enter Filter Title</label>
                                                        <input type="text" name="filter_title" class="form-control" placeholder="Enter Filter Title Name" value="<?=$filter_title1[0]['filter_title']?>" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Update Now</button>
                                            </div>
                                        </form>
                                            <?php
                                        }else{
                                            ?>
                                        <form action="<?=base_url()?>Madmin/add_new_filter_title" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Select Category</label>
                                                <select name="cat_id" onchange="group_name1(this)"  class="form-select" required>
                                                    <option value="">Category</option>
                                                    <?php foreach($group_category as $value) { ?>
                                                    <option value="<?=$value['category_id'];?>"><?=$value['category_name'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Group</label>
                                                        <select name="group_id" class="form-select" id="group_list" required>
                                                            <option value="">Group List</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Enter Filter Title</label>
                                                        <input type="text" name="filter_title" class="form-control" placeholder="Enter Filter Title Name" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Add Filter Title</button>
                                            </div>
                                        </form>
                                            <?php
                                        }
                                        ?>
                                      
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <?php
                            if(!isset($filter_title1[0])){
                                ?>
                                <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <?php
                                            $i=0;
                                            $cat="";
                                            foreach($group_category as $row)
                                            {
                                            $ss="btn btn-dark";
                                            if(isset($_GET['cat_id']))
                                            {
                                                if($_GET['cat_id']==$row['category_id'])
                                                {
                                                    $cat=$row['category_id'];
                                                    $ss='btn btn-warning';
                                                }
                                            }
                                            elseif ($cat == "") 
                                            {
                                                $ss='btn btn-warning';
                                                $cat=$row['category_id'];
                                            }
                                            ?>
                                            <a href="<?=base_url()?>Madmin/filter_title?cat_id=<?=$row['category_id']?>"><button class="<?=$ss?>"><?=$row['category_name']?></button></a>
                                            <?php
                                            $i++;
                                            }
                                            ?> 
                                    </div>
                                        <div class="table-responsive mt-2">
                                            <table class="table mb-0 table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th style="width:100px;">Action</th>
                                                        <th>SN</th>
                                                        <th>Group</th>
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i=$start;
                                                foreach($filter_title as $row)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td style="font-size: 18px;">
                                                                <a href="<?=base_url()?>Madmin/delete_filter_title/<?=$row['filter_title_id']?>" onclick="return confirm('Are You Sure to delete permanant data ?');" class="btn btn-danger btn-sm p-0 m-0" style="height:3vh;width:3vh">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                                
                                                                <a href="<?=base_url()?>Madmin/edit_filter_title/<?=$row['filter_title_id']?>" class="btn btn-primary btn-sm p-0 m-0" style="height:3vh;width:3vh">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                            <td><?=++$i?></td>
                                                            <td><?= $row['product_group_name']; ?></td>
                                                            <td><?=$row['filter_title']?></td>						
                                                        </tr>
                                                    <?php
                                                
                                                }
                                                if($i==0)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td colspan="5"><b>No Record Found</b></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                            <br>
                                            <?php
                                            pagination($ttl_pages,$page_no);
                                            ?>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                                <?php
                            }
                            ?>
                            
                           
                        </div>
                        <!-- end row -->

                       
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