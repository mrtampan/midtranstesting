<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Integrasi midtrans di aplikasi payment sederhana - qadrlabs.com</title>
</head>
<body>
  <?php $base = $_SERVER['REQUEST_URI']; ?>

  <h3>Cart:</h3>
  <ul>
      <li>Ebook Belajar PHP OOP at qadrLabs x @100000</li>
      <li>Ebook Belajar Laravel 8 at qadrLabs x @180000</li>
  </ul>

  <h4>Total: Rp 280.000,00</h4>

  <form action="<?php echo $base ?>checkout-process.php" method="POST">
      <input type="hidden" name="amount" value="280000"/>
      <button type="submit">Checkout</button>
  </form>

</body>
</html>