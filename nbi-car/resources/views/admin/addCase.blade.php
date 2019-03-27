<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <!-- Add Fields
    <script src="bower_components/datepicker/addFields.js"></script>
    -->

    <style>
            .input-group:not(:first-of-type) { margin-top: 10px; }
    </style>


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="/encoderHome">NBI-CAR</a>

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
        <form method="POST" action="/adminAddCase">
            {{ csrf_field() }}
          <div class="container-fluid" style="padding-bottom:3%; padding-top:2%;">
            <div class="card card-register mx-auto" style="width:100%%;">
              <center><div class="card-header"><h4>Add Case Records</div></center>
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
                    <div class="form-group">
                      <div class="form-row">
                          <div class="col-md-6">
                              <label for="caseNumber">NBI-CAR Case Number</label>
                              <div class="input-group mb-2">
                                  <input type="text" id="" name="" class="form-control col-md-5" value="NBI-CAR-" readonly>
                                  <input type="text" id="docketnumber" name="docketnumber" class="form-control" value="" placeholder="0-00-000" maxlength="8" pattern="^\w{1}-\d{2}-\d{3}$" onkeypress='validate(event)' title="Follow the following format. e.g. C-10-001" required> {{-- QUERY HERE --}}
                              </div>
                          </div>

                          <div class="col-md-6">
                              <label for="ccn">CCN</label>
                              <div class="input-group mb-2">
                                  <input type="text" id="" name="" class="form-control col-md-5" value="NBI-CCN-" readonly>
                                  <input type="text" id="ccn" name= "ccn" class="ccNumber form-control" value="" placeholder="I-00-00000" maxlength="10" pattern="^\w{1}-\d{2}-\d{5}$" title="Follow the following format. e.g. I-10-00001" onkeypress='validateCCN(event)'> {{-- QUERY HERE --}}
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-6">
                              <label for="ccn">ACMO No.</label>
                              <div class="input-group mb-2">
                                  <input type="text" id="acmo" placeholder="00-0-00000" title="Follow the following format. e.g. 10-C-00001" maxlength="10" pattern="^\d{2}-\w{1}-\d{5}$" name= "acmo" class="form-control" value="" onkeypress='validateACMO(event)' required> {{-- QUERY HERE --}}
                              </div>
                          </div>
                          <div class="col-md-6">
                              <label for=complainant>Complainant</label>
                                  <div class="">
                                      <input type="text" id="complainant" name="complainant"  class="form-control" onkeypress='validateComplainant(event)' required/>  {{-- QUERY HERE --}}
                                  </div>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                          <div class="col-md-6">
                              <div class="control-group fld_wrap" id="fld3">
                                  <label class="control-label" for="subject1">Subject</label>
                                  <div class="input-group">
                                      <input class="form-control" name="subject[]" type="text" onkeypress='validateComplainant(event)' required/>
                                      <div class="input-group-prepend">
                                          <button class="btn btn-success btn-add add_button3" fldnum="3" type="button">
                                              <span class="fas">+</span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="control-group fld_wrap" id="fld4">
                                  <label class="control-label" for="victim1">Victim/s</label>
                                  <div class="input-group">
                                      <input class="form-control" name="victim[]" type="text" onkeypress='validateComplainant(event)' required/>
                                      <div class="input-group-prepend">
                                          <button class="btn btn-success btn-add add_button4" fldnum="4" type="button">
                                              <span class="fas">+</span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="agent">Agent</label>
                            <div class="fld_wrap" id="fld2">
                                <div class="input-group">
                                    <select name="fld_val2[]" id="fld_val2"  class="form-control" required>
                                        <option value=""></option>
                                        @foreach($agent as $agent)
                                        <option value="{{ $agent->userid }}">{{ $agent->firstName }} {{ $agent->lastName }}</option>@endforeach
                                    </select>
                                    <div class="input-group-prepend">
                                        <button class="btn btn-success btn-add add_button2" fldnum="2" type="button">
                                            <span class="fas">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="control-group">
                                <label class="control-label" for="caseNature1">Nature of Case</label>
                                <div class="fld_wrap" id="fld1">
                                    <div class="input-group">
                                        <select  name="fld_val1[]" id="fld_val1" class="form-control" required>
                                            <option value=""></option>
                                            @foreach($nature as $nature)
                                                <option value="{{ $nature->natureid }}">{{ $nature->nature }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success btn-add add_button1" fldnum="1" type="button">
                                                <span class="fas">+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="dateAssigned">Date Assigned</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="btn btn-secondary">
                                        <i class="fas fa-fw fa-calendar"></i>
                                    </div>
                                </div>
                                <input type="text" id="datepicker" name= "dateAssigned"  class="form-control" value="" placeholder="Choose" autocomplete="off" required> {{-- QUERY HERE --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="status">Status</label>
                            <div class="input-group">
                                <select name="status" class="form-control" required>
                                    <option value=""></option>
                                    @foreach($status as $status)
                                        <option value="{{ $status->statusid }}">{{ $status->status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                         <label for="dateTerminated">Date Terminated</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="btn btn-secondary">
                                    <i class="fas fa-fw fa-calendar"></i>
                                </div>
                            </div>
                            <input type="text" id="datepickers" name="dateTerminated" class="form-control" value="" placeholder="Choose"  autocomplete="off"> {{-- QUERY HERE --}}
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="">
                                <input type="hidden" id="description" name="description" class="form-control" value="Administrator add new case, with case id = ">
                                <input type="hidden" id="action" name="action" class="form-control" value="Add">
                                <input type="hidden" name="userid" id="userid" value="{{ Auth::user()->userid }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <center> <button class="btn btn-primary btn-block col-md-3" type="submit">Save</button> </center>
                </div>

                </div> <!--CLOSING CARD HEADER -->
            </div> <!--CLOSING CARD REGISTER -->
          </div> <!--CLOSING CONTAINER FLUID -->
        </form>
      </div> <!--CLOSING CONTENT WRAPPER -->


      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
              <span>Copyright © eCaseRecord-NBI 2018-2019</span>
          </div>
        </div>
    </footer>

    </div> <!--CLOSING WRAPPER -->
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


    <script>
        $(document).ready(function(){
            $('.add_button3').click(function(){
                var kakoi=$(this).attr('fldnum');
                var insHTML = '<div class="input-group"><input class="form-control" name="subject[]" type="text" onkeypress="validateComplainant(event)" required/><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button3 remove_button" fldnum="3" type="button"><span class="fas">x</span></button></div></div>';
                $("#fld3").append(insHTML);
            });

            $('.fld_wrap').on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parents(':eq(1)').remove();
            });
        });

        $(document).ready(function(){
            $('.add_button4').click(function(){
                var kakoi=$(this).attr('fldnum');
                var insHTML = '<div class="input-group"><input class="form-control" name="victim[]" type="text" onkeypress="validateComplainant(event)" required/><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button4 remove_button" fldnum="4" type="button"><span class="fas">x</span></button></div></div>';
                $("#fld4").append(insHTML);
            });

            $('.fld_wrap').on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parents(':eq(1)').remove();
            });
        });
         $(document).ready(function(){
                $('.add_button2').click(function(){
                    var kakoi=$(this).attr('fldnum');
                    var insHTML = '<div class="input-group"><select name="fld_val2[]" id="fld_val2"  class="form-control"><option value=""></option>@foreach($agent2 as $agent2)<option value="{{ $agent2->userid }}">{{ $agent2->firstName }} {{ $agent2->lastName }}</option>@endforeach</select><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button2 remove_button" fldnum="2" type="button"><span class="fas">x</span></button></div>';
                    $("#fld2").append(insHTML);
                });

                $('.fld_wrap').on('click', '.remove_button', function(e){
                    e.preventDefault();
                    $(this).parents(':eq(1)').remove();
                });
            });
            $(document).ready(function(){
                $('.add_button1').click(function(){
                    var kakoi=$(this).attr('fldnum');
                    var insHTML = '<div class="input-group"><select  name="fld_val1[]" id="fld_val1" class="form-control" required><option value=""></option>@foreach($nature2 as $nature2)<option value="{{ $nature2->natureid }}">{{ $nature2->nature }}</option>@endforeach</select><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button1 remove_button" fldnum="1" type="button"><span class="fas">x</span></button></div>';
                    $("#fld1").append(insHTML);
                });

                $('.fld_wrap').on('click', '.remove_button', function(e){
                    e.preventDefault();
                    $(this).parents(':eq(1)').remove();
                });
            });
        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
            // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9,C,M,-]/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        function validateCCN(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
            // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9,I,M,-]/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        function validateACMO(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
            // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9,C,I,-]/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        function validateComplainant(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
            // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[a-z,A-Z, ]/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>

    <!-- Custom scripts for all pages -->
    <script src="bower_components/js/sb-admin.min.js"></script>
    <script src="bower_components/js/demo/datatables-demo.js"></script>
    <script src="bower_components/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!--THIS IS A COMMENT, BELOW ARE COMMENTS AND IT CANNOT RUN
      Bootstrap core JavaScript
    <script src="bower_components/vendor/jquery/jquery.min.js"></script>
     Core plugin JavaScript
    <script src="bower_components/vendor/jquery-easing/jquery.easing.min.js"></script>
     Page level plugin JavaScript
    <script src="bower_components/vendor/datatables/jquery.dataTables.js"></script>
    <script src="bower_components/vendor/datatables/dataTables.bootstrap4.js"></script>
     Demo scripts for this page-->

  </body>
@endguest
</html>
