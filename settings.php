<?php 
require "./header.php";
$error="";
$user_id = $_SESSION['user']['user_id'];  

// // sql statement

$selectDefault="SELECT * FROM students WHERE `student_id` = '$user_id'";
$result2=mysqli_query($conn,$selectDefault);  
$row2=mysqli_fetch_assoc($result2);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //variables storing the input values
    $myLastName = mysqli_real_escape_string($conn,$_POST['inputLastName']);
    $myFirstName = mysqli_real_escape_string($conn,$_POST['inputFirstName']);
    //$myEmail = mysqli_real_escape_string($conn,$_POST['inputEmail']);
    //$myNewPassword = mysqli_real_escape_string($conn,$_POST['inputNewPassword']);
    $myAddress = mysqli_real_escape_string($conn,$_POST['inputAddress']);
    $myCity = mysqli_real_escape_string($conn,$_POST['inputCity']);
    $myCountry = mysqli_real_escape_string($conn,$_POST['inputCountry']);
    $myPostalCode = mysqli_real_escape_string($conn,$_POST['inputPostalCode']);
    $myProvince = mysqli_real_escape_string($conn,$_POST['inputProvince']);
    $myCellPhone = mysqli_real_escape_string($conn,$_POST['inputCellPhone']);
   

    $updateFields="UPDATE students SET
    student_address = '$myAddress',
    student_cell='$myCellPhone',
    student_city='$myCity',
    student_country='$myCountry',
    student_postal_code='$myPostalCode',
    student_province='$myProvince',
    student_first_name = '$myFirstName',
    student_last_name = '$myLastName'
    WHERE `student_id` = '$user_id'";

$result=mysqli_query($conn,$updateFields); 
$url = 'student_dash.php';
         //$url = 'http://www.google.com/';
         header('Location: ' . $url, true , 301);
}
?>

<div class="container">

    <form action= "" method = "post">
        <div class="form-group row">
            <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputFirstName" value="<?php echo $row2['student_first_name']?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputLastName" placeholder="LastName" value="<?php echo $row2['student_last_name']?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputAddress" placeholder="Address" value="<?php echo $row2['student_address']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCity" class="col-sm-2 col-form-label">City</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputCity" placeholder="City" value="<?php echo $row2['student_city']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputProvince" class="col-sm-2 col-form-label">Province</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputProvince" placeholder="Province" value="<?php echo $row2['student_province']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCountry" class="col-sm-2 col-form-label">Country</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputCountry" placeholder="Country" value="<?php echo $row2['student_country']?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPostalCode" class="col-sm-2 col-form-label">Postal Code</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputPostalCode" placeholder="PostalCode" value="<?php echo $row2['student_postal_code']?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCellPhone" class="col-sm-2 col-form-label">Cell Phone</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="inputCellPhone" placeholder="CellPhone" value="<?php echo $row2['student_cell']?>">
            </div>
        </div>
        <br/>
        <hr>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<?php
   include("footer.php");
?>