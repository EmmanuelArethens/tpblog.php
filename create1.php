<?php  
$title = $_POST['tit'];
$comment = $_POST['comment'];
if(!is_dir("textes")){mkdir("textes");
$open = fopen("textes/".$title.".txt", "w");
fwrite($open,$comment);
fclose($open);}
else {
    $open = fopen("textes/".$title.".txt", "w");
fwrite($open,$comment);
fclose($open);

}

echo '<p>gg wp ta fé un fichié txt dan un dossié sa tauré pri 2 sec de faire sa avec linterfasse de tn pc</p>';
 
?>