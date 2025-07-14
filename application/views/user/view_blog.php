<?php defined("BASEPATH") or exit("no direct script access allowed"); ?>
<main class="main__content_wrapper">
    <!-- Start breadcrumb section -->
   <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / View Blog</span>
        </div>
    </div>

    <!-- Start blog details section -->
    <section class="blog__details--section section--padding mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog__details--wrapper">
                        <!-- Blog media -->
                        <div class="blog__details--media mb-5">
                            <?php if ($blog_det[0]['blog_type'] == 'Image'): ?>
                                <img src="<?= base_url() ?>uploads/<?= $blog_det[0]['blog_image'] ?>" alt="<?= $blog_det[0]['blog_label'] ?>" class="img-fluid rounded-3 w-100">
                            <?php else: ?>
                                <div class="ratio ratio-16x9">
                                    <video controls class="rounded-3">
                                        <source src="<?= base_url() ?>uploads/<?= $blog_det[0]['blog_image'] ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Blog content -->
                        <div class="blog__details--content">
                            <h1 class="blog__details--title mb-3"><?= $blog_det[0]['blog_label'] ?></h1>
                            <div class="blog__details--meta mb-4">
                                <span class="text-muted"><i class="bi bi-person-fill"></i> <?= $blog_det[0]['blog_by'] ?></span>
                                <span class="text-muted ms-3"><i class="bi bi-calendar"></i> <?= isset($blog_det[0]['entry_time']) ? date('d M Y', $blog_det[0]['entry_time']) : '' ?></span>
                            </div>

                            <div class="blog__details--desc">
                                <?= $blog_det[0]['blog_details'] ?>
                            </div>

                            <!-- Social sharing -->
                            <div class="blog__details--share mt-5 pt-4 border-top">
                                <h5 class="mb-3">Share this post:</h5>
                                <?php print_social_icon(base_url() . 'user/view_blog/' . $blog_det[0]['web_blog_id'], $blog_det[0]['blog_label']); ?>
                            </div>
                        </div>

                        <!-- Comments section -->
                        <?php if (count($blog_comments) > 0): ?>
                        <div class="blog__comments--section mt-5 mb-5 pt-5">
                            <h3 class="mb-4">Comments (<?= count($blog_comments) ?>)</h3>
                            <div class="blog__comments--list">
                                <?php foreach ($blog_comments as $row): ?>
                                <div class="blog__comment--item mb-4">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5 class="mb-0"><i class="bi bi-person-circle me-2"></i> <?= $row['author'] ?></h5>
                                                <small class="text-muted"><?= date('d M Y', $row['entry_time']) ?></small>
                                            </div>
                                            <p class="mb-0"><?= $row['comment'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Comment form -->
                    <div class="blog__comment--form  mt-5 mb-5" style="top: 20px;">
                        <div class="card shadow-sm border-0">
                            <div class="card-body p-4">
                                <h3 class="mb-4">Leave a Comment</h3>
                                <form action="<?= base_url() ?>user/save_blog_comment" method="post">
                                    <input type="hidden" name="blog_id" value="<?= $blog_det[0]['web_blog_id'] ?>">
                                    <div class="mb-3">
                                        <label for="author" class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="author" name="author" value="<?= (isset($user_det['firstname'])) ? $user_det['firstname'] . ' ' . $user_det['lastname'] : '' ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="mobile" name="mobile" value="<?= (isset($user_det['mobile'])) ? $user_det['mobile'] : '' ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Comment <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related blogs -->
    <section class="related__blogs--section bg-light py-5">
        <div class="container">
            <div class="section__heading text-center mb-5">
                <h2 class="section__heading--title">Other Blogs</h2>
                <p class="section__heading--desc">Discover more interesting articles</p>
            </div>
            <div class="row g-4">
                <?php if (count($other_blogs) > 0): ?>
                    <?php foreach (array_slice($other_blogs, 0, 3) as $row): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog__card card h-100 border-0 shadow-sm">
                            <div class="blog__card--img overflow-hidden">
                                <a href="<?= base_url() ?>user/view_blog/<?= $row['web_blog_id'] ?>">
                                    <?php if ($row['blog_type'] == "Image"): ?>
                                        <img src="<?= base_url() ?>uploads/<?= $row['blog_image'] ?>" alt="<?= $row['blog_label'] ?>" class="img-fluid w-100">
                                    <?php else: ?>
                                        <div class="ratio ratio-16x9">
                                            <video class="w-100">
                                                <source src="<?= base_url() ?>uploads/<?= $row['blog_image'] ?>" type="video/mp4">
                                            </video>
                                        </div>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="blog__card--meta mb-2">
                                    <span class="text-muted small"><?= $row['blog_by'] ?></span>
                                </div>
                                <h3 class="blog__card--title h5">
                                    <a href="<?= base_url() ?>user/view_blog/<?= $row['web_blog_id'] ?>">
                                        <?= $row['blog_label'] ?>
                                    </a>
                                </h3>
                                <p class="blog__card--desc mb-3">
                                    <?= strlen(strip_tags($row['blog_details'])) > 100 ? substr(strip_tags($row['blog_details']), 0, 100) . '...' : strip_tags($row['blog_details']) ?>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <a href="<?= base_url() ?>sameer/view_blog/<?= $row['web_blog_id'] ?>" class="btn btn-link ps-0">
                                    Read More <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center py-5">
                        <p>No other blogs available at the moment.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
