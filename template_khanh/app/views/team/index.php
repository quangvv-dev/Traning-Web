<?php
    ob_start();
?>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Teams <small>Some examples to get you started</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Responsive example<small>Teams</small></h2>
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
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Logo</th>
                                <th>ID leader</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($rs['data'] as $key => $item) : ?>

                                <tr>
                                    <td><?= ++$key ?></td>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['description'] ?></td>
                                    <td><img src="<?= PATH_IMAGE_TEAM . $item['logo'] ?>" width="100px"></td>
                                    <td><?= $item['leader_id'] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="/team/edit?id=<?php echo $item["id"]; ?>"><i class="fa fa-edit"></i>&nbsp;Edit</a> &emsp;&emsp;
                                        <a class="btn btn-danger" href="/team/delete.php?id=<?php echo $item["id"]; ?>"><i class="fa fa-times"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
?>