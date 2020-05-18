<?php error_reporting(E_ERROR | E_PARSE);
if($_SESSION[succes]){ ?>
<p><?php echo $lang_na_general_settings ?>:</p>

    <form action="interface.php?type=nasave" method="POST">
    <table>
    
    <tr><td><label for=na_title><abbr title="<?php echo $lang_na_title_abbr ?>"><?php echo $lang_na_title ?></abbr></label></td><td><input type=text id=na_title size=50 name=na_title value="<?php echo($env_title); ?>"></td></tr>
    <tr><td><label for=na_footertext><abbr title="<?php echo $lang_na_footertext_abbr ?>"><?php echo $lang_na_footertext ?></abbr></label></td><td><input type=text id=na_footertext name=na_footertext size=50 value="<?php echo($env_footertext) ?>" ></td></tr>
    <tr><td><label for=na_adbanner><abbr title="<?php echo $lang_na_adbanner_abbr ?>"><?php echo $lang_na_adbanner ?></abbr></label></td><td><input type=text id=na_adbanner name=na_adbanner size=50 value="<?php echo($env_ad) ?>" ></td></tr>
    <tr><td></td><td><button type=submit><?php echo $lang_save ?></button></td></tr></form>
    <tr><td>&nbsp;</td></tr>
    <form enctype=multipart/form-data action="interface.php?type=nalogo" method="POST"><tr><td><label for=logo><abbr title="<?php echo $lang_na_logo_abbr ?>"><?php echo $lang_na_logo ?>(.png)</abbr></label></td><td><input name=na_logo id=logo type=file value="Logo auswählen"><button class=right type=submit><?php echo $lang_upload ?></button></td></tr></form>
    <form enctype=multipart/form-data action="interface.php?type=naicon" method="POST"><tr><td><label for=icon><abbr title="<?php echo $lang_na_icon_abbr ?>"><?php echo $lang_na_icon ?> (.ico)</abbr></label></td><td><input name=na_icon id=icon type=file value="Icon auswählen"><button class=right type=submit><?php echo $lang_upload ?></button></td></tr></form>
    </table>

    <hr>
    <br/>
    <?php require_once("cms-needed/phpFileTree/php_file_tree.php");
    echo("<p><abbr title='$lang_na_upload_abbr \"files/\"'>$lang_na_upload (Powered by <a href=https://www.abeautifulsite.net/php-file-tree>phpFileTree</a>)</abbr></p>");
    echo(php_file_tree("files/", "interface.php?type=napreview&link=[link]")); ?>
    <form method=POST enctype=multipart/form-data action="interface.php?type=upload"><input name="file" type=file><button type=submit><?php echo $lang_upload  ?></button></form>
    <br/>
    <hr>
    <br/>
    <form action=interface.php?type=language method=POST>
    <label for=lang>Language: </label>
    <select id=lang name=lang>
    <?php 
    if ($handle = opendir('cms-needed/language')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                include("cms-needed/language/$entry");
                echo "<option value=\"$entry\">$language_name</option> <br/>";
            }
        }
        closedir($handle);
    }
    
    ?>
    </select>
    <button type=submit>Change</button>
    </form>
    <hr>
    <br/>
    <?php require_once("cms-needed/envvars.php"); include("cms-needed/language/$env_lang");  ?>
    <p><?php echo $lang_na_updates ?> <a href=cms.sivery.de>cmsupdate.sivery.de</a></p>

    <br/>
    <hr>

    <form action="interface.php?type=napw" method="POST">
    
    <table>
            <p><?php echo $lang_na_login ?>:</p>
            <tr><td><label for=na_oldpassword><?php echo $lang_na_oldpassword ?></label></td><td><input type=password id=na_oldpassword name=na_oldpassword></td></tr>
            <tr><td><lable for=na_newusername><?php echo $lang_na_newusername ?></lable></td><td><input type=text id=na_newusername name=na_newusername></td></tr>
            <tr><td><lable for=na_newpassword><?php echo $lang_na_newpassword ?></lable></td><td><input type=password id=na_newpassword name=na_newpassword></td></tr>
            <tr><td><lable for=na_newpassword2><?php echo $lang_na_newpassword2 ?></lable></td><td><input type=password id=na_newpassword2 name=na_newpassword2></td></tr>
            <tr><td></td><td><button type=submit><?php echo $lang_save ?></button></td></tr>

    </table>

    </form>

    </table>
    <?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>