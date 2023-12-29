<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
      <a href="home.php" class="logo">
            <img src="img/Logo2.png" alt="Express Home logo">
          </a>
         <ul>
            <li><a href="#">post property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">buy</i></a>
                  
               </li>
               <li><a href="#">sell</a>
                 
               </li>
               <li><a href="#">rent</a>
                
               </li>
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">about us</a></i></li>
                     <li><a href="contact.php">contact us</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
         <li><a href="favorites.php">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">login</a></li>
                  <li><a href="Sign up.php">Sign up</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>



<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="img/contactus.png" alt="">
      </div>
      <form action="" method="post">
         <h3>Contact Us</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->


<!-- footer section starts  -->
<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>+212 693857465</span></a>
         <a href="ExpressHome@gmail.com"><i class="fas fa-envelope"></i><span>ExpressHome@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>Nouacer, Casabblanca, Morocco</span></a>
      </div>

      <div class="box">
         <a href="home.php"><span>home</span></a>
         <a href="about.php"><span>about</span></a>
         <a href="contact.php"><span>contact</span></a>
         <a href="listing.php"><span>all listings</span></a>
         <a href="favorites.php"><span>Favorites</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit"> copyright @ 2023 <span>Express Home</span></div>

</footer>



<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>