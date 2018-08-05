<?php include "connect.php" ;?>
<!DOCTYPE html>
<html lang="vi">
<head>
<?php require_once"header.php";?>
</head>

<body class="nav-md">
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
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
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
                                <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
        <div class="right_col" role="main">
            <!-- top tiles -->

            <!-- nhan vien -->
            <div class="col-md-12 col-sm-12 col-xs-12" id="users">
                <div class="x_panel" style="overflow: scroll;">
                    <div class="x_title">
                        <h2>List User <small>View</small></h2>
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
                    <button type="button" name="btn-add" class="btn btn-info"><a href="addUser.php">Add New</a></button>
                    <div class="x_content" >
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Email_personal	</th>
<!--                                <th>password</th>-->
<!--                                <th>remember_token</th>-->
                                <th> Ảnh </th>
                                <th>Giới_tính </th>
                                <th>Sinh_nhật </th>
                                <th>Số_CMT </th>
                                <th>Phone</th>
                                <th>Địa_chỉ_hiện_tại</th>
                                <th>Địa_chỉ_thường_trú</th>
                                <th>Trường_học </th>
                                <th>Lương </th>
                                <th>số_tài_khoản </th>
                                <th>Sở_thích </th>
                                <th>giới_thiệu_gia_đình </th>
                                <th>Kỹ_năng_ngoại_ngữ </th>
                                <th>Số_ngày_nghỉ </th>
                                <th>Quyền </th>
                                <th>Đội </th>
                                <th>Tình_trạng </th>
                                <th>Thao_tác </th>
                            </tr>
                            </thead>
                            <?php
                           $infoUsers      = $users->find();
                            foreach ($infoUsers as $row):
                            ?>

                            <tbody>
                            <tr>
                                <td><?php echo $row['_id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['email_personal'] ?></td>
<!--                                <td>--><?php //echo $row['password'] ?><!--</td>-->
<!--                                <td>--><?php //echo $row['remember_token'] ?><!--</td>-->
                                <td><img src="images/<?php  echo $row["image"]?>" width="100px" height="60px"></td>
                                <td><?php if($row['gender']==1){
                                        echo "Nam";
                                    }
                                    elseif($row['gender']==2)
                                    {
                                        echo "Nu";
                                    }
                                    else{
                                        echo "Khong xac dinh";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['date_of_birth'] ?></td>
                                <td><?php echo $row['identify_id'] ?></td>
                                <td><?php echo $row['phone_number'] ?></td>
                                <td><?php echo $row['current_address'] ?></td>
                                <td><?php echo $row['permanent_addres'] ?></td>
                                <td><?php echo $row['graduate_from'] ?></td>
                                <td><?php echo $row['salary'] ?></td>
                                <td><?php echo $row['bank_account_number'] ?></td>
                                <td><?php echo $row['hobby'] ?></td>
                                <td><?php echo $row['family_description'] ?></td>
                                <td><?php echo $row['language_skills'] ?></td>
                                <td><?php echo $row['leave_days'] ?></td>
                                <td><?php echo $row['role_id'] ?></td>
                                <td><?php echo $row['team_id'] ?></td> 
                                <td><?php echo $row['status'] ?></td>
                                <td>
                                    <a href="updateUser.php?id=<?php  echo $row["_id"]?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="deleteUser.php?id=<?php  echo $row["_id"]?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end-nhanvien -->
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        <!-- footer content -->
           <?php require_once"footer.php";?>
           <!-- end footer content -->
</body>
</html>