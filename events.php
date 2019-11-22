<?php 
require "./header.php";
$error="";
$user_id = $_SESSION['user']['user_id'];

$event="SELECT * from events where date>=CURDATE();";
$result2=mysqli_query($conn,$event);  

?>

<div class="container">
      
        <table class="table table-striped w-auto">
                <thead>
                    <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Event</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Time</th>
                    </tr>
                </thead>
            <?php
                while($row2 = $result2->fetch_assoc()): ?>
                    <tr>
                        <td class="w-auto"><?php echo  $row2['date'];?></td>
                        <td class="w-auto"><?php echo  $row2['event_name'];?> </td>
                        <td class="w-auto"><?php echo  $row2['location'];?> </td>
                        <td class="w-auto"><?php echo  $row2['description'];?> </td>
                        <td class="w-auto"><?php echo  $row2['time'];?> </td>                       
                    </tr>
                    

                <?php endwhile; ?>          

        </table>
  
<?php require "./footer.php"; ?>