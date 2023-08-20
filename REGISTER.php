<?php

include '../AE2/Visualizers/VISIBLE.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $id = one_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_UNSAFE_RAW);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_UNSAFE_RAW);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_UNSAFE_RAW);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_UNSAFE_RAW);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_UNSAFE_RAW);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = one_id().'.'.$ext;
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_files/'.$rename;

   $select_user = $conn->prepare("SELECT * FROM `USERS` WHERE email = ?");
   $select_user->execute([$email]);
   
   if($select_user->rowCount() > 0){
      $message[] = 'email already taken!';
   }else{
      if($pass != $cpass){
         $message[] = 'Your password doesnt match!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `USERS`(id, name, email, password, image) VALUES(?,?,?,?,?)");
         $insert_user->execute([$id, $name, $email, $cpass, $rename]);
         move_uploaded_file($image_tmp_name, $image_folder);
         
         $verify_user = $conn->prepare("SELECT * FROM `USERS` WHERE email = ? AND password = ? LIMIT 1");
         $verify_user->execute([$email, $pass]);
         $row = $verify_user->fetch(PDO::FETCH_ASSOC);
         
         if($verify_user->rowCount() > 0){
            setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
            header('location:HOME.php');
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">



</head>
<body>
<?php include '../AE2/Visualizers/HEADER.php';?>



<section class="form-container">
<form class="register" action="" method="post" enctype="multipart/form-data">
      <h3>create your account</h3>
      <div class="flex">
         <div class="col">
            <p>your name <span>*</span></p>
            <input type="text" name="name" placeholder="enter your name" maxlength="50" required class="box">
            <p>your email <span>*</span></p>
            <input type="email" name="email" placeholder="enter your email" maxlength="30" required class="box">
         </div>
         <div class="col">
            <p>your password <span>*</span></p>
            <input type="password" name="pass" placeholder="enter your password" maxlength="20" required class="box">
            <p>confirm your password <span>*</span></p>
            <input type="password" name="cpass" placeholder="confirm your password" maxlength="20" required class="box">
         </div>
      </div>
      <p>select an image <span>*</span></p>
      <input type="file" name="image" accept="image/*" required class="box">
      <p class="link">already have an account? <a href="LOGIN.php">login right now</a></p>
      <input type="submit" name="submit" value="register now" class="btn">
    </form>
 
 </section>
 <br>
 <?php include '../AE2/Visualizers/FOOTER.php';?>
<script src="/js/AE2/js/codejs.js"></script>
</body>
</html>