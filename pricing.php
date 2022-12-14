<?php
    // Initialize the session
    session_start();
    ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sell My Booking - Pricing</title>
      <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Tangerine">
      <style>
         body {
          background-color: #f7f7f7; 
         }
         .dropdown:hover .dropdown-menu{
         display: block;
         }
         .dropdown-menu{
         margin-top: 0;
         }
         .btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

      </style>
      <script>
         $(document).ready(function(){
             $(".dropdown").hover(function(){
                 var dropdownMenu = $(this).children(".dropdown-menu");
                 if(dropdownMenu.is(":visible")){
                     dropdownMenu.parent().toggleClass("open");
                 }
             });
         });     
      </script>
   </head>
   <body>
<!-- socials top right start -->
      <div class="d-flex justify-content-end" style="padding-top:10px;">
      <a href ="https://www.w3schools.com">  <i class="fa-brands fa-facebook fa-2xl " style="padding-right: 5px;"></i></a>
      <a href ="https://www.w3schools.com">  <i class="fa-brands fa-twitter fa-2xl" style="padding-right: 5px;"></i></a>
      <a href ="https://www.w3schools.com">   <i class="fa-brands fa-instagram fa-2xl" style="padding-right: 15px;"></i></a>
      </div>
<!-- socials top right end -->
<!-- centred logo start -->
      <ul class="nav justify-content-center" style="padding-top: 0px;">
      <a href ="index.php">  <img src="images/SMB3.png" alt="logo" style="height:150px;"></a>
      </ul>
<!-- centred logo end -->
<!-- Navbar start -->
      <ul class="nav justify-content-center" style="padding-top: 15px; ">
         <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarContent">
                  <ul class="navbar-nav" style="border-top: 1px solid black; border-bottom: 1px solid black;">
                     <li class="nav-item">
                        <a class="nav-link" href="sellabooking.php" style="padding-right: 100px;">Sell a Booking</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="alllistings.php" style="padding-right: 100px;">View Listings</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="lastmin.php" style="padding-right: 100px;">Last Minute</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="pricing.php" style="padding-right: 100px;">Pricing</a>
                     </li>

                     <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                    {
                    ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Current Listings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          </ul>
        </li>
                <?php }else{ ?>
                  
                  <li class="nav-item">
                        <a class="nav-link" href="registration.php" style="padding-right: 100px;">Register</a>
                     </li>
                  <li class="nav-item">
                        <a class="nav-link" href="login.php" >Log In</a>
                     </li>
                <?php } ?>
                  </ul>
               </div>
            </div>
         </nav>
      </ul>
<!-- navbar end -->


<!-- Constainer Start --><div class="container">
<div class="row justify-content-md-center">
<div class="col-md-3 card text-black bg-secondary mb-3" style="margin-right: 15px; background-color: lightgray !important;">
  <div class="card-header">Standard From £1</div>
  <div class="card-body">
    <a href="sellabooking.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true" style="width: 100%; margin-bottom:10px;">Sell My Booking</a>
    <p class="card-text">Only on sellmybooking.com</p>
    <b>Add your listing</b><br>
    <i class="fa-solid fa-check"></i> Add a title and description<br>
    <i class="fa-solid fa-check"></i> Add quantity<br>
    <i class="fa-solid fa-check"></i> Image upload<br>
    <i class="fa-solid fa-check"></i> Links to more info<br>
    <i class="fa-solid fa-check"></i> Add pricing<br>
    <b>Listing approval</b><br>
    <i class="fa-solid fa-check"></i> Within 24 hours<br>
    <i class="fa-solid fa-check"></i> Approval alerts by email<br>
    <i class="fa-solid fa-check"></i> Non approval notificaiton by emaik<br>
    <b>Listing management</b><br>
    <i class="fa-solid fa-check"></i> View  and edit listing<br>
    <i class="fa-solid fa-check"></i> End listing<br>
    <b>Marketing</b><br>
    <i class="fa-solid fa-check"></i> Share to socials<br>
    <i class="fa-solid fa-check"></i> Share URL<br>
    <b>Listing support</b><br>
    <i class="fa-solid fa-check"></i> Response with in 24 hours<br>
    
  </div>
  <a href="sellabooking.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true" style="width: 100%; margin-bottom:10px;">Select</a>
