<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/layouts/default2.htm */
class __TwigTemplate_c805939bfc56ae78d9254daa43d0fe1b9dad778610b864767e8955d65a503b46 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->partialFunction("title2"        , $context['__cms_partial_params']        );
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
                            <div class=\"col-md-9\">
                                ";
            // line 44
            echo $this->env->getExtension('CMS')->pageFunction();
            // line 45
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo $this->env->getExtension('CMS')->pageFunction();
            // line 49
            echo "                    ";
        }
        // line 50
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
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/layouts/default2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 68,  133 => 67,  128 => 64,  124 => 63,  109 => 50,  106 => 49,  103 => 48,  98 => 45,  96 => 44,  91 => 41,  86 => 40,  81 => 37,  79 => 36,  75 => 34,  73 => 33,  69 => 31,  65 => 30,  57 => 24,  53 => 23,  48 => 20,  44 => 19,  28 => 5,  24 => 4,  19 => 1,);
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
/*                     {% partial "title2" %}*/
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
/*                             <div class="col-md-9">*/
/*                                 {% page %}*/
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
