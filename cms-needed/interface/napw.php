<?php error_reporting(E_ERROR | E_PARSE);
if($_SESSION[succes]){ ?>

<?php if($na_oldpassword == $env_password){

    if($na_newpassword == $na_newpassword2){

        echo($na_newpassword);
        file_put_contents("cms-needed/envvars.php", "<?php \$env_footertext = \"$env_footertext\"; \$env_username = \"$na_newusername\"; \$env_password = '$na_newpassword'; \$env_title = \"$env_title\";  \$env_lang = \"$env_lang\";  \$env_ad = \"$env_ad\";?>");?>
        <p><?php echo $lang_pw_result ?> </p><a href=interface.php><?php echo $lang_back ?></a>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

    <?php }else {echo($lang_pw_nomatch);}

}else {echo($lang_pw_oldpwno);} ?>

<?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>