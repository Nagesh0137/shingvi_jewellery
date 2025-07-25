<?php
if(!isset($auth_det))
{
?>
<div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">AUTHONTICATION</h4>
            </div>
        </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
        <form action="<?=base_url()?>Madmin/save_authontication" method="post">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <b style="color: black;">Authontication Name</b>
                    <input type="text" name="authontication_name" value="" class="form-control" required>
                </div>
                <div class="col-md-12 mt-3">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th colspan="3" style="color: black;">
                                    ENTER URLS
                                </th>
                            </tr>
                        </thead>
                        <tbody id="add_tbody">
                            <tr>
                                <td style="width: 300px;padding-right: 0px;">
                                    <input type="text" name="initial_url" value="<?=base_url()?>Madmin/" readonly class="form-control" style="border-right: 0px;" tabindex='-1'></td>
                                <td style="padding-left: 0px;"><input type="text" name="authontication_urls[]" class="form-control" required style="border-left: 0px;">
                                </td>
                                <td width="2%"  style='cursor: pointer;vertical-align: middle;'></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <button type="button" onclick="add_row_tbody()" class="btn btn-primary"> <i class="fa fa-plus"></i> ADD MORE URL</button>
                                    <br>
                                    <small>(Note. After base url only add one url segment ex. Url: <?=base_url()?>madmin/filter_title?cat_id=6 then add only <u><b>filter_title</b></u>)</small>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-md-12 text-right">
                    <button class="btn btn-danger">SAVE AUTHONTICATION</button>
                </div>
            </div>
            <div class="row border-top py-2 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm  ">
                                <thead>
                                    <tr>
                                        <td style="width: 1%;"></td>
                                        <td style="width: 1%;"></td>
                                        <td>SN</td>
                                        <td>Name</td>
                                        <td>URLS</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=0;
                                        foreach($auths as $row)
                                        {
                                            $res=$this->My_model->select_where("authontication_urls",['authontication_tbl_id'=>$row['authontication_tbl_id']]);
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href="<?=base_url()?>Madmin/edit_authontication/<?=$row['authontication_tbl_id']?>"><button type="button" class="btn btn-primary pl-1 pr-1 pt-0 pb-0"><i class="fa fa-edit"></i></button></a>
                                                </td>
                                                <td>
                                                    <a href="<?=base_url()?>Madmin/delete_authontication/<?=$row['authontication_tbl_id']?>" onclick="return confirm('Are You Sure To Delete Record ?....')"><button type="button" class="btn btn-danger pl-1 pr-1 pt-0 pb-0"><i class="fa fa-trash"></i></button></a>
                                                </td>
                                                <td><?=++$i?></td>
                                                <td><?=$row['authontication_name']?></td>
                                                <td>
                                                    <?php
                                                    $j=1;
                                                    foreach($res as $row2)
                                                    {
                                                        ?>
                                                        <?=$j++?>.&nbsp;<?=base_url()?>madmin/<b><?=$row2['authontication_url']?></b><br>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        if($i==0)
                                        {
                                            ?>
                                            <tr>
                                                <td colspan="20" class="text-center">
                                                  
                                                    <h3>No Record Found</h3>
                                                   
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                    <tr>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?php
}
else
{
	?>
      <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Update Authontication Details</h4>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="<?=base_url()?>Madmin/update_authontication" method="post">
                <input type="hidden" name="authontication_tbl_id" value="<?=$auth_det['authontication_tbl_id']?>">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <b style="color: black;">Authontication Name</b>
                        <input type="text" name="authontication_name" class="form-control" required value="<?=$auth_det['authontication_name']?>">
                    </div>
                    <div class="col-md-12 mt-3">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" style="color: black;">
                                        ENTER URLS
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="add_tbody">
                                <?php
                                $i=0;
                                foreach($urls as $row)
                                {
                                ?>
                                <tr>
                                    <td style="width: 300px;padding-right: 0px;">
                                        <input type="text" name="initial_url" value="<?=base_url()?>Madmin/" readonly class="form-control" style="border-right: 0px;" tabindex='-1'></td>
                                    <td style="padding-left: 0px;"><input type="text" name="authontication_urls[]" value="<?=$row['authontication_url']?>" class="form-control" required style="border-left: 0px;">
                                    </td>
                                    <?php
                                    if($i==0)
                                    {
                                    ?>
                                    <td width="2%"  style='cursor: pointer;vertical-align: middle;'></td>
                                    <?php
                                    }
                                    else
                                    {
                                        ?>
                                    <td width='2%' onclick='remove_row(this)' style='cursor: pointer;vertical-align: middle;background-color:red;color:white;user-select:none;'>X</td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <button type="button" onclick="add_row_tbody()" class="btn btn-primary"> <i class="fa fa-plus"></i> ADD MORE URL</button>
                                        <br>
                                        <small>(Note. After base url only add one url segment ex. Url: <?=base_url()?>madmin/filter_title?cat_id=6 then add only <u><b>filter_title</b></u>)</small>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="col-md-12 text-right">
                        <button class="btn btn-danger">UPDATE AUTHONTICATION</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

	<?php
}
?>
<script type="text/javascript">
	function add_row_tbody()
	{
		var b=$("#add_tbody");
		var a=`<tr>
                <td style='width: 300px;padding-right: 0px;'><input type='text' name='initial_url' value='<?=base_url()?>madmin/' readonly class='form-control' style='border-right: 0px;' tabindex='-1'></td>
                <td style='padding-left: 0px;'><input type='text' name='authontication_urls[]' class='form-control' required style='border-left: 0px;'></td>
                <td width='2%' onclick='remove_row(this)' style='cursor: pointer;vertical-align: middle;background-color:red;padding:12px;color:white;user-select:none;'><i class="ri-close-line fw-bold lead"></i></td>
        </tr>`;
		b.append(a);
	}
	function remove_row(a)
	{
		a.closest('tr').remove();
	}
</script>