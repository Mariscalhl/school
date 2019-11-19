<?php 
require "./header.php";

if(!isset($_SESSION['user']))
  {
    $url = 'login.php';
    header('Location: ' . $url, true , 301);
  }
  elseif($_SESSION['user']['user_type'] != 'S')
  {
  	$url = 'login.php';
    header('Location: ' . $url, true , 301);
  }

  $user_id = $_SESSION['user']['user_id'];

  $sql = "SELECT * FROM students WHERE student_id = '$user_id'";

  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($result);

  print_r($row);


//echo "Hello World";
?>