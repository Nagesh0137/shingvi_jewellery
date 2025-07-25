<div class="container-fluid">
	<div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <?php 
                    foreach ($order as $value) { 
                        ?>
                        <div class="row" style="background-color: lavender;padding-top: 10px;overflow: hidden;">
                            <div class="col-md-12" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> Name</b><br>
                                    <span style="margin-left: 10px;"><?=$value['name'];?></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> Email</b><br>
                                    <span style="margin-left: 10px;"><?=$value['email'];?></span>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> Phone No</b><br>
                                    <span style="margin-left: 10px;"><?=$value['phone_number'];?></span>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;">Zip-Code</b><br>
                                    <span style="margin-left: 10px;"><?=$value['addr_pin_code'];?></span>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> State</b><br>
                                    <span style="margin-left: 10px;"><?=$value['addr_state'];?></span>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> Dist</b><br>
                                    <span style="margin-left: 10px;"><?=$value['addr_dist'];?></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> Taluk</b><br>
                                    <span style="margin-left: 10px;"><?=$value['addr_taluk'];?></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> Village / CIty</b><br>
                                    <span style="margin-left: 10px;"><?=$value['addr_village_city'];?></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;"> Area</b><br>
                                    <span style="margin-left: 10px;"><?=$value['addr_area'];?></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;">Street / Landmark</b><br>
                                    <span style="margin-left: 10px;"><?=$value['addr_street'];?></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom:15px;">
                                <div style="font-weight: bold;color: black;line-height: 18px;border-bottom:1px solid white;">
                                    <b style="color: darkred;">Order Date</b><br>
                                    <span style="margin-left: 10px;"><?=date('d M Y',$value['date_time']);?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
		<div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                                <h4 class="mb-sm-0 font-size-18">Products</h4>
                            </div>
                            <div class="text-end">
                                <h4 class="fw-bold text-danger">Rejected Order</h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-sm" border="1">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Net-Weight</th>
                                <th>Price</th>
                                <th>QNT</th>
                                <th>Total</th>
                            </tr>
                            <?php
                            $i=1;
                            $totalamount=0;
                            foreach($order_details as $value) {
                                $prod=$this->db->query("SELECT * from product_gold where prod_gold_id='".$value['prod_id']."'")->result_array()[0];
                                //  $price=0;
                                // if($prod['cat_id']==5)
                                // {
                                // 	$price=$admin->goldprice($prod['prod_gold_id']);
                                // }
                                // elseif($prod['cat_id']==6) 
                                // {
                                // 	$price=$admin->silverprice($prod['prod_gold_id']);
                                // }
                                // elseif($prod['cat_id']==8 && $prod['entry_type']=='dgold') 
                                // {
                                // 	$price=$admin->golddiamondprice($prod['prod_gold_id']);
                                // }
                                // elseif($prod['cat_id']==8 && $prod['entry_type']=='dsilver') 
                                // {
                                // 	$price=$admin->silverdiamondprice($prod['prod_gold_id']);
                                // }
                            ?>
                            <tr class="" style="background-color: skyblue;color: black;">
                                <td><?=$i++;?></td>
                                <td><?=$value['product_name'];?></td>
                                <td>
                                    <?php
                                        $imgs=explode("||",$value['product_image']);
                                        $j=0;
                                        foreach($imgs as $img1)
                                        {
                                            ?>
                                            <input type="hidden" class="imges<?=$i?>" value="<?=base_url()?>uploads/<?=$img1?>">
                                            <?php
                                            if($j==0)
                                            {
                                            ?>
                                                <!-- <img src="<?=base_url()?>uploads/<?=$img1?>" width="60px" style="cursor: pointer;" onclick="show_images('imges<?=$i?>')"> -->
                                                <div style="cursor: pointer;" onclick="show_images('imges<?=$i?>')">
                                                    <u>View Image</u>
                                                </div>
                                            <?php
                                            }
                                            $j++;
                                        }
                                    ?>
                                </td>
                                <th>
                                    <?=$prod['net_weight']?> g
                                </th>
                                <td style="font-weight: bold;"><?='&#8377;&nbsp;'.number_format1($value['prod_rate']);?>/-</td>
                                <td style="font-weight: bold;"><?=$value['prod_qty'];?></td>
                                <td style="font-size: 15px;font-weight: bold;"><?php
                                $tot=(float)$value['prod_rate']*(float)$value['prod_qty'];
                                echo '&#8377;&nbsp;'.number_format1($tot)."/-";
                                $totalamount+=$tot;
                                ?></td>
                            </tr>
                            <?php
                            }
                            foreach($other_charges as $row)
                            {
                                ?>
                                <tr style="background-color: lightyellow;">
                                    <td colspan="4"></td>
                                    <td colspan="2" style="color: black;font-size: 15px;font-weight: bold;"><?php print_r($row['char_name']);?></td>
                                    <td style="font-size: 15px;font-weight: bold;font-size: 16px;color: black;"><?php
                                    echo '&#8377;&nbsp;'.number_format1($row['char_amt'])."/-";
                                    $totalamount+=$row['char_amt'];
                                    ?></td>
                                </tr>	
                                <?php
                            }
                            ?>
                            <tr style="background-color: skyblue;">
                                <td colspan="6" class="fbold text-right" style="font-size: 20px;color: darkred;font-weight: bold;">Total Amount</td>
                                <td class="fbold" style="font-size: 20px;color: darkred;font-weight: bold;">&#8377;&nbsp;<?=number_format1($order[0]['pay_amount']);?>/-</td>
                            </tr>
                            <tr style="background-color: lightgreen;">
                                <td colspan="6" class="fbold text-right" style="font-size: 20px;color: darkred;font-weight: bold;">
                                    <span class="float-left" style="font-size: 13px;line-height: 100%;text-align: left;">
                                        <?=($order[0]['payment_mode'] == "online" ) ? 'T.ID : '.$order[0]['pay_transaction_id']." <br> O-ID : ".$order[0]['order_id']:'CASH ON DELIVERY' ?>		
                                    </span>
                                Received Amount</td>
                                <td class="fbold" style="font-size: 20px;color: darkred;font-weight: bold;">&#8377;&nbsp;<?=number_format1((int)$order[0]['paid_amount']);?>/-</td>
                            </tr>
                            <tr style="background-color: pink;">
                                <td colspan="6" class="fbold text-right" style="font-size: 20px;color: darkred;font-weight: bold;">Pending Amount</td>
                                <td class="fbold" style="font-size: 20px;color: darkred;font-weight: bold;">&#8377;&nbsp;<?=number_format1((int)$totalamount-(int)$order[0]['paid_amount']);?>/-</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
				<div class="col-md-12">
					<b style="color: black;">ORDER DETAILS</b>
					<table class="table table-sm">
						<tr style="background-color: pink;">
							<th style="color: black;font-size: 20px;" width="30%">
								ORDER&nbsp;DATE
							</th>
							<th style="font-weight: bold;color: black;font-size: 20px;">
								<?=date('d M Y',$order[0]['date_time']);?>
							</th>
						</tr>
						<tr style="background-color: skyblue;">
							<th style="color: black;font-size: 20px;" width="30%">
								PROCESSING&nbsp;DATE
							</th>
							<th style="font-weight: bold;color: black;font-size: 20px;">
								<?= ($order[0]['process_date']!="") ? date('d M Y',$order[0]['process_date']) : 'NO DATE'; ?>
							</th>
						</tr>
						<tr style="background-color: yellow;">
							<th style="color: black;font-size: 20px;" width="30%">
								DISPATCHED&nbsp;DATE
							</th>
							<th style="font-weight: bold;color: black;font-size: 20px;">
								<?= ($order[0]['dispatch_date']!="") ? date('d M Y',$order[0]['dispatch_date']) : 'NO DATE'; ?>
							</th>
						</tr>
						<tr style="background-color: lightgreen;">
							<th style="color: black;font-size: 20px;" width="30%">
								DELIVERED&nbsp;DATE
							</th>
							<th style="font-weight: bold;color: black;font-size: 20px;">
								<?= ($order[0]['delivered_date']!="") ? date('d M Y',$order[0]['delivered_date']) : 'NO DATE'; ?>
							</th>
						</tr>

						<tr style="background-color: lightgreen;">
							<th style="color: black;font-size: 20px;" width="30%"><br></th>
							<th style="font-weight: bold;color: black;font-size: 20px;"><br></th>
						</tr>
						<tr style="background-color: red;">
							<th style="color: white;font-size: 20px;" width="30%">
								CANCEL&nbsp;DATE
							</th>
							<th style="font-weight: bold;color: white;font-size: 20px;">
								<?= ($order[0]['cancel_date']!="") ? date('d M Y',$order[0]['cancel_date']) : 'NO DATE'; ?>
							</th>
						</tr>
					</table>
				</div>
			</div>
                </div>
            </div>
        </div>
		
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="image_modal">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Product Image</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="image_modal_body">
			      	
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<script type="text/javascript">
	function show_images(img_class)
	{
		var elmt=document.getElementsByClassName(img_class);
		out="";

		for(var i=0;i<elmt.length;i++)
			out+="<img src='"+elmt[i].value+"' width='49%' style='border:5px solid white;'>";

		$("#image_modal_body").html(out);
		$("#image_modal").modal('show');
	}
</script>	