<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Jendie</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <link href="css/style5.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

   

    

</head>
<style type="text/css">
    body{
        background-image: linear-gradient(to right, rgba(237, 193, 118), rgba(195, 161, 151));
        
    max-width: 100%;
    overflow-x: hidden;

    }
    .navbar0 {
 
  margin-left: 250px;
   margin-right: 250px;
  overflow: hidden;
  background-color: #333;
 
 
  width: 100%;
}
#sidebar ul li a:hover {
color:#a63a08;
}
.active{
    background-color: red;
}
ul ul a {
    
    background: rgb(41, 37, 36);opacity:0.8;





</style>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" style="background-color:rgb(41, 37, 36);opacity:0.8; ">
            <div class="sidebar-header"  style="background-color:rgb(41, 37, 36);opacity:0.8;">
                <img src="img/logo.png">
            </div>

            <ul class="list-unstyled components">
                <p>username</p>
                <li class="active " >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle "> <i class="fas fa-home " aria-hidden="true"></i><span class="ml-1">Accounts Main</a>
                    <ul class="collapse list-unstyled " id="homeSubmenu">
                        <li>
                          <li>
                             <a href="defaulters.php">Defaulters</a>
                        </li>
                         <li>
                             <a href="approve.php">Approve</a>
                        </li>
                        <li>
                            <a href="searchserial.php">Search Serial</a>
                        </li>
                        <li>
                            <a href="#">Quote History</a>
                        </li>
                        <li>
                            <a href="#">Invoice History</a>
                        </li>
                        <li>
                            <a href="#">Sales Analytics</a>
                        </li>
                        
                    </ul>
                </li>
                



                

               
                    

             </ul>
        </nav>

        <!-- Page Content Holder -->

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #3d3023; opacity:0.8;>
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item btn btn-success btn-rounded btn-sm my-0 mr-3 ">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            
                            <li class="nav-item  btn btn-info btn-rounded btn-sm my-0 .px-2 ">
                                <a class="nav-link" href="index.php">Accounts</a>
                            </li>
                            <li class="nav-item btn ">
                                <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                            </li>
                            <li class="nav-item  btn btn-danger btn-rounded btn-sm my-0">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

             <!-- Page View Holder -->
            
        
    

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>