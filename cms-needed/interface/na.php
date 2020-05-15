<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<p>Allgemeine Einstellungen:</p>

    <form action="interface.php?type=nasave" method="POST">
    <table>
    
    <tr><td><label for=na_title><abbr title="Der Text, der im Browser steht und er Text der im Banner angezeigt wird.">Anzeigename</abbr></label></td><td><input type=text id=na_title size=50 name=na_title value="<?php echo($env_title); ?>"></td></tr>
    <tr><td><label for=na_footertext><abbr title="Der text, der am Ende der Seite steht. (HTML)">Footertext</abbr></label></td><td><input type=text id=na_footertext name=na_footertext size=50 value="<?php echo($env_footertext) ?>" ></td></tr>
    <tr><td></td><td><button type=submit>Speichern!</button></td></tr></form>
    <tr><td>&nbsp;</td></tr>
    <form enctype=multipart/form-data action="interface.php?type=nalogo" method="POST"><tr><td><label for=logo><abbr title="Das Logo, welches oben am Banner/Header angezeigt wird">Logo(.png)</abbr></label></td><td><input name=na_logo id=logo type=file value="Logo auswählen"><button class=right type=submit>Hochladen</button></td></tr></form>
    <form enctype=multipart/form-data action="interface.php?type=naicon" method="POST"><tr><td><label for=logo><abbr title="Das Icon, welches am Tab angezeigt wird">Tabicon(.ico)</abbr></label></td><td><input name=na_logo id=logo type=file value="Icon auswählen"><button class=right type=submit>Hochladen</button></td></tr></form>
    </table>

    <hr>
    <br/>
    <?php require_once("cms-needed/phpFileTree/php_file_tree.php");
    echo("<p><abbr title='Du kannst diese Dateien mit MD einbinden! Mache aber davor noch ein \"files/\"'>Alle Dateien, die du verwenden kannst:</abbr></p>");
    echo(php_file_tree("files/", "interface.php?type=napreview&link=[link]")); ?>
    <form method=POST enctype=multipart/form-data action="interface.php?type=upload"><input name="file" type=file><button type=submit>Hochladen!</button></form>
    <br/>
    <hr>
    <br/>

    <p>Suche nach neuen updates auf <a href=cmsupdate.sivery.de>cmsupdate.sivery.de</a></p>

    <br/>
    <hr>

    <form action="interface.php?type=napw" method="POST">
    
    <table>
            <p>Einloggdaten ändern:</p>
            <tr><td><label for=na_oldpassword>Aktuelles Passwort</label></td><td><input type=password id=na_oldpassword name=na_oldpassword></td></tr>
            <tr><td><lable for=na_newusername>Neuer Benutzername</lable></td><td><input type=text id=na_newusername name=na_newusername></td></tr>
            <tr><td><lable for=na_newpassword>Neus Passwort</lable></td><td><input type=password id=na_newpassword name=na_newpassword></td></tr>
            <tr><td><lable for=na_newpassword2>Neus Passwort wiederholen</lable></td><td><input type=password id=na_newpassword2 name=na_newpassword2></td></tr>
            <tr><td></td><td><button type=submit>Festlegen!</button></td></tr>

    </table>

    </form>

    </table>
<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>