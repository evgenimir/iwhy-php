<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <a style="margin-top: 30px" class="btn add-image-button" href="/admin/product/create">Добавить новый товар</a>

    <h3>Список всех товаров</h3>

    <table style="max-width: 1200px" class="table-bordered table-striped table">
        <tr>
            <th>ID</th>
            <th>Артикул</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Старая цена</th>
            <th>Наличие</th>
            <th>Скидка</th>
            <th>Рекоменд.</th>
            <th>Спец.</th>
            <th>Ред.</th>
            <th>Удалить</th>
        </tr>
        <?php foreach ($productsList as $product): ?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['code']; ?></td>
                <td><?= $product['name']; ?></td>
                <td><?= $product['price']; ?></td>
                <td><?= $product['old_price']; ?></td>
                <td style="text-align: center"><?=$product['availability']; ?></td>
                <td style="text-align: center"><?= Product::getParamsText($product['sale']); ?></td>
                <td style="text-align: center"><?= Product::getParamsText($product['is_reccomended']); ?></td>
                <td style="text-align: center"><?= Product::getParamsText($product['exclusive']); ?></td>
                <td style="text-align: center"><a class="text-warning" style="font-size: 2em;" href="/admin/product/update/<?= $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                <td style="text-align: center"><a class="text-danger" style="font-size: 2em;" href="/admin/product/delete/<?= $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a style="margin-top: 20px; margin-bottom: 30px" class="btn add-image-button" href="/admin/product/create">Добавить новый товар</a>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>