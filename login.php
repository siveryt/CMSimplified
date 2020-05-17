<?php
$file = str_replace(".php", "",basename($_SERVER['PHP_SELF']));
require_once("cms-needed/envvars.php");

if (isset($_POST["submit"])){

    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $env_username && $password == $env_password){

        $_SESSION["succes"] = true;
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: interface.php");
        exit;

    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php echo($env_title)?> - Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="logo.png" rel="SHORTCUT ICON">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="container">
        
        
        
    <?php require_once("cms-needed/const/header-menu.php")?>
    <!-- Menu & Head -->

    
    <div id="sidebar">
            <h1>
                Login
            </h1>
        </div>

        <div id="main">

            <form action"" method=POST>
            
                <table>
                
                    <tr><td><label for="username"><?php echo $lang_username ?>: &nbsp;</label></td><td><input type="text" name="username" id="username" placeholder="<?php echo $lang_username ?>" length=20></td></tr>
                    <tr><td><label for="password"><?php echo $lang_password ?>: &nbsp;</label></td><td><input type="password" name="password" id="password" placeholder="<?php echo $lang_password ?>" length=20></td></tr>
                    <tr><td></td><th><button name="submit" type=submit ><?php echo $lang_login ?></button></th></tr>
                
                </table>
            
            </form>

            <?php if (isset($_POST["submit"])){

                echo("<p>Benutzername oder Passwort falsch!</p>");

            }?>

        </div>

    <?php include_once("cms-needed/const/footer.php")?>
    <!-- Footer -->

    </div>
</body>

</html>