
<?php
session_start();
require_once "config.php";
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_SESSION['id'];
$listing_name = mysqli_real_escape_string($link, $_REQUEST['listing_name']);
$departure_date = mysqli_real_escape_string($link, $_REQUEST['departure_date']);
$booking_cost = mysqli_real_escape_string($link, $_REQUEST['booking_cost']);
$adults = mysqli_real_escape_string($link, $_REQUEST['adults']); 
$children = mysqli_real_escape_string($link, $_REQUEST['children']); 
$infants = mysqli_real_escape_string($link, $_REQUEST['infants']); 
$bkgconfirmation = mysqli_real_escape_string($link, $_REQUEST['bkgconfirmation']); 
$user_image = mysqli_real_escape_string($link, $_REQUEST['user_image']); 

$website_url = mysqli_real_escape_string($link, $_REQUEST['website_url']); 
$status = ['status'];


$sql = "INSERT INTO listings (id, listing_name, departure_date, booking_cost, adults, children, infants, bkgconfirmation, user_image, website_url, listing_status) VALUES ('$id', '$listing_name', '$departure_date', '$booking_cost', '$adults', '$children', '$infants', '$bkgconfirmation','$user_image', '$website_url', 'pending')";
if(mysqli_query($link, $sql)){
    header("Location: welcome.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>