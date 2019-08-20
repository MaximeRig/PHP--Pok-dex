<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_SERVER['BASE_URI']; ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo $_SERVER['BASE_URI']; ?>/css/style.css">
    <title><?php echo $viewArr['title'];?></title>
</head>
<body>

    <header class="header">
        <h1 class="header__title"><a href="<?php echo $router->generate('home'); ?>">Pokédex</a></h1>
        <nav class="header__nav">
            <ul class="header__nav--list">
                <li class="header__nav--items"><a href="#">Liste</a></li>
                <li class="header__nav--items"><a href="<?php echo $router->generate('types'); ?>">Types</a></li>
            </ul>
        </nav>
    </header>