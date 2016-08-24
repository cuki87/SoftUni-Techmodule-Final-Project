<?php $this->title =  $this->products[0]['cat_name'].' - Кухнята на Мони';

$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <div class="products">
<?php
    $counter = 0;
    foreach ($this->products as $product) {
?>

        <div class="prodLinks">
            <div class="prod">
                <a href="<?=APP_ROOT?>/tasty/productView/<?=$product['id']?>">
                    <span class="prodTitle">
                        <span>
                            <h4><?=htmlentities($product['product_name']) ?></h4>
                            <?php
                            $description = substr($product['product_description'], 0, 70);
                            ?>
                            <?=htmlentities($description) ?>
                        </span>
                    </span>
                    <img src="<?=APP_ROOT.htmlentities($product['product_picture'])?>" alt="<?=htmlentities($product['product_name']) ?>">
                </a>
            </div>
        </div>

        <?php
        if(++$counter % 3 === 0) echo "<br>"
        ?>
<?php
    }
?>
    </div>
</main>