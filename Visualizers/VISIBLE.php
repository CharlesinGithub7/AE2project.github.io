<?php

   $server= "mysql:host=127.0.0.1;dbname=WEB_DB";
   $user_name = 'root';
   $user_pass = '';
   
try{
   $conn = new PDO($server,$user_name,$user_pass);
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo "Your server is conected";
}
catch(PDOException $e)  {
echo "The conection with the server has failed".$e->getMessage();
}


   function one_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $d = mt_rand(0, $length);
          $rand[] = $str[$d];
      }
      return implode($rand);
   }

?>