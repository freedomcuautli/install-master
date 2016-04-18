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
        echo "<h3>AZLA News​</h3><figure data-snippet=\"news\"></figure>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('CMS')->startBlock('login'        );
        // line 6
        echo "<h3>​Contact AZLA</h3><p>Email: ArizonaLanguageAssocation (at) gmail.com</p><p>We look forward to seeing you at an upcoming event!​</p>
";
        // line 5
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
        return array (  34 => 5,  31 => 6,  29 => 5,  26 => 4,  24 => 1,  21 => 2,  19 => 1,);
    }
}
/* {% put news %}*/
/* <h3>AZLA News​</h3><figure data-snippet="news"></figure>*/
/* {% endput %}*/
/* */
/* {% put login %}*/
/* <h3>​Contact AZLA</h3><p>Email: ArizonaLanguageAssocation (at) gmail.com</p><p>We look forward to seeing you at an upcoming event!​</p>*/
/* {% endput %}*/
