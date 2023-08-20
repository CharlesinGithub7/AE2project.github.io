<?php

   include 'VISIBLE.php';

   setcookie('user_id', '', time() - 1, '/');

   header('location:../HOME.php');

?>