<?php

   $files = scandir("textes");
    foreach($files as $file) {
        if (is_dir($file)) {
            continue;
        }
        echo '<h2>'.basename($file, ".txt").'</h2>';
        $content = file_get_contents('textes/'.$file);
        echo '<p>'.$content.'</p>'.'<form action="delete.php" method="GET"><input type="submit" value="delete">
        <input type="hidden" name="paul" value="'.$file.'"></form>';
    }

?>