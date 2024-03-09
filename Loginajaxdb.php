<center>
<table border="1">
<?php

$action = $_GET["action"];

    
   if ($action === 'search') {
        $username = $_GET["username"];

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "users");


        $q1 = "SELECT * FROM login  WHERE username like '$username%'";
        $result = mysqli_query($conn, $q1);

        if(mysqli_num_rows($result)>0) {
       echo "Y";
    }
         else {
            echo "N";
        }
    }

    else if ($action === 'login') {
        $username = $_GET["username"];
        $password = $_GET["password"];
    
        $conn = mysqli_connect("localhost", "root", "", "users");
    
        $q1 = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $q1);
    
        if (mysqli_num_rows($result) > 0) {
            header("Location: new.html"); 
            exit();
        } else {
            echo"Invalid credentials...";
        }
    }
    else{}
    
?>
</table>
</center>