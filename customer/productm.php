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
    
<body >
 <?php
    include "navbar.php";



  ?>
    
    
    
          
      <div class="col-12" style="height:250px;background:lavender;margin:0">
      <h1>Product<a href="customerm.php"type="button" class="btn btn-info"style="float:right;margin-top:10px;">Customer Section</a></h1>
        <div style="margin-left:250px;">
        <form action="productadd.php" method="post"> 
        <p>Product Name:<input placeholder="Enter Name" size="30" name="item" required></p> 
        <p style="margin-left:20px;">Description:<input placeholder="Enter Description"size="30" name="des" required></p>
        <p style="margin-left:64px;">Price:<input placeholder="Enter Price" size="30" name="price" required></p>
      
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

    $sql = "select * from product  limit  $start, $limit";
    $sqq = "select * from product";
    $res = mysqli_query($conn, $sqq);
    $total=$res->num_rows;
    $num_page=ceil($total/$limit);
    $result = mysqli_query($conn, $sql);

    //$query=mysql_query("select * from company  limit   $start, $limit") or die(mysql_error());
    //$tot=mysql_query("select * from company") or die(mysql_error());

    //
    echo'

    <table class="w3-striped w3-border b" style="margin:0px; width:100%;line-height:60px; text-align:center;"><th style="background:black; color:white;">Product Name</th><th style="background:black; color:white;">Description</th><th style="background:black; color:white;">Price</th><th colspan="2" style="background:black; color:white;">Action</th>';

    while($row = mysqli_fetch_assoc($result))
        {
      echo "<tr><td>{$row['pname']}</td><td>{$row['description']}</td><td>{$row['price']}</td><td><a href='product_update.php?pID=".$row['pID']."'><i class='fa fa-edit'  style='font-size:36px;color:blue'></i></a></td><td><a><i class='fa fa-trash' onclick='d()' style='font-size:36px;color:black'></i></a></td></tr>\n";
        echo "<input type='hidden' id='pid' value='{$row['pID']}'>";


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
     echo'<a href="productm.php?p='.$i.'">'.$i.'</a> ';

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
        
        var id = document.getElementById("pid").value;
        var cfm = confirm("Do you want to delete?");
        if(cfm == true){
            location.href="product_delete.php?pID="+id+"";
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