<?php 
use RainLab\Pages\Classes\Page;
class Cms5632e9738fdcc_2044570714Class extends \Cms\Classes\LayoutCode
{

public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
