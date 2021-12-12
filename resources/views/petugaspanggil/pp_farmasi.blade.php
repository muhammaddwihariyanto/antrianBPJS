@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('layouts.navbar_petugaspanggil')
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-cadet blue">
            <div class="container-fluid">
        
                <a href="{{url('/home')}}" class="brand-link">
                    <h3>  <font color="black">Administrator</font></h3>
        
                </a>
            </div>
        
            <!-- Right navbar links -->
        
            <!-- Messages Dropdown Menu -->
        
            <!-- Notifications Dropdown Menu -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right mb-0" style="background-color: #f8f9fa" >
                    <!-- {{ date_default_timezone_set('Asia/Jakarta')}} -->
                    <h5>Tanggal : {{ date('d/m/Y') }} Jam : </h5>
                    <h5 id="jam"></h5>
                    :<h5 id="menit"></h5>
                    :<h5 id="detik"></h5>
                </ol>
            </div>
            <ul class="navbar-nav ml-auto" style="text-align: center;">
                <li class="nav-item dropdown">
                    <a class="btn btn-danger" data-toggle="dropdown" href="#"  style="border-radius: 40px">
                        <i class="fas fa-power-off"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- <div class="dropdown-divider"></div> -->
                        <a href="{{url('logout')}}" class="dropdown-item dropdown-footer">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="card-body">
                <section class="content">
                    <div class="container-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- About Me Box -->
                                <div class="card  mb-0" >
                                    <div class="card-header mb-0" style="text-align: center;background-image: linear-gradient(#20B2AA, #20B2AA);">
                                        <font color="white">
                                        <h3 class="card-title-center mb-0"style="font: bold">NOMOR ANTREAN SEDANG BERJALAN</h3>
                                        </font>
                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card mt-1 mb-1">
                                            <div class="text-center">
                                                <p style="font-size: 150px; color: #58666e;">{{$antrian}}</p>
                                            </div> 
                                    </div>
                                  
                                    <div class="card mt-0.5 mb-0.5" padding="0.5px" style="border:1px solid transparent">
                                        <div class="row">
                                            <div class="col-sm-6">                                              
                                               <div class="panel panel-default text-center">
                                                        <h5>Loket</h5>

                                                        <h3>{{$loket}}</h3>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">                                                
                                                <div class="panel panel-default text-center">
                                                        <h5>Kode Booking</h5>
                                                      
                                                        <label for=""> -- --</label>
                                                    </div>                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-0.5 mb-0.5" padding="0.5px">
                                        <div class="row">
                                            <div class="col-sm-6">                                               
                                                <div class="panel panel-default text-center">
                                                        <h5>Antrean Sedang dilayani</h5>
                                                        @foreach ($sumantrianadmisi as $su)
                                                        <h3>{{$su->jumlah}}</h3>                                                                                                                                             
                                                </div>
                                            </div>
                                            <div class="col-sm-6">            
                                                <div class="panel panel-default text-center">
                                                    @if ($su->jumlah == 0)
                                                    <h5>Sisa Antrean</h5>
                                                    <h3>{{$su->jumlah}}</h3>      
                                                    @else
                                                    <h5>Sisa Antrean</h5>
                                                        <h3>{{$su->jumlah-1}}</h3>          
                                                    @endif
                                                    @endforeach
                                              
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-0.5 mb-0.5" padding="0.5px">
                                        <div class="row">
                                            <div class="col-sm-6">

                                                
                                                <div class="panel panel-default text-center">
                                                        <h5>Waktu Daftar</h5>
                                                       
                                                        <h3> {{$tanggal}}  </h3>           
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                              
                                                    <div class="panel panel-default text-center">
                                                        <h5>Waktu Panggil</h5>
                                                        <h3>00:00:00 WIB</h3>
                                                      
                                                        
                                                    </div>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>

                            <!-- /.col -->
                            <div class="col-md-4">

                                <!-- /.card -->
                                <div class="card-header mb-0" style="text-align: center;background-image: linear-gradient(#20B2AA, #20B2AA);">
                                    <font color="white">
                                    <h3 class="card-title-center mb-0" style="font: bold"> PETUGAS PANGGIL FARMASI</h3>
                                    </font>
                                </div>
                                <div class="card ">
                                    <div class="text-center">
                                        
                                        <h5 class="card-title-center mb-2 mt-4  " style="font: bold;color: #58666e;" >{{$loket}}
                                        </h5>
                                        <hr size="50%" width="75%" />
                                        <br>
                                       
                                        <div class="row">
                                            <div class="col-md-4">
                                               
                                            <label for="">Antrean</label>
                                            {{-- <button type="button" class="btn btn-outline-success">Panggil
                                                Next</button> --}}
                                      
                                            </div>
                                                <div class="wrap-input50 validate-input m-b-18">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="option"
                                                            id="inlineRadio1" value="Normal">
                                                    
                                                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                                                    
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="option"
                                                            id="inlineRadio2" value="Lewati" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                                    
                                                            <label class="form-check-label" for="inlineRadio2" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">Lewati</label>
                                                    
                                                    </div>
                                                </div>
                                               
                                        </div>
                                       
                                        <div class="collapse" id="collapseExample1"> 
                                            <div class="row">         
                                                <div class="col-md-4">     
                                                    <label >Nomor </label>
                                                </div>
                                                   
                                                        <div class="wrap-input100 validate-input m-b-18">
                                                            <select name="no_lewati" class="form-control" aria-label="Default select example">
                                                               
                                                                <option value="Admisi">-- Pilih Nomor --</option>
                                                                <option value="#"></option>
                                                                
                                                              </select>
                                                        </div>                                                              </div>
                                               
                                            </div>
                
                                        </div>
                                        
                                   <br>
                                                {{-- <button class="btn btn-success" style="font: bold; margin-left:30%" type="submit">Panggilan Berikutnya</button> --}}
                                                <p>
                                                   
                                                    <a href="{{url('petugaspanggil/updatestatus')}}" class="btn btn-success btn-md btn-block ng-isolate-scope" style="font: bold; margin-left:20%; margin-right:10%; width:60%;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                        <i class="far fa-arrow-alt-circle-right"></i>&nbsp; <strong>Panggilan Berikutnya</strong>
                                                    </a>
                                                  </p>
                                                  <div class="collapse" id="collapseExample">
                                                  
                                                        <a href="../updatestatus1/{{$antrian}}/{{$tanggal}}/{{$loket}}" type="button" class="btn btn-primary btn-md btn-block ng-isolate-scope" style="font: bold; margin-left:20%; margin-right:10%; width:60%; margin-bottom:5%;" >
                                                            <i class="fas fa-check"></i>&nbsp; <strong>Selesai Dilayani</strong></a>
                                                        <a href="../updatestatustidakhadir/{{$antrian}}/{{$tanggal}}/{{$loket}}" type="button" class="btn btn-danger btn-md btn-block ng-isolate-scope" style="font: bold; margin-left:20%; margin-right:10%; width:60%;margin-bottom:5%;">
                                                            <i class="far fa-times-circle"></i>&nbsp; <strong>Tidak Hadir </strong></a>    
                                                        <a href="../updatestatuslewati/{{$antrian}}/{{$tanggal}}/{{$loket}}" type="button" class="btn btn-dark btn-md btn-block ng-isolate-scope" style="font: bold; margin-left:20%; margin-right:10%; width:60%;margin-bottom:5%;">
                                                            <i class="fas fa-pause"></i>&nbsp; <strong>Lewati </strong></a>                                                   </div>
                                                        
                                </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div>
            <!-- /.content --
        </div>
       

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