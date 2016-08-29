<?php $this->title = 'Продукти - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <br>
    <div class="add">
        <a href="<?=APP_ROOT?>/products/add">Добави продукт</a>
    </div>
    <br>
    <table>
        <thead>
        <td>ID</td>
        <td>Продукт</td>
        <td>Описание</td>
        <td>Цена</td>
        <td>Снимка</td>
        <td>Категория</td>
        <td>Администриране</td>
        </thead>
        <?php foreach ($this->products as $product){?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['product_name']?></td>
                <td style="width: 40%;"><?=substr($product['product_description'], 0, 180)?>...</td>
                <td style="font-weight: bold; text-align: center; font-size: 1.3em;"><?=number_format($product['price'], 2)?> лв.</td>
                <td class="image"><img src="<?=substr(APP_ROOT, 0, 8).$product['product_picture']?>" class="thumbnail" alt="Няма снимка"></td>
                <td><?=$product['cat_name']?></td>
                <td class="admintab">
                    <a href="<?=APP_ROOT?>/products/edit/<?=$product['id']?>">Промени</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=APP_ROOT?>/products/delete/<?=$product['id']?>">Изтрий</a>
                </td>
            </tr>
        <?php } ?>
    </table>