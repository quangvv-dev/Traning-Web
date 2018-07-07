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

                    
                    if(isset($_FILES['image'])){
                        $path       = BASE_URL . PATH_IMAGE_TEAM;
                        $file_name  = upload_file($_FILES['image'], $path);
                    }

                    $data = [
                      'name'        => $_POST['name'],
                      'description' => $_POST['description'],
                      'logo'        => $file_name ?? '',
                        'leader_id' => $_POST['leader_id']
                    ];

                    (new Team())->insert($data);
                }
                $rs = $this->__create();
                break;
            case 'edit':
//                    if (isset($_POST['btnSubmit'])){
//                        
//                        $data = [
//                           'id'             => $_REQUEST['id'],
//                           'name'           => $_REQUEST['name'],
//                           'description'    => $_REQUEST['description'],
//                           'logo'           => $_REQUEST[ $file_name ?? ''],
//                           'leader_id '     => $_REQUEST['leader_id']
//                       ];
//                        (new Team())->update($data);
//                       
//                    }
//                $rs = $this->__edit();
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
        $rs['data'] = (new Team())->fetchAll();
        $rs['view'] = 'app/views/team/index.php';
        
        return $rs;
    }

    private function __create()
    {
        $rs['data'] = '';
        $rs['view'] = 'app/views/team/create.php';

        return $rs;
    }

     private function __edit()
    {
        $rs['data'] = '';
        $rs['view'] = 'app/views/team/edit.php';

        return $rs;
    } 
    


    private function __default()
    {
        $rs['data'] = '';
        $rs['view'] = 'app/views/404.php';

        return $rs;
    }
}