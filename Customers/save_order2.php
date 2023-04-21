<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Orders</title>
    <!-- Bootstrap CDN link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3 class="text-info">Infinity petals uganda</h3>
    <?php
session_start(); // start the session

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart']; // get the cart from session
    $total = 0;
    $table_rows = '';

    // loop through each item in the cart and display its details
    foreach ($cart as $product_id => $item) {
        $sub_total = $item['quantity'] * $item['price'];
        $total += $sub_total;

        // Add a quantity input field and an ID to the form
        $table_rows .= "<tr>
            <td>
                <a class='fancybox-buttons' data-fancybox-group='button' title='Page "."'>
                    <img src='../Admin/item_images/".$item['image']."' class='img img-thumbnail' style='width:50px;height:50px;' />
                </a>
            </td>
            <td>" . $item['name'] . "</td>
            <td>
                <form action='update_quantity.php' method='POST' class='update-quantity-form'>
                    <input type='hidden' name='product_id' value='" . $product_id . "'>
                    <input type='number' name='quantity' id='quantity-" . $product_id . "' value='" . $item['quantity'] . "' min='1'>
                </form>
            </td>
            <td class='price'>" . $item['price'] . "</td>
            <td class='sub-total'>" . $sub_total . "</td>
            <td>
                <form action='remove_item.php' method='POST'>
                    <input type='hidden' name='product_id' value='" . $product_id . "'>
                    <button type='submit' class='btn btn-danger'>Delete</button>
                </form>
            </td>
        </tr>";
    }

    // Display the updated cart table and total
    echo "<table class='table'>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Sub Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            $table_rows
        </tbody>
    </table>
    <div class='container'>
        <div class='row'>
            <div class='col-md-6'>
                <a href='shop3.php' class='btn btn-primary' style='margin-right:4rem;'>Add More</a>
                <a href='order_detail1.php' class='btn btn-primary'>Proceed to checkout</a>
            </div>
            <div class='col-md-6'>
                <table class='table table-striped table-bordered'>
                    <tbody>
                        <tr>
                            <td>Sub Total:</td>
                            <td><span class='total-sub'>$total</span></td>
                        </tr>
                        <tr>
                            <td>Total:</td>
                            <td><span class='total'>$total</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>";
}
?>
</div>
</body>
</html>




