<?= $this->extend('layout/template_dashboard'); ?> 

<?= $this->section('dashboard'); ?>

<div id="body">
    <div class="container">
    <h2>Form Input Produk</h2>
    <form action="/submit-form" method="post">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" class="btn btn-info">Daftar</button>
  </form>
</div>
</div>




<?= $this->endSection(); ?> 