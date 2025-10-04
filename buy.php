<?php
// buy.php
if (!isset($_GET['car']) || !isset($_GET['price'])) {
    die("Invalid product selection.");
}

$carName = htmlspecialchars($_GET['car']);
$carPrice = (int) $_GET['price'];
$image = htmlspecialchars($_GET['image']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Buy <?php echo $carName; ?> - JameroCars</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(rgba(5,10,15,0.8), rgba(5,10,15,0.6)),
                  url('https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=1800&q=80');
      background-size: cover;
      background-position: center;
      color: #fff;
    }
    .panel-buy {
      background: rgba(255,255,255,0.95);
      color: #000;
      border-radius: 8px;
      padding: 30px;
      margin-top: 80px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }
    .btn-buy {
      background: #27ae60;
      color: #fff;
      font-weight: bold;
    }
    .btn-buy:hover {
      background: #219150;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 panel-buy text-center">
      <h2>Checkout - <?php echo $carName; ?></h2>
      <img src="<?php echo $image; ?>" alt="<?php echo $carName; ?>" style="max-width:100%; border-radius:8px; margin:15px 0;">
      <h3>Price: $<?php echo number_format($carPrice, 0, '.', ','); ?></h3>
      <p>Ready to drive home your new <?php echo $carName; ?>?</p>
      <a href="Jamero_Bootstrap7.php" class="btn btn-default">← Back to Shop</a>
      <button class="btn btn-buy" onclick="confirmPurchase()">Confirm Purchase</button>
    </div>
  </div>
</div>

<script>
function confirmPurchase() {
  alert("✅ Purchase Successful! Thank you for buying your new car 🚗");
  // after alert, redirect back to shop
  window.location.href = "Jamero_Bootstrap7.php";
}
</script>

</body>
</html>
