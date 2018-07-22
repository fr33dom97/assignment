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

    $sql = "insert into product(cID,pID,pname,description,price) values('".$_SESSION['cID']."',NULL,'".$_POST["pname"]."','".$_POST["description"]."','".$_POST['price']."')";

if (mysqli_query($conn, $sql)) {
    echo"<script>
    alert('add succesful');
    echo </script>";
    echo "<meta http-equiv='refresh' content='0;url=cquotation.php'>";
} 




$conn->close();
?>



 
    