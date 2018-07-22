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
    
    
    <script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
    
   
    
    
    </script>
   
   
</head>
    
<body>
<?php
    include "navbar.php";



  ?>
    
    
  <div style="background:lavender;">
      <div class="col-12" style="height:60px;">
      <h1>Add a Invoice</h1>
    
    </div>
    </div>

    <div class="col-12" style="height:300px;border:solid black 1px;background:lavender">
    <br>
    <h3 style="margin-left:100px;">Invoice No #</h3>
    <br>
    <div class="row">
    <div class="col-6">
    <p style="margin-left:100px;">Customer<input style="margin-left:20px;" placeholder="Choose customer"><button style="font-size:14px;padding:5px 10px;margin-bottom:5px"type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i class="fas fa-plus"></i></button> 
    </p>
       
     </div>
    
    
    <div class="col-6">
    <p style="margin-left:30px;">Date<input style="margin-left:20px;"></p>
    
    </div>
    </div>
    <div class="row">   
    <div class="col-6">
    <p style="margin-left:62px;">Product Name<input style="margin-left:26px;"></p>

    </div>
    <div class="col-6">
    <p style="margin-left:10px;">Address<input style="margin-left:15px;"></p>
    
    </div>
    </div>
 

    <div class="row">
    <div class="col-6">
     <p style="margin-left:63px">Product Price<input style="margin-left:32px;"></p>   
        
    </div>
    <div class="col-6" >
    <p style="margin-left:10px">Quantity<input style="margin-left:10px;"></p>
        
        
    </div>
    </div>
    <div class="col-12" align="center">
    <button type="button" class="btn btn-info"style="font-size:20px;width:70px;margin-right:150px">Add</button>    
        

      
    </div>
    </div>
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="#">
        <p>Customer Name:<input placeholder="Enter Customer Name"></p>
        <p style="margin-left:80px">Email:<input placeholder="Enter email"></p>
        <p style="margin-left:60px;">Address:<input placeholder="Enter address"></p>
        <p style="margin-left:65px;">Contact:<input placeholder="Enter contact"></p>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!!!---Modal----->
<div class="modal fade" id="mexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="#">
             <p>Product:<input></p>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
        
    <table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Tax</th>
      <th scope="col">Amount</th>
    
    
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input><button style="font-size:14px;padding:5px 10px;margin-bottom:5px"type="button"  class="btn btn-success"  data-toggle="modal" data-target="#mexampleModal" ><i class="fa fa-plus"></i></button></th>
      <td><input></td>
      <td><input maxlength="5" size="5"></td>
      <td><input maxlength="5" size="5"></td>
      <td><input maxlength="15" size="15"></td>
      <td><input maxlength="5" size="5"></td>
   
    </tr>


  </tbody>
</table>

    <button class="btn btn-primary"style="height:35px; position:relative; margin: -50px; width:100px; top:50%; left:44%;margin-top:100px;">Save</button>
    
    
  
    


    
    

    </body>
<div class="col-12" style="height:200px">
    
    
    
    
    
    
    
    
</div>
    
<?php
 include "footer1.php";   
    
?>    
    
    
    </html>

   
         

        

  

   
