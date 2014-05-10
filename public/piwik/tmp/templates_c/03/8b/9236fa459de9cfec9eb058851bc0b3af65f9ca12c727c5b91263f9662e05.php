<?php

/* @CoreUpdater/runUpdaterAndExit_welcome.twig */
class __TwigTemplate_038b9236fa459de9cfec9eb058851bc0b3af65f9ca12c727c5b91263f9662e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@CoreUpdater/layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CoreUpdater/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "<span style=\"float:right;\">";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.topBar"));
        echo "</span>
";
        // line 6
        ob_start();
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageContent", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/faq/\">", "</a>", "</li><li>"));
        echo "
";
        $context["helpMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
";
        // line 10
        if ($this->getContext($context, "coreError")) {
            // line 11
            echo "    <br/>
    <br/>
    <div class=\"error\">
        <img src=\"plugins/Zeitgeist/images/error_medium.png\"/> ";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CriticalErrorDuringTheUpgradeProcess")), "html", null, true);
            echo "
        ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errorMessages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "            <pre>";
                echo $this->getContext($context, "message");
                echo "</pre>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
    <br/>
    <p>";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenError")), "html", null, true);
            echo "
    <ul>
        <li>";
            // line 22
            echo $this->getContext($context, "helpMessage");
            echo "</li>
    </ul>
    </p>
