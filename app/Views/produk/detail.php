<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<table class="table table-striped">
  
  <tbody >
   
  <tr>
      <td scope="col" rowspan="5" class="text-center"><img src="/assets/images/<?= $produk['sampul']; ?>" alt="" width="300"></td>
      <td scope="col">Nama Produk</td>
      <td scope="col"><input type="text" name="" id="" value="<?= $produk['nm_produk']; ?>" ></td>
      <td scope="col"><button>edit</button></td>
    </tr>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td scope="col">Kategori</td>
      <td scope="col"><input type="text" name="" id="" value="<?= $produk['kategori']; ?>"></td>
      <td scope="col"><button>edit</button></td>
    </tr>
    <tr>
      <!-- <th scope="row">2</th> -->
      <td scope="col">Deskripsi</td>
      <td scope="col">
        <textarea name="" id="" cols="30" rows="2"><?= $produk['deskripsi']; ?></textarea></td>
      <td scope="col"><button>edit</button></td>
    </tr>
    <tr>
      <!-- <th scope="row">3</th> -->
      <td scope="col">Harga</td>
      <td scope="col"><input type="text" name="" id="" value="<?= $produk['harga']; ?>"></td>
      <td scope="col"><button>edit</button></td>
    </tr>
    <tr>
      <!-- <th scope="row">3</th> -->
      <td scope="col">Stok</td>
      <td scope="col"><input type="text" name="" id="" value="<?= $produk['stok']; ?>"></td>
      <td scope="col"><button>edit</button></td>
    </tr>
   
  </tbody>
</table>
<div class="text-end">
    <button class="btn">Save</button>
    <button class="btn">Delete</button>
</div>




<?= $this->endSection(); ?>