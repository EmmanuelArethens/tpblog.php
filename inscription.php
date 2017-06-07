<?php
if(isset($_POST['user']) 
    && isset($_POST['mdp'])){
    $pseudo = $_POST['user'];
    $mdp = $_POST['mdp'];
    $crypt = md5($mdp);
    if(!is_dir("utilisateur")) {
        mkdir("utilisateur");
    }
    $new_file = fopen("utilisateur/".$pseudo.".txt", "w");
    fwrite($new_file, $crypt);
    fclose($new_file);
}
?>