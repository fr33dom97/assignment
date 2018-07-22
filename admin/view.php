<?php
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: admin.php');
    exit();

}



?>
<html>
  <head>
     <link rel="stylesheet" type="text/css" href="admin.css">   
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      
      
      <style>
     .mybutton {
	-moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
	-webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
	box-shadow: 0px 0px 0px 2px #9fb4f2;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:8px 30px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.mybutton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
.mybutton:active {
	position:relative;
	top:1px;
}
      
      
      
      
      </style>
      
      
      
    </head>
    <body style="background:white;"><div class="w3-row"><div class="barcont" style="width:5%;height:auto;"><div class="col sm-1">
        <nav class="main-menu">

          <ul>
                  <li>
                      <a href="adminmain.php">
                          <i class="fa fa-home fa-2x side-icon"></i>
                          <span class="nav-text">
                              Dashboard
                          </span>
                      </a>

                  </li>
                  <li class="has-subnav">
                      <a href="adminadd.php">
                          <i class="fa fa-user fa-2x side-icon"></i>
                          <span class="nav-text">
                           Add Companies
                          </span>
                      </a>

                  </li>
               
                     <li class="has-subnav">
                      <a href="view.php">
                          <i class="fa fa-laptop fa-2x side-icon"></i>
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
        </div>
        </div>

    
<div class="col sm-11" >
<div class="w3-container" style="width:96%;float:right;height:285px;background:lavender;">
<h1 style="border-bottom:solid black 1px;margin-left:2px;">Company Details</h1>
 <p>Company Name:<input size="30"></p>
 <p style="margin-left:80px;">Email:<input size="30"></p>
<button type="submit" style="margin-left:200px" class="btn mybutton"><i class="fa fa-search" style="width:auto;height:auto;margin-bottom:5px;margin-right:5px;"></i>Filter</button>
        
        
        
    
        
        
        
        
        
</div>
<div class="w3-container"  align="center" style="width:96%; float:right;">
<?php
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


    $page=$_REQUEST['p'];
    $limit=4;
    if($page=='')
    {
     $page=1;
     $start=0;
    }
    else
    {
     $start=$limit*($page-1);
    }

    $sql = "select * from client  limit  $start, $limit";
    $sqq = "select * from client";
    $res = mysqli_query($conn, $sqq);
    $total=$res->num_rows;
    $num_page=ceil($total/$limit);
    $result = mysqli_query($conn, $sql);

    //$query=mysql_query("select * from company  limit   $start, $limit") or die(mysql_error());
    //$tot=mysql_query("select * from company") or die(mysql_error());

    //
    echo'

    <table class="w3-striped w3-border b" style="margin:0px; width:100%;line-height:60px; text-align:center;"><th style="background:black; color:white;">Company Name</th><th style="background:black; color:white;">Email</th><th style="background:black; color:white;">Address</th><th style="background:black; color:white;">Contact</th><th style="background:black; color:white;">Date created</th><th colspan="2" style="background:black; color:white;">Action</th>';

    while($row = mysqli_fetch_assoc($result))
        {
      echo "<tr><td>{$row['cname']}</td><td>{$row['email']}</td><td>{$row['address']}</td><td>{$row['tel']}</td><td>{$row['datecreated']}</td><td><a href='adminupdate.php?cID=".$row['cID']."'><i class='fa fa-edit'  style='font-size:36px;color:blue'></i></a></td><td><a><i class='fa fa-trash-o' onclick='d()' style='font-size:36px;color:black'></i></a></td></tr>\n";
        echo "<input type='hidden' id='cid' value='{$row['cID']}'>";


        } 

    echo'</table>';
    


    function pagination($page,$num_page)
    {
      echo'<div style="text-align:center;"><ul style="font-size:15px; font-weight: bold;">';
      for($i=1;$i<=$num_page;$i++){
         if($i==$page)
    {
     echo''.$i.' ';
    }
    else
    {
     echo'<a href="view.php?p='.$i.'">'.$i.'</a> ';

    }
      }
    }
    if($num_page>1)
    {
     pagination($page,$num_page);
     echo'</ul></div>';
    }

    ?> 


</div>       
</div>
</div>


        
        

<script>

function d()
    {
        
        var id = document.getElementById("cid").value;
        var cfm = confirm("Do you want to delete?");
        if(cfm == true){
            location.href="admindelete.php?cID="+id+"";
        }
        else{
            location.href="#"
        }
    }
        
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

</html>