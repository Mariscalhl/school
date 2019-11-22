<?php
   include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Business Fundamentals</title>
    <link rel="stylesheet" href="css/programs.css">
</head>
<body>
    
        <?php
        if ($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);
        }
        
        $sql = "SELECT * from programs INNER JOIN courses ON programs.program_name = courses.program WHERE programs.program_id = 'P003'";
        $result = $conn-> query($sql);        
    
            
        if ($result ->num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<h1>" . $row["program_name"] . "</h1><p>" . $row["program_description"] . "</p><br /><img src='images/programming.jpg' alt='icon' /><h2>Admission Requirements</h2><ul><li>" . $row["program_req1"] . "</li><li>" . $row["program_req2"] . "</li><li>" . $row["program_req3"] . "</li></ul><h2>Tuition</h2><ul><li>Year one domestic: " . $row["program_tuition_dom"] . "(CAD)</li><li>Year one international: " . $row["program_tuition_int"] . "(CAD)</li></ul><br /><h2>Courses</h2><h3>Semester 1</h3>";
                while ($row = $result-> fetch_assoc()) {
                //echo "<h2>" . $row["course_semester"] . "</h2><ul><li>". $row["course_name"] . "(". $row["course_code"] . ")</li></ul>";
                    if ($row["course_semester"] == 1){
                        
                        echo "<ul><li>". $row["course_name"] . "(". $row["course_code"] . ")</li></ul>";
                        
                    }elseif ($row["course_code"] == "SYDE2202") {
                        
                        echo "<h3>Semester 2</h3>";
                        
                    }elseif ($row["course_semester"] == 2) {
                        
                        echo "<ul><li>". $row["course_name"] . "(". $row["course_code"] . ")</li></ul>";
                        
                    }elseif ($row["course_code"] == "ITCE3200") {
                         
                        echo "<h3>Semester 3</h3>"; 
                        
                    }elseif ($row["course_semester"] == 3) {
                        
                        echo "<ul><li>". $row["course_name"] . "(". $row["course_code"] . ")</li></ul>";
                        
                    }elseif ($row["course_code"] == "DBAS5206") {
                        
                        echo "<h3>Semester 4</h3>";
                        
                    }elseif ($row["course_semester"] == 4) {
                        
                        echo "<ul><li>". $row["course_name"] . "(". $row["course_code"] . ")</li></ul>";
                        
                    }
            }
            }
            
        }
        else {
            echo "0 result";
        }
        
        $conn-> close();
        ?>
    
    <?php
   include("footer.php");
    ?>
    
<!--       <img src="./images/business.jpg" alt="Girl in a jacket"> --> 
</body>
</html>