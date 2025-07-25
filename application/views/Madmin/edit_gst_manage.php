<div class="container-fluid">

<div class="row">
    <div class="col-12 ">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
            <h4 class="mb-sm-0 font-size-18">Update GST</h4>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                
                <form action="<?=base_url()?>Madmin/gst_update" method="post" enctype="multipart/form-data" id="form2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 col-md-12">
                                <label for="formrow-firstname-input" class="form-label">GST Label(%)</label>
                                <input type="text" class="form-control" name="gst_label" id="gst_label1" onkeyup="gstcal1(this.value)" placeholder="GST Value" required class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g, '');this.value=this.value.replace(/(\..*)\./g, '$1');" value="<?= $gst_data[0]['gst_label'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <input type="hidden" name="gst_id" class="form-control" value="<?= $gst_data[0]['gst_id'] ?>" readonly required>
                                        <label for="formrow-inputCity" class="form-label">CGST(%)</label>
                                        <input type="text" name="cgst" value="<?= $gst_data[0]['cgst'] ?>" class="form-control" id="cgst1" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="formrow-inputCity" class="form-label">SGST(%)</label>
                                        <input type="text" name="sgst" value="<?= $gst_data[0]['sgst'] ?>"  class="form-control" id="sgst1" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="formrow-inputCity" class="form-label">IGST(%)</label>
                                        <input type="text" name="igst" value="<?= $gst_data[0]['igst'] ?>" class="form-control" id="igst1" readonly>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-md">Update GST</button>
                       
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
   
    <!-- end col -->
    
    
</div>
</div>
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
        