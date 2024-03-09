<?php

    $rn= $_POST["r1"];
    $nm= $_POST["n1"];
    $mr= $_POST["m1"];

//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

//query


  $q1="select * from student where rollno=$rn";
  $result= mysqli_query($conn,$q1);
  if(mysqli_num_rows($result)>0){
    echo "Record already exists..."
  }
  else
  {
  //write query

  $q ="Insert into student values ($rn,'$nm',$mr)";

  //run query

   $result= mysqli_query($conn,$q);
   echo "Record added successfully...";
  }
?>
 