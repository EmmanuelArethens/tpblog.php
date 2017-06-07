<?php

   $files = scandir("textes");
    foreach($files as $file) {
        if (is_dir($file)) {
            continue;
        }
        echo '<h3>'.basename($file, ".txt").'</h3>';
        $content = file_get_contents('textes/'.$file);
        echo '<p>'.$content.'</p>'.'<form action="delete.php" method="GET"><input type="submit" value="delete">
        <input type="hidden" name="paul" value="'.$file.'"></form>';
        ?>
        <form action="modify.php" method="post">
        <input type="hidden" value="<?php echo basename($file, ".txt"); ?>" name="titi">
        <input type="submit" value="modif">
        </form>
        <?php
    }



?>