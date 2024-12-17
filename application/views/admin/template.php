<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <?php require_once('layout/_css.php');?>

</head>

<body>
    <!-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> -->

    <div class="main-wrapper">

    <?php require_once('layout/_sidebar.php');?>


        <div class="page-wrapper">
            <div class="content">             
                    
                   <?php echo $contents ?>

            </div>
        </div>
    </div>

    <?php require_once('layout/_js.php');?>

</body>

</html>