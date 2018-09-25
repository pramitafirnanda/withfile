<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LPPM - Sistem Informasi LPPM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="LPPM - Sistem Informasi LPPM" name="description" />
    <meta content="LPPM - Sistem Informasi LPPM" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="theme/assets/images/favicon.ico">

    <link href="{{ asset('theme/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">

    <link href="{{ asset('theme/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('theme/assets/js/modernizr.min.js') }}"></script>
</head>

<body>
<!-- Navigation Bar-->
<header id="topnav">

    @include('layouts.menu-admin')

</header>

@yield('content')

        <!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                2018 © ICT UWP
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- jQuery  -->
<script src="{{ asset('theme/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/waves.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.slimscroll.js') }}"></script>
<!-- Required datatable js -->
<script src="{{ asset('theme/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('theme/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/buttons.print.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('theme/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<!-- App js -->
<script src="{{ asset('theme/assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.app.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );

</script>
@stack('scripts')
</body>
</html>