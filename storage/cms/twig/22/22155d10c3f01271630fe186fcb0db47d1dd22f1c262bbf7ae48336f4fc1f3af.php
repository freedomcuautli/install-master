<?php

/* /var/www/azla.info/install-master/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_4b51050b23df93ed1b2dc481718bc9e262ec18752c79148905a1f02fdbb1f09f extends Twig_Template
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
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "categories", array())) {
            // line 2
            echo "    <ul class=\"category-list\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = $this->getAttribute(            // line 4
(isset($context["__SELF__"]) ? $context["__SELF__"] : null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = $this->getAttribute(            // line 5
(isset($context["__SELF__"]) ? $context["__SELF__"] : null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((            // line 3
(isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 3,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if __SELF__.categories %}*/
/*     <ul class="category-list">*/
/*         {% partial __SELF__ ~ "::items"*/
/*             categories = __SELF__.categories*/
/*             currentCategorySlug = __SELF__.currentCategorySlug*/
/*         %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
