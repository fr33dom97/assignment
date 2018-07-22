<?php

$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pj";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 
 $sql="Update customer SET name='".$_POST["name"]."',email='".$_POST["email"]."',address='".$_POST["address"]."',phone='".$_POST["phone"]."' WHERE customerID='".$_POST["customerID"]."'";
 if ($conn->query($sql)===TRUE){
    echo"<SCRIPT>
    alert('Update success');
    </SCRIPT>";
   echo "<meta http-equiv='refresh' content='0 ;url=customerm.php'> ";

}


mysqli_close($conn);
?>