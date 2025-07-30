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
                <h4 class="mb-sm-0 font-size-18">Update Web History Details</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">

                    <form action="<?= base_url() ?>Madmin/history_details_update" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="history_id" id="history_id" value="<?= $history_data[0]['history_id'] ?>" class="form-control" required>
                        <div class="row">

                            <div class="col-xxl-4 col-lg-4">
                                <label for="" class="form-label">History Title</label>

                                <input type="text" name="history_title" id="history_title" class="form-control" value="<?= $history_data[0]['history_title'] ?>" required>
                            </div>

                            <div class="col-xxl-4 col-lg-4">
                                <label for="" class="form-label">History Image</label>
                                <input type="file" name="history_image" class="form-control">
                                <input type="hidden" name="history_image1" id="history_image" class="form-control" value="<?= $history_data[0]['history_image'] ?>">
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url() ?>uploads/<?= $history_data[0]['history_image'] ?>" alt="" style="height:100px;width:100px;object-fit:cover" class="my-2">
                            </div>
                            <div class="col-xxl-12 col-lg-12">
                                <label for="" class="form-label">History Desc</label>
                                <textarea name="history_desc" id="ckeditor" class="form-control"><?= $history_data[0]['history_desc'] ?></textarea>
                            </div>
                            <div class="col-md-12 text-right mt-1">
                                <button class="btn btn-primary">Update History Details</button>

                            </div>
                        </div>
                    </form>
                </div>


                <!-- end card body -->
            </div><!--end card-->
        </div><!--end col-->

    </div><!--end row-->


</div>
<style type="text/css">
    #form2 {
        display: none;
    }
</style>
<script type="text/javascript">
    function updateownerdesk(history_id, history_title, history_desc, history_image) {
        var iim = "<img src='<?= base_url(); ?>uploads/" + history_image + "' class='mt-2' style='height:100px;width:100px;'>";
        var textt = "<textarea id='ckeditor' class='form-control' name='history_desc' required rows='5' id='history_desc'>" + history_desc + "</textarea>"
        $('#history_id').val(history_id);
        $('#history_title').val(history_title);
        $('#textt').html(textt);
        $('#history_image').val(history_image);
        $('#img').html(iim);
        $('#form1').css('display', 'none');
        $('#form2').css('display', 'inline-block');
    }

    function cancel() {
        $('#form1').css('display', 'inline-block');
        $('#form2').css('display', 'none');

    }
</script>