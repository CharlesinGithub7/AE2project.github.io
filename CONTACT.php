<?php

include '../AE2/Visualizers/VISIBLE.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $name = $_POST['name']; 
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email']; 
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number']; 
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['message']; 
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_contact = $conn->prepare("SELECT * FROM `CONTACT` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_contact->execute([$name, $email, $number, $msg]);

   if($select_contact->rowCount() > 0){
      $message[] = 'Your message is already sent!';
   }else{
      $insert_message = $conn->prepare("INSERT INTO `CONTACT`(name, email, number, message) VALUES(?,?,?,?)");
      $insert_message->execute([$name, $email, $number, $msg]);
      $message[] = 'Your message was sent successfully!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">



</head>
<body>
<?php include '../AE2/Visualizers/HEADER.php';?>
<section class="contact">
<div class="row">
    <div class="image">
        <img src="images/Agregar un título (3).png" alt="">
    </div>
    <form action="" method="post">
        <h3>Contact us if you have any comment or doubt</h3>
        <input type="text" placeholder="enter your name" required maxlength="100" name="name" class="box">
        <input type="email" placeholder="enter your email" required maxlength="100" name="email" class="box">
        <input type="number" min="0" max="9999999999" placeholder="enter your number" required maxlength="10" name="number" class="box">
        <textarea name="msg" class="box" placeholder="enter your message" required cols="30" rows="10" maxlength="1000"></textarea>
        <input type="submit" value="send message" class="inline-btn" name="submit">
     </form>
    </div>

    <div class="box-container">
 
       <div class="box">
        <i class="fa-solid fa-square-phone"></i>
          <h3>phone number</h3>
          <a href="tel:4424188671">442-418-8671</a>
          <a href="tel:4428688612">442-868-8612</a>
       </div>

       <div class="box">
        <i class="fa-solid fa-square-envelope"></i>
        <h3>email address</h3>
        <a href="mailto:teamgac@gmail.com">teamgac@gmail.com</a>
        <a href="mailto:gac@gmail.com">gac@gmail.com</a>
     </div>

</section>
<?php include '../AE2/Visualizers/FOOTER.php';?>
<script src="/js/AE2/js/codejs.js"></script>
</body>
</html>

