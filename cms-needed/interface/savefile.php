<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){

//file_put_contents("cms-needed/sites/$edit/content.php", $_POST["content"]);
file_put_contents("cms-needed/sites/$sf/content.php", $sf_content);
file_put_contents("cms-needed/sites/$sf/sidebar.php", $sf_sidebar);
file_put_contents("cms-needed/sites/$sf/vars.php", "<?php \$ts_title = '$sf_title'; \$ts_menu = '$sf_menu'; ?>");
echo("Änderungen wurden gespeichert! <b>Seite nicht aktualisieren!</br><br/> <a href=\"interface.php\">Hauptseite</a><br/><br/><br/><br/><br/><br/>");

}else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");} ?>