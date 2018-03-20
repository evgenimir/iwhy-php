<?php

class Cart
{

    public static function addProduct($id)
    {
        $id = intval($id);

        // Пустой массив для товаров в корзине
        $productsInCart = array();

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // Тогда заполняем наш массив товарами
            $productsInCart = $_SESSION['products'];
        }

        // Если товар есть в корзине, но был добавлен еще раз, увеличим количество
        if (array_key_exists($id, $productsInCart)) { // Есть ли id товара, если есть то оставляем 1
            $productsInCart[$id] = 1;
        } else {
            // Добавляем новый товар в корзину
            $productsInCart[$id] = 1;
        }

        // Записываем в сессию товары
        $_SESSION['products'] = $productsInCart;

        // Возвращает количество товаров на данный момент
        return self::countItems();
    }

    public static function deleteProduct($id)
    {
        // Получаем массив с товарами и количеством товаров в корзине
        $productsInCart = self::getProducts();

        // Удаляем из массива элемент с указанным id
        unset($productsInCart[$id]);

        // Записываем в сессию товары
        $_SESSION['products'] = $productsInCart;
    }

    // Подсчет общего количества товаров
    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts(); // Получаем товары из сессии

        $total = 0;

        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

}