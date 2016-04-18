<?php 
use RainLab\Pages\Classes\Page;class Cms5714156f2029a_36609127Class extends \Cms\Classes\LayoutCode
{


public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
