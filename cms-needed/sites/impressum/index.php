<div id="sidebar">
            <h1>
                <?php include_once("cms-needed/parsedown-master/Parsedown.php");
            $Parsedown = new Parsedown();
            echo $Parsedown->text(file_get_contents("cms-needed/sites/$file/sidebar.php")); ?>
                <!-- Sidebar -->
            </h1>
        </div>

        <div id="main">

            <?php 
            include_once("cms-needed/parsedown-master/Parsedown.php");
            $Parsedown = new Parsedown();
            echo $Parsedown->text(file_get_contents("cms-needed/sites/$file/content.php")); ?>
            <!-- Inahlt -->

        </div>