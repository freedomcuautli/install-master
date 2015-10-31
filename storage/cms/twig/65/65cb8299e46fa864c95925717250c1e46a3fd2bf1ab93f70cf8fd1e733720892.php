<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/pages/forgot-password.htm */
class __TwigTemplate_97f8978ee153d4359312d3d173911efab48695959d1e3f85cf55b47c57e46259 extends Twig_Template
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
        echo "<div class=\"account-area\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h3>Reset password to client area</h3>
            <p>Forgotten your password? No problem, simply enter your email below and we will send you instructions on how to reset it.</p>
            ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("resetPassword"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "            <br />
            <p><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("account");
        echo "\">Return to sign in page</a></p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/pages/forgot-password.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="account-area">*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <h3>Reset password to client area</h3>*/
/*             <p>Forgotten your password? No problem, simply enter your email below and we will send you instructions on how to reset it.</p>*/
/*             {% component 'resetPassword' %}*/
/*             <br />*/
/*             <p><a href="{{ 'account'|page }}">Return to sign in page</a></p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
