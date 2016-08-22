<?php $this->title = 'Кухнята на Мони'; ?>

<main>
    <!-- Slider -->
    <div class="slideshow-container">
        <?php
          foreach ($this->sliderContent as $slider)
          {
        ?>
                <div class="mySlides fade">
                    <img src="<?=APP_ROOT.htmlentities($slider['slide'])?>" style="width:100%">
                </div>
        <?php
            }
        ?>
        <div style="text-align:center">
        <?php
            for ($i=0; $i<sizeof($this->sliderContent); $i++)
            {
        ?>
                <span class="dot" onclick="currentSlide(<?=$i?>)"></span>
        <?php
        }
        ?>
        </div>
    </div>
    <!-- End of Slider -->
    <!-- For me -->
    <a id="ForMe" class="smoothScroll"></a>
    <div class="forMe">
        <?php
            foreach ($this->forMeContent as $forme)
            {
         ?>
                <div class="forMeAvatar">
                  <img src="<?=APP_ROOT.htmlentities($forme['forme_photo'])?>" alt="Симона">
                </div>
                <div class="forMeText">
                    <?=$forme['text']?>
                </div>
           <?php
                }
            ?>
    </div>
    <!-- End of For me -->
    <!-- Product Categories -->
    <a id="Tasty" class="smoothScroll"></a>
    <div class="categories">
        <h2>Вкусотийки</h2>
        <h3><i>Категории:</i></h3>
        <br><br>
        <?php
            foreach ($this->cats as $cats)
            {
        ?>
                <div class="catLinks">
                    <div class="cat">
                        <span class="catTitle">
                            <span>
                                <h4><?= htmlentities($cats['cat_name']) ?></h4>
                                <?=htmlentities($cats['cat_description']) ?>
                            </span>
                        </span>
                        <a href="#"><img src="<?=APP_ROOT.htmlentities($cats['cat_picture'])?>" alt="<?= htmlentities($cats['cat_name']) ?>"></a>
                    </div>
                </div>
        <?php
            }
        ?>

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
        <?php
        if(isset($_POST['submit'])){
            $to = "pepi.vasilev@gmail.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $full_name = $_POST['first_name'];
            $subject = "Писмо от сайта";
            $subject2 = "Поръчка от \"Кухнята на Мони\"";
            $message = $full_name . " wrote the following:" . "\r\n" . $_POST['message'];
            $message2 = "Благодарим Ви, г-н/г-жо" . $full_name . " за писмото. Ще се свържем с Вас възможно при първа възможност." . "\r\n" ."Поздрави, Мони!". "\r\n";

            $headers = "От:" . $from;
            $headers2 = "От:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Писмото е изпратено успешно!";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            // You cannot use header and echo together. It's one or the other.
        }
        ?>
        <div class="contactForm">
            <form action="" method="post">
                <input type="text" name="full_name" placeholder="Име"><br>
                <input type="text" name="email" placeholder="E-mail"><br>
                <textarea rows="5" name="message" placeholder="Вашето съобщение"></textarea><br>
                <input type="submit" class="sendButton" name="submit" value="Изпрати">
            </form>
        </div>
    </div>
    <!-- End of Contact Form -->
</main>
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