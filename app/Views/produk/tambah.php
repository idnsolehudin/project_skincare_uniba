<?= $this->extend('layout/template_dashboard'); ?> 

<?= $this->section('dashboard'); ?>

<div id="body">
  <div class="container row">
    <div class="col">
      <h2>Form Input Produk</h2>
      <form action="/submit-form" method="post">
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
      </form>
    </div>
    <div class="ms-5 ps-5 col" style="position: relative;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path fill="#a6b8bf" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/>
      </svg>
      <div class="p-3 rounded rounded-pill" style="background-color: darkslategrey; width: 50px; position:absolute; right:10px; bottom:20px;">
      <a href="#">  <i class="fa-solid fa-camera fa-xl" style="color: #ffffff;"></i></a>
      </div>
    </div>
  </div>
</div>




<?= $this->endSection(); ?> 