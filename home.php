<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=php_exam_db;charset=utf8", "root", "");
$articles = $bdd->query('SELECT * FROM f_topics ORDER BY date_heure_creation DESC');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./views/view.css" />
</head>

<body>
    <h1 class="center" >Accueil</h1>
    <button class="favorite styled" type="button" ><a href="./login.php" class="style">Connexion</a> </button>
    <button class="favorite styled" type="button" ><a href="./redaction.php" class="style">Rédiger un article</a> </button>
    <button class="favorite styled" type="button" ><a href="./account.php" class="style">Votre compte</a> </button>
    <br>
    <h1>Aritcles Publiés</h1>
    <ul>
        <?php while ($a = $articles->fetch()) { ?>
            <li><a href="details.php?id=<?= $a['id'] ?>"><?= $a['sujet'] ?></a> | <a href="redaction.php?edit=<?= $a['id'] ?>">Modifier</a> | <a href="supprimer.php?id=<?= $a['id'] ?>">Supprimer</a></li>
        <?php } ?>

        <ul>
</body>

</html>