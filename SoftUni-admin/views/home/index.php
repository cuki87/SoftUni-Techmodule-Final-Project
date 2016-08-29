<?php $this->title = 'Админ панел - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
<h1><?= htmlspecialchars($this->heading) ?></h1>
    <h4>Добре дошъл!</h4>
    <br><br>
<table class="adminIndex">
    <tr>
        <td>Към сайта</td>
        <td>Категории</td>
        <td>Продукти</td>
    </tr>
    <tr>
        <td>За мен</td>
        <td>Потребители</td>
        <td>Слайдер</td>
    </tr>
</table>
</main>