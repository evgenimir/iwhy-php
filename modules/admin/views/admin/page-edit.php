<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <div class="col-lg-12">
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="card" style="padding: 20px;">
            <h3 class="title" style="padding-top: 20px; padding-bottom: 30px;">Редактирование страницы "<?= $item['title']; ?>"</h3>
            <div class="login-form" id="label-padd">
                <form action="#" method="post" >

                    <label for="name">Название страницы (тег title)</label>
                    <input id="name" style="max-width: 350px" type="text" class="form-control border-input" name="title" placeholder="" value="<?= $item['title']; ?>">

                    <label>Мета-описание (тег description)</label>
                    <textarea style="max-width: 350px" rows="3" class="form-control border-input" name="description" placeholder="" value=""><?= $item['description']; ?></textarea>

                    <label>Ключевые слова (тег keywords)</label>
                    <textarea style="max-width: 350px" rows="4" class="form-control border-input" name="keywords" placeholder="" value=""><?= $item['keywords']; ?></textarea>

                    <div style="max-width: 1400px">
                        <label>Контент (главная область) страницы</label>
                        <textarea style="max-width: 850px" rows="40" class="form-control border-input" name="content" placeholder="" value=""><?= $item['content']; ?></textarea>
                    </div>

                    <input type="submit" style="margin-top:30px" class="btn add-image-button" name="submit" value="Отредактировать">

                </form>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>