<?php
 $rn=$_POST["r1"];
//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

  $q1="select * from student where rollno=$rn";
  $result= mysqli_query($conn,$q1);
  if(mysqli_num_rows($result)>0)
    {
  //write query

    $q ="Delete from student where rollno=$rn";

//run query

   $result= mysqli_query($conn,$q);
   echo "Record deleted successfully...";
    }

  else{
    echo "Record does not exists...";
  }
?>