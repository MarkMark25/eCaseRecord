<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <title>NBI-CAR</title>

    <!-- Bootstrap core CSS-->
    <link href="bower_components/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="bower_components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="bower_components/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/datepicker/jquery-ui.css">
    <link href="bower_components/datepicker/jquery-ui.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bower_components/css/sb-admin.css" rel="stylesheet">

    <!--TAB IMAGE -->
    <link rel="icon"  href="bower_components/image/nbi-logo.png">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1 " href="/">NBI-CAR</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" 
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
            <a class="dropdown-item" href="/ccnAcmoRequest">CCN & ACMO No. Request</a> <!-- add page for case records-->
            <a class="dropdown-item" href="/terminatedCases">Transmittal</a>  <!-- add page -->
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
    </ul>  

<div id="content-wrapper">
        <div class="container-fluid" style="padding-top:3%;padding-bottom:2%;">
          <div class="row">
            <div class="col-md-5">
              <div class="input-group">
                <input type="text" name="from_date" id="from_date" class="form-control input-daterange" readonly/>
                  <div class="col-md-1"></div>
                <input type="text" name="to_date" id="to_date"  class="form-control input-daterange" readonly />
              </div>  
            </div>
            <div class="col-md-1">
              <button type="button" class="btn btn-danger float-left" name="filter" id="filter">Search</button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary float-left" name="refresh" id="refresh">Refresh</button>
            </div>
            <div class="col-md-2">
              <button class="btn btn-success float-right"><i class="fa fa-file-excel"></i> Export as Excel</button>
            </div>
            <div class="col-md-1">
              <button class="btn btn-warning float-right"><i class="fa fa-print"></i>  Print  </button>
            </div>
          </div>
        <!-- Dropdown for year>
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
            </select -->

        <!-- Dropdown for month
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
            </select-->
            <br>

      <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
                <!--div class="row">
                  <div class="col-md-5">
                    <div class="input-group input-daterange">
                      <input type="text" name="from_date" id="from_date" value="Date from..." class="form-control" />
                    <div class="col-md-1"></div>
                      <input type="text" name="to_date" id="to_date" value="Date to..." class="form-control" />
                    </div>  
                  </div>
                  <div class="col-md-2">
                    <button type="button" name="filter" id="filter" class="btn btn-info">Search</button>
                  </div>
                </div>  
                <br>
                <br-->
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                        <th>ID</th>
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
                        <td>{{ $showData->caseid }}</td>
                        <td>                       </td>
                        <td>{{ $showData->case_nature }}</td>
                        <td>{{ $showData->comvic }}</td>
                        <td>{{ $showData->subject }}</td>
                        <td>{{ $showData->agentoncase }}</td>
                        <td>{{ $showData->assigneddate }}</td>
                        <td>{{ $showData->status }}</td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                {{csrf_field()}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-5"><b>TOTAL NUMBER OF REQUESTS: </b> <b><span id="total_records"></span></b></div>
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
    <script src="bower_components/js/demo/datatables-demo.js" defer></script>

    <!-- JS Datepicker -->
    <script src="bower_components/datepicker/bootstrap.min.js"></script>
    <script src="bower_components/datepicker/jquery-ui.js" defer></script>
    <script src="bower_components/datepicker/date.js"></script>
    
    <script>
    $(document).ready(function() {

      var date = new Date();
      
      $('.input-daterange').datepicker({
        todayBtn: 'linked',
        dateFormat: 'yy-mm-dd',
        autoclose:true
      });

      var _token =$('input[name="_token"]').val();
      fetch_data();
      function fetch_data(from_date = '', to_date = '') {
        $.ajax({ 
          url:"{{ route('daterange.fetch_data') }}",
          method:"POST",
          data:{'from_date':from_date, 'to_date':to_date, '_token':_token},
          dataType:'json',
          success:function(showData) {
            var output = '';
            $('#total_records').text(showData.length);
            for (var count=0; count<showData.length; count++) {
              output += '<tr>';
              output += '<td>' + showData[count].caseid + ' </td>';
              output += '<td>' + '' + '</td>';
              output += '<td>' + showData[count].case_nature + ' </td>';
              output += '<td>' + showData[count].comvic + ' </td>';
              output += '<td>' + showData[count].subject + ' </td>';
              output += '<td>' + showData[count].agentoncase + ' </td>';
              output += '<td>' + showData[count].assigneddate + ' </td>';
              output += '<td>' + showData[count].status + ' </td>';
              output += '</tr>';
             
            }
            $('tbody').html(output);
            
          },
          error:function(showData) {
            
            alert('Error processing your request');
            
          },
          /*
          error:function (event, jqXHR, ajaxSettings, thrownError) {
        alert('[event:' + event + '], [jqXHR:' + jqXHR + '], [ajaxSettings:' + ajaxSettings + '], [thrownError:' + thrownError + '])');
            }*/
    
        })
      }
      $('#filter').click(function(){
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
      if(from_date != '' &&  to_date != ''){
        fetch_data(from_date, to_date);
      }else{
       alert('Both Date is required');
      }
      });
      $('#refresh').click(function(){
        $('#from_date').val('');
        $('#to_date').val('');
        fetch_data();
    });
  });
    </script>

  <script>
    $(document).ready(function() {
    $('#dataTable').dataTable({
      "bInfo": false
      });
    });
  </script>
    

  </body>
  

</html>
