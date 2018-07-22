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

 $sql = "insert into quotation_product(quoID,cID,pID,quantity,tax,amount) values(NULL,'".$_SESSION['cID']."','".$_POST["product"]."','".$_POST["quantity"]."','".$_POST["tax"]."','".$_POST["amount"]."')";

if (mysqli_query($conn, $sql)) {
    echo"<script>
    alert('add succesful');
    echo </script>";
   
} 




$conn->close();
?>

