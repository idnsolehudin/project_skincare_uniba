<?= $this->extend('layout/template'); ?> 

<?= $this->section('content'); ?>
 <div class="text-center">
         <img src="/assets/images/icon-user-removebg-preview.png" alt="" width="100px">
         
    </div>
   
    <div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        
                   <td colspan="2">Data Pengguna</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($user as $u) :?>
                    <tr>
                    <th scope="row">Nama </th>
                    <td>: <?= $u['nama']; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Email </th>
                    <td>: <?= $u['email']; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Password </th>
                    <td>: <?= $u['password']; ?></td>
                    </tr>
                   
                    
                    <th scope="row">Alamat Lengkap </th>
                    <td>: <?= $u['alamat_lengkap']; ?></td>
                    </tr>
                    <tr>
                    <th scope="row"> </th>
                    <td>: <?= $u['alamat_kab']; ?></td>
                    </tr>
                    <tr>
                    <th scope="row"> </th>
                    <td>: <?= $u['alamat_prov']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="/user/<?= $u['id']; ?>"><button class="btn">Detail</button></a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</div>




<?= $this->endSection(); ?>





