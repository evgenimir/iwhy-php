<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

<!-- CONTAIN START -->
<section class="checkout-section ptb-95">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2">
                    <?php if ($result): ?>
                        <div class="alert alert-success" style="text-align: center;">
                            <strong>Спасибо за регистрацию!</strong>
                            <br>Теперь вы можете войти в кабинет, используя свои данные
                        </div>
                        <h4 style="text-align: center">
                            <a style="text-decoration: underline" href="/user/login">Войти в аккаунт</a>
                        </h4>
                    <?php else: ?>
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
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                        <form class="main-form full" action="#" method="post">
                            <div class="row">
                                <div class="col-xs-12 mb-20">
                                    <div class="heading-part heading-bg">
                                        <h2 class="heading">Регистрация аккаунта покупателя</h2>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-box">
                                        <label for="f-name">Имя</label>
                                        <input type="text" name="name" required placeholder="Введите имя">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-box">
                                        <label for="login-email">E-mail</label>
                                        <input name="email" type="email" required placeholder="Введите e-mail">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-box">
                                        <label for="login-pass">Пароль</label>
                                        <input name="password" type="password" required placeholder="Введите пароль">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button style="width: 100%; border-radius: 0;"name="submit" type="submit" class="btn-color right-side">Зарегистрироваться</button>
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
