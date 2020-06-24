<?php
    require_once 'app/include/database.php';
    require_once 'app/include/function.php';
   
   if (isset($_POST['email'])){
       $email = trim($_POST['email']);
       $password = trim($_POST['password']);
       $insert_result = insert_army($email, $password);
       $header = 'Location: /?army=';
       $header .=$insert_result;
       header($header);
      
       } else {
           header('Location: /');
 }

?>
