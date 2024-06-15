<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/msglow_large.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        input[type="text"] {
            background-color: transparent;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container body">
        <div class="main_container">
            <div class="m-5">
                <div class="x_panel">
                    <div class="x_content">
                        <section class="content invoice">
                            <div class="invoice-header">
                                <h1>
                                    <i class="fa fa-globe"></i> Invoice.
                                    <small class="pull-right">
                                        <?php
                                        $tanggal = 'Y-m-d';
                                        echo date($tanggal);
                                        ?>
                                    </small>
                                </h1>
                            </div>
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    Dikirim ke :
                                    <address>
                                        <strong>Iron Admin, Inc.</strong>
                                        <br>795 Freedom Ave, Suite 600
                                        <br>New York, CA 94107
                                        <br>Phone: 1 (804) 123-9876
                                        <br>Email: ironadmin.com
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table">
                                    <form action="#" method="post">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Produk</th>
                                                    <th>Kategori</th>
                                                    <th>Varian</th>
                                                    <th style="width: 40%">Deskripsi</th>
                                                    <th style="width: 10%">Jumlah</th>
                                                    <th>Harga Per Item</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <input type="hidden" name="id_produk" value="<?= $order['id_produk']; ?>">
                                                <tr>
                                                    <td>
                                                        <input type="text" name="nama_produk" id="nama_produk" value="<?= $order['nama_produk']; ?>" readonly>
                                                    </td>
                                                    <td>
                                                        <?= $order['category']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $order['variant']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $order['desc']; ?>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="w-25" name="qty" id="qty" value="<?= $order['qty']; ?>" readonly>
                                                    </td>
                                                    <td>Rp <?= number_format($order['price'], 0, ',', '.'); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <form id="ongkir-form">
                                        <label for="province">Provinsi:</label>
                                        <select id="province" name="province" required>
                                            <option value="">Pilih Provinsi</option>
                                            <!-- Tambahkan opsi provinsi di sini -->
                                        </select>
                                        <br>
                                        <label for="city">Kabupaten/Kota:</label>
                                        <select id="city" name="city" required>
                                            <option value="">Pilih Kabupaten/Kota</option>
                                            <!-- Akan diisi berdasarkan pilihan provinsi -->
                                        </select>
                                        <br>
                                        <label for="district">Kecamatan:</label>
                                        <select id="district" name="district" required>
                                            <option value="">Pilih Kecamatan</option>
                                            <!-- Akan diisi berdasarkan pilihan kabupaten/kota -->
                                        </select>
                                        <br>
                                        <input type="hidden" id="weight" name="weight" value="<?= $order['qty'] * 1000 ?>"> <!-- Asumsi berat per item 1kg -->
                                        <button type="button" id="cek-ongkir">Cek Ongkir</button>
                                    </form>
                                    <p id="ongkir-result"></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>: Rp <?= number_format($order['price'] * $order['qty'], 0, ',', '.'); ?>,-</td>
                                                </tr>
                                                <tr>
                                                    <th>Ppn (11%)</th>
                                                    <td>: Rp <?= number_format(0.11 * ($order['price'] * $order['qty']), 0, ',', '.'); ?>,-</td>
                                                </tr>
                                                <tr>
                                                    <th>Ongkir</th>
                                                    <td>: Gratis Ongkir</td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>: Rp <?= number_format((0.11 * ($order['price'] * $order['qty'])) + ($order['price'] * $order['qty']), 0, ',', '.'); ?>,-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-print">
                                <div>
                                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                    <button id="pay-button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                    <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Load provinsi dari API RajaOngkir saat halaman dimuat
            $.ajax({
                url: '<?= base_url('invoice/getProvinces') ?>',
                method: 'GET',
                success: function(response) {
                    console.log(response); // Log the response for debugging
                    let provinces = JSON.parse(response).rajaongkir.results;
                    $.each(provinces, function(key, value) {
                        $('#province').append('<option value="'+value.province_id+'">'+value.province+'</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error getting provinces:', error);
                }
            });

            // Load kabupaten/kota berdasarkan provinsi yang dipilih
            $('#province').change(function() {
                let province_id = $(this).val();
                $('#city').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');

                if(province_id) {
                    $.ajax({
                        url: '<?= base_url('invoice/getCities') ?>',
                        method: 'GET',
                        data: { province_id: province_id },
                        success: function(response) {
                            console.log(response); // Log the response for debugging
                            let cities = JSON.parse(response).rajaongkir.results;
                            $.each(cities, function(key, value) {
                                $('#city').append('<option value="'+value.city_id+'">'+value.city_name+'</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error getting cities:', error);
                        }
                    });
                }
            });

            // Load kecamatan berdasarkan kabupaten/kota yang dipilih
            $('#city').change(function() {
                let city_id = $(this).val();
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');

                if(city_id) {
                    $.ajax({
                        url: '<?= base_url('invoice/getDistricts') ?>',
                        method: 'GET',
                        data: { city_id: city_id },
                        success: function(response) {
                            console.log(response); // Log the response for debugging
                            let districts = JSON.parse(response).rajaongkir.results;
                            $.each(districts, function(key, value) {
                                $('#district').append('<option value="'+value.subdistrict_id+'">'+value.subdistrict_name+'</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error getting districts:', error);
                        }
                    });
                }
            });

            // Cek ongkir saat tombol diklik
            $('#cek-ongkir').click(function() {
                let destination = $('#district').val();
                let weight = $('#weight').val();

                if(destination && weight) {
                    $.ajax({
                        url: '<?= base_url('invoice/checkOngkir') ?>',
                        method: 'GET',
                        data: {
                            destination: destination,
                            weight: weight
                        },
                        success: function(response) {
                            console.log(response); // Log the response for debugging
                            let result = JSON.parse(response);
                            if(result.rajaongkir && result.rajaongkir.results[0].costs[0].cost[0].value) {
                                let ongkir = result.rajaongkir.results[0].costs[0].cost[0].value;
                                $('#ongkir-result').html('Ongkos Kirim: Rp. ' + ongkir);
                                $('#ongkir-result').append('<br>Total Bayar: Rp. ' + (parseInt(ongkir) + <?= $order['price'] * $order['qty']; ?>));
                            } else {
                                $('#ongkir-result').html('Gagal mengambil data ongkos kirim.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error checking ongkir:', error);
                            $('#ongkir-result').html('Gagal mengambil data ongkos kirim.');
                        }
                    });
                } else {
                    $('#ongkir-result').html('Pilih semua opsi terlebih dahulu.');
                }
            });
        });
    </script>

    <!-- JS Vendor, Plugins & Activation Script Files -->
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Midtrans Snap JS -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Pa3KO2uc5zln1UwS"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // Mengarahkan ke controller untuk mendapatkan Snap Token
            window.location.href = '<?= base_url('payment/index'); ?>';
        };
    </script>
</body>
</html>
