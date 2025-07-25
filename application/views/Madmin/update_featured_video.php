<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>Madmin/update_home_featured_video" method="post" enctype="multipart/form-data" id="form1">
                       <input type="hidden" name="thumbnail_tbl_id" value="<?= $details[0]['thumbnail_tbl_id'] ?>">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Thumbnail Image</label>
                                    <input type="file" name="thumbnail_image" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <img src="<?= base_url() ?>uploads/<?= $details[0]['thumbnail_image'] ?>" style="height:200px;width:200px;object-fit:cover" alt="">
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Thumbnail Video</label>
                                    <input type="file" name="thumbnail_video" class="form-control"  accept="video/mp4,video/x-msvideo,video/x-matroska">
                                </div>
                            </div>
                            <div class="col-lg-3">
                            <video src="<?=base_url()?>uploads/<?=$details[0]['thumbnail_video']?>" controls width="300px" height="300px">
                            </video>
                        </div>

                        </div>  
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Update Featured Video</button>
                        </div>
                    </form>
                    
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>
<script>
    document.getElementById('form1').addEventListener('submit', function(e) {
        var thumbnailImage = document.querySelector('input[name="thumbnail_image"]');
        var thumbnailVideo = document.querySelector('input[name="thumbnail_video"]');

        var imageValid = false;
        var videoValid = false;

        // Validate image file type
        if (thumbnailImage.files.length > 0) {
            var imageFile = thumbnailImage.files[0];
            var imageType = imageFile.type;
            if (imageType.match('image.*')) {
                imageValid = true;
            } else {
                alert("Please upload a valid image file (JPEG, PNG, GIF).");
                e.preventDefault(); // Prevent form submission
                return false;
            }
        }

        // Validate video file type
        if (thumbnailVideo.files.length > 0) {
            var videoFile = thumbnailVideo.files[0];
            var videoType = videoFile.type;
            if (videoType.match('video.*')) {
                videoValid = true;
            } else {
                alert("Please upload a valid video file (MP4, AVI, MKV, etc.).");
                e.preventDefault(); // Prevent form submission
                return false;
            }
        }

        if (!imageValid && !videoValid) {
            alert("Please upload at least one valid file (image or video).");
            e.preventDefault(); // Prevent form submission
            return false;
        }

        return true; // Allow form submission
    });
</script>
