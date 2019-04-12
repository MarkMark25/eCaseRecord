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
        input::placeholder {
            font-style: italic;
        }
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
        <div class="container-fluid" style="padding-top:3%;padding-bottom:2%;">
        <button class="btn" href="/" data-toggle="modal" data-target="#newNatureModal"><i class="fa fa-plus-circle"></i> Add Case Nature</button>
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
                </div> <!-- end .flash-message -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th >ID</th>
                        <th style="width:10%">Nature</th>
                        <th style="width:10%">Cases Type</th>
                        <th style="width:70%">Description</th>
                        <th style="width:20%">Actions</th>
                    </tr>
                    </thead>
                    <thead>
                    <tbody>
                        @foreach($showData as $showData)
                        <tr>
                            <td >{{ $showData->natureid }}</td>
                            <td>{{ $showData->nature }}</td>
                            <td>{{ $showData->republicAct }}</td>
                            <td>{{ $showData->description }}</td>
                            <td>
                              <div>
                                <button type="button" class="btn btn-default btn-xs btn-filter"
                                    data-target="#updateNatureModal" data-toggle="modal"
                                    data-natureid = "{{ $showData->natureid }}"
                                    data-nature= "{{ $showData->nature }}"
                                    data-description= "{{ $showData->description }}"
                                    data-casetype= "{{ $showData->republicAct }}"
                                >
                                     <span style="color:#0460f4;" class="fas fa-edit"></span>
                                </button>

                                <button type="button" class="btn btn-default btn-xs btn-filter"
                                    data-target="#deleteNatureModal" data-toggle="modal"
                                    data-natureidone = "{{ $showData->natureid }}"
                                    data-natureone= "{{ $showData->nature }}"
                                    data-descriptionone= "{{ $showData->description }}"
                                    data-casetypeone= "{{ $showData->republicAct }}"
                                >
                                    <span style="color:#FF0000;" class="fas fa-trash"></span>
                                </button>
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

    <!-- Store New Nature Modal-->
    <div class="modal fade" id="newNatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header" style="background-color:#dd8282;">
                    <h4 class="modal-title" id="exampleModalLabel">Add new case nature details</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color:#edcbcb;">
                  <form action="/createNature" method="POST">
                      {{csrf_field()}}
                    @include('admin.caseNature.caseNatureAddModalForm')
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

    <!-- Update Nature Modal-->
    <div class="modal fade" id="updateNatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header" style="background-color:#dd8282;">
                    <h4 class="modal-title" id="exampleModalLabel">Update Case nature details</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color:#edcbcb;">
                  <form action="/natureUpdate" method="POST">
                      {{csrf_field()}}
                    <input type="hidden" id="natureid" name="natureid" class="form-control" value=""> {{-- QUERY HERE --}}
                    @include('admin.caseNature.caseNatureModalForm')
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

    <!-- Delete Nature Modal-->
    <div class="modal fade" id="deleteNatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header" style="background-color:#dd8282;">
                    <h5 class="modal-title" id="exampleModalLabel">You are about to delete case nature, click <strong style="color:red;">"Delete"</strong> in order to process deletion.</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color:#edcbcb;">
                  <form action="/deleteNature" method="POST">
                      {{csrf_field()}}
                    <input type="hidden" id="natureid" name="natureid" class="form-control" value=""> {{-- QUERY HERE --}}
                    @include('admin.caseNature.deleteModalForm')
                    <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </center>
                    </div>
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
    <script src="bower_components/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="bower_components/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="bower_components/js/demo/datatables-demo.js"></script>
    <script>
            $('#updateNatureModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var natureid = button.data('natureid')
                var nature = button.data('nature')
                var casetype = button.data('casetype')
                var description = button.data('description')

                var modal = $(this)
                modal.find('.modal-body #natureid').val(natureid)
                modal.find('.modal-body #nature').val(nature)
                modal.find('.modal-body #republicAct').val(casetype)
                modal.find('.modal-body #description').val(description)
              })
    </script>
    <script>
            $('#deleteNatureModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var natureid = button.data('natureidone')
                var nature = button.data('natureone')
                var casetype = button.data('casetypeone')
                var description = button.data('descriptionone')

                var modal = $(this)
                modal.find('.modal-body #natureid').val(natureid)
                modal.find('.modal-body #nature').val(nature)
                modal.find('.modal-body #republicAct').val(casetype)
                modal.find('.modal-body #description').val(description)
              })
    </script>

  </body>
  @endguest
</html>
