<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once"header.php";?>
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
                    <h2>Add New User</h2>
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

<!--                form add data-->

                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"  enctype="multipart/form-data" action="">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="last-name" name="email" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email_personal </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="email" name="emailP">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="password" required="required" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ảnh <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="file" id="fileToUpload" required="required" >
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Giới tính </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="radio" name="gender" value="1" checked> Nam<br>
                                <input type="radio" name="gender" value="2"> Nữ<br>
                                <input type="radio" name="gender" value="3"> Không xác định
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sinh nhật
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="birthday" required="required" type="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Số CMT
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="indentify" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="last-name" name="phone" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ hiện tại</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="Caddress">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ thường trú</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="Paddress">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Hình thức tốt nghiệp </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="graduate">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lương </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="number" name="salary">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Số tài khoản</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="banknumber">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sở thích </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <textarea name="hobby" style="width: 100%;resize: none"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Giới thiệu gia đình</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="family" style="width: 100%;resize: none"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kỹ năng ngôn ngữ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="language">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">số ngày nghỉ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="number" name="leaveday">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Quyền</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="role">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Team</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="team" >
                                                <?php
                                                    $infoTeams      = $teams->find();
                                                    foreach ($infoTeams as $row):
                                                    ?>
                                                    <option value="<?php echo $row['_id'] ?>"> <?php echo $row['name'] ?> </option>

                                                <?php endforeach ?></select>
                                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="status" required="required" type="number">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!-- /end form add data-->

                    <!--  php xử lý submit-->
                    <?php
                    if(isset($_POST['submit'])){
                    //xu ly upload

                        require_once"upload.php";

                        $idIMG      =   "User-".$nameImg;
                        $path       = "./images/".$idIMG;
                        $up         = move_uploaded_file($tmp_name,$path);
                    // end xu ly upload
                        $name       =$_POST['name'];
                        $email      =$_POST['email'];
                        $emailP     =$_POST['emailP'];
                        $pass       =$_POST['password'];
                        $token      =$_POST['remember_token'];
                        $gender     =$_POST['gender'];
                        $birth      =$_POST['birthday'];
                        $identify   =$_POST['indentify'];
                        $phone      =$_POST['phone'];
                        $CA         =$_POST['Caddress'];
                        $PA         =$_POST['Paddress'];
                        $graduate   =$_POST['graduate'];
                        $salary     =$_POST['salary'];
                        $bank       =$_POST['banknumber'];
                        $hobby      =$_POST['hobby'];
                        $family     =$_POST['family'];
                        $language   =$_POST['language'];
                        $leaveday   =$_POST['leaveday'];
                        $role       =$_POST['role'];
                        $team       =$_POST['team'];
                        $status     =$_POST['status'];
                    //truy van add user
                        
                        $update     = $users->insertOne(['name'=>$name,'email'=>$email,'email_personal'=>$emailP,'password'=>$pass,'image'=>$idIMG,'gender'=>$gender,'date_of_birth'=>$birth,'identify_id'=>$identify,'phone_number'=>$phone,'current_address'=>$CA,'permanent_addres'=>$PA,'graduate_from'=>$graduate,'salary'=>$salary,'bank_account_number'=>$bank,'hobby'=>$hobby,'family_description'=>$family,'language_skills'=>$language,'leave_days'=>$leaveday,'role_id'=>$role,'team_id'=>$team,'status'=>$status]);

                            $url = 'users.php';
                            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                    //redirect responsive web
                        // $url = 'users.php';
                        // echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
                    //end redirect responsive web
                    }

                    ?>
                    
                    
                    <!-- / end php xử lý add-->

                </div>
            </div></div></div></div>

            <!-- /page content -->

            <!-- footer content -->
            <?php require_once"footer.php";?>
</body>
</html>
