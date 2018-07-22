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
 $sql="Update product SET pname='".$_POST["pname"]."',description='".$_POST["description"]."',price='".$_POST["price"]."' WHERE pID='".$_POST["pID"]."'";
 if ($conn->query($sql)===TRUE){
    echo"<SCRIPT>
    alert('Update success');
    </SCRIPT>";
   echo "<meta http-equiv='refresh' content='0 ;url=productm.php'> ";

}


mysqli_close($conn);
?>