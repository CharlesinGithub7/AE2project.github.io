<?php

include '../AE2/Visualizers/VISIBLE.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `COMMENTS` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `BOOKMARK` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">



</head>
<body>
<?php include '../AE2/Visualizers/HEADER.php';?>
<section class="quick-select">

    <h1 class="heading">Quick menu</h1>
 
    <div class="box-container">
 
    <?php
if($user_id !=''){
    ?>
       <div class="box">
       <h3 class="title">likes and comments</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">view likes</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="COMMENTS.php" class="inline-btn">view comments</a>
         <p>saved classes : <span><?= $total_bookmarked; ?></span></p>
         <a href="BOOKMARK.php" class="inline-btn">view bookmark</a>
       </div>
       <?php
}else{
   ?>
   <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="LOGIN.php" class="option-btn">login</a>
            <a href="REGISTER.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>
     <div class="box">
        <h3 class="title">Courses</h3>
        <div class="flex">
           <a href="Maths.php"><i class="fas fa-chart-simple"></i><span>Mathematics</span></a>
           <a href="StudyS.php"><i class="fa-solid fa-book-open-reader"></i><span>Study Skills</span></a>
           <a href="German.php"><i class="fa-solid fa-language"></i><span>German</span></a>
           <a href="Computing.php"><i class="fa-solid fa-computer"></i><span>Computing</span></a>
           <a href="AcademicE.php"><i class="fa-solid fa-earth-americas"></i><span>Academic English</span></a>
        </div>
     </div>
    </section>

<section class="courses">

   <h1 class="heading">Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <div class="info">
            </div>
         </div>
         <div class="thumb">
            <img src="/js/AE2/images/mathematics-1509559_640.jpg" alt="">

         </div>
         <h3><a href="Maths.php"class="title">Mathematics Fundamentals</a></h3>

      </div>

      <div class="box">
         <div class="tutor">
            <div class="info">
            </div>
         </div>
         <div class="thumb">
            <img src="/js/AE2/images/library-7408106_640.jpg" alt="">
            
         </div>
         <h3><a href="StudyS.php"class="title">Study Skills</a></h3>
         
      </div>

      <div class="box">
         <div class="tutor">
            <div class="info">
            </div>
         </div>
         <div class="thumb">
            <img src="/js/AE2/images/parliament-1358937_640.jpg" alt="">
            
         </div>
         <h3><a href="German.php"class="title">German</a></h3>

      </div>

      <div class="box">
         <div class="tutor">
            <div class="info">
            </div>
         </div>
         <div class="thumb">
            <img src="/js/AE2/images/code-1839406_640.jpg" alt="">
         
         </div>
         <h3><a href="Computing.php"class="title">Computing</a></h3>

      </div>
   

   <div class="box">
    <div class="tutor">
       <div class="info">
       </div>
    </div>
    <div class="thumb">
       <img src="/js/AE2/images/girl-2771936_640.jpg" alt="">
    
    </div>
    <h3><a href="AcademicE.php" class="title">Academic English</a></h3>

 </div>
</div>

</section>
<?php include '../AE2/Visualizers/FOOTER.php';?>
<script src="/js/AE2/js/codejs.js"></script>
</body>
</html>