
<main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('<?= base_url() ?>uploads/return_policy_banner.jpeg');height:150px;background-size:cover;background-repeat:no-repeat;background-position:center center">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center mt-4 ">
                            <?php
                            if(count($pages_name)>0){
                                foreach($pages_name as $key=>$row){
                                    ?>
                                    <h1 class="breadcrumb__content--title text-white mb-25"><?= $row['pages_name'] ?></h1>
                                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="<?= base_url() ?>">Home / </a></li>
                                        <li class="breadcrumb__content--menu__items"><span class="text-white"> &nbsp; <?= $row['pages_name'] ?></span></li>
                                    </ul>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <div class="container">
            <div class="row my-5">
                <?php
                if(count($pages_details)>0){
                    foreach($pages_details as $key=>$row){
                        ?>
                        <div class="col-md-12 m-0 shadow-sm my-2 bg-white">
                            <h3 class="mt-2"><?= $row['page_title'] ?></h3>
                            <p class="p-4">
                                <?= $row['page_title_description'] ?>
                            </p>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                    <div class="col-md-12 my-3 bg-white p-4">
                    <h3>Diamond Jewellery</h3>
                    <p>
                    90% of invoice value</p>
                </div>
                <div class="bg-white p-4 col-md-12 my-3">
                    <h3>Gold Jewellery
                    </h3>
                    <p>
                    100% exchange on the current Gold value</p>
                </div>
                <div class="bg-white p-4 col-md-12 my-3">
                    <h3>Bullion Gold</h3>
                    <p>
                    Not Applicable</p>
                </div>
                <div class="bg-white p-4 col-md-12 my-3">
                    <h3>Bullion Silver
                    </h3>
                    <p>
                    Not Applicable</p>
                </div>
                <div class="bg-white p-4 col-md-12 my-3">
                    <h3>Silver jewellery
                    </h3>
                    <p>
                    30% exchange on the invoice value if the product is found in good condition and 20% exchange on the invoice value if the product is in damaged condition
                    </p>
                </div>
                <div class="bg-white p-4 col-md-12 my-3">
                    <h3>Making Charges, stones, excise, VAT and any other taxes
                    </h3>
                    <p>
                    No exchange value
                    </p>
                </div>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </main>
  