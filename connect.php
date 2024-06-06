<?php
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$persons =$_POST['number'];
$address =$_POST['address'];
$place =$_POST['location'];
$arrivals =$_POST['arrivals'];
$leaving =$_POST['leaving'];


//database connection

$conn = new mysqli('localhost', 'root', '','user_db');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into booking(name, email, phone, persons, address, place, arrivals, leaving)
    values(?,?,?,?,?,?,?,?)");

    $stmt->bind_param("ssiissss",$name,$email,$phone,$persons,$address,$place,$arrivals,$leaving);
    $stmt->execute();


    $stmt->close();
    $conn->close();

}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

       
<!--swiper css link-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />



<!--font awesome cdn link-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <!--custom css file link-->

<link rel="stylesheet" href="css/style.css">
</head>

<body>

<section class="booking-confirm">
       
<div class="container">

<div class="content">
   <h3>hi, <span>adventurer</span></h3>
   <h1>Thankyou <span></span></h1>
   <p>your booking is added</p>

<p>press paynow</p>
<a href="card.php" class="btn">paynow</a>
</div>
</div>


</section>

<!--swiper js link-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file-->
<script src="js/script.js"></script>



</body>





</html>