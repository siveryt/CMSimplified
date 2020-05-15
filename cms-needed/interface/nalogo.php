<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION[succes]){ ?>
<?php
$filename = $_FILES['na_logo']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if ($ext == "png") {
    move_uploaded_file($_FILES['na_logo']['tmp_name'], "logo.png");
    echo("Das ausgewählte Logo ist nun eingerichtet. Bitte gehe auf eine andere Seite, um es anzuschuaen. <a href=interface.php>Zurück</a>");
}else{

    echo("Das ausgewählte Logo ist nicht im .png Format! <a href=interface.php>Zurück</a>");

}

?>

<br/>
<br/>
<br/>
<br/>
<br/>

<?php }else{echo("Sie sind nicht berechtigt diese Seite zu betreten!");}  ?>