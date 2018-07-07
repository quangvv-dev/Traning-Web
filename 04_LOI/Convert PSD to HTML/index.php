<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONVERT PSD TO HTML VINSOFTS</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/lazyload.min.js"></script>
</head>
<body>
<div class="wrapper">
    <style>
        <?php
            $getabovecss = file_get_contents("css/above.css");
            echo $getabovecss;
        ?>
    </style>
<?php
    $getHeader = file_get_contents("layouts/header.php");
    $getAbove_content = file_get_contents("layouts/above-content.php");
    $getBelow_content = file_get_contents("layouts/main-content.php");
    $getFooter = file_get_contents("layouts/footer.php");
    echo $getHeader;
    echo $getAbove_content;
    include ('layouts/main-content.php')
?>
</div>
<script>
    new lazyload();
</script>
</body>
</html>