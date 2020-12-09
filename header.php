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
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle "> <i class="fas fa-home " aria-hidden="true"></i><span class="ml-1">Main</a>
                    <ul class="collapse list-unstyled " id="homeSubmenu">
                        <li>
                          <li>
                            <a href="newinstallation.php">New Installation</a>
                        </li>
                        <li>
                            <a href="history.php">History</a>
                        </li>
                        <li>
                            <a href="exportdate.php">Export Date</a>
                        </li>
                        <li>
                            <a href="exportcustomer.php">Export Customer</a>
                        </li>
                        <li>
                            <a href="dealer.php">Dealer</a>
                        </li>
                        <li>
                            <a href="addstock.php">Add Stock</a>
                        </li>
                        <li>
                            <a href="allocatestock.php">Allocate Stock</a>
                        </li>
                        <li>
                            <a href="dealerstock.php">Dealer Stock</a>
                        </li>
                        <li>
                            <a href="pendingstock.php">Pending Stock</a>
                        </li>
                        <li>
                            <a href="reversestock.php">Reverse Stock</a>
                        </li>
                        <li>
                            <a href="cancelled.php">Cancelled</a>
                        </li>
                        <li>
                            <a href="saleanalytics.php">Sales Analytics</a>
                        </li>
                    </ul>
                </li>
                <li>
                    
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="ml-1">Account</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Create Account</a>
                        </li>
                        <li>
                            <a href="addvehicle.php">Add Vehicle</a>
                        </li>
                        <li>
                            <a href="viewvehicle.php">View Vehicle</a>
                        </li>
                    </ul>
                </li>

                <li>
                    
                    <a href="#pageSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="ml-1">Add Users</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu0">
                        <li>
                            <a href="addtech.php">Technician</a>
                        </li>
                        <li>
                            <a href="addmember.php">Company Users</a>
                        </li>
                        <li>
                            <a href="adddealer.php">Dealers</a>
                        </li>
                        <li>
                            <a href="addlocation.php">Add Location</a>
                        </li>
                    </ul>
                </li>


                <li>
                    
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-reply-all" aria-hidden="true"></i><span class="ml-1">Renewal</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="renewal.php">Renewal</a>
                        </li>
                        <li>
                            <a href="pendingren.php">Pending</a>
                        </li>
                        <li>
                            <a href="pendapprove.php">Approve</a>
                        </li>
                        <li>
                            <a href="transactions.php">Transactions</a>
                        </li>
                        <li>
                            <a href="lpo_cheque.php">LPOs & Cheques</a>
                        </li>
                    </ul>
                </li>

                <li>
                    
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-compress" aria-hidden="true"></i><span class="ml-1">Occurence</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="#">New Incidents</a>
                        </li>
                        <li>
                            <a href="vincident.php">View Incidents</a>
                        </li>
                        
                    </ul>
                </li>
                <li>

                 <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i><span class="ml-1">Replace</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="replace.php">Replace</a>
                        </li>
                        
                    </ul>
                </li>

                <li>

                <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list-alt" aria-hidden="true"></i><span class="ml-1">Dealer List</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li>
                            <a href="dealerlist.php">List</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog" aria-hidden="true"></i><span class="ml-1">Pulse Settings</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu5">
                        <li>
                            <a href="pulselist.php">Pulses</a>
                        </li>
                        <li>
                            <a href="addpulse.php">AddPulses</a>
                        </li>
                       
                    </ul>
                </li>

                <li>
                <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ban" aria-hidden="true"></i><span class="ml-1">Suspended</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu6">
                        <li>
                            <a href="suspendedtech.php">Suspended Technician</a>
                        </li>
                        <li>
                            <a href="suspendeddealer.php">Suspended Dealers</a>
                        </li>
                        
                    </ul>


                </li>

                <li>
                    
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-book" aria-hidden="true"></i><span class="ml-1">Ledger</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu7">
                        <li>
                            <a href="ledgerlist.php">List</a>
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
                        <?php
                        if ($role=='accounts') {
                            # code...
                            ?>
                            
                        
                        
                        <li class="nav-item  btn btn-info btn-rounded btn-sm my-0 .px-2 ">
                            <a class="nav-link" href="headeraccount.php">Accounts</a>
                        </li>
                        <li class="nav-item btn ">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                        </li>
                        <li class="nav-item  btn btn-danger btn-rounded btn-sm my-0">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                        <?php
                        } elseif ($role=='super admin') {
                            # code...
                            ?>
                            <li class="nav-item btn btn-success btn-rounded btn-sm my-0  mr-3">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        
                        
                        <li class="nav-item  btn btn-info btn-rounded btn-sm my-0 .px-2 ">
                            <a class="nav-link" href="headeraccount.php">Accounts</a>
                        </li>
                        <li class="nav-item btn ">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                        </li>
                        <li class="nav-item  btn btn-danger btn-rounded btn-sm my-0">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                        <?php
                        }
                        else {
                            # code...
                            ?>
                            <li class="nav-item btn btn-success btn-rounded btn-sm my-0  mr-3">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        
                        
                        
                        <li class="nav-item btn ">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                        </li>
                        <li class="nav-item  btn btn-danger btn-rounded btn-sm my-0">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                        <?php
                        }
                        
                        ?>
                           
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