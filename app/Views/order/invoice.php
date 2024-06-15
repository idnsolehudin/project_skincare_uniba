<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Brancy - Cosmetic & Beauty Salon Website Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="bootstrap, ecommerce, ecommerce html, beauty, cosmetic shop, beauty products, cosmetic, beauty shop, cosmetic store, shop, beauty store, spa, cosmetic, cosmetics, beauty salon" />
    <meta name="author" content="codecarnival" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/msglow_large.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.min.css">


      <style>
        input[type="text"] {
            background-color: transparent;
            border: none;
        }
        input[type="number"] {
            background-color: transparent;
            border: none;
        }

        .courier:hover {
           filter: drop-shadow(1px 1px 40px red); 
        }

        #box-ongkir {
            background-color: lightpink;
        }
        #box-ongkir:hover {
            background-color: indianred;
        }
        .custom-radio {
            transform: scale(2.5); /* Mengubah ukuran radio button */
            -webkit-transform: scale(2.5); /* Untuk browser WebKit */
        }
    </style>
</head>
<body>
    <div class="container body">
        <div class="main_container">
            <div class="m-5">
                <div class="">

                    <!-- page content -->
                    <div class="right_col" role="main">
                        <div class="">
                            <div class="clearfix"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_panel">
                                        <div class="x_title">

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <section class="content invoice">
                                                <!-- title row -->
                                                <div class="row">
                                                    <div class="invoice-header">
                                                        <h1>
                                                            <i class="fa fa-cart-arrow-down"></i> Checkout.
                                                            <small class="pull-right">
                                                                <?php
                                                                $tanggal = 'Y-m-d';
                                                                echo date($tanggal);
                                                                ?>
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- info row -->
                                                <div class="row invoice-info">
                                                    <div class="col-sm-4 invoice-col">
                                                        Dikirim Oleh :
                                                        <address>
                                                            <strong>Bunga Cinta Store</strong>
                                                            <br>Kawasan Industri Grand Surya Balaraja
                                                            <br>Kp. Peuteuy, Ds. Tobat, Kec. Balaraja, Tangerang - Banten 15610
                                                            <br>No Telepon : 0857-5345-7632
                                                            <br>Email : bungacintaofficial@gmail.com
                                                        </address>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <!-- Table row -->
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
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <div class="row">
                                                    <!-- accepted payments column -->
                                                    <div class="col-md-6">
                                                    <form id="ongkir-form" >
                                                        <!-- alamat asal pengiriman  -->
                                                        <input type="hidden" id="origin" name="origin" value="455">
                                                        
                                                        <!-- <label for="province">Provinsi:</label> -->
                                                        <select class="form-control mt-2" id="province" name="province" required>
                                                            <option value="">Pilih Provinsi</option>
                                                            <!-- Tambahkan opsi provinsi di sini -->
                                                        </select>




                                                        <!-- <label for="destination-city">Kabupaten/Kota:</label> -->
                                                        <select class="form-control mt-2" id="destination" name="destination" aria-placeholder="Pilih Kabupaten/Kota" required>
                                                            <option value="">Pilih Kabupaten/Kota</option>
                                                            <!-- Akan diisi berdasarkan pilihan provinsi -->
                                                        </select>

                                                        <textarea name="address" id="address" cols="30" rows="3" placeholder="Alamat Lengkap" class="form-control mt-2"></textarea>
                                                   
                                                        <label for="courier" class="my-3">Jasa Kirim:</label>

                                                        

                                                        <!-- <select class="form-control" id="courier" name="courier" required>
                                                            <option value="">Pilih Jasa Kirim</option>
                                                            <option value="jne">JNE</option>
                                                            <option value="tiki">TIKI</option>
                                                            <option value="pos">POS Indonesia</option>
                                                         
                                                        </select> -->
                                                            <!-- input hidden berat barang contoh  -->
                                                             <!-- <input type="hidden" name="weight" value=""> -->
                                                        <br>
                                                        <input type="hidden" id="weight" name="weight" value="<?= $order['qty'] * 1000 ?>"> <!-- Asumsi berat per item 1kg -->
                                                        <div class="d-flex justify-content-around m-4">
                                                            <div id="ongkir-jne" class="courier">
                                                                <img src="/assets/images/jne.png" alt="JNE" width="115px">
                                                            </div>
                                                            <div id="ongkir-tiki" class="courier">
                                                                <img src="/assets/images/tiki.png" alt="TIKI" width="195px">
                                                            </div>
                                                            <div id="ongkir-pos" class="courier">
                                                                <img src="/assets/images/pos.png" alt="POS" width="85px">
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                                    <!-- <select name="ongkir-result" id="ongkir-result">

                                                    </select> -->
                                                    <div id="jasa-kirim" class="d-none">
                                                   
                                                       <div id="ongkir-result" class="row">

                                                        </div>
                                                        <div class="d-none " id="btn-ongkir">
                                                            <button type="button" class="btn align-center" id="btn-ok">Pilih</button>
                                                        </div>
                                                   </div>
                                                    <!-- <div id="hasil">
                                                        hasillllnay begini
                                                    </div> -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-md-6">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th style="width:50%">Subtotal:</th>
                                                                        <td>
                                                                            <!-- <input type="hidden" name="price_total" id="price_total" value="</?= $order['nama_produk']; ?>"> -->
                                                                             <?php
                                                                                $harga = $order['price'] * $order['qty'];
                                                                                ?>
                                                                            : Rp <input type="number" name="harga" id="harga" value="<?= $harga; ?>" readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Ppn (11%)</th>
                                                                        <td><?php
                                                                                $ppn = 0.11 * $harga;
                                                                                ?>
                                                                             : Rp <input type="number" name="ppn" id="ppn" value="<?= $ppn; ?>" readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Ongkir</th>
                                                                        <td id="hasil">: </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Total</th>
                                                                        <td id="total">: 
                                                                            <!-- <input type="hidden" name="total_price" id="total_price" value="<?php $total_price = $ppn + $harga;
                                                                                                                                            echo $total_price; ?>">
                                                                            : Rp </?php
                                                                                echo number_format($total_price, 0, ',', '.');
                                                                                ?>,- -->
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <!-- this row will not appear when printing -->
                                                <div class="row no-print">
                                                    <div class=" ">
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
                    </div>
                    <!-- /page content -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Load provinsi dari API RajaOngkir saat halaman dimuat
            // $.ajax({
            //     url: '<//?= base_url('/invoice/getProvinces') ?>',
            //     method: 'GET',
            //     success: function(response) {
            //         let provinces = JSON.parse(response);
            //         $.each(provinces, function(key, value) {
            //             $('#province').append('<option value="'+value.province_id+'">'+value.province+'</option>');
            //         });
            //     }
            // });

            // Fetch provinces on page load
            $.getJSON('/ongkir/getProvinces', function(data) {
            var provinces = data.rajaongkir.results;
            $.each(provinces, function(index, province) {
                $('#province').append('<option value="' + province.province_id + '">' + province.province + '</option>');
                // $('#destination').append('<option value="' + province.province_id + '">' + province.province + '</option>');
            });
            });

            // Load kabupaten/kota berdasarkan provinsi yang dipilih
            $('#province').change(function() {
                $("#jasa-kirim").removeClass('d-none');
                $("#jasa-kirim").addClass('d-block');
                var provinceId = $(this).val();
                $.getJSON('/ongkir/getCities/' + provinceId, function(data) {
                    var cities = data.rajaongkir.results;
                    $('#destination').empty();
                    $.each(cities, function(index, city) {
                        $('#destination').append('<option value="' + city.city_id + '">' + city.type + ' ' +city.city_name + '</option>');
                    });
                });
            });

            // $('#destination').change(function() {
            //     $("#jasa-kirim").removeClass('d-none');
            //     $("#jasa-kirim").addClass('d-block');
            // }


            // Cek ongkir saat tombol diklik
            $('#ongkir-jne').click(function() {
                $('#btn-ongkir').removeClass('d-none');
                $('#btn-ongkir').addClass('d-block text-center');
                $("#jasa-kirim").removeClass('d-none');
                $("#jasa-kirim").addClass('d-block');
                let origin = $('#origin').val();
                let destination = $('#destination').val();
                // let destination = 109;
                let weight = 1000;
                let courier = 'jne';

                if(destination && weight) {
                    $.ajax({
                        url: '<?= base_url('/ongkir/checkOngkirJne') ?>',
                        method: 'get',
                        data: {
                            origin: origin,
                            destination: destination,
                            weight: weight,
                            courier: courier
                        },
                        
                        success: function(response) {
                            // let result = JSON.parse(response);
                            console.log(response);
                            let result = response;
                            let output = '';
                            if (result.rajaongkir && result.rajaongkir.results.length > 0) {
                                result.rajaongkir.results.forEach(courier => {
                                    courier.costs.forEach(cost => {
                                    output += `
                                        <div class="col text-center mx-2 my-3 p-3 rounded" for="${cost.cost[0].value}" id="box-ongkir">
                                                <input type="radio" class="custom-radio" id="${cost.cost[0].value}" name="harga" value="${cost.cost[0].value}">
                                                <br>
                                                <b>JNE</b> 
                                                <h3> ${cost.service}</h3>
                                                <i> (${cost.description})</i>
                                                <h5>Harga :</h5>
                                                <b>Rp. ${cost.cost[0].value}</b>
                                                <h5>Estimasi :</h5>
                                                <i>${cost.cost[0].etd} hari</i>
                                                <br>
                                               
                                        </div>
                                        `;
                                      
                                    });
                                });
                            } else {
                                output = 'Gagal mengambil data ongkos kirim.';
                            }
                            $('#ongkir-result').html(output);
                        }
                    });
                } else {
                    $('#ongkir-result').html('Pilih semua opsi terlebih dahulu.');
                }
            });
            
            $('#ongkir-tiki').click(function() {
                $('#btn-ongkir').removeClass('d-none');
                $('#btn-ongkir').addClass('d-block text-center');
                $("#jasa-kirim").removeClass('d-none');
                $("#jasa-kirim").addClass('d-block');
                let origin = $('#origin').val();
                let destination = $('#destination').val();
                // let destination = 109;
                let weight = 1000;
                let courier = 'tiki';

                if(destination && weight) {
                    $.ajax({
                        url: '<?= base_url('/ongkir/checkOngkirTiki') ?>',
                        method: 'get',
                        data: {
                            origin: origin,
                            destination: destination,
                            weight: weight,
                            courier: courier
                        },
                        
                        success: function(response) {
                            // let result = JSON.parse(response);
                            console.log(response);
                            let result = response;
                            let output = '';
                            if (result.rajaongkir && result.rajaongkir.results.length > 0) {
                                result.rajaongkir.results.forEach(courier => {
                                    courier.costs.forEach(cost => {
                                    output += `
                                        <div class="col text-center mx-2 my-3 p-3 rounded" for="${cost.cost[0].value}" id="box-ongkir">
                                                <input type="radio" class="custom-radio" id="${cost.cost[0].value}" name="harga" value="${cost.cost[0].value}">
                                                <br>
                                                <b>TIKI</b> 
                                                <h3> ${cost.service}</h3>
                                                <i> (${cost.description})</i>
                                                <h5>Harga :</h5>
                                                <b>Rp. ${cost.cost[0].value}</b>
                                                <h5>Estimasi :</h5>
                                                <i>${cost.cost[0].etd} hari</i>
                                                <br>
                                               
                                        </div>
                                        `;
                                      
                                    });
                                });
                            } else {
                                output = 'Gagal mengambil data ongkos kirim.';
                            }
                            $('#ongkir-result').html(output);
                        }
                    });
                } else {
                    $('#ongkir-result').html('Pilih semua opsi terlebih dahulu.');
                }
            });

            $('#ongkir-pos').click(function() {
                $('#btn-ongkir').removeClass('d-none');
                $('#btn-ongkir').addClass('d-block text-center');
                $("#jasa-kirim").removeClass('d-none');
                $("#jasa-kirim").addClass('d-block');
                let origin = $('#origin').val();
                let destination = $('#destination').val();
                // let destination = 109;
                let weight = 1000;
                let courier = 'pos';

                if(destination && weight) {
                    $.ajax({
                        url: '<?= base_url('/ongkir/checkOngkirPos') ?>',
                        method: 'get',
                        data: {
                            origin: origin,
                            destination: destination,
                            weight: weight,
                            courier: courier
                        },
                        
                        success: function(response) {
                            // let result = JSON.parse(response);
                            console.log(response);
                            let result = response;
                            let output = '';
                            if (result.rajaongkir && result.rajaongkir.results.length > 0) {
                                result.rajaongkir.results.forEach(courier => {
                                    courier.costs.forEach(cost => {
                                    output += `
                                        <div class="col text-center mx-2 my-3 p-3 rounded" for="${cost.cost[0].value}" id="box-ongkir">
                                                <input type="radio" class="custom-radio" id="${cost.cost[0].value}" name="harga" value="${cost.cost[0].value}">
                                                <br>
                                                <b>POS INDONESIA</b> 
                                                <h3> ${cost.service}</h3>
                                                <i> (${cost.description})</i>
                                                <h5>Harga :</h5>
                                                <b>Rp. ${cost.cost[0].value}</b>
                                                <h5>Estimasi :</h5>
                                                <i>${cost.cost[0].etd} hari</i>
                                                <br>
                                               
                                        </div>
                                        `;
                                      
                                    });
                                });
                            } else {
                                output = 'Gagal mengambil data ongkos kirim.';
                            }
                            $('#ongkir-result').html(output);
                        }
                    });
                } else {
                    $('#ongkir-result').html('Pilih semua opsi terlebih dahulu.');
                }
            });

            $("#btn-ok").click(function() {
                var harga = $('input[name="harga"]:checked').val();
                var valHarga = $('#harga').val();
                var valPpn = $('#ppn').val();

                $.ajax({
                    type: "get",
                    url: "/submit/ongkir", // Ganti dengan URL endpoint server Anda
                    data: {harga: harga},
                    success: function(response) {
                        // Asumsikan response adalah data yang ingin ditampilkan
                        console.log ('berhasil');
                        $("#hasil").html(`
                          : Rp <input type="number" name="nama_produk" id="nama_produk" value="${response.harga}" readonly>
                        `);
                        
                        var hargaTotal = parseInt(valHarga) + parseInt(valPpn)  + parseInt(response.harga) ;

                        $("#total").html(`
                        : Rp <input type="number" name="nama_produk" id="nama_produk" value="${hargaTotal}" readonly>
                        `);
                        
                        $("#jasa-kirim").removeClass('d-block');
                        $("#jasa-kirim").addClass('d-none');
                    
                    },
                    error: function(error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>

    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>

    <!-- JS Vendor, Plugins & Activation Script Files -->
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Vendors JS -->
    <script src="/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <!-- <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script> -->
    <script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assets/js/plugins/fancybox.min.js"></script>
    <!-- <script src="/assets/js/plugins/jquery.nice-select.min.js"></script> -->

    <!-- Custom Main JS -->
    <script src="/assets/js/main.js"></script>

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
