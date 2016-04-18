<?php 
class Cms57142fb927902_2943675110Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    $this['tagline'] = $this->post->title;
    $this['bannerImage'] = $this->themeUrl('assets/images/blog-banner.jpg');

    if ($this->post && $this->post->featured_images->count() > 0) {
        $this['bannerImage'] = $this->post->featured_images->first()->getPath();
    }
}

}
