<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
    <form action="interface.php?type=createsite" method="POST">
            <table>
                <tr><td><?php echo $lang_newsite_id ?></td><td><input id="ns_id" name="ns_id" type=text></td></tr>
                <tr><td><?php echo $lang_newsite_displayname ?></td><td><input id="ns_name" name="ns_name" type=text></td></tr>
                <tr><td><?php echo $lang_newsite_menustrip ?></td><td><label for=yes><?php echo $lang_yes ?></label><input id="yes" value="yes" name="ns_menu" type=radio checked><label for=no><?php echo $lang_no ?></label><input id="no" value="no" name="ns_menu" type=radio></td></tr>
                <tr><td></td><td><button type=submit><?php echo $lang_newsite_create ?></button></td></tr>
            </table>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
            </form>
            <?php }else{require_once("../envvars.php"); require_once("../language/$env_lang");echo ("<p>$lang_interface_norights</p>");}  ?>