<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<?php

move_uploaded_file($_FILES['file']['tmp_name'], 'files/'.$_FILES['file']['name']);?>
<p><?php echo $lang_upload_result ?> </p><a href=interface.php><?php echo $lang_back ?></a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>