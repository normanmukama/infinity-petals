<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Shopping Cart system</title>
</head>
<body style="">

<nav class="navbar-expand-md bg-dark navbar-dark"> 
  
  <a class="navbar-brand ml-2" href="index.php"> <i class="fas fa-ambulance"></i>&nbsp;&nbsp;Medical campany</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>



  <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> 
        <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
    </ul>
  </div>
</nav>

 

 <div class="container">

  <div id="message"></div>
  <div class="row mt-2 pb-3">
        <?php
        include 'config.php';   
        $stmt = $conn->prepare("select * from items");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()):
        ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
                <div class="face">
                    <img src="images/<?= $row['item_image'] ?>" class="card-img-top" height="180px">
                    <div class="card-body p-1">
                        <p class=" text-center title"><?= $row['item_name']?></p>
                        <p class="title1 text-center"><span>Ugshs</span>&nbsp;
                        <?= number_format($row['item_price'],2)?>/-</p>
                    </div>
                    <div>
                      <form action="" class="form-submit">
                        <input type="hidden" class="pid" value="<?= $row['item_id'] ?>">
                        <input type="hidden" class="pname" value="<?= $row['item_name'] ?>">
                        <input type="hidden" class="pprice" value="<?= $row['item_price'] ?>">
                        <input type="hidden" class="pimage" value="<?= $row['item_image'] ?>">
                        <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                        <div class="button"> 
                          <!-- <button class="button1">Description</button> -->
                         <button class="button1 px-4 addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                       </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
 </div>
<?php include '../footer2.php'; ?>
 <script src="java.js"></script>
 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- Ajax for the add to cart button--->
<script type="text/javascript">
  $(document).ready(function(){
    $(".addItemBtn").click(function(e){
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
        success:function(response){
          $("#message").html(response);
          window.scrollTo(0,0);
          load_cart_item_number();
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