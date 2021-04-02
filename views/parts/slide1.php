<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">

            <?php foreach ($sliders as $slider): ?>


                <div class="item-slick1 item3-slick1" style="background-image: url(<?= TEMPLATE_ROOT . $slider['image'] ?>);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22"
                            data-appear=<?= $slider['big_style'] ?>>
                            <?= $slider['title'] ?>
                        </h2>

                        <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33"
                              data-appear=<?= $slider['medium_style'] ?>>
							    <?= $slider['subtitle'] ?>
						</span>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear=<?= $slider['small_style'] ?>>
                            <!-- Button -->
                            <a href="<?= $slider['link'] ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                <?= $slider['label'] ?>
                            </a>
                        </div>
                    </div>
                </div>
<? endforeach ?>


        </div>
</section>
