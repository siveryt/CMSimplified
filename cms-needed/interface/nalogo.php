<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<?php
$filename = $_FILES['na_logo']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if ($ext == "png") {
    move_uploaded_file($_FILES['na_logo']['tmp_name'], "logo.png");
    echo("$lang_logo_succes <a href=interface.php>Zurück</a>");
}else{

    echo("$lang_logo_nopng <a href=interface.php>Zurück</a>");

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