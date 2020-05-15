<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

    <?php try{require_once("cms-update.sivery.de/1.1.cmsupdate");}catch(exception $e){die("Es ist noch keine neue Version verfügbar!");} ?>

<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>