<?php

//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

  //write query

    $q ="select * from student";

//run query

   $result= mysqli_query($conn,$q);

   /*echo $result;    Gives errror because  Object of class mysqli_result could not be converted to string and in result 
   full table came from database and table have rows and columns */


   //show table

  while($row= mysqli_fetch_assoc($result)){

/* echo $row;    gives error because data is present in array like rollno,name,marks */
   
 echo $row["rollno"];
 echo $row ["name"] ;
 echo $row ["marks"] . "<br>";

  }//loop to display all attributes data from table

?>