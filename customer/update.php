<?php
session_start();
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

$sql="UPDATE client SET email='".$_POST["email"]."',address='".$_POST["address"]."',cname='".$_POST["cname"]."', tel='".$_POST["tel"]."' WHERE cID='".$_SESSION["cID"]."'";
 if ($conn->query($sql)===TRUE){
    echo"<SCRIPT>
    alert('Update success');
    </SCRIPT>";
   echo "<meta http-equiv='refresh' content='0 ;url=profile.php'> ";

}


mysqli_close($conn);
?>