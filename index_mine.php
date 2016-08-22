<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Кухнята на Мони</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&subset=cyrillic-ext" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="scripts.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <div class="logo">
           <a href="">
               <img src="images/logo.png" alt="Кухнята на Мони">
           </a>
        </div>
        <nav>
            <a href="">Начало</a>
            <a href="#ForMe" class="smoothScroll" >За мен</a>
            <a href="#Tasty" class="smoothScroll" >Вкусотийки</a>
            <a href="#Contact" class="smoothScroll">Контакти</a>
        </nav>
        <div class="userProfileHead">
            <img src="images/profile.jpg" alt="Profile picture">
            <ul id="userMenu">
                <li><a href="#">Профил</a></li>
                <li><a href="#">Админ</a></li>
                <li><a href="#">Поръчки</a></li>
                <li class="exit"><a href="#">Изход</a></li>
            </ul>
        </div>
    </header>
    <main>
        <!-- Slider -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="images/Slider/Slide1.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/Slider/Slide2.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/Slider/Slide3.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/Slider/Slide4.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="images/Slider/Slide5.jpg" style="width:100%">
                </div>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </div>
        <!-- End of Slider -->
        <!-- For me -->
            <a id="ForMe" class="smoothScroll"></a>
            <div class="forMe">
                <div class="forMeAvatar">
                    <img src="images/Mony.jpg" alt="Симона">
                </div>
                <div class="forMeText">
                    <h1>Симона Веселинска, на 20 години от София</h1>
                    <ul>
                        <li><strong>СПГТ, специалност „Хотелиерство“</strong></li>
                        <li><strong>УниБИТ, Информационни ресурси на туризма</strong></li>
                        <li><strong>По душа, специалност Сладкар</strong></li>
                        <li><strong>Щастливо омъжена</strong></li>
                    </ul>
                </div>
            </div>
        <!-- End of For me -->
        <!-- Product Categories -->
            <a id="Tasty" class="smoothScroll"></a>
            <div class="categories">
                <h2>Вкусотийки</h2>
                <h3><i>Категории:</i></h3>
                <br><br>
                <div class="catLinks">
                    <div class="cat">
                        <span class="catTitle">
                            <span>
                                <h4>Кексове</h4>
                                Вкусни домашни кексове по стари и авторски рецепти
                            </span>
                        </span>
                        <a href="#"><img src="images/Categories/Cakes.jpg" alt="Кексове"></a>
                    </div>
                    <div class="cat">
                        <span class="catTitle">
                            <span>
                                <h4>Торти</h4>
                                Вкусни домашни кексове по стари и авторски рецепти
                            </span>
                        </span>
                        <a href="#"><img src="images/Categories/BirthdayCakes.jpg" alt="Торти"></a>
                    </div>
                    <div class="cat">
                        <span class="catTitle">
                            <span>
                                <h4>Сладки</h4>
                                Вкусни домашни кексове по стари и авторски рецепти
                            </span>
                        </span>
                         <a href="#"><img src="images/Categories/Cookies.jpg" alt="Сладки"></a>
                    </div>
                    <div class="cat">
                        <span class="catTitle">
                            <span>
                                <h4>Мъфини</h4>
                                Вкусни домашни кексове по стари и авторски рецепти
                            </span>
                        </span>
                        <a href="#"><img src="images/Categories/Muffins.jpg" alt="Мъфини"></a>
                    </div>
                    <div class="cat">
                        <span class="catTitle">
                            <span>
                                <h4>Други</h4>
                                Вкусни домашни кексове по стари и авторски рецепти
                            </span>
                        </span>
                        <a href="#"><img src="images/Categories/Other.jpg" alt="Други"></a>
                    </div>

                </div>
            </div>
        <!-- End of Product Categories -->
        <!-- Contact Form -->
            <a id="Contact" class="smoothScroll"></a>
            <div class="contact">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5856.231102645613!2d23.267975027442677!3d42.785907016642156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa91425f110289%3A0xa00a014cd0eafe0!2zMTI2MSDQnNGA0LDQvNC-0YA!5e0!3m2!1sbg!2sbg!4v1470856512232"
                            width="40%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="greeting">
                        Харесвате моите вкусотийки?<br><br>
                        Пишете ми, а аз ще запретна ръкави и ще приготвя най-вкусния сладкиш специално за вас!
                </div>
                <div class="contactForm">
                    <form>
                        <input type="text" placeholder="Име"><br>
                        <input type="text" placeholder="E-mail"><br>
                        <textarea rows="5" placeholder="Вашето съобщение"></textarea><br>
                        <input type="submit" class="sendButton" value="Изпрати">
                    </form>
                </div>
            </div>
        <!-- End of Contact Form -->
    </main>
    <footer>
        <div class="devs">
            Designed by perer & cuki
        </div>
        <div class="copyright">
            Copyright &copy; 2016. All rights recerved
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    showSlides();
</script>
<script type="text/javascript">
    $(function() {
        $('.smoothScroll').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000); // The number here represents the speed of the scroll in milliseconds
                    return false;
                }
            }
        });
    });
</script>
</body>
</html>