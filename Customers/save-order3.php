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
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        // check if cart session is set and not empty
        $cart = $_SESSION['cart']; // get the cart from session
        $total = 0;
        // loop through each item in the cart and display its details
        $table_rows = '';
        foreach($cart as $product_id => $item) {
            // Calculate sub total of each item and add it to the total
            $sub_total = $item['quantity'] * $item['price'];
            $total += $sub_total;
            // Display item details in table row
            $table_rows .= "<tr>
                    <td>
                        <a class='fancybox-buttons' href='../Admin/item_images/".$item['image']."' data-fancybox-group='button' title='Page "."'>
                            <img src='../Admin/item_images/".$item['image']."' class='img img-thumbnail' style='width:50px;height:50px;' />
                        </a>
                    </td>
                    <td>" . $item['name'] . "</td>
                    <td>" . $item['quantity'] . "</td>
                    <td>" . $item['price'] . "</td>
                    <td>" . $sub_total . "</td>
                    <td>
                            <form action='delete_item.php' method='POST'>
                                <input type='hidden' name='product_id' value='" . $product_id . "'>
                                <button type='submit' class='btn btn-danger'>Delete</button>
                            </form>
                    </td>
                </tr>";
        }
        ?>
        <table class="table">
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
                <?php echo $table_rows; ?>
            </tbody>
        </table>

        <?php
    // Display buttons to add more items or proceed to checkout
    echo '<div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <a href="shop3.php" class="btn btn-primary" style="margin-right:4rem;">Add More</a>
                      <a href="order_detail1.php" class="btn btn-primary">Proceed to checkout</a>
                  </div>
                  <div class="col-md-6">
                      <table class="table table-striped table-bordered">
                          <tbody>
                              <tr>
                                  <td>Sub Total:</td> 
                                  <td>' . $total . '</td>
                              </tr>
                              <tr>
                                  <td>Total:</td> 
                                  <td>' . $total . '</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>';
} else {
    // if cart session is not set or empty, display message
    echo '<h2>Your cart is empty</h2>';
}
?>
</div>
</body>
</html>