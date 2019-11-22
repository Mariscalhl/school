<?php
   include("header.php");
   //session_start();
   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE user_id = '$myusername' and user_password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $row = mysqli_fetch_assoc($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
   //    if($count == 1) {
   //       //echo $count;
   //       session_register("myusername");
   //       $_SESSION['login_user'] = $myusername;
   //       //redirect('https://www.google.com/');
   //       //redirect('./welcome.php');
   //       //header("location: ./index.php");
   //       // header("location: welcome.php");
   //       // Redirect to the new URL.
   //       //$url = 'http://www.google.com/';
   //       $url = 'index.php';
   //       //$url = 'welcome.php';
   //       header('Location: ' . $url, true , 301);
   //       exit;

   //    }else {
   //       $error = "Your Login Name or Password is invalid";
   //    }
   // }
   //*********************************************************************
      if($count == 1) {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
      $row = mysqli_fetch_assoc($result);

      $_SESSION['user'] = $row;

      //print_r($_SESSION['user']);

      if($_SESSION['user']['user_type'] == 'S'){
         // $url = 'test_dash.php';
      	$url = 'student_dash.php';
         //$url = 'http://www.google.com/';
         header('Location: ' . $url, true , 301);
      }
      else if($_SESSION['user']['user_type'] == 'T'){
         $url = 'teacher_dash.php';
         //$url = 'http://www.google.com/';
         header('Location: ' . $url, true , 301);

      }

      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
   
	<div class="container">
      <div align = "center">
         <div style = "width:400px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Banner ID  : </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  : </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
   </div>


<?php
   include("footer.php");
?>