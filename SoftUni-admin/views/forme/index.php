<?php $this->title = 'За мен - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <h5 style="padding-bottom: 10px;"><i>Препоръчителна резолюция 500х500рх</i></h5>
    <form method="post" action="<?=$this->updateContent();?>" class="usersForm slider">
        <input type="file" name="photo" id="file" class="inputfile" />
        <label for="file">
            Избери нова снимка
        </label>
        <input type="hidden" name="act" value="photo"/>
        <input type="submit" class="addSlide" value="Качи я">
    </form>
    <form method="post" action="<?=$this->updateContent();?>" class="usersForm forme">
        <textarea id="advancedEdit" name="content"><?=$this->content['text'];?></textarea>
        <input type="hidden" name="act" value="content"/>
        <input type="submit" value="Редактирай">
    </form>
    <br>
    <p class="comment"><i>Забележка: Точките в неподредения списък в сайта излизат като малки мъфинчета</i></p>

    <script type="text/javascript">
        fileInput();
    </script>