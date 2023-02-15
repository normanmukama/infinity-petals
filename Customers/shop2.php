
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>infinity petals</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" /> 
</head>
<body>
 
<!--HOME SECTION TAG LINE END-->   
<div id="testimonials-sec" class="container set-pad" >
      <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
          <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">BEST SELLERS </h1>
          <p data-scroll-reveal="enter from the bottom after 0.3s" >
            Get a bonquet of your loved ones today
          </p>
        </div>
      </div>
      <!--/.HEADER LINE END-->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="table table-bordered table-striped">
                <thead>
                  <tr>Item_id</tr>
                  <tr>Item_name</tr>
                  <tr>Item_price</tr>
                  <tr>Item_image</tr>
                </thead>
              </div>
              <div class="table-body">
                <?php
                  require 'db_conection.php';
                  $query = "SELECT * FROM items";
                  $query_run = mysqli_query($dbcon, $query);

                  if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $item){
                      echo $item['Item_id'];
                    }
                  }
                  else{
                    echo "<h5>No record found </h5>";
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <form action="add_to-cart.php" method="post">
      <div class="row" >
        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
           <a href="" name="add_to_cart">
           <center>  <img class="img" src="assets/img/sun.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
            <a class="btn btn-info btn-set pr-4">Add to cart</a>
           </a>
          </div>
        </div>
        
        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
            <center>  <img class="img" src="assets/img/T128-2A.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
              <a class="btn btn-info btn-set pr-4" href="" >Add to cart</a>
          </div>
        </div>

        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
            <center>  <img class="img" src="assets/img/R&L.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
              <a class="btn btn-info btn-set pr-4" href="" >Add to cart</a>
          </div>
        </div>

        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
            <center>  <img class="img" src="assets/img/Tnx2.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
              <a class="btn btn-info btn-set pr-4" href="" >Add to cart</a>
          </div>
        </div>
      </div>

      <div class="row" >
        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
            <center>  <img class="img" src="assets/img/sun.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
              <a class="btn btn-info btn-set pr-4" href="" >Add to cart</a>
          </div>
        </div>
        
        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
            <center>  <img class="img" src="assets/img/T128-2A.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
              <a class="btn btn-info btn-set pr-4" href="" >Add to cart</a>
          </div>
        </div>

        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
            <center>  <img class="img" src="assets/img/R&L.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
              <a class="btn btn-info btn-set pr-4" href="" >Add to cart</a>
          </div>
        </div>

        <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="about-div">
            <center>  <img class="img" src="assets/img/Tnx2.jpg" style="width:200px;height:200px;" />
              <h4>Bird Paradise</h4>
                <hr />
                  <h5 class="">Ush.50,000</h5>
                <hr />
            </center>
              <a class="btn btn-info btn-set pr-4" href="" >Add to cart</a>
          </div>
        </div>
      </div>

    </div>
      </form>
       

<script src="js/bootstrap.min.js"></script>
</body>
</html>

