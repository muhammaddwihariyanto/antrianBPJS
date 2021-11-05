@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('layouts.navbar_main')
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper" style="background-color:#20B2AA;">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <br><br><br>
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
                                        src="{{url('')}}/bower_components/admin-lte/dist/img/avatar5.png"
                                        alt="User profile picture">
                                </div>
                                <font color="white">
                                    <h3 class="profile-username text-center" style="font-size:30px;"> <strong>BUKAN
                                            PESERTA</strong> </h3>
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

                                <form action="#" method="post">
                                    {{ csrf_field() }}
                                    <br>
                                    <div class="wrap-input50 validate-input m-b-18">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="NIK">
                                            <font color="white">
                                                <label class="form-check-label" for="inlineRadio1">NIK</label>
                                            </font>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="No_RM">
                                            <font color="white">
                                                <label class="form-check-label" for="inlineRadio2">NOMOR REKAM
                                                    MEDIS</label>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="wrap-input50 validate-input m-b-18">
                                        <div class="row mb-3">
                                            <div class="input-group">
                                                <input type="number" name="id " class=" form-control"
                                                    placeholder=" NIK / NO KARTU BPJS">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-input50 validate-input m-b-18">
                                        <div class="row mb-3">
                                            <select name="nama_poli" id="poli" class="form-control"> --pilih Poli--

                                                <option value="">-- Pilih Poli --</option>
                                                @foreach ($mdpoli as $poli)
                                                <option value="{{ $poli->NamaPoli }}">{{ $poli -> NamaPoli }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="wrap-input50 validate-input m-b-18">
                                        <div class="row mb-3">
                                            <select name="nama_dokter" id="dokter" class="form-control">

                                                <option value="">-- Pilih Dokter --</option>
                                                @foreach ($mddokter as $dokter)
                                                <option value="{{ $dokter->NamaDokter }}">
                                                    {{ $dokter -> NamaDokter }}
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

                                        <input class="btn btn-warning" type="submit" value="Daftar Antri">

                                        <a class="btn btn-primary" href="/console/home">
                                            Kembali</a>
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

    </div>
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

    <!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#poli").select2();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#dokter").select2();
    });
    </script> -->

</body>