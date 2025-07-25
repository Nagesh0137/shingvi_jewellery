<div class="container-fluid">

    <!-- start page title -->
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Block Customer List</h4>
            </div>
        </div>
    <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/block_customer_list" method="get">
                        <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" value="<?= $this->input->get("q") ?>" placeholder="Search..." name="q">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                                &nbsp;&nbsp;
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Search</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-sm mb-0">
                            
                           
                                <thead>
                                    <tr>
                                        <th scope="col">View Details</th>
                                        <th scope="col">SN</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Orders</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(count($cust)>0){
                                        $i=$start;
                                        foreach($cust as $key=>$row){
                                            ?>
                                            <tr>
                                                <td>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl<?= $key+1 ?>"><i class="ri-information-line"></i> View Details</button>

                                                     <!--  Extra Large modal example -->
                                                    <div class="modal fade bs-example-modal-xl<?= $key+1 ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-center fw-bold" id="myExtraLargeModalLabel">Customer Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="clearfix">
                                                                                        <h4 class="card-title mb-1 text-success">Product Details</h4>
                                                                                    </div>
                                                                                    <div class="table-responsive mt-1">
                                                                                        <table class="table align-middle mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <h5 class="font-size-14 mb-1">Pending Order</h5>
                                                                                                        <p class="text-muted mb-0">Customer Total Pending Order</p>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <div id="radialchart-1" data-colors="[&quot;--bs-primary&quot;]" class="apex-charts"></div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <p class="text-muted mb-1">
                                                                                                            <i class="bx bx-gift h3"></i>
                                                                                                        </p>
                                                                                                        <h5 class="mb-0">0 Pending Order</h5>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <h5 class="font-size-14 mb-1">Gold Product</h5>
                                                                                                        <p class="text-muted mb-0">Customer Total Gold Product Order</p>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <div id="radialchart-1" data-colors="[&quot;--bs-primary&quot;]" class="apex-charts"></div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <p class="text-muted mb-1">0 Orders</p>
                                                                                                        <h5 class="mb-0"></h5>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <h5 class="font-size-14 mb-1">Silver Product </h5>
                                                                                                        <p class="text-muted mb-0"Customer Total Gold Product Order</p>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <div id="radialchart-2" data-colors="[&quot;--bs-success&quot;]" class="apex-charts"></div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <p class="text-muted mb-1">0 Orders</p>
                                                                                                        <h5 class="mb-0"></h5>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <h5 class="font-size-14 mb-1">Diamond Product </h5>
                                                                                                        <p class="text-muted mb-0">Customer Total Diamond Product Order</p>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <div id="radialchart-3" data-colors="[&quot;--bs-danger&quot;]" class="apex-charts"></div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <p class="text-muted mb-1">0 Orders</p>
                                                                                                        <h5 class="mb-0"></h5>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    
                                                                                    <div>
                                                                                        <div class="mb-1  me-1">
                                                                                            <i class="mdi mdi-account-circle text-primary h1"></i>
                                                                                        </div>
                                                                                        <div>
                                                                                            <h5>
                                                                                                <?php
                                                                                                if(($row['firstname'] != NULL) || ($row['lastname']) != NULL){
                                                                                                    ?>
                                                                                                     <?= $row['firstname'] ?>  <?= $row['lastname'] ?>
                                                                                                    <?php
                                                                                                }else{
                                                                                                    ?>
                                                                                                   N/A
                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                               
                                                                                            </h5>
                                                                                            <p class="text-muted mb-1">
                                                                                            <?php
                                                                                                if(!empty($row['email'])){
                                                                                                    ?>
                                                                                                     <?= $row['email'] ?>
                                                                                                    <?php
                                                                                                }else{
                                                                                                    ?>
                                                                                                   N/A
                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                                 
                                                                                            </p>
                                                                                            
                                                                                            <p class="text-muted mb-1">
                                                                                            <?php
                                                                                                if(!empty($row['mobile'])){
                                                                                                    ?>
                                                                                                     <?= $row['mobile'] ?>
                                                                                                    <?php
                                                                                                }else{
                                                                                                    ?>
                                                                                                   N/A
                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                                 
                                                                                            </p>
                                                                                            <p class="text-muted mb-1">
                                                                                            <?php
                                                                                                if(!empty($row['reg_time'])){
                                                                                                    ?>
                                                                                                     <?=date('d M Y', $row['reg_time']);?>
                                                                                                    <?php
                                                                                                }else{
                                                                                                    ?>
                                                                                                   N/A
                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                                 
                                                                                            </p>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-body border-top">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <div>
                                                                                                <p class="fw-medium mb-2">Total Orders :</p>
                                                                                                <h4>0 Orders</h4>
                                                                                            </div>
                                                                                        </div>
                                                                                       <div class="col-sm-6">
                                                                                       <!-- <a href="javascript: void(0);" class="btn btn-primary me-2 w-md">Buy / Sell</a> -->
                                                                                                                                                                                                                                        <?php
                                                                                        if($row['status']=='active')
                                                                                        {
                                                                                        ?>
                                                                                            <a href="<?=base_url()?>Madmin/remove_customer/<?=$row['customers_id']?>"  class="btn btn-primary me-2 w-md" onclick="return confirm('Are You Sure.')">Disable / Block Customer From Site</a>
                                                                                        <?php
                                                                                        }
                                                                                        if($row['status']=='block')
                                                                                        {
                                                                                            ?>
                                                                                            <a href="<?=base_url()?>Madmin/remove_from_block_customer/<?=$row['customers_id']?>" onclick="return confirm('Are You Sure.')"><button class="btn btn-danger me-2 w-md">Activate / Un-Block Customer From Site</button></a>

                                                                                            <?php
                                                                                        }
                                                                                        ?>
                                                                                       </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- <div class="card-footer bg-transparent border-top">
                                                                                    <div class="text-center">
                                                                                        <a href="javascript: void(0);" class="btn btn-outline-light me-2 w-md">Deposit</a>
                                                                                        <a href="javascript: void(0);" class="btn btn-primary me-2 w-md">Buy / Sell</a>
                                                                                    </div>
                                                                                </div> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </td>
                                                <td><?=++$i;?></td>
                                                <td>
                                                <?php
                                                    if(isset($row['firstname']) || isset($row['lastname'])){
                                                        echo $row['firstname'] . " " .$row['lastname'];
                                                    }else{
                                                        ?>
                                                        N/A
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row['mobile']){
                                                        echo $row['mobile'];
                                                    }else{
                                                        ?>
                                                        N/A
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row['email']){
                                                        echo $row['email'];
                                                    }else{
                                                        ?>
                                                        N/A
                                                        <?php
                                                    }
                                                    ?>
                                                <td><?=date('d M Y', $row['reg_time']);?></td>
                                                <td>0</td>
                                                <td>&#8377;&nbsp;0.00/-</td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <tr>
                                            <td class="text-center" colspan="20">No Record Found</td>
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
        </div>

    </div>