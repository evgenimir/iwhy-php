<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>


    <div>

        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="col-lg-12">
            <div class="card" style="padding: 20px;">
                <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Обновить новость</h4>
                <div class="login-form" id="label-padd">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <label>Название новости</label>
                        <input style="max-width: 300px" type="text" class="form-control border-input" name="title" placeholder="" value="<?= $newsItem['title'];?>">

                        <label>Анонс (короткий текст) статьи</label>
                        <textarea style="max-width: 300px" rows="5" class="form-control border-input" name="short_content" ><?= $newsItem['short_content'];?></textarea>

                        <label style="display: block">Главное изображение статьи</label>
                        <img style="padding-bottom: 10px;" src="<?= News::getImage($newsItem['id']); ?>" width="200" alt="" />
                        <input type="file" name="preview" placeholder="" value="<?= $newsItem['preview']; ?>">

                        <label>Статус</label>
                        <select class="list-block" name="status">
                            <option value="1" <?php if ($newsItem['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($newsItem['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                        </select>

                        <div style="max-width: 1400px">
                            <label>Полный текст статьи</label>
                            <textarea style="max-width: 1150px" rows="25" class="form-control border-input" name="content" ><?= $newsItem['content'];?></textarea>
                        </div>

                        <input type="submit" style="margin-top:30px" class="btn add-image-button" name="submit" value="Обновить новость">

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>