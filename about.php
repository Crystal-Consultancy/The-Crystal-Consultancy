<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->
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
<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>About Us</h3>
         <p>Welcome to The Crystal Consultancy, your trusted partner in real estate investment and property management. At The Crystal Consultancy, we are passionate about helping you navigate the exciting world of real estate with confidence and expertise.

With years of industry experience and a deep commitment to excellence, our team of professionals is dedicated to providing you with personalized, comprehensive, and results-driven real estate solutions. Whether you're an investor looking to expand your portfolio, a homeowner in search of reliable property management services, or a tenant seeking a comfortable and secure living space, we have the knowledge, experience and resources to meet your unique needs.</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">Why Choose Us</h1>

   <div class="box-container">

      <div class="box">
         <h3>
            Experience and Expertise</h3>
         <p>With experience in the real estate industry, our team brings in-depth knowledge and expertise to every project. We have a proven track record of successful real estate investments and efficient property management.</p><br/><br/>
      </div>

      <div class="box">
         <h3>
            Customized Solutions</h3>
         <p> We recognize that every client and their real estate needs are unique. We tailor our services to align with your specific goals and preferences, ensuring a personalized experience.</p><br/><br/><br/><br/><br/><br/><br/>
      </div>

      <div class="box">
         <h3>Full-Service Approach</h3>
         <p> From property acquisition and leasing to day-to-day management and maintenance, we offer a full spectrum of services under one roof. This comprehensive approach streamlines operations and maximizes returns on your investments.
</p>
      </div>
      
            <div class="box">
            <h3>Transparency</h3>
         <p> We believe in open and transparent communication with our clients. You will have access to real-time financial reports, property updates, and performance metrics, allowing you to make informed decisions.
</p>
      </div>
      
                  <div class="box">
         <h3>Legal and Regulatory Compliance</h3>
         <p>Staying up-to-date with local and federal regulations is crucial in real estate. We ensure that your properties are in compliance with all relevant laws and regulations.

</p>
      </div>

 <div class="box">
         <h3>Value Creation</h3>
         <p>Our goal is to maximize the value of your real estate investments. We actively seek opportunities for growth, improvement, and increased profitability.<br/><br/>

</p>
      </div>
      
   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<!-- <section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

   </div>

</section> -->

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>