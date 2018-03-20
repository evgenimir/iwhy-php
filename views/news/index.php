<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>
<section class="ptb-95">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-listing">
                    <div class="row">
                        <?php foreach ($newsAll as $item): ?>
                        <div class="col-lg-6 col-xs-12">
                            <div class="blog-item">
                                <div class="blog-media mb-30">
                                    <img src="<?= News::getImage($item['id']); ?>" alt="<?= $item['title'] ;?>">
                                    <a href="/news/<?= $item['id']; ?>" title="Подробнее" class="read">&nbsp;</a>
                                </div>
                                <div class="blog-detail">
                                    <span class="post-date"><?= $item['date'] ;?></span>
                                    <h3><a href="single-blog.html"><?= $item['title'] ;?></a></h3>
                                    <p><?= $item['short_content'] ;?>...</p>
                                    <p><a title="Перейти к полной версии" href="/news/<?= $item['id']; ?>">Подробнее</a></p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
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
