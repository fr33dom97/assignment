<?php
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pj";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


    if($_POST == TRUE){
$login = "SELECT * FROM admin WHERE username='".$_POST['username']."'AND password='".$_POST['password']."'";
        $result=$conn->query($login);
        if($result->num_rows >0){
            
   while($row=$result->fetch_assoc()){     


  if($result == TRUE){
      
    echo "Login Successful";
    session_start();
    $_SESSION['username'] =$row['username'];
  
    header("Location:adminmain.php");
  }
        }
        }


    else
    {
        echo "<input type='hidden' id='wadaaa'>";
      echo"<script>
           document.getElementById('wadaaa').innerHTML = yo();
           function yo(){
           window.alert('Wrong Password or ID!Please check again.');
           window.location.assign('./admin.php')
                        }
           </script> ";
   }
        
    }
      $conn->close();
    
    
?>