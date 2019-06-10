<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?php
            include("sidebar.php");
            ?>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
               <?php
               include("topbar.php");
               ?>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2"
                                           data-fgColor="#188ae2" data-displayInput=false value="35"/>

                                    <h6 class="text-muted mt-3">Disable display input</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                           data-fgColor="#4bd396" value="29"  data-knob-icon="icon-dollar"/>

                                    <h6 class="text-muted mt-3">Cursor mode</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#3ac9d6" data-displayPrevious=true value="44"/>

                                    <h6 class="text-muted mt-3">Display previous value</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#f9c851" data-displayPrevious=true data-angleOffset=-125
                                           data-angleArc=250 value="44"/>

                                    <h6 class="text-muted mt-3">Angle offset and arc</h6>
                                </div>
                            </div><!-- end col-->
                        </div><!-- end row -->

                        <div class="row">

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150"
                                           data-angleOffset="90" data-linecap="round" data-fgColor="#f5707a"
                                           value="35"/>

                                    <h6 class="text-muted mt-3">Angle offset</h6>
                                </div>
                            </div><!-- end col-->

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000"
                                           data-displayPrevious=true data-max="15000" data-step="1000"
                                           value="-11000" data-fgColor="#3b3e47"/>

                                    <h6 class="text-muted mt-3">5-digit values, step 1000</h6>
                                </div>
                            </div><!-- end col-->

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                                           data-fgColor="#6b5fb5" value="80" data-skin="tron" data-angleOffset="180"
                                           data-readOnly=true data-thickness=".1"/>

                                    <h6 class="text-muted mt-3">Readonly</h6>
                                </div>
                            </div><!-- end col-->

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150"
                                           data-displayPrevious=true data-fgColor="#f06292" data-skin="tron"
                                           data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                           data-angleArc=250 />

                                    <h6 class="text-muted mt-3">Angle offset and arc</h6>
                                </div>
                            </div><!-- end col-->

                        </div><!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>