
 </!DOCTYPE html>
 <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <title>Jendie</title>

    <style type="text/css">

        
        /*section counter*/
.container {

    margin-left: 350px;
    margin-right: 100px;
    position: absolute;
    margin-top: 120px;
      top: 0;
      left: 0;
      width: 120%;
      height: 100%;
      overflow: hidden;
      z-index: 1;

}

/* Float four columns side by side */
.column {
    float: left;
    width: 23%;
    padding: 0 5px;
}

.row {
    margin: 0 -5px;
}

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: inline;
        clear: both;
    }

/* Responsive columns */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        display: block;
        margin-bottom: 10px;
    }
}

/* Style the counter cards */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #444;
    color: white;
}

.fa {
    font-size: 50px;
}

.collap{
    margin-left: 750px;
    margin-right: 90px;
    position: absolute;
    margin-top: 510px;
    top: 0;
      left: 0;
      width: 40%;
      height: 70%;
      overflow: hidden;
      z-index: 1;
}


 
    </style>
<body>
 <!--Section Counter -->
    <!-- Earnings (Monthly) Card Example -->
    <div class="container">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Installations</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id = "myList"><?php
                              include 'db.php'; 
                              $result = mysqli_query($conn, "SELECT * FROM work where problem='INSTALLATION'");
                              $count=mysqli_num_rows($result);
                              echo $count;
                              
                              ?>
                  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Renewals</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                              include 'db.php'; 
                              $result = mysqli_query($conn, "SELECT * FROM work where problem='RENEWAL'");
                              $count=mysqli_num_rows($result);
                              echo $count;
                              
                              ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Technicians</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                              include 'db.php'; 
                              $result = mysqli_query($conn, "SELECT * FROM technician");
                              $count=mysqli_num_rows($result);
                              echo $count;
                              
                              ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <!--<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Dealers</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                              include 'db.php'; 
                              $result = mysqli_query($conn, "SELECT * FROM users");
                              $count=mysqli_num_rows($result);
                              echo $count;
                              
                              ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <!--<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
</div>



<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>


    


</body>


</html>
