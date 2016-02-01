<?php 
class Cms56aee4fc89f23_1348014254Class extends \Cms\Classes\PageCode
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
