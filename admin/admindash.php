<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="customer.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <script>
 $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
    $('span.collapse').toggleClass('in');
});

$('[data-toggle=offcanvas-in]').click(function() {
    $('.row-offcanvas').addClass('active');
    $('span.collapse').addClass('in');
});
    
    
    </script>
    <style>
    
    html, body {
   height: 100%;
}

.wrapper {
   height: 100%;
   margin-left:0;
   margin-right:0;
   padding-left:0;
   padding-right:0;
}

.row-offcanvas {
    position: relative;
    margin-left:0;
    margin-right:0;
    height: 100%;
}

#sidebar {
    background-color: #eee;
    min-height: 100%;
    padding: 15px;
    overflow: hidden;
    -webkit-transition: width 0.3s ease-in;
    -moz-transition: width 0.3s ease-in;
    transition: width 0.3s ease-in;
    z-index: 1;
}

#sidebar span.collapse.in {
    display: inline;
}

#sidebar .nav .nav-item .nav-link {
    white-space: nowrap;
    overflow: hidden;
}

#main {
    padding: 15px;
    left: 0;
}

/*
 * off canvas sidebar
 * --------------------------------------------------
 */
@media screen and (max-width: 34em) {
    #sidebar {
       min-width: 43px;
       -webkit-transition: all 0.4s ease-in-out;
       -moz-transition: all 0.4s ease-in-out;
       transition: all 0.4s ease-in-out;
    }
    
    #main {
        wdth: 60%;
    }
    
    .row-offcanvas-left.active .sidebar-offcanvas span.collapse {
       display: inline !important;
    }
    
    .row-offcanvas-left.active {
       left: 40%;
    }
    
    .row-offcanvas-left.active .sidebar-offcanvas {
       left: -40%;
       position: absolute;
       top: 0;
       width: 40%;
    }
    
    .row-offcanvas-left.active #main {
       width: 60%;
    }
    
    /* sidebar link text always visible when active */
    .row-offcanvas-left.active .sidebar-offcanvas span.collapse.in {
        display: inline !important;
    }
    
} 
 
 
@media screen and (min-width: 34em) {
  .row-offcanvas-left.active {
    left: 43px;
    width: 97%;
    width: calc(100% - 43px);
  }

  .row-offcanvas-left.active .sidebar-offcanvas {
    left: -43px;
    position: absolute;
    top: 0;
    width: 43px;
    text-align: center;
    min-width: 43px;
  }
  
}

    
    </style>

</head>
<body>
<div class="wrapper container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">
        <!-- sidebar -->
        <div class="col-sm-3 col-xs-1 sidebar-offcanvas" id="sidebar">
            <ul class="nav nav-stacked" id="menu">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-list-alt"></i> <span class="collapse in hidden-xs-down">Link 1</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-list"></i> <span class="collapse in hidden-xs-down">Link 2</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-paperclip"></i> <span class="collapse in hidden-xs-down">Saved</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-refresh"></i> <span class="collapse in hidden-xs-down">Refresh</span></a></li>
                <li class="nav-item" data-toggle="offcanvas-in">
                    <a class="nav-link" href data-target="#item1" data-toggle="collapse"><i class="fa fa-list"></i> <span class="collapse in hidden-xs-down">Menu <span class="caret"></span></span></a>
                    <ul class="nav nav-stacked collapse left-submenu" id="item1">
                        <li class="nav-item"><a class="nav-link" href="">View One</a></li>
                        <li class="nav-item"><a class="nav-link" href="">View Two</a></li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="offcanvas-in">
                    <a class="nav-link" href data-target="#item2" data-toggle="collapse"><i class="fa fa-list"></i> <span class="collapse in hidden-xs-down">Menu <span class="caret"></span></span></a>
                    <ul class="nav nav-stacked collapse" id="item2">
                        <li class="nav-item"><a class="nav-link" href="#">View One</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">View Two</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">View Three</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="collapse in hidden-xs-down">Link</span></a></li>
            </ul>
        </div>
        <!-- /sidebar -->

        <!-- main right col -->
        <div class="col-sm-9 col-xs-11" id="main">
            <a href="#" data-toggle="offcanvas"><i class="fa fa-navicon fa-lg"></i></a>
            <hr>
            <h3>Bootstrap 4 Responsive Sidebar Example</h3>
            <p>
                Page content here...
            </p>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-block">Card</div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-block">Card</div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-block">Card</div>
                </div>
            </div>
        </div>
        <!-- /main -->
    </div>
</div>
</body>
</html>