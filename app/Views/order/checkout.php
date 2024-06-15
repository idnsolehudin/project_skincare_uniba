<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkir</title>
    <!-- <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><//?= $title; ?></title> -->
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
    </style>
</head>
<body>
    <h1>Cek Ongkir</h1>
    <form id="cek-ongkir-form">
        <!-- <label for="origin">Origin:</label>
        <select id="origin" name="origin">
            <option value="">pilih Asal</option>
        </select><br> -->

        <label for="destination">Destination:</label>
        <select id="destination" name="destination">
            <option value="">Pilih Tujuan</option>
        </select><br>
        
        <label for="destination-city">Kota:</label>
        <select id="destination-city" name="destination_city">
            <option value="">Pilih Kota</option>
        </select><br>

        <label for="weight">Weight (gram):</label>
        <input type="number" id="weight" name="weight"><br>

        <label for="courier">Courier:</label>
        <select id="courier" name="courier">
            <option value="jne">JNE</option>
            <option value="tiki">TIKI</option>
            <option value="pos">Pos Indonesia</option>
        </select><br>


        <input type="submit" value="Submit">
        <!-- <button type="submit">Cek Ongkir</button> -->
        </form>
        <div class="form-group">
            <label>Paket</label>
            <select class="" id="nama_paket" name="nama_paket">

            </select>
        </div>


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
            })

            $('#destination').change(function() {
                var provinceId = $(this).val();
                $.getJSON('/ongkir/getCities/' + provinceId, function(data) {
                    var cities = data.rajaongkir.results;
                    $('#destination-city').empty();
                    $.each(cities, function(index, city) {
                        $('#destination-city').append('<option value="' + city.city_id + '">' + city.type + ' ' +city.city_name + '</option>');
                    });
                });
            });



            $('#cek-ongkir-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.post('/ongkir/checkOngkir', formData, function(data) {
                    var results = data.rajaongkir.results[0].costs;
                    $('#nama_paket').empty();
                    $.each(results, function(index, cost) {
                        $('#nama_paket').append('<option value="' + cost.service + '">' + cost.service + ': ' + cost.cost[0].value + ' IDR (' + cost.cost[0].etd + ' days)</option>');
                    });
                });
            });

            // $('#cek-ongkir-form').submit(function(event) {
            //  event.preventDefault();
            //     //mendapatkan ongkos kirim

            //     //mendapatkan ekspedisi yang dipilih
            //     var ekspedisi_terpilih = $("select[name=courier]").val();
            //     //mendapatkan id_distrik yang terpilih
            //     var distrik_terpilih = $("option:selected", "select[name=destination_city]").val();
            //     //mendapatkan total berat dari inputan
            //     var total_berat = $("input[name=weight]").val();
            //     $.ajax({
            //         type: 'post',
            //         url: '/ongkir/checkOngkir',
            //         data: 'ekspedisi=' + ekspedisi_terpilih + '&distrik=' + distrik_terpilih + '&berat=' + total_berat,
                    
            //         // success: function(hasil_paket) {
            //             //     //console.log(hasil_paket);
            //             //     $("select[name=nama_paket]").html(hasil_paket);
            //             // }
            //             })
            //     $.each(result, function(index, cost) {
            //         $('#nama_paket').append('<option value="' + cost.service + '">' + cost.service + ': ' + cost.cost[0].value + ' IDR (' + cost.cost[0].etd + ' days)</option>');
            //         // $('#nama_paket').append("<option value=''>--Pilih Paket</option> " + 
            //         //        "<option  paket='" + cost.service + "'ongkir='" + cost.cost[0].value + "'etd='" + cost[0].etd + "' >" +
            //         //         cost.service + " " + cost[0].value + " "+ cost[0].etd +"</option>"
            //     // )
            // });
            
        
        // });
        });



            // // Submit form to check ongkir
            // $('#cek-ongkir-form').submit(function(event) {
            //     event.preventDefault();
            //     var formData = $(this).serialize();
            //     $.post('/ongkir/checkOngkir/', formData, function(data) {
            //         var results = data.rajaongkir.results[0].costs;
            //         $('#result').empty();
            //         $.each(results, function(index, cost) {
            //             $('#result').append('<p>' + cost.service + ': ' + cost.cost[0].value + ' IDR (' + cost.cost[0].etd + ' days)</p>');
            //         });
            //     });
            // });
        
    </script>
</body>
</html>
