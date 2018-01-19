<?php $page="home"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    <title>Responsivo</title>
</head>
<body>
    <div class="site-container">
        <?php include("inc/header.php"); ?>
        <main><h1>Home</h1></main>
        <p>Email: <?php print ($_POST["email"]); ?></p>
        <p>Senha: <?php print ($_POST["senha"]); ?></p>
        <p>Aceito: <?php print ($_POST["aceito"]); ?></p>
        <footer></footer>
    </div>
</body>
</html>
