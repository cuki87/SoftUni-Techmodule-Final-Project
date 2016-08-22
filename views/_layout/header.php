<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&subset=cyrillic-ext" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="<?=APP_ROOT?>/content/scripts.js" type="text/javascript"></script>
	<script src="<?=APP_ROOT?>/content/jquery-3.1.0.min.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <div class="logo">
           <a href="<?=APP_ROOT?>/">
               <img src="<?=APP_ROOT?>/content/images/logo.png" alt="Кухнята на Мони">
           </a>
        </div>
        <nav>
            <a href="<?=APP_ROOT?>/">Начало</a>
            <a href="#ForMe" class="smoothScroll" >За мен</a>
            <a href="#Tasty" class="smoothScroll" >Вкусотийки</a>
            <a href="#Contact" class="smoothScroll">Контакти</a>
        </nav>
        <div class="userProfileHead">
            <img src="<?=APP_ROOT?>/content/images/profile.jpg" alt="Profile picture">
            <ul id="userMenu">
                <li><a href="<?=APP_ROOT?>/users/profile">Профил</a></li>
                <li><a href="#">Админ</a></li>
                <li><a href="#">Поръчки</a></li>
                <li class="exit"><a href="#">Изход</a></li>
            </ul>
        </div>
    </header>
<?php require_once('show-notify-messages.php'); ?>
