<?php 
class Cms57147846b4850_2031259835Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['bannerImage'] = $this->themeUrl('assets/images/blog-banner.jpg');
}
public function onEnd()
{
    // Optional - set the page title to the category name
    if ($this->category)
        $this->page->title = $this->category->name;
}

}
