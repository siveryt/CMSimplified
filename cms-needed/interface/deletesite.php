<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

<?php if($ds != "N/A"){ include_once("cms-needed/sites/$ds/vars.php"); if($confirm == "N/A"){
echo("Bist du dir sicher, dass du $ts_title löschen willst? Dies kann nicht mehr rückgängig gemacht werden!"); ?>
<br/><br/>
<button onclick="window.location = 'interface.php?type=deletesite&ds=<?php echo($ds);?>&confirm=true';" >Ich bin mir sicher! Seite löschen!</button>
<button onclick="window.location = 'interface.php?type=editsite&edit=<?php echo($ds);?>';">Ich habs mir doch anders überlegt.</button>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php }else{

    unlink("cms-needed/sites/$ds/content.php");
    unlink("cms-needed/sites/$ds/index.php");
    unlink("cms-needed/sites/$ds/sidebar.php");
    unlink("cms-needed/sites/$ds/vars.php");
    unlink("$ds.php");
    rmdir("cms-needed/sites/$ds");
    echo("$ds wurde gelöscht!<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>");

} ?>
<?php }}else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");} ?>