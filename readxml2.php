<?php
$xml = simplexml_load_file("myxml.xml");
echo "Rollno: " . $xml->student[0]->rollno;
echo "<br> Name: " . $xml->student[1]->name;
echo "<br> Marks: ". $xml->student[0]->marks;

?>