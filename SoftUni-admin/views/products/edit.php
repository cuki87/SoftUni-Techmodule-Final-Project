<?php $this->title = 'Редакция на продукт - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <form method="post" class="usersForm">
        <div>ID:</div>
        <input type="text" name="id" value="<?=htmlspecialchars($this->product['id'])?>" disabled><br>
        <div>Име:</div>
        <input type="text" name="name" value="<?=htmlspecialchars($this->product['product_name'])?>"><br>
        <div>Кратко описание:</div>
        <textarea   type="text" name="description"><?=htmlspecialchars($this->product['product_description'])?></textarea><br>
        <div>Цена:</div>
        <input type="text" name="price" value="<?= ($this->product['price'] ? number_format($this->product['price'], 2): '0.00'); ?>"><br>
        <div>Категория:</div>
        <div class="select">
            <select name="category">
                <option value="<?=$this->product['cat_id']?>" selected><?=$this->product['cat_name']?></option>
                <?php foreach ($this->categories as $category){
                    if ($this->product['cat_id'] != $category['id']){ ?>
                        <option value="<?=$category['id']?>"><?=$category['cat_name']?></option>
                <?php
                    }
                }?>
            </select>
        </div>
        <?php if ($this->product['product_picture'] != null){ ?>
            <div>Снимка:</div>
            <a href="<?=substr(APP_ROOT, 0, 8).htmlspecialchars($this->product['product_picture'])?>" target="_blank" title="Кликни за пълен размер">
                <img src="<?=substr(APP_ROOT, 0, 8).htmlspecialchars($this->product['product_picture'])?>" alt="Няма снимка">
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