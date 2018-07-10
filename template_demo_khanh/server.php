<?php
/**
 * Created by PhpStorm.
 * User: khanhlouis
 * Date: 06/07/2018
 * Time: 20:24
 */
/*
 * Gọi thư viện trong thư mục Libs
 */
require_once 'libs/Database.php';
require_once 'libs/Constant.php';
require_once 'libs/Function.php';

/*
 * Controller
 * */
require_once 'app/controllers/DashboardController.php';
require_once 'app/controllers/TeamController.php';
require_once 'app/controllers/UserController.php';

/*URI mà được cung cấp để truy cập trang  index.php*/
$uri        = $_SERVER['REQUEST_URI'];


/*
 * $action gồm các action sau  index - create - edit - destroy
 * */
$controller = $_GET['controller'] ?? '';
$action     = $_GET['action'] ?? '';
$id         = $_GET['id'] ?? '';

if ($uri == '/') {
    $view = (new DashboardController())->index();
    require_once $view;
} else {
    $rs = [];
    switch ($controller) {
        case 'team':
            (new TeamController($action, $rs, $id));
            require_once $rs['view'];
            break;
        case 'user': 
            (new UserController($action, $rs, $id));
            require_once $rs['view'];
            break;
        default:
            require_once 'app/views/404.php';
            break;
    }
}
