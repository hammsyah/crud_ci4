<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url(); ?>/image/favicon.ico" type="image/ico" />

    <title><?= $title; ?> | Simpeg Rajekwesi </title>

    <!-- Bootstrap ok -->
    <link href="<?= base_url('/aset'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome ok -->
    <link href="<?= base_url('/aset'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress ok -->
    <link href="<?= base_url('/aset'); ?>/css/nprogress.css" rel="stylesheet">
    <!-- iCheck ok -->
    <link href="<?= base_url('/aset'); ?>/css/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar ok -->
    <link href="<?= base_url('/aset'); ?>/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap ok -->
    <link href="<?= base_url('/aset'); ?>/css/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('/aset'); ?>/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('/aset'); ?>/css/custom.min.css" rel="stylesheet">

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>



</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url(); ?>/image/pp/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>John Doe</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?= base_url('/pages/index'); ?>"> <i class="fa fa-home"></i> Home </a>
                                </li>

                                <li><a href="<?= base_url('/pages/about'); ?>"> <i class="fa fa-edit"></i> About </a>
                                </li>

                                <li><a href="<?= base_url('/pages/kontak'); ?>"> <i class="fa fa-group"></i> kontak </a>
                                </li>

                                <li><a href="<?= base_url('/komik/index'); ?>"> <i class="fa fa-book"></i> Komik </a>
                                </li>

                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url(); ?>/image/pp/img.jpg" alt="">John Doe
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <?= $this->renderSection('isikonten'); ?>

            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery ok -->
    <script src="<?= base_url('/aset'); ?>/js/jquery.min.js"></script>
    <!-- Bootstrap ok -->
    <script src="<?= base_url('/aset'); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick ok -->
    <script src="<?= base_url('/aset'); ?>/js/fastclick.js"></script>
    <!-- NProgress ok -->
    <script src="<?= base_url('/aset'); ?>/js/nprogress.js"></script>
    <!-- Chart.js ok -->
    <script src="<?= base_url('/aset'); ?>/js/Chart.min.js"></script>
    <!-- gauge.js ok -->
    <script src="<?= base_url('/aset'); ?>/js/gauge.min.js"></script>
    <!-- bootstrap-progressbar ok -->
    <script src="<?= base_url('/aset'); ?>/js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck ok -->
    <script src="<?= base_url('/aset'); ?>/js/icheck.min.js"></script>
    <!-- Skycons ok -->
    <script src="<?= base_url('/aset'); ?>/js/skycons.js"></script>
    <!-- Flot ok -->
    <script src="<?= base_url('/aset'); ?>/js/jquery.flot.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jquery.flot.pie.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jquery.flot.time.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jquery.flot.stack.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jquery.flot.resize.js"></script>
    <!-- Flot plugins ok -->
    <script src="<?= base_url('/aset'); ?>/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url('/aset'); ?>/js/date.js"></script>
    <!-- JQVMap ok -->
    <script src="<?= base_url('/aset'); ?>/js/jquery.vmap.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jquery.vmap.world.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker ok -->
    <script src="<?= base_url('/aset'); ?>/js/moment.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url('/aset'); ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/buttons.flash.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/buttons.print.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/jszip.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/pdfmake.min.js"></script>
    <script src="<?= base_url('/aset'); ?>/js/vfs_fonts.js"></script>


    <!-- Custom Theme Scripts ok -->
    <script src="<?= base_url('/aset'); ?>/js/custom.min.js"></script>

</body>

</html>