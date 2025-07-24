<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title heading">Add Social Media Accounts</h5>
                    <form action="<?= base_url() ?>admin/save_social_media" method="post">
                        <input type="hidden" name="social_media_tbl_id" value="<?= $list['social_media_tbl_id'] ?>">
                        <div class="row">
                            <div class="form-floating col-md-6 mb-3">
                                <input type="text" name="instagram" value="<?= $list['instagram'] ?? '' ?>"
                                    class="form-control " id="instagram" placeholder="Enter Instagram Username">

                                <label for="mobile_number"> <i class="fab fa-instagram"></i> Instagram </label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <input type="text" name="facebook" value="<?= $list['facebook'] ?? '' ?>"
                                    class="form-control " id="facebook" placeholder="Enter Facebook Username">

                                <label for="mobile_number"> <i class="fab fa-facebook"></i> Facebook </label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <input type="text" name="whatsapp" value="<?= $list['whatsapp'] ?? '' ?>"
                                    class="form-control " id="whatsapp" placeholder="Enter Whatsapp Number">
                                <label for="whatsapp"> <i class="fab fa-whatsapp"></i> Whatsapp </label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <input type="text" name="telegram" value="<?= $list['telegram'] ?? '' ?>"
                                    class="form-control " id="telegram" placeholder="Enter Telegram Username">
                                <label for="telegram"> <i class="fab fa-telegram"></i> Telegram </label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <input type="text" name="contact_no" value="<?= $list['contact_no'] ?? '' ?>"
                                    class="form-control " id="contact_no" placeholder="Enter Contact Number">
                                <label for="contact_no"> <i class="fas fa-phone me-1"></i>Contact No </label>
                            </div>
                            <div class="form-floating col-md-6 mb-3">
                                <input type="email" name="email" value="<?= $list['email'] ?? '' ?>"
                                    class="form-control " id="email" placeholder="Enter Email Address">
                                <label for="email"> <i class="fas fa-envelope"></i> Email </label>
                            </div>
                            <div class="form-floating col-md-12 mb-3">
                                <textarea name="address" id="address"
                                    class="form-control"><?= $list['address'] ?? '' ?></textarea>
                                <label for="address"> <i class="fas fa-map-marker-alt"></i> Address </label>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-md">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>