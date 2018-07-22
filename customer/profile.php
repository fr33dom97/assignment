<?php
session_start();
if(!isset($_SESSION['cID']))
{
    // not logged in
    header('Location: customer1.php');
    exit();
}



    
?>
<html>

<head>
    <title>Customer Portal</title>
    <?php
    include"link.php";
    
    ?>
    
    <script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
    
   
    
    
    </script>
   
    
</head>
    
<body>
<style>

    
</style>
 <?php
    include "navbar.php";



  ?>
    
    
    
    <div class="row col-12" style="height:600px;margin:0;background:lavender">
    <div class="col-3" >
     <div style="border:solid black 1px;width:168px;height:168px;margin-left:10px;">
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
       
        
        
       

         $sql = "SELECT image FROM images WHERE cID='".$_SESSION["cID"]."' ORDER BY imageID DESC";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
    // output data of each row
        $row = $result->fetch_assoc();
        if ($result==TRUE){
            echo '<img src="'.$row['image'].'" style="width:168px;height:168px">';
         
            
         
        }

    }
         else{
             
            
         }


         
         
mysqli_close($conn);
        
         
         
         
      ?>
      
         
    
     </div>
      <div style="height:30px;width:200px;">
      <form action="saveimage.php"  enctype="multipart/form-data" method="post">
      <input style="margin-left:10px;" name="uploadedimage" type="file"  required>
      <button style="margin-left:10px;width:180px" type="submit" class="btn btn-primary">Upload Image</button>
      </form>
       </div> 

        
     
     
     </div>
    <div class="col-9">
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

$sql = "SELECT * FROM client WHERE cID='".$_SESSION ["cID"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    
    echo"<form action='update.php' method='post' >
   <div style='width:500px;heigth:100px;'>
   <h1 style='color:darkslategray;margin-right:60px;font-size:40px;'>Update Details</h1></div>
   <br>
    <p class='font' style='font-size:18px;margin-right:42px;'>Company Name:</p><input type=text name='cname' style='width:400px' value='".$row['cname']."' required ></p>
    <input type=hidden value='".$_GET['cID']. "' name='cID'>
    <p class='font' style='font-size:18px;margin-right:120px;'>Email:</p><input type=email name='email' style='width:400px' value='".$row['email']."' required ><br><br>
    <p class='font' style='font-size:18px;margin-right:110px;'>Address:</p><input type=text name='address' style='width:400px' value='".$row['address']."' required><br><br>
    <p class='font' style='font-size:18px;margin-right:110px;'>Contact:</p><input type=number name='tel' style='width:400px' value='".$row['tel']."' required><br>
    <br><br><br>
     <button style='margin-left:10px;width:140px' type='submit' class='btn btn-info'>Update Profile</button></form> ";
    
    
       
    
} else {
    echo "0 results";
}
$conn->close();
?>
    </div>
     </div>
    
   
    
 </body>

<?php
 include "footer1.php"
 
    
?>
</html>