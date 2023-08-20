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
    <title>ABOUT</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">



</head>
<body>
<?php include '../AE2/Visualizers/HEADER.php';?>

<section class="about">
<div class="row">
    <div class="image">
        <img src="images/Diseño sin título (2).png" alt="">
    </div>

<div class="content">
    <h3>Why study with us?</h3>
    <p>
        We are a group of students which want to help other classmates in topics that we already experienced and learned, so they can have the opportunity to be successful in their academic life.
 Also this form of teaching  could be an interesting way to create groups of study and meet new people with the main goal of gain knowledge.
    </p>
    <a href="COURSES.html" class="inline-btn">our courses</a>
 </div>

</div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br> 
<br> 
<br>     
<?php include '../AE2/Visualizers/FOOTER.php';?>
        <script src="/js/AE2/js/codejs.js"></script>
        </body>
        </html>   