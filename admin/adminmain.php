<?php
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location:admin.php');
    exit();
}



?>


<html>
    <head> 
    
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
     <link rel="stylesheet" type="text/css" href="admin.css"> 
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
        <div>
<canvas id="myChart" style="width:400px;height:400px">
  
    
    
    
    
    
</canvas>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    // Configuration options go here
    options: {}
});  
    
    
</script>  
    
    
    
    
</div>
 <div class="col-12" style="height:200px">
    
    
    
    
    
    
    
    
</div>
    </body>
    
      </html>