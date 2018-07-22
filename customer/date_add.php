<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pj";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into quotation_customer(qID,cID,date_start,date_end) values(NULL,'".$_SESSION['cID']."','".$_POST["date_start"]."','".$_POST["date_end"]."')";

if (mysqli_query($conn, $sql)) {
    echo"<script>
    alert('add succesful');
    echo </script>";
    echo "<meta http-equiv='refresh' content='0;url=cquotation.php'>";
} 




$conn->close();
?>


