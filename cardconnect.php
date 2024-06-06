<?php

$cardnumber =$_POST['cardnumber'];
$name =$_POST['name'];
$month =$_POST['month'];
$year =$_POST['year'];
$cvv =$_POST['cvv'];

//database connection

$conn = new mysqli('localhost', 'root', '','user_db');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into card(cardnumber, name, month, year, cvv)
    values(?,?,?,?,?)");

    $stmt->bind_param("isiii",$cardnumber,$name,$month,$year,$cvv);
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
   <h1>Thankyou for your payment <span></span></h1>
   <p>otp is sent to your contact number </p>

<a href="home2.php" class="btn">back to home</a>
</div>
</div>


</section>

<!--swiper js link-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file-->
<script src="js/script.js"></script>



</body>





</html>





