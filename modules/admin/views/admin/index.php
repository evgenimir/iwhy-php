<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

<div style="padding-top: 30px;">
    <div class="col-lg-8">
    <div class="card" style="padding: 20px;">
        <h1>Привет, <?= $user['name']; ?>!</h1>
        <h4>Добро пожаловать в Админ Панель LY Panel</h4>
    </div>
    </div>
</div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>
