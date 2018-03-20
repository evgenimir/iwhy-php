<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <a style="margin-top: 30px" class="btn add-image-button" href="/admin/category/create">Добавить категорию</a>

    <h3>Список всех категорий</h3>

    <table style="max-width: 900px;" class="table-bordered table-striped table">
        <tr>
            <th>ID</th>
            <th>Название категории</th>
            <th>Порядковый номер</th>
            <th>Статус</th>
            <th>Ред.</th>
            <th>Удалить</th>
        </tr>
        <?php foreach ($categoriesList as $category): ?>
            <tr>
                <td><?php echo $category['id']; ?></td>
                <td><?php echo $category['name']; ?></td>
                <td><?php echo $category['sort_order']; ?></td>
                <td><?php echo Category::getStatusText($category['status']); ?></td>
                <td style="text-align: center"><a class="text-warning" style="font-size: 2em;" href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                <td style="text-align: center"><a class="text-danger" style="font-size: 2em;" href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a style="margin-top: 20px; margin-bottom: 30px" class="btn add-image-button" href="/admin/category/create">Добавить категорию</a>


<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>