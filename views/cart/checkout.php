<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

    <!-- CONTAIN START -->
    <section class="checkout-section ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                            <div class="confirm-text">
                                <?php if ($result): ?>
                                    <div class="alert alert-success" style="text-align: center;">
                                        <strong>Спасибо за заказ!</strong><br> Скоро наш менеджер свяжется с Вами
                                    </div>
                                    <h4 style="text-align: center">
                                        <a style="text-decoration: underline" href="/">Вернуться на главную</a>
                                    </h4>
                                <?php else: ?>
                                <div class="alert alert-warning">
                                    <p>Выбрано товаров: <?= $totalQuantity; ?>, на сумму: <strong><?= $totalPrice;?></strong> руб.</p>
                                </div>
                                <?php if (isset($errors) && is_array($errors)):?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li> - <?= $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <form class="main-form full" action="#" method="post">
                                <div class="row">
                                    <div class="col-xs-12 mb-20">
                                        <div class="heading-part heading-bg">
                                            <h2 class="heading">Оформить заказ</h2>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-box">
                                            <label for="userName">Имя</label>
                                            <input name="userName" type="text" required placeholder="Имя" value="<?= $userName; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-box">
                                            <label for="userPhone">Телефон</label>
                                            <input name="userPhone" type="tel" required placeholder="Телефон" value="<?= $userPhone; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-box">
                                            <label for="userComment">Комментарий</label>
                                            <input name="userComment" type="text" required placeholder="Комментарий ... " value="<?= $userComment; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <button style="width: 100%; border-radius: 0;"name="submit" type="submit" class="btn-color right-side">Оформить заказ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>