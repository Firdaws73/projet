<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   

<?php
require "cnx.php";
$con = cnx_pdo();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$bathrooms = $_POST['bathrooms'];
$location = $_POST['location'];
$offer = $_POST['offer'];
$type = $_POST['type'];
$budget = $_POST['budget'];
$rooms = $_POST['rooms'];
if (!empty($type) && $type == 'apartment'){
$prep = $con->query("SELECT DISTINCT a.* FROM appartement a JOIN offre_appart o ON a.id_appart = o.id_appart WHERE a.ville = :ville AND a.prix_appart <= :budget AND a.nbr_chambre = :rooms AND a.nbr_douche = :bathrooms");
$con ->bindValue(":ville",$location);
$con ->bindValue(":budget",$budget);
$con ->bindValue(":rooms",$rooms);
$con ->bindValue(":bathrooms",$bathrooms);
$appar= $con->fetchAll();

for ($i of $appar){
   
}
}
else if(!empty($type)){
$prep = $con->prepare("SELECT DISTINCT a.* FROM propriété a JOIN offre_prop o ON a.id_prop = o.id_appart WHERE a.ville = :ville AND a.prix_prop <= :budget AND a.nbr_chbre = :rooms AND a.nbr_dche = :bathrooms");
$con ->bindValue(':ville',$location);
$con ->bindValue(':budget',$budget);
$con ->bindValue(':rooms',$rooms);
$con ->bindValue(':bathrooms',$bathrooms);
}
}
?>
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
<script>

let change = () =>{
   let property = document.getElementById("list").value;
   let div=document.getElementById("propertyfilter");
   if(property == "maison" || property =="villa" || property == "duplex"){
      div.innerHTML=`<div class="box">
               <p>Backyard</p>
               <input type="checkbox" id="backyard" name="backyard" value="1"><br><br>
               </select>
            </div>
            <div class="box">
               <p>Pool</p>
               <input type="checkbox" id="Pool" name="Pool" value="1"><br><br>
               </select>
            </div>`
   }else {
      div.innerHTML=`<div class="box">
               <p>Balcony</p>
               <input type="checkbox" id="balcony" name="balcony" value="1"><br><br>
               </select>
            </div>
            <div class="box">
               <p>Elevator</p>
               <input type="checkbox" id="elevator" name="elevator" value="1"><br><br>
               </select>
            </div>`
   }

}
</script>
<!-- search filter section starts  -->

<section class="filters"  style="padding-bottom: 0;">

   <form action="search.php" method="post">
      <div id="close-filter"><i class="fas fa-times"></i></div>
      <h3>filter your search</h3>
         <div class="flex">
            <div class="box">
               <p>enter location</p>
               <input type="text" name="location" maxlength="50" placeholder="enter city name" class="input">
            </div>
            <div class="box">
               <p>offer type</p>
               <select name="offer" class="input">
                  <option value="sale">sale</option>
                  <option value="rent">rent</option>
               </select>
            </div>
            <div class="box">
               <p>property type</p>
               <select name="type" class="input" id="list" onchange="change()">
                  <option value="maison">Maison</option>
                  <option value="villa">Villa</option>
                  <option value="duplex">Duplex</option>
                  <option value="apartment">Apartment</option>
               </select>
            </div>
           
            <div class="box">
               <p>maximum budget</p>
             <input type="number" name="budget" maxlength="50" placeholder="enter budget" class="input">
   
               </select>
            </div>
            <div class="box">
               <p>Rooms</p>
             <input type="number" name="rooms" maxlength="50" placeholder="enter how many rooms " class="input">
   
               </select>
            </div>
            <div class="box">
               <p>Bathrooms</p>
             <input type="number" name="bathrooms" maxlength="50" placeholder="enter how many rooms " class="input">
   
               </select>
            </div>
            <div></div>
            <div id="propertyfilter">
            </div>
            <input type="submit" value="search property" name="search" class="btn">
   </form>

</section>
<!-- search filter section ends -->

<!-- listings section starts  -->

<section class="listings">

<?php
     require_once "db.php";

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['submit'])) {
        // Récupérer les valeurs du formulaire
        $price = $_POST['budget'] ?? null;
        $bedrooms = $_POST['rooms'] ?? null;
        $bathrooms = $_POST['bathrooms'] ?? null;
        $balcony = isset($_POST['balcony']) ? 1 : 0;
        $elevator = isset($_POST['elevator']) ? 1 : 0;
        $sql = "SELECT * FROM appartement WHERE prix <= ? AND nombre_chambres >= ? AND nombre_douches >= ? AND balcon = ? AND ascenseur = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiiii", $price, $bedrooms, $bathrooms, $balcony, $elevator);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            // Afficher les détails des propriétés ici
        }
        
    }
    ?>
    
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
         <a href="listings.php"><span>all listings</span></a>
         <a href="favorites.php"><span>saved properties</span></a>
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