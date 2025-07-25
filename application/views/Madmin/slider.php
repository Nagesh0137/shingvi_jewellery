<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18"><?= (isset($slider_det[0])) ? 'Update Slider Image (1920 x 660)':'Manage Slider Images' ?></h4>
            </div>
        </div>
        <?php
        if(isset($slider_det[0])){
            ?>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <form class="row gy-2 gx-3 align-items-center" action="<?=base_url()?>Madmin/update_slider" method="post" enctype="multipart/form-data" onsubmit="return validateImage()">
                        <input type="hidden" name="web_slider_id" value="<?=$slider_det[0]['web_slider_id']?>">
                        <div class="col-sm-auto col-md-5">
                            <label class="form-label" for="autoSizingInputGroup">Enter URL</label>
                            <div class="input-group">
                                <input type="text" name="web_slider_url" class="form-control" placeholder="Enter URL" value="<?=$slider_det[0]['web_slider_url']?>">
                            </div>
                        </div>
                        <!--<div class="col-sm-auto col-md-3">-->
                        <!--    <label class="form-label" for="autoSizingInput">Select new image</label>-->
                        <!--    <input type="file" name="web_slider_image" id="web_slider_image" class="form-control" accept="image/*" onchange="checkImageSize()">-->
                        <!--</div>-->
                        <div class="col-sm-auto col-md-6">
                            <label class="form-label" for="web_slider_image">Select image</label>
                            <input type="file" name="web_slider_image" id="web_slider_image" class="form-control" accept="image/*" onchange="processImage(event)">
                            <span id="imageError" style="color: red;"></span> <!-- Error message for invalid image -->
                        </div>
                        <div class="col-sm-auto col-md-6">
                            <p>Preview:</p>
                            <img id="imagePreview" src="" style="max-width: 100%; height: auto; display: none; border: 1px solid #ccc; padding: 5px;">
                        </div>
                        <div class="col-sm-auto col-md-3">
                            <img src="<?=base_url()?>uploads/<?=$slider_det[0]['web_slider_image']?>" width="200px">
                        </div>
                        <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary w-md" id="submitButton">Update Slider</button>
                        </div>
                    </form>
 <script>
function processImage(event) {
    let fileInput = event.target;
    let file = fileInput.files[0];
    let errorMessage = document.getElementById("imageError");
    let imagePreview = document.getElementById("imagePreview");

    if (!file || !file.type.startsWith("image/")) {
        errorMessage.textContent = "Please select a valid image file.";
        return;
    }

    let reader = new FileReader();
    reader.readAsDataURL(file);

    reader.onload = function (e) {
        let img = new Image();
        img.src = e.target.result;

        img.onload = function () {
            let canvas = document.createElement("canvas");
            let ctx = canvas.getContext("2d");

            // **Set Fixed Dimensions to 1366x490**
            let width = 1366;
            let height = 490;

            canvas.width = width;
            canvas.height = height;
            ctx.drawImage(img, 0, 0, width, height);

            // **Convert to Resized Image Without Compression**
            canvas.toBlob(function (blob) {
                let resizedFile = new File([blob], file.name, {
                    type: file.type, // Keep the original format (JPEG, PNG, etc.)
                    lastModified: Date.now(),
                });

                let dataTransfer = new DataTransfer();
                dataTransfer.items.add(resizedFile);
                fileInput.files = dataTransfer.files;

                // **Show Preview**
                let resizedImageURL = URL.createObjectURL(blob);
                imagePreview.src = resizedImageURL;
                imagePreview.style.display = "block";

                errorMessage.textContent = "Image resized to 1366x490 without quality loss!";
                errorMessage.style.color = "green";
            }, file.type, 1.0); // **Keep Quality at 100% (No Compression)**
        };
    };
}

</script>
                    <script>
                    function checkImageSize() {
                        const fileInput = document.getElementById('web_slider_image');
                        const file = fileInput.files[0];
                        const errorMessage = document.getElementById('imageError');
                        const submitButton = document.getElementById('submitButton');

                        if (file) {
                            const img = new Image();
                            img.onload = function() {
                                if (img.width !== 1366 || img.height !== 490) {
                                    errorMessage.textContent = 'Image must be exactly 1366px x 490px.';
                                    submitButton.disabled = true;  // Disable submit button if invalid
                                    fileInput.value = '';  // Clear the file input
                                } else {
                                    errorMessage.textContent = '';  // Clear error if valid
                                    submitButton.disabled = false; // Enable submit button
                                }
                            };
                            img.src = URL.createObjectURL(file);
                        }
                    }

                    </script>

                    
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <?php
        }else{
            ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form class="row gy-2 gx-3 align-items-center" action="<?=base_url()?>Madmin/add_slider" method="post" enctype="multipart/form-data">
                            <div class="col-sm-auto col-md-6">
                                <label class="form-label" for="autoSizingInputGroup">Enter URL</label>
                                <div class="input-group">
                                    <input type="text" name="web_slider_url" class="form-control" placeholder="Enter URL">
                                </div>
                            </div>
                            <!--<div class="col-sm-auto col-md-6">-->
                            <!--    <label class="form-label" for="autoSizingInput">Select image</label>-->
                            <!--    <input type="file" name="web_slider_image" onchange="compressImage(event)" id="web_slider_image" class="form-control">-->
                            <!--    <span id="imageError" style="color: red;"></span> -->
                            <!--</div>-->
                            <div class="col-sm-auto col-md-6">
                                <label class="form-label" for="web_slider_image">Select image</label>
                                <input type="file" name="web_slider_image" id="web_slider_image" class="form-control" accept="image/*" onchange="processImage(event)">
                                <span id="imageError" style="color: red;"></span> <!-- Error message for invalid image -->
                            </div>
                            <div class="col-sm-auto col-md-6">
                                <p>Preview:</p>
                                <img id="imagePreview" src="" style="max-width: 100%; height: auto; display: none; border: 1px solid #ccc; padding: 5px;">
                            </div>
                            <div class="col-sm-auto">
                                <button type="submit" class="btn btn-primary w-md" id="submitButton">Add In Slider</button>
                            </div>
                        </form>
                      
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <script>
function processImage(event) {
    let fileInput = event.target;
    let file = fileInput.files[0];
    let errorMessage = document.getElementById("imageError");
    let imagePreview = document.getElementById("imagePreview");

    if (!file || !file.type.startsWith("image/")) {
        errorMessage.textContent = "Please select a valid image file.";
        return;
    }

    let reader = new FileReader();
    reader.readAsDataURL(file);

    reader.onload = function (e) {
        let img = new Image();
        img.src = e.target.result;

        img.onload = function () {
            let canvas = document.createElement("canvas");
            let ctx = canvas.getContext("2d");

            // **Set Fixed Dimensions to 1366x490**
            let width = 1366;
            let height = 490;

            canvas.width = width;
            canvas.height = height;
            ctx.drawImage(img, 0, 0, width, height);

            // **Convert to Resized Image Without Compression**
            canvas.toBlob(function (blob) {
                let resizedFile = new File([blob], file.name, {
                    type: file.type, // Keep the original format (JPEG, PNG, etc.)
                    lastModified: Date.now(),
                });

                let dataTransfer = new DataTransfer();
                dataTransfer.items.add(resizedFile);
                fileInput.files = dataTransfer.files;

                // **Show Preview**
                let resizedImageURL = URL.createObjectURL(blob);
                imagePreview.src = resizedImageURL;
                imagePreview.style.display = "block";

                errorMessage.textContent = "Image resized to 1366x490 without quality loss!";
                errorMessage.style.color = "green";
            }, file.type, 1.0); // **Keep Quality at 100% (No Compression)**
        };
    };
}

</script>
            <script>
             function compressImage(event) {
        let fileInput = event.target;
        let file = fileInput.files[0];
        let errorMessage = document.getElementById("imageError");

        if (!file || !file.type.startsWith("image/")) {
            errorMessage.textContent = "Please select a valid image file.";
            return;
        }

        let reader = new FileReader();
        reader.readAsDataURL(file);

        reader.onload = function (e) {
            let img = new Image();
            img.src = e.target.result;

            img.onload = function () {
                let canvas = document.createElement("canvas");
                let ctx = canvas.getContext("2d");

                // **Set Fixed Dimensions to 1366x490**
                let width = 1366;
                let height = 490;

                canvas.width = width;
                canvas.height = height;
                ctx.drawImage(img, 0, 0, width, height);

                // **Convert to Compressed Image**
                canvas.toBlob(function (blob) {
                    let compressedFile = new File([blob], file.name, {
                        type: "image/jpeg",
                        lastModified: Date.now(),
                    });

                    let dataTransfer = new DataTransfer();
                    dataTransfer.items.add(compressedFile);
                    fileInput.files = dataTransfer.files;

                    errorMessage.textContent = "Image resized to 1366x490 and compressed successfully!";
                    errorMessage.style.color = "green";
                }, "image/jpeg", 0.7); // 70% Quality
            };
        };
    }
        </script>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 text-center table-bordered">
                            <thead>
                                <tr>
                                    <th style="color: black;">Action</th>
                                    <th style="color: black;">Sn</th>
                                    <th style="color: black;">Image</th>
                                    <th style="color: black;">Url</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i=0;
                                foreach($slider as $row)
                                {
                                    ?>
                                    <tr>
                                        <td style="font-size: 20px;" class="d-flex align-items-center">
                                            <a href="<?=base_url()?>Madmin/edit_slider/<?=$row['web_slider_id']?>" class="btn btn-outline-primary py-1 px-2"><i class="fa fa-edit"></i></a> &nbsp;
                                            <a href="<?=base_url()?>Madmin/delete_slider/<?=$row['web_slider_id']?>" class="btn btn-outline-danger py-1 px-2" onclick="return confirm('Are You Sure To Delete These Record ?..')"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <td><?=++$i?></td>	
                                        <td>
                                            <a href="<?=base_url()?>uploads/<?=$row['web_slider_image']?>" target="__blank">
                                                <img class="img-thumbnail" alt="200x200" width="200" src="<?=base_url()?>uploads/<?=$row['web_slider_image']?>" data-holder-rendered="true">
                                            </a>
                                        </td>	
                                        <td style="width:10%">
                                            <a href="<?=$row['web_slider_url']?>" target="__blank">
                                                <?=$row['web_slider_url']?>
                                            </a>
                                        </td>	
                                    </tr>
                                    <?php
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
</div>