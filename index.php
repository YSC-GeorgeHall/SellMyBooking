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
        
         background: url(images/hero3.jpg) repeat 0 0; 
         background-size: auto;
         }
         .dropdown:hover .dropdown-menu{
         display: block;
         }
         .dropdown-menu{
         margin-top: 0;
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
         <i class="fa-brands fa-facebook fa-2xl " style="padding-right: 5px;"></i>
         <i class="fa-brands fa-twitter fa-2xl" style="padding-right: 5px;"></i>
         <i class="fa-brands fa-instagram fa-2xl" style="padding-right: 15px;"></i>
      </div>
<!-- socials top right end -->
<!-- centred logo start -->
      <ul class="nav justify-content-center" style="padding-top: 15px;">
         <img src="images/SMB.jpg" alt="logo" style="height:100px;">
      </ul>
<!-- centred logo end -->
<!-- Navbar start -->
      <ul class="nav justify-content-center" style="padding-top: 15px; ">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link" href="#" style="padding-right: 100px;">Other Services</a>
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

<div class="jumbotron d-flex justify-content-center">
  <div>
    <h1 class="display-3">Welcome to Sell My Booking!</h1>

    <p class="lead d-flex justify-content-center" >A place to sell things you didn't know you could sell</p>
    <div class="d-flex justify-content-center">
<button type="button d-flex justify-content-center" class="btn btn-outline-secondary">View our listings</button>
    </div>
  </div>
</div>






      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   </body>
</html>