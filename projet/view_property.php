<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Property</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
         <li><a href="search.php">search <i class="fa-solid fa-magnifying-glass"></i></a></li>
         <li><a href="favorites.php">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="#">profile</a></li>
                  <li><a href="Sign up.php">Sign Out</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>


<!-- header section ends -->

<!-- view property section starts  -->

<section class="view-property">

   <div class="details">
      <div class="thumb">
         <div class="big-image">
            <img src="img/1.jpg" alt="">
         </div>
         <div class="small-images">
            <img src="img/2.jpg" alt="">
            <img src="img/3.jpg" alt="">
            <img src="img/4.jpg" alt="">
            <img src="img/5.jpg" alt="">
         </div>
      </div>
      <h3 class="name">Apartment</h3>
      <p class="location"><i class="fas fa-map-marker-alt"></i><span>Racine, Casablanca</span></p>
      <div class="info">
         <p><i class="fa-solid fa-money-bill"></i><span>6500</span></p>
         <p><i class="fas fa-user"></i><span>Karim Jalil (owner)</span></p>
         <p><i class="fas fa-phone"></i><a href="tel:0665487952">0665487952</a></p>
         <p><i class="fas fa-building"></i><span>Apartment</span></p>
         <p><i class="fas fa-house"></i><span>Rent</span></p>
         <p><i class="fas fa-calendar"></i><span>10-12-2023</span></p>
      </div>
      <h3 class="title">Details</h3>
      <div class="flex">
         <div class="box">
            <p><i>rooms :</i><span>2</span></p>
            <p><i>status :</i><span>available</span></p>
            <p><i>bedroom :</i><span>1</span></p>
            <p><i>bathroom :</i><span>2</span></p>
            <p><i>balcony :</i><span>1</span></p>
         </div>
         <div class="box">
            <p><i>Surface :</i><span>70㎡</span></p>
            <p><i>room floor :</i><span>3</span></p>
          
         </div>
      </div>
      <h3 class="title">Amenities</h3>
      <div class="flex">
         <div class="box">
            <p><i class="fas fa-check"></i><span>Balcony</span></p>
            <p><i class="fas fa-check"></i><span>Elevator</span></p>
            <p><i class="fas fa-times"></i><span>Pool</span></p>
            <p><i class="fas fa-check"></i><span>gardens</span></p>
         </div>
         <div class="box">
            <p><i class="fas fa-check"></i><span>parking area</span></p>
            <p><i class="fas fa-times"></i><span>Backyard</span></p>
            <p><i class="fas fa-times"></i><span>Pool</span></p>

          
         </div>
      </div>
      <h3 class="title">Description</h3>
      <p class="description">Coveted for its modern elegance and breathtaking views, this spacious apartment boasts an open-concept layout with abundant natural light. Featuring sleek hardwood floors, a gourmet kitchen with state-of-the-art appliances, and a luxurious master suite, this urban oasis offers the perfect blend of sophistication and convenience. Enjoy the convenience of nearby amenities and the tranquility of a serene neighborhood, 
         making this apartment an ideal retreat for modern living.</p>
      <form action="" method="post">
         <input type="submit" value="save property" name="save" class="inline-btn">
      </form>
   </div>

</section>

<!-- view property section ends -->












<!-- footer section starts  -->

</section>

<!-- listings section ends -->




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