<?php
    $this->isAdmin();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&subset=cyrillic-ext" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="<?=APP_ROOT?>/content/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="<?=APP_ROOT?>/content/scripts.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <div class="adminLogo">
           <a href="<?=APP_ROOT?>">
               Админ панел<br>
                <i>Кухнята на Мони</i>
           </a>
        </div>
        <div class="msg adminMsg">
            <?php require_once('show-notify-messages.php'); ?>
        </div>
        <nav>
            <a href="/SoftUni">&larr; Към сайта</a>
            <a href="<?=APP_ROOT?>/categories">Категории</a>
            <a href="<?=APP_ROOT?>/products">Продукти</a>
            <a href="<?=APP_ROOT?>/forme">За мен</a>
            <a href="<?=APP_ROOT?>/users">Потребители</a>
            <a href="<?=APP_ROOT?>/slider">Слайдер</a>
        </nav>
        <div class="exit">
            <a href="<?=APP_ROOT?>/users/logout" title="Излез и се върни в сайта"><i>Изход</i></a>
        </div>
            <!-- End of User Menu -->
    </header>