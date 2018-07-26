<?php
    class Database{
        private $hostName    =  'localhost';
        private $userName   =   'root';
        private $passWD     =   '12344';
        private $dbName      =  'qlns_db';

        public function connect(){
            $connect = new mysqli($this->hostName,$this->userName,$this->passWD,$this->dbName);
            $connect->set_charset('utf8');
            if($connect->connect_errno){
                echo " Connect Database Fails ".mysqli_connect_error();
            }
            return $connect;
        }
    }
?>