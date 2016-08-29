<?php $this->title = 'Добави продукт - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <form method="post" class="usersForm">
        <div>Име:</div>
        <input type="text" name="name" value=""><br>
        <div>Описание:</div>
        <textarea type="text" name="description"></textarea><br>
        <div>Цена: <i>(формат 12.34)</i></div>
        <input type="text" name="price" value=""><br>
        <div>Категория:</div>
        <div class="select">
            <select name="category">
                <option value="" selected>-- Избери категория --</option>
                <?php foreach ($this->categories as $category){
                    if ($this->product['cat_id'] != $category['id']){ ?>
                        <option value="<?=$category['id']?>"><?=$category['cat_name']?></option>
                        <?php
                    }
                }?>
            </select>
        </div>
        <br>
        <input type="file" name="picture" id="file" class="inputfile" />
        <label for="file">
            Добави снимка
        </label>
        <br><br>
        <div>
            <input type="submit" value="Добави">
        </div>
    </form>

    <script type="text/javascript">
        fileInput();
    </script>