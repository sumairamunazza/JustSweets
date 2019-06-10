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

            <!-- ========== Left Sidebar Start ========== -->
          <?php
          include("sidebar.php");
          ?>

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
                            <div class="col-12">
                                <div class="card-box">
                                    <button type="button" class="btn btn-custom btn-rounded w-md waves-effect waves-light pull-right"><i class="mdi mdi-upload"></i> Upload Files</button>
                                    <h4 class="header-title m-b-30">My Files</h4>

                                    <div class="row">
                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/pdf.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                                    <p class="mb-0"><small>568.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/bmp.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Bmpfile.bmp</h5>
                                                    <p class="mb-0"><small>845.8 mb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/psd.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Photoshop_file.ps</h5>
                                                    <p class="mb-0"><small>684.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/avi.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Avifile.avi</h5>
                                                    <p class="mb-0"><small>5.9 mb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/cad.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Cadfile.cad</h5>
                                                    <p class="mb-0"><small>95.8 mb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/txt.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Mytextfile.txt</h5>
                                                    <p class="mb-0"><small>568.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/eps.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Epsfile.eps</h5>
                                                    <p class="mb-0"><small>568.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/dll.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Project_file.dll</h5>
                                                    <p class="mb-0"><small>684.3 kb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/sql.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">Website_file.sql</h5>
                                                    <p class="mb-0"><small>457.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/zip.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                                    <p class="mb-0"><small>568.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/ps.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                                    <p class="mb-0"><small>568.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xl-2">
                                            <div class="file-man-box">
                                                <a href="" class="file-close"><i class="mdi mdi-close-circle"></i></a>
                                                <div class="file-img-box">
                                                    <img src="assets/images/file_icons/png.svg" alt="icon">
                                                </div>
                                                <a href="#" class="file-download"><i class="mdi mdi-download"></i> </a>
                                                <div class="file-man-title">
                                                    <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                                    <p class="mb-0"><small>568.8 kb</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-3">
                                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                                    </div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>