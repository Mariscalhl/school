<?php
   include("./header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Programs</title>
    <link rel="stylesheet" href="./css/programs.css">
</head>
<body>
    <table id="programs">
        <tr>
            <th>Programs</th>
            <th>Length</th>
        </tr>
        <?php
     
        $sql = "SELECT program_name, program_length from programs";
        $result = $conn-> query($sql);
        
            
        if ($result ->num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                $url = $row["program_name"].".php";
                echo "<tr><td><a href='".$url ."'</a>" . $row["program_name"] . "</td><td>" . $row["program_length"] . "</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        
        $conn-> close();
        ?>
    
    
    </table>
    
    <?php
   include("footer.php");
    ?>
</body>
</html>