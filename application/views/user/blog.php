<main class="main__content_wrapper">
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Blog</span>
        </div>
    </div>

    <!-- Blog Section -->
    <section class="blog__grid--section section--padding">
        <div class="container">
            <div class="section__header text-center mb-5">
                <h2 class="section__title">Latest Articles</h2>
                <p class="section__subtitle">Discover the latest trends and insights in jewelry</p>
            </div>
            
            <div class="blog__grid--wrapper">
                <div class="row">
                    <?php if(count($blogs) > 0): ?>
                        <?php foreach($blogs as $row): ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="blog__card shadow-sm">
                                    <div class="blog__media">
                                        <a href="<?=base_url()?>user/view_blog/<?=$row['web_blog_id']?>" class="blog__media--link">
                                            <?php if($row['blog_type'] == "Image"): ?>
                                                <img src="<?=base_url()?>uploads/<?=$row['blog_image']?>" 
                                                     alt="<?=$row['blog_label']?>" 
                                                     class="blog__image img-fluid">
                                            <?php else: ?>
                                                <div class="blog__video--wrapper">
                                                    <video class="blog__video" controls>
                                                        <source src="<?=base_url()?>uploads/<?=$row['blog_image']?>" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <span class="blog__author">By <?= $row['blog_by'] ?></span>
                                            <span class="blog__date">
                                                <?= isset($row['created_at']) ? date('M d, Y', strtotime($row['created_at'])) : '' ?>
                                            </span>
                                        </div>
                                        <h3 class="blog__title">
                                            <a href="<?=base_url()?>sameer/view_blog/<?=$row['web_blog_id']?>"><?= $row['blog_label'] ?></a>
                                        </h3>
                                        <p class="blog__excerpt">
                                            <?= isset($row['blog_details']) ? word_limiter(strip_tags($row['blog_details']), 20) : '' ?>
                                        </p>
                                        <a href="<?=base_url()?>sameer/view_blog/<?=$row['web_blog_id']?>" class="blog__readmore">Read More <i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default blog items when no blogs exist -->
                        <?php for($i = 0; $i < 3; $i++): ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="blog__card shadow-sm">
                                    <div class="blog__media">
                                        <a href="#" class="blog__media--link">
                                            <img src="https://shingavijewellers.com/uploads/blog-1610352838-41827.jpg" 
                                                 alt="Default blog image" 
                                                 class="blog__image img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <span class="blog__author">By Shingavi Jewellers</span>
                                            <span class="blog__date">Jan 15, 2023</span>
                                        </div>
                                        <h3 class="blog__title">
                                            <a href="#">How Jewelers Can Respond to Volatility in Gold and Silver Prices</a>
                                        </h3>
                                        <p class="blog__excerpt">What do you do when commodity markets swing? This article will explore how jewelry...</p>
                                        <a href="<?=base_url()?>sameer/view_blog/<?=$row['web_blog_id']?>" class="blog__readmore">Read More <i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Blog Styles -->
<style>
    .blog__grid--section {
        padding: 80px 0;
    }

    .section__header {
        margin-bottom: 50px;
    }

    .section__title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 15px;
        position: relative;
    }

    .section__title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #B32726;
    }

    .section__subtitle {
        color: #666;
        font-size: 1.1rem;
    }

    .blog__card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
    }

    .blog__card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .blog__media {
        height: 250px;
        overflow: hidden;
    }

    .blog__image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .blog__card:hover .blog__image {
        transform: scale(1.05);
    }

    .blog__video--wrapper {
        position: relative;
        height: 100%;
    }

    .blog__video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog__content {
        padding: 25px;
    }

    .blog__meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 0.9rem;
        color: #666;
    }

    .blog__title {
        font-size: 1.3rem;
        margin-bottom: 15px;
    }

    .blog__title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .blog__title a:hover {
        color: #B32726;
    }

    .blog__excerpt {
        color: #555;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .blog__readmore {
        color: #B32726;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
    }

    .blog__readmore i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .blog__readmore:hover i {
        transform: translateX(3px);
    }

    @media (max-width: 768px) {
        .section__title {
            font-size: 2rem;
        }

        .blog__media {
            height: 200px;
        }
    }
</style>
