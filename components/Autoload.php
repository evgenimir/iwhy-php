<?php

// Автозагрузка классов
function __autoload($class_name)
{
    // Все пути к классам
    $array_path = [
        '/models/',
        '/components/',
        'modules/admin/models/',
        'modules/admin/components/',
    ];

    foreach ($array_path as $path)
    {
        $php_class = ROOT . $path . $class_name . '.php';
        if (is_file($php_class))
        {
            include_once $php_class;
        }
    }
}