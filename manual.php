<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>manual</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>manual</h3>
   <p><a href="home.php">home</a> <span> / manual</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3> Manual</h3>
         <p>Welcome to the JoKitchen manual, your comprehensive guide to 
            learn on how to use this system. This manual has been meticulously 
            crafted to provide you with essential information, step-by-step instructions, 
            and valuable insights to teach our beloved customer.</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/login2.png" alt="">
         <h3>Log in/Register</h3>
         <p>You can just click on the log in if already have an account, otherwise you can create it by just click on register</p>
      </div>

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>You can choose your order in the menu section <br></p>
      </div>

      <div class="box">
         <img src="images/checkout.png" alt="">
         <h3>Check out</h3>
         <p>You can click on the cart icon to check out your order</p>
      </div>

      <div class="box">
         <img src="images/order.png" alt="">
         <h3>Check your order </h3>
         <p>If you want to see the real time ordering status, you can check it on the order page</p>
      </div>

      <div class="box">
         <img src="images/cooking.png" alt="">
         <h3>Wait for server</h3>
         <p>Just wait for our waiters to bring your order to you after check out</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Enjoy your best experience at JoKitchen</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>