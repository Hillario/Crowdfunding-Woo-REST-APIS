<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
  'http://127.0.0.1/wordpress',
  'ck_92b5d1d75ab86b7a6b5584905213cacf48137462',
  'cs_bfb2e24cbef927a7c6cbd2b32a87401aabb37c0e',
  [
    'version' => 'wc/v3',
  ]
);

//get customer id 2
print_r($woocommerce->get('customers/2'));


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duma Crowdfunding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Start Fundraiser</h1>

    <div class="container">
        <h2>Fundraiser Form</h2>
        <form>
            <div class="form-group">
                <label for="causeName">Fundraiser Title / Cause Name:</label>
                <input type="text" class="form-control mb-3" id="causeName" placeholder="Enter Fundraiser Title">
            </div>
            <div class="form-group">
                <label for="type">Select Type Environmental education resource:</label>
                <select class="form-control mb-3" id="type">
                    <option>Select Type</option>
                    <!-- Add options dynamically from backend -->
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <!-- Example code for QTY, Amount, and Total -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="qty">QTY</label>
                        <input type="number" class="form-control" id="qty" placeholder="Enter Quantity">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="total">Total</label>
                        <input type="number" class="form-control" id="total" placeholder="Total" disabled>
                    </div>
                </div>
            </div>
            <!-- End of example code -->

            <div class="form-group">

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Short story on the education resoucre not more than 150 words</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>

            <div class="form-group">
                <label for="product">Select Type Of Climate action to undertake (Optional):</label>
                <select class="form-control mb-3" id="type">
                    <option>Select Type</option>
                    <!-- Add options dynamically from backend -->
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <!-- Example code for QTY, Amount, and Total -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="qty">QTY</label>
                        <input type="number" class="form-control" id="qty" placeholder="Enter Quantity">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="total">Total</label>
                        <input type="number" class="form-control" id="total" placeholder="Total" disabled>
                    </div>
                </div>
            </div>
            <!-- End of example code -->

            <div class="form-group">

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Short story on the climate action being undertaken not more than 150 words</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>



            <!-- Add other input elements as per the provided form -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>