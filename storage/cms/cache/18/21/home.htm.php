<?php 
use RainLab\Pages\Classes\Page;class Cms56aee070d26e7_1724650557Class extends \Cms\Classes\LayoutCode
{


public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
