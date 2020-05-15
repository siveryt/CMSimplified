<?php error_reporting(E_ERROR | E_PARSE);
if($_SESSION[succes]){ ?>

<?php if($na_oldpassword == $env_password){

    if($na_newpassword == $na_newpassword2){

        echo($na_newpassword);
        file_put_contents("cms-needed/envvars.php", "<?php \$env_footertext = \"$env_footertext\"; \$env_username = \"$na_newusername\"; \$env_password = '$na_newpassword'; \$env_title = \"$env_title\";?>");

    }else {echo("Die beiden Passwörter waren Falsch!");}

}else {echo("Das Passwort war Falsch! Versuchen sie es erneut!");} ?>

<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>