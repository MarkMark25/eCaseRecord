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
      <style>
            th {
                font-size:15px;
            }
            td {
                font-size:12px;
            }
      </style>
      <script src="bower_components/js/canvasjs.min.js"></script>
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
         @if (session('status'))

        {{ session('status') }}

            @endif
                <!-- Navbar -->
                <ul class="navbar-nav ml-auto ml-md-0">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @else
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user-circle fa-fw"></i>
               {{ Auth::user()->firstName}} {{ Auth::user()->lastName}}
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
         <li class="nav-item active">
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
               <a class="dropdown-item" href="/caseReport">Case Records</a> <!-- add page for case records-->
               <a class="dropdown-item" href="/caseNature">Case Nature</a>  <!-- add page for case nature -->
               <a class="dropdown-item" href="/addNewCase">Add New Case</a>
               <a class="dropdown-item" href="/ComplaintSheet">Complaint Sheet</a>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Generate Report</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="/">CCN & ACMO No. Request</a>
                <!-- add page for case records-->
                <a class="dropdown-item" href="/">Transmittal</a>
                <!-- add page -->
                <a class="dropdown-item" href="/">Terminated Crimes</a>
                <!-- add page -->
                <a class="dropdown-item" href="/">Pending Crimes</a>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Manage Accounts</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
               <a class="dropdown-item" href="/manageAccounts">User Monitoring</a> <!-- add page for case records-->
               <a class="dropdown-item" href="/userLogs">User Logs</a>  <!-- add page -->
               <a class="dropdown-item" href="/userHistory">User History</a>  <!-- add page -->
            </div>
         </li>
      </ul>
      <!-- /.container-fluid -->
      <div id="content-wrapper">
         <div class="container-fluid">
            <!-- Icon Cards-->
            <div class="row">
               <div class="col-xl-4 col-sm-7 mb-4">
                  <div class="card text-white bg-primary o-hidden h-100">
                     <div class="card-body">
                        <div class="card-body-icon">
                           <i class="fas fa-fw fa-user-friends"></i>
                        </div>
                        <div class="mr-5">
                            {{ $activeUsers }} Active users
                        </div>
                     </div>
                     <a class="card-footer text-white clearfix small z-1" href="/manageAccounts">
                     <span class="float-left" bg-primary>View Details</span>
                     <span class="float-right">
                     <i class="fas fa-angle-right"></i>
                     </span>
                     </a>
                  </div>
               </div>
               <div class="col-xl-4 col-sm-7 mb-4">
                  <div class="card text-white bg-success o-hidden h-100">
                     <div class="card-body">
                        <div class="card-body-icon">
                           <i class="fas fa-fw fa-download"></i>
                        </div>
                        <div class="mr-5">
                            {{ $totalRecords }} Total no. of Case Records
                        </div>
                     </div>
                     <a class="card-footer text-white clearfix small z-1" href="/caseReport">
                     <span class="float-left">View Details</span>
                     <span class="float-right">
                     <i class="fas fa-angle-right"></i>
                     </span>
                     </a>
                  </div>
               </div>
               <div class="col-xl-4 col-sm-7 mb-4">
                    <div class="card text-white bg-warning o-hidden h-100">
                       <div class="card-body">
                          <div class="card-body-icon">
                             <i class="fas fa-fw fa-copy"></i>
                          </div>
                            <div class="mr-5">
                                @foreach ($caseRecords as $caseRecords)
                                    {{ $caseRecords->caseRecords }} Closed cases
                                @endforeach
                            </div>
                       </div>
                       <a class="card-footer text-white clearfix small z-1" href="/caseReport">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                 </div>
            </div>
         </div>
         <div id="content-wrapper">
            <div class="container-fluid">
               <!-- Charts-->
               <div class="card mb-3">
                  <div class="card-header">
                     <i class="fas fa-fw fa-chart-bar"></i>
                     <b>CAR Crime Offenses Statistics</b>
                  </div>
                  <script>
                     window.onload = function () {

                     var chart = new CanvasJS.Chart("chartContainer", {
                     	title:{
                     		text: "Criminal Offenses"
                     	},
                     	axisY: {
                     		title: "Percentage"
                     	},
                     	data: [{
                     		type: "column",
                     		dataPoints: [
                                <?php
                                    foreach ($chart as $chart){
                                        echo"{label:'{$chart->nature}', y:{$chart->totalNumber}},\r\n";
                                    }
                                ?>

                     		]
                     	}]
                     });
                     chart.render();

                     }
                  </script>
                    <div id="chartContainer" style="height: 200px; width: 98%;"></div>
                    </div>
               <br>
               <!-- pending cases -->
               <div class="row">
                  <div class="col-lg-6">
                     <div class="card mb-3">
                        <div class="card-header">
                           <i class="fas fa-fw fa-clock"></i>
                           <b style="font-size:17px;">Pending Cases</b>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTableS" >
                                    <thead>
                                       <tr>
                                          <th>Subject</th>
                                          <th>Complainant</th>
                                          <th>Agent</th>
                                          <th>Date Assigned</th>
                                          <th>Nature of Case</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($pendingCase as $pendingCase)
                                         <tr>
                                             <td>{{ $pendingCase->suspectName }}</td>
                                             <td>{{ $pendingCase->complainantname }}</td>
                                             <td>{{ $pendingCase->full_name }}</td>
                                             <td>{{ $pendingCase->dateassigned }}</td>
                                             <td>{{ $pendingCase->status }}</td>
                                         </tr>
                                     @endforeach
                                    </tbody>
                                 </table>
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="card mb-3">
                        <div class="card-header">
                           <i class="fas fa-fw fa-users"></i>
                           <b style="font-size:17px;">User Logs</b>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                       <tr>
                                          <th>User</th>
                                          <th>Action</th>
                                          <th>Description</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($showData as $showData)
                                         <tr>
                                             <td>{{ $showData->name }}</td>
                                             <td>{{ $showData->action }}</td>
                                             <td>{{ $showData->description }}</td>
                                         </tr>
                                     @endforeach
                                    </tbody>
                                 </table>
                            </div>
                        </div>
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
            <div class="modal-header" style="background-color:#dd8282;">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" style="background-color:#edcbcb;">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer" style="background-color:#dd8282;">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
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
   @endguest
</html>
