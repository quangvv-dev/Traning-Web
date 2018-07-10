<?php
ob_start();

require_once 'server.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>">
    <title>Gentelella Alela! | </title>

    <?php require_once 'app/views/parterial/style.php' ?>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <!--header-->
                <?php require_once 'app/views/parterial/header.php' ?>
                <!--/header-->

                <br />

                <!-- sidebar menu -->
                <?php require_once 'app/views/parterial/sidebar.php' ?>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <?php require_once 'app/views/parterial/top-nav.php' ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?= $content ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require_once  'app/views/parterial/footer.php' ?>
        <!-- /footer content -->
    </div>
</div>
<?php require_once  'app/views/parterial/script.php' ?>
</body>
</html>


<?php
ob_end_flush();
?>
