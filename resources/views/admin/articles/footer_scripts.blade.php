<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script><!-- KNOB JS -->
{{--<script src="{{asset('assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>--}}
<script src="{{asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script><!-- Chart JS -->
{{--<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>--}}
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sweet-alert.init.js')}}"></script>

{{--<script src="assets/libs/select2/js/select2.min.js"></script>--}}
{{--<script src="assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>--}}

{{--<script src="{{asset('assets/js/jquery.form-advanced.js')}}"></script>--}}
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>
<!-- Datatable js -->
<script src={{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}></script>
<script src={{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}></script>
<script src={{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}></script>
<script src={{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}></script>
<!-- Key Tables -->
<script src={{asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}></script><!-- Selection table -->
<script src={{asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}></script><!-- App js -->
@yield('script')
<script>
    $('.datatableJs').DataTable({
        "ordering": false,
        "lengthChange": false,
        responsive: false,
        "bInfo": false,
        initComplete: function () {
            if (typeof customDataTable === 'function') {
                customDataTable(this)
            }
        }
    });
</script>