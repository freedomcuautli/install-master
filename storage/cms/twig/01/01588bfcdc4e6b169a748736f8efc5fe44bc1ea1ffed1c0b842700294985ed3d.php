<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/partials/scripts.htm */
class __TwigTemplate_aa2d5a2af1b1611c519f2b1877c27431c031fcd03418e003eeedf57ad2b6c968 extends Twig_Template
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
        echo "<script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/nivo/jquery.nivo.slider.js", 2 => "assets/javascript/app.js"));
        // line 5
        echo "\"></script>
";
        // line 6
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 7
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  25 => 6,  22 => 5,  19 => 1,);
    }
}
/* <script src="{{ [*/
/*     'assets/javascript/jquery.js',*/
/*     'assets/vendor/nivo/jquery.nivo.slider.js',*/
/*     'assets/javascript/app.js'*/
/* ]|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
