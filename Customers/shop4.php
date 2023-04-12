
<?php 
   
   include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEJsqLrX8m37r7kJfMpOt2" crossorigin="anonymous">
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
                echo '<img src="' . $row['item_image'] . '" class="card-img-top" alt="' . $row['item_name'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['item_name'] . '</h5>';
                echo '<p class="card-text">$' . $row['item_price'] . '</p>';
                echo '<form method="post">';
                echo '<input type="number" name="quantity" value="1" min="1" class="form-control mb-2">';
                echo '<input type="hidden" name="product_id" value="' . $row['item_id'] . '">';
                echo '<button type="submit" class="btn btn-primary">Add to Cart</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper-base.min.js" integrity="sha384-KFUmIy7dczSP79R9XZbOD0ZodkN5N5w5KnNbxgufr8iQlxo+cIzH+kum/9YMyJLy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEJsqLrX8m37r7kJfMpOt2" crossorigin="anonymous"></script>
</body>
</html>
