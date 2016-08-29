<?php $this->title = 'Слайдер - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>

    <h4><i>Препоръчителна резолюция 2000х1000рх</i></h4><br>
    <form method="post" action="<?php $this->add(); ?>" class="usersForm slider">
        <input type="file" name="slide" id="file" class="inputfile" />
        <label for="file">
            Качи нов слайд
        </label>
        <input type="submit" class="addSlide" value="Добави го">
    </form>

    <div class="slides">
        <?php foreach ($this->slides as $slide){?>
            <div class="slide">
                <div class="image">
                    <img src="<?=substr(APP_ROOT, 0, 8).$slide['slide']?>" class="slideThumb" alt="Няма снимка">
                </div>
                <div class="admintab">
                    <a href="<?=APP_ROOT?>/slider/delete/<?=$slide['id']?>"  onclick="return confirm('Сигурни ли сте, че искате да изтриете този слайд?')">Изтрий</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <script type="text/javascript">
        fileInput();
    </script>