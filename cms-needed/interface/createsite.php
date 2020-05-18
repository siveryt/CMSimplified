<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){

if($ns_id != "" && $ns_name != ""){
if(!is_dir("cms-needed/sites/$ns_id")){
                    mkdir("cms-needed/sites/$ns_id", 0777);
                    //content.php
                    file_put_contents("cms-needed/sites/$ns_id/content.php", '');
                    //sidebar.php
                    file_put_contents("cms-needed/sites/$ns_id/sidebar.php", $ns_name);
                    //vars.php
                    file_put_contents("cms-needed/sites/$ns_id/vars.php","<?php \$ts_title = '$ns_name'; \$ts_menu = $ns_menu; ?>");
                    //index.php
                    file_put_contents("cms-needed/sites/$ns_id/index.php", "<div id=\"sidebar\"><h1><?php include_once(\"cms-needed/parsedown-master/Parsedown.php\");\$Parsedown = new Parsedown();echo \$Parsedown->text(file_get_contents(\"cms-needed/sites/\$file/sidebar.php\")); ?><!-- Sidebar --></h1></div><div id=\"main\"><?php include_once(\"cms-needed/parsedown-master/Parsedown.php\");\$Parsedown = new Parsedown();echo \$Parsedown->text(file_get_contents(\"cms-needed/sites/\$file/content.php\")); ?><!-- Inahlt --></div>");
                    //Hauptdatei
                    file_put_contents("$ns_id.php", '<?php require_once("cms-needed/file.php") ?>');
                    echo("$lang_createsite_succes  <a href=\"interface.php?type=editsite&edit=$ns_id\">$lang_createsite_editsite</a><br/><br/><br/><br/><br/>");
                }else {echo("<p>$lang_createsite_alreadythere</p> <a href=interface.php?type=newsite>$lang_back</a><br/><br/><br/><br/><br/>");}}else{echo("<p>$lang_createsite_not</p><a href=\"interface.php?type=newsite\">$lang_back</a><br/><br/><br/><br/><br/>");}
                ?><?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>