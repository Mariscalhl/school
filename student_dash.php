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
  



  //print_r($row);

//echo "Hello World";
?>
<style>
.box{
  width: 320px;
  padding: 10px;
  height: 80px;
  text-align: center;
  color:blue;
  border: 5px solid gray;
  margin: auto;
}
</style>
<div class="container">
<h1>Hello, <?php echo  $row['student_first_name'];?></h1>



    <div class="row">
    
      <a href="student_grade.php" class="btn btn-primary btn-lg" role="button">GRADES</a>    
      <a  href="settings.php" class="btn btn-primary btn-lg" role="button">SETTINGS</a>
      <a  href="events.php" class="btn btn-primary btn-lg" role="button">EVENTS</a>
    
    </div>

</div>



      
          
          
          
      

      
      
      
      
