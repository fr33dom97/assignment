<?php

$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pj";
$Message='Sign up Successful';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into client(cid,username,password,email,address,cname,tel,datecreated) values(NULL,'".$_POST["username"]."','".$_POST["password"]."','".$_POST['email']."','".$_POST['add']."','".$_POST['cn']."','".$_POST['pn']."','".date("Y-m-d")."')";

if (mysqli_query($conn, $sql)) {
    echo"<script>
    alert('$Message');
    echo </script>";
    echo "<meta http-equiv='refresh' content='0;url=adminadd.php'>";
} 




$conn->close();
?>



 
