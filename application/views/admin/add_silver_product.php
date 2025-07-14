<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4"
                style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Add Silver Product</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>admin/add_new_silver_product" method="post"
                        enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-3 mt-2">
                                <b class="form-label">Category:</b>
                                <select name="cat_id" onchange="group_name(this)" id="category_id" class="form-select"
                                    required>
                                    <option value="">Category</option>
                                    <?php foreach ($category as $value) {
                                        if ($value['category_name'] == 'Silver') {
                                            ?>
                                            <option value="<?= $value['category_id']; ?>"><?= $value['category_name']; ?>
                                            </option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-3 mt-2">
                                <b class="form-label"> Group </b>
                                <select name="group_id" class="form-select" onchange="getSelectedGroup(this)"
                                    id="group_id" required>
                                    <option value=""> Group List </option>
                                </select>
                            </div>
                            <script>
                                function getSelectedGroup(selectElement) {
                                    const selectedText = selectElement.options[selectElement.selectedIndex].text;
                                    const chartDiv = document.getElementById('chartUploadDiv');

                                    if (selectedText === 'FINGER RING') {
                                        chartDiv.style.display = 'block';
                                        chartSizeDiv.style.display = 'block';
                                    } else {
                                        chartDiv.style.display = 'none';
                                        chartSizeDiv.style.display = 'none';
                                    }
                                }
                            </script>
                            <div class="col-md-3 mt-2 d-none">
                                <b class="form-label">Filter Title</b>
                                <select name="filter_title" class="form-select" onchange="filtername(this)"
                                    id="filter_title_id">
                                    <option value="">Filter Title List </option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-2 d-none">
                                <b class="form-label">Filter Name </b>
                                <select name="filter_name" class="form-select" id="filter_name_id">
                                    <option value="">Filter Name List </option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-2">
                                <b class="form-label">Billing Type</b>
                                <select name="billing_type" class="form-select" onchange="billingtype(this)"
                                    id="billing_type" required>
                                    <option value="">Choose Type</option>
                                    <option value="manual">Manual</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-2">
                                <b class="form-label">Purity </b>
                                <select name="purity" class="form-select" onchange="silverratefecth(this)" id="purity"
                                    required>
                                    <option value="">Choose purity</option>
                                    <option value="50">50 %</option>
                                    <option value="70">70 %</option>
                                    <option value="85">85 %</option>
                                    <option value="92.5">92.5 %</option>
                                    <option value="100">100 %</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <b class="form-label">Product ID</b>
                                <input type="text" name="product_id" required class="form-control"
                                    placeholder="Enter Product ID...">
                            </div>
                            <div class="col-md-3 mt-2">
                                <b class="form-label">Available Qty</b>
                                <input type="number" name="product_qty" required class="form-control"
                                    placeholder="Enter Product ID..." value="0">
                            </div>
                            <div class="col-md-3 mt-2">
                                <b class="form-label">For Whom</b>
                                <select name="age_category" class="form-select" required>
                                    <option value="" disable>Choose</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="kids">Kids</option>
                                </select>


                            </div>

                            <div class="col-md-7 mt-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b class="form-label">Enter Product name</b>
                                        <input type="text" name="product_name" required class="form-control"
                                            placeholder="Enter Product name">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label class="form-label">Select Product Images <span
                                                class="text-danger">(3000px X 3000px)</span></label>
                                        <input type="file" name="product_image[]" id="productImage" required
                                            class="form-control" multiple accept="image/*">
                                    </div>

                                    <div class="col-md-12 mt-3" id="imagePreview"></div>
                                    <div class="col-md-12 mt-3 " style="display:none" id="chartUploadDiv">
                                        <label class="form-label">Upload chart table <span class="text-danger">(500px X
                                                500px)</span> </label>
                                        <input type="file" name="sizeChart" id="chartImage" required
                                            class="form-control" accept="image/*">
                                    </div>
                                    <div class="col-md-6 mt-3 " style="display:none" id="chartSizeDiv">
                                        <label class="form-label">select Ring Size </label>

                                        <select id="ring-size" name="ring_size[]" class="form-select" multiple required>
                                            <option value="" disable>Choose</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <script>
                                        $(document).ready(function () {
                                            $('#ring-size').select2({
                                                placeholder: 'Choose ring sizes',
                                                allowClear: true
                                            });
                                        });
                                    </script>

                                    <script>
                                        document.getElementById('productImage').addEventListener('change', function (event) {
                                            let previewContainer = document.getElementById('imagePreview');
                                            previewContainer.innerHTML = ''; // Clear previous images

                                            let files = event.target.files;
                                            if (files.length > 0) {
                                                for (let i = 0; i < files.length; i++) {
                                                    let file = files[i];

                                                    if (file.type.startsWith('image/')) { // Check if the file is an image
                                                        let reader = new FileReader();
                                                        reader.onload = function (e) {
                                                            let imgElement = document.createElement('img');
                                                            imgElement.src = e.target.result;
                                                            imgElement.style.width = '100px';
                                                            imgElement.style.margin = '5px';
                                                            imgElement.style.borderRadius = '5px';
                                                            imgElement.style.boxShadow = '0 0 5px rgba(0,0,0,0.2)';
                                                            previewContainer.appendChild(imgElement);
                                                        };
                                                        reader.readAsDataURL(file);
                                                    }
                                                }
                                            }
                                        });
                                    </script>
                                    <div class="col-md-12 mt-4">
                                        <b class="form-label">Enter Product Details</b>
                                        <textarea name="product_details" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mt-3" id="ratechart"
                                style="border-right: 1px solid black;border-left: 1px solid black;border-top: 1px solid black;border-bottom: 1px solid black;padding-top: 15px;padding-bottom: 15px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b class="">Todays Rate(10g)</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="silver_rate" id="silver_rate_fetch"
                                                class="bg-danger disabled chartinput" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">Gross Weight</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="cross_weight" onkeyup="net_weight_check()"
                                                id="cross_weight" class="chartinput" value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan"><i class="fa fa-balance-scale"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">Other Weight</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="other_weight" onkeyup="net_weight_check()"
                                                id="other_weight" class="chartinput" value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan"><i class="fa fa-balance-scale"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 pt-2 pb-2 bg-warning" style="border-top: 1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color: black;line-height: 25px;vertical-align: middle;">Net
                                            Weight:</b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="net_weight" id="net_weight"
                                                class="bg-danger disabled chartinput" value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                                readonly>
                                            <span class="chartspan"><i class="fa fa-balance-scale"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <b class="">Metal Amount</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="metal_amt" id="metal_amt" class="chartinput"
                                                value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                                required>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">Labour Amt(p/g)</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="labour_char" onkeyup="net_weight_check(this)"
                                                id="labour_char" class="chartinput" value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">Labour Amount</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="labour_amt" id="labour_amt"
                                                class="bg-danger disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">Wastage Per(%)</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="wastage_per" onkeyup="net_weight_check(this)"
                                                id="wastage_per" class="chartinput" value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan">%</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">Wastage Amount</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="wastage_amt" id="wastage_amt"
                                                class="bg-danger disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="other_data">
                                        <table class="w-100">
                                            <thead>
                                                <tr>
                                                    <th>Other Desc</th>
                                                    <th>Other Amount</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="add_tbody">
                                                <tr>
                                                    <td>
                                                        <input type="text" name="other_desc_det[]" class="chartinput"
                                                            placeholder="Other Desc...">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="other_amt_det[]"
                                                            class="chartinput other_amt_class"
                                                            onkeyup="get_total_other_amt()" placeholder="Other Amt..."
                                                            value="0">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="" onclick="add_row()"><i
                                                                class="fa fa-plus"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- <div class="row">
                                            <div class="col-md-6 pt-0 pb-0 pr-0 pl-1">
                                                <label>Other Desc</label>
                                            </div>
                                            <div class="col-md-5 pt-0 pb-0 pr-0 pl-1">
                                            <label>Amount</label>
                                            <input type="text" name="other_amt" onkeyup="net_weight_check()" id="other_amt" class="chartinput" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            </div>
                                            <div class="col-md-1 pt-0 pb-0 pr-0 pl-1"><br><button type="button" class="mt-1"><i class="fa fa-plus"></i></button></div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row p-3">
                                            <div class="col-md-6 text-right">
                                                <span class="d-inline-block mt-1" style="color: black;">Other Total
                                                    Amount</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="other_amt" onkeyup="net_weight_check()"
                                                    id="other_amt" class="chartinput" value="0"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                                    value="0">
                                                <span class="chartspan">₹</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">GST</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <select name="gst_per" id="gst_per" class="chartinput"
                                                onchange="net_weight_check()">
                                                <option value="0">0</option>
                                                <?php foreach ($gst as $value) { ?>
                                                    <option value="<?= $value['gst_label']; ?>"><?= $value['gst_label']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <!-- <input type="text"  onkeyup="" id="gst_per"  value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> -->
                                            <span class="chartspan">%</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">GST Amount</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="gst_amt" id="gst_amt"
                                                class="bg-danger disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 pt-2 pb-2 bg-warning" style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color:black;line-height:25px;vertical-align:middle;">Total Amount:
                                        </b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="manual_total_amt" id="total_amt"
                                                onkeyup="net_weight_check()" class="bg-danger disabled chartinput"
                                                value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1 pt-2 pb-2 bg-warning" style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color:black;line-height:25px;vertical-align:middle;">Discount Amount:
                                        </b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="manual_total_discount_amt"
                                                onkeyup="net_weight_check()" id="manual_total_discount_amt" value="0"
                                                class="bg-success">
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1 pt-2 pb-2 bg-warning" style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color:black;line-height:25px;vertical-align:middle;">Final Total
                                            Amount: </b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="manual_final_amount_after_discount"
                                                id="manual_final_amount_after_discount" class="bg-info" value="0"
                                                readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mt-3" id="fixedbilling"
                                style="border-right: 1px solid black;border-left: 1px solid black;border-top: 1px solid black;border-bottom: 1px solid black;padding-top: 15px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b class="">Todays Rate(10g)</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="silver_rate1" id="silver_rate_fetch1"
                                                class="bg-danger disabled chartinput" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <b class="">Amount</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="fixed_amount" id="fixed_amount"
                                                onkeyup="fixed_billing_cal()" class="chartinput" value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">GST(%)</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <select name="fixed_gst_per" id="fixed_gst_per" class="chartinput"
                                                onchange="fixed_billing_cal()">
                                                <option value="0">0</option>
                                                <?php foreach ($gst as $value) { ?>
                                                    <option value="<?= $value['gst_label']; ?>"><?= $value['gst_label']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <span class="chartspan">%</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b class="">GST Amt</b>
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="fixed_gst_amt" id="fixed_gst_amt"
                                                onkeyup="fixed_billing_cal()" class="bg-danger disabled chartinput"
                                                value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 pt-2 pb-2 bg-warning" style="border-top: 1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color: black;line-height: 25px;vertical-align: middle;">Net
                                            Weight:</b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="net_weight" id="net_weight"
                                                class="bg-danger disabled chartinput" value="0"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <span class="chartspan"><i class="fa fa-balance-scale"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1 pt-2 pb-2 bg-warning" style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color:black;line-height:25px;vertical-align:middle;">Total Amount:
                                        </b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="fixed_total_amt" id="fixed_total_amt"
                                                class="bg-danger disabled chartinput" value="0" readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1 pt-2 pb-2 bg-warning" style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color:black;line-height:25px;vertical-align:middle;">Discount Amount:
                                        </b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="total_discount_amt" onkeyup="fixed_billing_cal()"
                                                id="total_discount_amt" value="0" class="bg-success chartinput">
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1 pt-2 pb-2 bg-warning" style="border-top:1px solid grey;">
                                    <div class="col-md-6 text-right"><b class=""
                                            style="color:black;line-height:25px;vertical-align:middle;">Final Total
                                            Amount: </b></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p-0 m-0">
                                            <input type="text" name="final_amount_after_discount"
                                                id="final_amount_after_discount" class="bg-info chartinput" value="0"
                                                readonly>
                                            <span class="chartspan">₹</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right mt-3 pr-0">
                                <button class="btn btn-primary" type="submit">SAVE PRODUCT</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<br>
<br>
<br>
<br>
<style type="text/css">
    #ratechart {
        display: none;
    }
</style>
<style type="text/css">
    .chartspan {
        position: absolute;
        right: 0px;
        background-color: grey;
        display: inline-block;
        height: 25px;
        line-height: 25px;
        vertical-align: middle;
        width: 25px;
        text-align: center;
        border-radius: 1px;
        color: black;
    }

    .chartinput {
        width: 100%;
        text-align: right;
        background-color: lavender;
        border: 1px solid black;
        height: 25px;
        padding-right: 28px;
        color: black;
    }

    select:focus,
    input:focus,
    textarea:focus {
        border: 2px solid red;
    }
</style>
<script type="text/javascript">
    function silverratefecth(purity) {
        var billing_type = $('#billing_type').val();
        var purity1 = purity.value;
        if (purity1 == "") {
            $('#silver_rate_fetch').val('');
            $('#ratechart').css('display', 'none');
            $('#cross_weight').val('0');
            $('#other_weight').val('0');
            $('#net_weight').val('0');
            $('#labour_char').val('0');
            $('#labour_amt').val('0');
            $('#wastage_per').val('0');
            $('#wastage_amt').val('0');
            $('#other_amt').val('0');
            $('#gst_per').val('0');
            $('#gst_amt').val('0');
            $('#total_amt').val('0');
        }
        $.ajax({
            url: "<?= base_url() ?>admin/silverratefecth",
            type: 'POST',
            data: { purity_id: purity.value },
            dataType: 'json'
        }).done(function (res) {
            var opt = "";
            $.each(res, function (key, val) {
                if (billing_type == 'manual') {
                    $('#silver_rate_fetch').val(val);
                    $('#ratechart').css('display', 'inline-block');
                    $('#fixedbilling').css('display', 'none');
                    $('#cross_weight').val('0');
                    $('#other_weight').val('0');
                    $('#net_weight').val('0');
                    $('#labour_char').val('0');
                    $('#labour_amt').val('0');
                    $('#wastage_per').val('0');
                    $('#wastage_amt').val('0');
                    $('#other_amt').val('0');
                    $('#gst_per').val('0');
                    $('#gst_amt').val('0');
                    $('#total_amt').val('0');
                }
                else {
                    $('#silver_rate_fetch1').val(val);
                    $('#ratechart').css('display', 'none');
                    $('#fixedbilling').css('display', 'inline-block');
                    $('#fixed_amount').val('0');
                    $('#fixed_gst_per').val('0');
                    $('#fixed_gst_amt').val('0');
                    $('#fixed_total_amt').val('0');
                }

            });
        });
    }
    function billingtype(type) {
        var typ = type.value;
        if (typ == 'manual') {
            $('#ratechart').css('display', 'inline-block');
            $('#fixedbilling').css('display', 'none');
            $('#cross_weight').val('0');
            $('#other_weight').val('0');
            $('#net_weight').val('0');
            $('#labour_char').val('0');
            $('#labour_amt').val('0');
            $('#wastage_per').val('0');
            $('#wastage_amt').val('0');
            $('#other_amt').val('0');
            $('#gst_per').val('0');
            $('#gst_amt').val('0');
            $('#total_amt').val('0');
        }
        else {
            $('#ratechart').css('display', 'none');
            $('#fixedbilling').css('display', 'inline-block');
            $('#fixed_amount').val('0');
            $('#fixed_gst_per').val('0');
            $('#fixed_gst_amt').val('0');
            $('#fixed_total_amt').val('0');
        }
    }
</script>
<script type="text/javascript">
    function group_name(cat) {
        $.ajax({
            url: "<?= base_url() ?>admin/group_name_fetch",
            type: 'POST',
            data: { cat_id: cat.value },
            dataType: 'json'
        }).done(function (res) {
            var opt = "<option value=''>Choose Group</option>";
            $.each(res, function (key, val) {
                opt += "<option value='" + val.product_group_id + "'>" + val.product_group_name + "</option>";
            });
            $("#group_id").html(opt);
        });
    }
    function filtertitle(group) {
        var cat = $('#category_id').val();
        $.ajax({
            url: "<?= base_url() ?>admin/s_filter_title_fetch",
            type: 'POST',
            data: { cat_id: cat, group_id: group.value },
            dataType: 'json'
        }).done(function (res) {
            var opt = "<option value=''>Choose Filter Title</option>";
            opt = "<option value='none'>None</option>";
            $.each(res, function (key, val) {
                opt += "<option value='" + val.filter_title_id + "'>" + val.filter_title + "</option>";
            });
            $("#filter_title_id").html(opt);
        });
    }
    function filtername(title) {
        var cat = $('#category_id').val();
        var group_id1 = $('#group_id').val();
        $.ajax({
            url: "<?= base_url() ?>admin/s_filter_name_fetch",
            type: 'POST',
            data: { cat_id: cat, group_id: group_id1, filter_tit_id: title.value },
            dataType: 'json'
        }).done(function (res) {
            var opt = "<option value=''>Filter Name</option>";
            opt = "<option value='none'>None</option>";
            $.each(res, function (key, val) {
                opt += "<option value='" + val.filter_name_id + "'>" + val.filter_name + "</option>";
            });
            $("#filter_name_id").html(opt);
        });
    }
</script>
<script type="text/javascript">
    function net_weight_check(a = "no") {
        var cross_weight1 = $('#cross_weight').val();
        var other_weight1 = $('#other_weight').val();
        var silver_rate_fetch1 = $('#silver_rate_fetch').val();
        var net_weight_cal = (Number(cross_weight1) - Number(other_weight1)).toFixed(2);
        $('#net_weight').val(net_weight_cal);
        var metal_amt1 = (Number(silver_rate_fetch1) / 10) * net_weight_cal;
        var metal_amt2 = metal_amt1.toFixed(2);
        var metal_amt3 = call1(metal_amt2);
        $('#metal_amt').val(metal_amt3);
        if (a != "no") {
            if (a.id == 'labour_char' && a.value > 0) {
                $('#wastage_per').val('0');
                $('#wastage_amt').val('0');
            }
            if (a.id == 'wastage_per' && a.value > 0) {
                $('#labour_char').val('0');
                $('#labour_amt').val('0');
            }
        }
        labour_char_cal();
        wastage_per_cal();
        gst();
    }
    function call1(num) {
        var aa = num.toString().split(".")[0];
        var ab = num.toString().split(".")[1];
        if (ab >= 1) {
            num = parseInt(num) + 1;
        }
        else {
            num = parseInt(num);
        }
        return num;
    }
    function labour_char_cal() {
        var labour_char1 = $('#labour_char').val();
        var nwt = $('#net_weight').val();
        var ntot = Number(nwt) * Number(labour_char1).toFixed(3);
        var labour_char_cal2 = call1(ntot);
        $('#labour_amt').val(labour_char_cal2);
    }
    function wastage_per_cal() {
        var labour_char1 = $('#labour_char').val();
        var wastage_per1 = $('#wastage_per').val();
        var metal_amt1 = $('#metal_amt').val();
        var wastage_per_cal1 = ((metal_amt1 * wastage_per1 / 100)).toFixed(2);
        var wastage_per_cal2 = call1(wastage_per_cal1);
        $('#wastage_amt').val(wastage_per_cal2);
    }
    function gst() {
        var labour_amt1 = $('#labour_amt').val();
        var wastage_amt1 = $('#wastage_amt').val();
        var other_amt1 = $('#other_amt').val();
        var metal_amt11 = $('#metal_amt').val();
        var gst_per1 = $('#gst_per').val();
        var tot = Number(labour_amt1) + Number(wastage_amt1) + Number(other_amt1) + Number(metal_amt11);
        var gstamt1 = ((tot * gst_per1 / 100)).toFixed(2);
        var gstamt2 = call1(gstamt1);
        $('#gst_amt').val(gstamt2);
        var finaltot = Number(tot) + Number(gstamt2);
        var finaltot1 = call1(finaltot);
        $('#total_amt').val(finaltot1);
        // Get discount amount (if provided)
        var discount_amount = $("#manual_total_discount_amt").val();

        // Only calculate discount if discount amount is provided
        if (discount_amount && discount_amount > 0) {
            var final_total_amount = Number(finaltot1) - Number(discount_amount);
            $('#manual_final_amount_after_discount').val(final_total_amount.toFixed(2));
        } else {
            // If no discount is entered, show the final total without discount
            $('#manual_final_amount_after_discount').val(finaltot1.toFixed(2));
        }
    }
    function fixed_billing_cal() {
        // var fixed_amount11=$('#fixed_amount').val();
        // var fixed_gst_per1=$('#fixed_gst_per').val();
        // var gstamt1=((fixed_amount11*fixed_gst_per1/100)).toFixed(2);
        // var gstamt2=call1(gstamt1);
        // $('#fixed_gst_amt').val(gstamt2);
        // var finaltot=Number(fixed_amount11)+Number(gstamt2);
        // var finaltot1=call1(finaltot);
        var fixed_amount11 = parseFloat($('#fixed_amount').val()) || 0;
        var fixed_gst_per1 = parseFloat($('#fixed_gst_per').val()) || 0;

        // Calculate GST amount
        var gstamt1 = ((fixed_amount11 * fixed_gst_per1) / 100).toFixed(3);
        var gstamt2 = call1(gstamt1);
        $('#fixed_gst_amt').val(gstamt2);

        // Calculate total amount (fixed amount + GST)
        var finaltot = fixed_amount11 + Number(gstamt2);
        var finaltot1 = call1(finaltot);
        $('#fixed_total_amt').val(finaltot1);

        // Get discount amount (if provided, otherwise 0)
        var discount = parseFloat($('#total_discount_amt').val()) || 0;

        // Calculate final amount after discount
        var final_total_amount = finaltot1 - discount;
        $('#final_amount_after_discount').val(final_total_amount.toFixed(2));

        $('#fixed_total_amt').val(finaltot1);
    }

    function add_row() {
        var rr = '<tr><td><input type="text" name="other_desc_det[]" class="chartinput"  placeholder="Other Desc..." ></td><td><input type="text" name="other_amt_det[]" class="chartinput other_amt_class"  placeholder="Other Amt..." onkeyup="get_total_other_amt()"></td><td  onclick="remove_row(this)" class="" style="cursor:pointer;"><div class="bg-danger text-white text-center "><i class="fa fa-close"></i></div></td></tr>';
        $("#add_tbody").append(rr);
    }
    function remove_row(a) {
        a.closest("tr").remove();
        get_total_other_amt();
    }
    function get_total_other_amt() {
        var otc = document.getElementsByClassName('other_amt_class');
        var ttl = 0;
        for (var i = 0; i < otc.length; i++) {
            ttl = Number(ttl) + Number(otc[i].value);
        }
        $("#other_amt").val(ttl);
    }
</script>