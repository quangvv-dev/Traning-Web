<?php
ob_start();
?>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Danh mục Users</small></h2>
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
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>email_personal</th>
                            <th>image</th>
                            <th>gender</th>
                            <th>date_of_birth</th>
                            <th>identify_id</th>
                            <th>phone_number</th>
                            <th>current_address</th>
                            <th>permanent_address</th>
                            <th>graduate_from</th>
                            <th>salary</th>
                            <th>bank_account_number</th>
                            <th>hobby</th>
                            <th>family_description/th>
                            <th>language_skills</th>
                            <th>leave_days</th>
                            <th>role_id</th>
                            <th>team_id</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rs['data'] as $key => $val) : ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= $val['id'] ?></td>
                                <td><?= $val['name'];?></td>
                                <td><?= $val['email'];?></td>
                                <td><?= $val['email_personal'];?></td>
                                <td><img src="<?= PATH_IMAGE_TEAM . $val['image']?>" width="100px" alt="khanh octro"></td>
                                <td><?php if($val['gender']==0) echo 'Male'; if($val['gender']==1) echo 'Female'; if($val['gender']==2) echo "Other"; ?></td>
                                <td><?= $val['date_of_birth'];?></td>
                                <td><?= $val['identify_id'];?></td>
                                <td><?= $val['phone_number'];?></td>
                                <td><?= $val['current_address'];?></td>
                                <td><?= $val['permanent_address'];?></td>
                                <td><?= $val['graduate_from'];?></td>
                                <td><?= $val['salary'];?></td>
                                <td><?= $val['bank_account_number'];?></td>
                                <td><?= $val['hobby'];?></td>
                                <td><?= $val['family_description'];?></td>
                                <td><?= $val['language_skills'];?></td>
                                <td><?= $val['leave_days'];?></td>
                                <td><?= $val['role_id'];?></td>
                                <td><?= $val['team_id'];?></td>
                                <td><?= $val['status'];?></td>
                                <td>
                                    <a class="btn btn-primary center-block" href="/user/edit/<?= $val['id']; ?>"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                                    <a class="btn btn-danger center-block" href="/user/destroy/<?= $val['id'] ?>"><i class="fa fa-times"></i>&nbsp;Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<?php
$content = ob_get_clean();

?>
