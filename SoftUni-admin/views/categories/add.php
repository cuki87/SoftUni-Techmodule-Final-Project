<?php $this->title = 'Добави категория - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <form method="post" class="usersForm">
        <div>Име:</div>
        <input type="text" name="name" value=""><br>
        <div>Кратко описание:</div>
        <textarea  maxlength="50" type="text" name="description"></textarea><br>
        <input type="file" name="picture" id="file" class="inputfile" />
        <label for="file">
            Качи нова
        </label>
        <br><br>
        <div>
            <input type="submit" value="Добави">
        </div>
    </form>

    <script type="text/javascript">
        fileInput();
    </script>