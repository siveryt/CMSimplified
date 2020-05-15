<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<?php echo("Bist du dir sicher, dass du $pre_file löschen willst? Dies kann nicht mehr rückgängig gemacht werden!"); ?>
<br/>
<br/>
<button onclick="window.location = 'interface.php?type=deletefile&link=<?php echo($pre_file);?>&confirm=true';" >Ich bin mir sicher! Seite löschen!</button>
<button onclick="window.location = 'interface.php?type=napreview&link=<?php echo($pre_file);?>';">Ich habs mir doch anders überlegt.</button>
<br/>
    <br/>
    <br/>
    <br/>

<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");} ?>