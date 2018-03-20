<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 13.02.2018
 * Time: 22:17
 */

class Page
{

    /**
     * Возвращает страницу с указанным ключевым словом
     *
     * @param string $keyword <p>Ключевое слово</p>
     * @return array
     */
    public static function getPage($keyword)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст подготовленного запроса
        $result = $db->query('SELECT * FROM `other_page` WHERE `key_word` = \'' . $keyword . '\'');
        $result->setFetchMode(PDO::FETCH_ASSOC); // - оставляет названия полей в качестве ключей
        $page = $result->fetch();

        return $page;

    }

    /**
     * Метод обновляет страницу по кючевому слову
     *
     * @param string $keyword <p>Ключевое слово</p>
     * @param string $title <p>Название страницы</p>
     * @param string $description <p>Мета description описание</p>
     * @param string $content <p>Оснвной текст страницы</p>
     * @param string $key_word <p>Мета keywords ключевые слова/p>
     *
     * @return array
     */
    public static function updatePageByKey($keywords, $title, $description, $content, $key_word)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE other_page
            SET 
                title = :title, 
                description = :description, 
                keywords = :keywords,
                content = :content
            WHERE key_word = :key_word";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':key_word', $key_word, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_INT);
        $result->bindParam(':keywords', $keywords, PDO::PARAM_INT);
        $result->bindParam(':content', $content, PDO::PARAM_INT);
        return $result->execute();
    }

}