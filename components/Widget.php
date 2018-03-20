<?php

/**
 * Виджеты
 */
abstract class Widget
{

    protected function loadModel($model)
    {
        if(is_readable( ROOT . '/widgets/' . $model . '.php'))
        {
            include_once( ROOT . '/widgets/' . $model . '.php');

            $modelClass = $model . 'Widget';

            if(class_exists($modelClass)) {
                return new $modelClass;
            }
        }
        throw new Exception('error');
    }

    protected function render($view, $data = array(), $ext = 'phtml')
    {
        if(is_readable( ROOT . '/widgets/views' . $view . '.' . $ext)); {
            ob_start();
            extract($data);
            include(ROOT . '/widgets/views' . $view . '.' . $ext);
            $contect = ob_get_contents();

            ob_end_clean();

            return $content;
        }

        throw new Exception('ERRORORORORO');
    }

}