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
            <a class="dropdown-item" href="/">CCN & ACMO No. Request</a> <!-- add page for case records-->
            <a class="dropdown-item" href="/">Transmittal</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Statistics</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Terminated Crimes</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Terminated Miscellaneous</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Pending Crimes</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Pending Miscellaneous</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Case Report</a>  <!-- add page -->
          </div>
        </li>
       
        <li class="nav-item active">
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
        

        <button class="btn" style="float: right" href="/addNewUser" data-toggle="modal" data-target="#addNewUser"><i class="fa fa-plus-circle"></i> Add a New User</button>
        <br><br>
      <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Password</th>
                    </tr>
                    </thead>

                    <thead>
                    <tbody>
                        @foreach($Administrator as $showData)
                        <tr>
                            <td>{{ $showData->username }}</td>
                            <td>{{ $showData->firstname }}</td>
                            <td>{{ $showData->lastname }}</td>
                            <td>{{ $showData->role }}</td>
                            <td>{{ $showData->status}}</td>
                            <td>
                                    <div>
                                      <center>
                                        <button type="button" class="btn btn-default btn-xs btn-filter" data-target="#editInformation" data-toggle="modal" style="width: 100px; height: 40px;">
                                            <span style="color:#0460f4;" class="fas fa-edit"> Edit </span>
                                        </button>
                                      </center>
                                    </div>
                            </td>
                            <td>
                                    <div>
                                    <center><button type="button" class="btn btn-default btn-xs btn-filter" data-target="#resetPassword" data-toggle="modal" style="width: 100px; height: 40px;">
                                            <span style="color:#008000;" class="fas fa-redo"> Reset </span>
                                        </button>
                                    </center>
                                    </div>
                            </td>
                           
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

    <!-- Add a New User Modal-->
        <div class="modal fade" id="addNewUser" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container-fluid" style="padding-bottom:3%; padding-top:4%;">
    <div class="card card-register mx-auto" style="width:100%;">
       <div class="card-header"><h4 align="center">Register New User
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span></div>
            </button>
            </h4>
            <div class="card-body">
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col-md-6">
                            <label for="firstName">First name</label>
                            <div class="">
                            <input type="text" id="firstName" class="form-control" value=""> {{-- QUERY HERE --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName">Last name</label>
                            <div class="">
                            <input type="text" id="lastName" class="form-control" value=""> {{-- QUERY HERE --}}
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col-md-6">
                            <label for="userName">Username</label>
                            <div class="">
                            <input type="text" id="userName" class="form-control" value=""> {{-- QUERY HERE --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="role">Role</label>
                            <div class="">
                            <select name="role" id="role" style="width: 290px; height: 38px;">
                                  <option value="admin">Admin</option>
                                  <option value="agent">Agent</option>
                                  <option value="encoder">Encoder</option>
                            </select>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col-md-6">

                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password"><b>Password</b></label>
                            </div>
                        </div>
                    </div>
                    <form method="" action=""> {{-- FORM GROUP --}}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                            <input type="password" minlength="8" maxlength="16" id="oldPassword" class="form-control" required="required" autofocus="autofocus">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password"><b>Confirm Password</b></label>
                            </div>
                        </div>
                    </div>
                    <form method="" action=""> {{-- FORM GROUP --}}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                            <input type="password" minlength="8" maxlength="16" id="oldPassword" class="form-control" required="required" autofocus="autofocus">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                    </div>
                                    <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <center>
                                <button class="btn btn-primary btn-block col-md-3" type="submit" value="submit">Save</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Exit Modal for add new user-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>
      </div>
    </div>
    
    <!-- Edit Information Modal-->
    <div class="modal fade" id="editInformation" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container-fluid" style="padding-bottom:3%; padding-top:4%;">
    <div class="card card-register mx-auto" style="width:100%;">
       <div class="card-header"><h4 align="center">Edit Information
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span></div>
            </button>
            </h4>
            <div class="card-body">
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col-md-6">
                            <label for="firstName">First name</label>
                            <div class="">
                            <input type="text" id="firstName" class="form-control" value=""> {{-- QUERY HERE --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName">Last name</label>
                            <div class="">
                            <input type="text" id="lastName" class="form-control" value=""> {{-- QUERY HERE --}}
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col-md-6">
                            <label for="userName">Username</label>
                            <div class="">
                            <input type="text" id="userName" class="form-control" value=""> {{-- QUERY HERE --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="role">Role</label>
                            <div class="">
                            <select name="role" id="role" style="width: 290px; height: 38px;">
                                  <option value="admin">Admin</option>
                                  <option value="agent">Agent</option>
                                  <option value="encoder">Encoder</option>
                            </select>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col-md-6">
                        <label for="userName">Status</label>
                            <div class="">
                            <select name="status" id="status" style="width: 290px; height: 38px;">
                                  <option value="active" selected>Active</option>
                                  <option value="inactive">Inactive</option>
                            </select>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="form-group">
                            <center>
                                <button class="btn btn-primary btn-block col-md-3" type="submit" value="submit">Save</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Exit Modal for edit Information-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>
      </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" id="resetPassword" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container-fluid" style="padding-bottom:3%; padding-top:4%;">
    <div class="card card-register mx-auto" style="width:100%;">
       <div class="card-header"><h4 align="center">Personal Information
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span></div>
            </button>
            </h4>

        <div class="card-body">
            <div class="form-group">
                <div class="form-row">
                <div class="col-md-6">
                    <label for="firstName">First name</label>
                    <div class="">
                    <input type="text" id="firstName" class="form-control" value=""> {{-- QUERY HERE --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="lastName">Last name</label>
                    <div class="">
                    <input type="text" id="lastName" class="form-control" value=""> {{-- QUERY HERE --}}
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                <div class="col-md-6">
                    <label for="userName">Username</label>
                    <div class="">
                    <input type="text" id="userName" class="form-control" value=""> {{-- QUERY HERE --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="role">Role</label>
                    <div class="">
                    <select name="role" id="role" style="width: 290px; height: 38px;">
                                  <option value="admin">Admin</option>
                                  <option value="agent">Agent</option>
                                  <option value="encoder">Encoder</option>
                    </select>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="status">Status</label>
                        <div class="">
                        <select name="status" id="status" style="width: 290px; height: 38px;">
                                  <option value="active" selected>Active</option>
                                  <option value="inactive">Inactive</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                <div class="col-md-6">

                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="password"><b>Password</b></label>
                    </div>
                </div>
            </div>
            <form method="" action=""> {{-- FORM GROUP --}}
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                    <input type="password" minlength="8" maxlength="16" id="oldPassword" class="form-control" required="required" autofocus="autofocus">
                                    <label for="firstName">Old Password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                    <input type="password" minlength="8" maxlength="16" id="newPassword" class="form-control" required="required">
                                    <label for="firstName">New Password (8-16 characters)</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                    <input type="password" minlength="8" maxlength="16" id="confirmPassword" class="form-control" required="required" onkeyup="checkPasswordMatch();">
                                    <label for="firstName">Confirm Password</label>
                            </div>
                            <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <center>
                        <button class="btn btn-primary btn-block col-md-3" type="submit" value="submit">Save</button>
                    </center>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- Exit Modal for change password-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
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