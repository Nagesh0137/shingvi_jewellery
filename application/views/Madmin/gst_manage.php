        <div class="container-fluid">

            <div class="row">
                <div class="col-12 ">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                        <h4 class="mb-sm-0 font-size-18">GST Manage</h4>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?=base_url()?>Madmin/gst_add" method="post" enctype="multipart/form-data" id="form1">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">GST Label(%)</label>
                                    <input type="text" name="gst_label" class="form-control" id="gst_label" placeholder="GST Value" onkeyup="gstcal(this.value)" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">CGST(%)</label>
                                            <input type="text" name="cgst" class="form-control" id="cgst"  readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">SGST(%)</label>
                                            <input type="text" name="sgst" class="form-control" id="sgst" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">IGST(%)</label>
                                            <input type="text" name="igst" class="form-control" id="igst" readonly>
                                        </div>
                                    </div>
                                </div>  
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Add GST</button>
                                </div>
                            </form>
                            <!-- <form action="<?=base_url()?>Madmin/gst_update" method="post" enctype="multipart/form-data" id="form2">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">GST Label(%)</label>
                                    <input type="text" class="form-control" name="gst_label" id="gst_label1" onkeyup="gstcal1(this.value)" placeholder="GST Value" required class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <input type="hidden" name="gst_id" class="form-control" id="gst_id1" readonly required>
                                            <label for="formrow-inputCity" class="form-label">CGST(%)</label>
                                            <input type="text" name="cgst" class="form-control" id="cgst1" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">SGST(%)</label>
                                            <input type="text" name="sgst"  class="form-control" id="sgst1" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">IGST(%)</label>
                                            <input type="text" name="igst" class="form-control" id="igst1" readonly>
                                        </div>
                                    </div>
                                </div>  
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update GST</button>
                                    <button type="button" class="btn btn-danger" onclick="cancel()"><b>Cancel</b></button>
                                </div>
                            </form> -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
               
                <!-- end col -->
                
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">GST List</h4>
                        <form action="<?= site_url() ?>Madmin/gst_manage" method="get">
                        <div class="col-sm-12">
                            <div class="search-box me-2 mb-2 d-inline-block d-flex align-items-center ">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" placeholder="Search..." name="q" value="<?= $this->input->get("q") ?>">
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
                                <table class="table table-sm m-0 table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Srno</th>
                                            <th>GST Label</th>
                                            <th>CGST</th>
                                            <th>SGST</th>
                                            <th>IGST</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $i=$start; 
                                    if(count($gst)>0){
                                        foreach ($gst as $value) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?=++$i;?></th>
                                            <td><?=$value['gst_label'];?></td>
                                            <td><?=$value['cgst'];?></td>
                                            <td><?=$value['sgst'];?></td>
                                            <td><?=$value['igst'];?></td>
                                            <td>
                                            <!-- <a class="btn btn-outline-primary btn-sm edit" title="Edit" onclick="updategold('<?=$value['gst_id'];?>','<?=$value['gst_label'];?>','<?=$value['cgst'];?>','<?=$value['sgst'];?>','<?=$value['igst'];?>')">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a> -->
                                            <a class="btn btn-outline-primary btn-sm edit" title="Edit" href="<?= base_url() ?>Madmin/edit_gst_manage/<?= $value['gst_id'] ?>">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a onclick="return confirm('Are You Sure to permanant Delete this data...')" href="<?=base_url();?>Madmin/gst_delete/<?=$value['gst_id'];?>" class="btn btn-outline-danger btn-sm delete"><i class="fa fa-trash fw-bold"></i></a>
                                            </td>
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
        <style type="text/css">
		#form2{
			display:none;
		}
	    </style>
        <script type="text/javascript">
            function updategold(gst_id,gst_label,igst,cgst,sgst){
                $('#gst_id1').val(gst_id);
                $('#gst_label1').val(gst_label);
                $('#igst1').val(igst);
                $('#cgst1').val(cgst);
                $('#sgst1').val(sgst);
                $('#form1').css('display','none');
                $('#form2').css('display','inline-block');
            }

            function gstcal(val){
            var csgst=Number(val)/2;
            $('#igst').val(val);
            $('#cgst').val(csgst);
            $('#sgst').val(csgst);
            }
            function gstcal1(val){
            var csgst=Number(val)/2;
            $('#igst1').val(val);
            $('#cgst1').val(csgst);
            $('#sgst1').val(csgst);
            }

            function cancel(){
            $('#form1').css('display','inline-block');
            $('#form2').css('display','none');
            }
        </script>
        