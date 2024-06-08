
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
     


        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="hero-two-slider-area position-relative">
                <div class="swiper hero-two-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide hero-two-slide-item">
                            <div class="container">
                                <div class="row align-items-center position-relative">
                                    <div class="col-12 col-md-6">
                                        <div class="hero-two-slide-content">
                                            <div class="hero-two-slide-text-img"><img src="/assets/images/slider/beauty.png" width="427" height="232" alt="Image"></div>
                                            <h2 class="hero-two-slide-title">MS GLOW</h2>
                                            <p class="hero-two-slide-desc"></p>
                                            <div class="hero-two-slide-meta">
                                                <a class="btn btn-border-primary" href="product.html">BUY NOW</a>
                                                
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="hero-two-slide-thumb">
                                            <img src="/assets/images/slider/msglow1.png" width="690" height="690" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide hero-two-slide-item">
                            <div class="container">
                                <div class="row align-items-center position-relative">
                                    <div class="col-12 col-md-6">
                                        <div class="hero-two-slide-content">
                                            <div class="hero-two-slide-text-img"><img src="/assets/images/slider/text-light.webp" width="427" height="232" alt="Image"></div>
                                            <h2 class="hero-two-slide-title">CLEAN FRESH</h2>
                                            <p class="hero-two-slide-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis.</p>
                                            <div class="hero-two-slide-meta">
                                                <a class="btn btn-border-primary" href="product.html">BUY NOW</a>
                                                <a class="ht-popup-video" data-fancybox data-type="iframe" href="https://player.vimeo.com/video/172601404?autoplay=https://www.youtube.com/watch?v=14ruVRIucuc">
                                                    <i class="fa fa-play icon"></i>
                                                    <span>Play Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="hero-two-slide-thumb">
                                            <img src="/assets/images/slider/slider4.webp" width="690" height="690" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== Add Pagination ==-->
                    <div class="hero-two-slider-pagination"></div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->

            <!--== Start Product Banner Area Wrapper ==-->
            <section class="section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2 class="title">Best Products</h2>
                                <p class="m-0">Kami memiliki beberapa produk unggulan  </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <!--== Start Product Category Item ==-->
                            <a href="product.html" class="product-banner-item">
                                <img src="/assets/images/shop/banner/paket_acne.jpg" width="370" height="370" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-sm-0 mt-6">
                            <!--== Start Product Category Item ==-->
                            <a href="product.html" class="product-banner-item">
                                <img src="/assets/images/shop/banner/paker_whitening.jpg" width="370" height="370" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-lg-0 mt-6">
                            <!--== Start Product Category Item ==-->
                            <a href="product.html" class="product-banner-item">
                                <img src="/assets/images/shop/banner/serum_whitecelldna.jpg" width="370" height="370" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Banner Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="section-space pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2 class="title">Our Products</h2>
                                <p class="m-0">Daftar Produk Kami  </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                    <?php

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

 foreach($produk as $items) : ?>
                        <div class="col-6 col-lg-3 mb-4 mb-sm-9">
                            <!--== Start Product Item ==-->
                            
                            <div class="product-item product-st2-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="product-details.html">
                                        <img src="/assets/produk/<?= $items->image; ?>" width="370" height="450" alt="Image-HasTech">
                                    </a>
                                    <?php 
                                        if (!isset($items->discount) || $items->discount == null) {
                                    ?>
                                        <span class="flag-new"><?= $items->discount_name; ?></span>
                                    <?php 
                                        } else {
                                    ?>
                                    <span class="flag-new">new</span>
                                    <?php 
                                        }
                                    ?>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews"><?= $items->rating; ?> Ulasan</div>
                                    </div>
                                    <h4 class="title"><a href="product-details.html"><?= $items->product_name; ?></a></h4>
                                    <div class="prices">

                                        <span class="price m-0 p-0">
                                            <p>
                                                <?php
                                                $harga;
                                                if ($items->discount == null) { 
                                                    echo ("Rp " . number_format($items->price, 0, ',', '.'));
                                                    $harga = $items->price;
                                                ?>
                                            </p>
                                                <?php 
                                                } else {
                                                ?>
                                                <p class="m-0 p-0" style="text-decoration: line-through; font-size: 16px; padding: 20px;"><?php echo ("Rp " . number_format($items->price, 0, ',', '.'));?></p>
                                            <p>
                                                <?php 
                                                    $harga = $items->price - ($items->discount/100 * $items->price);
                                                        echo ("Rp " . number_format($harga, 0, ',', '.')) ;
                                                }
                                                ;?>
                                            </p>
                                        </span>
                                
                                    </div>
                                    <div class="product-action">
                                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                            <i class="fa fa-cart-plus fa-2xl" style="font-size: 30px;"></i>
                                        </button>
                                        <a href="/produk/detail/checkout/<?= $items->slug; ?>">
                                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="fa fa-heart-o"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                           
                            <!--== End prPduct Item ==-->
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!-- button pilihan tampilan  -->
                <!-- <section class="section-space pt-0">
                    <div class="container">
                        <button class="btn btn-danger">tampilkan lebih sedikit</button>
                    </div>
                </section> -->
            <!-- /button pilihan tampilan  -->

            <!--== Start Product Banner Area Wrapper ==-->
            <section class="section-space pt-0">
                <div class="container">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-banner-item">
                        <img src="/assets/images/shop/banner/1170200.jpg" width="1170" height="240" alt="Image-HasTech">
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
            </section>


        </main>

         <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <!--== Start Footer Main ==-->
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="widget-item">
                                <div class="widget-about">
                                    <a class="widget-logo" href="index.html">
                                        <img src="/assets/images/logo1.png" width="200" height="100" alt="Logo">
                                    </a>
                                    <p class="desc">MSGLOW merupakan brand lokal Indonesia yang memproduksi produk kecantikan serta perawatan tubuh. MSGLOW didirikan oleh Shandy Purnamasari dan Maharani Kemala pada tahun 2013. MSGLOW memiliki moto yaitu Magic for Skin, dimana moto tersebut sekaligus menjadi singkatan dari merek mereka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 mt-md-0 mt-9">
                            <div class="widget-item">
                                <h4 class="widget-title">Information</h4>
                                <ul class="widget-nav">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Privacy</a></li>
                                    <li><a href="account-login.html">Login</a></li>
                                    <li><a href="product.html">Shop</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-lg-0 mt-6">
                            <div class="widget-item">
                                <h4 class="widget-title">Social Info</h4>
                                <div class="widget-social">
                                    <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Main ==-->

            <!--== Start Footer Bottom ==-->
            <!-- <div class="footer-bottom">
                <div class="container pt-0 pb-0">
                    <div class="footer-bottom-content">
                        <p class="copyright">© 2022 Brancy. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival">Codecarnival.</a></p>
                    </div>
                </div>
            </div> -->
            <!--== End Footer Bottom ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->

        
<?= $this->endSection(); ?>

