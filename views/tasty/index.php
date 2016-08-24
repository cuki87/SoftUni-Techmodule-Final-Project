<main>
    <div class="categories">
            <h2>Вкусотийки</h2>
            <h3><i>Категории:</i></h3>
            <br><br>
            <?php
                $counter = 0;
                foreach ($this->cats as $cats)
                {
                    ?>
                    <div class="catLinks">
                        <div class="cat">
                            <a href="<?=APP_ROOT?>/tasty/products/<?=htmlentities($cats['id'])?>">
                                <span class="catTitle">
                                    <span>
                                        <h4><?=htmlentities($cats['cat_name']) ?></h4>
                                        <?=htmlentities($cats['cat_description']) ?>
                                    </span>
                                </span>
                                <img src="<?=APP_ROOT.htmlentities($cats['cat_picture'])?>" alt="<?=htmlentities($cats['cat_name']) ?>">
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