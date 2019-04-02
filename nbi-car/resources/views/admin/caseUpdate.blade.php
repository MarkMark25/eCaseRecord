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
            input::placeholder {
                font-style: italic;
            }
            textarea::placeholder{
                font-style: italic;
            }
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
                </ul>
      <div id="content-wrapper">
            <form method="POST" action="">
                @method('PUT')
                @csrf
                {{ csrf_field() }}
              <div class="container-fluid" style="padding-bottom:3%; padding-top:2%;">
                <div class="card mb-3" style="width:100%%;">
                  <center><div class="card-header" style="background-color:#dd8282;"><h4>Complaint Sheet</div></center>
                    <div class="card-body" style="background-color:#edcbcb;">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="ccn">CCN</label>
                                    <div class="input-group mb-2">
                                        <input type="text" id="ccn" name= "ccn" class="form-control" disabled value="{{ @$showData[0]->ccn }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="acmo">ACMO No.</label>
                                    <div class="">
                                            <input type="text" id="acmo" class="form-control" disabled value="{{ @$showData[0]->acmo}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="caseNumber">Car Case Number</label>
                                    <div class="input-group mb-2">
                                        <input type="text" id="docketnumber" name="docketnumber" class="form-control" disabled value="{{ @$showData[0]->docketnumber }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="dateassigned">Date Assigned</label>
                                    <div class="">
                                        <input type="text" id="dateassigned" name="dateassigned" class="form-control" disabled value="{{ @$showData[0]->dateassigned}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="dateTerminated">Date Terminated</label>
                                    <div class="">
                                        <input type="text" id="dateTerminated" name="dateTerminated" class="form-control" disabled value="{{ @$showData[0]->dateTerminated}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="status">Status</label>
                                    <div class="">
                                        <input type="text" id="status" name= "status" class="form-control" disabled value="{{ @$showData[0]->status}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="agent">Agent</label>
                                    <div class="">
                                        <textarea class="form-control" name="full_name" id="full_name" style="width:100%;font-size:15px;resize:none;" rows="2" disabled>{{ @$showData[0]->full_name}}</textarea>{{-- QUERY HERE --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    <hr>
                        <div class="form-group">
                            <p style="font-weight:bold;">1. Complainant (nagsusumbong) </p>
                            <div class="form-row">
                                <div class="col-md-4">
                                        <label for="suspectName">Name</label>
                                    <div class="">
                                        <input type="text" id="complainant" name="complainant"  class="form-control" disabled value="{{ @$showData[0]->complainantname}}"/>  {{-- QUERY HERE --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Address</label>
                                    <div class="">
                                        <input type="text" id="complainantAddress" name="complainantAddress"  class="form-control" disabled value="{{ @$showData[0]->complainant_Address}}"/>  {{-- QUERY HERE --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Telephone Number</label>
                                    <div class="">
                                        <input type="text" id="complainantTelNumber" name="complainantTelNumber"  class="form-control" disabled value="{{ @$showData[0]->complainant_Contact_Number}}"/>  {{-- QUERY HERE --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    <hr>
                        <div class="form-group">
                            <p style="font-weight:bold;">2. Persons Complained Against or Suspects (Isinusumbong)</p>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="suspectNameA" name="suspectNameA" placeholder="Name" disabled value="{{ @$showData[0]->suspect_name }}">
                                    <input type="text" class="form-control" id="suspectAge" name="suspectAge" placeholder="Age" disabled value="{{ @$showData[0]->suspect_Age }}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="suspectAddressA" name="suspectAddressA" placeholder="Address" disabled value="{{ @$showData[0]->suspect_Address }}">
                                    <input type="text" class="form-control" id="suspectCivilStatusA" name="suspectCivilStatusA" placeholder="Civil Status" disabled value="{{ @$showData[0]->suspect_Civil_Status }}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="suspectTelNumberA" name= "suspectTelNumberA"  placeholder="Telephone Number" disabled value="{{ @$showData[0]->suspect_Contact_Number }}">
                                    <input type="text" class="form-control" id="suspectOccupationA" name="suspectOccupationA" placeholder="Occupation" disabled value="{{ @$showData[0]->suspect_Occupation }}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="suspectSexA" name="suspectSexA" placeholder="sex" disabled value="{{ @$showData[0]->suspect_Sex }}">
                                </div>
                            </div>
                        </div>
                    <hr>
                        <p style="font-weight:bold;">3. Nature of act complained (Uri ng sumbong) </p>
                        <section>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <input class="form-control" name="nameOfNature" id="nameOfNature" disabled value="{{ @$showData[0]->natureName}}"></input>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">4. Where and when committed (Saan at Kailan Nangyari) </p>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="whereCommitted">Place Committed</label>
                                        <input type="text" name="whereCommitted" id="whereCommitted" class="form-control" disabled value="{{ @$showData[0]->place_Committed }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="whenCommitted">When Committed</label>
                                        <input type="text" name="wheneCommitted" id="wheneCommitted" class="form-control" disabled value="{{ @$showData[0]->date_Committed }}">
                                    </div>
                                </div>
                            </div>
                        </section>
                    <hr>
                    <div class="form-group">
                            <p style="font-weight:bold;">5. Victim/s If any</p>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="victimNameA" name="victimNameA" placeholder="Name" disabled value="{{ @$showData[0]->victim_name }}">
                                    <input type="text" class="form-control" id="victimAge" name="victimAge" placeholder="Age" disabled value="{{ @$showData[0]->victim_Age }}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="victimAddressA" name="victimAddressA" placeholder="Address" disabled value="{{ @$showData[0]->victim_Address }}">
                                    <input type="text" class="form-control" id="victimCivilStatusA" name="victimCivilStatusA" placeholder="Civil Status" disabled value="{{ @$showData[0]->victim_Civil_Status }}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="victimTelNumberA" name= "victimTelNumberA"  placeholder="Telephone Number" disabled value="{{ @$showData[0]->victim_Contact_Number }}">
                                    <input type="text" class="form-control" id="victimOccupationA" name="victimOccupationA" placeholder="Occupation" disabled value="{{ @$showData[0]->victim_Occupation }}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="victimSexA" name="victimSexA" placeholder="sex" disabled value="{{ @$showData[0]->victim_Sex }}">
                                </div>
                            </div>
                        </div>
                    <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">6. Narration of Facts (Salaysay ng mga Pangyayari) </p>
                                <textarea id="narrationOfFacts" name="narrationOfFacts"  style="width:100%;font-size:15px;resize:none;" rows="5" disabled>{{ @$showData[0]->narration_Of_Facts }}</textarea>
                            </div>
                        </section>
                    <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">7. Has the matter been reported to any agency, If so, to what people agency? (Ang bagay bang ito ay naulat na sa ibang sangay ng pagsisiyasat? Kung naulat na, saang sangay?) </p>
                                <textarea name="hasTheMatter" id="hasTheMatter" style="width:100%;font-size:15px;resize:none;" rows="5" disabled>{{ @$showData[0]->reported_Any_Agency }}</textarea>
                                <br>
                                <p style="font-weight:bold;">Status of investigation, If any (Kalagayan ng pagsisiyasat kung mayroon?)</p>
                                <textarea name="statusOfInvestigation" id="statusOfInvestigation" style="width:100%;font-size:15px;resize:none;" rows="5" disabled>{{ @$showData[0]->status_of_Investigation }}</textarea>
                            </div>
                        </section>
                    <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">8.Is the matter complained of the subject of any court action of proceedings? If so, where? (Ang bagay bang may kinalaman sa pagsusumbong ay nasa hukuman na? Kung gaanoon, saan?)</p>
                                <textarea name="isTheMatterComplained" id="isTheMatterComplained" style="width:100%;font-size:15px;resize:none;" rows="5" disabled>{{ @$showData[0]->where_court_Proceedings }}</textarea>
                            </div>
                        </section>
                    <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">9.What Consideration/s impelled you to report to the NBI? (Ano ang nag-udyok sa iyo para magreklamo dito sa NBI?)</p>
                                <textarea name="whatConsidirations" id="whatConsidirations" style="width:100%;font-size:15px;resize:none;" rows="5" disabled>{{ @$showData[0]->report_Considerations }}</textarea>
                            </div>
                        </section>

                    </div> <!--CLOSING CARD HEADER -->
                </div> <!--CLOSING CARD REGISTER -->
              </div> <!--CLOSING CONTAINER FLUID -->
            </form>
        </div>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
                    <span>Copyright © eCaseRecord-NBI 2018-2019</span>
            </div>
          </div>
        </footer>

      </div><!-- /.content-wrapper -->
    </div><!-- /#wrapper -->


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

    <script>
        function validateDate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
            // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
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
