<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
    
    <?php try{require_once("cms-update.sivery.de/1.1.cmsupdate");}catch(exception $e){die($lang_nonewversion);} ?>

<?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>