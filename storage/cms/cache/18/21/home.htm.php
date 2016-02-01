<?php 
use RainLab\Pages\Classes\Page;class Cms56aee349a0075_200737449Class extends \Cms\Classes\LayoutCode
{


public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
