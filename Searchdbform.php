
<table>
<?php


 $rn=$_POST["r1"];
//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

  //write query

    $q ="select * from student where rollno=$rn";
//run query

   $result= mysqli_query($conn,$q);


   if(mysqli_num_rows($result)>0)
   {
   //show table
   echo "<tr>";
  echo "<th>RollNo</th>";
  echo "<th>Name</th>";
  echo "<th>Marks</th>";
  echo "</tr>";

  while($row= mysqli_fetch_assoc($result)){
 echo  "<tr align=center>";  
 echo"<td>".$row["rollno"] ."</td>";
 echo"<td>".$row["name"] ."</td>";
 echo"<td>".$row["marks"] ."</td>";
 echo "</tr>";
  }
 }

 else
 {
  echo "Record does'nt exists..."
 }
?>
</table>
</center>
</body>