<div class="container-fluid">
    <?php
    function nl2br2($string)
    {
        $string = str_replace(array('\r\n', '\r', '\n'), "<br />", $string);
        $string = ltrim($string, "'");
        $string = rtrim($string, "'");
        return $string;
    }
    function br2nl2($text)
    {
        $breaks = array("<br />", "<br>", "<br/>");
        $text = str_ireplace($breaks, "\r\n", $text);
        return $text;
    }
    ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between form-heading p-2 mb-4" style="margin-top:-10px">
                <h4 class="mb-sm-0 font-size-18">Web Owner Desk Details</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <form action="<?= base_url() ?>Madmin/owner_desk_details_update" method="post" enctype="multipart/form-data" id="form2">
                        <input type="hidden" name="owner_desk_id" value="<?= $owner_desk_data[0]['owner_desk_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xxl-12 col-lg-12 mb-2">
                                        <label for="" class="form-label">Owner Desk Title</label>
                                        <input type="text" name="owner_desk_title" id="owner_desk_title" class="form-control" value="<?= $owner_desk_data[0]['owner_desk_title'] ?>" required>
                                    </div>
                                    <div class="col-xxl-12 col-lg-12">
                                        <label for="" class="form-label">Owner Desk Desc</label>
                                        <textarea id="ckeditor" name="owner_desk_desc" rows="6" class="form-control"><?= $owner_desk_data[0]['owner_desk_desc'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-xxl-12 col-lg-12 mb-4">
                                    <label for="" class="form-label">Owner Desk Image</label>
                                    <input type="file" name="owner_desk_image" class="form-control" id="owner_desk_image" accept="image/*">
                                    <input type="hidden" name="owner_desk_image1" value="<?= $owner_desk_data[0]['owner_desk_image'] ?>" id="owner_desk_image" class="form-control">
                                </div>
                                <div class="col-md-12 ">
                                    <img src="<?= base_url() ?>uploads/<?= $owner_desk_data[0]['owner_desk_image'] ?>" alt="" style="height:150px;width:150px;object-fit:cover">
                                </div>
                            </div>

                            <div class="col-md-12 text-center my-3">
                                <button class="btn btn-primary">Update Owner Desk Details</button>

                            </div>
                        </div>
                    </form>


                </div>

                <!-- end card body -->
            </div><!--end card-->
        </div><!--end col-->

    </div><!--end row-->


</div>

<script type="text/javascript">
    function updateownerdesk(owner_desk_id, owner_desk_title, owner_desk_desc, owner_desk_image) {
        var iim = "<img src='<?= base_url(); ?>uploads/" + owner_desk_image + "' style='height:100px;width:100px;'>";
        var textt = "<textarea id='ckeditor' class='form-control' name='owner_desk_desc' required rows='5' id='owner_desk_desc'>" + owner_desk_desc + "</textarea>"
        $('#owner_desk_id').val(owner_desk_id);
        $('#owner_desk_title').val(owner_desk_title);
        $('#textt').html(textt);
        $('#owner_desk_image').val(owner_desk_image);
        $('#img').html(iim);
        $('#form1').css('display', 'none');
        $('#form2').css('display', 'inline-block');
    }

    function cancel() {
        $('#form1').css('display', 'inline-block');
        $('#form2').css('display', 'none');
    }
</script>
<script>
    document.getElementById('owner_desk_image').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!allowedTypes.includes(file.type)) {
                alert('Only JPEG, PNG, and GIF files are allowed.');
                this.value = ''; // Clear the input
            }
        }
    });
</script>