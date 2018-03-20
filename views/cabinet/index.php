<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mtb-60">
                <h3>Личный кабинет клиента</h3>
                <h1>Привет, <?= $user['name']; ?>!</h1>
                <ul class="mtb-20">
                    <li><a href="/cabinet/edit">Редактировать данные</a></li>
                </ul>
                <ul>
                    <li><a href="/">На главную</a></li>
                    <li><a href="/catalog/">Каталог</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>