<?php   
$file = str_replace(".php", "",basename($_SERVER['PHP_SELF']));
require_once("cms-needed/envvars.php");
require_once("cms-needed/sites/$file/vars.php") ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php echo($env_title)?> - <?php echo ($ts_title) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="icon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="container">
             
    <?php require_once("cms-needed/const/header-menu.php")?>
    <!-- Menu & Head -->

    <?php include_once("cms-needed/sites/$file/index.php") ?>
    <!-- Inhalt -->

    <?php include_once("cms-needed/const/footer.php")?>
    <!-- Footer -->
    
</body>

</html>