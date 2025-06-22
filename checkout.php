<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

$total = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h2>Checkout Page</h2>
    <p>Total Bill: Rs. <?php echo $total; ?></p>
    <p>Thank you for shopping!</p>
    <?php session_destroy(); ?>
</body>
</html>