<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pricing</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

   <h1 class="heading">our pricing</h1>

   <div class="box-container">

      <div class="box">
         <h3>Basic plan</h3>
         <div class="price">Rs.250,000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>Premium plan</h3>
         <div class="price">Rs.650,000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>Ultimate plan</h3>
         <div class="price">Rs.15,00,000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="heading">Happy clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images\Aayush.jpg" alt="">
            <h3>Aayush Tiruwa</h3>
            <p>I am so satisfied with this weeding plan. Everybody who visited in my weeding loved the decoration and foods.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <h3>john doe</h3>
            <p>Aayush is handsome.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>