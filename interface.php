<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();
if ($_SESSION[succes]){
    $edit = isset($_GET["edit"]) ? $_GET["edit"] : "N/A";//editsite: Wenn eine Seite bearbeitet wird; savefile: Wenn eine seite gespeichert werden soll; 
    $type = isset($_GET["type"]) ? $_GET["type"] : "na";
    $ds = isset($_GET["ds"]) ? $_GET["ds"] : "N/A";
    $confirm = isset($_GET["confirm"]) ? $_GET["confirm"] : "N/A";
    $pre_file = isset($_GET["link"]) ? $_GET["link"] : "N/A";
    $sf_content = isset($_POST["sf_content"]) ? $_POST["sf_content"] : "N/A";
    $sf_title = isset($_POST["sf_title"]) ? $_POST["sf_title"] : "N/A";
    $sf_sidebar = isset($_POST["sf_sidebar"]) ? $_POST["sf_sidebar"] : "N/A";
    $sf_menu = isset($_POST["sf_menu"]) ? $_POST["sf_menu"] : "N/A";
    $sf = isset($_POST["sf"]) ? $_POST["sf"] : "N/A";
    $ns_id = isset($_POST["ns_id"]) ? $_POST["ns_id"] : "N/A";
    $ns_name = isset($_POST["ns_name"]) ? $_POST["ns_name"] : "N/A";
    $ns_menu = isset($_POST["ns_menu"]) ? $_POST["ns_menu"] : "N/A";
    $na_oldpassword = isset($_POST["na_oldpassword"]) ? $_POST["na_oldpassword"] : "N/A";
    $na_newusername = isset($_POST["na_newusername"]) ? $_POST["na_newusername"] : "N/A";
    $na_newpassword = isset($_POST["na_newpassword"]) ? $_POST["na_newpassword"] : "N/A";
    $na_newpassword2 = isset($_POST["na_newpassword2"]) ? $_POST["na_newpassword2"] : "N/A";
    $na_title = isset($_POST["na_title"]) ? $_POST["na_title"] : "N/A";
    $na_footertext = isset($_POST["na_footertext"]) ? $_POST["na_footertext"] : "N/A";
    $lang = isset($_POST["lang"]) ? $_POST["lang"] : "N/A";
    $na_ad = isset($_POST["na_adbanner"]) ? $_POST["na_adbanner"] : "";
    
    //echo($edit);
    //echo ($content);
    $id = str_replace(".php", "",basename($_SERVER['PHP_SELF']));
require_once("cms-needed/envvars.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo($env_title)?> - Editor</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="logo.png" rel="SHORTCUT ICON">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div id="container">
    <?php require_once("cms-needed/const/header-menu.php")?>
    <!-- Menu & Head -->
    <div id="sidebar">
                <h1>Editor</h1> <br/>
                <a href="interface.php"><b><?php echo $lang_setting ?></b></a><br/>
                <a href="interface.php?type=newsite"><b>&#43; <?php echo $lang_newsite ?></b></a><br/>
                <a href="interface.php?type=analytics"><b><?php echo $lang_analytics ?></b></a><br/>
                <?php
                if ($handle = opendir('cms-needed/sites')) {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            include("cms-needed/sites/$entry/vars.php");
                            echo "<abbr title=$entry><a href=\"interface.php?type=editsite&edit=$entry\">$ts_title</a></abbr> <br/>";
                        }
                    }
                    closedir($handle);
                }
                ?>
                <!-- Sidebar -->
        </div>
        <div id="main">


                <?php try {require_once("cms-needed/interface/$type.php");}
                catch (exception $e) {?>
    <p>Ein Fehler ist aufgetreten! Es wurde ein nicht bekanntes Attribut verwendet. Sie können dennoch normal weiterarbeiten. Bitte wenden sie sich bei erneuten Fehlern an den Support.</p>
                <p>Hier alle Attribute:</p>
                <?php 
                error_reporting(E_ALL);
                var_dump($_POST); 
                echo("<br/>$edit<br/>");
                echo("$type<br/>");
                echo("$sf_content<br/>");
                echo("$sf_title<br/>");
                echo("$sf_sidebar<br/>");
                echo("$sf_menu<br/>");
                echo("$sf<br/>");
                echo("$ns_id<br/>");
                echo("$ns_name<br/>");
                echo("$ns_menu<br/>");
                echo("$ds<br/>");
                echo("$confirm<br/>");
                echo("$na_oldpassword<br/>");
                echo("$na_newusername<br/>");
                echo("$na_newpassword<br/>");
                echo("$na_title<br/>");
                echo("$na_footertext<br/>");
                echo("<br/> $e")

                ?>
<?php } ?>

        </div>
    <!-- Inhalt -->
    <?php include_once("cms-needed/const/footer.php")?>
    <!-- Footer -->
    </div>
</body>
</html>
<?php }else {?> <a href="index.php">Sie müssen sich erst einloggen!</a> <?php }?>