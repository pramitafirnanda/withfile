<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>LPPM - Sistem Informasi LPPM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="LPPM - Sistem Informasi LPPM" name="description" />
        <meta content="LPPM - Sistem Informasi LPPM" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="theme/assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="theme/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="theme/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="theme/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="theme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="theme/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="theme/assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo"> 
                        <a href="index.html" class="logo">
                            <img src="theme/assets/images/logo_sm.png" alt="" height="26" class="logo-small">
                            <img src="theme/assets/images/logo.png" alt="" height="53" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 190px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a> 
                                    </div> 

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-light badge-pill noti-icon-badge">6</span>
                                </a> 
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Samuel <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown "> 
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.html"><i class="fi-air-play"></i>Dashboard</a>
                            </li> 
                            <li class="has-submenu">
                                <a href="#"><i class="fi-box"></i>Components</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-feather.html">Feather Icons</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-pickers.html">Form Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-mask.html">Form Masks</a></li>
                                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                            <li><a href="form-x-editable.html">X Editable</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </li> 
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box"> 
                            <h4 class="page-title">Datatable</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Default Example</b></h4>
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
 
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


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
        <script src="theme/assets/js/jquery.min.js"></script>
        <script src="theme/assets/js/popper.min.js"></script>
        <script src="theme/assets/js/bootstrap.min.js"></script>
        <script src="theme/assets/js/waves.js"></script>
        <script src="theme/assets/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="theme/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="theme/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="theme/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="theme/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="theme/plugins/datatables/jszip.min.js"></script>
        <script src="theme/plugins/datatables/pdfmake.min.js"></script>
        <script src="theme/plugins/datatables/vfs_fonts.js"></script>
        <script src="theme/plugins/datatables/buttons.html5.min.js"></script>
        <script src="theme/plugins/datatables/buttons.print.min.js"></script>
        <!-- Responsive examples -->
        <script src="theme/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="theme/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="theme/assets/js/jquery.core.js"></script>
        <script src="theme/assets/js/jquery.app.js"></script>

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

    </body>
</html>