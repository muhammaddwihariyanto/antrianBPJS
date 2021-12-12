@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <style>
    body {
        background:-webkit-linear-gradient(90deg,rgba(32,230,190,1) 0,rgba(0,128,128,1) 100%);
             background-image: -webkit-linear-gradient(90deg, rgb(32, 230, 190) 0px, rgb(0, 128, 128) 100%);
    }
    </style>
    
    <div class="wrapper">
     
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper" style="background:-webkit-linear-gradient(90deg,rgba(32,230,190,1) 0,rgba(0,128,128,1) 100%);
             background-image: -webkit-linear-gradient(90deg, rgb(32, 230, 190) 0px, rgb(0, 128, 128) 100%);">
            <!-- Content Header (Page header) -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4 plus float-right mr-4">
               
                   
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                      
                  
                        {{-- <button type="button" class="btn btn-danger">Danger</button> --}}
                        <a class="btn btn-sm btn-rounded bg-danger" data-toggle="dropdown" href="#"  style="border-radius: 50px; padding-right: 15px; padding-left: 15px;padding-top: 7px;">
                            <i class="fas fa-power-off"></i>
            
                        </a>
            
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- <div class="dropdown-divider"></div> -->
                            <a href="{{url('logout')}}" class="dropdown-item dropdown-footer">Logout</a>
                        </div>
                 

               
                
            </div>
            <!-- /.content-header -->
            <br>
            <br><br>
            <br>
            <br>
            <!-- Main content -->
            <font color="white">
                <h1 style="text-align: center;font-size: 63px;" > 
                        Dashboard
                   </h1>
                <!-- </font> -->
               
                <!-- <font color="white"> -->
                <h2 style="text-align: center;font-size: 30px;">
                    FASKES TINGKAT LANJUT <i class="ng-binding" >"RS DR. ETTY ASHARTO" </i>
                </h2>
            </font>

            <br>
            <br>
    
            <div class="content">
                <div class="container">
                    <!-- <div class="card w-25 bg-primary">
                        <div class="card-body">
                            <h5 style="text-align: center;">Console Box<sup style="font-size: 20px"></sup></h5>
                            <a style="text-align: center;" href="#" class="btn btn-danger">Button</a>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-primary " style="text-align: center; border-radius: 15px; box-shadow: 6px 8px 4px #2F4F4F; border: 1px solid white;"  >

                                <div class="accordion" id="accordionExample">
                                    <div class="card-header" id="headingTwo">
                                        <div class="inner" >
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button  class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border-radius: 40px">
                                                        <font color="white">
                                                            <h5 style="text-align: center;"><strong> Console Box </strong></h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                             {{-- <form action="{{route('index')}}" method="POST">
                                                {{ csrf_field() }} --}}
                                            <div class="wrap-input100 validate-input m-b-18">
                                                
                                                <select name="nama_jenis_biaya" class="form-control" aria-label="Default select example">
                                                   
                                                    <option value="Admisi">-- ADMISI --</option>
                                                    <option value="Poli">-- POLI --</option>
                                                    <option value="Farmasi">-- FARMASI --</option>
                                                    
                                                  </select>
                                            </div>
                                            <BR>

                                            <a href="{{url('/console/home')}}" class="btn btn-danger" target="_blank">
                                                <font color="white"> Open  </font>
                                            </a>
                                        </div>
                                    </div>

                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            
                            <div class="small-box bg-orange" style="text-align: center; border-radius: 15px ; box-shadow: 6px 8px 4px #2F4F4F;border: 1px solid white;">
                                {{-- <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item"> --}}
                                <div id="accordion">
                                    <div class="card-header" id="headingThree">
                                        <div class="inner">
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <font color="white">
                                                            <h5 style="text-align: center;"><strong>Petugas Panggil </strong></h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                        {{-- <form action="{{route('index')}}" method="POST">
                                                {{ csrf_field() }} --}}
                                            <div class="wrap-input100 validate-input m-b-18" style="text-align: center;">

                                                <div class="wrap-input100 validate-input m-b-18">
                                                
                                                    <select name="petugas" class="form-control" aria-label="Default select example">
                                                       {{-- @foreach ($petugas as $pt )
                                                       <option value="{{ $pt->nama }}">
 
                                                       @endforeach --}}
                                                        <option value="Admisi">-- ADMISI --</option>
                                                        <option value="Poli">-- POLI --</option>
                                                        <option value="Farmasi">-- FARMASI --</option>
                                                    
                                                      </select>
                                                    </select>
                                                </div>
                                                <BR>
                                                <div class="wrap-input100 validate-input m-b-18">
                                                
                                                    <select name="loket" class="form-control" aria-label="Default select example" required>
                                                        {{-- <option value="">-- PILIH LOKET --</option>
                                                        <option value="Loket 1"> Loket 1 </option>
                                                        <option value="Loket 2"> Loket 2 </option>
                                                        <option value="Loket 3"> Loket 3 </option> --}}
                                                        @foreach ($loket as $l )
                                                       <option value="{{ $l->nama ? 'selected="selected"' : ''}}" >{{ $l->nama }}</option>
                                                       
                                                       @endforeach

                                                      </select>
                                                </div>
                                                
                                                <BR>
                                                    <font color="white">   
                                                        {{-- <button type="submit">open</button> --}}
                                                    <a href="petugaspanggil/index/{{$l->nama}}" target="_blank" type="button" value="Open" class="btn btn-danger" >Open</a>
                                                   
                                                </font>

                                            </div>
                                        {{-- </form> --}}
                                        </div>
                                    </div>

                                    {{-- <a href="{{route('index')}}" class="small-box-footer">
                                        <font color="white"> Masuk <i class="fas fa-arrow-circle-right"></i> </font>
                                    </a> --}}
                                </div>
                                
                               
                                
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-success" style="text-align: center; border-radius: 15px ; box-shadow: 6px 8px 4px #2F4F4F;border: 1px solid white;">

                                <div id="accordion">
                                    <div class="card-header" id="headingFour">
                                        <div class="inner">
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                                                        <font color="white">
                                                            <h5 style="text-align: center;"><strong> Display </strong></h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">

                                        <div class="card-body">
                                            <div class="wrap-input100 validate-input m-b-18" style="text-align: center;">

                                                <div class="wrap-input100 validate-input m-b-18">
                                                
                                                    <select name="petugas" class="form-control" aria-label="Default select example">
                                                       
                                                        <option value="Admisi">-- ADMISI --</option>
                                                        <option value="Poi">-- POLI --</option>
                                                        <option value="Farmasi">-- FARMASI --</option>
                                                        
                                                      </select>
                                                </div>
                                                <BR>
                                                <div class="wrap-input100 validate-input m-b-18">
                                                
                                                    <select name="loket" class="form-control" aria-label="Default select example" required>
                                                        <option value="">-- PILIH LOKET --</option>
                                                        <option value="Loket1"> Loket 1 </option>
                                                        <option value="Loket2"> Loket 2 </option>
                                                        <option value="Loket3"> Loket 3 </option>
                                                        
                                                      </select>
                                                </div>
                                                <BR>
                                                    {{-- <font color="white">    --}}
                                                    {{-- <button type="submit" value="Open" class="btn btn-danger">Open</button> --}}
                                                    <a href="{{url('display/index')}}" class="btn btn-danger" target="_blank">
                                                        <font color="white"> Open  </font>
                                                    </a>
                                                {{-- </font> --}}
                                                
                                            </div>
                                        </div>
                                    </div>


                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-purple" style="text-align: center; border-radius: 15px ; box-shadow: 6px 8px 4px #2F4F4F;border: 1px solid white;">

                                <div id="accordion">
                                    <div class="card-header" id="headingFive">
                                        <div class="inner">
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

                                                        <font color="white">
                                                            <h5 style="text-align: center;"><strong> Administrator </strong></h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">

                                        <div class="card-body">
                                            <a href="{{url('/administrator/home')}}" class="btn btn-danger" target="_blank">
                                                <font color="white"> Open  </font>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                {{-- <a href="{{url('/administrator/home')}}" class="small-box-footer">
                                    <font color="white"> Masuk <i class="fas fa-arrow-circle-right"></i> </font>
                                </a> --}}
                            </div>
                        </div>
                        <!-- /.col-md-6 -->

                        <!-- /.col-md-6 -->
                    </div>
                    
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
   
       
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script>
    $(document).ready(function() {
        $('#cpbutton').click(function(e) {
            e.preventDefault();
            $('input[type=text]').each(function() {
                if ($(this).val() == this.defaultValue)
                    $(this).val('');
                window.location.href = "{{URL::to('pasienreset')}}"


                // Session::put('kotakontak', '');
                // Session::put('propinsikontak', '');

                // $.get('/kontak');
            });
        });
    });
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/chart.js/Chart.min.js"></script>
    <!-- Select2 -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{url('')}}/bower_components/admin-lte/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{url('')}}/bower_components/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/moment/moment.min.js"></script>
    <script src="{{url('')}}/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="{{url('')}}/bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <!-- Bootstrap Switch -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js">
    </script>
    <!-- BS-Stepper -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="{{url('')}}/bower_components/admin-lte/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('')}}/bower_components/admin-lte/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('')}}/bower_components/admin-lte/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('')}}/bower_components/admin-lte/dist/js/pages/dashboard.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#poli").select2();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#dokter").select2();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#poli2").select2();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#dokter2").select2();
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#loket").select2();
        });
        </script>
</body>
</head>
</html>