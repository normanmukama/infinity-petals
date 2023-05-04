
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Petals</title>
    <link rel="shortcut icon" href="assets/img/infinity4.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Infinity nav</a>
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
            <a class="dropdown-item" href="#">Add action1</a>
            <a class="dropdown-item" href="#">Add action2</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>  

   
   
    <!-- Background image -->
      <div
        class="bg-image"
        style="
          background-image: url('assets/img/tnx5.jpg');
          height: 400px;
        "
      ></div>
<!-- Background image -->
    <div class="container my-3">
      <h3 class="text-center text-danger">Let flowers speak for you</h3>
    </div>

    <div class="container">
          <div class="row">
           <div class="col-md-6">
             <img class="img-fluid" src="assets/img/person-3.png" alt="">
           </div>
        <div class="col-md-6">
          <div class="">
            <div class="card-body">
              <h4 class="card-title">About us</h4>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et distinctio atque eum maxime id, quidem veritatis, laborum 
                amet dolorum praesentium blanditiis 
                ipsa. Vitae dolore sint at quaerat amet, quibusdam suscipit?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Aperiam facilis ab voluptas? Dolorem ab placeat hic quod
                  officiis assumenda maxime accusantium porro l
                audantium, in similique, modi nam fugiat! Alias, ratione!
              </p>
               <a class="btn btn-danger text-light mt-4" href=""><h5>check our collections</h5></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
           <div class="col-md-6">
             <img class="img-fluid" src="assets/img/sun.jpg" alt="">
           </div>
        <div class="col-md-6">
          <div class="">
            <div class="card-body">
              <h3 class="card-title">SERVICES</h3>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et distinctio atque eum maxime id, quidem veritatis, laborum 
                amet dolorum praesentium blanditiis 
                ipsa. Vitae dolore sint at quaerat amet, quibusdam suscipit?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Aperiam facilis ab voluptas? Dolorem ab placeat hic quod
                  officiis assumenda maxime accusantium porro l
                audantium, in similique, modi nam fugiat! Alias, ratione!
              </p>
               <a class="btn btn-info text-light mt-4" href="contact.php"><h5>contact us</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
          <!--  Core Bootstrap Script -->
          <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
  <?php
    include 'footer.php';
  ?>

