<?php
	$title = "index";
	$file = "index.php";
	$description = "index page for my WEBD2201 Website";
	$date = "March 8, 2018";
	$banner = "Home Page";
	include('./header.php');
?>





<div class="container">

  <center>  
  	<img src="./images/school_logo.png" width="50%" height="300" alt="school image"/>
  	<p>School Information will go here.Probably</p>

	<iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
	</iframe>
  	
  </center>


<?php 

//******************************************************************************************

//SQL EXAMPLE

	// Check connection


	// $sql = "SELECT user_id, user_email FROM users";
	
	// $result = $conn->query($sql);

	// if ($result->num_rows > 0) {
	//     // output data of each row
	//     while($row = $result->fetch_assoc()) {
	//         echo "id: " . $row["banner_id"]. " - Email: " . $row["user_email"]. "<br>";
	//     }
	// } else {
	//     echo "0 results";
	// }
	// $conn->close();


 ?>



</div>



<br/>
<br/>
<br/>
<br/>
<br/>
<?php include ('./footer.php'); ?>