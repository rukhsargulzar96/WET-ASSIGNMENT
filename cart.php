<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

$cart = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['items'])) {
    foreach ($_POST['items'] as $item) {
        list($name, $price) = explode("-", $item);
        $cart[] = ["name" => $name, "price" => (int)$price];
    }
    $_SESSION['cart'] = $cart;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>
    <h2>Cart Page</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <ul>
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <li><?php echo $item['name'] . " - Rs. " . $item['price']; ?></li>
        <?php endforeach; ?>
        </ul>
        <a href="checkout.php">Proceed to Checkout</a>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</body>
</html>