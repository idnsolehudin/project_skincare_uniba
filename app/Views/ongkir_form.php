<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkir</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
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
    </form>

    <div id="result"></div>

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
