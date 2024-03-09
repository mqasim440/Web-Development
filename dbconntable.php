
<body bgcolor="pink">
<center>
<table border="1">
<?php

//connect to server and DB

  $conn=  mysqli_connect("localhost","root","","Qasim");

  //write query

    $q ="select * from student";

//run query

   $result= mysqli_query($conn,$q);

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

?>
</table>
</center>
</body>