<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();
$articles = \App\Models\Article::findAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .wrapper {
            display: flex;
            column-gap: 50px;
            padding: 25px;
        }

        .wrapper > div {
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div>
        <h1>Users</h1>

        <div class="content">
            <?=var_dump($users)?>
        </div>
    </div>
    <div>
        <h1>Articles</h1>

        <div class="content">
            <?=var_dump($articles)?>
        </div>
    </div>
</div>
</body>
</html>
