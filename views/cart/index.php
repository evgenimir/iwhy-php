<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

<!-- CONTAIN START -->
<section class="ptb-95">
    <div class="container">
        <?php if ($productsInCart): ?>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="cart-item-table commun-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Товар</th>
                                <th>Название</th>
                                <th>Цена</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product): ?>
                            <tr>
                                <td>
                                    <a href="/product/<?= $product['id']; ?>">
                                        <div class="product-cart">
                                            <img title="<?= $product['name']; ?>" alt="<?= $product['name']; ?>" src="<?= Product::getImage($product['id']); ?>">
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="product-title">
                                        <a title="<?= $product['name']; ?>" href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a>
                                    </div>
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            <div class="base-price price-box"> <span class="price"><?= $product['price']; ?></span> </div>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a href="/cart/delete/<?= $product['id']; ?>">
                                        <i title="Удалить товар" data-id="100" class="fa fa-trash cart-remove-item"></i>
                                    </a>
                                </td>
                            </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="mtb-30">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="cart-total-table commun-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="2">Общая цена</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><b>Добавлено товаров на сумму:</b></td>
                                    <td><div class="price-box"> <span class="price"><?= $totalPrice; ?> руб.</span> </div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="mt-30">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-4 col-md-6 col-xs-6">
                    <a title="Продолжить покупки" href="/catalog/" class="btn btn-blue"><span><i class="fa fa-angle-left"></i></span>К покупкам</a>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-6">
                    <div class="right-side"> <a href="/cart/checkout" title="Перейти к оформлению заказа" class="btn btn-color">Оформить заказ<span><i class="fa fa-angle-right"></i></span></a> </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Корзина пуста</h2>
                <h4>Вы не добавили товары в корзину</h4>
                <p>Пожалуйста, перейдите на главную, чтобы продолжить покупки: <a href="/" style="text-decoration: underline;">перейти</a></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- CONTAINER END -->

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>
