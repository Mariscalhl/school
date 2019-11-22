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


$id = 0;
$id = $course = $grade = "";
$update = false;



if (isset($_GET['editGrade'])){

  $grade = $_GET['editGrade'];
  $update = true;

  // $course = $_GET['course'];
  // $grade = $_GET['grade'];


  $sqlGrades = "SELECT * FROM grades WHERE grade = '$grade' ";
  //$sqlGrades = "SELECT students.student_id,student_first_name, student_last_name, grade, course_name, courses.course_id FROM students join grades on students.student_id = grades.student_id join courses on grades.course_id = courses.course_id ;";
  $result = mysqli_query($conn,$sqlGrades) or die($conn->error) or die($conn->error);

  if (count($result) == 1 ){

    $row = $result->fetch_array();
    $id = $row['student_id'];
    $course = $row['course_id'];
    $grade = $row['grade'];

  }
}

if (isset($_POST['courseOption']))
{
  $coursesTaughtByTeacher = $_POST['courseOption'];   

}

if (isset($_POST['update'])){

  $hiddenId = $_POST['hiddenId'];
  $id = $_GET['editGrade'];
  $course = $row['course_id'];
  $grade = $_POST['grade'];

  //$sqlUpdateGrades = "UPDATE GRADES SET GRADE = '$grade' WHERE student_id = '$id' AND course_id = '$course'  ";
  //$sqlUpdateGrades = "UPDATE GRADES SET grade = '$grade' ";

  // $sqlUpdateGrades = "UPDATE GRADES SET grade = '$grade' FROM students INNER JOIN grades ON students.student_id = grades.student_id INNER JOIN courses ON grades.course_id = courses.course_id WHERE grades.student_id = '$id' AND grades.course_id = '$course';";

  $sqlUpdateGrades = "UPDATE GRADES SET grade = '$grade' WHERE grades.student_id = '$id';";

  $resultGrades = mysqli_query($conn,$sqlUpdateGrades) or die($conn->error);   

  header('location: grades.php');

}



?>


<div class="container">
  <div class="justify-content-center">
    <!-- Creation Date -->
    <div  class="col-12">
      <?php    
      

      $sqlGrades = "SELECT students.student_id,students.student_first_name, students.student_last_name, grades.grade, courses.course_name, grades.course_id FROM students join grades on students.student_id = grades.student_id join courses on grades.course_id = courses.course_id WHERE teacher_id = '$user_id' AND courses.course_name = '$coursesTaughtByTeacher' ORDER BY students.student_last_name;";

      $resultGrades = mysqli_query($conn,$sqlGrades) or die($conn->error);   

      

      ?>
      <br/>
      

      <br/><br/>
      <div class="row justify-content-center">
        <br/><br/>
        <ol>
          <li>Choose a course from the dropdown below to get a list of student in the courses</li>
          <li>Select the student whose grade you wish to update/change and click 'EDIT' </li>
          <li>The Student Id, Course Id, and Grade will be displayed. Here you can change the grade. Once grade has been changed click 'Update' to update the grade</li>
        </ol>
        
        <hr/>        
        <button class="btn btn-dark"><a href="./teacher_dash.php"> GO BACK TO DASHBOARD </a></button>
        <br/><br/>
        <div class="form-group">
          <form action= "./grades.php" method="POST">   
          <div class="column">
            <input type="hidden" name="id" <?php echo $id; ?> > </input>
            <p> 

              <h3>STUDENT: <label> <?php echo $id; ?></label>  <br/></h3> 
              <h3>COURSE: <label><?php echo $course; ?></label> <br/></h3>  
              <h3>GRADE: <input type="number" name="grade" placeholder = "GRADE" value="<?php echo $grade; ?>">  </input>  <br/></h3>
            </p> 
            <br/><br/>
            <div class="justify-content-center">
              <?php
              if ($update == true): ?>
                <button type="submit" name="update" class="btn btn-info">Update</button>
              <?php else: ?>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <?php endif; ?>
                <button type="reset" name="reset" class="btn btn-primary"> Reset </button>
              </div> 
            </div>
            <br/><br/>

          </form>
          <form action= "./grades.php" method="POST">
            <p> Choose a course from the dropdown to view the list of student you teach for the selected course. <br> Then click 'Submit' </p>

            <select id="demo_overview_minimal" class="form-control" data-role="select-dropdown" data-profile="minimal" name="courseOption" value = courseOption name="courseOption" >          
              <option> 
                <?php 
                $sqlCourses = "SELECT course_name FROM courses WHERE teacher_id = '$user_id'";   
                $resultCourses = mysqli_query($conn,$sqlCourses) or die($conn->error);
                foreach ($resultCourses as $key) {print "<option>".$key['course_name']."</option>";} ?> 
                ?>
              </option>
            </select>
            <br/><br/>
            <div class="col" align="center">
              <button type="submit" name="classSubmit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-primary"> Reset </button>
            </div>
            <br/><br/>

          </form>

        </div>


        

          <table id="editable_table" class="table table-bordered table-striped">
            <h1> <?php echo $coursesTaughtByTeacher . " Class List"  ?> </h1>
            <thead>
              <tr>
                <th class="text-nowrap">NAME</th>
                <th class="text-nowrap">COURSE </th>
                <th class="text-nowrap">GRADE</th>                
                <th colspan="2">ACTION</th>
              </tr>
            </thead>

            <?php

            while($row = $resultGrades->fetch_assoc()): ?>              <tr>
                <td class="text-nowrap"> <?php echo  $row['student_first_name']. "  ". $row['student_last_name'];?> </td>              
                <td class="text-nowrap"> <?php echo  $row['course_name'];?> </td>    
                <td class="text-nowrap"> <?php echo  $row['grade'];?> </td>                   
                <td> <a href="grades.php?editGrade=<?php echo $row['grade']; ?>" name = "edit" class=" btn btn-info"> Edit </a>&nbsp;</td>
                <!-- <td> <a href="grades.php?delete=<?php //echo $row['student_id']; ?>" name ="delete" class=" btn btn-danger">Delete</a>&nbsp;</td> -->
                <!-- <td> <a href="grades.php?delete=<?php //echo $row['student_id']; ?>course=<?php //echo $row['course_id'] ?>grade=<?php //echo $row['course_id'] ?>" name ="delete" class=" btn btn-danger">Delete</a>&nbsp;</td> -->



              </tr>

            <?php endwhile; ?>          

          </table>


        </div>

      </div>

    </div>
    <br/><br/>
  </div>

