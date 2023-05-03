<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> | about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/fall-covers.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
        <p>Our bookstore can allow you to purchase the best selling books which are written by some of the most popular authors. </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/circle pfp.png" alt="">
         <p>Great customer service would totally recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Name</h3>
      </div>

      <div class="box">
         <img src="images/circle pfp.png" alt="">
         <p>Great customer service would totally recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Name</h3>
      </div>

      <div class="box">
         <img src="images/circle pfp.png" alt="">
         <p>Great customer service would totally recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Name </h3>
      </div>

      <div class="box">
         <img src="images/circle pfp.png" alt="">
         <p>Great customer service would totally recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Name</h3>
      </div>


      <div class="box">
         <img src="images/circle pfp.png" alt="">
         <p>Great customer service would totally recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Name</h3>
      </div>

    

      <div class="box">
         <img src="images/circle pfp.png" alt="">
         <p>great customer service would totally recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Name</h3>
      </div>

    

      <div class="box">
         <img src="images/Author.jpg" alt="">
         
         <h3>Author</h3>
         <p>Joanne Rowling CH OBE FRSL, best known by J. K. Rowling, is a British author and philanthropist. She wrote books like Harry Potter.</p>
      </div>

      <div class="box">
         <img src="images/Authors.jpg" alt="">
        
         <h3>Author</h3>
         <p>Stephen Edwin King is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novel.</p>
      </div>

      <div class="box">
         <img src="images/Author3.jpg" alt="">
     
         <h3>Author</h3>
         <p>Kenneth Martin Follett, CBE, FRSL is a British author of thrillers and historical novels .</p>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>



</body>
</html>