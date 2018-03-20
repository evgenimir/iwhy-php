<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 28.01.2018
 * Time: 23:46
 */

class Category
{

    /**
     * Возвращает массив категорий для списка на сайте <br/>
     * (при этом в результат попадают и включенные категории)
     * @return array <p>Массив категорий</p>
     */
    public static function getCategoryList()
    {
        // Соединяемся с Базой
        $db = Db::getConnection();
        // Создаем пустой массив для списка категорий
        $categoryList = array();
        // Запрос к базе данных
        $result = $db->query('SELECT id, name FROM category '
            . 'ORDER BY sort_order ASC');

        // Создаем массив с идентификаторами и названиями категорий из таблицы category
        foreach ($result as $row) {
            $categoryList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
            ];
        }

        return $categoryList;
    }

    /**
     * Возвращает массив категорий для списка в админпанели <br/>
     * (при этом в результат попадают и включенные и выключенные категории)
     * @return array <p>Массив категорий</p>
     */
    public static function getCategoriesListAdmin()
    {
        // Соединяемся с Базой
        $db = Db::getConnection();
        // Запрос к базе данных
        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY id DESC');

        // Создаем массив категорий
        foreach ($result as $row)
        {
            $categoryList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'sort_order' => $row['sort_order'],
                'status' => $row['status'],
            ];
        }

        return $categoryList;
    }

    /**
     * Удаляет категорию с заданным id
     * @param integer $id
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирование категории с заданным id
     * @param integer $id <p>id категории</p>
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateCategoryById($id, $name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE category
            SET 
                name = :name, 
                sort_order = :sort_order, 
                status = :status
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Возвращает категорию с указанным id
     * @param integer $id <p>id категории</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE id = :id';
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Выполняем запрос
        $result->execute();
        // Возвращаем данные
        return $result->fetch();
    }

    /**
     * Возвращает текстое пояснение статуса для категории :<br/>
     * <i>0 - Скрыта, 1 - Отображается</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return '<span class="text-success">Отображается</span>';
                break;
            case '0':
                return '<span class="text-danger">Скрыта</span>';
                break;
        }
    }

    /**
     * Добавляет новую категорию
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат добавления записи в таблицу</p>
     */
    public static function createCategory($name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO category (name, sort_order, status) '
            . 'VALUES (:name, :sort_order, :status)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

}