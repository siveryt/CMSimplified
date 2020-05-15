<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
    <?php include("cms-needed/sites/$edit/vars.php"); ?>
                <form action="interface.php?type=savefile" method=POST>
                    <input type=hidden name="sf" value=<?php echo($edit)?> >
                    <p>Inhalt der Seite (<a href=https://www.heise.de/mac-and-i/downloads/65/1/1/6/7/1/0/3/Markdown-CheatSheet-Deutsch.pdf>MD</a> - Powered by <a href="https://parsedown.org/">Parsedown</a>): </p>
                    <textarea id="content" name="sf_content" rows=20><?php readfile("cms-needed/sites/$edit/content.php"); ?></textarea>
                    <p/>
                    <details>
                    <summary>Erweiterte Einstellungen</summary>
                        <table>
                            <tr><td><abbr title="Der Titel wird im Tab angezeigt und er steht im Menüband.">Titel &nbsp;</abbr></td><td><input name=sf_title type=readonly value="<?php echo($ts_title)?>"></td></tr>
                            <tr><td><abbr title="Soll die Seite im Menüband sichtbar sein?">Menüleiste &nbsp;</abbr></td><td><label for=yes>Ja</label><input value="yes" type=radio id=yes name=sf_menu <?php if($ts_menu == "yes"){ echo("checked");}?> ><label for=no>&nbsp; Nein</label><input value="no" type=radio id=no name=sf_menu <?php if($ts_menu == "no"){ echo("checked");}?> ></td></tr>
                            <tr><td><abbr title="Sidebar ist der Text der links an der Seite steht. HTML erlaubt">Sidebar &nbsp;</abbr></td><td><input type=text name=sf_sidebar value="<?php include_once("cms-needed/sites/$edit/sidebar.php"); ?>"></td></tr>
                            
                        </table>
                    </details>
                    <br/>
                    <button type=submit>Speichern!</button>
                </form>
                <br/>
                <hr>
                <br/>
        <?php if($edit != "index"){?><button onclick="window.location = 'interface.php?type=deletesite&ds=<?php echo($edit);?>';" value="Seite löschen!">Seite löschen!</button><?php }else{echo("Die Seite index kann nichtgelöscht werden!");} ?>
<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");} ?>