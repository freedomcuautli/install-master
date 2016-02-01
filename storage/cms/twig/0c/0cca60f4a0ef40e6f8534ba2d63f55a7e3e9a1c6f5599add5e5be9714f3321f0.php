<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/layouts/home.htm */
class __TwigTemplate_606f7a90fe099d555a4836feee4073078784cc0cc819975823c5856ad6f9c3b4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
            <!-- Nav -->
            <nav id=\"layout-nav\">
                ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"visible-xs visible-sm slider-wrapper title-style\">
                    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("title"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                </div>

                <div id=\"slider-wrapper\" class=\"slider-wrapper hidden-xs hidden-sm\">
                    <div id=\"slider\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chairsPages"]) ? $context["chairsPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            $context["randomImage"] = array(0 => "sgroup10_small", 1 => "AZLAwelcome", 2 => "undergrad symposium NAU Spa 2015 small");
            // line 38
            echo "                            ";
            $context["bannerImage"] = (((isset($context["banner"]) ? $context["banner"] : null)) ? ($this->env->getExtension('CMS')->mediaFilter((isset($context["banner"]) ? $context["banner"] : null))) : ($this->env->getExtension('CMS')->themeFilter((("assets/images/chairs/" . twig_random($this->env, (isset($context["randomImage"]) ? $context["randomImage"] : null))) . ".jpg"))));
            // line 39
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["bannerImage"]) ? $context["bannerImage"] : null), "html", null, true);
            echo "\" alt=\"\" title=\"\" />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </div>
                    <div id=\"slider-menu\" class=\"slider-menu\">
                        <ul>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chairsPages"]) ? $context["chairsPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 45
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('System')->appFilter($this->getAttribute($context["chairPage"], "url", array()));
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chairPage"], "title", array()), "html", null, true);
            echo "</span></a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            <li class=\"desc\"><h2><span></span></h2></li>
                        </ul>
                    </div>
                    <div id=\"slider-text\" class=\"slider-text\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chairsPages"]) ? $context["chairsPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 52
            echo "                            <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chairPage"], "viewBag", array()), "tagline", array()), "html", null, true);
            echo "</h2>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </div>
                    <div class=\"slider-more-info\">
                        See all of our chairs!
                    </div>
                </div>

                <div class=\"row module-homes\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 63
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 64
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 69
        $context['__placeholder_news_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('news', $context['__placeholder_news_default_contents']);
        unset($context['__placeholder_news_default_contents']);        // line 70
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 75
        $context['__placeholder_login_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('login', $context['__placeholder_login_default_contents']);
        unset($context['__placeholder_login_default_contents']);        // line 76
        echo "                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 98
        echo "        <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/home.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 98,  194 => 97,  189 => 94,  185 => 93,  166 => 76,  164 => 75,  157 => 70,  155 => 69,  148 => 64,  146 => 63,  135 => 54,  126 => 52,  122 => 51,  116 => 47,  105 => 45,  101 => 44,  96 => 41,  87 => 39,  84 => 38,  81 => 37,  79 => 36,  75 => 35,  69 => 31,  65 => 30,  55 => 22,  51 => 21,  46 => 18,  42 => 17,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% partial 'meta' %}*/
/*     </head>*/
/*     <body>*/
/* */
/*         <!-- Top -->*/
/*         <div id="top-nav">*/
/*             <div class="container">*/
/*                 <!-- Put anything here, social links? -->*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Header -->*/
/*         <header id="layout-header">*/
/*             {% partial "header" %}*/
/* */
/*             <!-- Nav -->*/
/*             <nav id="layout-nav">*/
/*                 {% partial "nav" %}*/
/*             </nav>*/
/*         </header>*/
/* */
/*         <!-- Content -->*/
/*         <section id="layout-content">*/
/*             <div class="container">*/
/* */
/*                 <div class="visible-xs visible-sm slider-wrapper title-style">*/
/*                     {% partial "title" %}*/
/*                 </div>*/
/* */
/*                 <div id="slider-wrapper" class="slider-wrapper hidden-xs hidden-sm">*/
/*                     <div id="slider">*/
/*                         {% for chairPage in chairsPages %}*/
/*                             {# {% set randomImage = random(['sofa', 'cafe', 'in-field', 'wheelchair', 'chairs']) %} #}*/
/*                             {% set randomImage = ['sgroup10_small', 'AZLAwelcome', 'undergrad symposium NAU Spa 2015 small'] %}*/
/*                             {% set bannerImage = banner ? banner|media : ('assets/images/chairs/'~random(randomImage)~'.jpg')|theme %}*/
/*                             <img src="{{ bannerImage }}" alt="" title="" />*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div id="slider-menu" class="slider-menu">*/
/*                         <ul>*/
/*                             {% for chairPage in chairsPages %}*/
/*                                 <li><a href="{{ chairPage.url|app }}"><span>{{ chairPage.title }}</span></a></li>*/
/*                             {% endfor %}*/
/*                             <li class="desc"><h2><span></span></h2></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div id="slider-text" class="slider-text">*/
/*                         {% for chairPage in chairsPages %}*/
/*                             <h2>{{ chairPage.viewBag.tagline }}</h2>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="slider-more-info">*/
/*                         See all of our chairs!*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row module-homes">*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="module-home">*/
/*                             {% page %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="module-home">*/
/*                             {% placeholder news title="Latest News" %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="module-home">*/
/*                             {% placeholder login title="Client Area" %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*         </section>*/
/* */
/*         <!-- Slogan -->*/
/*         <div id="layout-slogan">*/
/*             <div class="container">*/
/*                 <div class="service-strip"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Footer -->*/
/*         <footer id="layout-footer">*/
/*             {% partial "footer" %}*/
/*         </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         {% partial 'scripts' %}*/
/*         <script src="{{ 'assets/javascript/home.js'|theme }}"></script>*/
/* */
/*     </body>*/
/* </html>*/
