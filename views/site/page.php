<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title><?= $page['title']; ?></title>
    <meta name="description" content="<?= $page['description']; ?>">
    <meta name="keywords" content="<?= $page['keywords']; ?>">
    <!-- SEO Meta
      ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/fotorama.css">
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/templates/iwhy/css/responsive.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/iwhy/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/iwhy/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/iwhy/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/iwhy/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/templates/iwhy/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/templates/iwhy/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/templates/iwhy/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="homepage">
<div class="se-pre-con"></div>
<div class="main">

<?php require_once(ROOT . '/views/layouts/iwhy/admin-bar.php'); ?>

    <!-- HEADER START -->
    <header class="navbar navbar-custom container-full-sm" id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(User::isGuest()): ?>
                            <ul class="top-ul">
                                <li><a title="Зарегистрировать аккаунт" class="top-l" href="/user/register">Зарегистрироваться</a>
                                </li>
                                <li><a title="Войти в аккаунт" class="top-l" href="/user/login">Войти</a></li>
                            </ul>
                        <?php else: ?>
                            <ul class="top-ul">
                                <li>
                                    <a title="Личный кабинет" class="top-l" href="/cabinet/">Кабинет</a>
                                </li>
                                <li>
                                    <a title="Выйти из аккаунта" class="top-l" href="/user/logout">Выйти</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                        <ul class="top-right-ul">
                            <li><span>Нужна помощь? : </span>8 (800) 878 87 78</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <hr>
                <div class="header-inner">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="header-middle-left">
                                <div class="navbar-header float-none-sm">
                                    <a class="navbar-brand page-scroll" title="На главную" href="/">
                                        <img alt="iWHY" src="/templates/iwhy/images/logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="header-middle-right" style="padding-top: 25px">
                                <div class="row">
                                    <div class="col-lg-8 col-md-10 ">
                                        <div class="header-bottom">
                                            <div class="position-r">
                                                <div class="nav_sec position-r">
                                                    <div class="mobilemenu-title mobilemenu">
                                                        <span>Меню</span>
                                                        <i class="fa fa-bars pull-right"></i>
                                                    </div>
                                                    <div class="mobilemenu-content">
                                                        <ul class="nav navbar-nav" id="menu-main">
                                                            <li>
                                                                <a title="Главная" class="nav" href="/">Главная</a>
                                                            </li>
                                                            <li>
                                                                <a title="Каталог товаров" class="nav" href="/catalog/">Каталог</a>
                                                            </li>
                                                            <li>
                                                                <a title="Новости и статьи" class="nav" href="/news/">Новости</a>
                                                            </li>
                                                            <li>
                                                                <a title="О нас" class="nav" href="/about/">О нас</a>
                                                            </li>
                                                            <li>
                                                                <a title="Доставка" class="nav" href="/delivery/">Доставка</a>
                                                            </li>
                                                            <li>
                                                                <a title="Контакты" class="nav" href="/contact/">Контакты</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-2">
                                        <div class="right-side float-left-xs header-right-link" style="padding-top: 20px">
                                            <ul>
                                                <li class="cart-icon"> <a href="/cart"> <span> <small class="cart-notification" id="cart-count"><?= Cart::countItems(); ?></small> </span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

    <!-- CONTAIN START -->
    <section class="ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 mb-sm-30 col-lgmd-20per">
                    <div class="sidebar-block">
                        <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
                            <div class="sidebar-title">
                                <h3>Все категории</h3> <span></span>
                            </div>
                            <div class="sidebar-contant">
                                <?php foreach ($categories as $category): ?>
                                    <ul>
                                        <li><a class="side" href="/category/<?= $category['id'] ?>"><?= $category['name'] ?> <span>(<?= Product::getProductCountInCategory($category['id']); ?></span>)</a></li>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="sidebar-box mb-40 visible-md visible-lg">
                            <img src="/templates/iwhy/images/banner-l.jpg" alt="Electrro">
                        </div>
                        <div class="sidebar-box sidebar-item mb-40"> <span class="opener plus"></span>
                            <div class="sidebar-title">
                                <h3>Не пропустите</h3> <span></span>
                            </div>
                            <div class="sidebar-contant">
                                <ul>
                                    <?php foreach ($recommendedProducts as $product): ?>
                                        <li>
                                            <div class="pro-media"> <a href="/product/<?= $product['id'] ;?>"><img alt="T-shirt" src="<?= Product::getImage($product['id']); ?>"></a> </div>
                                            <div class="pro-detail-info"> <a href="/product/<?= $product['id'] ;?>"><?= $product['name'] ;?></a>
                                                <div class="price-box"> <span class="price"><?= $product['price'] ;?> руб.</span> </div>
                                                <div class="cart-link">
                                                    <form>
                                                        <button title="Add to Cart" class="add-to-cart" data-id="<?= $product['id'] ;?>">В корзину</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-lgmd-80per">
                    <div class="inner-banner2 mb-40 visible-md visible-lg">
                        <a href="shop.html">
                            <img src="/templates/iwhy/images/inner-banner2.jpg" alt="iWHY.ru">
                        </a>
                    </div>
                    <div class="shorting mb-30">
                    </div>
                    <div class="content">
                        <?= $page['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->

    <?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>

