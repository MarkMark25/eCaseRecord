<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NBI-CAR</title>

    <!-- Bootstrap core CSS-->
    <link href="bower_components/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="bower_components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="bower_components/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bower_components/css/sb-admin.css" rel="stylesheet">

    <!--TAB IMAGE -->
    <link rel="icon"  href="bower_components/image/nbi-logo.png">

    <!--DATE PICKER1-->
    <!-- EXTRA CSS
    <link href="bower_components/datepicker/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    -->
    <script src="bower_components/datepicker/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bower_components/datepicker/jquery-ui.css">
    <script src="bower_components/datepicker/jquery-1.11.1.min.js"></script>
    <script src="bower_components/datepicker/jquery-ui.js"></script>
    
    <!--DATE PICKER2-->
    <link rel="stylesheet" href="bower_components/datepicker/jquery-ui1.css">
    <script src="bower_components/datepicker/jquery-ui1.js"></script>

    <!-- JS Datepicker -->
    <script src="bower_components/datepicker/date.js"></script>

    <!-- Add Fields -->
    <script src="bower_components/datepicker/addFields.js"></script>
    <style>
            .input-group:not(:first-of-type) { margin-top: 10px; }
    </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1 " href="/">NBI-CAR</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <!--
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        -->
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">

        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            <label name="UserName" id="UserName"> Mark Anthony</label> {{-- QUERY HERE --}}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="/encoderProfile">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

 <!-- Sidebar -->
 <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/adminHome">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Manage Case</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="/adminCaseReport">Case Report</a> <!-- add page for case records-->
            <a class="dropdown-item" href="/adminCaseNature">Case Nature</a>  <!-- add page for case nature -->
          </div>
        </li>

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Generate Report</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="/adminAcmoCcnRequest">CCN & ACMO No. Req</a>
            <a class="dropdown-item" href="/adminTransmittal">Transmittal</a>  
            <a class="dropdown-item" href="/adminStatistics">Statistics</a>  
            <a class="dropdown-item" href="/adminTerminatedCrimes">Terminated Crimes</a>  
            <a class="dropdown-item" href="/adminTerminatedMisc">Terminated Misc...</a> 
            <a class="dropdown-item" href="/adminPendingCrimes">Pending Crimes</a>  
            <a class="dropdown-item" href="/adminPendingMisc">Pending Misc...</a>
            <a class="dropdown-item" href="/adminCaseReport2">Case Report</a>  
          </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/adminManageAccount">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Manage Accounts</span></a>
        </li>

<br>
<br>
<!-- Icon Cards-->
<div class="content-wrapper">
<div class="col">
            <div class="row-xl-3 row-sm-6 mb-3">
              <div class="card text-black o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user-friends"></i>
                  </div>
                  <div class="mr-5"># active users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1 bg-success" href="#">
                  <span class="float-left" bg-primary>View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
           
            <div class="row-xl-3 ow-sm-6 mb-3">
              <div class="card text-black o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-copy"></i>
                  </div>
                  <div class="mr-5"># closed cases</div>
                </div>
                <a class="card-footer text-white clearfix small z-1 bg-primary" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            
            <div class="row-xl-3 row-sm-6 mb-3">
              <div class="card text-black  o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-download"></i>
                  </div>
                  <div class="mr-5">Total No. of Records</div>
                </div>
                <a class="card-footer text-white clearfix small z-1 bg-warning" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
    </ul>  
<!--End of ul-->


<div id="content-wrapper">
<div class="container-fluid" style="padding-top:1%;padding-bottom:2%;">
<div class="card mb-3">
            <div class="card-header">
            <center><i class="fas fa-database"></i>
                <font size="5"> Case Report</font>
            </center>
            </div>
          
            <div class="card-body">
            <button class="btn" href="/" style="position: absolute; right: 8%" data-target="#"><i class="fa fa-print"></i> Export to Excel</button>
            <button class="btn" href="/" style="position: absolute; right: 1%" data-target="#"><i class="fa fa-file-excel"></i> Print </button>
            
            <div class="col-md-3">
                        <label for="status">Filter by:</label>
                        <div class="input-group">
                            <select name="status" class="form-control">
                                <option >Complainant</option>
                                <option value="complainant1">Complainant 1</option>
                                <option value="complainant2">Complainant 2</option>
                                <option value="complainant3">Complainant 3</option>
                                <option value="complainant4">Complainant 4</option>
                            </select>
                        </div>
                    </div>
                    </div>
         
          <!-- DataTables Example --> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>NBI CCN & ACMO NO.</th>
                        <th>CAR No.</th>
                        <th>Nature</th>
                        <th>Subject</th>
                        <th>Victim/Complainant</th>
                        <th>Susject/s</th>
                        <th>AGT/SI Assigned</th>
                        <th>Date Assigned</th>
                        <th>Date Terminated</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <thead>
                    <tbody>
                        @foreach($Administrator as $showData)
                        <tr>
                            <td>{{ $showData->nbicaseno }}</td>
                            <td>{{ $showData->carno }}</td>
                            <td>{{ $showData->nature }}</td>
                            <td>{{ $showData->subject }}</td>
                            <td>{{ $showData->complainant}}</td>
                            <td>{{ $showData->subject }}</td>
                            <td>{{ $showData->agtassigned }}</td>
                            <td>{{ $showData->dateassigned }}</td>
                            <td>{{ $showData->dateterminated }}</td>
                            <td>{{ $showData->status }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © eCaseRecord-NBI 2018-2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="">Logout</a><!--LINK HERE -->
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="bower_components/vendor/jquery/jquery.min.js"></script>
    <script src="bower_components/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="bower_components/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="bower_components/vendor/datatables/jquery.dataTables.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="bower_components/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="bower_components/js/demo/datatables-demo.js"></script>

  </body>

</html>