<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){

if($ns_id != "N/A" && $ns_name != "N/A"){
if(!is_dir("cms-needed/sites/$ns_id")){
                    mkdir("cms-needed/sites/$ns_id", 0777);
                    //content.php
                    file_put_contents("cms-needed/sites/$ns_id/content.php", 'Neue Seite');
                    //sidebar.php
                    file_put_contents("cms-needed/sites/$ns_id/sidebar.php", $ns_name);
                    //vars.php
                    file_put_contents("cms-needed/sites/$ns_id/vars.php","<?php \$ts_title = '$ns_name'; \$ts_menu = $ns_menu; ?>");
                    //index.php
                    file_put_contents("cms-needed/sites/$ns_id/index.php", '<div id="sidebar"><h1><?php include_once("sidebar.php") ?></h1></div><div id="main"><?php include_once("cms-needed/parsedown-master/Parsedown.php");$Parsedown = new Parsedown();echo $Parsedown->text(file_get_contents("cms-needed/sites/$file/content.php")); ?></div>');
                    //Hauptdatei
                    file_put_contents("$ns_id.php", '<?php require_once("cms-needed/file.php") ?>');
                    echo("Die seite wurde erfolgreich erstellt! <a href=\"interface.php?type=editsite&edit=$ns_id\">Seite bearbeiten</a>");
                }else {echo("Es gibt bereits eine Seite mit dieser ID! Bitte wähle eine andere ID!");}}else{echo("<p>Es müssen Name und ID angegeben werden! Bitte wiederholen!</p><a href=\"interface.php?type=newsite\">Hier gehts zurück!</a>");}
}else{
    echo("Sie sind nicht berechtigt diese Seite zu betreten!");} ?>