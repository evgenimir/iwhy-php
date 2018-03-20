<?php require_once(ROOT . '/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/views/layouts/admin/dashboard.php'); ?>


    <div class="col-lg-8 col-md-8">

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

        <div>
            <div class="card" style="padding: 20px;">
                <h4 class="title" style="padding-top: 20px; padding-bottom: 30px;">Отредактировать заказ</h4>
                <div class="login-form" id="label-padd">
                    <form action="#" method="post">

                        <label>Имя клиента</label>
                        <input class="form-control border-input" type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>">

                        <label>Телефон клиента</label>
                        <input class="form-control border-input" type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>">

                        <label>Комментарий клиента</label>
                        <input class="form-control border-input" type="text" name="userComment" placeholder="" value="<?php echo $order['user_comment']; ?>">

                        <label>Дата оформления заказа</label>
                        <input class="form-control border-input" type="text" name="date" placeholder="" value="<?php echo $order['date']; ?>">

                        <label>Статус</label>
                        <select class="list-block" name="status">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Новый заказ</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обработке</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставляется</option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрыт</option>
                        </select>

                        <input type="submit" style="margin-top:30px" class="btn add-image-button" name="submit" value="Изменить">

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/views/layouts/admin/footer.php'); ?>