<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Gold Rates</h4>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>Madmin/gold_rate_add" method="post" enctype="multipart/form-data" id="form1">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Enter Todays Rate</label>
                            <input type="text" name="rateamt" id="rateamt" onkeyup="ratecal(this.value)" placeholder="Todays Price" required class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Todays Rate Date</label>
                                    <input type="date" name="ratedate" value="<?=date('Y-m-d');?>" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Enter Todays Rate Time</label>
                                    <input type="time" name="ratetime" value="<?=date("h:i");?>"  required class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">24 CT(99.5%)</label>
                                    <input type="text" name="ct24" id="ct24" placeholder="24 CT(99.5%)" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">22 CT(94%)</label>
                                    <input type="text"  name="ct22" id="ct22" placeholder="22 CT(94%)" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputZip" class="form-label">18 CT(81%)</label>
                                    <input type="text" name="ct18" id="ct18" placeholder="18 CT(81%)" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputZip" class="form-label">Pure Gold(99.9%)</label>
                                    <input type="text" name="ctpure" id="ctpure" placeholder="Pure Gold(99.9%)" required class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Add Today Rate</button>
                        </div>
                    </form>
                    <form action="<?=base_url()?>Madmin/gold_rate_update" method="post" enctype="multipart/form-data" id="form2">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Enter Todays Rate</label>
                            <input type="text" name="rateamt" id="rateamt1" onkeyup="ratecal1(this.value)" placeholder="Todays Price" required  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Enter Todays Rate Date</label>
                                    <input type="hidden" name="rate_gold_id" id="rate_gold_id1" required class="form-control">
                                    <input type="hidden" name="from_date" id="from_date1"  class="form-control">
                                    <input type="hidden" name="to_date" id="to_date1"  class="form-control">
                                    <input type="date" name="ratedate" id="ratedate1" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Enter Todays Rate Time</label>
                                    <input type="time" name="ratetime" id="ratetime1"  required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">24 CT(99.5%)</label>
                                    <input type="text" name="ct24" id="ct241" placeholder="24 CT(99.5%)" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">22 CT(94%)</label>
                                    <input type="text"  name="ct22" id="ct221" placeholder="22 CT(94%)" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputZip" class="form-label">18 CT(81%)</label>
                                    <input type="text" name="ct18" id="ct181" placeholder="18 CT(81%)" required class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-inputZip" class="form-label">Pure Gold(99.9%)</label>
                                    <input type="text" name="ctpure" id="ctpure1" placeholder="Pure Gold(99.9%)" required class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update Today Rate</button>
                            <button class="btn btn-danger" onclick="cancel()" type="button"><b>Cancel</b></button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                <form style="border-bottom:1px solid black;" action="<?=base_url()?>Madmin/gold_rate_search" method="get" enctype="multipart/form-data" class="d-flex align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">From Date</label>
                                    <input type="date" name="from_date" class="form-control" title="From Date" required value="<?= $this->input->get("from_date") ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">To Date</label>
                                    <input type="date" name="to_date" value="<?= $this->input->get("to_date") ?>" class="form-control" title="To Date" required>
                                </div>
                            </div>
                            <div class="col-md-2 mt-4">
                                <button type="submit" class="btn btn-primary"><i class="bx bx-search"></i></button>
                            </div>
                        </div>
                       
                    </form>
                    <style>
                        table{
                        white-space: nowrap !important;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        }
                    </style>
                    <div class="table-responsive">
                        <table class="table mb-0 table-sm table-bordered mt-3 border-info text-center">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>24 Ct</th>
                                    <th>22 Ct</th>
                                    <th>18 Ct</th>
                                    <th>Pure Gold</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach ($rate as $value) { ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=date('d M Y',strtotime($value['ratedate']));?></td>
                                        <td><?= date('g:i a', strtotime($value['ratetime'])); ?></td>

                                        <td><?=$value['ct24'];?> &#8377;</td>
                                        <td><?=$value['ct22'];?> &#8377;</td>
                                        <td><?=$value['ct18'];?> &#8377;</td>
                                        <td><?=$value['ctpure'];?> &#8377;</td>
                                        <td>
                                            <button class="btn btn-outline-primary btn-sm" onclick="updategold('<?=$value['rate_gold_id'];?>','<?=$value['ratedate'];?>','<?=$value['ratetime'];?>','<?=$value['ct24'];?>','<?=$value['ct22'];?>','<?=$value['ct18'];?>','<?=$value['ctpure'];?>','<?php if(isset($search['from_date'])){echo $search['from_date'];}?>','<?php if(isset($search['to_date'])){echo $search['to_date'];}?>')"><i class="fa fa-edit"></i></button>
                                        
                                            <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/gold_rate_delete/<?=$value['rate_gold_id'];?><?php if(isset($search['from_date'])){echo "/".$search['from_date'];}?><?php if(isset($search['to_date'])){echo "/".$search['to_date'];}?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                           
                                        </td>
                                    </tr>
                                    <?php } ?>
                                            
                            </tbody>
                            
                        </table>
                      
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    #form2{
        display:none;
    }
</style>
<script type="text/javascript">
function updategold(rate_gold_id,ratedate,ratetime,ct24,ct22,ct18,ctpure,from_date,to_date){
	$('#rate_gold_id1').val(rate_gold_id);
	$('#from_date1').val(from_date);
	$('#to_date1').val(to_date);
	$('#ratedate1').val(ratedate);
	$('#ratetime1').val(ratetime);
	$('#rateamt1').val(ct24);
	$('#ct241').val(ct24);
	$('#ct221').val(ct22);
	$('#ct181').val(ct18);
	$('#ctpure1').val(ctpure);
	$('#form1').css('display','none');
	$('#form2').css('display','inline-block');
}

function ratecal(rate){
 var numVal1=Number(rate);
 var numVal2=94;
 var numVal3=81;
 var numVal4=0.5;
 var totalValue1=numVal1;
 var totalValue2=((numVal1*numVal2/100)).toFixed(2);
 var totalValue3=((numVal1*numVal3/100)).toFixed(2);
 var totalValue33=((numVal1*numVal4/100));
 var totalValue4=((numVal1+totalValue33)).toFixed(2);
 var totalValue01=call1(totalValue2);
 var totalValue02=call1(totalValue3);
 var totalValue03=call1(totalValue4);
 $('#ct24').val(totalValue1);
 $('#ct22').val(totalValue01);
 $('#ct18').val(totalValue02);
 $('#ctpure').val(totalValue03);
}

function ratecal1(rate){
 var numValu1=Number(rate);
 var numValu2=94;
 var numValu3=81;
 var numValu4=0.5;
 var totalValueu1=numValu1;
 var totalValueu2=((numValu1*numValu2/100)).toFixed(2);
 var totalValueu3=((numValu1*numValu3/100)).toFixed(2);
 var totalValueu33=((numValu1*numValu4/100));
 var totalValueu4=((numValu1+totalValueu33)).toFixed(2);
 var totalValueu01=call1(totalValueu2);
 var totalValueu02=call1(totalValueu3);
 var totalValueu03=call1(totalValueu4);
 $('#ct241').val(totalValueu1);
 $('#ct221').val(totalValueu01);
 $('#ct181').val(totalValueu02);
 $('#ctpure1').val(totalValueu03);
}
function call1(num){
var aa=num.toString().split(".")[0];
var ab=num.toString().split(".")[1];
if (ab>=1) {
 num=parseInt(num)+1;
}
else{
 num=parseInt(num);
}
return num;
}
function cancel(){
$('#form1').css('display','inline-block');
$('#form2').css('display','none');
}
</script>