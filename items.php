<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
</head>
<body>
    <h2>Items Page</h2>
    
<form method="POST" action="cart.php">
    <img src="images/mobile.png" alt="mobile" width="100"><br>
    <input type="checkbox" name="items[]" value="Mobile Phone-20000"> mobile - Rs. 20000<br><br>

    <img src="images/headphones.png" alt="Headphones" width="100"><br>
    <input type="checkbox" name="items[]" value="Headphones-3000"> Headphones - Rs. 3000<br><br>

    <img src="images/laptop.png" alt="Laptop" width="100"><br>
    <input type="checkbox" name="items[]" value="Laptop-85000"> Laptop - Rs. 85000<br><br>

        <p>
            <input type="checkbox" name="items[]" value="Mobile Phone-20000"> mobile - Rs. 20000<br>
            <input type="checkbox" name="items[]" value="Headphones-3000"> Headphones - Rs. 3000<br>
            <input type="checkbox" name="items[]" value="Laptop-85000"> Laptop - Rs. 85000<br>
        </p>
        <input type="submit" value="Add to Cart">
    </form>
</body>
</html>