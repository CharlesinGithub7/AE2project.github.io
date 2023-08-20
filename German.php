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
    <title>German</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="/js/AE2/css/stylee.css">



</head>
<body>
<?php include '../AE2/Visualizers/HEADER.php';?>

<?php include '../AE2/Visualizers/FOOTER.php';?>
<script src="/js/AE2/js/codejs.js"></script>
</body>
</html>