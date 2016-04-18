<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/layouts/news.htm */
class __TwigTemplate_bd6f02a6d24dc0ae849310d1b42c06342a514e2cc43106dde3c1f2bd2a959f55 extends Twig_Template
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
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "
            <!-- Nav -->
            <nav id=\"layout-nav\">
                ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "            </nav>
        </header>
        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">
                <div class=\"slider-wrapper title-style\">
                    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("title"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                </div>

                ";
        // line 33
        $context["hasChildren"] = $this->getAttribute((($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "parent", array())) ? ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "parent", array())) : ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "page", array()))), "children", array());
        // line 34
        echo "
                <div class=\"content-area with-padding\">
                    ";
        // line 36
        if ((isset($context["hasChildren"]) ? $context["hasChildren"] : null)) {
            // line 37
            echo "                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"module-sidemenu\">
                                    ";
            // line 40
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['page'] = $this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "page", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction("sidemenu"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 41
            echo "                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                
                                ";
            // line 45
            echo $this->env->getExtension('CMS')->pageFunction();
            // line 46
            echo "                                ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("blogPosts"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 47
            echo "                            </div>
                            <div class=\"col-md-3\">
                                ";
            // line 49
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("blogCategories"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 50
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 53
            echo "                        ";
            echo $this->env->getExtension('CMS')->pageFunction();
            // line 54
            echo "                    ";
        }
        // line 55
        echo "                </div>
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
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 72
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/layouts/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 73,  147 => 72,  142 => 69,  138 => 68,  123 => 55,  120 => 54,  117 => 53,  112 => 50,  108 => 49,  104 => 47,  99 => 46,  97 => 45,  91 => 41,  86 => 40,  81 => 37,  79 => 36,  75 => 34,  73 => 33,  69 => 31,  65 => 30,  57 => 24,  53 => 23,  48 => 20,  44 => 19,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% partial 'meta' %}*/
/*     </head>*/
/*     <body>*/
/*         */
/*         */
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
/*         <!-- Content -->*/
/*         <section id="layout-content">*/
/*             <div class="container">*/
/*                 <div class="slider-wrapper title-style">*/
/*                     {% partial "title" %}*/
/*                 </div>*/
/* */
/*                 {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}*/
/* */
/*                 <div class="content-area with-padding">*/
/*                     {% if hasChildren %}*/
/*                         <div class="row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="module-sidemenu">*/
/*                                     {% partial 'sidemenu' page=staticPage.page %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 */
/*                                 {% page %}*/
/*                                 {% component 'blogPosts' %}*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 {% component 'blogCategories' %}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {% page %}*/
/*                     {% endif %}*/
/*                 </div>*/
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
/* */
/*     </body>*/
/* </html>*/
