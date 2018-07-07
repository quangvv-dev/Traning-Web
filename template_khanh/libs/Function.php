<?php

if (!file_exists('upload_file')) {
    function upload_file ($file, $path) {
        $errors= array();
        $file_name = $file['name'];
        $file_size = $file['size'];
        $file_tmp = $file['tmp_name'];
        $file_ext = strtolower(end(explode('.',$file['name'])));

        $expensions = array("jpeg","jpg","png", "gif");

        if(in_array($file_ext, $expensions) === false){
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        if($file_size > 2097152){
            $errors[] = 'File size must be excately 2 MB';
        }

        if (!is_dir($path)) {
            mkdir($path, '0777', true);
        }

        if(empty($errors)){
            if (move_uploaded_file($file_tmp, $path . $file_name)) {
                return $file_name;
            } else {
                return -1;
            }
        }else{
            return $errors;
        }
    }
}