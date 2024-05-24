<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div>
<!--== Wrapper Start ==-->

    <?php

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

 foreach ($detail_produk as $detail) : ?>
        <!-- <div class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body"> -->
                        <div class="product-quick-view-content mt-4 mb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--== Start Product Thumbnail Area ==-->
                                        <div class="product-single-thumb">
                                            <img src="/assets/produk/<?= $detail->image; ?>" width="444" height="auto" alt="Image-HasTech">
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-lg-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-details-content"> 
                                            <form action="/cart/tambah" method="post">
                                                <!-- id produk  -->
                                                <input type="text" name="id_product" id="id_product" value="<?= $detail->id_product; ?>" style="background-color: transparent; border:none;" disabled>
                                                
                                                <!-- nama produk  -->
                                                <p class="product-details-title fw-bolder fs-10">[ <?= $detail->category_name; ?> ]  <?= $detail->product_name; ?> | <?= $detail->variant; ?></p>
                                                
                                                
                                                
                                                <div class="product-details-review mb-5">
                                                    <div class="product-review-icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <span type="button" class="product-review-show"><?= $detail->rating; ?> Ulasan</span>
                                                </div>

                                                <!-- harga  -->
                                                <div class="product-details-action">
                                                    <h4 class="price">
                                                        <?php
                                                        if ($detail->discount == null) { 
                                                            echo ("Rp " . number_format($detail->price, 0, ',', '.'));
                                                        ?>
                                                    </h4>
                                                        <?php 
                                                        } else {
                                                        ?>
                                                        <p style="text-decoration: line-through; font-size: 16px; padding: 20px;"><?php echo ("Rp " . number_format($detail->price, 0, ',', '.'));?></p>
                                                    <h1>
                                                        <?php 
                                                            $harga = $detail->price - ($detail->discount/100 * $detail->price);
                                                             echo ("Rp " . number_format($harga, 0, ',', '.')) ;
                                                        }
                                                        ;?>
                                                    </h1>
                                                </div>

                                                <!-- deskripsi  -->
                                                <p class="mb-6 mt-5"><?= $detail->description; ?></p>

                                                <!-- jumlah  -->
                                                <div class="product-details-pro-qty">
                                                    <div class="pro-qty">
                                                        <input type="text" name="quantity" title="Quantity" value="1" min="1" class="form-control">
                                                    </div>  
                                                </div>
                                                <div class="product-details-cart-wishlist mt-4 ">
                                                    <button type="submit" class="btn me-4">Tambah Ke Keranjang</button>
                                                    <button type="submit" class="btn">Beli Sekarang</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!--== End Product Info Area ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div>
                </div>
            </div>
        </div> -->
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>
