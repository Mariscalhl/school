<?php 
require "./header.php";

if(!isset($_SESSION['user']))
{
  $url = 'grades.php';
  header('Location: ' . $url, true , 301);
}
elseif($_SESSION['user']['user_type'] != 'T')
{
  $url = 'grades.php';
  header('Location: ' . $url, true , 301);
}

$user_id = $_SESSION['user']['user_id'];

$sql = "SELECT * FROM students WHERE student_id = '$user_id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);



if (isset($_POST['courseOption']))
{
    $coursesTaughtByTeacher = $_POST['courseOption'];

     $sqlClassList = "SELECT students.student_id,students.student_first_name, students.student_last_name, grades.grade, courses.course_name FROM students join grades on students.student_id = grades.student_id join courses on grades.course_id = courses.course_id WHERE teacher_id = '$user_id' AND courses.course_name = '$coursesTaughtByTeacher' ORDER BY students.student_last_name;";

      $resultGrades = mysqli_query($conn,$sqlClassList) or die($conn->error);  
    
}


?>
<div class="container">
  <div class="justify-content-center">
    <!-- Creation Date -->
    <div  class="col-12">
      <?php      

      $sqlCourses = "SELECT course_name FROM courses WHERE teacher_id = '$user_id'";   
      $resultCourses = mysqli_query($conn,$sqlCourses) or die($conn->error);


      ?>
      <br/>
      

      <br/><br/>
      <div class="row justify-content-center">

        <button class="btn btn-dark"><a href="./teacher_dash.php"> GO BACK TO DASHBOARD </a></button>

        <form action= "./classList.php" method="POST">
          <br/><br/>
          <p> Choose a course from the dropdown to view the list of student you teach for the selected course. <br> Then click 'Submit' </p>          
          <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal" name="courseOption" value = courseOption name="courseOption" >
            <option> <?php foreach ($resultCourses as $key) {print "<option>".$key['course_name']."</option>";} ?> </option>
          </select>
          <div class="col" align="center">
            <br/><br/>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>           
          </div>
          <br/><br/>

        </form>
        <?php
         $sqlGrades = "SELECT students.student_id,students.student_first_name, students.student_last_name, grades.grade, courses.course_name FROM students join grades on students.student_id = grades.student_id join courses on grades.course_id = courses.course_id WHERE teacher_id = '$user_id' AND courses.course_name = '$coursesTaughtByTeacher' ORDER BY students.student_last_name;";

         $resultGrades = mysqli_query($conn,$sqlGrades) or die($conn->error);   
        ?>
        <table class="table table-striped w-auto" >
          <h1> <?php echo $coursesTaughtByTeacher . " Class List"  ?> </h1>
          <thead>
            <tr>
              <th class="text-nowrap">STUDENT ID</th>
              <th class="text-nowrap">FIRST NAME</th>
              <th class="text-nowrap">LAST NAME</th>
              <th class="text-nowrap">COURSE</th>       
              
            </tr>
          </thead>

          <?php
          while($row = $resultGrades->fetch_assoc()): ?>

            <tr>
              <td class="text-nowrap"> <?php echo  $row['student_id'];?> </td>        
              <td class="text-nowrap"> <?php echo  $row['student_first_name'];?> </td>
              <td class="text-nowrap"> <?php echo  $row['student_last_name'];?> </td>  
              <td class="text-nowrap"> <?php echo  $row['course_name'];?> </td>       
              <!-- <td> <a href="classlist.php?edit=<?php echo $row['student_id']; ?>" name = "edit" class=" btn btn-info"> Edit </a>&nbsp;</td>
              <td> <a href="classlist.php?pcoListDelete=<?php echo $row['ID']; ?>" name ="delete" class=" btn btn-danger">Delete</a>&nbsp; --></td>             


            </tr>

          <?php endwhile; ?>          

        </table>
      </div>      
    </div>    
  </div>
  <br/><br/>
</div>

