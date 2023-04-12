<?php
session_start();

// Connect to the database
include 'db_conection.php';

// Check if the user submitted the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the product ID and quantity from the form data
    $product_id = mysqli_real_escape_string($dbcon, $_POST['product_id']);
    $quantity = mysqli_real_escape_string($dbcon, $_POST['quantity']);

    // Query the database to retrieve the product information
    $sql = "SELECT item_id, item_name, item_price, item_image FROM products WHERE item_id = ?";
    $stmt = mysqli_prepare($dbcon, $sql);
    mysqli_stmt_bind_param($stmt, "i", $product_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check for errors
    if (!$result) {
        echo "Error: " . mysqli_error($dbcon);
        exit();
    }

    $row = mysqli_fetch_assoc($result);

    // Create the shopping cart if it doesn't already exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the item to the shopping cart
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        // If the item doesn't already exist in the cart, add it with the selected quantity
        $_SESSION['cart'][$product_id] = array(
            'product_id' => $product_id,
            'name' => $row['item_name'],
            'price' => $row['item_price'],
            'image' => $row['item_image'],
            'quantity' => $quantity
        );
    }

    // Display a success message to the user
    echo "Item added to cart!";
}
?>

<form method="post">
    <?php
    // Query the database to retrieve the product information and populate the form
    // $sql = "SELECT id, item_name, item_price, item_image FROM products";
    // $result = mysqli_query($dbcon, $sql);

    $sql = "SELECT item_id, item_name, item_price, item_image FROM items";
    // echo $sql;
    $result = mysqli_query($dbcon, $sql);

if (!$result) {
    die(mysqli_error($dbcon));
}


    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo '<label>' . $row['item_name'] . ' ($' . $row['item_price'] .$row['item_image']. ')</label>';
    //     echo '<input type="number" name="quantity" value="1" min="1">';
    //     echo '<input type="hidden" name="product_id" value="' . $row['item_id'] . '">';
    //     echo '<button type="submit">Add to Cart</button>';
    // }
    ?>
</form>







<!-- ############################################################################################ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php
            // Query the database to retrieve the product information and populate the form
            $sql = "SELECT item_id, item_name, item_price, item_image FROM items";
            $result = mysqli_query($dbcon, $sql);

            if (!$result) {
                die(mysqli_error($dbcon));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo  " <a class='fancybox-buttons' href='../Admin/item_images/".$row['item_image']."' data-fancybox-group='button' title='Page "."- ".$row['item_name']."'>
                          <img src='../Admin/item_images/".$row['item_image']."' class='img img-thumbnail' style='width:300px;height:300px;' />
                        </a>";

                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['item_name'] . '</h5>';
                echo '<p class="card-text">$' . $row['item_price'] . '</p>';
                echo '<form method="post">';
                echo '<input type="number" name="quantity" value="1" min="1" class="form-control mb-2">';
                echo '<input type="hidden" name="product_id" value="' . $row['item_id'] . '">';
                // echo '<a type="submit" class="btn btn-primary">Add to Cart</a>';
                echo "<a class='btn btn-primary' href='add_to_cart2.php?cart=".$row['item_id']."'><span class='glyphicon glyphicon-shopping-cart'></span> Add to cart</a>";
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>


