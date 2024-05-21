<?= $this->extend('layout/template_dashboard'); ?> 

<?= $this->section('dashboard'); ?>

<div id="body">
  <div class="container row">
    <div class="col">
      <h2>Form Input Produk</h2>
      <form action="/submit-form" method="post" enctype="multipart/form-data">
          <?= csrf_field(); ?>
        <input type="text" class="form-control mb-1" name="nama" placeholder="Nama Produk" required>
        <select class="form-control mb-1" name="kategori" id="kategori">
          <option>--Pilih Kategori--</option>
          <?php foreach ($kategori as $ktg) : ?>
          <option value="<?= $ktg->id; ?>"><?= $ktg->category_name; ?></option>
          <?php endforeach;?>
        </select>
        <input type="text" class="form-control mb-1" name="varian" placeholder="Varian" required>
        <input type="number" class="form-control mb-1" name="stok" placeholder="Stok" required>
        <input type="number" class="form-control mb-1" name="harga" placeholder="Harga" required>
        <textarea class="form-control mb-1" name="deskripsi" id="deskripsi" cols="30" rows="4" placeholder="Deskripsi"></textarea>
        
        

        <button type="submit" class="btn" style="background-color: palevioletred;">Simpan</button>
    </div>

    <div class="ms-5 ps-5 col" class="rounded" id="img-preview"
      style="
      position: relative;
      background-image: url('/assets/produk/picture_icon.jpeg');
      border: 2px solid black;  
      width: 500px;
      height:500px;
      border-radius: 10px;
      background-size: cover;
      background-repeat: no-repeat;
      ">

          <i class="fa-solid fa-camera fa-xl p-3 rounded rounded-pill" style="color: #ffffff; background-color: darkslategrey; width: 50px; position:absolute; right:10px; bottom:10px;" d-inline>
           <!-- input gambar  -->
            <div class="mb-3 d-inline" style="opacity: 0; z-index: 5; position:absolute;">
              <input type="file" class="form-control" id="image" name="image" >
            </div>
          <!-- /input gambar  -->
          </i>


          <p id="img_label" class="m-0 p-0"></p>
    </div>
    </form>
  </div>
</div>




<?= $this->endSection(); ?> 