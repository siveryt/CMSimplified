<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
    <?php include("cms-needed/sites/$edit/vars.php"); ?>
                <form action="interface.php?type=savefile" method=POST>
                    <input type=hidden name="sf" value=<?php echo($edit)?> >
                    <p><?php echo $lang_editsite_content?> (<a href=https://www.heise.de/mac-and-i/downloads/65/1/1/6/7/1/0/3/Markdown-CheatSheet-Deutsch.pdf>MD</a> - Powered by <a href="https://parsedown.org/">Parsedown</a>): </p>
                    <textarea id="content" name="sf_content" rows=20><?php readfile("cms-needed/sites/$edit/content.php"); ?></textarea>
                    <p/>
                    <details>
                    <summary><?php echo $lang_editsite_advanced_settings ?></summary>
                        <table>
                            <tr><td><abbr title="<?php echo $lang_editsite_title_abbr ?>"><?php echo $lang_title ?> &nbsp;</abbr></td><td><input name=sf_title type=readonly value="<?php echo($ts_title)?>"></td></tr>
                            <tr><td><abbr title="<?php echo $lang_editsite_menu_abbr ?>"><?php echo $lang_menu ?> &nbsp;</abbr></td><td><label for=yes><?php echo $lang_yes ?></label><input value="yes" type=radio id=yes name=sf_menu <?php if($ts_menu == "yes"){ echo("checked");}?> ><label for=no>&nbsp; <?php echo $lang_no ?></label><input value="no" type=radio id=no name=sf_menu <?php if($ts_menu == "no"){ echo("checked");}?> ></td></tr>
                            <tr><td><abbr title="<?php echo $lang_editsite_sidebar_abbr ?>"><?php echo $lang_sidebar ?> &nbsp;</abbr></td><td><input type=text name=sf_sidebar value="<?php include_once("cms-needed/sites/$edit/sidebar.php"); ?>"></td></tr>
                            
                        </table>
                    </details>
                    <br/>
                    <button type=submit><?php echo $lang_save ?></button>
                </form>
                <br/>
                <hr>
                <br/>
        <?php if($edit != "index"){?><button onclick="window.location = 'interface.php?type=deletesite&ds=<?php echo($edit);?>';"><?php echo $lang_editsite_deletesite ?></button><?php }else{echo("$lang_editsite_nodelindex");} ?>
        <?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>