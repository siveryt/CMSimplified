<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

<?php include_once("cms-needed/visits.php") ?>
    <p><?php echo $lang_visitors_total ?>: <?php echo $visit_totalcount?></p>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

<?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>