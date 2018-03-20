<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title><?= $newsItem['title'] ;?> | iWhy.ru</title>
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
                                        <img alt="Electrro" src="/templates/iwhy/images/logo.png">
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

    <section class="ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-listing">
                        <div class="row">
                            <div class="col-xs-12 mb-60">
                                <div class="mb-30">
                                    <img src="<?= News::getImage($newsItem['id']); ?>" alt="<?= $newsItem['title']; ?>">
                                </div>
                                <div class="blog-detail ">
                                    <div class="post-info">
                                        <ul>
                                            <li><span class="post-date"><?= $newsItem['date']; ?></span></li>
                                        </ul>
                                    </div>
                                    <h1 style="padding-top: 30px;"><?= $newsItem['title']; ?></h1>
                                    <p><?= $newsItem['content']; ?></p>
                                    <p><a href="/news/">Другие статьи</a></p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-block">
                        <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
                            <div class="sidebar-title">
                                <h3>Категории</h3><span></span>
                            </div>
                            <div class="sidebar-contant">
                                <?php foreach ($categories as $category): ?>
                                    <ul>
                                        <li><a class="side" href="/category/<?= $category['id'] ?>"><?= $category['name'] ?> <span>(<?= Product::getProductCountInCategory($category['id']); ?></span>)</a></li>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="sidebar-box sidebar-item sidebar-item-wide"> <span class="opener plus"></span>
                            <div class="sidebar-title">
                                <h3>Последние записи</h3><span></span>
                            </div>
                            <div class="sidebar-contant">
                                <ul>
                                    <?php foreach ($newsRecent as $item): ?>
                                        <li>
                                            <div class="pro-media">
                                                <a title="<?= $item['title']; ?>" href="/news/<?= $item['id']; ?>">
                                                    <img alt="<?= $item['name']; ?>" src="<?= News::getImage($item['id']); ?>">
                                                </a>
                                            </div>
                                            <div class="pro-detail-info">
                                                <a title="<?= $item['title']; ?>" href="/news/<?= $item['id']; ?>"><?= $item['title']; ?></a>
                                                <div class="post-info"><?= $item['date']; ?></div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>