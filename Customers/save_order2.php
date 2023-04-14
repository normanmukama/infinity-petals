<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save orders</title>
    <!-- Bootstrap CDN link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h3 class="text-info">Infinity petals uganda</h3>
    <?php
session_start(); // start the session
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // check if cart session is set and not empty
    $cart = $_SESSION['cart']; // get the cart from session
    // loop through each item in the cart and display its details
    foreach($cart as $product_id => $item) {
        echo '<h2>' . $item['name'] . '</h2>';
        echo '<p>Price: ' . $item['price'] . '</p>';
        echo '<p>Quantity: ' . $item['quantity'] . '</p>';
        echo "<a class='fancybox-buttons' href='../Admin/item_images/".$item['image']."' data-fancybox-group='button' title='Page "."'>
                <img src='../Admin/item_images/".$item['image']."' class='img img-thumbnail' style='width:150px;height:150px;' />
            </a>";
        echo '<hr>';
    }
    
    // display the order button and link to the order page
    echo '<a href="order_detail1.php" class="btn btn-primary">Place Order</a>';
    echo '<a href="shop3.php" class="btn btn-primary" style="margin-left:4rem;">Shop more</a>';
} else {
    // if cart session is not set or empty, display message
    echo '<h2>Your cart is empty</h2>';
}
?>

</div>
</body>
</html>



