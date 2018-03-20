<?php require_once(ROOT . '/modules/admin/views/layouts/admin/head.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/sidebar.php'); ?>
<?php require_once(ROOT . '/modules/admin/views/layouts/admin/dashboard.php'); ?>

    <div style="text-align: center; clear: both; padding-top: 50px">
        <h4>Удалить новость "<?=$newsItem['title']; ?>"</h4>
        <p>Вы действительно хотите удалить новость безвозвратно?</p>
        <form method="post">
            <input class="delete-button" type="submit" name="submit" value="Удалить безвозвратно" />
        </form>
    </div>

<?php require_once(ROOT . '/modules/admin/views/layouts/admin/footer.php'); ?>