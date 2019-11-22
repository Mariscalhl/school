<?php 
require "./header.php";

$user_id = $_SESSION['user']['user_id'];

$sql = "SELECT * FROM teachers WHERE banner_id = '$user_id'";
$result = mysqli_query($conn,$sql) or die($conn->error);  
$row = mysqli_fetch_assoc($result);



if(!isset($_SESSION['user']))
{
  $url = 'login.php';
  header('Location: ' . $url, true , 301);
}
elseif($_SESSION['user']['user_type'] != 'T')
{
  

}





// $result = mysqli_query($conn,$sql) or die($conn->error);  

// $row = mysqli_fetch_assoc($result);


//echo "Hello World";
?>
<div class="container">
  <div class="justify-content-center">
    <!-- Creation Date -->
    <div  class="col-12">

     <h1> <?php echo "Welcome ". $row['teacher_first_name']. " " . $row['teacher_last_name']; ?> </h1> 
     <br/><br/><br/>
     <p> Please select CLASS LIST to see a list of student in each of your clases</p>
     <p> Please select CLASS GRADES to see a list of students and their current progress</p>




     <table class="table table-striped w-auto" >
      <thead>
        <tr>
          <th class="text-nowrap">CLASS LIST</th>
          <th class="text-nowrap">CLASS GRADES </th>
        </tr>
      </thead>
      <tr>
        <td> <a href="./classlist.php"> Class List </a> </td>
        <td> <a href="./grades.php"> Class Grades </a> </td>
      </tr>
    </table>


    <p>
      The class list and grades webpage are only available for Teachers who have the user type of 'T', his mean that only Teachers can access and manipulate these webpages.

      <br/><br/>
      CLASS LIST:

      This webpage allows the logged in Teacher to view all the different courses they are teaching. The webpage includes instruction on how to navigate the webpage; however, all it requires is the user (Teacher) to select from the dropdown of course options and press 'Submit'. This will generate a table that shows a list of students they have for the selected course. Specifically, it will have fields that show the Student Id, Student's First Name and Last Name and the name of the course.

      If a different teacher were to log in and navigate to the class list, they would potentially have a different drop-down list, with either more or less courses, and/or different courses entirely.

      <br/><br/>
      GRADES

      This webpage allows the teacher to update grades filtered by course. The user will select the course they wish to update marks, and a table will generate showing a list of students the user is teaching for the selected course. The user then has click ‘EDIT’ should the user wish the alter the grade of the selected student. If ‘EDIT’ is clicked it will redirect the user to the same page where the student’s id, course id, and grade are displayed, with the only alterable field being grade. The user can then alter the grade and click ‘UPDATE’ to update the record in the database for that student only.
      <br/><br/>
      TEACHER DASH:

      This page simple welcomes the user by displaying their name at the top of the page with the option of either going to the CLASS LIST that display all the student the user teacher for a selected course. Or the user can go to CLASS GRADES which allow the user to edit grades for their students.
    </p>
    

    


  </div>
</div>
</div>