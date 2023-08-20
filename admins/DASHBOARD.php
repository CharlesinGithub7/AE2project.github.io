
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">


   </head>
<body>
<?php include '../Visualizers/A_HEADER.php'; ?>
   
   <section class="dashboard">
   
      <h1 class="heading">dashboard</h1>
   
      <div class="box-container">
   
         <div class="box">
            <h3>welcome!</h3>
            <p><?= $fetch_profile['name']; ?></p>
            <a href="profile.php" class="btn">view profile</a>
         </div>
   
         <div class="box">
            <h3><?= $total_contents; ?></h3>
            <p>total contents</p>
            <a href="add_content.php" class="btn">add new content</a>
         </div>
   
        
   
         <div class="box">
            <h3><?= $total_likes; ?></h3>
            <p>total likes</p>
            <a href="COURSES.php" class="btn">view courses</a>
         </div>
   
         <div class="box">
            <h3><?= $total_comments; ?></h3>
            <p>total comments</p>
            <a href="COMMENTS.php" class="btn">view comments</a>
         </div>
   
         <div class="box">
            <h3>quick select</h3>
            <p>login or register</p>
            <div class="flex-btn">
               <a href="LOGIN.php" class="option-btn">login</a>
               <a href="REGISTER.php" class="option-btn">register</a>
            </div>
         </div>
   
      </div>
   
   </section>

   <?php include ''; ?>
   
   <script src="../Visualizers/FOOTER.php"></script>
   
   </body>
   </html>