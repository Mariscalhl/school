<?php 
     
     require "./header.php";

     unset($_SESSION);
     session_destroy();
     session_name(SESSION_NAME);
     session_start("");
     $_SESSION['message'] = "You have successfully logged out.";

     $url = 'login.php';
     header('Location: ' . $url, true , 301);
     ob_flush();

?>