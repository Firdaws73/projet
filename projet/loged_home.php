
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<!-- header section starts  -->
<header class="header">
   <nav class="navbar nav-1">
      <section class="flex">
         <a href="#" class="logo">
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
                  <li><a href="edit_profile.php">Profile</a></li>
                  <li><a href="logout.php">Sign Out</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>


<!-- header section ends -->

<!-- home section starts  -->

<div class="home">

   <section class="center">
    <form action="search.html" method="post">
   <h3>Here to make your life easier</h3>
   <div class="box">
      <p>Search </p>
      <input type="text" name="location" required maxlength="50" placeholder="search here" class="input">
   </div>
   <input type="submit" value="search property" name="search" class="btn">
    </form>

</section>

         </div>
         <input type="submit" value="search property" name="search" class="btn">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>buy house</h3>
         <p>Thinking of owning your own piece of paradise? Explore our range of homes for sale, 
            meticulously selected to cater to different tastes and requirements.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>rent house</h3>
         <p>Browse through our diverse selection of rental properties, ranging from stylish urban apartments to charming suburban homes. 
            Our listings feature detailed descriptions, vivid images, and comprehensive information about each product.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>sell house</h3>
         <p>Are you looking to sell your property? Let us guide you through a seamless and rewarding selling experience. 
            Our platform offers a comprehensive services tailored to meet your selling needs.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">latest listings</h1>

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
               <button type="submit" name="save" class="far fa-heart"></button>
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

      <div class="box">
         <div class="admin">
            <h3>A</h3>
            <div>
               <p>Adam Selo</p>
               <span>06-03-2023</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>Apartment</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="img/app.jpg" alt="">
         </div>
         <h3 class="name">Modern Apartment</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Bd, Hassan</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>120 m²</span></p>
         </div>
         <a href="view_property.php" class="btn">view property</a>
      </div>

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>Jad Lehlo</p>
               <span>13-12-2023</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>3</span></p>
            <p class="type"><span>Studio</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="img/studio.jpg" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Hay Amal, Rabat</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>54 m²</span></p>
         </div>
         <a href="view_property.php" class="btn">view property</a>
      </div>

   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listing.php" class="inline-btn">view all</a>
   </div>

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


<script src="js/script.js"></script>

</body>
</html>