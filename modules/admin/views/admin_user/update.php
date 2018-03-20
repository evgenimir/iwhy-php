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
                <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Отредактировать пользователя "<?= $user['name'] ?>"</h4>
                <div class="login-form" id="label-padd">
                    <form action="#" method="post" >

                        <label>Имя пользователя</label>
                        <input type="text" class="form-control border-input" name="name" placeholder="" value="<?= $user['name'] ?>">

                        <label>E-mail</label>
                        <input type="text" class="form-control border-input" name="email" placeholder="" value="<?= $user['email'] ?>">

                        <label>Пароль</label>
                        <input type="text" class="form-control border-input" name="password" placeholder="" value="">

                        <label>Статус (роль)</label>
                        <select class="list-block" name="is_admin">
                            <option value="0" <?php if ($user['is_admin'] == 0) echo ' selected="selected" class="text-success" '; ?>>Обычный</option>
                            <option value="1" <?php if ($user['is_admin'] == 1) echo ' selected="selected" class="text-danger" style="font-weight: bold"'; ?>>Администратор</option>
                        </select>

                        <?php if ($user['is_admin'] == 0): ?>
                        <input type="submit" style="margin-top:30px" class="btn add-image-button" name="submit" value="Редактировать пользователя">
                        <?php else: ?>
                        <input type="submit" style="margin-top:30px" class="btn danger-button" name="submit" value="Редактировать администратора">
                        <?php endif; ?>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>