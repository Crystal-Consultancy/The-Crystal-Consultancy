<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

include 'components/save_send.php';

?>

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
<?php include 'components/user_header.php'; ?>

<!-- search filter section starts  -->

<section class="filters" style="padding-bottom: 0;">

   <form action="" method="post">
      <div id="close-filter"><i class="fas fa-times"></i></div>
      <h3>Filter Your Search</h3>
         
         <div class="flex">
            <div class="box">
               <p>Enter Location</p>
                <select name="offer" class="input" required>
                    <option value="islamabad">Islamabad</option>
               <option value="karachi">Karachi</option>
                  <option value="lahore">Lahore</option>
               </select>
            </div>
            <div class="box">
               <p>Offer Type</p>
               <select name="offer" class="input" required>
               <option value="purchase">Purchase</option>
                  <option value="sale">Sale</option>
               </select>
            </div>
            <div class="box">
               <p>Property Type</p>
    <select id="propertyType" class="input" onchange="showOptions()">
        <option value="commercial">Commercial</option>
        <option value="residential">Plots </option>
        <option value="residential">Residential </option>
    </select>

    <div id="residentialOptions" style="display: none;" class="box">
    <p>Plots</p>
        <select id="residentialType" class="input" style="width: 1120px;">
            <option value="Agricultural Land">Agricultural Land</option>
            <option value="Commercial Plot">Commercial Plot</option>
            <option value="Industrial Land">Industrial Land</option>
            <option value="Residential Plot">Residential Plot</option>
        </select>
    </div>

    <div id="commercialOptions" style="display: none;" class="box" >
    <p>Commercial Type</p>
        <select id="commercialType" class="input" style="width: 1120px;">
            <option value="Building">Building</option>
            <option value="Office">Office</option>
            <option value="Factory">Factory</option>
            <option value="Warehouse">Warehouse</option>
        </select>
    </div>
    <div id="residentialType" style="display: none;" class="box" style="width: 1120px;">
    <p>Residential Type</p>
        <select id="commercialType" class="input">
            <option value="Flat">Flat</option>
            <option value="Farm House">Farm House</option>
            <option value="House">House</option>
            <option value="Lower Portion">Lower Portion</option>
            <option value="Penthouse">Penthouse</option>
            <option value="Room">Room</option>
            <option value="Upper Portion">Upper Portion</option>
        </select>
    </div>
            </div>
            <div class="box">
               <p>How many Bed DD</p>
               <select name="bhk" class="input" required>
                   <option value="-">0 Bed DD</option>
                  <option value="1">1 Bed DD</option>
                  <option value="2">2 Bed DD</option>
                  <option value="3">3 Bed DD</option>
                  <option value="4">4 Bed DD</option>
                  <option value="5">5 Bed DD</option>
                  <option value="others">Others</option>
               </select>
            </div>
            <div class="box">
               <p>Minimum budget</p>
               <select name="min" class="input" required>
                  <option value="100000">1 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="other">Others </option>
               </select>
            </div>
            <div class="box">
               <p>Maximum budget</p>
               <select name="max" class="input" required>
                  <option value="100000">1 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="other">Others </option>
               </select>
            </div>
            <div class="box">
               <p>Status</p>
               <select name="status" class="input" required>
                  <option value="ready to move">Ready to move</option>
                  <option value="on booking">On Booking</option>
               </select>
            </div>
            <div class="box">
               <p>Furnished</p>
               <select name="furnished" class="input" required>
                  <option value="furnished">Furnished</option>
                  <option value="semi-furnished">Semi-Furnished</option>
                  <option value="unfurnished">Unfurnished</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="filter_search" class="btn">
   </form>

</section>

<!-- search filter section ends -->

<div id="filter-btn" class="fas fa-filter"></div>

<?php

if(isset($_POST['h_search'])){

   $h_location = $_POST['h_location'];
   $h_location = filter_var($h_location, FILTER_SANITIZE_STRING);
   $h_type = $_POST['h_type'];
   $h_type = filter_var($h_type, FILTER_SANITIZE_STRING);
   $h_offer = $_POST['h_offer'];
   $h_offer = filter_var($h_offer, FILTER_SANITIZE_STRING);
   $h_min = $_POST['h_min'];
   $h_min = filter_var($h_min, FILTER_SANITIZE_STRING);
   $h_max = $_POST['h_max'];
   $h_max = filter_var($h_max, FILTER_SANITIZE_STRING);

   $select_properties = $conn->prepare("SELECT * FROM `property` WHERE address LIKE '%{$h_location}%' AND type LIKE '%{$h_type}%' AND offer LIKE '%{$h_offer}%' AND price BETWEEN $h_min AND $h_max ORDER BY date DESC");
   $select_properties->execute();

}elseif(isset($_POST['filter_search'])){

   $location = $_POST['location'];
   $location = filter_var($location, FILTER_SANITIZE_STRING);
   $type = $_POST['type'];
   $type = filter_var($type, FILTER_SANITIZE_STRING);
   $offer = $_POST['offer'];
   $offer = filter_var($offer, FILTER_SANITIZE_STRING);
   $bhk = $_POST['bhk'];
   $bhk = filter_var($bhk, FILTER_SANITIZE_STRING);
   $min = $_POST['min'];
   $min = filter_var($min, FILTER_SANITIZE_STRING);
   $max = $_POST['max'];
   $max = filter_var($max, FILTER_SANITIZE_STRING);
   $status = $_POST['status'];
   $status = filter_var($status, FILTER_SANITIZE_STRING);
   $furnished = $_POST['furnished'];
   $furnished = filter_var($furnished, FILTER_SANITIZE_STRING);

   $select_properties = $conn->prepare("SELECT * FROM `property` WHERE address LIKE '%{$location}%' AND type LIKE '%{$type}%' AND offer LIKE '%{$offer}%' AND bhk LIKE '%{$bhk}%' AND status LIKE '%{$status}%' AND furnished LIKE '%{$furnished}%' AND price BETWEEN $min AND $max ORDER BY date DESC");
   $select_properties->execute();

}else{
   $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
   $select_properties->execute();
}

?>

<!-- listings section starts  -->

<section class="listings">

   <?php 
      if(isset($_POST['h_search']) or isset($_POST['filter_search'])){
         echo '<h1 class="heading">search results</h1>';
      }else{
         echo '<h1 class="heading">latest listings</h1>';
      }
   ?>

   <div class="box-container">
      <?php
         $total_images = 0;
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

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
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>
            <?php
               }else{ 
            ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>
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
         echo '<p class="empty">no results found!</p>';
      }
      ?>
      
   </div>

</section>

<!-- listings section ends -->





<script>
        function showOptions() {
            var propertyType = document.getElementById("propertyType").value;
            var residentialOptions = document.getElementById("residentialOptions");
            var commercialOptions = document.getElementById("commercialOptions");

            if (propertyType === "residential") {
                residentialOptions.style.display = "block";
                commercialOptions.style.display = "none";
            } else if (propertyType === "commercial") {
                residentialOptions.style.display = "none";
                commercialOptions.style.display = "block";
            } else {
                residentialOptions.style.display = "none";
                commercialOptions.style.display = "none";
            }
        }
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

document.querySelector('#filter-btn').onclick = () =>{
   document.querySelector('.filters').classList.add('active');
}

document.querySelector('#close-filter').onclick = () =>{
   document.querySelector('.filters').classList.remove('active');
}

</script>

</body>
</html>