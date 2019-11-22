<?php 
require "./header.php";
$user_id = $_SESSION['user']['user_id'];
$sql_grades="SELECT grades.student_id,grade, course_name FROM grades,students,courses
               WHERE grades.student_id=students.student_id AND grades.course_id=courses.course_id 
               AND students.student_id='$user_id'"; 
  $result2= mysqli_query($conn,$sql_grades);
  $row2=mysqli_fetch_assoc($result2);
?>
<div class="container">
      
        <table class="table table-striped w-auto">
                <thead>
                    <tr>
                    <th scope="col">Course Name</th>
                    <th scope="col">Grade</th>
                    
                    </tr>
                </thead>
            <?php
                while($row2 = $result2->fetch_assoc()): ?>
                    <tr>
                        <td class="w-auto"><?php echo  $row2['course_name'];?></td>
                        <td class="w-auto"><?php echo  $row2['grade'];?> </td>
                        
                        
                    </tr>
                    

                <?php endwhile; ?>          

        </table>

</div>


