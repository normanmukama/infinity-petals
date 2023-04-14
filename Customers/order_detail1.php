<?php
  // validate the inputs
if(isset($_POST['email']) && !empty($_POST['email'])
&& isset($_POST['contact']) && !empty($_POST['contact'])
&& isset($_POST['street']) && !empty($_POST['street'])) {

// get the order details from the session
$cart = $_SESSION['cart'];

// insert the order details into the database
$stmt = $pdo->prepare("INSERT INTO orders (email, contact, street, total) VALUES (?, ?, ?, ?)");
$total = 0;
foreach($cart as $item) {
  $total += $item['price'] * $item['quantity'];
}
$stmt->execute([$_POST['email'], $_POST['contact'], $_POST['street'], $total]);

// clear the cart session
unset($_SESSION['cart']);

// display a success message
echo '<h2>Your order has been placed!</h2>';
} else {
// if inputs are not valid, display an error message
echo '<h2>Please provide valid information.</h2>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order details</title>
    <!-- Bootstrap CDN link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
<h2>Order Details</h2>
<form method="post" action="process_order.php">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  
  <label for="contact">Contact Number:</label>
  <input type="tel" id="contact" name="contact" required>
  
  <label for="street">Street Address:</label>
  <input type="text" id="street" name="street" required>
  
  <button type="submit" class="btn btn-primary">Place Order</button>
</form>

</body>
</html>
