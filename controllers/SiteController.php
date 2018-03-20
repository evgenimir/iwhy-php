<?php

/**
 * Контроллер SiteController
 * Для главной страницы и страниц с информацией о компании
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)
        $latestProducts = Product::getLatestProduct(6); // Товары - новинки (поле is_new == 1)
        $recommendedProducts = Product::getRecommendedProduct(6); // Товары - реклмендуемые (поле is_reccomended == 1)
        $saleProducts = Product::getSaleProduct(6); // Товары распродажа (поле sale == 1)
        $exclusiveProducts = Product::getExclusiveProduct(6); // Товары - эксклюзивы (поле exclusive == 1)
        $newsRecent = News::getRecentNews(1);

        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    /**
     * Action для сраницы Контакты
     */
    public function actionContact()
    {
        $contactPage = Page::getPage('contacts'); // keyword - ключ, для обращения к нужной строке в базе
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)
        $recommendedProducts = Product::getRecommendedProduct(6); // Товары - реклмендуемые (поле is_reccomended == 1)

        $userEmail = '';
        $userText = '';
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            $userEmail = $_POST['userEmail'];
            $userText = strip_tags($_POST['userText']);
            $errors = false;
            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            if ($errors == false) {
                $adminEmail = 'webwonderr@mail.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        require_once(ROOT . '/views/site/contact.php');
        return true;
    }

    /**
     * Action для сраницы О нас
     */
    public function actionAbout()
    {
        $page = Page::getPage('about'); // keyword - ключ, для обращения к нужной строке в базе
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)
        $recommendedProducts = Product::getRecommendedProduct(6); // Товары - реклмендуемые (поле is_reccomended == 1)

        require_once(ROOT . '/views/site/page.php');
        return true;
    }

    /**
     * Action для сраницы Доставка
     */
    public function actionDelivery()
    {
        $page = Page::getPage('delivery'); // keyword - ключ, для обращения к нужной строке в базе
        $categories = Category::getCategoryList(); // Модель Category.php, получаем список категорий (id и имена категорий)
        $recommendedProducts = Product::getRecommendedProduct(6); // Товары - реклмендуемые (поле is_reccomended == 1)

        require_once(ROOT . '/views/site/page.php');
        return true;
    }

}