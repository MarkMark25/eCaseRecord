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
                        <a class="dropdown-item" href="/caseReport">Case Records</a>
                        <a class="dropdown-item" href="/addNewCase">Add New Case</a>
                        <a class="dropdown-item" href="/ComplaintSheet">Complaint Sheet</a>
                        <a class="dropdown-item" href="/caseNature">Case Nature</a>
                        <a class="dropdown-item" href="/caseStatus">Case Status</a>
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

      <div id="content-wrapper">
            <form method="POST" action="/encoderAddComplaintSheet">
                {{ csrf_field() }}
              <div class="container-fluid" style="padding-bottom:3%; padding-top:2%;">
                <div class="card mb-3" style="width:100%%;">
                  <center><div class="card-header"><h4>Complaint Sheet</div></center>
                    <div class="card-body">
                        <div class="flash-message">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))

                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div> <!-- end .flash-message -->
                        <div class="form-group">
                          <div class="form-row">
                              <div class="col-md-4">
                                  <label for="caseNumber">NBI-CAR Case Number</label>
                                  <div class="input-group mb-2">
                                      <input type="text" id="" name="" class="form-control col-md-5" value="NBI-CAR-" readonly>
                                      <input type="text" id="docketnumber" name="docketnumber" class="form-control" value="{{ old('docketnumber') }}" placeholder="I-00-000" maxlength="8" pattern="^\w{1}-\d{2}-\d{3}$" onkeypress='validate(event)' title="Follow the following format. e.g. C-10-001" autocomplete="off" required>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <label for="ccn">CCN</label>
                                  <div class="input-group mb-2">
                                      <input type="text" id="" name="" class="form-control col-md-5" value="NBI-CCN-" readonly>
                                      <input type="text" id="ccn" name= "ccn" class="ccNumber form-control" value="{{ old('ccn') }}" placeholder="C-00-00000" maxlength="10" pattern="^\w{1}-\d{2}-\d{5}$" title="Follow the following format. e.g. I-10-00001" onkeypress='validateCCN(event)' autocomplete="off">
                                  </div>
                              </div>
                              <div class="col-md-4">
                                    <label for="ccn">ACMO No.</label>
                                    <div class="input-group mb-2">
                                        <input type="text" id="acmo" name= "acmo" value="{{ old('acmo') }}" placeholder="00-C-00000" title="Follow the following format. e.g. 00-C-00000" maxlength="10" pattern="^\d{2}-\w{1}-\d{5}$"  class="form-control" value="" onkeypress='validateACMO(event)' autocomplete="off">
                                    </div>
                                </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="agent">Investigator</label>
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
                            <div class="col-md-4">
                                <label for="status">Status</label>
                                <div class="input-group">
                                    <select name="status" class="form-control">
                                        <option value=""></option>
                                        @foreach($status as $status)
                                            <option value="{{ $status->statusid }}">{{ $status->status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="dateAssigned">Date Assigned</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="btn btn-secondary">
                                            <i class="fas fa-fw fa-calendar"></i>
                                        </div>
                                    </div>
                                    <input type="text" id="datepicker" name= "dateAssigned"  class="form-control" value="{{ old('dateAssigned') }}" placeholder="Choose" autocomplete="off" required> {{-- QUERY HERE --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="dateTerminated">Date Terminated</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="btn btn-secondary">
                                            <i class="fas fa-fw fa-calendar"></i>
                                        </div>
                                    </div>
                                    <input type="text" id="datepickers" name="dateTerminated" class="form-control" value="{{ old('dateTerminated') }}" placeholder="Choose" autocomplete="off"> {{-- QUERY HERE --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p style="font-weight:bold;">1. Complainant (nagsusumbong) </p>
                        <div class="form-row">
                            <div class="col-md-4">
                                    <label for="suspectName">Name (Lastname, Firstname)</label>
                                <div class="">
                                    <input type="text" id="complainant" name="complainant"  class="form-control" value="{{ old('complainant') }}" onkeypress='validateComplainant(event)' autocomplete="off" required minlength="5" maxlength="30"/>  {{-- QUERY HERE --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address</label>
                                <div class="">
                                    <input type="text" id="complainantAddress" name="complainantAddress" value="{{ old('complainantAddress') }}" class="form-control" autocomplete="off" minlength="5" maxlength="30"/>  {{-- QUERY HERE --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Telephone Number</label>
                                <div class="">
                                    <input type="text" id="complainantTelNumber" name="complainantTelNumber" value="{{ old('complainantTelNumber') }}"  class="form-control" autocomplete="off" minlength="5" maxlength="15"/>  {{-- QUERY HERE --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p style="font-weight:bold;">2. Persons Complained Against or Suspects (Isinusumbong)</p>
                        <div class="form-row">
                            <div class="control-group">
                                <div class="fld_wrap" id="fld3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success btn-add add_button3" fldnum="3" type="button">
                                                <span class="fas">+</span>
                                            </button>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="suspectNameA[]" placeholder="Name" autocomplete="off" required minlength="5" maxlength="40">
                                            <input type="text" class="form-control" name="suspectAgeA[]" placeholder="Age" onkeypress='validateDate(event)' autocomplete="off" minlength="1" maxlength="3">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="suspectAddressA[]" placeholder="Address" autocomplete="off" minlength="5" maxlength="40">
                                            <input type="text" class="form-control" name="suspectCivilStatusA[]" placeholder="Civil Status" autocomplete="off" minlength="5" maxlength="20">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="suspectTelNumberA" name= "suspectTelNumberA[]" autocomplete="off" placeholder="Telephone Number" class="ccNumber form-control" value="" autocomplete="off" minlength="5" maxlength="15">
                                            <input type="text" class="form-control" name="suspectOccupationA[]" placeholder="Occupation" autocomplete="off" minlength="4" maxlength="20">
                                        </div>
                                            <input type="text" class="form-control" name="suspectSexA[]" placeholder="sex" autocomplete="off" minlength="4" maxlength="6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p style="font-weight:bold;">3. Nature of act complained (Uri ng sumbong) </p>
                    <section>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
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
                    </section>
                    <hr>
                    <section>
                        <div class="form-group">
                            <p style="font-weight:bold;">4. Where and when committed (Saan at Kailan Nangyari) </p>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="whereCommitted">Place Committed</label>
                                    <input type="text" name="whereCommitted" value="{{ old('whreCommitted') }}" id="whereCommitted" class="form-control" minlength="3" maxlength="30">
                                </div>
                                <div class="col-md-6">
                                    <label for="whenCommitted">When Committed</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="btn btn-secondary">
                                                <i class="fas fa-fw fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" name="whenCommitted" id="whenCommitted" value="{{ old('whenCommitted') }}" class="form-control" value="" placeholder="Choose" autocomplete="off" required> {{-- QUERY HERE --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <div class="form-group">
                        <p style="font-weight:bold;">5. Victim/s If any </p>
                        <div class="form-row">
                            <div class="control-group">
                                <div class="fld_wrap" id="fld4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success btn-add add_button4" fldnum="4" type="button">
                                                <span class="fas">+</span>
                                            </button>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="victimNameA[]" placeholder="Name" autocomplete="off" required minlength="5" maxlength="40">
                                            <input type="text" class="form-control" name="victimAgeA[]" placeholder="Age" onkeypress='validateDate(event)' autocomplete="off" minlength="1" maxlength="3">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="victimAddressA[]" placeholder="Address" autocomplete="off" minlength="5" maxlength="40">
                                            <input type="text" class="form-control" name="victimCivilStatusA[]" placeholder="Civil Status" autocomplete="off" minlength="5" maxlength="20">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="suspectTelNumberA" name= "victimTelNumberA[]" autocomplete="off" placeholder="Telephone Number" class="ccNumber form-control" value="" autocomplete="off" minlength="5" maxlength="15">
                                            <input type="text" class="form-control" name="victimOccupationA[]" placeholder="Occupation" autocomplete="off" minlength="4" maxlength="20">
                                        </div>
                                            <input type="text" class="form-control" name="victimSexA[]" placeholder="sex" autocomplete="off" minlength="4" maxlength="6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <section>
                        <div class="form-group">
                            <p style="font-weight:bold;">6. Narration of Facts (Salaysay ng mga Pangyayari) </p>
                            <textarea name="narrationOfFacts" placeholder="Don't leave this portion blank" id="narrationOfFacts" style="width:100%;font-size:15px;resize:none;" rows="3" autocomplete="off" required minlength="4" >{{ Request::old('narrationOfFacts') }}</textarea>
                        </div>
                    </section>
                    <hr>
                    <section>
                        <div class="form-group">
                            <p style="font-weight:bold;">7. Has the matter been reported to any agency, If so, to what people agency? (Ang bagay bang ito ay naulat na sa ibang sangay ng pagsisiyasat? Kung naulat na, saang sangay?) </p>
                            <textarea name="hasTheMatter" placeholder="Don't leave this portion blank" id="hasTheMatter" style="width:100%;font-size:15px;resize:none;" rows="3" autocomplete="off" minlength="4" >{{ Request::old('hasTheMatter') }}</textarea>
                            <br>
                            <p style="font-weight:bold;">Status of investigation, If any (Kalagayan ng pagsisiyasat kung mayroon?)</p>
                            <textarea name="statusOfInvestigation" placeholder="Don't leave this portion blank" id="statusOfInvestigation" style="width:100%;font-size:15px;resize:none;" rows="3" autocomplete="off" required minlength="4" >{{ Request::old('statusOfInvestigation') }}</textarea>
                        </div>
                    </section>
                    <hr>
                    <section>
                        <div class="form-group">
                            <p style="font-weight:bold;">8.Is the matter complained of the subject of any court action of proceedings? If so, where? (Ang bagay bang may kinalaman sa pagsusumbong ay nasa hukuman na? Kung gaanoon, saan?)</p>
                            <textarea name="isTheMatterComplained" placeholder="Don't leave this portion blank" id="isTheMatterComplained" style="width:100%;font-size:15px;resize:none;" rows="3" autocomplete="off" required minlength="4" >{{ Request::old('isTheMatterComplained') }}</textarea>
                        </div>
                    </section>
                    <br>
                    <section>
                        <div class="form-group">
                            <p style="font-weight:bold;">9.What Consideration/s impelled you to report to the NBI? (Ano ang nag-udyok sa iyo para magreklamo dito sa NBI?)</p>
                            <textarea name="whatConsidirations" placeholder="Don't leave this portion blank" id="whatConsidirations" style="width:100%;font-size:15px;resize:none;" rows="3" autocomplete="off" required minlength="4" >{{ Request::old('whatConsidirations') }}</textarea>
                        </div>
                    </section>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="">
                                    <input type="hidden" id="description" name="description" class="form-control" value="Administrator add complaint sheet and the log book details with Case ID = ">
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
            var regex = /[0-9,I,-]/;
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
            var regex = /[0-9,C,-]/;
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
            var regex = /[0-9,C,-]/;
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
    <script>
            $(document).ready(function(){
                $('.add_button3').click(function(){
                    var kakoi=$(this).attr('fldnum');
                    var insHTML =    '<div class="input-group">'+
                                '<div class="input-group-prepend">'+
                                    '<button class="btn btn-danger btn-add add_button3 remove_button" fldnum="3" type="button">'+
                                        '<span class="fas">X</span>'+
                                    '</button>'+
                                '</div>'+
                                '<br>'+
                                '<br>'+
                                '<div class="col-md-3">'+
                                    '<input type="text" class="form-control" name="suspectNameA[]" placeholder="Name" autocomplete="off" required minlength="5" maxlength="40">'+
                                    '<input type="text" class="form-control" name="suspectAgeA[]" placeholder="Age" autocomplete="off" minlength="1" maxlength="3">'+
                                '</div>'+
                                '<div class="col-md-3">'+
                                    '<input type="text" class="form-control" name="suspectAddressA[]" placeholder="Address" autocomplete="off" minlength="5" maxlength="40">'+
                                    '<input type="text" class="form-control" name="suspectCivilStatusA[]" placeholder="Civil Status" autocomplete="off" minlength="5" maxlength="20">'+
                                '</div>'+
                                '<div class="col-md-3">'+
                                    '<input type="text" id="suspectTelNumberA" name= "suspectTelNumberA[]" autocomplete="off" placeholder="Telephone Number" class="ccNumber form-control" value="" minlength="5" maxlength="15">'+
                                    '<input type="text" class="form-control" name="suspectOccupationA[]" placeholder="Occupation" autocomplete="off" minlength="4" maxlength="20">'+
                                '</div>'+
                                    '<input type="text" class="form-control" name="suspectSexA[]" placeholder="sex" autocomplete="off" minlength="4" maxlength="6">'+
                            '</div>';
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
                    var insHTML ='<div class="input-group">'+
                                    '<div class="input-group-prepend">'+
                                        '<button class="btn btn-danger btn-add add_button4 remove_button" fldnum="4" type="button">'+
                                            '<span class="fas">X</span>'+
                                        '</button>'+
                                    '</div>'+
                                    '<br>'+
                                    '<br>'+
                                    '<div class="col-md-3">'+
                                        '<input type="text" class="form-control" name="victimNameA[]" placeholder="Name" autocomplete="off" required minlength="5" maxlength="40">'+
                                        '<input type="text" class="form-control" name="victimAgeA[]" placeholder="Age" autocomplete="off" minlength="1" maxlength="3">'+
                                    '</div>'+
                                    '<div class="col-md-3">'+
                                        '<input type="text" class="form-control" name="victimAddressA[]" placeholder="Address" autocomplete="off" minlength="5" maxlength="40">'+
                                        '<input type="text" class="form-control" name="victimCivilStatusA[]" placeholder="Civil Status" autocomplete="off" minlength="5" maxlength="20">'+
                                    '</div>'+
                                    '<div class="col-md-3">'+
                                        '<input type="text" id="suspectTelNumberA" name= "victimTelNumberA[]" autocomplete="off" placeholder="Telephone Number" class="ccNumber form-control" value="" autocomplete="off" minlength="5" maxlength="15">'+
                                        '<input type="text" class="form-control" name="victimOccupationA[]" placeholder="Occupation" autocomplete="off" minlength="4" maxlength="20">'+
                                    '</div>'+

                                        '<input type="text" class="form-control" name="victimSexA[]" placeholder="sex" autocomplete="off" minlength="4" maxlength="6">'+
                                '</div>';
                    $("#fld4").append(insHTML);
                });

                $('.fld_wrap').on('click', '.remove_button', function(e){
                    e.preventDefault();
                    $(this).parents(':eq(1)').remove();
                });
            });
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
