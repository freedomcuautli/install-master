<?php

/* /var/www/azla.info/install-master/themes/rainlab-relax/pages/account.htm */
class __TwigTemplate_ba5adb1bf2bd0dc0ca331f57e7d0fe4a22b5fb54144a29f1feb76e0521c65bf9 extends Twig_Template
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

    ";
        // line 3
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 4
            echo "
        ";
            // line 5
            if (post("register")) {
                // line 6
                echo "            <div class=\"jumbotron\">
                <h2>Thanks for registering</h2>
                <p>Your application has been received and you will get an email from us once you are approved to sign in.</p>
                <p><a href=\"";
                // line 9
                echo $this->env->getExtension('CMS')->pageFilter("home");
                echo "\">Return to the homepage</a>
            </div>
        ";
            } else {
                // line 12
                echo "
            <div class=\"row\">

                <div class=\"col-md-6\">
                    <h3>Sign in</h3>
                    <p>If you are already a client, sign in with you details here.</p>
                    <form
                        data-request=\"onSignin\">
                        <div class=\"form-group\">
                            <label for=\"userSigninLogin\">";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["loginAttributeLabel"]) ? $context["loginAttributeLabel"] : null), "html", null, true);
                echo "</label>
                            <input name=\"login\" type=\"text\" class=\"form-control\" id=\"userSigninLogin\" placeholder=\"Enter your ";
                // line 22
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["loginAttributeLabel"]) ? $context["loginAttributeLabel"] : null)), "html", null, true);
                echo "\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"userSigninPassword\">Password</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Enter your password\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                    </form>
                    <br />
                    <p><a href=\"";
                // line 33
                echo $this->env->getExtension('CMS')->pageFilter("forgot-password");
                echo "\">Forgotten your password?</a></p>
                </div>

                <div class=\"col-md-6\">
                    <h3>Register</h3>
                    <p>You may apply to the client area by completing this form.</p>
                    <form
                        data-request=\"onRegister\">
                        <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 41
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()));
                echo "?register=1\" />

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Full Name</label>
                            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Enter your full name\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Email</label>
                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Enter your email\">
                        </div>

                        <h3>Account information</h3>

                        <div class=\"form-group\">
                            <label for=\"accountLogin\">Username</label>
                            <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountUsername\" placeholder=\"Choose a login name to use\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountPassword\">Password</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" placeholder=\"Choose a password\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Register</button>
                    </form>

                </div>

            </div>

        ";
            }
            // line 73
            echo "
    ";
        } else {
            // line 75
            echo "

        ";
            // line 77
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate", array("model" => (isset($context["user"]) ? $context["user"] : null))));
            echo "

            <h3>Account information</h3>

            <div class=\"form-group\">
                <label for=\"accountName\">Full Name</label>
                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
            // line 83
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountEmail\">Email</label>
                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
            // line 88
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountLogin\">Login</label>
                <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountLogin\" placeholder=\"Choose a login name to use\" value=\"";
            // line 93
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "username"));
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPassword\">New Password</label>
                <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPasswordConfirm\">Confirm New Password</label>
                <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
            </div>

            <button type=\"submit\" class=\"btn btn-default\">Save</button>

        ";
            // line 108
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

        <br/ >
        <p>
            <a href=\"";
            // line 112
            echo call_user_func_array($this->env->getFilter('staticPage')->getCallable(), array("clients"));
            echo "\">+ Return to client area</a>
        </p>

    ";
        }
        // line 116
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/azla.info/install-master/themes/rainlab-relax/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 116,  174 => 112,  167 => 108,  149 => 93,  141 => 88,  133 => 83,  124 => 77,  120 => 75,  116 => 73,  81 => 41,  70 => 33,  56 => 22,  52 => 21,  41 => 12,  35 => 9,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="account-area">*/
/* */
/*     {% if not user %}*/
/* */
/*         {% if post('register') %}*/
/*             <div class="jumbotron">*/
/*                 <h2>Thanks for registering</h2>*/
/*                 <p>Your application has been received and you will get an email from us once you are approved to sign in.</p>*/
/*                 <p><a href="{{ 'home'|page }}">Return to the homepage</a>*/
/*             </div>*/
/*         {% else %}*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-md-6">*/
/*                     <h3>Sign in</h3>*/
/*                     <p>If you are already a client, sign in with you details here.</p>*/
/*                     <form*/
/*                         data-request="onSignin">*/
/*                         <div class="form-group">*/
/*                             <label for="userSigninLogin">{{ loginAttributeLabel }}</label>*/
/*                             <input name="login" type="text" class="form-control" id="userSigninLogin" placeholder="Enter your {{ loginAttributeLabel|lower }}">*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="userSigninPassword">Password</label>*/
/*                             <input name="password" type="password" class="form-control" id="userSigninPassword" placeholder="Enter your password">*/
/*                         </div>*/
/* */
/*                         <button type="submit" class="btn btn-default">Sign in</button>*/
/*                     </form>*/
/*                     <br />*/
/*                     <p><a href="{{ 'forgot-password'|page }}">Forgotten your password?</a></p>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-6">*/
/*                     <h3>Register</h3>*/
/*                     <p>You may apply to the client area by completing this form.</p>*/
/*                     <form*/
/*                         data-request="onRegister">*/
/*                         <input type="hidden" name="redirect" value="{{ this.page.baseFileName|page }}?register=1" />*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="accountEmail">Full Name</label>*/
/*                             <input name="name" type="text" class="form-control" id="accountEmail" placeholder="Enter your full name">*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="accountEmail">Email</label>*/
/*                             <input name="email" type="email" class="form-control" id="accountEmail" placeholder="Enter your email">*/
/*                         </div>*/
/* */
/*                         <h3>Account information</h3>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="accountLogin">Username</label>*/
/*                             <input name="username" type="text" class="form-control" id="accountUsername" placeholder="Choose a login name to use">*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="accountPassword">Password</label>*/
/*                             <input name="password" type="password" class="form-control" id="accountPassword" placeholder="Choose a password">*/
/*                         </div>*/
/* */
/*                         <button type="submit" class="btn btn-default">Register</button>*/
/*                     </form>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         {% endif %}*/
/* */
/*     {% else %}*/
/* */
/* */
/*         {{ form_ajax('onUpdate', { model: user }) }}*/
/* */
/*             <h3>Account information</h3>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="accountName">Full Name</label>*/
/*                 <input name="name" type="text" class="form-control" id="accountName" value="{{ form_value('name') }}">*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="accountEmail">Email</label>*/
/*                 <input name="email" type="email" class="form-control" id="accountEmail" value="{{ form_value('email') }}">*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="accountLogin">Login</label>*/
/*                 <input name="username" type="text" class="form-control" id="accountLogin" placeholder="Choose a login name to use" value="{{ form_value('username') }}">*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="accountPassword">New Password</label>*/
/*                 <input name="password" type="password" class="form-control" id="accountPassword">*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="accountPasswordConfirm">Confirm New Password</label>*/
/*                 <input name="password_confirmation" type="password" class="form-control" id="accountPasswordConfirm">*/
/*             </div>*/
/* */
/*             <button type="submit" class="btn btn-default">Save</button>*/
/* */
/*         {{ form_close() }}*/
/* */
/*         <br/ >*/
/*         <p>*/
/*             <a href="{{ 'clients'|staticPage }}">+ Return to client area</a>*/
/*         </p>*/
/* */
/*     {% endif %}*/
/* </div>*/
