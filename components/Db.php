<?php

/**
 * Подключеие к Базе данных
 */
class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql::host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set name utf-8");

        return $db;

        /***********
         *
        $host = 'localhost';
        $dbname = 'my-php';
        $user = 'root';
        $password = '';
        $db = new PDO("mysql::host=$host;dbname=$dbname", $user, $password);

         * Аналог
         */
    }
}