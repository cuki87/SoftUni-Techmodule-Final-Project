<?php $this->title = 'Изтриване на продукт - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <h3><u>Сигурни ли сте, че искате да изтриете този продукт?</u></h3>
    <form method="post" class="usersForm">
        <div>ID:</div>
        <input type="text" value="<?=htmlspecialchars($this->product['id'])?>" disabled><br>
        <div>Име:</div>
        <input type="text" value="<?=htmlspecialchars($this->product['product_name'])?>" disabled><br>
        <div>Описание:</div>
        <textarea type="text" disabled><?=htmlspecialchars($this->product['product_description'])?></textarea><br>
        <div>Цена:</div>
        <?php if ($this->product['price'] != null){ ?>
            <input type="text" value="<?=number_format(htmlspecialchars($this->product['price']),2)?> лв." disabled><br>
        <?php }
        else{
        ?>
            <input type="text" value="0.00 лв." disabled><br>
        <?php }?>
        <div>Категория:</div>
        <input type="text" value="<?=htmlspecialchars($this->product['cat_name'])?>" disabled><br>
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
        <br><br>
        <div>
            <input type="submit" value="Изтрий">
        </div>
    </form>