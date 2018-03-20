<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

    <!-- CONTAIN START -->
    <section class="checkout-section ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
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
                                                <h2 class="heading">Войти в аккаунт</h2>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="input-box">
                                                <label for="login-email">E-mail</label>
                                                <input name="email" type="email" required placeholder="Ваш e-mail">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="input-box">
                                                <label for="login-pass">Пароль</label>
                                                <input name="password" type="password" required placeholder="Введите пароль">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <button style="width: 100%; border-radius: 0;"name="submit" type="submit" class="btn-color right-side">Войти</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>