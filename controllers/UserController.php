<?php

/**
 * Контроллер UserController
 * Пользователи
 */
class UserController
{

    /**
     * Action для страницы "Регистрация"
     */
    public function actionRegister()
    {
        $categories = Category::getCategoryList();

        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if(User::isGuest()) {

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $errors = false;

                User::checkName($name) ? '<br>$name - Okkk' : $errors[] = 'Имя не должно быть короче 2 символов';
                User::checkEmail($email) ? '<br>$email - Okkk' : $errors[] = 'Неправильный email';
                User::checkPassword($password) ? '<br>$password - Okkk' : $errors[] = 'Пароль не должен быть короче 6 символов';

                if (User::checkEmailExists($email)) {
                    echo $errors[] = 'Такой email уже используется';
                }

                if ($errors == false) {
                    $result = User::register($name, $email, $password);
                }
            }

            require_once(ROOT . '/views/user/register.php');
            return true;
        }

        header("Location: /cabinet/");

    }

    /**
     * Action для страницы "Вход на сайт"
     */
    public function actionLogin()
    {
        $categories = Category::getCategoryList();

        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            User::checkEmail($email) ? : $errors[] = 'Неправильный email';
            User::checkPassword($password) ? : $errors[] = 'Пароль не должен быть короче 6 символов';

            // Проверяем, существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - выводим ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet/");
            }
        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        unset($_SESSION["user"]); // Удаляем юзера из сессии
        header ("Location: /");
    }

}