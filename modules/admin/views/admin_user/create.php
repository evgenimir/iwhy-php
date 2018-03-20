<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>


<div class="col-lg-8 col-md-8">

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <div>
        <div class="card" style="padding: 20px;">
            <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Добавить нового пользователя</h4>
            <div class="login-form" id="label-padd">
            <form action="#" method="post" >

                <label>Имя пользователя</label>
                <input type="text" class="form-control border-input" name="name" placeholder="" value="">

                <label>E-mail</label>
                <input type="text" class="form-control border-input" name="email" placeholder="" value="">

                <label>Пароль</label>
                <input type="text" class="form-control border-input" name="password" placeholder="" value="">

                <label>Статус (роль)</label>
                <select class="list-block" name="is_admin">
                    <option value="0" class="text-success" selected="selected">Обычный</option>
                    <option value="1" class="text-danger" style="font-weight: bold">Администратор</option>
                </select>

                <input type="submit" style="margin-top:30px" class="btn add-button" name="submit" value="Добавить пользователя">

            </form>
        </div>
    </div>
</div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>