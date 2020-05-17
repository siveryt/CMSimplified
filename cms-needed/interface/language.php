<?php error_reporting(E_ERROR | E_PARSE);
if($_SESSION[succes]){ ?>

<?php file_put_contents("cms-needed/envvars.php", "<?php \$env_footertext = \"$env_footertext\"; \$env_username = \"$env_username\"; \$env_password = '$env_password'; \$env_title = \"$env_title\"; \$env_lang = \"$lang\"?>"); ?>
<p>New language has been set.</p><a href=interface.php><?php echo $lang_back ?></a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>