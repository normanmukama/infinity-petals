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
// echo '<h2>Please provide valid information.</h2>';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- <div class="container"> -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">Action 1</a>
            <a class="dropdown-item" href="#">Action 2</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>
  <h4 class="my-2 text-success container">Billing details</h4>
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-4 bg-light">
        <form class="form-group" method="post" action="process_order.php">
      
          <div class="bg-light">
            <label for="email">First Name:</label><br>
            <input class="form-control" class="form-control" type="text" id="fname" name="fname" required>
          </div>

          <div class="bg-light">
              <label for="contact">Last Name:</label><br>
              <input class="form-control" class="form-control" type="lname" id="contact" name="lname" required>
          </div>
        

        
          <div class="bg-light">
          <label for="email">Email:</label><br>
          <input class="form-control" type="email" id="email" name="email" required>
          </div>

          <div class="bg-light">
            <label for="contact">Contact Number:</label><br>
            <input class="form-control" type="tel" id="contact" name="contact" required>
          </div>
      
        
        
          <div class="bg-light">
              <label for="contact">Country / Region</label><br>
              <p>Uganda</p>
              <!-- <input  name="" value="Uganda" > -->
          </div>
          
          <div class="bg-light">
              <label for="street">Street Address:</label><br>
              <input class="form-control" type="text" id="street" name="street" value="Street name and House number" required><br>
          </div>
        
          <div class="bg-light">
              <!-- <label for="contact">District</label><br> -->
              <div class="form-group">
                <label for="my-select">District</label>
                <select id="my-select" class="form-control" name="">
                  <option>Mbarara</option>
                  <option>Kabale</option>
                  <option>Ntungamo</option>
                  <option>Kampala</option>
                </select>
              </div>
          </div>
          <div class="bg-light">
            <label for="details">Additional information</label>
            <textarea placeholder="Order notes for your order eg. special nots for delivery" name="" id="" cols="60" rows="5"></textarea>
          </div>
      
          <!-- <button type="submit" class="btn btn-primary">Place Order</button> -->
          <a class="text-success" href="#">Create Account?</a>
        </form>
      </div>
      <div class="col-md-6">
        <h4>Your Order</h4>
        <table class="table table-striped table-bordered">
          <tr>
            <thead>
               <tr>
                 <td>Product</td>
                 <td>Subtotal</td>
               </tr>
            </thead>
            <tbody>
              <tr>
                <td>data</td>
                <td>data</td>
              </tr>
              <tr>
                <td>data</td>
                <td>data</td>
              </tr>
              <tr>
                <td>data</td>
                <td>data</td>
              </tr>
            </tbody>
          </tr>
        </table>
        <div class="bg-light">
          <h5 class="text-success p-4">Pay With Cash Upon Delivery</h5>
        </div>
        <button type="submit" class="btn btn-success float-right">Place Order</button>
      </div>
    </div>
  </div>

</body>
</html>
