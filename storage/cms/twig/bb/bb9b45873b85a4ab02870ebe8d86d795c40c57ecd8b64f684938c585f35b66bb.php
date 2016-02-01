<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/partials/title2.htm */
class __TwigTemplate_5acea8ce7098a739f69515649e45faa5f9446d50ed481233d3fadca439016732 extends Twig_Template
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
        $context["bannerImage"] = (((isset($context["banner"]) ? $context["banner"] : null)) ? ($this->env->getExtension('CMS')->mediaFilter((isset($context["banner"]) ? $context["banner"] : null))) : ($this->env->getExtension('CMS')->themeFilter("assets/images/chairs/news.jpg")));
        // line 2
        echo "


<div class=\"title-image\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["bannerImage"]) ? $context["bannerImage"] : null), "html", null, true);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>";
        // line 11
        echo twig_escape_filter($this->env, (((isset($context["title"]) ? $context["title"] : null)) ? ((isset($context["title"]) ? $context["title"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()))), "html", null, true);
        echo "</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                ";
        // line 17
        echo twig_escape_filter($this->env, (((isset($context["tagline"]) ? $context["tagline"] : null)) ? ((isset($context["tagline"]) ? $context["tagline"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()))), "html", null, true);
        echo "
            </span>
        </h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/partials/title2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  35 => 11,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% set bannerImage = banner ? banner|media : ('assets/images/chairs/news.jpg')|theme %}*/
/* */
/* */
/* */
/* <div class="title-image">*/
/*     <img src="{{ bannerImage }}" alt="" title="" class="img-responsive" />*/
/* </div>*/
/* <div class="title-heading">*/
/*     <div class="title">*/
/*         <h1>*/
/*             <span>{{ title ?: this.page.title }}</span>*/
/*         </h1>*/
/*     </div>*/
/*     <div class="desc">*/
/*         <h2>*/
/*             <span>*/
/*                 {{ tagline ?: this.page.meta_title }}*/
/*             </span>*/
/*         </h2>*/
/*     </div>*/
/* </div>*/
