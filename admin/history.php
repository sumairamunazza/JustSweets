<?php
    include("lib/session.php");
    include("lib/DBConn.php");
    include("lib/variables.php");
?>
<?php
     if(isset($_REQUEST['BtnSubmit']))
    {
        
        $fileinfo = PATHINFO($_FILES["image"]["name"]);
    	$newFilename = $fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
    	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
    	$location = "upload/" . $newFilename;
        $Title = $_REQUEST['TxtTitle'];
        $Description = $_REQUEST['TxtDescription'];
        $BtnTitle = $_REQUEST['TxtBtnTitle'];
        $BtnLink = $_REQUEST['TxtBtnLink'];
            
        $Query = "INSERT INTO history ".
                   "(title,description  ,image) "."VALUES ".
                   "('$Title ','$Description', '$location')";
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
        <title><?php echo SiteTitle; ?>s</title>
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
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1"> 
                        </div>                       
                            <div class="col-lg-9">
                                <div class="card-box">
                                <center>
                                    <h4 class="header-title m-t-0">History</h4>
                                    </center>
                                    <div class="container">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <!-- <div class="form-group">
                                                <label for="userName">Subject<span class="text-danger">*</span></label>
                                                <input type="text" name="TxtSubject" parsley-trigger="change" required
                                                 placeholder="Subject" class="form-control" id="userName">
                                             </div> -->
                                             <div class="form-group">
                                                    <label for="userName">Title<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtTitle" parsley-trigger="change" required
                                                    placeholder="Title" class="form-control" id="userName">
                                                </div>
                                        
                                                 <label class="col-3 col-form-label">Description<span class="text-danger">*</span></label>
                                                <div class="col-12">
                                                <textarea class="form-control" rows="5" name="TxtDescription"></textarea>
                                               </div>
                                             
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Image<span class="text-danger">*</span></label>
                                                     <div class="col-12">
                                                 <input type="file" name="image" class="form-control">
                                                </div> 
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
                                         </div>
                                    </form>
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
                                                        
                                                        <th>Title</th>
                                                        <th>Discription</th>
                                                         <th>Image</th>
                                                        
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        <?php
                                            $query = "SELECT * FROM history";
                                            $result = mysqli_query($conn,$query);
                                            if ($result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($result))
                                                {
                                        ?>      
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td><img src="<?php echo $row['image']; ?>" width = "50" height = "50"></td>
                                                        
                                                        
                                                        <td><a href="update_history.php?id=<?php echo $row['id']; ?>">Edit</a>
                                                            </td>
                                                        <td><a href="delete_history.php?id=<?php echo $row['id']; ?>" 
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