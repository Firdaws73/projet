<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Listings</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

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
               <li><a>help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">about us</a></i></li>
                     <li><a href="contact.php">contact us</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
         <li><a href="search.php">search <i class="fa-solid fa-magnifying-glass"></i></a></li>
            <li><a href="favorites.php">favorites <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
               <li><a href="edit_profile.php">Profile</a></li>
                  <li><a href="Sign up.php">Sign Out</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>
<!-- header section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">Favorites</h1>

   <div class="box-container">

      <div class="box">
         <div class="admin">
            <h3>S</h3>
            <div>
               <p>Sara Kheiri</p>
               <span>21-11-2023</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>house</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button  href="single.php?id=<?php echo $wishr['pid']; ?>"><?php echo $wishr['name']; type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="img/appart.png" alt="">
         </div>
         <h3 class="name">Apartment with nice view</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Maarif, Casablanca</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>2</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>90 m²</span></p>
         </div>
         <a href="view_property.php" class="btn">view property</a>
      </div>

</section>

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