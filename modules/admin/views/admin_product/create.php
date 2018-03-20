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

            <div class="card" style="padding: 20px;">
                <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Добавить новый товар</h4>
                <div class="login-form" id="label-padd">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <label>Название товара</label>
                        <input type="text" class="form-control border-input" name="name" placeholder="" value="">

                        <label>Артикул</label>
                        <input type="text" class="form-control border-input" name="code" placeholder="" value="">

                        <label>Стоимость, руб.</label>
                        <input type="text" class="form-control border-input" name="price" placeholder="" value="">

                        <label>Старая цена</label>
                        <input type="text" class="form-control border-input" name="old_price" placeholder="" value="">

                        <label>Категория</label>
                        <select name="category_id" class="list-block">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option class="form-control" value="<?= $category['id']; ?>">
                                        <?= $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <label>Производитель</label>
                        <input type="text" class="form-control border-input" name="brand" placeholder="" value="">

                        <label style="display: block">Изображение товара</label>
                        <input type="file" name="image" placeholder="" value="">

                        <label>Детальное описание</label>
                        <textarea rows="4" class="form-control border-input" name="description"></textarea>

                        <label>Наличие на складе (шт.)</label>
                        <input style="max-width: 100px" type="text" class="form-control border-input" name="availability" placeholder="" value="">

                        <label>Новинка</label>
                        <select class="list-block" name="is_new">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <label>Рекомендуемый</label>
                        <select class="list-block" name="is_reccomended">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select>

                        <label>Расподажа</label>
                        <select class="list-block" name="sale">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select>

                        <label>Эксклюзивный товар</label>
                        <select class="list-block" name="exclusive">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select>

                        <label>Статус</label>
                        <select class="list-block" name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>

                        <input type="submit" style="margin-top:30px" class="btn add-button" name="submit" value="Добавить товар">

                    </form>
                </div>
            </div>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>