<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/content/static-pages/index.htm */
class __TwigTemplate_a62e475d123197fc3bea15e6c582443680f45630ea8ba1cac430d143ce05dc48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 2
        echo "<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('CMS')->startBlock('login'        );
        // line 8
        echo "<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
";
        // line 7
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/content/static-pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 8,  31 => 7,  28 => 6,  26 => 1,  21 => 2,  19 => 1,);
    }
}
/* {% put news %}*/
/* <h3>Latest news</h3>*/
/* <figure data-snippet="news"></figure>*/
/* <p><a href="blog">View all news and announcements</a></p>*/
/* {% endput %}*/
/* */
/* {% put login %}*/
/* <h3>Customer Sign in</h3>*/
/* <p>Sign in to view prices and instructions.</p>*/
/* <figure data-snippet="login-module"></figure>*/
/* {% endput %}*/
