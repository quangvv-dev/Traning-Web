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
    private $__id;

    public function __construct($action,&$rs, $id = null)
    {
        $this->__action = $action;
        $this->__id = $id;
        $this->main($rs);
    }

    public function main(array &$rs)
    {
        switch ($this->__action ) {
            case 'index':
                $rs = $this->__index();
                break;
            case 'create':
                $rs = $this->__create();
                break;
            case 'edit':
                $rs = $this->__edit();
                break;
            case 'destroy':
                $rs = $this->__destroy();
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


        if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['btnSubmit'])) {

            $name                   = $_POST['name'] ?? '';
            $email                  = $_POST['email'] ?? '';
            $email_personal         = $_POST['email_personal'] ?? '';
            $password               = $_POST['password'] ?? '';
            $remember_token         = $_POST['remember_token'] ?? '';
            $gender                 = $_POST['gender'] ?? '';
            $date_of_birth          = $_POST['date_of_birth'] ?? '';
            $identify_id            = $_POST['identify_id'] ?? '';
            $phone_number           = $_POST['phone_number'] ?? '';
            $current_address        = $_POST['current_address'] ?? '';
            $permanent_address      = $_POST['permanent_address'] ?? '';
            $graduate_from          = $_POST['graduate_from'] ?? '';
            $salary                 = $_POST['salary'] ?? '';
            $bank_account_number    = $_POST['bank_account_number'] ?? '';
            $hobby                  = $_POST['hobby'] ?? '';
            $family_description     = $_POST['family_description'] ?? '';
            $language_skills        = $_POST['language_skills'] ?? '';
            $leave_days             = $_POST['leave_days'] ?? '';
            $role_id                = $_POST['role_id'] ?? '';
            $team_id                = $_POST['team_id'] ?? '';
            $status                 = $_POST['status'] ?? '';



            if(isset($_FILES['image'])){
                $path       = BASE_URL . PATH_IMAGE_USER;
                $file_name = upload_file($_FILES['image'], $path);
            }

            $data = [
                'name'                  => $name,
                'email'                 => $email,
                'email_personal'        => $email_personal,
                'password'              => $password,
                'remember_token'        => $remember_token,
                'image'                 => $file_name ?? '',
                'gender'                => $gender,
                'date_of_birth'         => $date_of_birth,
                'identify_id'           => $identify_id,
                'phone_number'          => $phone_number,
                'current_address'       => $current_address,
                'permanent_address'     => $permanent_address,
                'graduate_from'         => $graduate_from,
                'salary'                => $salary,
                'bank_account_number'   => $bank_account_number,
                'hobby'                 => $hobby,
                'family_description'    => $family_description,
                'language_skills'       => $language_skills,
                'leave_days'            => $leave_days,
                'role_id'               => $role_id,
                'team_id'               => $team_id,
                'status'                => $status
            ];

            (new User())->insert($data);

            header('Location: /user/index');
            exit();

        }

        $rs['data'] = '';
        $rs['view'] = 'app/views/user/create.php';
        return $rs;

    }

    private function __edit()
    {
        if (empty($this->__id)) {
            return $this->__default();
        }

        $model = (new User())->fetchID($this->__id);

        if (empty($model)) {
            return $this->__default();
        }

        if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['btnSubmit']))){

            if (!isset($_POST['id']) && !is_int($_POST['id'])) {
                exit();
            } else {
                $name                   = $_POST['name'] ?? '';
                $email                  = $_POST['email'] ?? '';
                $email_personal         = $_POST['email_personal'] ?? '';
                $password               = $_POST['password'] ?? '';
                $remember_token         = $_POST['remember_token'] ?? '';
                $gender                 = $_POST['gender'] ?? '';
                $date_of_birth          = $_POST['date_of_birth'] ?? '';
                $identify_id            = $_POST['identify_id'] ?? '';
                $phone_number           = $_POST['phone_number'] ?? '';
                $current_address        = $_POST['current_address'] ?? '';
                $permanent_address      = $_POST['permanent_address'] ?? '';
                $graduate_from          = $_POST['graduate_from'] ?? '';
                $salary                 = $_POST['salary'] ?? '';
                $bank_account_number    = $_POST['bank_account_number'] ?? '';
                $hobby                  = $_POST['hobby'] ?? '';
                $family_description     = $_POST['family_description'] ?? '';
                $language_skills        = $_POST['language_skills'] ?? '';
                $leave_days             = $_POST['leave_days'] ?? '';
                $role_id                = $_POST['role_id'] ?? '';
                $team_id                = $_POST['team_id'] ?? '';
                $status                 = $_POST['status'] ?? '';

                if (empty($name)) {
                    exit('Cac truong khong duoc phep de trong!');
                }

                if(isset($_FILES['image'])){
                    $model = (new User())->fetchID($this->__id);
                    $file_name = $model['image'];
                    $path       = BASE_URL . PATH_IMAGE_USER;

                    $filePath = $path . $file_name;

                    $flag = delete_file($filePath);

                    if (!$flag) {
                        $errors = "There was an error trying to delete the file.";
                    }

                    $file_name  = upload_file($_FILES['image'], $path);
                }

                $data = [
                    'name'                  => $name,
                    'email'                 => $email,
                    'email_personal'        => $email_personal,
                    'password'              => $password,
                    'remember_token'        => $remember_token,
                    'image'                 => $file_name ?? '',
                    'gender'                => $gender,
                    'date_of_birth'         => $date_of_birth,
                    'identify_id'           => $identify_id,
                    'phone_number'          => $phone_number,
                    'current_address'       => $current_address,
                    'permanent_address'     => $permanent_address,
                    'graduate_from'         => $graduate_from,
                    'salary'                => $salary,
                    'bank_account_number'   => $bank_account_number,
                    'hobby'                 => $hobby,
                    'family_description'    => $family_description,
                    'language_skills'       => $language_skills,
                    'leave_days'            => $leave_days,
                    'role_id'               => $role_id,
                    'team_id'               => $team_id,
                    'status'                => $status
                ];

                (new User())->update($data, $_POST['id']);

                $model = (new User())->fetchID($this->__id);
            }

        }

        $rs['data'] = $model;
        $rs['view'] = 'app/views/user/edit.php';

        return $rs;
    }

    private function __destroy()
    {
        if (empty($this->__id)) {
            return $this->__default();
        }

        $model = (new User())->fetchID($this->__id);

        if (empty($model)) {
            return $this->__default();
        }

        $file_name = $model['logo'];
        $path       = BASE_URL . PATH_IMAGE_USER;

        $filePath = $path . $file_name;

        $flag = delete_file($filePath);

        if (!$flag) {
            $errors = "There was an error trying to delete the file.";
        }

        $flag = (new User())->delete($this->__id);

        if ($flag) {
            header('Location: /user/index');
            exit();
        } else {
            $rs['data'] = '';
            $rs['view'] = 'app/views/404.php';
            return $rs;
        }
    }
    private function __default()
    {
        $rs['data'] = '';
        $rs['view'] = 'app/views/404.php';

        return $rs;
    }
}