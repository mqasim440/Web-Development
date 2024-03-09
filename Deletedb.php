<?php

//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

  //write query

    $q ="Delete from student where rollno=10";

//run query

   $result= mysqli_query($conn,$q);
   echo "Record deleted successfully...";

?>