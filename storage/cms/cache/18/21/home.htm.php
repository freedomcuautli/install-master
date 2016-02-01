<?php 
use RainLab\Pages\Classes\Page;class Cms56aed8234cae6_2471600969Class extends \Cms\Classes\LayoutCode
{


public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
