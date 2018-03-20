<?php

// Маршруты
return [

    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    'catalog/page-([0-9]+)' => 'catalog/index/$1', // actionIndex в CatalogController
    'catalog' => 'catalog/index', // actionIndex в CatalogController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController
    'cart/checkout' => 'cart/checkout',
    'cart' => 'cart/index',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    // Управление товарами:
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',

    // Управление категориями:
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',

    // Управление заказами:
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',

    // Управление новостями:
    'admin/news/create' => 'adminNews/create',
    'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
    'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
    'admin/news' => 'adminNews/index',

    // Управление пользователями
    'admin/user/create' => 'adminUser/create',
    'admin/user/update' => 'adminUser/update',
    'admin/user/delete' => 'adminUser/delete',
    'admin/user' => 'adminUser/index',

    // Управление странпицами с информацией об организации
    'admin/about' => 'admin/about',
    'admin/contact' => 'admin/contact',
    'admin/delivery' => 'admin/delivery',
    'admin' => 'admin/index',

    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',

    'contact' => 'site/contact',
    'about' => 'site/about',
    'delivery' => 'site/delivery',

    'index.php' => 'site/index',

    '^/*$' => 'site/index', // actionIndex в SiteController

];