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
                        <div class="  invoice-header">
                          <h1>
                              <i class="fa fa-globe"></i> Invoice.
                              <small class="pull-right">
                                <?php

            use PhpParser\Node\Stmt\Echo_;

                                $tanggal = 'Y-m-d'  ;
                                echo date($tanggal)
                                ?>
                              </small>
                          </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
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
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="  table">
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
                                <td>Rp <?= number_format($order['price'],0,',','.'); ?></td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                          <h1>Cek Ongkir</h1>
                          <form id="cek-ongkir-form">
                              <label for="origin">Origin:</label>
                              <select id="origin" name="origin"></select><br>

                              <label for="destination">Destination:</label>
                              <select id="destination" name="destination"></select><br>

                              <label for="weight">Weight (gram):</label>
                              <input type="number" id="weight" name="weight"><br>

                              <label for="courier">Courier:</label>
                              <select id="courier" name="courier">
                                  <option value="jne">JNE</option>
                                  <option value="tiki">TIKI</option>
                                  <option value="pos">Pos Indonesia</option>
                              </select><br>

                              <button type="submit">Cek Ongkir</button>
                          </form
                          <div id="result"></div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>
                                  <input type="hidden" name="price_total" id="price_total" value="<?= $order['nama_produk']; ?>">
                                  : Rp <?php 
                                        $harga = $order['price'] * $order['qty'];
                                        echo number_format($harga,0,',','.'); 
                                        ?>,-
                                </td>
                                </tr>
                                <tr>
                                  <th>Ppn (11%)</th>
                                  <td>: Rp <?php
                                        $ppn = 0.11 * $harga; 
                                        echo number_format($ppn,0,',','.'); 
                                      ?>,-
                                  </td>
                                </tr>
                                <tr>
                                  <th>Ongkir</th>
                                  <td>: Gratis Ongkir</td>
                                </tr>
                                <tr>
                                  <th>Total</th>
                                  <td>
                                    <input type="hidden" name="total_price" id="total_price" value="<?php $total_price = $ppn + $harga ; echo $total_price;?>">
                                    : Rp <?php 
                                          echo number_format($total_price,0,',','.'); 
                                          ?>,-
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </form>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class=" ">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
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

        <script src="js/jquery.min.js">
    </script>
    <script scr="js/bootstrap.min.js">
    </script>



    <!-- JS Vendor, Plugins & Activation Script Files -->
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Vendors JS -->
    <script src="/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assets/js/plugins/fancybox.min.js"></script>
    <script src="/assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Custom Main JS -->
    <script src="/assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            // Fetch provinces on page load
            $.getJSON('/ongkir/getProvinces', function(data) {
                var provinces = data.rajaongkir.results;
                $.each(provinces, function(index, province) {
                    $('#origin').append('<option value="' + province.province_id + '">' + province.province + '</option>');
                    $('#destination').append('<option value="' + province.province_id + '">' + province.province + '</option>');
                });
            });

            // Fetch cities based on selected province
            $('#origin').change(function() {
                var provinceId = $(this).val();
                $.getJSON('/ongkir/getCities/' + provinceId, function(data) {
                    var cities = data.rajaongkir.results;
                    $('#origin-city').empty();
                    $.each(cities, function(index, city) {
                        $('#origin-city').append('<option value="' + city.city_id + '">' + city.city_name + '</option>');
                    });
                });
            });

            $('#destination').change(function() {
                var provinceId = $(this).val();
                $.getJSON('/ongkir/getCities/' + provinceId, function(data) {
                    var cities = data.rajaongkir.results;
                    $('#destination-city').empty();
                    $.each(cities, function(index, city) {
                        $('#destination-city').append('<option value="' + city.city_id + '">' + city.city_name + '</option>');
                    });
                });
            });

            // Submit form to check ongkir
            $('#cek-ongkir-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.post('/ongkir/checkOngkir', formData, function(data) {
                    var results = data.rajaongkir.results[0].costs;
                    $('#result').empty();
                    $.each(results, function(index, cost) {
                        $('#result').append('<p>' + cost.service + ': ' + cost.cost[0].value + ' IDR (' + cost.cost[0].etd + ' days)</p>');
                    });
                });
            });
        });
    </script>
</body>

</html>