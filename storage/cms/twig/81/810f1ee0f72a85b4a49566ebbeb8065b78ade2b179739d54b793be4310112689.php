<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm */
class __TwigTemplate_6c25d28daf930e69be88eb43dac77cdcc8e25f08e4bd04c06596c1de10f0dad3 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('sidebarSection'        );
        // line 2
        echo "<h3>​Etymology</h3><p>The word rocking chair comes from the verb to rock. The first known use of the term rocking chair was in 1766.</p>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  24 => 1,  21 => 2,  19 => 1,);
    }
}
/* {% put sidebarSection %}*/
/* <h3>​Etymology</h3><p>The word rocking chair comes from the verb to rock. The first known use of the term rocking chair was in 1766.</p>*/
/* {% endput %}*/
