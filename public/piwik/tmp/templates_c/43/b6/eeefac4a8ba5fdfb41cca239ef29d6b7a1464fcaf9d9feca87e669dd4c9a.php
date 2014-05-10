<?php

/* @Live/getSingleVisitSummary.twig */
class __TwigTemplate_43b6eeefac4a8ba5fdfb41cca239ef29d6b7a1464fcaf9d9feca87e669dd4c9a extends Twig_Template
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
        // line 6
        $context["macros"] = $this;
        // line 7
        if (((array_key_exists("showLocation", $context)) ? (_twig_default_filter($this->getContext($context, "showLocation"), false)) : (false))) {
            // line 8
            echo "<div class=\"visitor-profile-latest-visit-loc\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "location"), "html", null, true);
            echo "\">
    <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "countryFlag"), "html", null, true);
            echo "\"/>&nbsp;<span>";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitData"), "city")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "city"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "country"), "html", null, true);
            }
            echo "</span>
</div>
";
        }
        // line 12
        echo "<div class=\"visitor-profile-latest-visit-column\">
    <ul>
        <li>
            <span>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_IP")), "html", null, true);
        echo "</span><strong ";
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitData"), "providerName")))) {
            echo "title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "providerName"), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "visitIp"), "html", null, true);
        echo "</strong>
        </li>
        <li class=\"visitor-profile-id\">
            <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Id"))), "html", null, true);
        echo "</span>
            ";
        // line 19
        if (array_key_exists("widgetizedLink", $context)) {
            echo "<a class=\"visitor-profile-widget-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "widgetizedLink"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Widgetize_OpenInNewWindow")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Id"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "visitorId"), "html", null, true);
            echo "\">";
        }
        // line 20
        echo "                <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "visitorId"), "html", null, true);
        echo "</strong>
            ";
        // line 21
        if (array_key_exists("widgetizedLink", $context)) {
            echo "</a>";
        }
        // line 22
        echo "            <a class=\"visitor-profile-export\" href=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "exportLink"), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportThisReport")), "html", null, true);
        echo "\" style=\"visibility:hidden\">
                <img src=\"plugins/Zeitgeist/images/export.png\"/>
            </a>
        </li>
        <li>
            <div class=\"visitor-profile-browser\" title=\"";
        // line 27
        if ($this->getAttribute($this->getContext($context, "visitData", true), "plugins", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserSettings_BrowserWithPluginsEnabled", $this->getAttribute($this->getContext($context, "visitData"), "browserName"), $this->getAttribute($this->getContext($context, "visitData"), "plugins"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserSettings_BrowserWithNoPluginsEnabled", $this->getAttribute($this->getContext($context, "visitData"), "browserName"))), "html", null, true);
        }
        echo "\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "browserIcon"), "html", null, true);
        echo "\"/><span>";
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->getAttribute($this->getContext($context, "visitData"), "browserName"), " "), 0, array(), "array"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"visitor-profile-os\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "operatingSystemIcon"), "html", null, true);
        echo "\"/><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "operatingSystemShortName"), "html", null, true);
        echo "</span>
            </div>
        </li>
        <li><span>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserSettings_ColumnResolution")), "html", null, true);
        echo "</span><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "resolution"), "html", null, true);
        echo "</strong></li>
        ";
        // line 35
        if (array_key_exists("visitReferralSummary", $context)) {
            // line 36
            $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
            // line 37
            echo "<li>
            <span>";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeFrom")), "html", null, true);
            echo "</span>
            <strong ";
            // line 39
            if ((($this->getAttribute($this->getContext($context, "visitData"), "referrerType") == "search") && !twig_in_filter("(", $this->getContext($context, "visitReferralSummary")))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "keywordNotDefined"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "visitReferralSummary"), "html", null, true);
            echo "</strong>
        </li>
        ";
        }
        // line 42
        echo "    </ul>
</div>
<div class=\"visitor-profile-latest-visit-column\">
    <ul>
        ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitData"), "customVariables"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
            // line 47
            echo "        ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index0") < 4)) {
                // line 48
                echo "            ";
                echo $context["macros"]->getcustomVar($this->getContext($context, "id"), $this->getContext($context, "customVariable"));
                echo "
        ";
            }
            // line 50
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </ul>
    ";
        // line 52
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "customVariables")) > 4)) {
            // line 53
            echo "    <ul class=\"visitor-profile-extra-cvars\" style=\"display:none;\">
        ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitData"), "customVariables"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                // line 55
                echo "        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index0") >= 4)) {
                    // line 56
                    echo "            ";
                    echo $context["macros"]->getcustomVar($this->getContext($context, "id"), $this->getContext($context, "customVariable"));
                    echo "
        ";
                }
                // line 58
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    </ul>
    <p class=\"visitor-profile-see-more-cvars\"><a href=\"#\">&#x25bc;</a></p>
    ";
        }
        // line 62
        echo "</div>
";
    }

    // line 1
    public function getcustomVar($_id = null, $_customVariable = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "customVariable" => $_customVariable,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["name"] = ("customVariableName" . $this->getContext($context, "id"));
            // line 3
            echo "    ";
            $context["value"] = ("customVariableValue" . $this->getContext($context, "id"));
            // line 4
            echo "    <li><span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "name"), array(), "array"), 30)), "html", null, true);
            echo "</span>";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "value"), array(), "array")) > 0)) {
                echo "<strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "value"), array(), "array"), 50)), "html", null, true);
                echo "</strong>";
            }
            echo "</li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Live/getSingleVisitSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 4,  271 => 3,  256 => 1,  251 => 62,  246 => 59,  226 => 56,  223 => 55,  206 => 54,  203 => 53,  201 => 52,  198 => 51,  152 => 42,  140 => 39,  136 => 38,  133 => 37,  131 => 36,  129 => 35,  123 => 34,  115 => 31,  107 => 28,  99 => 27,  88 => 22,  84 => 21,  79 => 20,  65 => 19,  45 => 15,  40 => 12,  28 => 9,  23 => 8,  21 => 7,  462 => 142,  456 => 140,  450 => 138,  448 => 137,  443 => 134,  441 => 133,  434 => 129,  424 => 122,  414 => 120,  397 => 118,  390 => 115,  387 => 112,  384 => 110,  382 => 109,  380 => 108,  377 => 107,  374 => 105,  371 => 103,  368 => 101,  366 => 100,  363 => 99,  361 => 98,  358 => 97,  350 => 94,  347 => 92,  345 => 91,  343 => 90,  326 => 88,  322 => 86,  317 => 83,  304 => 79,  300 => 78,  294 => 77,  289 => 75,  286 => 74,  284 => 73,  272 => 70,  268 => 2,  262 => 68,  252 => 66,  249 => 65,  247 => 64,  243 => 61,  237 => 58,  232 => 58,  229 => 56,  225 => 54,  184 => 50,  181 => 52,  178 => 48,  175 => 47,  171 => 48,  166 => 47,  161 => 45,  158 => 46,  155 => 43,  153 => 42,  148 => 41,  128 => 39,  126 => 38,  109 => 37,  106 => 36,  98 => 35,  94 => 34,  89 => 32,  82 => 27,  80 => 26,  76 => 24,  70 => 23,  66 => 22,  61 => 18,  55 => 20,  46 => 14,  42 => 13,  30 => 4,  26 => 3,  22 => 2,  19 => 6,);
    }
}
