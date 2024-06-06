
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <!--swiper css link-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />



<!--font awesome cdn link-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <!--custom css file link-->

        <link rel="stylesheet" href="css/style2.css">

  
  <body>
  <section class="selectservice">


    <form class="" action="serviceselect.php" method="post" autocomplete="off">
<div class="boxcontainer">
      <label for="">Name:</label>
      <input type="text" name="name" required value="">
      <br/><br/>
      <label for="">Email:</label>
      <input type="text" name="email" required value="">
      <br/><br/>
      <label for="">Age:</label>
      <input type="number" name="age" required value="">
      <br/>
      <br/>
      <label for="">Place: </label>
      <select class="" name="place" required>
        <option value="" selected hidden>Select place you want to visit</option>
        <option value="NuwaraEliya">NuwaraEliya</option>
        <option value="Jaffna">Jaffna</option>
        <option value="Hanthana">Hanthana</option>
        <option value="Galle">Galle</option>
        <option value="Anuradhapura">Anuradhapura</option>
        <option value="Colombo">Colombo</option>
        <option value="Sigiriya">Sigiriya</option>
        <option value="Kandy">Kandy</option>
        <option value="Yala National Park">Yala National Park</option>
        <option value="Mirissa">Mirissa</option>
        <option value="Negombo">Negombo</option>
        <option value="Bentota">Bentota</option>
        <option value="Ella">Ella</option>
        <option value="Horton Plains National Park">Horton Plains National Park</option>
        <option value="Udawalawe National Park">Udawalawe National Park</option>
        <option value="Hikkaduwa">Hikkaduwa</option>
        <option value="Unawatuna">Unawatuna</option>
        <option value="Sinharaja Forest Reserve">Sinharaja Forest Reserve</option>
        <option value="Wilpattu National Park">Wilpattu National Park</option>
        <option value="Tangalle"></option>Tangalle</option>
        
    
    
      </select>

      <br/><br/>
      <label for="">Gender:</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female
      <br/><br/>
      <label for="">Services: </label><br/><br/>
      <input type="checkbox" name="services" value="Hotel">  Hotel<br/>
      <input type="checkbox" name="services" value="Vehicle">  Vehicle<br/>
      <input type="checkbox" name="services" value="Food">  Food<br/>
      <input type="checkbox" name="services" value="adventure">  adventure<br/>
      <input type="checkbox" name="services" value="tourguide">  tourguide<br/>
      <input type="checkbox" name="services" value="trekking">  trekking<br/>
      <input type="checkbox" name="services" value="camp fire">  camp fire<br/>
      <input type="checkbox" name="services" value="off road">  off road<br/>
      <input type="checkbox" name="services" value="photography">  photography<br/>
      <input type="checkbox" name="services" value="movies">  movies<br/>
      <input type="checkbox" name="services" value="shuttle">  shuttle<br/>
      <input type="checkbox" name="services" value="montgolfier balloons">  montgolfier balloons<br/>
      <input type="checkbox" name="services" value="boating">  boating
<br/>
<br/><br/>
      
 <input type="submit" value="submit" class="btn" name="submit">
    </form>

</div>
</section>
  </body>
</html>
