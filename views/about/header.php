<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?=TEMPLATE_ROOT?>images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE_ROOT?>css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

                <div class="topbar-language rs1-select2">
                    <select class="selection-1" name="time">
                        <option>USD</option>
                        <option>EUR</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="<?=TEMPLATE_ROOT?>images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="/">Home</a>
                            <ul class="sub_menu">
                                <li><a href="/">Homepage V1</a></li>
                                <li><a href="/">Homepage V2</a></li>
                                <li><a href="/">Homepage V3</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="/catalog">Shop</a>
                        </li>

                        <li class="sale-noti">
                            <a href="/sale">Sale</a>
                        </li>

                        <li>
                            <a href="/cart">Cart</a>
                        </li>

                        <li>
                            <a href="/blog">Blog</a>
                        </li>

                        <li>
                            <a href="/about">About</a>
                        </li>

                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <div class="header-wrapicon1 dis-block">
                    <img src="<?=TEMPLATE_ROOT?>images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <!-- Header cart noti -->
                    <!--первая форма залогиниться-->
                    <div class="header-cart header-dropdown login-dropdown">
                        <form class="leave-comment" action="login" method="post">
                            <div style="font-size: 15px; padding-bottom: 20px; text-align:  center;">
                                Enter email and password
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                            </div>

                            <div class="w-size10">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                                    Send
                                </button>
                            </div>

                            <div style="font-size: 15px; padding-top: 20px; text-align: center;">
                                Don't have an account yet?
                            </div>
                            <div class="register" style="font-size: 15px; text-align: center;">
                                <div class="register-button">Register now</div>
                            </div>

                        </form>
                    </div>
                    <!--форма регистрации-->
                    <div class="header-cart header-dropdown2 register-dropdown">
                        <form class="leave-comment" action="register"  method="post">
                            <div style="font-size: 15px; padding-bottom: 20px; text-align:  center;">
                                Fill in all the form fields
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="firstname" placeholder="First Name">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="lastname" placeholder="Last Name">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="confirm_password" placeholder="Repeat password">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 19px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="Phone Number">
                            </div>

                            <div class="w-size10">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                                    Send
                                </button>
                            </div>

                            <div style="font-size: 15px; padding-top: 20px; text-align:  center;">
                                Do you have an account?&#8195;<div class="login-button">Login</div>
                            </div>

                        </form>
                    </div>
                </div>

                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="<?=TEMPLATE_ROOT?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <!-- Header cart -->
                    <div class="header-cart header-dropdown cart-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?=TEMPLATE_ROOT?>images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?=TEMPLATE_ROOT?>images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?=TEMPLATE_ROOT?>images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="/" class="logo-mobile">
            <img src="<?=TEMPLATE_ROOT?>images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <div class="header-wrapicon1 dis-block">
                    <img src="<?=TEMPLATE_ROOT?>images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <!-- Header cart noti -->
                    <!--первая форма залогиниться-->
                    <div class="header-cart header-dropdown login-dropdown">
                        <form class="leave-comment" action="login" method="post">
                            <div style="font-size: 15px; padding-bottom: 20px; text-align:  center;">
                                Enter email and password
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                            </div>

                            <div class="w-size10">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                                    Send
                                </button>
                            </div>

                            <div style="font-size: 15px; padding-top: 20px; text-align: center;">
                                Don't have an account yet?
                            </div>
                            <div class="register" style="font-size: 15px; text-align: center;">
                                <div class="register-button">Register now</div>
                            </div>

                        </form>
                    </div>
                    <!--форма регистрации-->
                    <div class="header-cart header-dropdown2 register-dropdown">
                        <form class="leave-comment" action="register"  method="post">
                            <div style="font-size: 15px; padding-bottom: 20px; text-align:  center;">
                                Fill in all the form fields
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="firstname" placeholder="First Name">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="lastname" placeholder="Last Name">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 10px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="confirm_password" placeholder="Repeat password">
                            </div>

                            <div style = "height: 30px; box-shadow: 0 0 1px 0; margin-bottom: 19px;">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="Phone Number">
                            </div>

                            <div class="w-size10">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                                    Send
                                </button>
                            </div>

                            <div style="font-size: 15px; padding-top: 20px; text-align:  center;">
                                Do you have an account?&#8195;<div class="login-button">Login</div>
                            </div>

                        </form>
                    </div>
                </div>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="<?=TEMPLATE_ROOT?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown cart-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?=TEMPLATE_ROOT?>images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?=TEMPLATE_ROOT?>images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?=TEMPLATE_ROOT?>images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">Home</a>
                    <ul class="sub-menu">
                        <li><a href="/">Homepage V1</a></li>
                        <li><a href="/">Homepage V2</a></li>
                        <li><a href="/">Homepage V3</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="/catalog">Shop</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/sale">Sale</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/cart">Cart</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/blog">Blog</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/about">About</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?=TEMPLATE_ROOT?>images/heading-pages-06.jpg);">
    <h2 class="l-text2 t-center">
        About
    </h2>
</section>
