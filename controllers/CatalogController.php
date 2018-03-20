<?php

/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class CatalogController
{

    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex($page = 1)
    {
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)

        $recommendedProducts = Product::getRecommendedProduct(6); // Товары - рекомендуемые (поле is_reccomended == 1)
        $catalogProducts = Product::getProductListCatalog(10, $page);

        $total = Product::getTotalProductInCatalog();

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, 10, 'page-');

        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }

    /**
     * Action для страницы "Категория товаров"
     */
    public function actionCategory($categoryId, $page = 1)
    {
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)

        $categoryProduct = Product::getProductListByCategory(4,$categoryId, $page);
        $recommendedProducts = Product::getRecommendedProduct(6); // Товары - рекомендуемые (поле is_reccomended == 1)

        $total = Product::getProductCountInCategory($categoryId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, 4, 'page-');

        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }

}