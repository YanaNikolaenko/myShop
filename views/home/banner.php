<!-- Banner -->
<div class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="sec-title p-b-22">
            <h3 class="m-text5 t-center">
                Catalog
            </h3>
        </div>
        <div class="row">
            <?php foreach ($categories as $category): ?>
             <?php if ($category['title'] === 'All'): continue;?><?endif; ?>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="<?= TEMPLATE_ROOT . $category['image']?>" alt="IMG-BENNER">
                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="/catalog/<?=$category['slug']?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            <?=$category['title']?>
                        </a>
                    </div>
                </div>
            </div>
            <? endforeach ?>
        </div>
    </div>
</div>