</div>
<div class="col-md-3 card text-black bg-secondary mb-3" style="margin-right: 15px; background-color: lightgray !important;">
  <div class="card-header">Plus from £25</div>
  <div class="card-body">
    <a href="sellabooking.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true" style="width: 100%; margin-bottom:10px;">Sell My Booking</a>
    <p class="card-text">Your listing will appear on Sell My Booking, and a choice of appearing on Sell My booking homepage or our newsletter</p>
    <i class="fa-solid fa-check"></i> All of the Standard offering<br>
    <b>Listing approval</b><br>
    <i class="fa-solid fa-check"></i> within 16 hours<br>
    <b>Marketing</b><br>
    <i class="fa-solid fa-check"></i> Newsletter or homepage promotion<br>
    <i class="fa-solid fa-check"></i> Appear in listings in creation order<br>

  </div>
  <a href="sellabooking.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true" style="width: 100%; margin-bottom:10px;">Select</a>
</div>
<div class="col-md-3 card text-black bg-secondary mb-3" style=" background-color: lightgray !important;">
  <div class="card-header">Premium from £40</div>
  <div class="card-body">
    <a href="sellabooking.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true" style="width: 100%; margin-bottom:10px;">Sell My Booking</a>
    <p class="card-text">Your listing will appear on Sell My Booking, and appear on Sell My booking homepage and our newsletter</p>
    <i class="fa-solid fa-check"></i> All of the Plus<br>
    <b>Listing approval</b><br>
    <i class="fa-solid fa-check"></i> Within 12 hours<br>
    <b>Marketing</b><br>
    <i class="fa-solid fa-check"></i> Newsletter promotion<br>
    <i class="fa-solid fa-check"></i> Homepage promotion for 1 week<br>
    <i class="fa-solid fa-check"></i> Always at the top of listings<br>
    <i class="fa-solid fa-check"></i> Shared to our social channels<br>
</div>
<a href="sellabooking.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true" style="width: 100%; margin-bottom: 10px;">Select</a>
</div>

<div class="d-flex justify-content-center">
<h1 class="display-3 style="text-align:="text-align: center;">Have a booking you cant go to?</h1><br>
</div>
<div class="d-flex justify-content-center">
<h4>Are you due to pay fees or is it non refundable?</h4>
</div>
<div class="row" style="padding-top: 20px;">
   <div class="col-md-4 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-1 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>List your booking and await approval</b></p>
    <p>Register and create your listing! All bookings must be sold at face value, and the seller must list any potential extra charges. Ensure your booking is in a cancellation period or non refundable. We will then approve the listing.</p>
   
  </div>
   </div>
  
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-2 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>Share it</b></p>
    <p>Your listing is approved! Share it on your social channels and so will we! Purchase additional marketing to have your listing viewed more! The options are endless.</p>
  </div>
   </div>
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-3 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>Your listing is sold</b></p>
    <p>Congratulations! Someone has agreed to buy your listing! They will need to send us payment, within 12 hours, before anything else happens. We will notify the seller.</p>

  </div>
   </div>
   <div class="col-md-4 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-4 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>Payment received and funds transferred</b></p>
    <p>Payment Received. The seller needs to complete any changes required, or any other documentation for selling the booking. When this is confirmed, the sale is approved and we will then trasnfer the funds to you!</p>
  </div>
   </div>
</div>
<!-- Footer Start -->
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    

    <ul class="nav col-md-4 justify-content-start">

      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">T&Cs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About Us</a></li>
    </ul>

<!-- logo start -->
      <ul class="nav" >
      <a href ="index.php">  <img src="images/SMB3.png" alt="logo" style="height:75px;"> </a>
      </ul>
<!-- logo end -->
<a href ="https://www.w3schools.com">   <i class="fa-brands fa-facebook fa-2xl " style="padding-right: 5px;"></i> </a>
<a href ="https://www.w3schools.com">     <i class="fa-brands fa-twitter fa-2xl" style="padding-right: 5px;"></i></a>
<a href ="https://www.w3schools.com">   <i class="fa-brands fa-instagram fa-2xl" style="padding-right: 15px;"></i></a>
  <!-- Footer End --></footer>
<!-- Container End --></div>
 
                           

                        
                  


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   </body>
</html>