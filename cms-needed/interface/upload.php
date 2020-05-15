<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<?php

move_uploaded_file($_FILES['file']['tmp_name'], 'files/'.$_FILES['file']['name']);?>
<p>Datei wurde hochgeladen. </p><a href=interface.php>Zurück</a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>