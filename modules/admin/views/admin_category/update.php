<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

<div class="col-lg-12" style="max-width: 800px">

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <div class="">
        <div class="card" style="padding: 20px;">
            <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Редактировать категорию "<?= $category['name']; ?>"</h4>
            <div class="login-form" id="label-padd">
                <form action="#" method="post" >

                    <label>Название категории</label>
                    <input type="text" class="form-control border-input" name="name" placeholder="" value="<?= $category['name']; ?>">

                    <label>Порядковый номер</label>
                    <input type="text" class="form-control border-input" name="sort_order" placeholder="" value="<?= $category['sort_order']; ?>">

                    <label>Статус</label>
                    <select class="list-block" name="status">
                        <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                        <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                    </select>

                    <input type="submit" style="margin-top:30px" class="btn add-image-button" name="submit" value="Отредактировать">

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>