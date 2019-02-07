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
          <a class="nav-link" href="/encoderHome">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/encoderCCN"> <!--LINK HERE -->
              <i class="fas fa-fw fa-paste"></i>
              <span>Update CCN</span></a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="/addCase"> <!--LINK HERE -->
            <i class="fas fa-fw fa-list"></i>
            <span>Add Case</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/complaintSheet"> <!--LINK HERE -->
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Complaint Sheet</span></a>
        </li>
      </ul>

      <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 style="text-align:center">Complaint Sheet</h6>
                </div>
                <div class="card-body">
                    <form action="" method="">
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">1. Complainant (nagsusumbong) </p>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="complainantName">Name (Lastname, Firstname) </label>
                                        <input type="text" class="form-control" name="complainantName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="complainantAddress">Address</label>
                                        <input type="text" class="form-control" name="complainantAddress">
                                        <label for="complainantTelNumber">Telephone Number</label>
                                        <input type="text" class="form-control" name="complainantTelNumber">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">2. Persons Complained Against or Suspects (Isinusumbong)</p>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="suspectName">Name (Lastname, Firstname)</label>
                                        <input type="text" class="form-control" name="suspectName">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label for="suspectSex">Sex</label><br>
                                                    <input type="radio" name="suspectSex" value="male">Male <br>
                                                    <input type="radio" name="suspectSex" value="female"> Female
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="suspectCivilStatus">Civil Status</label> <br>
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <input type="radio" name="civilStatus" value="single">Single <br>
                                                                <input type="radio" name="civilStatus" value="married">Married <br>
                                                                <input type="radio" name="civilStatus" value="widowed">Divorce
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="radio" name="civilStatus" value="widowed">Widowed <br>
                                                                <input type="radio" name="civilStatus" value="widowed">Separated <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="suspectOtherInfo">Other Information</label> <br>
                                        <textarea name="" id="" style="width:100%;font-size:15px;resize:none;" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="suspectAddress">Address</label>
                                        <input type="text" class="form-control" name="suspectAddress">
                                        <label for="suspectTelNumber">Telephone Number</label>
                                        <input type="text" class="form-control" name="suspectTelNumber">
                                        <label for="suspectOccupation">Occupation</label>
                                        <input type="text" name="" class="form-control" name="suspectOccupation">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">3. Nature of act complained (Uri ng sumbong) </p>
                                <textarea name="natureOfAct" id="" style="width:100%;font-size:15px;resize:none;" rows="2"></textarea>
                            </div>
                        </section>
                        <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">4. Where and when committed (Saan at Kailan Nangyari) </p>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="whereCommitted">Place Committed</label>
                                        <input type="text" name="whereCommitted" id="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="whenCommitted">When Committed</label>
                                        <input type="date" name="whenCommitted" id="date" required="required" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section>
                            <!--VICTIM A -->
                            <div class="form-group">
                                <p style="font-weight:bold;">5. Victim/s If any </p>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="victimNameA">A. Name (Lastname, Firstname)</label>
                                        <input type="text" class="form-control" name="victimNameA">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label for="victimSexA">Sex</label><br>
                                                    <input type="radio" name="victimSexA" value="male">Male <br>
                                                    <input type="radio" name="victimSexA" value="female"> Female
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="victimCivilStatusA">Civil Status</label> <br>
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <input type="radio" name="victimCivilStatusA" value="single">Single <br>
                                                                <input type="radio" name="victimCivilStatusA" value="married">Married <br>
                                                                <input type="radio" name="victimCivilStatusA" value="widowed">Divorce
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="radio" name="victimCivilStatusA" value="widowed">Widowed <br>
                                                                <input type="radio" name="victimCivilStatusA" value="widowed">Separated <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="victimAddressA">Address</label>
                                        <input type="text" class="form-control" name="victimAddressA">
                                        <label for="victimTelNumberA">Telephone Number</label>
                                        <input type="text" class="form-control" name="victimTelNumberA">
                                        <label for="victimOccupationA">Occupation</label>
                                        <input type="text" name="" class="form-control" name="victimOccupationA">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!--VICTIM B -->
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="victimNameB">B. Name (Lastname, Firstname)</label>
                                        <input type="text" class="form-control" name="victimNameB">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label for="victimSexB">Sex</label><br>
                                                    <input type="radio" name="victimSexB" value="male">Male <br>
                                                    <input type="radio" name="victimSexB" value="female"> Female
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="victimCivilStatusB">Civil Status</label> <br>
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <input type="radio" name="victimCivilStatusB" value="single">Single <br>
                                                                <input type="radio" name="victimCivilStatusB" value="married">Married <br>
                                                                <input type="radio" name="victimCivilStatusB" value="widowed">Divorce
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="radio" name="victimCivilStatusB" value="widowed">Widowed <br>
                                                                <input type="radio" name="victimCivilStatusB" value="widowed">Separated <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="victimAddressB">Address</label>
                                        <input type="text" class="form-control" name="victimAddressB">
                                        <label for="victimTelNumberB">Telephone Number</label>
                                        <input type="text" class="form-control" name="victimTelNumberB">
                                        <label for="victimOccupationB">Occupation</label>
                                        <input type="text" class="form-control" name="victimOccupationB">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">6. Narration of Facts (Salaysay ng mga Pangyayari) </p>
                                <textarea name="narrationOfFacts" id="" style="width:100%;font-size:15px;resize:none;" rows="3"></textarea>
                            </div>
                        </section>
                        <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">7. Has the matter been reported to any agency, If so, to what people agency? (Ang bagay bang ito ay naulat na sa ibang sangay ng pagsisiyasat? Kung naulat na, saang sangay?) </p>
                                <textarea name="hasTheMatter" id="" style="width:100%;font-size:15px;resize:none;" rows="3"></textarea>
                                <br>
                                <p style="font-weight:bold;">Status of investigation, If any (Kalagayan ng pagsisiyasat kung mayroon?)</p>
                                <textarea name="statusOfInvestigation" id="" style="width:100%;font-size:15px;resize:none;" rows="3"></textarea>
                            </div>
                        </section>
                        <hr>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">8.Is the matter complained of the subject of any court action of proceedings? If so, where? (Ang bagay bang may kinalaman sa pagsusumbong ay nasa hukuman na? Kung gaanoon, saan?)</p>
                                <textarea name="isTheMatterComplained" id="" style="width:100%;font-size:15px;resize:none;" rows="3"></textarea>
                            </div>
                        </section>
                        <br>
                        <section>
                            <div class="form-group">
                                <p style="font-weight:bold;">9.What Consideration/s impelled you to report to the NBI? (Ano ang nag-udyok sa iyo para magreklamo dito sa NBI?)</p>
                                <textarea name="whatConsidirations" id="" style="width:100%;font-size:15px;resize:none;" rows="3"></textarea>
                            </div>
                        </section>
                    </form>
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
