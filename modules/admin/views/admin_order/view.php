<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <div class="col-lg-8 col-md-10">
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div>
            <div class="card" style="padding: 20px;">
            <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Информация о заказе</h4>
                <table class="table-admin-small table-bordered table-striped table">
                    <tr>
                        <td>Номер заказа</td>
                        <td><?php echo $order['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Имя клиента</td>
                        <td><?php echo $order['user_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Телефон клиента</td>
                        <td><?php echo $order['user_phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Комментарий клиента</td>
                        <td><?php echo $order['user_comment']; ?></td>
                    </tr>
                    <?php if ($order['user_id'] != 0): ?>
                        <tr>
                            <td>ID клиента</td>
                            <td><?php echo $order['user_id']; ?></td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td><b>Статус заказа</b></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>
                    </tr>
                    <tr>
                        <td><b>Дата заказа</b></td>
                        <td><?php echo $order['date']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="card" style="padding: 20px;">
                <h5>Товары в заказе</h5>
                <table class="table-admin-medium table-bordered table-striped table ">
                    <tr>
                        <th>ID товара</th>
                        <th>Артикул товара</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Количество</th>
                    </tr>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><?php echo $product['code']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?> руб.</td>
                            <td><?php echo $productsQuantity[$product['id']]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <a href="/admin/order/" class="btn btn-color"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>