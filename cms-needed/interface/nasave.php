<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

    <?php file_put_contents("cms-needed/envvars.php", "<?php \$env_footertext = \"$na_footertext\"; \$env_username = \"$env_username\"; \$env_password = '$env_password'; \$env_title = \"$na_title\";?>"); ?>
    <p>Alle änderungen wurden gespeichert. </p><a href=interface.php>Zurück</a>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>