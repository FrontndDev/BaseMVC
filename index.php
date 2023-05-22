<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();
$articles = \App\Models\Article::findAll();
$article = \App\Models\Article::findById(1);
$last_three_articles = \App\Models\Article::getLastThreeRecords();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .wrapper {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            padding: 25px;
        }

        .wrapper > div {
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div>
        <h1>Users</h1>

        <?php foreach ($users as $user): ?>
        <div class="content">
            <h4><?=$user->id?>.  <?=$user->name?></h4>
            <p>email: <?=$user->email?></p>
        </div>

        <?php endforeach; ?>
    </div>
    <div>
        <h1>Articles</h1>

        <?php foreach ($articles as $item): ?>
        <div class="content">
            <a href="article.php?id=<?=$item->id?>"><?=$item->title?></a>
        </div>
        <?php endforeach; ?>
    </div>

    <div>
        <h1>Article By Id</h1>

        <div class="content">
            <?=var_dump($article)?>
        </div>
    </div>

    <div>
        <h1>Last Three Articles</h1>

        <div class="content">
            <?=var_dump($last_three_articles)?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
