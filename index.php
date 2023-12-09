<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "contact_db";  
        $conn = mysqli_connect('localhost','root','','contact_db') or die ('connection failed');
        if(isset($_POST['submit'])){

          $name = mysqli_real_escape_string($conn, $_POST['name']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $number = $_POST['number'];
          $date = $_POST['date'];
        
          $insert = mysqli_query($conn, "INSERT INTO 'contact_form'(name, email, number, date)
          VALUES('$name','$email','$number','$date')");
        
          if($insert){
            $message[] = 'You are on waiting list!';
          }else{
            $message[] = 'Our call center is down right now';
          }
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barnatore Ylli</title>
<!-- fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

<!-- css -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>
 <!-- header   -->
<header class="header fixed-top">

<div class="container">

<div class="row align-items-center justify-content-between">
  <a href="#home" class="logo">Barnatore<span>Ylli</span></a>

  <nav class="nav">
<a href="#home">Home</a>
<a href="#about">About</a>
<a href="#contact">Contact</a>
  </nav>

  <a href="#contact" class="link-btn">Contact Us</a>

<div id="menu-btn" class="fas fa-bars"></div>
  
</div>

</div>

</header>

<!-- home section -->
<section class="home" id="home">
  <div class="container">
    <div class="row min-vh-100 align-items-center">
      <div class="content text-center text-md-left">
        <h3>Let us make you feel batter</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab libero sunt possimus quam corrupti molestiae!</p>
        <a href="#contact" class="link-btn">Contact Us</a>
      </div>
    </div>

  </div>


</section>
<!-- home section -->


<!-- about section -->
<section class="about">

<div class="container">
  
<div class="row aling-items-center">

<div class="col-md-6 image">
    <img src="jpg/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
</div>

<div class="col-md-6 content">
    <span>About Us</span>
    <h3>Why choose us</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque odio, fugiat veritatis deleniti ut tenetur deserunt inventore amet rem laudantium praesentium totam ullam recusandae, quibusdam iste. Vitae, culpa adipisci? Tempore.</p>
    <a href="#contact" class="link-btn">Contact Us</a>
</div>


</div>

</div>

</section>
<!-- about section -->


<!-- map section -->

<section class="map" id="map">
<h1 class="heading">You can find us here</h1>
  <div class="map-container box-container container">
  <div class="box">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d733.5087179321707!2d21.166636667259205!3d42.660616416557005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1702092051684!5m2!1sen!2s" width="470" height="510.6" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div>
</section>
<!-- map section -->

<!-- contact section -->

<section class="contact" id="contact">
<h1 class="heading">Contact here</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <?php
      if(isset($message)){
            foreach($message as $message){
        echo '<p class="message">'.$message.'</p>';
        }
      }
    
    
    ?> 
        <label for="name">YOUR NAME</label>
    <input type="text" id="name" placeholder="enter your name" name="name" class="box" required>
        <label for="email">Email Address</label>
    <input type="email" id="email" placeholder="enter your email" name="email" class="box" required>
          <label for="number">ENTER YOUR PHONE NUMBER</label>
         <input type="number" id="number" placeholder="enter your number" name="number" class="box" required>
    <label for="date">YOUR BIRTHDAY DATE</label>
          <input type="date" name="date" class="box" required>
    <input type="submit" value="Contact Us" name="submit" class="link-btn">

</form>
</section>








<!-- contact section -->


















<script src="js/script.js"></script>
</body>
</html>