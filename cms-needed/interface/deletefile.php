<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

<?php unlink("$pre_file");
echo("<p>$pre_file $lang_deletefile_return</p> <a href=interface.php>$lang_back</a><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>");?>

<?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>