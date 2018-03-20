<?php

/**
 * Контроллер AdminProductController
 * Управление товарами в админпанели
 */
class AdminProductController extends AdminBase
{

    /**
     * Action для страницы "Управление товарами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров
        $productsList = Product::getProductsList();

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_product/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить товар"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список категорий для выпадающего списка
        $categoriesList = Category::getCategoryList();
        // Получаем список товаров
        $productsList = Product::getProductsList();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = strip_tags($_POST['name']);
            $options['code'] = strip_tags($_POST['code']);
            $options['price'] = strip_tags($_POST['price']);
            $options['old_price'] = strip_tags($_POST['old_price']);
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = strip_tags($_POST['brand']);
            $options['availability'] = strip_tags($_POST['availability']);
            $options['description'] = strip_tags($_POST['description']);
            $options['is_new'] = $_POST['is_new'];
            $options['status'] = $_POST['status'];
            $options['sale'] = $_POST['sale'];
            $options['exclusive'] = $_POST['exclusive'];
            $options['is_reccomended'] = $_POST['is_reccomended'];
            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Product::createProduct($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/product");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_product/create.php');
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
        $categoriesList = Category::getCategoryList();
        // Получаем данные о конкретном заказе
        $product = Product::getProductById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = strip_tags($_POST['name']);
            $options['code'] = strip_tags($_POST['code']);
            $options['price'] = strip_tags($_POST['price']);
            $options['old_price'] = strip_tags($_POST['old_price']);
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = strip_tags($_POST['brand']);
            $options['availability'] = strip_tags($_POST['availability']);
            $options['description'] = strip_tags($_POST['description']);
            $options['is_new'] = $_POST['is_new'];
            $options['status'] = $_POST['status'];
            $options['sale'] = $_POST['sale'];
            $options['exclusive'] = $_POST['exclusive'];
            $options['is_reccomended'] = $_POST['is_reccomended'];

            // Сохраняем изменения
            if (Product::updateProductById($id, $options)) {
                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
            }
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/product");
        }

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_product/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить товар"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        $product = Product::getProductById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Product::deleteProductById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/product");
        }

        // Подключаем вид
        require_once(ROOT . '/modules/admin/views/admin_product/delete.php');
        return true;
    }
}