<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<?php echo("$lang_confirmdeletefile[0]$pre_file$lang_confirmdeletefile[1]"); ?>
<br/>
<br/>
<?php $link = str_replace(' ', '+', $pre_file); ?>
<button onclick="window.location = 'interface.php?type=deletefile&link=<?php echo(str_replace(' ', '+', $pre_file));?>&confirm=true';" ><?php echo($lang_confirmdeletefile_confirm); ?></button>
<button onclick="window.location = 'interface.php?type=napreview&link=<?php echo($pre_file);?>';"><?php echo($lang_confrimdeletefile_no); ?></button>
<br/>
    <br/>
    <br/>
    <br/>

    <?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>