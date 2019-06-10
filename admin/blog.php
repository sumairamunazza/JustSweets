<?php
    include("lib/session.php");
    include("lib/DBConn.php");
    include("lib/variables.php");
?>
<?php
     if(isset($_REQUEST['BtnSubmit']))
    {
        

        $Date = $_REQUEST['TxtDate'];
        $Title = $_REQUEST['TxtTitle'];
        $Description = $_REQUEST['TxtDescription'];
        $Classname = $_REQUEST['TxtClassname'];
        $Class = $_REQUEST['TxtClass'];
        $ImageClass = $_REQUEST['TxtImgClass'];
        $Query = "INSERT INTO blog ".
                   "(day, title, description, classname,class, image_class) "."VALUES ".
                   "($Date','$Title' ,'$Description','$Classname','$Class' ,'$ImageClass')";
                    mysqli_query($conn, $Query);
                    if($Query)
                    {?>
<script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='blog.php?success';
            </script>
            <?php } else {
                echo "not found";
            }

?>
        
<?php
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
                            <div class="col-lg-1"> 
                        </div>                       
                            <div class="col-lg-9">
                                <div class="card-box">
                                <center>
                                    <h4 class="header-title m-t-0">Blog </h4>
                                    </center>
                                    <div class="container">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="userName">Date<span class="text-danger">*</span></label>
                                                <input type="text" name="TxtDate" parsley-trigger="change" required
                                                 placeholder="Date" class="form-control" id="userName">
                                             </div>
                                               
                                                <div class="form-group">
                                                    <label for="userName">Title<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtTitle" parsley-trigger="change" required
                                                    placeholder="Title" class="form-control" id="userName">
                                                </div>
                                                <div class="form-group row">
                                                        <label class="col-3 col-form-label">Description<span class="text-danger">*</span></label>
                                                        <div class="col-12">
                                                            <textarea class="form-control" rows="5" name="TxtDescription"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="userName">Class Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtClassname" parsley-trigger="change" required
                                                    placeholder="Class Name" class="form-control" id="userName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Class<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtClass" parsley-trigger="change" required
                                                    placeholder="Class" class="form-control" id="userName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Image Class<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtImgClass" parsley-trigger="change" required
                                                    placeholder="Image class" class="form-control" id="userName">
                                                </div>
                                                     
                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-custom waves-effect waves-light" type="submit" name="BtnSubmit">
                                                     Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                     Cancel
                                                    </button>
                                                </div>
                                         </div>
                                    </form>
                                <br><br>
                                            
                                </div> 
                            </div>
                            <!--<div class="col-lg-3  col-offset-2"> -->
                        </div>
                 <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="container">
                                        <center>
                                            <h4 class="m-t-0 header-title">View Record</h4>
                                        </center>
                        <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Date</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Button Title</th>
                                                        <th>Button Link</th>
                                                        <th>Image Class</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        <?php
                                            $query = "SELECT * FROM blog";
                                            $result = mysqli_query($conn,$query);
                                            if ($result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($result))
                                                {
                                        ?>      
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['day']; ?></td>
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td><?php echo $row['classname']; ?></td>
                                                         <td><?php echo $row['class']; ?></td>
                                                         <td><?php echo $row['image_class']; ?></td>
                                                        
                                                        <td><a href="update_blog.php?id=<?php echo $row['id']; ?>">Edit</a>
                         
                                                        <td><a href="delete_blog.php?id=<?php echo $row['id']; ?>" 
                            onClick="return confirm('Are you sure you want to delete')"; title="Delete">Delete</a></td>
                                                        
                                                    </tr>
                                                   
                                                    <?php
                                                         }
                                                            }
                                                            else
                                                            {
                                                                echo "No Result Found";
                                                                  }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div> 
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