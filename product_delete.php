<?php

$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pj";
$tt="Delete success";
// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="Delete FROM product WHERE pID='".$_GET["pID"]."'";
 if ($conn->query($sql)===TRUE){
    echo"<SCRIPT>
    alert('$tt');
    </SCRIPT>";
   echo "<meta http-equiv='refresh' content='0;url=productm.php'>";

}

mysqli_close($conn);
?>