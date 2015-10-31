<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/pages/contact.htm */
class __TwigTemplate_999ac0f05eb5ee452f8dde8ffde89ef297720e487b710ea864d5fd86128a56bd extends Twig_Template
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
    <div class=\"col-md-4\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("contact/page"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "
        <div class=\"module-contact well\">
            ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 11,  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {% content 'contact/page' %}*/
/* */
/*         <div class="module-contact well">*/
/*             {% content 'contact/details' %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <div id="partialContactForm">*/
/*             {% partial 'contact/form' %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
