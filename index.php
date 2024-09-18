<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_COOKIE['admin_id'])){
   $admin_id = $_COOKIE['admin_id'];
}else{
   $admin_id = '';
}
include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<!-- home section starts  -->

<div class="home">

   <section class="center">
   <div class="box">
         <p><span>
             <b style="font-size: 5vw;">THE CYRSTAL CONSULTANCY</b><br/>
            <span style="font-size: 2.5vw;"><b>Real Estate Investment And Property Management Firm</b></span></p><br/>
      </div>

      <!-- <form action="search.php" method="post">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>enter location <span>*</span></p>
            <input type="text" name="h_location" required maxlength="100" placeholder="enter city name" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>property type <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="flat">flat</option>
                  <option value="house">house</option>
                  <option value="shop">shop</option>
               </select>
            </div>
            <div class="box">
               <p>offer type <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="sale">sale</option>
                  <option value="resale">resale</option>
                  <option value="rent">rent</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_min" class="input" required>
                  <option value="5000">5k</option>
                  <option value="10000">10k</option>
                  <option value="15000">15k</option>
                  <option value="20000">20k</option>
                  <option value="30000">30k</option>
                  <option value="40000">40k</option>
                  <option value="40000">40k</option>
                  <option value="50000">50k</option>
                  <option value="100000">1 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="9000000">90 lac</option>
                  <option value="10000000">1 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="150000000">15 Cr</option>
                  <option value="200000000">20 Cr</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_max" class="input" required>
                  <option value="5000">5k</option>
                  <option value="10000">10k</option>
                  <option value="15000">15k</option>
                  <option value="20000">20k</option>
                  <option value="30000">30k</option>
                  <option value="40000">40k</option>
                  <option value="40000">40k</option>
                  <option value="50000">50k</option>
                  <option value="100000">1 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="9000000">90 lac</option>
                  <option value="10000000">1 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="150000000">15 Cr</option>
                  <option value="200000000">20 Cr</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="h_search" class="btn">
      </form> -->

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

<h1 class="heading">Core Values</h1>

   <div class="box-container">
      <div class="box">
         <img src="images/target.png" alt="">
         <h3>Our Vision</h3>
         <p>Our vision is to break conventional business practices and stereotypes in Pakistan 
            by focusing on customer care instead of our profits. The leadership of The Crystal Consultancy
            believes in the philosophy of "Client First." and lives up to its vision</p>
      </div>

      <div class="box">
         <img src="images/stars.png" alt="">
         <h3>Our Mission</h3>
         <p>The Crystal Consultancy core mission is to take our clients to the destination under our 
            professional guidance. Every member of the team has the aim to show high-level 
            professionalism and quality marketing services.<br/>
            <br/></p>
      </div>

      <div class="box">
         <img src="images/handshake.png" alt="">
         <h3>Creating Long-Lasting Relationships</h3>
         <p>Our team aims to provide<br/>
         you with a healthy return <br/> on investment by increasing <br/> 
            your brand awareness, <br/> attracting that right audience, <br/> and helping you to retain <br/>
            them for a prolonged <br/> period of time.<br/>
            </p>
      </div>
   </div>

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Buy House</h3>
         <p> Discover a diverse selection of houses available for sale, tailored to your preferences and budget. Find your dream home with ease through our user-friendly listings.<br/><br/></p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Rent House</h3>
         <p> Explore a range of rental properties, from cosy apartments to spacious family homes. Whether you're looking for a short-term lease or a long-term rental, we have options that suit your needs.
</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Sell House</h3>
         <p>Ready to make a move? List your property with us and tap into our extensive network of potential buyers. Our experienced team will assist you throughout the selling process.<br/></p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Flats And Buildings</h3>
         <p>Browse through our extensive collection of apartments and multi-unit buildings. Whether you're an investor or searching for a new place to call home, you'll find a variety of options to consider.<br/><br/></p>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Shops And Malls</h3>
         <p> Explore commercial properties, including retail spaces and shopping malls. If you're a business owner seeking a new location or an investor looking for lucrative opportunities, we have listings to suit your requirements.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>24/7 Service</h3>
         <p> Our dedicated team is here for you around the clock. We understand that real estate decisions don't always follow a 9-to-5 schedule, so feel free to reach out to us anytime for assistance.<br/><br/></p>
      </div>

   </div>

</section>
<style>
   .whatsapp_float{
      position: fixed;
      bottom: 250px;
      right: 30px;
   }
</style>
<div class="whatsapp_float">
    <a href="https://wa.me/923132684638" target="_blank"><img src="whatsapp.png" width="55px" height="55px"></a>
</div>
<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">Latest Listings</h1>

   <div class="box-container">
      <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
               
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

         

            $select_admins = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
            $select_admins->execute([$fetch_property['admin_id']]);
            $fetch_admins = $select_admins->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_property['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_property['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_property['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            if(!empty($fetch_property['image_05'])){
               $image_coutn_05 = 1;
            }else{
               $image_coutn_05 = 0;
            }

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
            $select_saved->execute([$fetch_property['id'], $user_id]);

      ?>
      <form action="" method="POST">
         <div class="box">
            <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
            <?php
               if($select_saved->rowCount() > 0){
            ?>
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>Saved</span></button>
            <?php
               }else{ 
            ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>Save</span></button>
            <?php
               }
            ?>
            <div class="thumb">
               <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
               <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
            </div>
            <div class="admin">
               <div>
                  <span><?= $fetch_property['date']; ?></span>
               </div>
            </div>
         </div>
         <div class="box">
            <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
            <div class="price"><i class="fas fa-rupee-sign"></i><span><?= $fetch_property['price']; ?></span></div><br/>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
            
            <div class="flex">
               <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
               <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?></span></p>
            </div>
            <div class="flex-btn">
               <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">View Property</a>
               <a href="contact.php" class="btn">Contact Us</a>
            </div>
         </div>
      </form>
      <?php
         }
      }else{
         // echo '<p class="empty">no properties added yet! </p>';
      }
      ?>
      <a href></a>
   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.php" class="inline-btn">View All</a>
   </div>

</section>

<!-- listings section ends -->








<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

   let range = document.querySelector("#range");
   range.oninput = () =>{
      document.querySelector('#output').innerHTML = range.value;
   }

</script>

</body>
</html>