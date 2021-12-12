@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
      
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper" style=" background-image: linear-gradient(to right, #20B2AA, #008B8B);">
            <!-- Content Header (Page header) -->
            <div class="container-fluid">
                <div class="col-sm-11 " >
                    <a class="btn btn-primary plus float-right  mt-4" style="border: 2px solid white; background-color:#008B8B; " href="{{url('/console/menu/pesertalama')}}">
                       <strong> Kembali </strong></a>
                </div>
                </div>

            <!-- /.content-header -->
            <br><br><br>
            <br> <br>
            <!-- Main content -->
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                            <!-- Profile Image -->
                            <!-- <div class="card card-primary card-outline"> -->
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="img-fluid img-circle" width="250px" height="250px"
                                        src="{{url('')}}/bower_components/admin-lte/dist/img/male.png"
                                        alt="User profile picture">
                                </div>
                                <font color="white">
                                    <h3 class="profile-username text-center" style="font-size:30px;"> <strong>
                                            PESERTA UMUM</strong> </h3>
                                </font>






                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-5">
                            <!-- <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Buat Daftar Antrian</h5>
                                </div> -->
                            <div class="container-fluid">

                                <form action="{{route('daftarpasiennonbpjs')}}" method="post">
                                    {{ csrf_field() }}
                                    <br>
                                    <div class="wrap-input50 validate-input m-b-18">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="option"
                                                id="inlineRadio1" value="NIK">
                                            <font color="white">
                                                <label class="form-check-label" for="inlineRadio1">NIK</label>
                                            </font>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="option"
                                                id="inlineRadio2" value="NOMOR REKAM MEDIS">
                                            <font color="white">
                                                <label class="form-check-label" for="inlineRadio2">NOMOR REKAM
                                                    MEDIS</label>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="wrap-input50 validate-input m-b-18">
                                        <div class="row mb-3">
                                            <div class="input-group">
                                                <input type="number" name="nik_norm" class=" form-control"
                                                    placeholder=" NIK / NO KARTU BPJS">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-input100 validate-input m-b-18">
                                        <div class="row mb-4">
                                            <select style="height: 38px;" name="poli" id="poli"
                                                class="form-control"> --pilih Poli--
                                                @foreach ($mdpoli as $poli)
                                                <option value="{{ $poli->NamaPoli }}">{{ $poli ->NamaPoli }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="wrap-input100 validate-input m-b-18">
                                        <div class="row mb-4">
                                            <select name="dokter" id="dokter" class="form-control">
                                                @foreach ($mddokter as $dokter)
                                                <option value="{{ $dokter->nama }}">
                                                    {{ $dokter ->nama }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <font color="white">
                                        * NIK harus 16 digit.
                                    </font>
                                    <br>
                                    <br>
                                    <div class="wrap-input50 validate-input m-b-18">

                                        <input class="btn btn-warning" type="submit" value="Daftar Antri" style="border: 1px solid white; background-color:orange; text-color:white ">

                                       
                                    </div>
                                </form>


                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </div>
        </section>
        <!-- /.content -->


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
    <!-- overlayScrollbars
    <script src="{{url('')}}/bower_components/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <-- Bootstrap Switch -->
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

</body>