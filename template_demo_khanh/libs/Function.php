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

if (!file_exists('delete_file')) {
    function delete_file ($filePath) {
        if (file_exists($filePath)) {
            
            chdir($filePath); // Comment this out if you are on the same folder
            chown($filePath, 777); //Insert an Invalid UserId to set to Nobody Owner; for instance 777
            $do = unlink($filePath);

            return $do;
        }
    }
}