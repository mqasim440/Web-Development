<?php
// -- create xml file --
$fh = fopen("myxmlfilefromdb.xml","w");
fwrite($fh, "<?xml version='1.0' ?>");
fwrite($fh, "\n<bscs5>");
//---
$conn = mysqli_connect("localhost","root","","bscs5a23");
$q = "SELECT * FROM student";
$result = mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($result)){
//----
 fwrite($fh, "\n\t<stu>");
 fwrite ($fh,"\n\t\t<rollno>" . $row["rollno"] . "</rollno>");
 fwrite ($fh,"\n\t\t<name>" . $row["name"] . "</name>");
 fwrite ($fh,"\n\t\t<marks>" . $row["marks"] . "</marks>");
  fwrite($fh, "\n\t</stu>");
}
fwrite($fh, "\n</bscs5>");
?>