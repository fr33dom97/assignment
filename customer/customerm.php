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
    

    
    
</head>
    
<body >
<?php
    include "navbar.php";



  ?>
    
    
    
      
      <div class="col-12" style="height:350px;background:lavender;margin:0;">
      <h1>Customer<a href="productm.php"type="button" class="btn btn-info"style="float:right;margin-top:10px;">Product Section</a></h1>
        <div style="margin-left:250px;">
        <form action="customeradd.php" method="post">
        <p>Customer Name:<input placeholder="Customer Name"size="40" name="customer" required></p>
        <p style="margin-left:80px;">Email:<input placeholder="Email" size="40" name="email" type="email" required></p>
        <p style="margin-left:60px">Address:<input placeholder="Address" size="40" name="add"  required></p>
        <p style="margin-left:63px">Contact:<input placeholeder="phone" type="number" size="15" name="tel" required></p>
      
        <button type="submit" name="submit" class="btn btn-info"style="font-size:20px;width:100px;margin-left:200px;">Add</button>
        </form>
      
    
    
    
    
    </div>
    </div>
    
  
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

    $sql = "select * from customer limit  $start, $limit";
    $sqq = "select * from customer";
    $res = mysqli_query($conn, $sqq);
    $total=$res->num_rows;
    $num_page=ceil($total/$limit);
    $result = mysqli_query($conn, $sql);

    //$query=mysql_query("select * from company  limit   $start, $limit") or die(mysql_error());
    //$tot=mysql_query("select * from company") or die(mysql_error());

    //
    echo'
    
    <table class="w3-striped w3-border b" style="margin:0px; width:100%;line-height:60px; text-align:center;"><th style="background:black; color:white;">Customer Name</th><th style="background:black; color:white;">Email</th><th style="background:black; color:white;">Address</th>
    <th  style="background:black; color:white;">Contact</th><th colspan="2" style="background:black; color:white;">Action</th>';

    while($row = mysqli_fetch_assoc($result))
        {
      echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['address']}</td><td>{$row['phone']}</td><td><a href='customer_update.php?customerID=".$row['customerID']."'><i class='fa fa-edit'  style='font-size:36px;color:blue'></i></a></td><td><a><i class='fa fa-trash' onclick='d()' style='font-size:36px;color:black'></i></a></td></tr>\n";
        echo "<input type='hidden' id='customerid' value='{$row['customerID']}'>";


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
     echo'<a href="customerm.php?p='.$i.'">'.$i.'</a> ';

    }
      }
    }
    if($num_page>1)
    {
     pagination($page,$num_page);
     echo'</ul></div>';
    }

    ?>
    
<script>
    function d()
    {
        
        var id = document.getElementById("customerid").value;
        var cfm = confirm("Do you want to delete?");
        if(cfm == true){
            location.href="customer_delete.php?customerID="+id+"";
        }
        else{
            location.href="#"
        }
    }
    
    
    
</script>
    

   
  
    

    
    
    

</body>
<div class="col-12" style="height:200px">
    
    
    
    
    
    
    
    
</div>
    
<?php
 include "footer1.php";   
    
?>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>