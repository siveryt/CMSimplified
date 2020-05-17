<?php require_once("cms-needed/envvars.php"); 
require_once("cms-needed/language/$env_lang");
    ?>
    <div id="header"> 
            <p>
                <a href="index.php"><img alt="<?php echo $lang_404 ?>" src="logo.png" style="width: 64px; height: 64px;"> &nbsp; <?php echo($env_title) ?> </a> 
                    
            </p>
                
        </div>
        <div id="menu">
            
            <?php if ($handle = opendir('cms-needed/sites')) {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            include("cms-needed/sites/$entry/vars.php");
                            if($ts_menu == "yes"){
                            echo "<a href=\"$entry.php\">$ts_title</a>        ";
                        }
                        }
                    }
                    closedir($handle);
                }?>
            <a href="login.php"><b>Login</b></a>        
    	</div>
