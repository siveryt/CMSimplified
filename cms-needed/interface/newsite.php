<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
    <form action="interface.php?type=createsite" method="POST">
            <table>
                <tr><td>ID</td><td><input id="ns_id" name="ns_id" type=text></td></tr>
                <tr><td>Name</td><td><input id="ns_name" name="ns_name" type=text></td></tr>
                <tr><td>Menüleiste</td><td><label for=yes>Ja</label><input id="yes" value="yes" name="ns_menu" type=radio checked><label for=no>Nein</label><input id="no" value="no" name="ns_menu" type=radio></td></tr>
                <tr><td></td><td><button type=submit>Seite erstellen!</button></td></tr>
            </table>
            </form>
<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");} ?>