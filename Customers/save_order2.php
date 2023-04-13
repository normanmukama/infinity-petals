<?php
session_start(); // start the session
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // check if cart session is set and not empty
    $cart = $_SESSION['cart']; // get the cart from session
    // loop through each item in the cart and display its details
    foreach($cart as $item) {
        echo '<h2>' . $item['name'] . '</h2>';
        echo '<p>Price: ' . $item['price'] . '</p>';
        echo '<p>Quantity: ' . $item['quantity'] . '</p>';
        echo '<hr>';
    }
    
    // display the order button and link to the order page
    echo '<a href="order_detail1.php" class="btn btn-primary">Place Order</a>';
} else {
    // if cart session is not set or empty, display message
    echo '<h2>Your cart is empty</h2>';
}

?>


