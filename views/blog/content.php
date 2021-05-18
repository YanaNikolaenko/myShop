
<!-- content page -->
<section class="bgwhite p-t-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">
                    <?php foreach ($articles as $article): ?>
                    <!-- item blog -->
                    <div class="item-blog p-b-80">
                        <a href="/article/<?=$article['id']?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
                            <img src="<?=TEMPLATE_ROOT . $article['image']?>" alt="IMG-BLOG">

                            <span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									<?=$article['date']?>
								</span>
                        </a>

                        <div class="item-blog-txt p-t-33">
                            <h4 class="p-b-11">
                                <a href="/article/<?=$article['id']?>" class="m-text24">
                                    <?=$article['title']?>
                                </a>
                            </h4>

                            <div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By <?=$article['user']['firstname'] . ' ' . $article['user']['lastname']?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

                                <span>
										<?=$article['category']['title']?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

                                <span>
										<?=$article['count_comments']?> Comments
									</span>
                            </div>

                            <p class="p-b-12">
                                <?=$article['short_description']?>
                            </p>

                            <a href="/article/<?=$article['id']?>" class="s-text20">
                                Continue Reading
                                <i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <? endforeach ?>
                </div>

                <!-- Pagination -->
                <div class="pagination flex-m flex-w p-r-50">
                    <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                    <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                </div>
            </div>




            <div class="col-md-4 col-lg-3 p-b-75">
                <div class="rightbar">
                    <!-- Search -->
                    <div class="pos-relative bo11 of-hidden">
                        <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">

                        <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                            <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>

                    <!-- Categories -->
                    <h4 class="m-text23 p-t-56 p-b-34">
                        Categories
                    </h4>

                    <ul>
                        <?php foreach ($categories as $category): ?>
                        <li class="p-t-6 p-b-8 bo6">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                <?=$category['title']?>
                            </a>
                        </li>
                        <? endforeach ?>
                    </ul>

                    <!-- Featured Products -->
                    <h4 class="m-text23 p-t-65 p-b-34">
                        Featured Products
                    </h4>

                    <ul class="bgwhite">
                        <li class="flex-w p-b-20">
                            <a href="../../index.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?=TEMPLATE_ROOT?>images/item-16.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="../../index.php" class="s-text20">
                                    White Shirt With Pleat Detail Back
                                </a>

                                <span class="dis-block s-text17 p-t-6">
										$19.00
									</span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="../../index.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?=TEMPLATE_ROOT?>images/item-17.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="../../index.php" class="s-text20">
                                    Converse All Star Hi Black Canvas
                                </a>

                                <span class="dis-block s-text17 p-t-6">
										$39.00
									</span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="../../index.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?=TEMPLATE_ROOT?>images/item-08.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="../../index.php" class="s-text20">
                                    Nixon Porter Leather Watch In Tan
                                </a>

                                <span class="dis-block s-text17 p-t-6">
										$17.00
									</span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="../../index.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?=TEMPLATE_ROOT?>images/item-03.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="../../index.php" class="s-text20">
                                    Denim jacket blue
                                </a>

                                <span class="dis-block s-text17 p-t-6">
										$39.00
									</span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="../../index.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?=TEMPLATE_ROOT?>images/item-05.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="../../index.php" class="s-text20">
                                    Nixon Porter Leather Watch In Tan
                                </a>

                                <span class="dis-block s-text17 p-t-6">
										$17.00
									</span>
                            </div>
                        </li>
                    </ul>

                    <!-- Archive -->
                    <h4 class="m-text23 p-t-50 p-b-16">
                        Archive
                    </h4>

                    <ul>
                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                July 2018
                            </a>

                            <span class="s-text13">
									(9)
								</span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                June 2018
                            </a>

                            <span class="s-text13">
									(39)
								</span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                May 2018
                            </a>

                            <span class="s-text13">
									(29)
								</span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                April  2018
                            </a>

                            <span class="s-text13">
									(35)
								</span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                March 2018
                            </a>

                            <span class="s-text13">
									(22)
								</span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                February 2018
                            </a>

                            <span class="s-text13">
									(32)
								</span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                January 2018
                            </a>

                            <span class="s-text13">
									(21)
								</span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                December 2017
                            </a>

                            <span class="s-text13">
									(26)
								</span>
                        </li>
                    </ul>

                    <!-- Tags -->
                    <h4 class="m-text23 p-t-50 p-b-25">
                        Tags
                    </h4>

                    <div class="wrap-tags flex-w">
                        <a href="#" class="tag-item">
                            Fashion
                        </a>

                        <a href="#" class="tag-item">
                            Lifestyle
                        </a>

                        <a href="#" class="tag-item">
                            Denim
                        </a>

                        <a href="#" class="tag-item">
                            Streetstyle
                        </a>

                        <a href="#" class="tag-item">
                            Crafts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
