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

    $sql = "insert into customer(cID,customerID,name,email,address,phone) values('".$_SESSION['cID']."',NULL,'".$_POST["cname"]."','".$_POST["email"]."','".$_POST['address']."','".$_POST['phone']."')";

if (mysqli_query($conn, $sql)) {
    echo"<script>
    alert('add succesful');
    echo </script>";
    echo "<meta http-equiv='refresh' content='0;url=createq.php'>";
} 




$conn->close();
?>

