<?php $this->title = 'Име на продукт - Кухнята на Мони';?>

<main>
    <?php
    foreach ($this->product as $product)
    {
    ?>
        <h1><?= htmlspecialchars($product['product_name']) ?></h1>
        <h4><i>Категория: <?=htmlentities($product['cat_name'])?></i></h4>
        <div class="product">
            <div class="productPic">
                <img src="<?=APP_ROOT.$product['product_picture']?>">
            </div>
            <div class="productRight">
                <?php if ($product['price']){ ?>
                    <div class="price">
                        <?=number_format($product['price'],2)." лв."?>
                    </div>
                <?php } ?>
                <div class="productDescription">
                    <?=$product['product_description']?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</main>