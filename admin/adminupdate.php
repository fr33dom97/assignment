<html>

<head>
     <link rel="stylesheet" type="text/css" href="admin.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
  <body><div class="area"></div><nav class="main-menu">
              <ul>
                  <li>
                      <a href="">
                          <i class="fa fa-home fa-2x"></i>
                          <span class="nav-text">
                              Dashboard
                          </span>
                      </a>

                  </li>
                  <li class="has-subnav">
                      <a href="adminadd.php">
                          <i class="fa fa-user fa-2x"></i>
                          <span class="nav-text">
                           Add Companies
                          </span>
                      </a>

                  </li>
               
                  <li class="has-subnav">
                      <a href="view.php">
                          <i class="fa fa-laptop fa-2x"></i>
                          <span class="nav-text">
                            Manage Companies
                          </span>
                      </a>

                  </li>
                 
                  
             
                  
              </ul>

              <ul class="logout">
                  <li>
                     <a href="adminlogout.php">
                           <i class="fa fa-power-off fa-2x"></i>
                          <span class="nav-text">
                              Logout
                          </span>
                      </a>
                  </li>  
              </ul>
          </nav>
    </body>
<div class="col sm-11"align="center"  >
<div style="width:500px;background:lightsteelblue; height:633px;border:1px solid black">
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

$sql = "SELECT * FROM client WHERE cID='".$_GET["cID"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    
    echo"<form action='update2.php' method='post' >
   <div style='width:500px;heigth:100px;'><a href='view.php'><i class='fa fa-arrow-left' style='float:left;font-size:40px;'></i></a>
   <h1 style='color:darkslategray;margin-right:60px;font-size:40px;'>Update Details</h1></div>
    <br><br><br>    
    <p class='font' style='font-size:18px;margin-right:42px;'>Company Name:</p><input type=text name='cname' value='".$row['cname']."'></p>
    <input type=hidden value='".$_GET['cID']. "' name='cID'>
    <p class='font' style='font-size:18px;margin-right:120px;'>Email:</p><input type=email name='email' value='".$row['email']."'><br>
    <p class='font' style='font-size:18px;margin-right:110px;'>Address:</p><input type=text name='address' value='".$row['address']."'><br>
    <p class='font' style='font-size:18px;margin-right:110px;'>Contact:</p><input type=number name='tel' value='".$row['tel']."'><br>
    <br><br><br><br><br>
    <button class='btn' type='submit' name='submit'>Update</button></form> ";
    
    
       
    
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</div>
</html>