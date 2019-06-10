<?php
    include("lib/session.php");
    include("lib/DBConn.php");
    include("lib/variables.php");

    if(isset($_GET['id'])){
            $id = $_GET['id'];
    }

    if (isset($_POST['BtnUpdate']))
    {
        $id = $_POST['BtnUpdate'];
      

        $Date = $_REQUEST['TxtDate'];
        $Title = $_REQUEST['TxtTitle'];
        $Description = $_REQUEST['TxtDescription'];
        $Classname = $_REQUEST['TxtClassname'];
        $Class = $_REQUEST['TxtClass'];
        $ImageClass = $_REQUEST['TxtImgClass'];

        $query = "UPDATE `blog` SET `day`='$Date',`title`= '$Title',`description`= '$Description',`classname`= '$Classname',`class`= '$Class',`image_class`= '$ImageClass ' WHERE id = '$id'";

           
       $confirm_status = mysqli_query($conn,$query);
       if($confirm_status)
       {


?>
        <script>
            alert('Record has been Successfully Updated in Database');
            window.location.href='blog.php?success';
            </script>
<?php
    }
    else
    {
        ?>
        <script type="text/javascript">alert('not updated');</script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo SiteTitle; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <?php
            include("sidebar.php");
            ?>
        </div>
                <div class="content-page">
            <?php
                include("topbar.php");
            ?>
                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"> 
                        </div>                       
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="container">
                                        <?php
                                        
                                    $Query = "SELECT*  FROM blog  WHERE id = ".$id;
                                    $result = mysqli_query($conn, $Query);
                                    $row = mysqli_fetch_array($result);
                                ?>
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            
                                                
                                                <div class="form-group">
                                                    <label for="userName"> Day<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtDate" parsley-trigger="change" required
                                                    placeholder="Day " class="form-control" id="ss" value="<?php echo $row['day'];?>">
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="userName">Title<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtTitle" parsley-trigger="change" required
                                                    placeholder="title " class="form-control" id="rew" value="<?php echo $row['title'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Description<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtDescription" parsley-trigger="change" required
                                                    placeholder="Description " class="form-control" id="rew" value="<?php echo $row['description'];?>">
                                                </div>
                                             <div class="form-group">
                                                    <label for="userName"> Class Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtClassname" parsley-trigger="change" required
                                                    placeholder="BtnTitle " class="form-control" id="dws" value="<?php echo $row['classname'];?>">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="userName"> Class<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtClass" parsley-trigger="change" required
                                                    placeholder="Link " class="form-control" id="dws" value="<?php echo $row['class'];?>">
                                                </div>
                                                
                                                      <div class="form-group">
                                                    <label for="userName">Image Class<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtImgClass" parsley-trigger="change" required
                                                    placeholder="Link " class="form-control" id="dws" value="<?php echo $row['image_class'];?>">
                                                </div>

                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-custom waves-effect waves-light" type="submit" name="BtnUpdate" value="<?php echo($_REQUEST['id']);?>">
                                                    Update
                                                    </button>
                                                    <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                     Cancel
                                                    </button>
                                                </div>
                                         </div>
                                    </form>
                                    <br><br>
                                            
                                </div> 
                                <?php
                                ?>
                            </div>
                            <!--<div class="col-lg-3  col-offset-2"> -->
                        </div>
                
               <?php include("footer.php");?>
            </div>
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!-- Parsley js -->
        <script type="text/javascript" src="../plugins/parsleyjs/parsley.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
    </body>
</html>