<?php

include '../AE2/Visualizers/VISIBLE.php';

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
    <title>SEARCH COURSE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">



</head>
<body>
<?php include '../AE2/Visualizers/HEADER.php';?>

<section class="courses">

   <h1 class="heading">search results</h1>

   <div class="box-container">

      <?php
         if(isset($_POST['search_course']) or isset($_POST['search_course_btn'])){
         $search_course = $_POST['search_course'];
         $select_courses = $conn->prepare("SELECT * FROM `CLASS` WHERE title LIKE '%{$search_course}%' AND status = ?");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];
      ?>
      <div class="box">
         <div class="tutor">
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="COURSES.php?get_id=<?= $course_id; ?>" class="inline-btn">view course</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no courses found!</p>';
      }
      }else{
         echo '<p class="empty">please search something else!</p>';
      }
      ?>

   </div>

</section>
<?php include '../AE2/Visualizers/FOOTER.php';?>
<script src="/js/AE2/js/codejs.js"></script>
</body>
</html>