<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

<?php unlink("$pre_file");
echo("<p>$pre_file wurde gelöscht!</p> <a href=interface.php>Zurück</a><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>");?>

<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>