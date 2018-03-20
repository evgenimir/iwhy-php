<?php

/**
 * Class Router
 * Маршрутизатор
 */
class Router
{

    private $routes;

    public function __construct() {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath); // Присваеваем свойству $routes массив, который хранится в routes.php
    }

    /*
    Получаем строку запроса
    Returns request string
     */
    public function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $link = $this->getUri();

        // Проверяем наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path)
        {
            // Сравниваем строку запроса ($uriPattern и $link), с данными в route.php
            if(preg_match("~$uriPattern~", $link)) // знак ~ значает то что возможно заметить /
            {
                // Получаем внутренний путь из внешнего (ссылки) согласно правилу "([a-z]+)/([0-9]+)
                $internalRoute = preg_replace("~$uriPattern~", $path, $link);

                // Определить какой контроллер и action обрабатывают запрос
                $segments = explode('/', $internalRoute);

                // Получаем имя контроллера (класс)
                $controllerName = array_shift($segments) . 'Controller'; // array_shift - получает значение первого элемента в массиве и удаляет его из массива и к этому значению добавляем слово "Controller"
                $controllerName = ucfirst($controllerName); // делаем первую букву заглавной (NewsController);

                // Получаем экшн (метод)
                $actionName = 'action' . ucfirst(array_shift($segments));

                // Параметры ссылки
                $parameters = $segments;

                // Подключаем файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php'; // Прописываем путь, используем имя класса (котроллера) $controllerName и добавляем расширение '.php'

                // Подключаем файл, если он существует
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                } else {
                    $controllerFile = ROOT . '/modules/admin/controllers/' . $controllerName . '.php';
                    if (file_exists($controllerFile)) {
                        include_once($controllerFile);
                    }
                }

                // Создать объект, вызвать метод (action)
                $controllerObject = new $controllerName;

                // Функция вызывает $actionName у $controllerObject при этом передает массив с параметрами $parameters;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null ) {
                    break;
                }
            }
        }
    }
}