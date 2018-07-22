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
    
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
     <body style="background:lavender;height:auto"><div class="w3-row"><div class="col-sm-1"><nav class="main-menu">
              <ul>
                  <li>
                      <a href="adminmain.php">
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
         </div>
        
    
<div class="col sm-11;">

<div style="border-bottom:solid black 1px;padding-left:60px;">
   <h1 style="font-family: 'Segoe UI',Arial,sans-serif;font-weight:400;">Add Companies</h1> 
</div>
<div class="row">
 <div style="padding-left:100px;">
<form action="res.php" method="post" class="simple-form">  
 <p class="font" style="margin-right:90px;font-size:18px;">Username: </p> <input type="text" placeholder="Enter Username" style="" name="username" size="120"required>
  

 <p class="font" style="margin-right:90px;font-size:18px;"> Password:</p> <input type="password" id="password" Placeholder="Enter Password" size="120"name="password" required>
 
 
  <p class="font" style="margin-right:120px;font-size:18px;" >Email:</p> <input type="email" placeholder="Enter Email" name="email" size="120" required>

 <p class="font" style="margin-right:105px;font-size:18px;">Address: </p><input type="text" placeholder="Enter Address" name="add" size="120" required>

 
 <p class="font" style="margin-right:55px;font-size:18px;">Company Name:</p><input type="text" placeholder="Enter Company Name"  name="cn" size="120"  required>
    

  <p class="font" style="margin-right:70px;font-size:18px;">Phone number:</p><input type="number" placeholder="Enter Phone number"  name="pn" size="120" required>
  
  <br><br><br>
    <button style="margin-left:300px;" class="btn" type="submit" name="submit" >Sign Up</button>  
  
    




</form>
    
    
    
</div>   


</div>
</div>
</div>

</body>
</html>