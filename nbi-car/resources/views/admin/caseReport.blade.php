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

    <!--DATE PICKER AND ADD FIELDS START HERE-->
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
    <script src="bower_components/datepicker/addCase.js"></script>

    <!-- Add Fields
    <script src="bower_components/datepicker/addFields.js"></script>
    -->
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

        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            {{ Auth::user()->firstName}} {{ Auth::user()->lastName}} <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="/profile">Profile</a>
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

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Manage Case</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="/caseReport">Case Report</a> <!-- add page for case records-->
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
            <a class="dropdown-item" href="/">CCN & ACMO No. Request</a> <!-- add page for case records-->
            <a class="dropdown-item" href="/">Transmittal</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Statistics</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Terminated Crimes</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Terminated Miscellaneous</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Pending Crimes</a>  <!-- add page -->
            <a class="dropdown-item" href="/">Pending Miscellaneous</a>  <!-- add page -->

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


    <div id="content-wrapper">
    <div class="container-fluid" style="padding-top:3%;padding-bottom:2%;">
      <a class="btn btn-secondary" style="float: right">Backup Records <i class="fa fa-file-download"></i></a>
      <br><br>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th style="display:none;">Case ID</th>
                        <th style="width:8%">ACMO</th>
                        <th style="width:8%">CAR Case No.</th>
                        <th style="width:8%">CCN</th>
                        <th style="width:10%">Subject</th>
                        <th style="width:10%">Complainant</th>
                        <th style="width:10%">Nature of Case</th>
                        <th style="width:10%">Date Assigned</th>
                        <th style="width:10%">Date Terminated</th>
                        <th style="width:8%">Status</th>
                        <th style="width:10%">Agent</th>
                        <th style="width:8%">Action</th>
                        <th style="width:5%">More</th>
                    </tr>
                    </thead>

                    <thead>
                    <tbody>
                        @foreach($showData as $showData)
                        <tr>
                            <td style="display:none;">{{ $showData->caseid }}</td>
                            <td>{{ $showData->acmo }}</td>
                            <td>{{ $showData->docketnumber }}</td>
                            <td>{{ $showData->ccn }}</td>
                            <td>{{ $showData->suspectName}}</td>
                            <td>{{ $showData->complainantname}}</td>
                            <td>{{ $showData->natureName }}</td>
                            <td>{{ $showData->dateassigned }}</td>
                            <td>{{ $showData->dateTerminated }}</td>
                            <td>{{ $showData->status }}</td>
                            <td>{{ $showData->full_name }}</td>
                            <td>
                                <div>
                                    <a href="/editModal" data-target="#editModal" data-toggle="modal"> <button type="button" class="btn btn-default btn-xs btn-filter"> <span style="color:#0460f4;" class="fas fa-edit"> </span></button></a>
                                    <a href="/deleteModal" data-target="#deleteModal" data-toggle="modal"> <button type="button" class="btn btn-default btn-xs btn-filter"> <span style="color:#FF0000;" class="fas fa-trash"> </span></button></a>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <a href="" data-target="#moreButton" data-toggle="modal">
                                        <button type="button" class="btn btn-default btn-xs btn-filter">
                                            <span style="color:#0460f4;" class="fas fa-plus-circle"></span>
                                        </button>
                                    </a>
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



    <!-- Exit Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            </div>
        </div>
    </div>


 <!-- Edit Modal-->
 <div class="modal fade" id="editModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container-fluid" style="padding-bottom:3%; padding-top:4%;">
    <div class="card card-register mx-auto" style="width:40%;">
       <div class="card-header"><h4 align="center">Update Case:
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span></div>
            </button>
            </h4>
            <div class="card-body">

            <form>
            <div class="form-group row">
              <label for="docketno" class="col-sm-3 col-form-label">Docket Number</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="docketno">
              </div>
            </div>

            <div class="form-group row">
              <label for="ccn" class="col-sm-3 col-form-label">CCN</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="ccn">
              </div>
            </div>

            <div class="form-group row">
              <label for="acmo" class="col-sm-3 col-form-label">ACMO</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="acmo">
              </div>
            </div>

            <div class="form-group row">
              <label for="subject" class="col-sm-3 col-form-label">Subject</label>
              <div class="col-sm-7">
              <div class="input-group-prepend">
                <input type="text" class="form-control" id="subject">
                <div class="input-group-prepend">
                   <button class="btn btn-success btn-add add_button2" fldnum="5">
                      <span class="fas">+</span>
                    </button>
                </div>
              </div>
            </div>
            </div>

            <div class="form-group row">
              <label for="complainant" class="col-sm-3 col-form-label">Complainant</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="complainant">
              </div>
            </div>

           <div class="form-group row">
            <label for="natureofcase" class="col-sm-3 col-form-label">Nature of Case</label>
              <div class="col-sm-7">
              <div class="input-group-prepend" id="fld2">
                    <select name="fld_val2" class="form-control">
                       <option >......</option>
                       <option value="status1">Nature 1</option>
                       <option value="status2">Nature 2</option>
                       <option value="status3">Nature 3</option>
                       <option value="status4">Nature 4</option>
                      </select>
                        <div class="input-group-prepend">
                             <button class="btn btn-success btn-add add_button2" fldnum="5">
                                <span class="fas">+</span>
                              </button>
                            </div>
                           </div>
                        </div>
                    </div>

                    <div class="form-group row">
              <label for="status" class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="status" placeholder="Case Status">
              </div>
            </div>

            <div class="form-group row">
            <label for="agent" class="col-sm-3 col-form-label">Agent</label>
            <div class="col-sm-7">
              <div class="input-group-prepend" id="fld2">
                    <select name="agent" class="form-control" placeholder="Choose Agent">
                                <option >......</option>
                                <option value="status1">Agent 1</option>
                                <option value="status2">Agent 2</option>
                                <option value="status3">Agent 3</option>
                                <option value="status4">Agent 4</option>
                            </select>
                            <div class="input-group-prepend">
                              <button class="btn btn-success btn-add add_button2" fldnum="5">
                                <span class="fas">+</span>
                              </button>
                                    </div>
                        </div>
                    </div>
                    </div>

                <div class="form-group row">
                    <label for="dateAssigned" class="col-sm-3 col-form-label">Date Assigned</label>
                        <div class="col-sm-7">
                            <div class="input-group-prepend">
                                <div class="btn btn-secondary">
                                    <i class="fas fa-fw fa-calendar"></i>
                                 </div>
                            <input type="text" id="datepicker" name="dateAssigned" class="form-control" value="" required> {{-- QUERY HERE --}}
                        </div>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="dateTerminated" class="col-sm-3 col-form-label">Date Terminated</label>
                        <div class="col-sm-7">
                            <div class="input-group-prepend">
                                <div class="btn btn-secondary">
                                    <i class="fas fa-fw fa-calendar"></i>
                            </div>
                            <input type="text" id="datepicker" name="dateTerminated" class="form-control" value="" required> {{-- QUERY HERE --}}
                        </div>
                  </div>
                  </div>


                    <br>
                        <div class="form-group">
                           <center>
                                <button class="btn btn-primary  col-md-3" type="submit" value="submit">Save</button>
                                <button class="btn btn-danger  col-md-3" type="submit" value="submit">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- Exit Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>


    <!-- Exit Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header" style="background-color:#dd8282;">
                    <h5 class="modal-title" id="exampleModalLabel">
                            Review the case and click <strong style="color:red;">"Delete"</strong> in order to process deletion.
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color:#edcbcb;">
                    <input type="hidden" id="caseid" name="caseid" class="form-control" value="">
                    @include('admin.caseReport.deleteModalForm')
                </div>
                <div class="modal-footer" style="background-color:#dd8282;">
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </div>
          </div>
        </div>
    </div>

    <!-- Exit Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>

    <!-- More Details -->
    <div class="modal fade" id="moreButton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header" style="background-color:#dd8282;">
                    <h4 class="modal-title" id="exampleModalLabel">
                        <center>Case Summary</center>
                    </h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color:#edcbcb;">
                    <input type="hidden" id="caseid" name="caseid" class="form-control" value="">
                    @include('admin.caseReport.showModalForm')
                </div>
                <div class="modal-footer" style="background-color:#dd8282;">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
          </div>
        </div>
    </div>

    <!-- Exit Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
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
    <script src="bower_components/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="bower_components/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="bower_components/js/demo/datatables-demo.js"></script>

  </body>
  @endguest
</html>
