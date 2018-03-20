<?php

/**
 * Контроллер AdminNewsController
 * Управление новостями в админпанели
 */
class AdminNewsController extends AdminBase
{

    /**
     * Action для страницы "Управление новостями"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров
        $newsAll = News::getNewsList();
        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_news/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить новость"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = strip_tags($_POST['title']);
            $options['short_content'] = strip_tags($_POST['short_content']);
            $options['status'] = $_POST['status'];
            $options['content'] = $_POST['content'];
            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = News::createNewsItem($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["preview"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["preview"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/news");
            }
        }
        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_news/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать товар"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем данные о конкретном заказе
        $newsItem = News::getNewsItemById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['title'] = strip_tags($_POST['title']);
            $options['short_content'] = strip_tags($_POST['short_content']);
            $options['status'] = $_POST['status'];
            $options['content'] = $_POST['content'];

            // Сохраняем изменения
            if (News::updateNewsItemById($id, $options)) {
                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["preview"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["preview"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/news/{$id}.jpg");
                }
            }
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/news");
        }
        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_news/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить товар"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $newsItem = News::getNewsItemById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            News::deleteNewsItemById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/news");
        }
        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_news/delete.php');
        return true;
    }
}