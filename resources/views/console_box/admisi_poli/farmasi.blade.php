@include('layouts.header_main')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
       
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper" style=" background-image: linear-gradient(to right,#20B2AA, #008B8B ); ">
            <!-- Content Header (Page header) -->
           
                {{-- <button type="button" class="btn btn-primary plus float-right" href="{{url('/console/home')}}" >
                    <span data-feather="plus"></span>
                   Kembali
                </button> --}}
                <div class="container-fluid">
                <div class="col-sm-11 " >
                    
                    <a class="btn btn-outline-light plus float-right  mt-4" style="border: 2px solid white; background-color:#008B8B; " href="{{url('/console/home')}}">
                       <strong> Kembali </strong></a>
                </div>
                </div>
            <!-- /.content-header -->
            <br><br><br>
            <br>
            <br>
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
                               






                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-5">
                        
                            <div class="container-fluid">
                                <form action="{{route('daftarantrianadmisi')}}" class="form-validation bottom-75 ng-pristine ng-valid ng-scope" method="post"> 
                                     {{ csrf_field() }} 
                                    <div class="wrap-input50 validate-input m-b-20">
                                        <div class="row mb-8">
                                            <div class="input-group">
                                                <font color="white">
                                             <H1   style="text-align: center; font-size:34px;" class="ng-binding" >
                                            <strong> FARMASI </strong>
                                             </H1>
                                            <h2 style="text-align: center;font-size: 14px;">Silahkan ambil nomor antrian dibawah </h2>
                                                </font>
                                            </div>
                                           
                                                <div class="small-box " style="text-align: center; background-color:#7266ba; box-shadow: 6px 8px 8px #2F4F4F;">                                                    
                                                        <font color="white">
                                                           {{-- <a href="/petugaspanggil/daftarantrianadmisi" class="btn btn-warning text-info font-thin h1 block" style=" background-color:#fad733;"><h1 style="text-align: center;margin: 0px; font-size: 63px"><strong>Klik Disini</strong>></a> --}}
                                                            <button type="submit" href class="btn btn-warning text-info font-thin h1 block" style=" background-color:#fad733;"><h1 style="text-align: center;margin: 0px; font-size: 63px"><strong>Klik Disini</strong>
                                                            </h1></button>
                                                            
                                                        </font>
                                                </div>                                               
                                        </div>
                                        
                                    </div>
                                {{-- </form> --}}
                            </div>                           
                        </div>                        
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
                <div class="row justify-content-lg-center">
                    <div class="col-lg-5 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center d-grid p-5">
                                <div class="border border-success rounded-2 py-2 mb-5">
                                    <div class="form-group col-12 col-sm-12">
                                        <label for="message-text" class="col-form-label">Jumlah Antrean</label>
                                        <br>
                                        @foreach ($sumantrianadmisi as $su)
                                        <label for="">{{$su->jumlah}}</label>
                                        <br>
                                        <label for="message-text" class="col-form-label">Sisa Antrean</label>
                                        <br>
                                        
                                           
                                        
                                        @if ($su->jumlah == 0)
                                            <label for="">{{$su->jumlah}}</label>
                                      
                                            
                                        @else
                                            <label for="">{{$su->jumlah-1}}</label>
                                        
                                            
                                        @endif
                                       
                                    @endforeach         
                                    </div>
                                    {{-- <div class="form-group col-12 col-sm-12">    
                                        if (is_array($sisaantrian) || is_object($sisaantrian))
                                    {
                                        @foreach ($sisaantrian as $si)
                                        {
                                            <label for="">{{$si->max}}</label>
                                        }
                                        @endforeach    
                                    }      
                                                                    
                                       
                                    
                                    </div> --}}
                                </div>
                              {{-- <!-- button pengambilan nomor antrian -->
                              <a id="insert" href="javascript:void(0)" class="btn btn-success btn-block rounded-pill fs-5 px-5 py-4 mb-2">
                                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
                              </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- /.content -->

        @include('sweetalert::alert')


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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function() {
    // tampilkan jumlah antrian
    $('#antrian').load('console_box.admisi_poli.get_antrian.php');

    // proses insert data
    $('#insert').on('click', function() {
      $.ajax({
        type: 'POST',                     // mengirim data dengan method POST
        url: 'console_box.admisi_poli.insert.php',                // url file proses insert data
        success: function(result) {       // ketika proses insert data selesai
          // jika berhasil
          if (result === 'Sukses') {
            // tampilkan jumlah antrian
            $('#antrian').load('console_box.admisi_poli.get_antrian').fadeIn('slow');
          }
        },
      });
    });
  });
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