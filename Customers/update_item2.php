<?php
session_start(); // start the session

// check if cart session is set and not empty
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart']; // get the cart from session
    
    // check if product_id and new_quantity are set in the POST request
    if(isset($_POST['product_id']) && isset($_POST['new_quantity'])) {
        $product_id = $_POST['product_id'];
        $new_quantity = $_POST['new_quantity'];
        
        // check if the product_id is in the cart
        if(isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] = $new_quantity; // update the quantity of the item in the cart
            $_SESSION['cart'] = $cart; // update the cart session
            
            // redirect back to the cart page
            header("Location: cart.php");
            exit();
        }
    }
}

// if product_id and/or new_quantity is not set or the item is not in the cart, redirect to the shop page
header("Location: shop.php");
exit();
?>
