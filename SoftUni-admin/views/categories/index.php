<?php $this->title = 'Категории - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
<br>
    <div class="add">
        <a href="<?=APP_ROOT?>/categories/add">Добави категория</a>
    </div>
    <br>
    <table>
        <thead>
            <td>ID</td>
            <td>Категория</td>
            <td>Кратко описание</td>
            <td>Снимка</td>
            <td>Администриране</td>
        </thead>
        <?php foreach ($this->categories as $category){?>
            <tr>
                <td><?=$category['id']?></td>
                <td><?=$category['cat_name']?></td>
                <td><?=$category['cat_description']?></td>
                <td class="image"><img src="<?=substr(APP_ROOT, 0, 8).$category['cat_picture']?>" class="thumbnail" alt="Няма снимка"></td>
                <td class="admintab">
                    <a href="<?=APP_ROOT?>/categories/edit/<?=$category['id']?>">Промени</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=APP_ROOT?>/categories/delete/<?=$category['id']?>">Изтрий</a>
                </td>
            </tr>
        <?php } ?>
    </table>