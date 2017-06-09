<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tripleuh blaug</title>
    <h1> MN sup R blaug Un terr naite </h1>
</head>

<body>
    <?php require('header.php');
    session_start(); 
    echo "utilisateur connecté :".$_SESSION['utilisateur'];
    
    echo "<form action='logout.php' method='post'> <input type='submit' value='logout'> </form>" ;?>
<section id="blabla">
<h1> fabriker 1 post </h1>
    <form action="create1.php" method="post">
        <input type="text" name="tit">
        <textarea name="comment"></textarea>
        <input type="submit" value="fabrikati°">
    </form>
</section>

    <?php 
include('listing.php');
?>


</body>

</html>