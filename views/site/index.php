    <?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

    <!-- BANNER STRAT -->
    <section class="mtb-30 mt-sm-0 container-full-sm">
        <div class="container">
            <div class="row position-r">
                <div class="col-lg-2 col-md-3 col-lgmd-20per height-sm-0 position-initial">
                    <div class="sidebar-menu-dropdown home">
                        <a class="btn-sidebar-menu-dropdown"><span></span> Категории </a>
                        <div id="cat" class="cat-dropdown">
                            <div class="sidebar-contant">
                                <div id="menu" class="navbar-collapse collapse" >
                                    <div class="middle-link mobile right-side">
                                        <ul>
                                            <li class="login-icon content">
                                                <a class="content-link">
                                                    <span class="content-icon"></span>
                                                </a>
                                                <div class="content-dropdown">
                                                    <ul>
                                                        <li class="login-icon"><a href="/templates/iwhy/templates/iwhy/login.html" title="Login"><i class="fa fa-user"></i> Login</a></li>
                                                        <li class="register-icon"><a href="/templates/iwhy/templates/iwhy/register.html" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="track-icon">
                                                <a title="Track your order"><span></span></a>
                                            </li>
                                            <li class="gift-icon">
                                                <a href="/templates/iwhy/templates/iwhy/" title="Gift card"><span></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="nav navbar-nav ">
                                        <?php foreach ($categories as $category): ?>
                                            <li class="level">
                                                <a href="/category/<?= $category['id']; ?>"><?= $category['name']; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                        </ul>
                                    <div class="header-top mobile">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="top-link top-link-left ">
                                                        <ul>
                                                            <li class="language-icon">
                                                                <select>
                                                                    <option selected="selected" value="">English</option>
                                                                    <option value="">French</option>
                                                                    <option value="">German</option>
                                                                </select>
                                                            </li>
                                                            <li class="sitemap-icon">
                                                                <select>
                                                                    <option selected="selected" value="">USD</option>
                                                                    <option value="">AUD</option>
                                                                    <option value="">EUR</option>
                                                                </select>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="top-link right-side">
                                                        <div class="help-num" >Нужна помощь? :
                                                            8 (800) 878 87 78</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-lgmd-80per">
                    <div class="banner">
                        <div class="main-banner">
                            <div class="banner-1"> <img src="/templates/iwhy/images/slide1.jpg" alt="Electrro">
                                <div class="banner-detail">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-8">
                                                <div class="banner-detail-inner">
                                                    <h1 class="banner-title">Только лучшее</h1>
                                                    <span class="offer">По супер ценам!</span>
                                                </div>
                                                <a class="btn btn-color big" href="/catalog/">Не пропустить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-2"> <img src="/templates/iwhy/images/slide2.jpg" alt="Electrro">
                                <div class="banner-detail">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-8">
                                                <div class="banner-detail-inner">
                                                    <h1 class="banner-title">Эксклюзивы</h1>
                                                    <span class="offer">Новинки и редкие товары в наличии!</span>
                                                </div>
                                                <a class="btn btn-color big" href="/catalog/">Не пропустить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-0">
                    <div class="right-small-banner  visible-lg">
                        <a >
                            <img src="/templates/iwhy/images/banner-r.jpg" alt="Electrro">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <!-- CONTAIN START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-lgmd-80per right-side float-none-sm float-right-imp">
                    <!--  Featured Products Slider Block Start  -->
                    <div class="featured-product mt-60">
                        <div class="">
                            <div class="product-listing">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="heading-part mb-30">
                                            <div id="tabs" class="category-bar">
                                                <ul class="tab-stap">
                                                    <li><a class="tab-step1 selected" title="step1">Новинки</a></li>
                                                    <li><a class="tab-step2" title="step2">Распродажа</a></li>
                                                    <li><a class="tab-step3" title="step3">Рекомендуемые</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="items">
                                        <div class="tab_content pro_cat">
                                            <ul>
                                                <li>
                                                    <div id="data-step1" class="items-step1 product-slider-main position-r selected" data-temp="tabdata">
                                                        <div class="row">
                                                            <div class="tab_cat">
                                                                <div class="owl-carousel tab_slider">
                                                                    <?php foreach ($latestProducts as $product): ?>
                                                                        <div class="item">
                                                                            <div class="product-item">
                                                                                <?php if ($product['is_new']) :?>
                                                                                    <div class="main-label new-label"><span>New</span></div>
                                                                                <?php endif; ?>
                                                                                <?php if ($product['sale']) :?>
                                                                                    <div class="main-label sale-label"><span>sale</span></div>
                                                                                <?php endif; ?>
                                                                                <div class="product-image">
                                                                                    <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>">
                                                                                        <img src="<?= Product::getImage($product['id']); ?>" alt="<?= $product['name']; ?>" title="<?= $product['name']; ?>">
                                                                                    </a>
                                                                                    <div class="product-detail-inner">
                                                                                        <div class="detail-inner-left left-side">
                                                                                            <ul>
                                                                                                <li class="pro-cart-icon">
                                                                                                    <form>
                                                                                                        <button title="Добавить" class="add-to-cart" data-id="<?= $product['id']; ?>"><span></span>Добавить в корзину</button>
                                                                                                    </form>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-item-details">
                                                                                    <div class="product-item-name"> <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a> </div>
                                                                                    <div class="price-box">
                                                                                        <?php if ($product['sale']): ?>
                                                                                            <span class="price sale">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                                                        <?php else: ?>
                                                                                            <span class="price normal">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                                                        <?php endif; ?>
                                                                                        <?php if ($product['old_price'] != 0 ): ?>
                                                                                            <del class="price old-price">
                                                                                                <?= $product['old_price']; ?>
                                                                                            </del>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div id="data-step2" class="items-step2 product-slider-main position-r" data-temp="tabdata">
                                                        <div class="row">
                                                            <div class="tab_cat">
                                                                <div class="owl-carousel tab_slider">
                                                                    <?php foreach ($saleProducts as $product): ?>
                                                                        <div class="item">
                                                                            <div class="product-item">
                                                                                <?php if ($product['is_new']) :?>
                                                                                    <div class="main-label new-label"><span>New</span></div>
                                                                                <?php endif; ?>
                                                                                <?php if ($product['sale']) :?>
                                                                                    <div class="main-label sale-label"><span>sale</span></div>
                                                                                <?php endif; ?>
                                                                                <div class="product-image">
                                                                                    <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>">
                                                                                        <img src="<?= Product::getImage($product['id']); ?>" alt="<?= $product['name']; ?>" title="<?= $product['name']; ?>">
                                                                                    </a>
                                                                                    <div class="product-detail-inner">
                                                                                        <div class="detail-inner-left left-side">
                                                                                            <ul>
                                                                                                <li class="pro-cart-icon">
                                                                                                    <form>
                                                                                                        <button title="Добавить" class="add-to-cart" data-id="<?= $product['id']; ?>"><span></span>Добавить в корзину</button>
                                                                                                    </form>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-item-details">
                                                                                    <div class="product-item-name"> <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a> </div>
                                                                                    <div class="price-box">
                                                                                        <?php if ($product['sale']): ?>
                                                                                            <span class="price sale">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                                                        <?php else: ?>
                                                                                            <span class="price normal">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                                                        <?php endif; ?>
                                                                                        <?php if ($product['old_price'] != 0 ): ?>
                                                                                            <del class="price old-price">
                                                                                                <?= $product['old_price']; ?>
                                                                                            </del>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div id="data-step3" class="items-step3 product-slider-main position-r" data-temp="tabdata">
                                                        <div class="row">
                                                            <div class="tab_cat">
                                                                <div class="owl-carousel tab_slider">
                                                                    <?php foreach ($recommendedProducts as $product): ?>
                                                                        <div class="item">
                                                                            <div class="product-item">
                                                                                <?php if ($product['is_new']) :?>
                                                                                    <div class="main-label new-label"><span>New</span></div>
                                                                                <?php endif; ?>
                                                                                <?php if ($product['sale']) :?>
                                                                                    <div class="main-label sale-label"><span>sale</span></div>
                                                                                <?php endif; ?>
                                                                                <div class="product-image">
                                                                                    <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>">
                                                                                        <img src="<?= Product::getImage($product['id']); ?>" alt="<?= $product['name']; ?>" title="<?= $product['name']; ?>">
                                                                                    </a>
                                                                                    <div class="product-detail-inner">
                                                                                        <div class="detail-inner-left left-side">
                                                                                            <ul>
                                                                                                <li class="pro-cart-icon">
                                                                                                    <form>
                                                                                                        <button title="Добавить" class="add-to-cart" data-id="<?= $product['id']; ?>"><span></span>Добавить в корзину</button>
                                                                                                    </form>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-item-details">
                                                                                    <div class="product-item-name"> <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a> </div>
                                                                                    <div class="price-box">
                                                                                        <?php if ($product['sale']): ?>
                                                                                            <span class="price sale">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                                                        <?php else: ?>
                                                                                            <span class="price normal">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                                                        <?php endif; ?>
                                                                                        <?php if ($product['old_price'] != 0 ): ?>
                                                                                            <del class="price old-price">
                                                                                                <?= $product['old_price']; ?>
                                                                                            </del>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Featured Products Slider Block End  -->

                    <!--small banner Block Start-->
                    <section class="mt-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="small-banner small-banner1">
                                    <a>
                                        <img src="/templates/iwhy/images/small-banner1.jpg" alt="Electrro">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="small-banner small-banner2">
                                    <a>
                                        <img src="/templates/iwhy/images/small-banner2.jpg" alt="Electrro">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--small banner Block Start-->


                    <!--  Site Services Features Block Start  -->
                    <div class="ser-feature-block mtb-60">
                        <div class="">
                            <div class=" center-sm">
                                <div class="row">
                                    <div class="col-lg-4 service-box border-right">
                                        <div class="feature-box ">
                                            <div class="feature-icon feature1"></div>
                                            <div class="feature-detail">
                                                <div class="ser-title">Быстрая доставка</div>
                                                <div class="ser-subtitle"> По всей России и республикам СНГ</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 service-box border-right">
                                        <div class="feature-box">
                                            <div class="feature-icon feature2"></div>
                                            <div class="feature-detail">
                                                <div class="ser-title">Подарки</div>
                                                <div class="ser-subtitle"> Получайте подарки каждый день</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 service-box">
                                        <div class="feature-box ">
                                            <div class="feature-icon feature3"></div>
                                            <div class="feature-detail">
                                                <div class="ser-title">Возврат средств</div>
                                                <div class="ser-subtitle">При не соответствии описания</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Site Services Features Block End  -->

                    <section class="mb-60">
                        <div class="">
                            <div class="product-listing">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="heading-part mb-30">
                                            <h2 class="main_title"><span>Эксклюзивные</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="pro_cat">
                                        <div class="owl-carousel pro-cat-slider ">
                                            <?php foreach ($exclusiveProducts as $product): ?>
                                            <div class="item">
                                                <div class="product-item">
                                                    <?php if ($product['is_new']) :?>
                                                        <div class="main-label new-label"><span>New</span></div>
                                                    <?php endif; ?>
                                                    <?php if ($product['sale']) :?>
                                                        <div class="main-label sale-label"><span>sale</span></div>
                                                    <?php endif; ?>
                                                    <div class="product-image">
                                                        <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>">
                                                            <img src="<?= Product::getImage($product['id']); ?>" alt="<?= $product['name']; ?>" title="<?= $product['name']; ?>">
                                                        </a>
                                                        <div class="product-detail-inner">
                                                            <div class="detail-inner-left left-side">
                                                                <ul>
                                                                    <li class="pro-cart-icon">
                                                                        <form>
                                                                            <button title="Добавить" class="add-to-cart" data-id="<?= $product['id']; ?>"><span></span>Добавить в корзину</button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item-details">
                                                        <div class="product-item-name"> <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a> </div>
                                                        <div class="price-box">
                                                            <?php if ($product['sale']): ?>
                                                                <span class="price sale">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                            <?php else: ?>
                                                                <span class="price normal">
                                                                                                <?= $product['price']; ?> руб.
                                                                                            </span>
                                                            <?php endif; ?>
                                                            <?php if ($product['old_price'] != 0 ): ?>
                                                                <del class="price old-price">
                                                                    <?= $product['old_price']; ?>
                                                                </del>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Brand logo block Start  -->
                    <div class="brand-logo">
                        <div class="">
                            <div class="row brand">
                                <div class="col-md-12">
                                    <div id="brand-logo" class="owl-carousel align_center">
                                        <div class="item"><img src="/templates/iwhy/images/brand1.png" alt="Electrro"></div>
                                        <div class="item"><img src="/templates/iwhy/images/brand2.png" alt="Electrro"></div>
                                        <div class="item"><img src="/templates/iwhy/images/brand3.png" alt="Electrro"></div>
                                        <div class="item"><img src="/templates/iwhy/images/brand4.png" alt="Electrro"></div>
                                        <div class="item"><img src="/templates/iwhy/images/brand5.png" alt="Electrro"></div>
                                        <div class="item"><img src="/templates/iwhy/images/brand6.png" alt="Electrro"></div>
                                        <div class="item"><img src="/templates/iwhy/images/brand7.png" alt="Electrro"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Brand logo block End  -->
                </div>
                <div class="col-lg-2 col-md-3 mb-sm-30 col-lgmd-20per mb-xs-30 left-side float-none-sm ">
                    <div class="sidebar-block">
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
                        <div class="sidebar-box mb-40 visible-md visible-lg">
                                <img src="/templates/iwhy/images/banner-l.jpg" alt="Electrro">
                            </a>
                        </div>

                        <!--Blog Block Start -->
                        <div class="sidebar-box mb-40"><span class="opener plus"></span>
                            <div class="">
                                <div class="sidebar-title">
                                    <h3>Новости</h3> <span></span>
                                </div>
                                <div class="sidebar-contant">
                                    <div class="">
                                        <div class="blog-item mb-30">
                                            <?php foreach ($newsRecent as $item): ?>
                                            <div class="">
                                                <div class="">
                                                    <div class="blog-media mainb">
                                                        <img src="<?= News::getImage($item['id']); ?>" alt="<?= $item['title']; ?>">
                                                        <a href="/news/<?= $item['id']; ?>" title="<?= $item['title']; ?>" class="read">&nbsp;</a>
                                                        <div class="effect"></div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="blog-detail">
                                                        <!-- <div class="date"> 22 <span>/ april</span></div> -->
                                                        <div class="blog-title"><a title="Подробнее" href="/news/<?= $item['id']; ?>"><?= $item['title']; ?></a></div>
                                                        <div class="post-info">
                                                            <p><?= $item['short_content']; ?> ... </p>
                                                            <p><a href="/news/<?= $item['id']; ?>" title="Подробнее">Читать</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog Block End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->

    <?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>