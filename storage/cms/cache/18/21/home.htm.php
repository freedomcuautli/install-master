<?php 
use RainLab\Pages\Classes\Page;class Cms571477c45bf47_3364701220Class extends \Cms\Classes\LayoutCode
{


public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
