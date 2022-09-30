<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Tangerine">
      <style>
         body {
          background-color: #f7f7f7; 
         
         /* background: url(images/hero3.jpg) repeat 0 0;  */
         /* background-size: auto; */
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
      <div class="d-flex justify-content-end" style="padding-top:20px;">
      <a href ="https://www.w3schools.com">  <i class="fa-brands fa-facebook fa-2xl " style="padding-right: 5px;"></i></a>
      <a href ="https://www.w3schools.com">  <i class="fa-brands fa-twitter fa-2xl" style="padding-right: 5px;"></i></a>
      <a href ="https://www.w3schools.com">   <i class="fa-brands fa-instagram fa-2xl" style="padding-right: 15px;"></i></a>
      </div>
<!-- socials top right end -->
<!-- centred logo start -->
      <ul class="nav justify-content-center" style="padding-top: 15px;">
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
                        <a class="nav-link" href="#" style="padding-right: 100px;">Sell a Booking</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="padding-right: 100px;">View Listings</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="padding-right: 100px;">Last Minute</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="padding-right: 100px;">Register</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" >Log In</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </ul>
<!-- navbar end -->
<!-- Constainer Start --><div class="container">
<div class="d-flex justify-content-center">
<h1 class="display-3 style="text-align:="text-align: center;">List it, Sell It!</h1>
</div>
<div class="row" style="padding-top: 20px;">
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-1 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>List your booking!</b></p>
    <p>Register with SMB, and create your listing! Add links and photos to make it appealing. All bookings must be sold at face value, and the seller must list any potential extra charges.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
   </div>
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-2 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>SMB approve your listing</b></p>
    <p>We approve all listings to ensure they meet the high standards we set, and to ensure that the person buying your listing is going to get exact what they are purchasing</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
   </div>
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-3 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>Share it!</b></p>
    <p>Your listing is approved! Share it on your social channels and so will we! Purchase additional marketing to have your listing viewed more! The options are endless.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
   </div>
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-4 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>Your listing is sold</b></p>
    <p>Congratulations! Someone has agreed to buy your listing! They will need to send us payment, within 12 hours, before anything else happens. We will notify the seller.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
   </div>
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-5 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>Payment received</b></p>
    <p>Payment Received. The seller needs to complete any changes required, or any other documentation for selling the booking. When this is confirmed, the sale is approved</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
   </div>
   <div class="col-md-2 text-center">
   <div class="card-body">
    <h5 class="card-title text-center"><i class="fa-solid fa-6 fa-2xl" > </i></h5>
    <p class="card-text text-center" style="padding-top: 10px;" ><b>Funds transferred to you</b></p>
    <p>Everything is completed! Your listing has sold and you havent paid any cancellation fees, and helped someone else! We will send you your money within 72 hours! </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
   </div>
</div>

<h1 class="display-6" style="padding-top: 10px;">Promoted Listings</h1>

<div class="row" style="padding-top: 20px;">
   <div class="col-md-2 text-center">
   <img class="card-img-top" src="images/hero3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Maldives</h5>
    <p class="card-text">May 2022<br>2 Adults<br>The Ritz</p>
    <a href="#" class="btn btn-primary">View Listing</a>
  </div>
   </div>
   <div class="col-md-2 text-center">
   <img class="card-img-top" src="images/hero3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Maldives</h5>
    <p class="card-text">May 2022<br>2 Adults<br>The Ritz</p>
    <a href="#" class="btn btn-primary">View Listing</a>
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