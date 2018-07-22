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
 <div class="col-12" style="height:300px;">
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

$sql = "SELECT * FROM product WHERE pID='".$_GET["pID"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    
    echo"<form action='productupdate.php' method='post' >
   <div style='width:500px;><a href='productm.php'><i class='fa fa-arrow-left' style='float:left;font-size:40px;'></i></a>
   <h1 style='color:darkslategray;margin-right:60px;font-size:40px;'>Update Details</h1></div>
    <input type=hidden value='".$_GET['pID']."' name='pID'>
    <br>    
    <p class='font' style='font-size:18px;margin-left:300px;'>Product Name:<input style='width:400px' type=text name='pname' value='".$row['pname']."'>
    
    <p class='font' style='font-size:18px;margin-left:325px;'>Description:<input style='width:400px' type=text name='description' value='".$row['description']."'></p>
    <p class='font' style='font-size:18px;margin-left:377px;'>Price:<input type=text name='price' value='".$row['price']."'></p>
   
   
    <button style='margin-left:500px;width:150px;' class='btn btn-info' type='submit' name='submit'>Update</button></form> ";
    
    
       
    
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
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    