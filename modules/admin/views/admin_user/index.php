<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <a style="margin-top: 30px" class="btn add-image-button" href="/admin/user/create">Добавить нового пользователя</a>

    <h3>Список зарегистрированных пользователей</h3>

    <table style="max-width: 800px" class="table-bordered table-striped table">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>E-mail</th>
            <th>Статус</th>
            <th colspan="2" style="text-align: center">Действия</th>
        </tr>
        <?php foreach ($userList as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= User::getStatusText($user['is_admin']); ?></td>
                <td style="text-align: center; padding: 5px; 3px;"><a class="text-warning" style="font-size: 2em;" href="/admin/user/update/<?= $user['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                <td style="text-align: center; padding: 5px; 3px;"><a class="text-danger" style="font-size: 2em;" href="/admin/user/delete/<?= $user['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a style="margin-top: 20px; margin-bottom: 30px" class="btn add-image-button" href="/admin/user/create">Добавить нового пользователя</a>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>