<?php

/**
 * Контроллер AdminUserController
 * Управление пользователями в админпанели
 */
class AdminUserController extends AdminBase
{

    /**
     * Action для страницы "Управление товарами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров
        $userList = User::getUserList();

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_user/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить товар"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список пользователей
        $userList = User::getUserList();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = strip_tags($_POST['name']);
            $options['email'] = $_POST['email'];
            $options['password'] = $_POST['password'];
            $options['is_admin'] = $_POST['is_admin'];
            // Флаг ошибок в форме
            $errors = false;

            User::checkName($options['name']) ? '<br>$name - Okkk' : $errors[] = 'Имя не должно быть короче 2 символов';
            User::checkEmail($options['email']) ? '<br>$email - Okkk' : $errors[] = 'Неправильный email';
            User::checkPassword($options['password']) ? '<br>$password - Okkk' : $errors[] = 'Пароль не должен быть короче 6 символов';

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = User::create($options);

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/user");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_user/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать товар"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список категорий для выпадающего списка
        $userList = User::getUserList();
        // Получаем данные о конкретном заказе
        $user = User::getUserById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = strip_tags($_POST['name']);
            $options['email'] = $_POST['email'];
            $options['password'] = $_POST['password'];
            $options['is_admin'] = $_POST['is_admin'];
            // Флаг ошибок в форме
            $errors = false;

            User::checkName($options['name']) ? : $errors[] = 'Имя не должно быть короче 2 символов';
            User::checkEmail($options['email']) ? : $errors[] = 'Неправильный email';
            User::checkPassword($options['password']) ? : $errors[] = 'Пароль не должен быть короче 6 символов';

            $options['password']= password_hash($options['password'], PASSWORD_DEFAULT);

            // Сохраняем изменения
            User::updateUser($id, $options);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_user/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить товар"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        $user = User::getUserById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Product::deleteProductById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_user/delete.php');
        return true;
    }
}