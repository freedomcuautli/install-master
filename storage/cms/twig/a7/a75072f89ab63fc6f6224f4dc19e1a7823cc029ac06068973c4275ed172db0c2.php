<?php

/* /var/www/azla.info/install-master/plugins/rainlab/user/components/resetpassword/restore.htm */
class __TwigTemplate_7dfb1328a9d437fe7e94432d1b31508d00126e9079992d79bb82af1c02ba4413 extends Twig_Template
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
        echo "<form
    data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRestorePassword\"
    data-request-update=\"'";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"userRestoreEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Enter your email\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Restore password</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/plugins/rainlab/user/components/resetpassword/restore.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form*/
/*     data-request="{{ __SELF__ }}::onRestorePassword"*/
/*     data-request-update="'{{ __SELF__ }}::reset': '#partialUserResetForm'">*/
/*     <div class="form-group">*/
/*         <label for="userRestoreEmail">Email</label>*/
/*         <input name="email" type="email" class="form-control" id="userRestoreEmail" placeholder="Enter your email">*/
/*     </div>*/
/* */
/*     <button type="submit" class="btn btn-default">Restore password</button>*/
/* </form>*/
