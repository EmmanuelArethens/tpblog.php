<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1> MN sup R FORMULèRE </h1>

    <form action="create1.php" method="post">
        <input type="text" name="tit">
        <textarea name="comment"></textarea>
        <button>Submit</button>
    </form>

    <?php 
include('listing.php');
?>


</body>

</html>