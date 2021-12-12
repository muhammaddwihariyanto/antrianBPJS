@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
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
            <br><br><br>
            <br>
            <br>
            <br>
            <!-- Main content -->


            <div class="content">
                <div class="container">
                    <font color="white">
                        <h1 style="font-size: 63px;" > 
                           Selamat Datang
                       </h1>


                    <h2 style="font-size: 30px;">
                        di FASKES TINGKAT LANJUT <i class="ng-binding" >"RS DR. ETTY ASHARTO" </i>
                    </h2>
                      
                     
                        <h2 style="font-size: 14px;">Silahkan pilih menu dibawah ini </h2>
                      
                    </font>
                    
<br>

                    <div class="row">

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box  item kioskmenu" style="text-align: center;margin: 0px; background-color:#f05050;   box-shadow: 6px 8px 4px #2F4F4F;">
                                <div class="inner">
                                    <font color="white">
                                        <h1 style="text-align: center;margin: 0px; font-size: 63px"><strong> BPJS </strong>
                                        </h1>
                                        <a href="{{url('/console/menu/bpjs')}}" style="box-shadow: grey; font-size: 14px;"><font color="white">Peserta BPJS </font></a>
                                    </font>
                                   
                                </div>
                                <!-- <div class="icon">
                                    <i class="fas fa-tv"></i>
                                </div> -->
                              
                              
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box " style="text-align: center; background-color:#fad733; box-shadow: 6px 8px 8px #2F4F4F;">
                                <div class="inner">
                                    <font color="white">
                                        <h1 style="text-align: center;margin: 0px; font-size: 63px"><strong>NON BPJS</strong>
                                        </h1>
                                        <a href="{{url('/console/menu/nonbpjs')}}" style="box-shadow: grey; font-size: 14px;">
                                            <font color="white">Peserta Non BPJS</font>
                                        </a>
                                    </font>
                                </div>
                                <!-- <div class="icon">
                                    <i class="fas fa-tv"></i>
                                </div> -->

                              
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box " style="text-align: center; background-color:#7266ba; box-shadow: 6px 8px 8px #2F4F4F;">
                                <div class="inner">
                                    <font color="white">
                                        <h1 style="text-align: center;margin: 0px; font-size: 63px"><strong> CHECK IN</strong>
                                        </h1>
                                        <a href="{{url('/console/menu/nonbpjs')}}" style="box-shadow: grey; font-size: 14px;">
                                            <font color="white">Peserta Yang Sudah Mengambil Antrian Via Mobile JKN</font>
                                        </a>
                                    </font>
                                </div>
                                <!-- <div class="icon">
                                    <i class="fas fa-tv"></i>
                                </div> -->

                                <div class="container-fluid">
                                    <div class="col-sm-13 " >
                                        <a class="btn btn-primary plus float-right  mt-4" style="border: 2px solid white; background-color:rgba(32,230,190,1); " href="{{url('console/home')}}">
                                           <strong> Kembali </strong></a>
                                    </div>
                                    </div>
                    
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
      
        @include('sweetalert::alert')
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

</body>

</html>