<?php
    // Initialize the session
    
    
    // Initialize the session
    session_start();
    
    
    // Include config file
    require_once "config.php";
    
    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = $login_err = "";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: smb-travel.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
    }
    ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sell My Booking</title>
        <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
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
                                <a class="nav-link" href="sellabooking.php" style="padding-right: 100px;">Sell My Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="alllistings.php" style="padding-right: 100px;">View Listings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lastmin.php" style="padding-right: 100px;">Last Minute</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pricing.php" style="padding-right: 100px;">Pricing</a>
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
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
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
        <!-- Constainer Start -->
        <div class="container">
            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                {
                ?>
            <span>
                <form action="insert.php" method="post">
                    <p>       
                    <div class="form-group">
                        <label for="listing_name"></label>
                        <input type="text" class="form-control" name="listing_name" id="listing_name" placeholder="Where are you travelling to?">
                        <label for="departure_date">departure_date:</label>
                        <input type="date" class="form-control" name="departure_date" id="departure_date">
                        <div class="input-group mb-3">
                            <span class="input-group-text">£</span>
                            <input type="text" class="form-control"  name="booking_cost" id="booking_cost" placeholder="How much was your booking in total">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Adults</label>
                            <select class="form-select" name="adults" id="adults">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Children</label>
                            <select class="form-select" name="children" id="children">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Infants</label>
                            <select class="form-select" name="infants" id="infants">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" name="bkgconfirmation" id="bkgconfirmation">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" name="user_image" id="user_image">
                        </div>
                        <input type="text" class="form-control" name="website_url" id="website_url" placeholder="URL">
                    </div>
                    </p>
                    <button class="btn btn-primary" input type="submit" type="button" value="Submit">Submit</button>
                </form>
            </span>
            <?php }else{ ?>
            <span>
                Create Profile
                <h2>Login</h2>
                <p>You must be logged in to create a listing</p>
                <?php 
                    if(!empty($login_err)){
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }        
                    ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                    <p>Don't have an account? <a href="registration.php">Sign up now</a>.</p>
                </form>
            </span>
            <?php } ?>
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
                <!-- Footer End -->
            </footer>
            <!-- Container End -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>