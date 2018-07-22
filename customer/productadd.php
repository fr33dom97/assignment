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

    $sql = "insert into product(cID,pID,pname,description,price) values('".$_SESSION['cID']."',NULL,'".$_POST["item"]."','".$_POST["des"]."','".$_POST['price']."')";

if (mysqli_query($conn, $sql)) {
    echo"<script>
    alert('add succesful');
    echo </script>";
    echo "<meta http-equiv='refresh' content='0;url=productm.php'>";
} 




$conn->close();
?>



 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
