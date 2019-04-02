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

        <li class="nav-item dropdown">
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

        <li class="nav-item dropdown active">
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

        <div class="container-fluid" style="padding-top:3%;padding-bottom:2%;">


        <button class="btn" style="float: right" href="/addNewUser" data-toggle="modal" data-target="#addNewUser"><i class="fa fa-plus-circle"></i> Add a New User</button>
        <br><br>
      <!-- DataTables Example -->
          <div class="card mb-3">
                <div class="card-header">
                    <center><i class="fas fa-user-clock"></i>
                        <font size="5">User Management</font>
                    </center>
                </div>
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
                </div> <!-- end .flash-message -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Password</th>
                    </tr>
                    </thead>

                    <thead>
                    <tbody>
                        @foreach($showData as $showData)
                        <tr>
                            <td >{{ $showData->userid }}</td>
                            <td>{{ $showData->username }}</td>
                            <td>{{ $showData->firstName }} {{ $showData->lastName }}</td>
                            <td>{{ $showData->role }}</td>
                            <td>{{ $showData->userStatus}}</td>
                            <td>
                                <div>
                                    <center>
                                        <button type="button" class="btn btn-default btn-xs btn-filter"
                                            data-target="#editInformation" data-toggle="modal"
                                            data-userid = "{{ $showData->userid}}"
                                            data-username = "{{ $showData->username}}"
                                            data-firstname = "{{ $showData->firstName}}"
                                            data-lastname = "{{ $showData->lastName}}"
                                            data-role = "{{ $showData->role}}"
                                            data-userstatus = "{{ $showData->userStatus}}"
                                            >
                                            <span style="color:#0460f4;" class="fas fa-edit"> Edit </span>
                                        </button>
                                    </center>
                                </div>
                            </td>
                            <td>
                                <div>
                                <center>
                                    <button type="button" class="btn btn-default btn-xs btn-filter" data-target="#resetPassword" data-toggle="modal" style="width: 100px; height: 40px;">
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

    <!-- Add a New User Modal-->
        <div class="modal fade" id="addNewUser" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container-fluid" style="padding-bottom:3%; padding-top:4%;">
    <div class="card card-register mx-auto" style="width:100%;">
       <div class="card-header" style="background-color:#dd8282;"><h4 align="center">Register New User
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span></div>
            </button>
            </h4>
            <div class="card-body" style="background-color:#edcbcb;">
                <form method="POST" action="/addNewUser">
                    {{csrf_field()}}
                    @include('admin.userRegisterModalForm')
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


    <!-- Case Record Modal-->
    <div class="modal fade" id="editInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">User details update</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form action="/userUpdate" method="POST">
                      {{csrf_field()}}
                      <input type="hidden" id="useridOne" name="useridOne" class="form-control" value=""> {{-- QUERY HERE --}}
                      @include('admin.userUpdateModalForm')
                    <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </center>
                    </div>
                  </form>
                </div>
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
    <script src="bower_components/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="bower_components/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="bower_components/js/demo/datatables-demo.js"></script>

    <script>
            $('#editInformation').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var userid = button.data('userid')
                var username = button.data('username')
                var firstname = button.data('firstname')
                var lastname = button.data('lastname')
                var role = button.data('role')
                var userstatus = button.data('userstatus')

                var modal = $(this)
                modal.find('.modal-body #useridOne').val(userid)
                modal.find('.modal-body #username').val(username)
                modal.find('.modal-body #firstName').val(firstname)
                modal.find('.modal-body #lastName').val(lastname)
                modal.find('.modal-body #role').val(role)
                modal.find('.modal-body #userStatus').val(userstatus)
              })
    </script>

  </body>
  @endguest
</html>
