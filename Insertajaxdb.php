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
        echo "Record already exists...";
    }
         else {
            echo " ";
        }
    }

    // Check if the action is to insert
    else if ($action === 'insert') {
        $rollno = $_GET["rollno"];
        $name = $_GET["name"];
        $marks = $_GET["marks"];

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "Qasim");

        // Check if the record already exists
        $q1 = "SELECT * FROM student WHERE rollno = $rollno";
        $result = mysqli_query($conn, $q1);

        if (mysqli_num_rows($result) > 0) {
            echo "Record already exists...";
        } else {
            // Insert the record into the database
            $q = "INSERT INTO student (rollno, name, marks) VALUES ($rollno, '$name', $marks)";
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
         echo "Record added successfully...";
        
    }
            } 
        }
    
?>
</table>
</center>