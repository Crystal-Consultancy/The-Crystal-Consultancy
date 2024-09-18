<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_GET['get_id'])){
   $get_id = $_GET['get_id'];
}else{
   $get_id = '';
   header('location:home.php');
}
if(isset($_POST['post'])){
$balcony = $_POST['balcony'];}

include 'components/save_send.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Property</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- view property section starts  -->

<section class="view-property">

   <h1 class="heading">Property Details</h1>

   <?php
      $select_properties = $conn->prepare("SELECT * FROM `property` WHERE id = ? ORDER BY date DESC LIMIT 1");
      $select_properties->execute([$get_id]);
      if($select_properties->rowCount() > 0){
         while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){

         $property_id = $fetch_property['id'];

         $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_user->execute([$fetch_property['user_id']]);
         $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

         $select_admins = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
         $select_admins->execute([$fetch_property['admin_id']]);
         $fetch_admins = $select_admins->fetch(PDO::FETCH_ASSOC);

         $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
         $select_saved->execute([$fetch_property['id'], $user_id]);
   ?>
   <div class="details">
     <div class="swiper images-container">
         <div class="swiper-wrapper">
            <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="" class="swiper-slide">
            <?php if(!empty($fetch_property['image_02'])){ ?>
            <img src="uploaded_files/<?= $fetch_property['image_02']; ?>" alt="" class="swiper-slide">
            <?php } ?>
            <?php if(!empty($fetch_property['image_03'])){ ?>
            <img src="uploaded_files/<?= $fetch_property['image_03']; ?>" alt="" class="swiper-slide">
            <?php } ?>
            <?php if(!empty($fetch_property['image_04'])){ ?>
            <img src="uploaded_files/<?= $fetch_property['image_04']; ?>" alt="" class="swiper-slide">
            <?php } ?>
            <?php if(!empty($fetch_property['image_05'])){ ?>
            <img src="uploaded_files/<?= $fetch_property['image_05']; ?>" alt="" class="swiper-slide">
            <?php } ?>
         </div>
         <div class="swiper-pagination"></div>
     </div>
      <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
      <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p><br/>
      <h3 class="title">Details</h3>
      <div class="flex">
         <div class="box">
            <p>Rooms :<span><?= $fetch_property['bhk']; ?> </span></p>
            <p>Deposit amount :<span><span class="fas fa-rupee-sign" style="margin-right: .5rem;"></span><?= $fetch_property['deposite']; ?></span></p>
            <p>Status :<span><?= $fetch_property['status']; ?></span></p>
            <p>Bedroom :<span><?= $fetch_property['bedroom']; ?></span></p>
            <p>Bathroom :<span><?= $fetch_property['bathroom']; ?></span></p>
            <p>Balcony :<span><?= $fetch_property['balcony']; ?></span></p>
         </div>
         <div class="box">
            <p>Area :<span><?= $fetch_property['carpet']; ?></span></p>
            <p>Age :<span><?= $fetch_property['age']; ?> years</span></p>
            <p>Total Floors :<span><?= $fetch_property['total_floors']; ?></span></p>
            <p>Room Floor :<span><?= $fetch_property['room_floor']; ?></span></p>
            <p>Furnished :<span><?= $fetch_property['furnished']; ?></span></p>
            <p><Loan :<span><?= $fetch_property['loan']; ?></span></p>
         </div>
      </div>
      <!--<h3 class="title">Amenities</h3>-->
      <!--<div class="flex">-->
      <!--<div class="box">-->
      <!--      <p><?php if($fetch_property['lift'] == 'yes'){echo "lift";}else{echo "";} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['security_guard'] == 'yes'){echo 'security guard';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['play_ground'] == 'yes'){echo 'play_ground';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['garden'] == 'yes'){echo 'garden';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['water_supply'] == 'yes'){echo 'water_supply';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['power_backup'] == 'yes'){echo 'power_backup';}else{echo '';} ?><span></span></p>-->
      <!--   </div>-->
      <!--   <div class="box">-->
      <!--      <p><?php if($fetch_property['parking_area'] == 'yes'){echo 'parking_area';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['gym'] == 'yes'){echo 'gym';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['shopping_mall'] == 'yes'){echo 'shopping_mall';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['hospital'] == 'yes'){echo 'hospital';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['school'] == 'yes'){echo 'school';}else{echo '';} ?><span></span></p>-->
      <!--      <p><?php if($fetch_property['market_area'] == 'yes'){echo 'market_area';}else{echo '';} ?><span></span></p>-->
      <!--   </div>-->
      <!--</div>-->
      <h3 class="title">Description</h3>
      <p class="description"><?= $fetch_property['description']; ?></p>
      <form action="" method="post" class="flex-btn">
         <input type="hidden" name="property_id" value="<?= $property_id; ?>">
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
         <a href="contact.php" class="btn">Contact Us</a>
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">property not found!</p>';
   }
   ?>

</section>

<!-- view property section ends -->










<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

var swiper = new Swiper(".images-container", {
   effect: "coverflow",
   grabCursor: true,
   centeredSlides: true,
   slidesPerView: "auto",
   loop:true,
   coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 200,
      modifier: 3,
      slideShadows: true,
   },
   pagination: {
      el: ".swiper-pagination",
   },
});

</script>

</body>
</html>