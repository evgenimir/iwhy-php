<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <a style="margin-top: 30px" class="btn add-image-button" href="/admin/news/create">Добавить новость</a>

    <h3>Список всех новостей</h3>

    <table style="max-width: 1200px" class="table-bordered table-striped table">
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Короткий текст</th>
            <th>Дата</th>
            <th>Статус</th>
            <th colspan="3">Действия</th>
        </tr>
        <?php foreach ($newsAll as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['title']; ?></td>
                <td><?= $item['short_content']; ?></td>
                <td><?= $item['date']; ?></td>
                <td><?= News::getParamsText($item['status']); ?></td>
                <td style="text-align: center"><a class="text-info" style="font-size: 2em;" target="_blank" href="/news/<?= $item['id']; ?>" title="Редактировать"><i class="fa fa-search"></i></a></td>
                <td style="text-align: center"><a class="text-warning" style="font-size: 2em;" href="/admin/news/update/<?= $item['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                <td style="text-align: center"><a class="text-danger" style="font-size: 2em;" href="/admin/news/delete/<?= $item['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a style="margin-top: 20px; margin-bottom: 30px" class="btn add-image-button" href="/admin/news/create">Добавить новость</a>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>