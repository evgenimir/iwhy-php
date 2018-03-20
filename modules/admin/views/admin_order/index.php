<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <h3>Список всех заказов</h3>

    <table style="max-width: 1200px" class="table-bordered table-striped table">
        <tr>
            <th>ID</th>
            <th>Имя клиента</th>
            <th>Телефон</th>
            <th>Дата покупки</th>
            <th>Статус</th>
            <th>Детали</th>
            <th>Ред.</th>
            <th>Удалить</th>
        </tr>
        <?php foreach ($ordersList as $order): ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['user_name']; ?></td>
                <td><?php echo $order['user_phone']; ?></td>
                <td><?php echo $order['date']; ?></td>
                <td><?php echo Order::getStatusText($order['status']); ?></td>
                <td style="text-align: center"><a class="text-success" style="font-size: 2em;" href="/admin/order/view/<?php echo $order['id']; ?>" title="Редактировать"><i class="ti-search"></i></a></td>
                <td style="text-align: center"><a class="text-warning" style="font-size: 2em;" href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                <td style="text-align: center"><a class="text-danger" style="font-size: 2em;" href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>