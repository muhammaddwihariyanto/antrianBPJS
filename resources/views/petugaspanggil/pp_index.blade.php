@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('layouts.navbar_petugaspanggil')
        <!-- Content Wrapper. Contains page content -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Administrator</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- {{ date_default_timezone_set('Asia/Jakarta')}} -->
                                <h3> {{ date('d/m/Y') }} at </h3>
                                <h3 id="jam"></h3>
                                :<h3 id="menit"></h3>
                                :<h3 id="detik"></h3>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-wrapper">
                    <div class="row">
                        <div class="col-md-5">

                            <!-- Profile Image -->

                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header ">
                                    <div class="text-center">
                                        <h3 class="card-title">NOMOR ANTREAN</h3>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card mt-3">
                                    <div class="card-body">

                                        <div class="text-center">
                                            <p style="font-size: 150px;" style="color: dimgray;">A1-2</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="card mt-1" padding="0.5px">
                                    <div class="card-body">

                                        <div class="text-center">
                                            <h5>Dokter</h5>

                                            <label for="">dr. DJOKO TJAHJONO WAHJUTOMO, Sp.PD </label>


                                        </div>

                                    </div>
                                </div>
                                <div class="card mt-1" padding="0.5px">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5>Poli Tujuan</h5>
                                                        <br>
                                                        <label for="">POLI PENYAKIT DALAM</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5>No Rekam
                                                            Medis</h5>
                                                        <br>
                                                        <label for=""> -- --</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-1" padding="0.5px">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5>Waktu Daftar</h5>
                                                        <br>
                                                        <label for="">-- --</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5>Waktu Panggil</h5>
                                                        <br>
                                                        <label for=""> -- --</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /.col -->
                        <div class="col-md-6">

                            <!-- /.card -->

                            <div class="card ">

                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="nama_poli" id="poli" class="form-control"> --pilih Poli--
                                                @foreach ($mdpoli as $poli)
                                                <option value="{{ $poli->NamaPoli }}">{{ $poli -> NamaPoli }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-outline-success">Panggil Next</button>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="col-md-6">
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
                            <div class="card-group">
                                <div class="card ">

                                    <div class="card-body ">
                                        <div class="text-center">
                                            <h5>Nama Poli</h5>
                                            <br>
                                            <label for=""> Nama Pasien</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card ">

                                    <div class="card-body ">
                                        <div class="text-center">
                                            <label for=""> 08:00 - 12:00</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="card ">

                                    <div class="card-body ">
                                        <div class="text-center">
                                            <label for=""> Sisa 2/2 Antrean</label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content --
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
        <script
            src="{{url('')}}/bower_components/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
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