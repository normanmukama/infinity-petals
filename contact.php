<?php include 'header.php'; ?>


    <div class="container" style="margin-top: 10rem;">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="card-text">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div><i class="fa fa-location text-danger"></i></div>
                                    <h2 class="card-title"><i class="fa fa-map-marker-alt" style="color: red;"></i></h2>
                                    <p class="card-text">Rwampara, Uganda</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <div><i class="fab fa-user text-danger"></i></div>
                                    <h5 class="card-title">Phone numbers</h5>
                                    <p class="card-text">0784126654, 0705260807, 0703245904</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <div><i class="fab fa-user text-danger"></i></div>
                                    <h5 class="card-title">Email ddress</h5>
                                    <p class="card-text">kinonihighschool@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-light mb-0">
                    <div class="card-body">
                        <h5>Location by Map</h5>
                        <div class="card-text">
                            <i class="fa fa-bullseye" style="color: white;"></i>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.211481542681!2d30.4574892!3d-0.660929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4fac08df2e6c707!2sKinoni%20High%20School!5e0!3m2!1sen!2sug!4v1669915402447!5m2!1sen!2sug" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class=" mt-3" style="font-style: italic; color: blueviolet;">
                        <p>Please fill out your details with a short message for the reason of contact and we will get back to  you. Thank you!</p>
                    </div>
                </div>

                <h4 class="sent-notification"></h4>
    
                <form id="myForm" method="POST" action="sendEmail.php" class=" p-4 bg-light">
                    <div class=" ">
                        <!-- <h2>Send an Email</h2> -->
                        <label class="text-primary">Name</label>
                        <input id="name" name="name" class="form-control" type="text" placeholder="Enter Name">
                        
                        <br>
        
                        <label class="text-primary">Email</label>
                        <input id="email"  name="email"class="form-control" type="text" placeholder="Enter Email">
                        <br>
        
                        <label class="text-primary">Subject</label>
                        <input id="subject" name="subject"  class="form-control" type="text" placeholder=" Enter Subject"> 
        
                        <br>
        
                        <p class="text-primary">Message</p>
                        <textarea id="body" name="body" class=" form-control" rows="5" placeholder="Type Message"></textarea>
        
                        <br>
                        <input type="submit" class="btn btn-primary" value="submit" name="submit">
                        <!-- <button class="btn btn-primary" type="button" onclick="sendEmail()" value="Send An Email">Submit</button>  -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ---------real email code -->

<?php include 'footer.php'; ?>