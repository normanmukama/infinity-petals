<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Cart</title>
</head>
<body>

<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"> <i class="fas fa-ambulance"></i>&nbsp;&nbsp;INFINITY PETALS</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cart.php"><i class="fas fa-shopping-cart"></i> 
        <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
    </ul>
  </div>
</nav>

 <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">

    <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];}else{ echo 'none';}
     unset($_SESSION['showAlert']); ?>" 
       class="alert alert-success alert-dismissible mt-3">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} 
        unset($_SESSION['showAlert']); ?></strong> 
      </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
              <td colspan='6'>
                <h4 class="text-center text-info m-0"> Products in your cart!</h4>
              </td>
            </tr>
            <tr>
              <!-- <th>ID</th> -->
              <th>Image</th>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <th>
                <a href="action.php?clear=all" class="badge-danger badge p-1"
                onclick="return confirm('Are sure you want to clear your cart?');"><i class="fas fa-trash"></i>
                &nbsp;&nbsp;Clear cart</a>
              </th>
            </tr>
            </thead>
            <tbody>
              <?php
              require 'config.php';
              $stmt = $conn->prepare("SELECT * FROM rand_cart");
              $stmt->execute();
              $result = $stmt->get_result();
              $grand_total = 0;
              while($row = $result->fetch_assoc()):
              ?>
              <tr>
                <!-- <td><?= $row['id'] ?></td> -->
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td>
                <img src="images/<?= $row['product_image'] ?>" class="card-img-top" style="height:50px;width:50px;">
                </td>

                <td><?= $row['product_name'] ?></td>
                <td><span>Ugshs</span>&nbsp;<?= number_format($row['product_price'],2) ?>/-</td>

                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?> ">

                <td>

                  <input type="number" class="form-control itemQty" value="<?= $row['qty']?>" style="width: 75px;">

                </td>
                <td><span>Ugshs</span>&nbsp;<?= number_format($row['total_price'],2) ?>/-</td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" 
                  onclick="return confirm('A you sure you want to remove this item')">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?> 
              <?php endwhile; ?>
              <tr>
                <td colspan="2">
                  <a href="index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>
                  &nbsp;&nbsp;Continue Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><span>Ugshs</span>&nbsp;<?= number_format($grand_total,2) ?>/-</b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total>1)? "":"disabled"; ?>">
                  <i class="far fa-credit-card"></i>
                  &nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>           
        </div>
    </div>
  </div>
 </div>
 <?php include '../footer.php'; ?>
 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- Ajax for the add to cart button--->
<script type="text/javascript">
  $(document).ready(function(){

    $(".itemQty").on('change', function(){
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {qty:qty,pid:pid,pprice:pprice},
        success: function(response){
          console.log(response);
        }
      }); 
    });
    
        load_cart_item_number();

    function load_cart_item_number(){
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {cartItem:"cart_item"},
        success:function(response){
          $("#cart-item").html(response);
        }
      })
    }
  });
</script>
</body>
</html>