<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

<?php if($ds != "N/A"){ include_once("cms-needed/sites/$ds/vars.php"); if($confirm == "N/A"){
echo("$lang_deletesite_ask[0]$ts_title$lang_deletesite_ask[1]"); ?>
<br/><br/>
<button onclick="window.location = 'interface.php?type=deletesite&ds=<?php echo($ds);?>&confirm=true';" ><?php echo $lang_deletesite_confirm ?></button>
<button onclick="window.location = 'interface.php?type=editsite&edit=<?php echo($ds);?>';"><?php echo $lang_deletesite_no ?></button>
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
    echo("$ds $lang_deletesite_return <a href=interface.php>$lang_back</a><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>");

} ?>
<?php }}else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>