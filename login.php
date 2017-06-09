
<?php 
    if(isset($_POST['userr']) 
        && isset($_POST['password'])){
        $pseudo = $_POST['userr'];
        $mdp = md5($_POST['password']);
        if(is_file('utilisateur/'.$pseudo.'.txt')){
            $contenu = file_get_contents('utilisateur/'.$pseudo.'.txt');
            if($contenu == $mdp) {
                session_start();
                $_SESSION['utilisateur'] = $pseudo;
                echo 'vous êtes bien connecté.e';
            }else{
                echo 'l\'utilisateur ou le mdp n\'existe pas';
            }
            
        } else {
            echo 'l\'utilisateur ou le mdp n\'existe pas';
        }
    }

echo "<a href='index.php'> retour a l'index </a>";

    ?>