<?php

/**
 * Created by PhpStorm.
 * User: khanhlouis
 * Date: 06/07/2018
 * Time: 21:22
 */
require_once 'app/models/Team.php';

class TeamController
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
        $rs['data'] = (new Team())->fetchAll();
        $rs['view'] = 'app/views/team/index.php';
        
        return $rs;
    }

    private function __create()
    {

        if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['btnSubmit'])) {

            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $leader_id = $_POST['leader_id'] ?? '';

            if(isset($_FILES['logo'])){
                $path       = BASE_URL . PATH_IMAGE_TEAM;
                $file_name  = upload_file($_FILES['logo'], $path);
            }

            $data = [
                'name'        => $name,
                'description' => $description,
                'logo'        => $file_name ?? '',
                'leader_id'   => $leader_id
            ];

            (new Team())->insert($data);

            header('Location: /team/index');
            exit();
        }

        $rs['data'] = '';
        $rs['view'] = 'app/views/team/create.php';

        return $rs;
    }

    private function __edit()
    {

        if (empty($this->__id)) {
            return $this->__default();
        }

        $model = (new Team())->fetchID($this->__id);

        if (empty($model)) {
            return $this->__default();
        }

        if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['btnSubmit']))){

            if (!isset($_POST['id']) && !is_int($_POST['id'])) {
                exit();
            } else {
                $name = $_POST['name'] ?? '';
                $description = $_POST['description'] ?? '';
                $leader_id = $_POST['leader_id'] ?? '';

                if (empty($name)) {
                    exit('Cac truong khong duoc phep de trong!');
                }

                if(isset($_FILES['logo'])){
                    $model = (new Team())->fetchID($this->__id);
                    $file_name = $model['logo'];
                    $path       = BASE_URL . PATH_IMAGE_TEAM;

                    $filePath = $path . $file_name;

                    $flag = delete_file($filePath);

                    if (!$flag) {
                        $errors = "There was an error trying to delete the file.";
                    }

                    $file_name  = upload_file($_FILES['logo'], $path);
                }

                $data = [
                    'name'           => $name,
                    'description'    => $description,
                    'logo'           => $file_name ?? '',
                    'leader_id '     => $leader_id
                ];

                (new Team())->update($data, $_POST['id']);

                $model = (new Team())->fetchID($this->__id);
            }

        }

        $rs['data'] = $model;
        $rs['view'] = 'app/views/team/edit.php';
    
        return $rs;
    }

    private function __destroy()
    {
        if (empty($this->__id)) {
            return $this->__default();
        }

        $model = (new Team())->fetchID($this->__id);

        if (empty($model)) {
            return $this->__default();
        }

        $file_name = $model['logo'];
        $path       = BASE_URL . PATH_IMAGE_TEAM;

        $filePath = $path . $file_name;

        $flag = delete_file($filePath);

        if (!$flag) {
            $errors = "There was an error trying to delete the file.";
        }

        $flag = (new Team())->delete($this->__id);

        if ($flag) {
            header('Location: /team/index');
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