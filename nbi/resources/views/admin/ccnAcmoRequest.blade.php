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

    <!-- Custom fonts for this template-->
    <link href="bower_components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="bower_components/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bower_components/css/sb-admin.css" rel="stylesheet">

    <!--TAB IMAGE -->
    <link rel="icon"  href="bower_components/image/nbi-logo.png">

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

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Generate Report</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="/adminCCNACMORequest">CCN & ACMO No. Request</a> <!-- add page for case records-->
            <a class="dropdown-item" href="/adminTerminatedCases">Transmittal</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Statistics</a>  <!-- add page -->
            <a class="dropdown-item" href="/adminTerminatedCrimeCase">Terminated Crimes</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Terminated Miscellaneous</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Pending Crimes</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Pending Miscellaneous</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Case Report</a>  <!-- add page -->
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
      <!-- /.container-fluid -->

<div id="content-wrapper">

        <div class="container-fluid" style="padding-top:3%;padding-bottom:2%;">
        

        <button class="btn" style="position: absolute; right: 1%"><i class="fa fa-print"></i>  Print  </button>
        
        <button class="btn" style="position: absolute; right: 7%"><i class="fa fa-file-excel"></i>Export as Excel</button>

        <!-- Dropdown for year -->
        <b><span>Year</span></b>
            <select name="year" id="year" style="width: 290px; height: 35px;">
                            <option value="2000">2000</option>
                            <option value="20001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019"selected>2019</option>
            </select>

        <!-- Dropdown for month -->
        <b><span>Month</span></b>
            <select name="month" id="month" style="width: 290px; height: 35px;">
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march"selected>March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
            </select>
        <br><br>

      <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                        <th>NBI CCN-C & ACMO NO.</th>
                        <th>Nature</th>
                        <th>Victim/Complainant</th>
                        <th>Subject/s</th>
                        <th>AGT/SI Assigned</th>
                        <th>Date Assigned</th>
                        <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($showData as $showData)
                    <tr>
                        <td>{{ $showData->ccn_acmo_no }}</td>
                        <td>{{ $showData->nature }}</td>
                        <td>{{ $showData->victim_complainant }}</td>
                        <td>{{ $showData->subjects }}</td>
                        <td>{{ $showData->agent_assigned }}</td>
                        <td>{{ $showData->date_assigned }}</td>
                        <td>{{ $showData->status }}</td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
              </div>
            </div>
            <b><span>TOTAL NO. OF REQUESTS: </span></b> {{-- QUERY HERE --}}
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
