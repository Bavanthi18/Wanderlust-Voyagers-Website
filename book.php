<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My website</title>

       
<!--swiper css link-->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />



<!--font awesome cdn link-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <!--custom css file link-->

        <link rel="stylesheet" href="css/style.css">



<!--header section starts here-->
<section class="header">

<a href="home.php" class="logo"><i class="fas fa-paper-plane"></i><span>W</span>anderlust<span>V</span>oyagers</a>
     <nav class="navbar">
     <a href="home2.php"><i class="fas fa-home"></i>  home</a>
            <a href="about.php"><i class="fas fa-heart"></i>  about</a>
			<a href="gallery.php"><i class="fas fa-image"></i>  gallery</a>
            <a href="services.php"><i class="fas fa-car"></i>  services</a>  
			<a href="packages.php"><i class="fas fa-map-marker"></i>  packages</a>
            <a href="book.php"><i class="fas fa-money-bill"></i>  book</a>
            
	</nav>        


   


</head>
</section>

<section class="home" id="home">
    <div class="content">
        <h3>Booking</h3>
        <p>Book your trip!!!</p>
		<a href="home.php" class="btn">Discover more</a>
        
    </div>

        <div class="controls">
		<span class="" data src="imagess1/vid-1.mp4"></span>
		<span class="" data src="imagess1/vid-2.mp4"></span>
		<span class="" data src="imagess1/vid-3.mp4"></span>
		<span class="" data src="imagess1/vid-4.mp4"></span>
		<span class="" data src="imagess1/vid-5.mp4"></span>
		<span class="" data src="imagess1/vid-6.mp4"></span>
		
		</div>
            

        </div>

        <div class="video-container">
            <video src="imagess1/vid-6.mp4" id="video-slider" loop autoplay muted></video>
        </div>


</section>



 <!--header section ends here-->



<!-- section about-->
<h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
</h1>


 <section class="booking">
 <h1 class="heading-title">Book your trip!!!</h1>
 
 <form action="connect.php" method="post" class="book-form">
		<div class="flex">
		
			<div class="inputBox">
			
					<span>name:</span>
			<input type="text" placeholder="enter your name" name="name">
			
 
 </div>
 
 <div class="inputBox">
			
					<span>email:</span>
			<input type="email" placeholder="enter your email" name="email">
			
 </div>
 
 <div class="inputBox">
			
					<span>phone:</span>
			<input type="phone" placeholder="enter your number" name="phone">
			
 </div>

 <div class="inputBox">
			
					<span> persons:</span>
			<input type="number" placeholder="enter the number" name="number">
			
 </div>

 

 <div class="inputBox">
			
					<span>address:</span>
			<input type="text" placeholder="enter your address" name="address">
			
 </div>




 <div class="inputBox">
			
					<span>place:</span>
			<input type="text" placeholder="place you want to visit" name="location">
            
			
 </div>
 <div class="inputBox">
			
					<span>arrivals:</span>
			<input type="date"  name="arrivals">
			
 </div>
 <div class="inputBox">
			
					<span>leaving:</span>
			<input type="date"  name="leaving">
			
 </div>
 </div>


 <input type="submit" value="submit" class="btn" name="send">
 </form>
 
 
 
 
 </section>
 


 <section class="contact">

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    
    </h1>

    <div class="row">

        <div class="image">
            <img src="imagess1/con.jpg" alt="">
        </div>

        <form action="contactconnect.php" method="post">
            <div class="inputBox">
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
            </div>

            <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>


    </div>
<!--CONTACT-->


 </section>






<!--footer section starts-->
    <section class="footer">
        <div class="box-container">

        <div class="box">
            <<h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
			<a href="gallery.php"><i class="fas fa-angle-right"></i>gallery</a>
            <a href="services.php"><i class="fas fa-angle-right"></i>services</a>  
			<a href="packages.php"><i class="fas fa-angle-right"></i>packages</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>

        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
           
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +123-555-7890</a>
            <a href="#"><i class="fas fa-envelope"></i> vibushi@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> colombo, Sri Lanka - 63511</a>
            
           
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>

        </div>
        </div>

    <div class="credit"> created by <span>M.Bavanthika Vibushani</span> | all rights reserved |</div>

       

    </section>


<!--footer section ends-->
















<!--swiper js link-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file-->
<script.src="js/script.js"></script>



</body>





</html>