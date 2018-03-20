<?php

/**
 * Контроллер AdminController
 * Главный контрллер админпанели
 */
class AdminController extends AdminBase
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        require_once(ROOT . '/modules/admin/views/admin/index.php');
        return true;
    }

    /**
     * Action для страницы О Нас
     */
    public function actionAbout()
    {
        // Проверка доступа
        self::checkAdmin();
        // Ключ страницы О нас
        $key_word = 'about';
        $item = Page::getPage($key_word);

        // Если форма отправлена
        // Получаем данные из формы редактирования. При необходимости можно валидировать значения
        if (isset($_POST['submit'])) {

            $title = strip_tags($_POST['title']);
            $description = strip_tags($_POST['description']);
            $keywords = strip_tags($_POST['keywords']);
            $content = $_POST['content'];

            Page::updatePageByKey($title, $description, $keywords, $content, $key_word);

            header("Location: /admin");
        }

        require_once(ROOT . '/modules/admin/views/admin/page-edit.php');
        return true;
    }

    public function actionContact()
    {
        // Проверка доступа
        self::checkAdmin();
        // Ключ страницы Контакты
        $key_word = 'contacts';
        $item = Page::getPage($key_word);

        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $title = strip_tags($_POST['title']);
            $description = strip_tags($_POST['description']);
            $keywords = strip_tags($_POST['keywords']);
            $content = $_POST['content'];

            Page::updatePageByKey($title, $description, $keywords, $content, $key_word);

            header("Location: /admin");
        }

        require_once(ROOT . '/modules/admin/views/admin/page-edit.php');
        return true;
    }

    public function actionDelivery()
    {
        // Проверка доступа
        self::checkAdmin();
        // Ключ страницы Доставка
        $key_word = 'contacts';
        $item = Page::getPage($key_word);

        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $title = strip_tags($_POST['title']);
            $description = strip_tags($_POST['description']);
            $keywords = strip_tags($_POST['keywords']);
            $content = $_POST['content'];

            Page::updatePageByKey($title, $description, $keywords, $content, $key_word);

            header("Location: /admin");
        }

        require_once(ROOT . '/modules/admin/views/admin/page-edit.php');
        return true;
    }

}