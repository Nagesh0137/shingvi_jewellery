<div class="container-fluid">
<?php
function nl2br2($string) {
$string = str_replace(array('\r\n', '\r', '\n'), "<br />", $string);
$string = ltrim($string, "'"); 
$string = rtrim($string, "'"); 
return $string;
}
function br2nl2($text)
{
    $breaks = array("<br />","<br>","<br/>");  
    $text = str_ireplace($breaks, "\r\n", $text);
    return $text;
}
?>
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
                                             <form action="<?=base_url()?>madmin/update_new_filter_name" method="post" enctype="multipart/form-data">
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
                                            <?php
                                        }else{
                                            ?>
                                        <form action="<?=base_url()?>Madmin/add_new_filter_name" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Category</label>
                                                <select name="cat_id" onchange="group_name1(this)" id="cat_id"  class="form-select" required>
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
                                                        <select name="group_id" onchange="filter_title1(this)" class="form-select" id="group_list" required>
                                                            <option value="">Group List</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Enter Filter Title</label>
                                                        <select name="filter_tit_id" class="form-control" id="filter_tit_id1" required>
                                                            <option value="">Filter Title</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label >Enter Filter Name</label>
                                                    <input type="text" name="filter_name" class="form-control" placeholder="Enter Filter  Name" required>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Add Filter Name</button>
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
                                                        $ss='btn btn-primary';
                                                    }
                                                }
                                                elseif ($cat == "") 
                                                {
                                                    $ss='btn btn-primary';
                                                    $cat=$row['category_id'];
                                                }
                                            ?>
                                            <a href="<?=base_url()?>Madmin/filter_name?cat_id=<?=$row['category_id']?>"><button class="<?=$ss?>"><?=$row['category_name']?></button></a>

                                            <?php
                                            $i++;
                                            }
                                            ?> 
                    </div>
                        <div class="table-responsive mt-2">
                            <table class="table mb-0 table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Srno</th>
                                        <th class="font-weight-bold" style="width:100px;">Action</th>
                                        <th class="font-weight-bold">Caterogy</th>
                                        <th class="font-weight-bold">Group</th>
                                        <th class="font-weight-bold">Filter Title</th>
                                        <th class="font-weight-bold">Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                            $i=$start;
                            if(isset($filter_name) && count($filter_name)>0){
                            foreach($filter_name as $row)
                            {
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td style="font-size:18px;">
                                        <a href="<?=base_url()?>Madmin/edit_filter_name/<?=$row['filter_name_id']?>" class="btn btn-primary btn-sm p-0 m-0" style="height:3vh;width:3vh" >
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="<?=base_url()?>Madmin/delete_filter_name/<?=$row['filter_name_id']?>" onclick="return confirm('Are You Sure to delete permanant data ?');"  class="btn btn-danger btn-sm p-0 m-0" style="height:3vh;width:3vh">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                       
                                        
                                    </td>
                                    <td><?=$row['category_name'];?></td>
                                    <td><?=$row['product_group_name'];?></td>
                                    <td><?=$row['filter_title'];?></td>
                                    <td><?=$row['filter_name']?></td>						
                                </tr>
                                <?php
                                    }
                                }else{
                                ?>
                                <tr>
                                    <td colspan="20" class="text-center"><b>No Record Found</b></td>
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