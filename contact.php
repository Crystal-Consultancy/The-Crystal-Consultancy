<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

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
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>Get In Touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="Enter your email" class="box">
         <input type="number" name="number" required maxlength="11" max="9999999999" min="0" placeholder="Enter your number" class="box">
         <textarea name="message" placeholder="Enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box">
         <h3><span>What services does The Crystal Consultancy offer?</span><i class="fas fa-angle-down"></i></h3>
         <p>The Crystal Consultancy specializes in two primary services: Real Estate Investment and Property Management. We assist clients in acquiring and managing residential and commercial real estate properties.</p>
      </div>

      <div class="box">
         <h3><span>How can I invest in real estate with The Crystal Consultancy?</span><i class="fas fa-angle-down"></i></h3>
         <p>To get started with real estate investment through The Crystal Consultancy, please reach out to our team. We will guide you through the investment process, provide information about available properties, and help you make informed investment decisions.</p>
      </div>

      <div class="box">
         <h3><span>Do I need prior real estate investment experience to work with you?</span><i class="fas fa-angle-down"></i></h3>
         <p>No, you do not need prior experience. Our team of experts is here to support both seasoned investors and those new to real estate. We offer tailored solutions and guidance to meet your specific needs.</p>
      </div>

      <div class="box">
         <h3><span>What types of properties do you manage?</span><i class="fas fa-angle-down"></i></h3>
         <p>We offer property management services for various property types, including residential apartments, single-family homes, commercial buildings, and more. Our services are customizable to suit your property portfolio.</p>
      </div>

      <div class="box">
         <h3><span>What does property management entail?</span><i class="fas fa-angle-down"></i></h3>
         <p>Our property management services cover a wide range of responsibilities, including tenant screening, lease management, property maintenance, financial reporting, and handling tenant inquiries and issues. We aim to simplify property ownership for you.</p>
      </div>

      <div class="box">
         <h3><span> How do you ensure the selection of quality tenants?</span><i class="fas fa-angle-down"></i></h3>
         <p>We employ a rigorous tenant screening process that includes background checks, credit checks, income verification, and rental history analysis. Our goal is to find responsible and reliable tenants for your properties.</p>
      </div>

      <div class="box">
         <h3><span> How do I get in touch with The Crystal Consultancy for more information or to request services?</span><i class="fas fa-angle-down"></i></h3>
         <p>You can reach out to us through our website's contact form, email us at thecrystalconsultant@gmail.com, or call our office at +92 317 1771245. Our team will be happy to assist you and provide any information you need.</p>
      </div> 

      <div class="box">
         <h3><span> Is my personal and financial information secure with The Crystal Consultancy?</span><i class="fas fa-angle-down"></i></h3>
         <p>Absolutely. We take data security and confidentiality seriously. Your personal and financial information is protected by industry standards and best practices.
At The Crystal Consultancy, we are committed to providing top-notch real estate investment and property management services. If you have any more questions or require assistance, don't hesitate to contact us. Your success is our priority!</p>
      </div>
   </div>
<style>
    .whatsapp_float{
        position: fixed;
        bottom: 25px;
        right: 30px;
    }
</style>
<div class="whatsapp_float">
    <a href="https://wa.me/923132684638" target="_blank"><img src="whatsapp.png" width="65px" height="65px"></a>
</div>
</section>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>