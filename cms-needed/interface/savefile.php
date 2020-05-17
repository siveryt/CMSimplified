<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){

//file_put_contents("cms-needed/sites/$edit/content.php", $_POST["content"]);
file_put_contents("cms-needed/sites/$sf/content.php", $sf_content);
file_put_contents("cms-needed/sites/$sf/sidebar.php", $sf_sidebar);
file_put_contents("cms-needed/sites/$sf/vars.php", "<?php \$ts_title = '$sf_title'; \$ts_menu = '$sf_menu'; ?>");
echo("$lang_savefile_result <b>$lang_savefile_noreload</b></br><br/> <a href=\"interface.php\">$lang_back</a><br/><br/><br/><br/><br/><br/>");

?><?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>