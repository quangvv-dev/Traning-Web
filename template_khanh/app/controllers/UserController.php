<?php

/**
 * Created by PhpStorm.
 * User: khanhlouis
 * Date: 07/07/2018
 * Time: 14:24
 */
require_once "app/models/User.php";
class UserController
{
    private $__action;

    public function __construct($action, &$rs)
    {
        $this->__action = $action;
        $this->main($rs);
    }
    public function main(&$rs)
    {
        switch ($this->__action ) {
            case 'index':
                $rs = $this->__index();
                break;
            case 'create':
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnSubmit'])) {
                    $data = [
                        'name'                  => $_POST['name'],
                        'email'                 => $_POST['email'],
                        'email_personal'        => $_POST['email_personal'],
                        'password'              => $_POST['password'],
                        'remember_token'        => $_POST['remember_token'],
                        'image'                 => $_POST['image'],
                        'gender'                => $_POST['gender'],
                        'date_of_birth'         => $_POST['date_of_birth'],
                        'identify_id'           => $_POST['identify_id'],
                        'phone_number'          => $_POST['phone_number'],
                        'current_address'       => $_POST['current_address'],
                        'permanent_address'     => $_POST['permanent_address'],
                        'graduate_from'         => $_POST['graduate_from'],
                        'salary'                => $_POST['salary'],
                        'bank_account_number'   => $_POST['bank_account_number'],
                        'hobby'                 => $_POST['hobby'],
                        'family_description'    => $_POST['family_description'],
                        'language_skills'       => $_POST['language_skills'],
                        'leave_days'            => $_POST['leave_days'],
                        'role_id'               => $_POST['role_id'],
                        'team_id'               => $_POST['team_id'],
                        'status'                => $_POST['status']
                    ];

                    (new User())->insert($data);
                }
                $rs = $this->__create();
                break;
            case 'edit':

                break;
            case 'destroy':

                break;
            default:
                $rs = $this->__default();
                break;
        }
    }

    private function __index()
    {
        $rs['data'] = (new User())->fetchAll();
        $rs['view'] = 'app/views/user/index.php';

        return $rs;
    }
    private function __create()
    {
        $rs['data'] = '';
        $rs['view'] = 'app/views/user/create.php';
        return $rs;
    }


    private function __default()
    {
        $rs['data'] = '';
        $rs['view'] = 'app/views/404.php';

        return $rs;
    }
}