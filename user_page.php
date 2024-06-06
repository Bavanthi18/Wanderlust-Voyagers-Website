<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

<!--font awesome cdn link-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <section class="header">

<a href="home.php" class="logo"><i class="fas fa-paper-plane"></i><span>W</span>anderlust<span>V</span>oyagers</a>
     <nav class="navbar">
            <a href="home1.php">home</a>
            <a href="about.php">about</a>
			<a href="gallery.php">gallery</a>
            <a href="services.php">services</a>  
			<a href="packages.php">packages</a>
            <a href="book.php">book</a>
            
	</nav>        


   


</head>
</section>

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="about.php" class="btn">next</a>
   </div>

</div>

</body>
</html>