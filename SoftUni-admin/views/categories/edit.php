<?php $this->title = 'Редакция на категория - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <form method="post" class="usersForm">
        <div>ID:</div>
        <input type="text" name="id" value="<?=htmlspecialchars($this->category['id'])?>" disabled><br>
        <div>Име:</div>
        <input type="text" name="name" value="<?=htmlspecialchars($this->category['cat_name'])?>"><br>
        <div>Кратко описание:</div>
        <textarea  maxlength="50" type="text" name="description"><?=htmlspecialchars($this->category['cat_description'])?></textarea><br>
        <?php if ($this->category['cat_picture'] != null){ ?>
            <div>Снимка:</div>
            <a href="<?=substr(APP_ROOT, 0, 8).htmlspecialchars($this->category['cat_picture'])?>" target="_blank" title="Кликни за пълен размер">
                <img src="<?=substr(APP_ROOT, 0, 8).htmlspecialchars($this->category['cat_picture'])?>" alt="Няма снимка">
            </a><br>
        <?php }
        else{
        ?>
            <div><i><u>Няма снимка</u></i></div>
        <?php }?>
        <input type="file" name="picture" id="file" class="inputfile" />
        <label for="file">
            Качи нова
        </label>
        <br><br>
        <div>
            <input type="submit" value="Редактирай">
        </div>
    </form>

    <script type="text/javascript">
        fileInput();
    </script>