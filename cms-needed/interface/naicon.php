<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<?php
$filename = $_FILES['na_icon']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if ($ext == "ico") {
    move_uploaded_file($_FILES['na_logo']['tmp_name'], "icon.ico");
    echo("$lang_icon_succes <a href=interface.php>Zurück</a>");
}else{

    echo("$lang_icon_noico <a href=interface.php>$lang_back</a>");

}

?>

<br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>