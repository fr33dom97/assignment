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
      <h1>Invoices<a href="createin.php"type="button" class="btn btn-info"style="float:right;margin-top:5px;">Create a Invoice</a></h1>
          <div style="margin-left:250px;">
        <p style="margin-left:70px;">Customer:&nbsp;&nbsp;&nbsp;<input placeholder="All Customer" size="48"></p>
        <p style="margin-left:95px">Status:&nbsp;&nbsp;&nbsp;<input placeholder="All Statues" size="48.5"></p>
        <p style="margin-left:95px;">From:&nbsp;&nbsp;&nbsp;<input>To:&nbsp;<input></p>
        <p style="margin-left:55px">Invoice No:&nbsp;&nbsp;&nbsp;<input placeholder="Invoice No#" size="49"></p>
        <button type="button" class="btn btn-primary"style="font-size:20px;width:70px;margin-left:300px;">Filter</button>

        
    </div>
        
          
    
    
    
    
    </div>
    </div>
    <br>
    <div style="margin-left:5px;">
    <div style="height:40px;margin-left:10px;font-size:20px;">
    <b>Unpaid</b>  
    <b style="margin-left:10px;">Draft</b>
    <b style="margin-left:10px;">All Invoices</b>
    
    
    
    
    
    </div>   
    
    </div>
    
    <div style="height:300px;">
      <table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Status</th>
      <th scope="col">Due</th>
      <th scope="col">Date</th>
      <th scope="col">Number</th>
      <th scope="col">Customer</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Saved</th>
      <td>Due 365 days ago</td>
      <td>2015-2-19</td>
      <td>001</td>
      <td>Ahmad</td>
      <td>00</td>
      <td><div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">Edit</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Delete</a>
  </div>
</div></td>
    </tr>
    <tr>
      <th scope="row">Saved</th>
      <td>Due 365 days ago</td>
      <td>2015-2-19</td>
      <td>001</td>
      <td>Ahmad</td>
      <td>00</td>
     <td><div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">View</a>
        <a class="dropdown-item" href="#">Edit</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Delete</a>
      </div>
</div></td>
    </tr>
    <tr>
         <th scope="row">Saved</th>
      <td>Due 365 days ago</td>
      <td>2015-2-19</td>
      <td>001</td>
      <td>Ahmad</td>
      <td>00</td>
    <td><div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">Edit</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Delete</a>
  </div>
</div></td>
    </tr>
     <tr>
      <th scope="row">Saved</th>
      <td>Due 365 days ago</td>
      <td>2015-2-19</td>
      <td>001</td>
      <td>Ahmad</td>
      <td>00</td>
    <td><div class="btn-group">
  <button type="button"class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">Edit</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Delete</a>
  </div>
</div></td>
    </tr>

  </tbody>
</table>
        
    </div>
    
    
    
   
</body>
<div class="col-12" style="height:200px">
    
    
    
    
    
    
    
    
</div>
    
<?php
 include "footer1.php";   
    
?>    
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>