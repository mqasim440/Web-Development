<center>
<table border="1">
<?php

$action = $_GET["action"];
    
   if ($action === 'search') {
    // Check if the action is to search
        $rollno = $_GET["rollno"];

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "Qasim");


        // Perform a search query
        $q1 = "SELECT * FROM student WHERE rollno = $rollno";
        $result = mysqli_query($conn, $q1);

        if(mysqli_num_rows($result)>0) {
        echo "<tr>";
        echo "<th>Rollno</th>";
        echo "<th>Name</th>";
        echo "<th>Marks</th>";
        echo " </tr>";
        
        while($row = mysqli_fetch_assoc($result)){
        echo "<tr align=center>";
         echo "<td>" . $row["rollno"] . "</td>";
         echo "<td>" . $row["name"] . "</td>";
         echo "<td>" . $row["marks"] . "</td>";
        echo "</tr>";
         }
        echo "Record exists so put new data ";
    }
         else {
            
        }
    }

    // Check if the action is to update
    else if ($action === 'update') {
        $rollno = $_GET["rollno"];
        $marks = $_GET["marks"];

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "Qasim");

        // Check if the record already exists
        $q1 = "SELECT * FROM student WHERE rollno = $rollno";
        $result = mysqli_query($conn, $q1);

        if (mysqli_num_rows($result) > 0) {
             // Update the record into the database
             $q ="Update student set marks=$marks where rollno=$rollno";
             $result = mysqli_query($conn, $q);
             
        // Perform a search query
        $q2 = "SELECT * FROM student WHERE rollno = $rollno";
        $result = mysqli_query($conn, $q2);

        if(mysqli_num_rows($result)>0) {
        echo "<tr>";
        echo "<th>Rollno</th>";
        echo "<th>Name</th>";
        echo "<th>Marks</th>";
        echo " </tr>";
        
        while($row = mysqli_fetch_assoc($result)){
        echo "<tr align=center>";
         echo "<td>" . $row["rollno"] . "</td>";
         echo "<td>" . $row["name"] . "</td>";
         echo "<td>" . $row["marks"] . "</td>";
        echo "</tr>";
         }
        echo "Record updated Successfully ";
    }
        } else {
          echo "Such record does not exists ...";
                
            } 
        }
        else
        {}
?>
</table>
</center>