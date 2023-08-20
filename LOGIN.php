<?php

include '../AE2/Visualizers/VISIBLE.php';

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_UNSAFE_RAW);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_UNSAFE_RAW);


   


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">



</head>
<body style="padding-left: 0;">
    <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message form">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<section class="form-container">

    <form action="" method="post" enctype="multipart/form-data" class="login">
       <h3>welcome back!</h3>
       <p>your email <span>*</span></p>
       <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
       <p>your password <span>*</span></p>
       <input type="password" name="pass" placeholder="enter your password" maxlength="20" required class="box">
       <p class="link">don't have an account? <a href="REGISTER.php">register now</a></p>
       <input type="submit" name="submit" value="login now" class="btn">
    </form>
 
 </section>
 <script>

    let darkMode = localStorage.getItem('dark-mode');
    let body = document.body;
    
    const enabeDarkMode = () =>{
       body.classList.add('dark');
       localStorage.setItem('dark-mode', 'enabled');
    }
    
    const disableDarkMode = () =>{
       body.classList.remove('dark');
       localStorage.setItem('dark-mode', 'disabled');
    }
    
    if(darkMode === 'enabled'){
       enabeDarkMode();
    }else{
       disableDarkMode();
    }
    
    </script>
       
    </body>
    </html>
