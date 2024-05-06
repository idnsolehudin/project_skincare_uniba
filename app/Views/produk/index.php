<?= $this->extend('layout/template_dashboard'); ?> 

<?= $this->section('dashboard'); ?>

<!-- page content -->

          <div class="clearfix"></div>
            <div style="background-color: aquamarine;">
            <i id="text-berhasil"></i>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">

                    <div class="row">
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Snow and Ice Incoming for the South</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

      

          <div class="dropup-center dropup btn-add position-absolute  p-3">
            <a class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fa-solid fa-plus fa-2xl" style="color: #FFFF;"></i>
            </a>
            <ul class="dropdown-menu">
              <li id="add-category"><a class="dropdown-item fw-bolder" href="#"> Tambah Kategori Produk </a></li>
              <li><a class="dropdown-item fw-bolder" href="/dashboard/produk/tambah_produk"> Tambah Item Produk</a></li>
            </ul>
          </div>


          <!-- form tambah kategori  -->
          <div class="d-none" id="form-add-ctg">
          <div class="add-ctg ">
            <div class="card position relative" style="width: 18rem; background-color: gainsboro;">
              <div class="card-body">
                <h5 class="card-title">Tambah Kategori Baru Produk</h5>
                <form action="/produk/tambah_kategori" method="post">
                  <?= csrf_field(); ?>
                    <!-- <input type="text" placeholder="masukan id" id="input-id" name="id"> -->
                    <input type="text" placeholder="masukan kategori baru" id="input-ctg" name="kategori">
                    <button type="submit" style="background-color: #944E63;" id="btn-simpan">Simpan</button>
                </form>
              </div>
              <div class="fw-bolder m-2" style="position: absolute; top: 0; right: 0;" id="btn-close"><i class="fa-solid fa-xmark"></i></div>
            </div>
          </div>
          </div>
        
    
        <!-- /page content -->


<?= $this->endSection(); ?>