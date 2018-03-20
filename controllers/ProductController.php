<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    /**
     * Action для страницы просмотра товара
     */
    public function actionView($productId)
    {
        $categories = Category::getCategoryList();
        $product = Product::getProductById($productId);
        $exclusiveProducts = Product::getExclusiveProduct(8); // Товары - эксклюзивы (поле exclusive == 1)

        require_once (ROOT . '/views/product/view.php');
        return true;
    }

}