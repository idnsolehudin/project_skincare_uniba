<?= $this->extend('layout/template_dashboard'); ?>

<?= $this->section('dashboard'); ?>


<!-- <div class="text-end">
    <button class="btn">Save</button>
    <button class="btn">Delete</button>
</div> -->
<?php foreach($detail_produk as $produk) : ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 ">
                      <div class="product-image">
                        <img src="/assets/produk/<?= $produk->image; ?>" alt="..."  class="rounded" style="height: 600px;"/>
                      </div>
                    </div>
                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                        <div>
                          <p class="color-secondary mb-0">Kategori :</p>
                          <select name="kategori" class="inpdata" id="kategori" disabled>
                            <option value="<?= $produk->category_id; ?>"><?= strtoupper($produk->category_name) ; ?></option>
                          </select>
                        </div>
                        <div>
                          <p class="color-secondary mb-0">Nama Produk :</p>
                          <input type="text" class="inpdata" name="nama" id="nama" value="<?= strtoupper($produk->product_name) ; ?>" disabled>
                        </div>
                        <div>
                          <p class="color-secondary mb-0">Deskripsi :</p>
                          <textarea name="deskripsi" class="inpdata" id="deskripsi" cols="30" rows="2" disabled><?= strtoupper($produk->description) ; ?></textarea>
                       
                        </div>
                        <div>
                          <p class="color-secondary mb-0">Rating :</p>
                          <input type="text" class="inpdata" name="rating" id="rating" value="<?= strtoupper($produk->rating) ; ?>" disabled>
                        </div>
                        <div>
                          <p class="color-secondary mb-0">Varian :</p>
                          <input type="text" class="inpdata" name="varian" id="varian" value="<?= strtoupper($produk->variant) ; ?>" disabled>
                        </div>
                        <div>
                          <p class="color-secondary mb-0">Stok :</p>
                          <input type="text" class="inpdata" name="stok" id="stok" value="<?= strtoupper($produk->stock) ; ?>" disabled>
                        </div>
                        <div class="row">
                          <div class="col-8">
                            <p class="color-secondary mb-0">Promo :</p>
                            <input type="text" class="inpdata" name="promo" id="promo" placeholder="Promo" value="<?= strtoupper($produk->discount_name) ; ?>" disabled>
                          </div>
                          <div class="col-3">
                            <p class="color-secondary mb-0">Potongan :</p>
                            <div class="d-flex">
                              <input type="number" class="inpdata" name="potongan" id="potongan" placeholder="Potongan" value="<?= strtoupper($produk->discount) ; ?>" disabled>
                              <p class="fs-4">%</p>
                            </div>
                          </div>
                          <br />

                          <div class="product_price">
                            <h6>Harga sebelum potongan promo :</h6>
                            <div class=" d-flex">
                              <div>
                                <p >Rp </p>
                              </div>
                              <div>
                                <input type="text" name="harga" id="harga" value="<?= number_format($produk->price,0,".","."); ?>" style="font-size: 50px; width: 100%; background:transparent; border:none;" disabled>
                              </div>
                              <span class="price-tax"></span>
                              <br>
                            </div>
                          </div>

                          <div class="d-flex">
                            <a href="/produk/update/<?= $produk->slug; ?>" class="btn  btn-success text-light" id="btnedit">Edit</a>
                            <button type="submit" class="btn  btn-primary" id="btsave" disabled>Simpan</button>


                            <form action="/produk/<?= $produk->id_product ; ?>" method="post" class="d-inline">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn  btn-danger"  onclick="return confirm('apakah anda yakin ingin menghapus produk?')">Hapus</button>
                            </form>
                            
                          </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
 <?php endforeach; ?>

<?= $this->endSection(); ?>