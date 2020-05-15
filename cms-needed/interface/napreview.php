<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>

    <?php echo("<p><abbr title=\"$pre_file\">$pre_file:</abbr></p>");
    $info = pathinfo($pre_file);
    if ($info["extension"] == "png" || $info["extension"] == "jpg") { echo("<img src=$pre_file width=\"700\"> "); }else{
    ?><textarea rows=20 readonly><?php readfile($pre_file);?></textarea><?php } ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <form method=POST action=interface.php?type=confirmdeletefile&link=<?php echo($pre_file); ?>>
    <button type=submit>Datei löschen</button>
    </form>

<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>