<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">RSDEA.</a></strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
</footer>
@include('sweetalert::alert')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
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
<script src="{{url('')}}/bower_components/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
$(function() {
    $('input[name="daritanggal"]').daterangepicker({
        singleDatePicker: true,
        timePicker: true,
        // startDate: moment().startOf('hour'),
        // endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'MM-DD-YYYY'
        }
    });
});
$(function() {
    $('input[name="sampaitanggal"]').daterangepicker({
        singleDatePicker: true,
        timePicker: true,
        // startDate: moment().startOf('hour'),
        // endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'MM-DD-YYYY'
        }
    });
});
// $(function() {
//     $('input[name="tgllahir"]').daterangepicker({
//         singleDatePicker: true,
//         timePicker: true,
//         // startDate: moment().startOf('hour'),
//         // endDate: moment().startOf('hour').add(32, 'hour'),
//         locale: {
//             format: 'MM-DD-YYYY'
//         }
//     });
// });
</script>