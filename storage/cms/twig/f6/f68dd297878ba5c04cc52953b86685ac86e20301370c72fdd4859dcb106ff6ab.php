<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/pages/blog/category.htm */
class __TwigTemplate_fb4e07191f913bd0c849fb998c10480ba8e8e8e8ca4c091c69b3a883e2ae9ffb extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/posts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    </div>
    <div class=\"col-md-4\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/categories"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-md-8">*/
/*         {% partial 'blog/posts' %}*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         {% partial 'blog/categories' %}*/
/*     </div>*/
/* </div>*/
