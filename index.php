<?php

/**
 * @author Miroshnichenko E.A.
 * @copyright Copyright (c) 2017
 * @version 1.1
 */

//Фронт-контроллер

// Общие настройки системы (вывод ошибок)
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

define('ROOT', dirname(__FILE__));
define('CACHE', dirname(__FILE__) . '/tmp/cache');

include_once(ROOT.'/debug.php');
require_once(ROOT.'/components/Autoload.php');

// Вызов роутера
$router = new Router(); // Создаем экземпляр класса Router
$router->run(); // Запускаем метод run()

?>