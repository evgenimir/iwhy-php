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
                <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Добавить новость</h4>
                <div class="login-form" id="label-padd">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <label>Название новости</label>
                        <input style="max-width: 300px" type="text" class="form-control border-input" name="title" placeholder="" value="">

                        <label>Анонс (короткий текст) статьи</label>
                        <textarea style="max-width: 300px" rows="5" class="form-control border-input" name="short_content" ></textarea>

                        <label style="display: block">Главное изображение статьи</label>
                        <input type="file" name="preview" placeholder="" value="">

                        <label>Статус</label>
                        <select class="list-block" name="status">
                            <option value="1" >Отображается</option>
                            <option value="0" >Скрыта</option>
                        </select>
                        <div style="max-width: 1400px">
                            <label>Полный текст статьи</label>
                            <textarea style="max-width: 1150px" rows="25" class="form-control border-input" name="content" ></textarea>
                        </div>
                        <input type="submit" style="margin-top:30px" class="btn add-button" name="submit" value="Добавить новость">

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>