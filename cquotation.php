<html>
<head>
     <title>Customer Portal</title>
    <?php
    session_start();
    include"link.php";
    if(!isset($_SESSION['cID']))
{
    // not logged in
    header('Location: customer1.php');
    exit();
}
    
    ?>
    
    
</head>
    
<body>
 <?php
    include "navbar.php";



  ?>
    
    

    
    <div  style="background:lavender" >
      <div class="col-12" style="height:60px;">
      <h1>Add a Quotation</h1>
    
    
    
    
    </div>
    </div>
    <div class="col-12" style="height:300px;border:solid black 1px;background:lavender">
    <br>
    <h3 style="margin-left:100px;">Quotation No #</h3>
    <br>
    <div class="row">
    <div class="col-6">
    <p style="margin-left:100px;">Customer<button style="font-size:14px;padding:5px 10px;margin-bottom:5px;margin-left:20px"type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i class="fas fa-plus"></i></button> 
    </p>
       
     </div>
    
    <div class="col-12">
        <form action="date_add.php" method="post">
        <p style="margin-left:38px;">Date Start <input style="margin-left:20px;"name="date_start" type="date" required></p>
        <p style="margin-left:42px;">Date End <input style="margin-left:20px;" name="date_end" type="date" required></p>
         <button type="submit" name="submit" class="btn btn-success"style="font-size:20px;width:100px;margin-left:150px;">Add</button>
        </form>
    
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
          <form action="quotation_customer.php" method="post">
        <p>Customer Name:<input placeholder="Enter Customer Name" type="text" name="cname" required></p>
        <p style="margin-left:80px">Email:<input placeholder="Enter email"type="email" name="email" required></p>
        <p style="margin-left:60px;">Address:<input placeholder="Enter address" name="address" required></p>
        <p style="margin-left:65px;">Contact:<input placeholder="Enter contact" name="phone" required></p>
        <button style="margin-left:150px;" type="submit" name="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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
          <form action="quotation_product.php" method="post">
             <p>Product Name:<input name="pname" type="text" required></p>
             <p style="margin-left:20px;">Description:<input name="description" type="text"></p>
              <p style="margin-left:67px;">Price:<input name="price" type="text"></p>
                <button style="margin-left:140px;width:100px" type="submit" name="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
        
        
        
        

        

  

    </div>
    

  
    
    <table id="myTable" class="w3-striped w3-border b" style="margin:0px; width:100%;line-height:20px; text-align:center;"><th style="background:black; color:white;margin-top:10px;">Product<button style="font-size:14px;padding:7px 10px;margin-bottom:10px;margin-left:20px;"type="button" class="btn btn-success"  data-toggle="modal" data-target="#mexampleModal" ><i class="fa fa-plus"></i></button></th><th style="background:black; color:white;">Quantity</th><th style="background:black; color:white;">Tax</th><th colspan="2" style="background:black; color:white;">Amount
    <tr>
    
    <form action="quotation_product_list.php" method="post">
    <td><input list="product" name="product" type="text"><datalist id="product">
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
                      $sql = "SELECT * FROM product WHERE cID='".$_SESSION["cID"]."'";
                      $row= mysqli_query($conn, $sql);
                      if (mysqli_num_rows($row) > 0) {
                        while($row3 = mysqli_fetch_assoc($row)){
                          echo "<option value='".$row3["pID"]."'>".$row3["pname"]."</option>";
                          //$pid = $row3["pID"];
                          
                        }
                       
                      }
                      ?></datalist></td>
    
    <td><input name="quantity" type="number"></td>
    
    <td><input name="tax" type="name"></td>
    <td><input name="amount" type="number"><button class="btn btn-info" onclick="myFunction()" type="submit" name="submit"  style="margin-left:20px;height:40px">Add</button></td>
      
     
    </form>    
    </tr> 
    <tr>
        
   
        
        
        
        
        
    </tr> 
        
        
        
    </th>

  

    </table>
    




    
    
    

    
    
    
    
    
    
    
    
    
    
    
</body>
<div class="col-12" style="height:400px;">
    
    
    
</div>
<?php
 include "footer1.php";   
    
?>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>