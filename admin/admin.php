<html> 
    <head>
    <meta charset="utf-8">
    <title>PJ| Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
          .btn {
              font-family: Georgia;
              color: #0d040d;
              font-size: 20px;
              background: #15bce6;
              padding: 10px 70px 15px 70px;
              border: solid #1f628d 2px;
              text-decoration: none;
            }

            .btn:hover {
              background: #3cb0fd;
              background-image: -webkit-linear-gradient(top, #3cb0fd, #0e8fe6);
              background-image: -moz-linear-gradient(top, #3cb0fd, #0e8fe6);
              background-image: -ms-linear-gradient(top, #3cb0fd, #0e8fe6);
              background-image: -o-linear-gradient(top, #3cb0fd, #0e8fe6);
              background-image: linear-gradient(to bottom, #3cb0fd, #0e8fe6);
              text-decoration: none;
            }
            
            </style>
    
             
    </head>

    <!-------------------------------------------------------------------------//Head----------------------------------------------------------------->
        <body style="background-image:url('b.jpg'); background-size: 1600px 900px;background-repeat: no-repeat;">
      
        <div class="col-sm-12" >
        
             <div  class="w3-container " align="center"  >
            <h1  style="color:darkgrey;font-size:45px;">Welcome to admin portal</h1>
            <div  style="width:400px;;height:400px;margin-top:100px;background-color:grey ;outline-style:solid;outline-color:black;opacity:0.9">
            <form action="adminlogin.php" method="post">
                    <div class="col-sm-12">
                    
                    <img src="user.png" style="width:100px;height:100px;margin-top:20px;">
                    </div>
                    
                <i class="fa fa-user" style="font-size:18px;margin-top:20px"><input type="text" style="margin-top:20px;" placeholder="Enter Username" name="username" required ></i><br><br>
                    
                    
                   <i class="fa fa-lock" style="font-size:18px;margin-top:20px"> <input type="password" style="margin-top:20px" placeholder="Enter Password" name="password" required ></i><br><br>

                <button style="margin-top:40px;"class="btn" type="submit1" class="signupbtn1">Login</button><br><br>
        
            
            </form>
           </div>
        </div>
       
        </div>
    </body>
</html>
