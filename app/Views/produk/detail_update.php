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

                  <form action="/produk/update/<?= $produk->id_product; ?>" method="post" class="row">
                  <?= csrf_field(); ?>
                  <div class="x_content">
               
                    <div class="col-md-7 col-sm-7 ">
                      <div class="product-image">
                        <img src="/assets/produk/<?= $produk->image; ?>" alt="..."  class="rounded" style="height: 600px;"/>
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                        <div>
                          <p class="color-secondary mb-0">Kategori :</p>
                          <select name="kategori" class="inpdata" id="kategori" >
                            <option value="<?= $produk->category_id; ?>"><?= strtoupper($produk->category_name) ; ?></option>
                          </select>
                        </div>

                        <div>
                          <p class="color-secondary mb-0">Nama Produk :</p>
                          <input type="text" class="inpdata" name="nama" id="nama" value="<?= strtoupper($produk->product_name) ; ?>" >
                        </div>
                        
                        <div>
                          <p class="color-secondary mb-0">Deskripsi :</p>
                          <textarea name="deskripsi" id="deskripsi" cols="30" rows="2" class="inpdata" name="deskripsi" id="deskripsi"><?= strtoupper($produk->description) ; ?></textarea>
                        </div>

                        <div>
                          <p class="color-secondary mb-0">Rating :</p>
                          <input type="number" class="inpdata" name="rating" id="rating" value="<?= strtoupper($produk->rating) ; ?>" >
                        </div>

                        <div>
                          <p class="color-secondary mb-0">Varian :</p>
                          <input type="text" class="inpdata" name="varian" id="varian" value="<?= strtoupper($produk->variant) ; ?>" >
                        </div>

                        <div>
                          <p class="color-secondary mb-0">Stok :</p>
                          <input type="number" class="inpdata" name="stok" id="stok" value="<?= strtoupper($produk->stock) ; ?>" >
                        </div>

                        <div class="row">
                          <div class="col-8">
                            <p class="color-secondary mb-0">Promo :</p>
                            <input type="text" class="inpdata" name="promo" id="promo" placeholder="Promo" value="<?= strtoupper($produk->discount_name) ; ?>" >
                          </div>
                          <div class="col-3">
                            <p class="color-secondary mb-0">Potongan :</p>
                            <div class="d-flex">
                              <input type="number" class="inpdata" name="potongan" id="potongan" placeholder="Potongan" value="<?= strtoupper($produk->discount) ; ?>" >
                              <p class="fs-4">%</p>
                            </div>
                          </div>
                        </div>

                      

                        <div>
                          <input type="hidden"  name="slug" id="slug" value="<?= strtoupper($produk->slug) ; ?>" >
                        </div>
                        <div>
                          <input type="hidden"  name="id" id="id" value="<?= $produk->id ; ?>" >
                        </div>
                        <div>
                          <input type="hidden"  name="id_produk" id="id_produk" value="<?= $produk->id_product ; ?>" >
                        </div>
                          <br />

                          <div class="">
                            <div class="product_price d-flex">
                              <div>
                                <p >Rp </p>
                              </div>
                              <div>
                                <input type="number" name="harga" id="harga" value="<?= $produk->price; ?>" style="font-size: 50px; width: 100%; background:transparent; border:none;" >
                              </div>
                              <span class="price-tax"></span>
                              <br>
                            </div>
                          </div>

                          <div class="d-flex">
                            <button type="submit" class="btn  btn-success" id="btnedit" disabled>Edit</button>
                            <button type="submit" class="btn  btn-primary" id="btsave" >Simpan</button>
                    </form>

                            <form action="/produk/<?= $produk->id_product; ?>" method="post" class="d-inline">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE" disabled>
                              <button type="submit" class="btn  btn-danger"  onclick="return confirm('apakah anda yakin ingin menghapus produk?')" disabled>Hapus</button>
                            </form>
                            
                          </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
 <?php endforeach; ?>

<?= $this->endSection(); ?>