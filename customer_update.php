<?php
session_start();




    
?>



<html>
<head>
    <title>Customer Portal</title>
     <?php
    session_start();
    include"link.php";
    
    ?>
    
    
    
</head>
    
<body>

 <?php
    include "navbar.php";



  ?>
    
    
<div  style="background:lavender" >
 <div class="col-12" style="height:350px;">
        <?php
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM customer WHERE customerID='".$_GET["customerID"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    
    echo"<form action='customerupdate.php' method='post' >
   <div style='width:500px;><a href='productm.php'><i class='fa fa-arrow-left' style='float:left;font-size:40px;'></i></a>
   <h1 style='color:darkslategray;margin-right:60px;font-size:40px;'>Update Details</h1></div>
    <input type=hidden value='".$_GET['customerID']. "' name='customerID'>
    <br>    
    <p class='font' style='font-size:18px;margin-left:300px;'>Customer Name:<input style='width:400px' type=text name='name' value='".$row['name']."'>
    
    <p class='font' style='font-size:18px;margin-left:388px;'>Email:<input style='width:400px' type=email name='email' value='".$row['email']."'></p>
    <p class='font' style='font-size:18px;margin-left:365px;'>Address:<input style='width:400px' type=text name='address' value='".$row['address']."'></p>
    <p class='font' style='font-size:18px;margin-left:365px;'>Contact:<input style='width:150px' type=number name='phone' value='".$row['phone']."'></p>
   
   
    <button style='margin-left:500px;width:150px' class='btn btn-info' type='submit' name='submit'>Update</button></form> ";
    
    
       
    
} else {
    echo "0 results";
}
$conn->close();
?>


      
        
    </div>
        
          
    
    
    
    
    </div>
  
    <br>
   
    
    
   
</body>
<div class="col-12" style="height:100px">
    
    
    
    
    
    
    
    
</div>
    
<?php
 include "footer1.php";   
    
?>    
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    