<?php

class News
{

    const SHOW_BY_DEFAULT = 10;

    /**
     * Метод возвращает новость по идентификатору
     * @param string #id <p>Идентификатор</p>
     *
     * @return array <p>Список новостей</p>
     */
    public static function getNewsItemById($id)
    {
        $id = intval($id); // Возвращает целое значение переменной $id

        if ($id) {
            // Соединение с Базой
            $db = Db::getConnection();
            // Текст запроса
            $result = $db->query('SELECT * FROM news WHERE id =' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC); // - оставляет названия полей в качестве ключей
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    /**
     * Метод возвращает список новостей
     *
     * @return array <p>Список новостей</p>
     */
    public static function getNewsList()
    {
        // Соединение с Базой
        $db = Db::getConnection();
        // Пустой массив
        $newsList = array();
        // Запрос к базе
        $result = $db->query('SELECT id, title, preview, date, short_content, status FROM news '
            . 'WHERE status="1" '
            . 'ORDER BY date DESC'
        );

        // Создаем массив новостей из таблицы news
        foreach ($result as $row) {
            $newsList[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'preview' => $row['preview'],
                'date' => $row['date'],
                'short_content' => $row['short_content'],
                'status' => $row['status'],
            ];
        }

        return $newsList;
    }

    /**
     * Создание новости
     * @param integer $options <p>Массив с параметрами новости</p>
     *
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function createNewsItem($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO news '
            . '(title, short_content, status, content)'
            . 'VALUES '
            . '(:title, :short_content, :status, :content)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }

        // Иначе возвращаем 0
        return 0;
    }

    /**
     * Обновление новости по идентификатору
     * @param integer $id <p>Идентификатор</p>
     * @param integer $options <p>Массив с параметрами</p>
     *
     * @return array <p>Массив с последнрими записями</p>
     */
    public static function updateNewsItemById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE news
            SET 
                title = :title, 
                short_content = :short_content,
                status = :status, 
                content = :content
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Получаем последние записи с заданным ограничением количества
     * @param integer $limit <p>Ограничение</p>
     *
     * @return array <p>Массив с последнрими записями</p>
     */
    public static function getRecentNews($limit)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Пустой массив
        $newsList = array();
        // Запрос к Базе
        $result = $db->query('SELECT id, title, preview, date, status, short_content FROM news '
            . 'WHERE status="1" '
            . 'ORDER BY date DESC '
            . "LIMIT $limit"
        );

        // Создаем массив последних новостей из таблицы news
        foreach ($result as $row) {
            $newsList[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'preview' => $row['preview'],
                'date' => $row['date'],
                'status' => $row['status'],
                'short_content' => $row['short_content']
            ];
        }

        return $newsList;
    }

    /**
     * Добавляет новую категорию
     * @param integer $id
     *
     * @return boolean <p>Результат удаления - да или нет</p>
     */
    public static function deleteNewsItemById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос на удаление товара с указанным ID
        $sql = 'DELETE FROM news WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Получает картинку по заданному id
     *
     * @return string <p>Адрес картинки или заглушки</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.png';
        // Путь к папке с товарами
        $path = '/upload/images/news/';
        // Путь к изображению товара
        $pathToNewsImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToNewsImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToNewsImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

    public static function getParamsText($status)
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

}