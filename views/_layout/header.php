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
        <div class="logo">
           <a href="<?=APP_ROOT?>/">
               <img src="<?=APP_ROOT?>/content/images/logo.png" alt="Кухнята на Мони">
           </a>
        </div>
        <div class="msg">
            <?php require_once('show-notify-messages.php'); ?>
        </div>
        <nav>
            <a href="<?=APP_ROOT?>/">Начало</a>
            <a href="<?=APP_ROOT?>/#ForMe" class="smoothScroll" >За мен</a>
            <a href="<?=APP_ROOT?>/#Tasty" class="smoothScroll" >Вкусотийки</a>
            <a href="<?=APP_ROOT?>/#Contact" class="smoothScroll">Контакти</a>
        </nav>
        <!-- Logged in -->
        <?php
            if ($this->isLoggedIn) {
                ?>

                <div class="userProfileHead">
                    <?php if ($_SESSION['avatar']){?>
                        <img src="<?= APP_ROOT.$_SESSION['avatar'] ?>" alt="Profile picture">
                    <?php }
                        else{
                    ?>
                        <img src="<?= APP_ROOT ?>/content/images/default_profile.jpg" alt="Profile picture">
                    <?php } ?>
                    <ul id="userMenu">
                        <li><a href="<?= APP_ROOT ?>/users/profile/<?=$_SESSION['user_id']?>">Профил</a></li>
                        <li><a href="#">Админ</a></li>
                        <li><a href="#">Поръчки</a></li>
                        <li class="exit"><a href="<?=APP_ROOT?>/users/logout">Изход</a></li>
                    </ul>
                </div>
                <?php
            }
            else{
        ?>
        <!-- End of Logged in -->
        <!-- Not logged in -->
                <div class="userProfileHead">
                    <img src="<?=APP_ROOT?>/content/images/default_profile.jpg" alt="Profile picture">
                    <ul id="userMenu">
                        <li><a href="<?=APP_ROOT?>/users/login">Вход</a></li>
                        <li><a href="<?=APP_ROOT?>/users/register">Регистрация</a></li>
                    </ul>
                </div>
        <?php
            }
        ?>
            <!-- End of Not logged in -->
    </header>