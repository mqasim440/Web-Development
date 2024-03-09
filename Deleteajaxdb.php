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
        echo "*if you want to delete then press delete *  ";
        }
         else {
            echo " Record not found... ";
        }
    }

    // Check if the action is to delete
    else if ($action === 'delete') {
        $rollno = $_GET["rollno"];

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "Qasim");

        // Check if the record already exists
        $q1 = "SELECT * FROM student WHERE rollno = $rollno";
        $result = mysqli_query($conn, $q1);

        if (mysqli_num_rows($result) > 0) {
             // delete the record into the database
             $q ="Delete from student where rollno=$rollno";
             $result = mysqli_query($conn, $q);
             echo "Record deleted successfully...";
        } else {
          echo "Such record does not exists ...";
                
            } 
        }
        else
        {}
?>
</table>
</center>