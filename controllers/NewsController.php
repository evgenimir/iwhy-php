<?php

/**
 * Контроллер CatalogController
 * Новости
 */
class NewsController
{

    /**
     * Action для страницы списка новостей
     */
    public function actionIndex()
    {
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)
        $newsAll = News::getNewsList(); // Обращаемся к модели News и методу getNewsList()
        $newsRecent = News::getRecentNews(3); // 3 последние новости в правом блоке

        require_once (ROOT . '/views/news/index.php');
        return true;
    }

    /**
     * Action для показа одной новости
     */
    public function actionView($id)
    {
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)
        $newsRecent = News::getRecentNews(3); // 3 последние новости в правом блоке

        if ($id) {
            $newsItem = News::getNewsItemById($id);

            require_once (ROOT . '/views/news/view.php');
            return true;
        }
    }

}