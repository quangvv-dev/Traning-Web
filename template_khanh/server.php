<?php
/**
 * Created by PhpStorm.
 * User: khanhlouis
 * Date: 06/07/2018
 * Time: 20:24
 */

require_once 'libs/Database.php';
require_once 'libs/Constant.php';
require_once 'libs/Function.php';

require_once 'app/controllers/DashboardController.php';
require_once 'app/controllers/TeamController.php';
require_once 'app/controllers/UserController.php';

$baseUrl    = "http://$_SERVER[HTTP_HOST]/";
$uri        = $_SERVER['REQUEST_URI'];


/*
 * $action thì sẽ gồm các action sau main - index - create - edit - destroy
 * */
$controller = $_GET['controller'] ?? '';
$action     = $_GET['action'] ?? '';
$id         = $_GET['id'] ?? '';

if ($uri == '/') {
    $view = (new DashboardController())->index();
    require_once $view;
} else {

    switch ($controller) {
        case 'team':
            (new TeamController($action, $rs));
            require_once $rs['view'];
            break;
        case 'user': 
//            (new UserController($action, $rs));
//            require_once $rs['view'];
            break;
        default:
            require_once 'app/views/404.php';
            break;
    }
}
