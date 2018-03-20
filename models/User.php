<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 29.01.2018
 * Time: 18:28
 */

class User
{
    /**
     * Регистрирует пользователя
     *
     * @param string $name
     * @param string $email
     * @param string $password
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function register($name, $email, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Хешировение пароля
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        // Подготовленный запрос к БД
        $sql = 'INSERT INTO user (name, email, password) '
            . 'VALUES (:name, :email, :password)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $hashPass, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * Создает пользователя пользователя
     *
     * @param string $name
     * @param string $email
     * @param string $password
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function create($name, $email, $password, $is_admin)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Хешировение пароля
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        // Подготовленный запрос
        $sql = 'INSERT INTO user (name, email, password, is_admin) '
            . 'VALUES (:name, :email, :password, :is_admin)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $hashPass, PDO::PARAM_STR);
        $result->bindParam(':is_admin', $is_admin, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * Проверяет введенное имя
     *
     * @param string $name
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }

        return false;
    }

    /**
     * Проверяет введенный пароль
     *
     * @param string $password
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }

        return false;
    }

    /**
     * Проверяет введенный email
     *
     * @param string $email
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    /**
     * Проверяет введенный телефон
     *
     * @param integer $phone
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function checkPhone($phone)
    {
        if (preg_match('/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', $phone)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет email на уникальность
     *
     * @param integer $email
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function checkEmailExists($email)
    {
        // Подключение к БД
        $db = Db::getConnection();
        // Запрос к БД
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR); // Избежание SQL иньекции
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        }

        return false;
    }

    /**
     * Проверяет введенный логин и пароль
     *
     * @param string $email
     * @param string $password
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function checkUserData($email, $password)
    {
        // Подключние к БД
        $db = Db::getConnection();
        // Подготовленный запрос
        $sql = 'SELECT * FROM user WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT); // Избежание SQL иньекции
        $result->execute();

        $user = $result->fetch();

        if (password_verify($password, $user['password'])) {
            return $user['id'];
        }

        return false;
    }

    /**
     * Сохраняет пользователя в сессию
     *
     * @param integer @userId
     *
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    /**
     * Проверяет авторизован ли пользователь
     * Если не автризован, перенаправляет его на страницу авторизации
     */
    public static function checkLogged()
    {
        // Есть ли в сесии идентификатор пользователя ($userId из auth($userId)
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    /**
     * Проверяет авторизован ли пользователь
     *
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function isLogged()
    {
        // Есть ли в сесии идентификатор пользователя ($userId из auth($userId)
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        return false;
    }

    /**
     * Проверяет гость ли пользователь
     *
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }

        return true;
    }

    /**
     * Получает данные пользователя по идентификатору
     *
     * @param integer $id
     *
     * @return array <p>Результат выполнения метода</p>
     */
    public static function getUserById($id)
    {
        if ($id) {
            // Соединение с БД
            $db = Db::getConnection();
            // Запрос к Базе
            $sql = 'SELECT * FROM user WHERE id = :id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT); // Избежание SQL иньекции
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    /**
     * Редактирует данные пользователя
     *
     * @param integer $id
     * @param string $name
     * @param string $password
     *
     * @return array <p>Результат выполнения метода</p>
     */
    public static function edit($id, $name, $password)
    {
        // Подключение к БД
        $db = Db::getConnection();
        // Хещирование пароля
        $password = password_hash($password, PASSWORD_DEFAULT);
        // Запрос к БД
        $sql = "UPDATE user
        SET name = :name, password = :password WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT); // Избежание SQL иньекции
        $result->bindParam(':name', $name, PDO::PARAM_INT); // Избежание SQL иньекции
        $result->bindParam(':password', $password, PDO::PARAM_INT); // Избежание SQL иньекции

        return $result->execute();
    }

    /**
     * Обновление данных пользователя (для админ-панели)
     *
     * @param integer $id
     * @param array $options
     *
     * @return array <p>Результат выполнения метода</p>
     */
    public static function updateUser($id, $options)
    {
        // Подключение к БД
        $db = Db::getConnection();
        // Подготовленный запрос к Базе
        $sql = "UPDATE user
        SET 
          name = :name,
          email = :email,
          password = :password,
          is_admin = :is_admin 
        WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT); // Избежание SQL иньекции
        $result->bindParam(':name', $options['name'], PDO::PARAM_INT); // Избежание SQL иньекции
        $result->bindParam(':email', $options['email'], PDO::PARAM_INT); // Избежание SQL иньекции
        $result->bindParam(':password', $options['password'], PDO::PARAM_INT); // Избежание SQL иньекции
        $result->bindParam(':is_admin', $options['is_admin'], PDO::PARAM_INT); // Избежание SQL иньекции

        return $result->execute();
    }

    /**
     * Возвращает список пользователей
     *
     * @return array
     */
    public static function getUserList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Подготовленый запрос к БД
        $result = $db->query('SELECT * FROM user ORDER BY id DESC');
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Создает массив пользователей
        foreach ($result as $row) {
            $userList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'is_admin' => $row['is_admin'],
            ];
        }

        return $userList;
    }

    public static function getStatusText($text)
    {
        switch ($text) {
            case '1':
                return '<span class="text-danger" style="font-weight: bold;">Администратор</span>';
                break;
            case '0':
                return '<span class="text-success">Пользователь</span>';
                break;
        }
    }

    /**
     * Проверяет пользователя на роль администратора
     *
     * @return bool <p>Результат выполнения метода</p>
     */
    public static function isAdmin()
    {
        // Проверяем авторизирован ли пользователь
        $userId = User::isLogged();
        // Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);

        // Если роль текущего пользователя "admin", отображаем admin-bar
        if ($user['is_admin'] == '1') {
            return true;
        }

        return false;
    }

}