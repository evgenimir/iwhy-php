<?php

class Product
{

    const SHOW_BY_DEFAULT = 6;

    /**
     * Возвращает массив последних товаров с заданным количеством $count
     *
     * @param int $count <p>Возвращаемое количество товаров</p>
     * @return array <p>Массив товаров</p>
     */
    public static function getLatestProduct($count = self::SHOW_BY_DEFAULT)
    {
        // Возвращаем целое значение переменной
        $count = intval($count);
        // Соединяемся с Базой
        $db = Db::getConnection();
        // Создаем пустой массив
        $productList = array();
        // Запрос к БД
        $result = $db->query('SELECT id, name, old_price, price, image, is_new, is_reccomended, sale FROM product '
            . 'WHERE status = "1" '
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count
        );
        // Получение массива стоварами
        foreach ($result as $row) {
            $productList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'image' => $row['image'],
                'price' => $row['price'],
                'is_new' => $row['is_new'],
                'is_reccomended' => $row['is_reccomended'],
                'old_price' => $row['old_price'],
                'sale' => $row['sale'],
            ];
        }

        return $productList;
    }

    /**
     * Возвращает массив рекомендуемых товаров
     * @param integer $count <p>Возвращаемое количество товаров</p>
     *
     * @return array <p>Массив с товарами</p>
     */
    public static function getRecommendedProduct($count = self::SHOW_BY_DEFAULT)
    {
        // Возвращаем целое значение переменной
        $count = intval($count);
        // Соединяемся с Базой
        $db = Db::getConnection();
        // Создаем пустой массив
        $productList = array();
        // Запрос а БД
        $result = $db->query('SELECT id, name, old_price, price, image, is_new, is_reccomended, sale FROM product '
            . 'WHERE status = "1" AND is_reccomended = "1" '
            . 'ORDER BY RAND() '
            . 'LIMIT ' . $count
        );
        // Получаем массив товаров
        foreach ($result as $row) {
            $productList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'image' => $row['image'],
                'price' => $row['price'],
                'is_new' => $row['is_new'],
                'is_reccomended' => $row['is_reccomended'],
                'old_price' => $row['old_price'],
                'sale' => $row['sale'],
            ];
        }

        return $productList;
    }

    /**
     * Возвращает массив товаров со скидкой
     * @param integer $count <p>Возвращаемое количество товаров</p>
     *
     * @return array <p>Массив с товарами</p>
     */
    public static function getSaleProduct($count = self::SHOW_BY_DEFAULT)
    {
        // Возвращаем целое значение переменной
        $count = intval($count);
        // Соединяемся с Базой
        $db = Db::getConnection();
        // Создаем пустой массив
        $productList = array();
        // Запрос а БД
        $result = $db->query('SELECT id, name, old_price, price, image, is_new, is_reccomended, sale FROM product '
            . 'WHERE status = "1" AND sale = "1" '
            . 'ORDER BY RAND() '
            . 'LIMIT ' . $count
        );
        // Получаем массив товаров
        foreach ($result as $row) {
            $productList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'image' => $row['image'],
                'price' => $row['price'],
                'is_new' => $row['is_new'],
                'is_reccomended' => $row['is_reccomended'],
                'old_price' => $row['old_price'],
                'sale' => $row['sale'],
            ];
        }

        return $productList;
    }

    /**
     * Возвращает массив эксклюзивных товаров
     * @param integer $count <p>Возвращаемое количество товаров</p>
     *
     * @return array <p>Массив с товарами</p>
     */
    public static function getExclusiveProduct($count = self::SHOW_BY_DEFAULT)
    {
        // Возвращаем целое значение переменной
        $count = intval($count);
        // Соединяемся с Базой
        $db = Db::getConnection();
        // Создаем пустой массив
        $productList = array();
        // Запрос а БД
        $result = $db->query('SELECT id, name, old_price, price, image, is_new, is_reccomended, sale FROM product '
            . 'WHERE status = "1" AND exclusive = "1" '
            . 'ORDER BY RAND() '
            . 'LIMIT ' . $count
        );
        // Массив товаров
        foreach ($result as $row) {
            $productList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'image' => $row['image'],
                'price' => $row['price'],
                'is_new' => $row['is_new'],
                'old_price' => $row['old_price'],
                'sale' => $row['sale'],
            ];
        }

        return $productList;
    }

    /**
     * Возвращает все товары со статусом 1
     *
     * @param int $count <p>Количество товаров для пагинации</p>
     * @param int $page <p>Номера страниц пагинации</p>
     * @return array <p>Массив с товарами</p>
     */
    public static function getProductListCatalog($count, $page)
    {
        // Номер страница (пагинации)
        $page = intval($page);
        // Отступ, смещение товаров в зависимости от номера страницы ($page)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        // Подключение к БД
        $db = Db::getConnection();
        // Пустой массив
        $products = array();
        // Запрос к Базе
        $result = $db->query('SELECT id, name, old_price, price, image, is_new, sale FROM product '
            . "WHERE status = '1' "
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count
            . ' OFFSET ' . $offset // Смещение в зависимости от страницы (номера)
        );

        // Массив с товарами
        foreach ($result as $row) {
            $products[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'image' => $row['image'],
                'price' => $row['price'],
                'is_new' => $row['is_new'],
                'old_price' => $row['old_price'],
                'sale' => $row['sale'],
            ];
        }

        return $products;
    }

    /**
     * Возвращает товары в конкретной категории
     *
     * @param int $count <p>Количество товаров для пагинации</p>
     * @param int $categoryId <p>ID категории</p>
     * @param int $page <p>Номера страниц пагинации</p>
     * @return array <p>Массив с товарами</p>
     */
    public static function getProductListByCategory($count, $categoryId = false, $page = 1)
    {
        // Если получили id категории, получаем товары этой категории
        if ($categoryId) {
            // Номер страница (пагинации)
            $page = intval($page);
            // Отступ, смещение товаров в зависимости от номера страницы ($page)
            $offset = ($page - 1) * $count;
            // Соединение с БД
            $db = Db::getConnection();
            // Пустой массив
            $products = array();
            // Запрос к Базе
            $result = $db->query('SELECT id, name, old_price, price, image, is_new, sale , description FROM product '
                . "WHERE status = '1' AND category_id = '$categoryId' "
                . 'ORDER BY id DESC '
                . 'LIMIT ' . $count
                . ' OFFSET ' . $offset // Смещение в зависимости от страницы (номера)
            );
            // Массив товаров
            foreach ($result as $row) {
                $products[] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'image' => $row['image'],
                    'price' => $row['price'],
                    'is_new' => $row['is_new'],
                    'old_price' => $row['old_price'],
                    'sale' => $row['sale'],
                    'description' => $row['description'],
                ];
            }

            return $products;
        }
    }

    /**
     * Возвращает товар по идентификатору $id
     *
     * @param integer $id
     * @return array <p>Массив с параметрами товара</p>
     */
    public static function getProductById($id)
    {
        // Если получен $id
        if ($id) {
            // Возвращаем целое значение переменной
            $id = intval($id);
            // Подключение к БД
            $db = Db::getConnection();
            // Подготовленный запрос
            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    /**
     * Выводит общее количество товаров
     *
     * @return integer <p>Количество товаров в каталоге</p>
     */
    public static function getTotalProductInCatalog()
    {
        // Соединение с БЖ
        $db = Db::getConnection();
        // Подготовленный запрос к Базе
        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    /**
     * Выводит количество товаров категории
     *
     * @return integer <p>Количество товаров в категории</p>
     */
    public static function getProductCountInCategory($catId)
    {
        // Подключение к БД
        $db = Db::getConnection();
        // Подготовленный запрос к БД
        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1" AND category_id = "' . $catId . '"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $count = $result->fetch();

        return $count['count'];
    }

    /**
     * Возвращает товары по массиву идентфиикаторов
     *
     * @param array $idsArray <p>Массив идентификаторов</p>
     * @return array <p>Массив товаров</p>
     */
    public static function getProductsByIds($idsArray)
    {
        // Подключение к БД
        $db = Db::getConnection();
        // Пустой массив
        $products = array();
        // Получение строки из массива
        $idsString = implode(',', $idsArray);
        // Подготовленный запрос
        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)"; // Где id будет принадлежать определенному списку идентификаторов
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Получение массива товаров
        foreach ($result as $row) {
            $products[] = [
                'id' => $row['id'],
                'code' => $row['code'],
                'name' => $row['name'],
                'image' => $row['image'],
                'price' => $row['price'],
                'is_new' => $row['is_new'],
                'old_price' => $row['old_price'],
                'sale' => $row['sale'],
            ];
        }

        return $products;
    }

    /**
     * Возвращает список товаров
     * @return array <p>Массив с товарами</p>
     */
    public static function getProductsList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM product ORDER BY id DESC');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Массив товаров
        foreach ($result as $row) {
            $productList[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'code' => $row['code'],
                'price' => $row['price'],
                'is_new' => $row['is_new'],
                'old_price' => $row['old_price'],
                'availability' => $row['availability'],
                'is_reccomended' => $row['is_reccomended'],
                'exclusive' => $row['exclusive'],
                'sale' => $row['sale'],
                'status' => $row['status'],
            ];
        }

        return $productList;
    }


    /**
     * Удаляет товар с указанным id
     * @param integer $id <p>id товара</p>
     *
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteProductById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Запрос на удаление товара с указанным ID
        $sql = 'DELETE FROM product WHERE id = :id';
        // Подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * Удаляет товар с указанным id
     * @param integer $id <p>id товара</p>
     * @param array $options <p>Характеристики (поля) товара</p>
     *
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateProductById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE product
            SET 
                name = :name, 
                code = :code, 
                price = :price,
                category_id = :category_id, 
                brand = :brand, 
                availability = :availability, 
                description = :description, 
                is_new = :is_new, 
                is_reccomended = :is_reccomended, 
                status = :status,
                sale = :sale,
                exclusive = :exclusive,
                old_price = :old_price
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_reccomended', $options['is_reccomended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sale', $options['sale'], PDO::PARAM_INT);
        $result->bindParam(':exclusive', $options['exclusive'], PDO::PARAM_INT);
        $result->bindParam(':old_price', $options['old_price'], PDO::PARAM_INT);
        return $result->execute();
    }
    /**
     * Добавляет новый товар
     * @param array $options <p>Характеристики (поля) товара</p>
     *
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function createProduct($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO product '
            . '(name, code, price, old_price, category_id, brand, availability,'
            . 'description, is_new, status, is_reccomended, sale, exclusive)'
            . 'VALUES '
            . '(:name, :code, :price, :old_price, :category_id, :brand, :availability,'
            . ':description, :is_new, :status, :is_reccomended, :sale, :exclusive)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_reccomended', $options['is_reccomended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sale', $options['sale'], PDO::PARAM_INT);
        $result->bindParam(':exclusive', $options['exclusive'], PDO::PARAM_INT);
        $result->bindParam(':old_price', $options['old_price'], PDO::PARAM_INT);

        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }

        // Иначе возвращаем 0
        return 0;
    }

    public static function getParamsText($text)
    {
        switch ($text) {
            case '1':
                return '<span class="text-success">Да</span>';
                break;
            case '0':
                return '<span class="text-danger">Нет</span>';
                break;
        }
    }

    /**
     * Возвращает путь к изображению
     * @param integer $id
     *
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';
        // Путь к папке с товарами
        $path = '/upload/images/products/';
        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

}