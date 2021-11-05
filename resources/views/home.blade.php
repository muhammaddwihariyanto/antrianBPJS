@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <style>
    body {
        background-color: #008B8B;
    }
    </style>
    <div class="wrapper">
        @include('layouts.navbar_main')
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper" style="background-color:#20B2AA;">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <br><br><br>
            <!-- Main content -->
            <font color="white">
                <h1 style="text-align: center;"> <strong>
                        DASHBOARD
                    </strong></h1>
                <!-- </font> -->
                <br>
                <!-- <font color="white"> -->
                <h3 style="text-align: center;">
                    Faskes Tingkat I "RS DEA"
                </h3>
            </font>

            <br>
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
                            <div class="small-box bg-primary">

                                <div id="accordion3">
                                    <div class="card-header" id="headingOne">
                                        <div class="inner">
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne3" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <font color="white">
                                                            <h5>Console Box</h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseOne3" class="collapse " aria-labelledby="headingOne"
                                        data-parent="#accordion3">
                                        <div class="card-body">
                                            <p style="text-align: center;">Silahkan Pilih Menu Kategori Antrian</p>
                                        </div>
                                    </div>


                                </div>
                                <a href="/console/home" class="small-box-footer" target="_blank">
                                    <font color="white"> Masuk <i class="fas fa-arrow-circle-right"></i> </font>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-orange">

                                <div id="accordion">
                                    <div class="card-header" id="headingOne">
                                        <div class="inner">
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <font color="white">
                                                            <h5>Petugas Panggil</h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="wrap-input100 validate-input m-b-18">

                                                <select name="nama_poli" id="poli" class="form-control"> --pilih Poli--
                                                    @foreach ($mdpoli as $poli)
                                                    <option value="{{ $poli->NamaPoli }}">{{ $poli -> NamaPoli }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>
                                            <div class="wrap-input100 validate-input m-b-18">

                                                <select name="nama_dokter" id="dokter" class="form-control">
                                                    @foreach ($mddokter as $dokter)
                                                    <option value="{{ $dokter->NamaDokter }}">
                                                        {{ $dokter -> NamaDokter }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a href="/petugaspanggil/index" class="small-box-footer" target="_blank">
                                    <font color="white"> Masuk <i class="fas fa-arrow-circle-right"></i> </font>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-success">

                                <div id="accordion2">
                                    <div class="card-header" id="headingOne">
                                        <div class="inner">
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne2" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <font color="white">
                                                            <h5>Display</h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion2">
                                        <div class="card-body">
                                            <div class="wrap-input100 validate-input m-b-18">

                                                <select name="nama_poli" id="poli2" class="form-control"> --pilih Poli--
                                                    @foreach ($mdpoli as $poli)
                                                    <option value="{{ $poli->NamaPoli }}">{{ $poli -> NamaPoli }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>
                                            <div class="wrap-input100 validate-input m-b-18">

                                                <select name="nama_dokter" id="dokter2" class="form-control">
                                                    @foreach ($mddokter as $dokter)
                                                    <option value="{{ $dokter->NamaDokter }}">
                                                        {{ $dokter -> NamaDokter }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a href="/display/index" class="small-box-footer">
                                    <font color="white"> Masuk <i class="fas fa-arrow-circle-right"></i> </font>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-purple">

                                <div id="accordion4">
                                    <div class="card-header" id="headingOne">
                                        <div class="inner">
                                            <font color="white">
                                                <h5 class="mb-0" style="text-align: center;">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne4" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <font color="white">
                                                            <h5>Administrator</h5>
                                                        </font>
                                                    </button>
                                                </h5>
                                        </div>
                                        </font>


                                    </div>

                                    <div id="collapseOne4" class="collapse " aria-labelledby="headingOne"
                                        data-parent="#accordion4">
                                        <div class="card-body">
                                            <p style="text-align: center;">Cek Data Antrian</p>
                                        </div>
                                    </div>


                                </div>
                                <a href="/administrator/home" class="small-box-footer">
                                    <font color="white"> Masuk <i class="fas fa-arrow-circle-right"></i> </font>
                                </a>
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
        @include('layouts.footer_main')
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

</body>

</html>