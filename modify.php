<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tripleu blaug</title>
</head>

<body>

    <h1> MN sup R FORMULèRE </h1>
    <form action="create1.php" method="post">
        <input type="text" value="<?php
        $path = "textes/".$_POST['titi'].".txt";
        if(isset($path)){
            echo $_POST["titi"];
        }
        ?>" name="tit">
        <textarea name="comment"><?php 
        if(isset($path)){
            echo file_get_contents($path);
        }
        ?></textarea>
        <button>Submit</button>
    </form>




</body>

</html>