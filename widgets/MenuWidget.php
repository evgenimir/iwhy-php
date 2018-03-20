<?php

/**
 * Class MenuWidget
 * Виджеты
 */
class MenuWidget
{

    public $tpl;
    public $data;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if ($this->tpl == null) {
            $this->tpl = 'menu';
        }
    }

    public function run()
    {
        $this->data = Category::getCategoryList();
        debug($this->data);
        return $this->tpl;
    }

}