             <?php
                    if(isset($_POST['submit'])){
                     //   upload anh
                        require_once"upload.php";
                        $name      = $_POST['txtName'];
                        $des       = $_POST['txtDes'];
                        $leader    = $_POST['txtLeader'];
                        $id        = $_GET['id'];
                        $imgold    = $_POST['imgold'];
                    // xu ly upload
                       // var_dump($name);
                        $path      = "./images/".$imgold;
                        $up        = move_uploaded_file($tmp_name,$path);
                    //end xu ly upload
                     

                        $update    = $teams->updateOne(['_id'=> new Mongodb\BSON\ObjectId($id)],['$set'=>['name'=>$name,'description'=>$des,'logo'=>$imgold,'leader_id'=>$leader]]);
                           

// PHP permanent URL redirection test                               
                        $url       = 'index.php';
                        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    

                    //     end upload

                    ?>