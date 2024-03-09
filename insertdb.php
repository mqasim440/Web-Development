<?php

//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

  $q1="select * from student where rollno=$rn";
  $result= mysqli_query($conn,$q1);
  if(mysqli_num_rows($result)>0)
    echo "Record already exists..."
  else
  {
  //write query

    $q ="Insert into student values (10,'Muzammil',60)";

//run query

   $result= mysqli_query($conn,$q);
   echo "Record added successfully...";
  }
?>