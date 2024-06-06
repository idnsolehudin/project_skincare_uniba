<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pembayaran</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f0dddf; 
    }
    .card {
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-title {
      color: #f06071; 
    }
    #pay-button {
      width: 100%;
      background-color: #f06071; 
      border-color: #f06071; 
    }
    #pay-button:hover {
      background-color: #ff0080; 
      border-color: #ff0080; 
    }
    #result-json {
      margin-top: 20px;
      padding: 10px;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center mb-4">Checkout Payment</h4>
            <div class="text-center">
              <img src="/assets/images/logo1.png" alt="Payment Image" class="img-fluid rounded-circle mb-4">
            </div>
            <button id="pay-button" class="btn btn-primary btn-lg btn-block">Bayar Sekarang</button>
            <div id="result-json"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Pa3KO2uc5zln1UwS"></script>
  <script>
    document.getElementById('pay-button').onclick = function(){
      snap.pay('<?=$snapToken?>', {
        onSuccess: function(result){
          document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        onPending: function(result){
          document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        onError: function(result){
          document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
      });
    };
  </script>
</body>
</html>
