<?php
$xml = simplexml_load_file("myxml.xml");

foreach ($xml->children() as $stu){
 echo "Rollno: " . $stu->rollno;
 echo " Name: " . $stu->name;
 echo " Subject: " . $stu->marks['sub'];
 echo " Marks: " . $stu->marks . "<hr>";
}

?>
