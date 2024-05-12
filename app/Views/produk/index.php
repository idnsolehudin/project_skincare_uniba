<?= $this->extend('layout/template_dashboard'); ?> 

<?= $this->section('dashboard'); ?>

        

<!-- page content -->
        <div class="" role="main">    
          <div class="" style="position: relative;">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                  <div style="background-color: aquamarine;">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                      <div id="text-berhasil">
                            <?= session()->getFlashdata('pesan'); ?>
                      </div>
                    <?php endif; ?>
                  </div>
                    <h2>Ms Glow <small> list produk </small></h2>
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

                    
                    <div class="row">
                      <!-- list produk  -->
                      <?php foreach ($produk as $item) : ?>
                      <div class="col-md-55 ">
                        <div class="thumbnail rounded">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="/assets/produk/<?=  $item->image ;?>" alt="image" />
                            <div class="mask">
                              <p><?= $item->id; ?></p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p><?= $item->product_name; ?></p>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                      <!-- end list produk  -->

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- tombol tambah  -->
            <div class="" style="position: fixed; z-index: 3; bottom: 20px; right: 20px;">
              <div class="dropup-center dropup">
                  <button class="btn btn-secondary rounded rounded-pill p-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #944E63;">
                  <i class="fa-solid fa-plus fa-2xl" id="add-item"></i>
                  </button>
                  <ul class="dropdown-menu" style="background-color: hotpink; opacity: 0.8;">
                    <li><a class="dropdown-item text-dark fw-bolder" href="#" >TAMBAH PRODUK</a></li>
                    <li><a class="dropdown-item text-dark fw-bolder" href="#" id="add-category">TAMBAH KATEGORI</a></li>
                  </ul>
              </div>  
            </div>
            <!-- /tombol tambah  -->

            <!-- dialog box input kategori  -->
            <div class="card d-none animate__animated animate__zoomIn" id="form-add-ctg"
            style="width: 18rem; 
                  position: fixed; 
                  top: 35%; 
                  left: 40%; 
                  z-index:3;
                  background-color: #944E63;
                  opacity: 0.9;
                  padding:20px;
                  padding-top: 10px;
                  padding-bottom: 40px;">
                  <div class="bg-danger p-2 rounded rounded-pill badge badge-pill" style="position: absolute; top: -5px; right: -5px;" id="btn-close">
                  <a href="#">
                     <i class="fa-solid fa-x fa-lg" style="color: aliceblue;"></i>
                  </a>
                 
                  </div>
              <div class="card-body text-center">
                <h5 class="card-title text-light" style="margin-bottom: 30px;">Tambah Kategori Baru</h5>
                <form action="/produk/tambah_kategori" method="post">
                <?= csrf_field(); ?>
                <input class="w-100 text-center" type="text" name="ktg_produk" id="input-ctg" placeholder="Masukkan Kategori Produk">
                <button type="submit" class="btn rounded fw-bold" style="background-color: pink;" id="btn-simpan">Simpan</button>
                </form>
              </div>
            </div>
            <!-- /dialog box input kategori  -->
          </div>

        </div>
    
<!-- /page content -->


<?= $this->endSection(); ?>