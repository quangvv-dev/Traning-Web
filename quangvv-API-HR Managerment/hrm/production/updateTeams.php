

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<?php
include ("connect.php");
?>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
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
                            <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
                            <li><a><i class="fa fa-edit"></i> Teams <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.php">View List Teams</a></li>                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Users <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="users.php"">View List Users</a></li>
                                </ul>
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
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1552px;">
            <!--Form add data teams-->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                            <?php
                            include ('connect.php');
                            if(isset($_GET['id']))
                            {   $id =   $_GET['id'];
                                $sql =   "SELECT * FROM `teams` where `id`=$id";
                                $query  =   mysqli_query($conn,$sql);}
                            while($row    =   mysqli_fetch_array($query))
                            {
                            ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  type="text" name="txtName" id="first-name" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $row['name'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  type="text" id="last-name" name="txtDes" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row["description"]?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Logo </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="file" id="fileToUpload"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Leader_ID
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  type="text" name="txtLeader" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row["leader_id"]?>">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                        <?php

                        if(isset($_POST['submit'])){
//                            upload anh
                        if($_FILES["file"]["name"]!=NULL)
                        {

                            if($_FILES["file"]["type"]=="image/jpeg"
                                ||$_FILES["file"]["type"]=="image/png"
                                ||$_FILES["file"]["type"]=="image/gif"
                            )
                            {
                                if($_FILES["file"]["size"]>1048576)
                                {
                                    echo "file quá nang";
                                }
                                else{

                                    $path = "images/"; // file luu vào thu muc chua file upload
                                    $tmp_name = $_FILES['file']['tmp_name'];
                                    $nameImg = $_FILES['file']['name'];
                                    $type = $_FILES['file']['type'];
                                    $size = $_FILES['file']['size'];
// Upload file
//                                    move_uploaded_file($tmp_name,$path.$name);
//                                    echo "File uploaded! <br />";
//                                    echo "Tên file : ".$nameImg."<br />";
//                                    echo "Kieu file : ".$type."<br />";
//                                    echo "foder luu tru : ".$path.$nameImg;
                                }
                            }
                            else {
                                echo "file duoc chon khong hop le";
                            }
                        }
                        else
                        {
                            echo "vui long chon file";
                        }
//                        end upload
                            $name   =   $_POST['txtName'];
                            $des    =   $_POST['txtDes'];
                            $leader =   $_POST['txtLeader'];
                            $sql = " UPDATE `teams` SET  `name`='$name',`description`='$des',`logo`='$nameImg',`leader_id`=$leader WHERE `id`=$id";
                            mysqli_query($conn,$sql);
                            // PHP permanent URL redirection test
                            $url = 'http://localhost/hrm/production';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
//                            header('Location:'. http://localhost/hrm/production/index.php);
                        }

                        ?>
                       <?php } ?>

                    </form>
                </div>
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

            <!-- jQuery -->
            <script src="../vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="../vendors/fastclick/lib/fastclick.js"></script>
            <!-- NProgress -->
            <script src="../vendors/nprogress/nprogress.js"></script>
            <!-- iCheck -->
            <script src="../vendors/iCheck/icheck.min.js"></script>
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

            <!-- Custom Theme Scripts -->
            <script src="../build/js/custom.js"></script>

</body>
</html>
