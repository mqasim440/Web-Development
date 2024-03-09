<body bgcolor="pink">
<center>
<table border="1">
<?php

$rn  =  $_GET["q"];
//------
$conn = mysqli_connect("localhost","root","","Qasim");
//----
$q = "SELECT * FROM student WHERE rollno=$rn";
$result = mysqli_query($conn,$q);
if( mysqli_num_rows($result) > 0 ){
echo "<tr>";
echo "<th>RollNo</th>";
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
}
else
 echo "No record exists ... ";

?>
</table>
</center>