";
        } else {
            // line 26
            echo "    ";
            if (($this->getContext($context, "coreToUpdate") || (twig_length_filter($this->env, $this->getContext($context, "pluginNamesToUpdate")) > 0))) {
                // line 27
                echo "        <p style='font-size:110%;padding-top:1em;'><strong id='titleUpdate'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_DatabaseUpgradeRequired")), "html", null, true);
                echo "</strong></p>
        <p>";
                // line 28
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YourDatabaseIsOutOfDate")), "html", null, true);
                echo "</p>
        ";
                // line 29
                if ($this->getContext($context, "coreToUpdate")) {
                    // line 30
                    echo "            <p>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikWillBeUpgradedFromVersionXToVersionY", $this->getContext($context, "current_piwik_version"), $this->getContext($context, "new_piwik_version"))), "html", null, true);
                    echo "</p>
        ";
                }
                // line 32
                echo "
        ";
                // line 33
                if ((twig_length_filter($this->env, $this->getContext($context, "pluginNamesToUpdate")) > 0)) {
                    // line 34
                    echo "            ";
                    $context["listOfPlugins"] = twig_join_filter($this->getContext($context, "pluginNamesToUpdate"), ", ");
                    // line 35
                    echo "            <p>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheFollowingPluginsWillBeUpgradedX", $this->getContext($context, "listOfPlugins"))), "html", null, true);
                    echo "</p>
        ";
                }
                // line 37
                echo "        <h3 id='titleUpdate'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_NoteForLargePiwikInstances")), "html", null, true);
                echo "</h3>
        ";
                // line 38
                if ($this->getContext($context, "isMajor")) {
                    // line 39
                    echo "            <p class=\"warning normalFontSize\">
                ";
                    // line 40
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_MajorUpdateWarning1")), "html", null, true);
                    echo "<br/>
                ";
                    // line 41
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_MajorUpdateWarning2")), "html", null, true);
                    echo "
            </p>
        ";
                }
                // line 44
                echo "        <ul>
            <li>";
                // line 45
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheUpgradeProcessMayFailExecuteCommand", $this->getContext($context, "commandUpgradePiwik")));
                echo "</li>
            <li>";
                // line 46
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HighTrafficPiwikServerEnableMaintenance", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http%3A%2F%2Fpiwik.org%2Ffaq%2Fhow-to%2F%23faq_111\">", "</a>"));
                echo "</li>
            <li>";
                // line 47
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YouCouldManuallyExecuteSqlQueries")), "html", null, true);
                echo "<br/>
                <a href=\"#titleUpdate\" id=\"showSql\" style=\"margin-left:20px;\">› ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ClickHereToViewSqlQueries")), "html", null, true);
                echo "</a>

                <div id=\"sqlQueries\" style=\"display:none;\">
                    <br/>
                    <code>
                        # ";
                // line 53
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_NoteItIsExpectedThatQueriesFail")), "html", null, true);
                echo "<br/><br/>
                        ";
                // line 54
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "queries"));
                foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                    // line 55
                    echo "                        &nbsp;&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, $this->getContext($context, "query"), "html", null, true);
                    echo "
                            <br/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                    </code>
                </div>
            </li>
        </ul>
        <br/>
        <br/>
        <h4 id=\"titleUpdate\">";
                // line 64
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ReadyToGo")), "html", null, true);
                echo "</h4>
        <p>";
                // line 65
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheUpgradeProcessMayTakeAWhilePleaseBePatient")), "html", null, true);
                echo "</p>
    ";
            }
            // line 67
            echo "
    ";
            // line 68
            if ((twig_length_filter($this->env, $this->getContext($context, "warningMessages")) > 0)) {
                // line 69
                echo "        <p><em>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "warningMessages"), 0, array(), "array"), "html", null, true);
                echo "</em>
            ";
                // line 70
                if ((twig_length_filter($this->env, $this->getContext($context, "warningMessages")) > 1)) {
                    // line 71
                    echo "                <button id=\"more-results\" class=\"ui-button ui-state-default ui-corner-all\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Details")), "html", null, true);
                    echo "</button>
            ";
                }
                // line 73
                echo "        </p>
    ";
            }
            // line 75
            echo "
    ";
            // line 76
            if (($this->getContext($context, "coreToUpdate") || (twig_length_filter($this->env, $this->getContext($context, "pluginNamesToUpdate")) > 0))) {
                // line 77
                echo "        <br/>
        <form action=\"index.php\" id=\"upgradeCorePluginsForm\">
            <input type=\"hidden\" name=\"updateCorePlugins\" value=\"1\"/>
            ";
                // line 80
                if ((twig_length_filter($this->env, $this->getContext($context, "queries")) == 1)) {
                    // line 81
                    echo "                <input type=\"submit\" class=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
                    echo "\"/>
            ";
                } else {
                    // line 83
                    echo "                <input type=\"submit\" class=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpgradePiwik")), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 85
                echo "        </form>
    ";
            } else {
                // line 87
                echo "        ";
                if ((twig_length_filter($this->env, $this->getContext($context, "warningMessages")) == 0)) {
                    // line 88
                    echo "            <p class=\"success\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikHasBeenSuccessfullyUpgraded")), "html", null, true);
                    echo "</p>
        ";
                }
                // line 90
                echo "        <br/>
        <form action=\"index.php\">
            <input type=\"submit\" class=\"submit\" value=\"";
                // line 92
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
                echo "\"/>
        </form>
    ";
            }
        }
        // line 96
        echo "
";
        // line 97
        $this->env->loadTemplate("@Installation/_integrityDetails.twig")->display($context);
        // line 98
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/runUpdaterAndExit_welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 98,  274 => 97,  271 => 96,  264 => 92,  260 => 90,  254 => 88,  251 => 87,  247 => 85,  241 => 83,  235 => 81,  233 => 80,  228 => 77,  226 => 76,  223 => 75,  219 => 73,  213 => 71,  211 => 70,  206 => 69,  204 => 68,  201 => 67,  196 => 65,  192 => 64,  184 => 58,  174 => 55,  170 => 54,  166 => 53,  158 => 48,  154 => 47,  150 => 46,  146 => 45,  143 => 44,  137 => 41,  133 => 40,  130 => 39,  128 => 38,  123 => 37,  117 => 35,  114 => 34,  112 => 33,  109 => 32,  103 => 30,  101 => 29,  97 => 28,  92 => 27,  89 => 26,  82 => 22,  77 => 20,  73 => 18,  64 => 16,  60 => 15,  56 => 14,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  38 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
