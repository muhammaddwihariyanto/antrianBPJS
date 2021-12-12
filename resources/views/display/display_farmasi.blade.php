@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('layouts.navbar_petugaspanggil')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="card-body">
                <section class="content">
                    <div class="container-wrapper">
                        <div class="row">
                            <div class="col-md-6">

                                <!-- Profile Image -->

                                <!-- /.card -->

                                <!-- About Me Box -->
                                <div class="card mb-0" style=" background-image: linear-gradient(#20B2AA, #20B2AA);border-radius: 5px; box-shadow: 6px 8px 4px #2F4F4F; border: 1px solid white;">
                                    <div class="card-header mb-0" style="text-align: center;">
                                        <font color="white">
                                        <h3 class="card-title-center mb-0">ANTREAN DIPANGGIL</h3>
                                        </font>

                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card mt-0 mb-0">
                                        <div class="card-body">

                                            <div class="text-center">
                                                <p style="font-size: 150px; " style="color: #58666e;"><strong>2</strong></p>
                                                <br>
                                                <h3 class="card-title-center mb-0" style="font-size: 50px"><strong> Loket 1 </strong>
                                                </h3>
                                                <hr size="50%" width="75%"  style="color: #20B2AA" />
                                                <br>
                                                <h3 class="card-title-center mb-0">ANTRIAN ADMISI
                                                </h3>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div id="panel-filler" class="col-lg-12">
                                    <div class="panel-body" style="width:max-content">
                                        <div class="video-container col-lg-12">
                                            <videogular vg-player-ready="onPlayerReady($API)" vg-auto-play="false" vg-update-volume="onUpdateVolume($volume)" class="col-lg-12">
                                                <vg-media vg-src="config.sources" vg-native-controls="true" vg-loop="true" class="col-lg-12"><video loop="loop" controls="controls" src="C:\Users\IT\Downloads\Video\RS DR. ETTY REVISI TAMBAHAN rev 2_convert.mp4" type="video/mp4"></video></vg-media>
                                            </videogular>
                                        </div>
                                    </div>
                                </div>
                                 
                                <!-- /.card -->
                            </div>
                            <br>
                            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                                <div class="col">
                                
                                    <div class="card-body">
                                        <div class=" bg-success mb-3"  style="width: 25rem;border-radius: 10px; box-shadow: 6px 8px 4px #2F4F4F; border: 2px solid white;">

                                            <div class="card-header" style="text-align: center; ">
                                                <h5 style="font-size: 150px;" class="card-title-center"> <strong>0</strong>
                                                </h5>
                                                <br>
                                                <h5 style="font-size: 30px;" text="bold;" class="card-title-center"> <strong>
                                                        Loket 1 </strong></h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                  
                                 
                                </div>
                                
                              </div>
                            <!-- /.col -->
                            
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div>

        </div>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
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
    <script src="{{url('')}}/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js">
    </script>
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
    <script src="{{url('')}}/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js">
    </script>
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
    <script>
    window.setTimeout("waktu()", 1000);

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
    </script>
</body>

</html>