
<body bgcolor="pink">
<center>
<table border="1">
<?php


 $rn=$_POST["r1"];
 $mr=$_POST["m1"];


    //connect to server and DB
    
      $conn=  mysqli_connect("localhost","root","","Qasim");
      $q1 ="select * from student where rollno=$rn";
      //run query
      
         $result= mysqli_query($conn,$q1);
      
      
         if(mysqli_num_rows($result)>0)
         {
      //write query
    
        $q ="Update student set marks=$mr where rollno=$rn";
    
    //run query
    
       $result= mysqli_query($conn,$q);
       echo "Record updated successfully...";
         }
         else 
         {
          echo "Such record does not exists ..."
         }
    

?>
</table>
</center>
</body>