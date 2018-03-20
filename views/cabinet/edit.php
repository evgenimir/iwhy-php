<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

    <!-- CONTAIN START -->
    <section class="checkout-section ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ($result): ?>
                        <div class="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2">
                            <div class="alert alert-success" style="text-align: center;">
                                <strong>Данные отредактированы!</strong>
                            </div>
                            <p style="text-align: center">Вернуться в личный кабинет:
                                <a style="text-decoration: underline" href="/cabinet/">вернуться</a></p>
                        </div>
                    <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)):?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?= $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                            <form class="main-form full" action="#" method="post">
                                <div class="row">
                                    <div class="col-xs-12 mb-20">
                                        <div class="heading-part heading-bg">
                                            <h2 class="heading">Редактирование данных</h2>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-box">
                                            <label for="login-email">Ваше Имя</label>
                                            <input name="name" type="name" placeholder="" value="<?= $user['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-box">
                                            <label for="login-pass">Ваш пароль</label>
                                            <input name="password" type="password" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <button style="width: 100%; border-radius: 0;"name="submit" type="submit" class="btn-color right-side">Войти</button>
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