<?php

//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

  //write query

    $q ="Update student set marks=85 where rollno=2";

//run query

   $result= mysqli_query($conn,$q);
   echo "Record updated successfully...";

?>