<?php

/**
 * Контроллер CabinetController
 * Кабинет пользователя
 */
class CabinetController
{

    /**
     * Action для страницы "Кабинет пользователя"
     */
    public function actionIndex()
    {
        // Список категорий в футере
        $categories = Category::getCategoryList();
        // Получает идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получает информацию о пользователе из БД
        $user = User::getUserById($userId);

        // Подключение вида
        require_once (ROOT . '/views/cabinet/index.php');
        return true;

    }

    /**
     * Action для страницы "Редактирование данных пользователя"
     */
    public function actionEdit()
    {
        // Список категорий в футере
        $categories = Category::getCategoryList();
        // Получает идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получает информацию о пользователе из БД
        $user = User::getUserById($userId);

        // Заполняем переменные для полей формы
        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        // Если форма отправлена
        // Подключает данные из формы редактирования
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            User::checkName($name) ? '<br>$name - Okkk' : $errors[] = 'Имя не должно быть короче 2 символов';
            User::checkPassword($password) ? '<br>$password - Okkk' : $errors[] = 'Пароль не должен быть короче 6 символов';

            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }
        }

        // Подулючает вид
        require_once(ROOT . '/views/cabinet/edit.php');
        return true;
    }

}