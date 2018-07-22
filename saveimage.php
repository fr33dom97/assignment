<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "pj";

$tt='Upload success';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



    function GetImageExtension($imagetype)

     {

       if(empty($imagetype)) return false;

       switch($imagetype)

       {

           case 'image/bmp': return '.bmp';

           case 'image/gif': return '.gif';

           case 'image/jpeg': return '.jpg';

           case 'image/png': return '.png';

           default: return false;

       }

     }

      

      

      

if (!empty($_FILES["uploadedimage"]["name"])) {

 

    $file_name=$_FILES["uploadedimage"]["name"];

    $temp_name=$_FILES["uploadedimage"]["tmp_name"];

    $imgtype=$_FILES["uploadedimage"]["type"];

    $ext= GetImageExtension($imgtype);

    $imagename=date("d-m-Y")."-".time().$ext;

    $target_path = "../uploads/".$imagename;

     

 

if(move_uploaded_file($temp_name, $target_path)) {

 

    $sql="insert into images(cID,image,datecreated) VALUES 

 

('".$_SESSION['cID']."','".$target_path."','".date("Y-m-d")."')";

}if ($conn->query($sql) === TRUE) {
      echo"<SCRIPT>
  alert('$tt');
  </SCRIPT>";
   echo "<meta http-equiv='refresh' content='0 ;url=profile.php'> ";
} else {
   
}
}
$conn->close();
?>

    

    