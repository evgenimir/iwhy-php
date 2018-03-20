<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>


    <div class="col-lg-12" style="max-width: 800px">

        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="card" style="padding: 20px;">
            <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Редактировать товар № "<?= $product['code'];?>"<br><?= $product['name'];?></h4>
            <div class="login-form" id="label-padd">
                <form action="#" method="post" enctype="multipart/form-data">

                    <label>Название товара</label>
                    <input type="text" class="form-control border-input" name="name" placeholder="" value="<?= $product['name'];?>">

                    <label>Артикул</label>
                    <input type="text" class="form-control border-input" name="code" placeholder="" value="<?= $product['code'];?>">

                    <label>Стоимость, руб.</label>
                    <input type="text" class="form-control border-input" name="price" placeholder="" value="<?= $product['price'];?>">

                    <label>Старая цена</label>
                    <input type="text" class="form-control border-input" name="old_price" placeholder="" value="<?= $product['old_price'];?>">

                    <label>Категория</label>
                    <select name="category_id" class="list-block">
                        <?php if (is_array($categoriesList)): ?>
                            <?php foreach ($categoriesList as $category): ?>
                                <option value="<?= $category['id']; ?>"
                                    <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                    <?= $category['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <label>Производитель</label>
                    <input type="text" class="form-control border-input" name="brand" placeholder="" value="<?= $product['brand'];?>">

                    <label style="display: block">Изображение товара</label>
                    <img style="padding-bottom: 10px;" src="<?= Product::getImage($product['id']); ?>" width="200" alt="" />
                    <input type="file" name="image" placeholder="" value="<?= $product['image']; ?>">

                    <label>Детальное описание</label>
                    <textarea rows="4" class="form-control border-input" name="description" ><?= $product['description'];?></textarea>


                    <label>Наличие на складе (шт.)</label>
                    <input style="max-width: 100px" class="form-control border-input" type="text" name="availability" placeholder="" value="<?= $product['availability']; ?>">

                    <label>Новинка</label>
                    <select class="list-block" name="is_new">
                        <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                    </select>

                    <label>Рекомендуемый</label>
                    <select class="list-block" name="is_reccomended">
                        <option value="1" <?php if ($product['is_reccomended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['is_reccomended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                    </select>

                    <label>Распродажа</label>
                    <select class="list-block" name="sale">
                        <option value="1" <?php if ($product['sale'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['sale'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                    </select>

                    <label>Эксклюзивный</label>
                    <select class="list-block" name="exclusive">
                        <option value="1" <?php if ($product['exclusive'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['exclusive'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                    </select>

                    <label>Статус</label>
                    <select class="list-block" name="status">
                        <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                        <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                    </select>

                    <input type="submit" style="margin-top:30px" class="btn add-image-button" name="submit" value="Обновить товар">

                    </form>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>