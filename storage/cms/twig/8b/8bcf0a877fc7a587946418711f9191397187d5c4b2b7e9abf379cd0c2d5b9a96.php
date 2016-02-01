<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/partials/sidemenu.htm */
class __TwigTemplate_6d80b0a526ae7f1b3237caa1069ba3d1a0c1114bfb44c6ab32ab88df898858e6 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array())) : ((isset($context["page"]) ? $context["page"] : null)));
        // line 4
        $context["childPages"] = $this->getAttribute((isset($context["parentOrSelf"]) ? $context["parentOrSelf"] : null), "children", array());
        // line 5
        echo "
<ul>
    <li class=\"head-link ";
        // line 7
        echo ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()) == $this->getAttribute((isset($context["parentOrSelf"]) ? $context["parentOrSelf"] : null), "url", array()))) ? ("active") : (""));
        echo "\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('System')->appFilter($this->getAttribute((isset($context["parentOrSelf"]) ? $context["parentOrSelf"] : null), "url", array()));
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentOrSelf"]) ? $context["parentOrSelf"] : null), "title", array()), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["childPages"]) ? $context["childPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !$this->getAttribute($context["childPage"], "navigation_hidden", array())) {
                // line 13
                echo "        <li class=\"";
                echo ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()) == $this->getAttribute($context["childPage"], "url", array()))) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 14
                echo $this->env->getExtension('System')->appFilter($this->getAttribute($context["childPage"], "url", array()));
                echo "\">
                ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["childPage"], "title", array()), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/partials/sidemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  58 => 15,  54 => 14,  49 => 13,  44 => 12,  38 => 9,  34 => 8,  30 => 7,  26 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# Renders a menu with any child static pages #}*/
/* */
/* {% set parentOrSelf = page.parent ?: page %}*/
/* {% set childPages = parentOrSelf.children %}*/
/* */
/* <ul>*/
/*     <li class="head-link {{ page.url == parentOrSelf.url ? 'active' }}">*/
/*         <a href="{{ parentOrSelf.url|app }}">*/
/*             {{ parentOrSelf.title }}*/
/*         </a>*/
/*     </li>*/
/*     {% for childPage in childPages if not childPage.navigation_hidden %}*/
/*         <li class="{{ page.url == childPage.url ? 'active' }}">*/
/*             <a href="{{ childPage.url|app }}">*/
/*                 {{ childPage.title }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
