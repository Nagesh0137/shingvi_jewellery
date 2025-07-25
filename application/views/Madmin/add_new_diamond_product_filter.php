<div class="container-fluid">
       
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Gold + Diamond Product Filter</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>Madmin/save_new_diamond_product_filter" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Filter Title</th>
                                        <th>Filter Name</th>
                                    </tr>
                                    <?php $i=1; $ii=0; foreach($filter_title as $value) { 
                                    $name=$this->db->query("SELECT * from filter_name where cat_id='".$cat."'AND group_id='".$group."' AND filter_tit_id='".$value['filter_title_id']."' AND status='active'")->result_array();
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td>
                                        <input type="hidden" name="prod" value="<?=$prod;?>">
                                        <input type="hidden" name="cat" value="<?=$cat;?>">
                                        <input type="hidden" name="group" value="<?=$group;?>">
                                        <input type="hidden" name="filter_title[]" value="<?=$value['filter_title_id'];?>">
                                        <b><?=$value['filter_title'];?>:</b>
                                        </td>
                                        <td>
                                        <input type="checkbox" name="filter_name[<?=$ii;?>][]" value="-" hidden checked>
                                        <?php foreach($name as $value1){ ?>
                                        <input type="checkbox" name="filter_name[<?=$ii;?>][]" value="<?=$value1['filter_name_id'];?>"><b><?=$value1['filter_name'];?></b><br>
                                        <?php } $ii++; ?>
                                        </td>
                                    </tr>
                                <?php  } ?>
                                </table>
                            <div class="col-md-12 text-right mt-3 pr-0">
                                <button class="btn btn-primary" type="submit">SAVE PRODUCT FILTER3</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
</div>
