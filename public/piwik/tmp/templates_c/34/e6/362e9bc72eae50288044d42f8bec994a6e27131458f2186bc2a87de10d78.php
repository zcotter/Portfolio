<?php

/* @Login/login.twig */
class __TwigTemplate_34e6362e9bc72eae50288044d42f8bec994a6e27131458f2186bc2a87de10d78 extends Twig_Template
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
<!--[if lt IE 9 ]>
<html class=\"old-ie\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html><!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        if (($this->getContext($context, "isCustomLogo") == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        echo "</title>

    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>
    ";
        // line 12
        echo "    ";
        echo call_user_func_array($this->env->getFunction('includeAssets')->getCallable(), array(array("type" => "css")));
        echo "
    ";
        // line 14
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Login/stylesheets/login.css\"/>
    <meta name=\"description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "\"/>
    <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
    <meta name=\"google-play-app\" content=\"app-id=org.piwik.mobile2\">
    ";
        // line 18
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 19
        echo "    <script type=\"text/javascript\" src=\"libs/jquery/jquery.placeholder.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"libs/html5shiv/html5shiv.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
\t</script>
\t</head>
\t<body id=\"loginPage\">
    ";
        // line 35
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeTopBar", "login"));
        echo "
    ";
        // line 36
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "login"));
        echo "

    ";
        // line 38
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 39
        echo "
    <div id=\"notificationContainer\">
    </div>

    <div id=\"logo\">
        ";
        // line 44
        if (($this->getContext($context, "isCustomLogo") == false)) {
            // line 45
            echo "            <a href=\"http://piwik.org\" title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\">
        ";
        }
        // line 47
        echo "        ";
        if ($this->getContext($context, "hasSVGLogo")) {
            // line 48
            echo "            <img src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "logoSVG"), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\" alt=\"Piwik\" class=\"ie-hide\"/>
            <!--[if lt IE 9]>
        ";
        }
        // line 51
        echo "        <img src='";
        echo twig_escape_filter($this->env, $this->getContext($context, "logoLarge"), "html", null, true);
        echo "' title=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
        echo "\" alt=\"Piwik\" />
        ";
        // line 52
        if ($this->getContext($context, "hasSVGLogo")) {
            echo "<![endif]-->";
        }
        // line 53
        echo "
        ";
        // line 54
        if ($this->getContext($context, "isCustomLogo")) {
            // line 55
            echo "            ";
            ob_start();
            // line 56
            echo "            <i><a href=\"http://piwik.org/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "</a></i>
            ";
            $context["poweredByPiwik"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 58
            echo "        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if (($this->getContext($context, "isCustomLogo") == false)) {
            // line 61
            echo "            </a>
            <div class=\"description\">
                <a href=\"http://piwik.org\" title=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "</a>
                <div class=\"arrow\"></div>
            </div>
        ";
        }
        // line 67
        echo "    </div>

    <section class=\"loginSection\">

        ";
        // line 72
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ($this->getContext($context, "isValidHost") == false))) {
            // line 73
            echo "            ";
            $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
            // line 74
            echo "        ";
        } else {
            // line 75
            echo "            <div id=\"message_container\">
                ";
            // line 76
            if ($this->getAttribute($this->getContext($context, "form_data"), "errors")) {
                // line 77
                echo "                    <div class=\"message_error\">
                        ";
                // line 78
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_data"), "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 79
                    echo "                            <strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                    echo "</strong>: ";
                    echo $this->getContext($context, "data");
                    echo "<br/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                    </div>
                ";
            }
            // line 83
            echo "
                ";
            // line 84
            if ($this->getContext($context, "AccessErrorString")) {
                // line 85
                echo "                    <div class=\"message_error\">
                        <strong>";
                // line 86
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                echo "</strong>: ";
                echo $this->getContext($context, "AccessErrorString");
                echo "<br/>
                    </div>
                ";
            }
            // line 89
            echo "
                ";
            // line 90
            if ($this->getContext($context, "infoMessage")) {
                // line 91
                echo "                    <p class=\"message\">";
                echo $this->getContext($context, "infoMessage");
                echo "</p>
                ";
            }
            // line 93
            echo "            </div>
            <form ";
            // line 94
            echo $this->getAttribute($this->getContext($context, "form_data"), "attributes");
            echo ">
                <h1>";
            // line 95
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</h1>
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 99
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "\" autofocus=\"autofocus\"/>
                    <input type=\"password\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\"
                           placeholder=\"";
            // line 102
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getContext($context, "nonce"), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                           ";
            // line 108
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), "form_rememberme"), "value")) {
                echo "checked=\"checked\" ";
            }
            echo "/>
                    <label for=\"login_form_rememberme\">";
            // line 109
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_RememberMe")), "html", null, true);
            echo "</label>
                    <input class=\"submit\" id='login_form_submit' type=\"submit\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\"
                           tabindex=\"100\"/>
                </fieldset>
            </form>
            <form id=\"reset_form\" style=\"display:none;\">
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 118
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LoginOrEmail")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getContext($context, "nonce"), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\" autocomplete=\"off\"
                           placeholder=\"";
            // line 123
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                           size=\"20\" tabindex=\"30\" autocomplete=\"off\"
                           placeholder=\"";
            // line 127
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_PasswordRepeat")), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <span class=\"loadingPiwik\" style=\"display:none;\">
                        <img alt=\"Loading\" src=\"plugins/Zeitgeist/images/loading-blue.gif\"/>
                    </span>
                    <input class=\"submit\" id='reset_form_submit' type=\"submit\"
                           value=\"";
            // line 135
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo "\" tabindex=\"100\"/>
                </fieldset>

                <input type=\"hidden\" name=\"module\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getContext($context, "loginModule"), "html", null, true);
            echo "\"/>
                <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
            </form>
            <p id=\"nav\">
                <a id=\"login_form_nav\" href=\"#\"
                   title=\"";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "</a>
                <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 145
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
                <a id=\"reset_form_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 147
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_NavigationBack")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
            echo "</a>
            </p>
            ";
            // line 149
            if (array_key_exists("poweredByPiwik", $context)) {
                // line 150
                echo "                <p id=\"piwik\">
                    ";
                // line 151
                echo twig_escape_filter($this->env, $this->getContext($context, "poweredByPiwik"), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 154
            echo "            <div id=\"lost_password_instructions\" style=\"display:none;\">
                <p class=\"message\">";
            // line 155
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_ResetPasswordInstructions")), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 158
        echo "    </section>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 158,  355 => 155,  352 => 154,  346 => 151,  343 => 150,  341 => 149,  334 => 147,  327 => 145,  320 => 143,  312 => 138,  306 => 135,  295 => 127,  288 => 123,  281 => 119,  277 => 118,  266 => 110,  262 => 109,  256 => 108,  248 => 103,  244 => 102,  238 => 99,  231 => 95,  227 => 94,  224 => 93,  218 => 91,  216 => 90,  213 => 89,  205 => 86,  202 => 85,  200 => 84,  197 => 83,  193 => 81,  182 => 79,  178 => 78,  175 => 77,  173 => 76,  170 => 75,  167 => 74,  164 => 73,  161 => 72,  155 => 67,  146 => 63,  142 => 61,  140 => 60,  137 => 59,  134 => 58,  128 => 56,  125 => 55,  123 => 54,  120 => 53,  116 => 52,  109 => 51,  100 => 48,  97 => 47,  91 => 45,  89 => 44,  82 => 39,  80 => 38,  75 => 36,  71 => 35,  53 => 19,  51 => 18,  45 => 15,  42 => 14,  37 => 12,  28 => 8,  19 => 1,);
    }
}
