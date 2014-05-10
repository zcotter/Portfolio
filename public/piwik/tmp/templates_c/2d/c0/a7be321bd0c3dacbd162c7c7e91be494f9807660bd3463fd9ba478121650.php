<?php

/* @Live/getVisitorProfilePopup.twig */
class __TwigTemplate_2dc0a7be321bd0c3dacbd162c7c7e91be494f9807660bd3463fd9ba478121650 extends Twig_Template
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
        echo "<div class=\"visitor-profile\"
     data-visitor-id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getFirstRow", array(), "method"), "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
        echo "\"
     data-next-visitor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitorData"), "nextVisitorId"), "html", null, true);
        echo "\"
     data-prev-visitor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitorData"), "previousVisitorId"), "html", null, true);
        echo "\"
     tabindex=\"0\">
    <a href class=\"visitor-profile-close\"></a>
    <div class=\"visitor-profile-info\">
        <div>
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-avatar\">
                    <div>
                        <div class=\"visitor-profile-image-frame\">
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "visitorData", true), "visitorAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "visitorAvatar"), "plugins/Live/images/unknown_avatar.jpg")) : ("plugins/Live/images/unknown_avatar.jpg")), "html", null, true);
        echo "\"
                                 alt=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "visitorData", true), "visitorDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "visitorDescription"), "")) : ("")), "html", null, true);
        echo "\"/>
                        </div>
                        <img src=\"plugins/Live/images/paperclip.png\" alt=\"\"/>
                    </div>
                    <div>
                        <div class=\"visitor-profile-header\">
                            ";
        // line 20
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitorData"), "previousVisitorId")))) {
            echo "<a class=\"visitor-profile-prev-visitor\" href=\"#\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_PreviousVisitor")), "html", null, true);
            echo "\">&larr;</a>";
        }
        // line 21
        echo "                            <h1>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile")), "html", null, true);
        echo " <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Zeitgeist/images/loading-blue.gif\"/></h1>
                            <a href=\"http://piwik.org/docs/user-profile/\" class=\"reportDocumentationIcon\" target=\"_blank\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ViewDocumentationFor", ucwords(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile"))))), "html", null, true);
        echo "\"></a>
                            ";
        // line 23
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitorData"), "nextVisitorId")))) {
            echo "<a class=\"visitor-profile-next-visitor\" href=\"#\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NextVisitor")), "html", null, true);
            echo "\">&rarr;</a>";
        }
        // line 24
        echo "                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            ";
        // line 26
        $this->env->loadTemplate("@Live/getSingleVisitSummary.twig")->display(array_merge($context, array("visitData" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getFirstRow", array(), "method"), "getColumns", array(), "method"), "showLocation" => false)));
        // line 27
        echo "                        </div>
                    </div>
                    <p style=\"clear:both; border:none!important;\"></p>
                </div>
                <div class=\"visitor-profile-summary\">
                    <h1>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Summary")), "html", null, true);
        echo "</h1>
                    <div>
                        <p>";
        // line 34
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitSummary", (("<strong>" . $this->getAttribute($this->getContext($context, "visitorData"), "totalVisitDurationPretty")) . "</strong>"), "", "", "<strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalActions"), $this->getAttribute($this->getContext($context, "visitorData"), "totalVisits"), "</strong>"));
        echo "</p>
                        <p>";
        // line 35
        if ($this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions")) {
            echo "<strong>";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ConvertedNGoals", $this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions"))), "html", null, true);
        if ($this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions")) {
            echo "</strong>";
        }
        // line 36
        if ($this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions")) {
            echo " (";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitorData"), "totalConversionsByGoal"));
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
            foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                // line 38
                $context["idGoal"] = twig_slice($this->env, $this->getContext($context, "idGoal"), 7, null);
                // line 39
                if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                    echo ", ";
                }
                echo twig_escape_filter($this->env, $this->getContext($context, "totalConversions"), "html", null, true);
                echo " <span class=\"visitor-profile-goal-name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "goals"), $this->getContext($context, "idGoal"), array(), "array"), "name", array(), "array"), "html", null, true);
                echo "</span>";
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
            unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo ")";
        }
        echo ".</p>
                        ";
        // line 42
        if ((((($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions"), 0)) : (0)) > 0) || ((($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts"), 0)) : (0)) > 0))) {
            // line 43
            echo "                        <p>
                            ";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Ecommerce")), "html", null, true);
            echo ":";
            // line 45
            if (((($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions"), 0)) : (0)) > 0)) {
                echo " ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_EcommerceSummaryConversions", "<strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalEcommerceConversions"), call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "visitorData"), "totalEcommerceRevenue"), $this->getContext($context, "idSite"))), "</strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalEcommerceItems")));
            }
            // line 47
            if (((($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts"), 0)) : (0)) > 0)) {
                echo " ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AbandonedCartSummary", "<strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalAbandonedCarts"), "</strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalAbandonedCartsItems"), "<strong>", call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "visitorData"), "totalAbandonedCartsRevenue"), $this->getContext($context, "idSite"))), "</strong>"));
            }
            // line 48
            echo "</p>
                        ";
        }
        // line 50
        echo "                        ";
        if ((($this->getAttribute($this->getContext($context, "visitorData", true), "totalSearches", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalSearches"), 0)) : (0))) {
            // line 51
            echo "                        <p>
                            ";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchKeywords")), "html", null, true);
            echo ":";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitorData"), "searches"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                echo " <strong title=\"";
                if (($this->getAttribute($this->getContext($context, "entry"), "searches") == 1)) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_OneSearch")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_Searches", $this->getAttribute($this->getContext($context, "entry"), "searches"))), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "keyword"), "html", null, true);
                echo "</strong>";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                        </p>
                        ";
        }
        // line 56
        echo "                        ";
        if ($this->getAttribute($this->getContext($context, "visitorData", true), "averagePageGenerationTime", array(), "any", true, true)) {
            // line 57
            echo "                        <p title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_CalculatedOverNPageViews", $this->getAttribute($this->getContext($context, "visitorData"), "totalPageViews"))), "html", null, true);
            echo "\">
                            ";
            // line 58
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AveragePageGenerationTime", (("<strong>" . $this->getAttribute($this->getContext($context, "visitorData"), "averagePageGenerationTime")) . "s</strong>")));
            echo "
                        </p>
                        ";
        }
        // line 61
        echo "                    </div>
                </div>
                <div class=\"visitor-profile-important-visits\">";
        // line 64
        $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
        // line 65
        echo "<div>
                        <h1>";
        // line 66
        if (($this->getAttribute($this->getContext($context, "visitorData"), "visitsAggregated") == 100)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visit")), "html", null, true);
            echo "# 100";
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_FirstVisit")), "html", null, true);
        }
        echo "</h1>
                        <div>
                            <p><strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "prettyDate"), "html", null, true);
        echo "</strong><span>&nbsp;- ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "daysAgo"))), "html", null, true);
        echo "</span></p>
                            <p><span>";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
        echo ":</span>
                            <strong ";
        // line 70
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "referrerType") == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "referralSummary")))) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "keywordNotDefined"), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "referralSummary"), "html", null, true);
        echo "</strong></p>
                        </div>
                    </div>
                    ";
        // line 73
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getRowsCount", array(), "method") != 1)) {
            // line 74
            echo "                    <div>
                        <h1>";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LastVisit")), "html", null, true);
            echo "</h1>
                        <div>
                            <p><strong>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "prettyDate"), "html", null, true);
            echo "</strong><span>&nbsp;- ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "daysAgo"))), "html", null, true);
            echo "</span></p>
                            <p><span>";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
            echo ":</span>
                            <strong ";
            // line 79
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "referrerType") == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "referralSummary")))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "keywordNotDefined"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "referralSummary"), "html", null, true);
            echo "</strong></p>
                        </div>
                    </div>
                    ";
        }
        // line 83
        echo "                </div>
                <div>
                    <div class=\"visitor-profile-location\">
                        <h1>";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Location")), "html", null, true);
        echo "</h1>
                        <p>";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitorData"), "countries"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 90
            ob_start();
            // line 91
            if ((($this->getAttribute($this->getContext($context, "entry", true), "cities", array(), "any", true, true) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cities")))) && twig_join_filter($this->getAttribute($this->getContext($context, "entry"), "cities")))) {
                // line 92
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getContext($context, "entry"), "cities")), "html", null, true);
            } elseif (($this->getAttribute($this->getContext($context, "entry", true), "cities", array(), "any", true, true) && (1 < twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cities"))))) {
                // line 94
                echo "<span title=\"";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getContext($context, "entry"), "cities"), ", "), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_FromDifferentCities")), "html", null, true);
                echo "</span>";
            }
            $context["entryCity"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 97
            echo "
                                ";
            // line 98
            ob_start();
            // line 99
            echo "<strong>
                                        ";
            // line 100
            if (($this->getAttribute($this->getContext($context, "entry"), "nb_visits") == 1)) {
                // line 101
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OneVisit")), "html", null, true);
            } else {
                // line 103
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", $this->getAttribute($this->getContext($context, "entry"), "nb_visits"))), "html", null, true);
            }
            // line 105
            echo "</strong>";
            $context["entryVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 107
            echo "
                                ";
            // line 108
            ob_start();
            // line 109
            if ($this->getContext($context, "entryCity")) {
                // line 110
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CityAndCountry", $this->getContext($context, "entryCity"), $this->getAttribute($this->getContext($context, "entry"), "prettyName")));
            } else {
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "prettyName"), "html", null, true);
            }
            // line 115
            echo "&nbsp;<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "flag"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "prettyName"), "html", null, true);
            echo "\"/>";
            $context["entryCountry"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 118
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_XFromY", $this->getContext($context, "entryVisits"), $this->getContext($context, "entryCountry")));
            if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                echo ", ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                <a class=\"visitor-profile-show-map\" href=\"#\" ";
        if (twig_test_empty(((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter($this->getContext($context, "userCountryMapUrl"), "")) : ("")))) {
            echo "style=\"display:none\"";
        }
        echo ">(";
        echo strtr(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ShowMap")), array(" " => "&nbsp;"));
        echo ")</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Zeitgeist/images/loading-blue.gif\"/>
                        </p>
                        <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"";
        // line 122
        echo twig_escape_filter($this->env, ((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter($this->getContext($context, "userCountryMapUrl"), "")) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-pages-visited\">
                    <h1>";
        // line 129
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitedPages")), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        ";
        // line 133
        $this->env->loadTemplate("@Live/getVisitList.twig")->display(array_merge($context, array("visits" => $this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "startCounter" => 1)));
        // line 134
        echo "                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    ";
        // line 137
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getRowsCount", array(), "method") >= twig_constant("Piwik\\Plugins\\Live\\API::VISITOR_PROFILE_MAX_VISITS_TO_SHOW"))) {
            // line 138
            echo "                    <a href=\"#\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LoadMoreVisits")), "html", null, true);
            echo "</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Zeitgeist/images/loading-blue.gif\"/>
                    ";
        } else {
            // line 140
            echo "                    <span class=\"visitor-profile-no-visits\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NoMoreVisits")), "html", null, true);
            echo "</span>
                    ";
        }
        // line 142
        echo "                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
\$(function() { require('piwik/UI').VisitorProfileControl.initElements(); });
</script>";
    }

    public function getTemplateName()
    {
        return "@Live/getVisitorProfilePopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 142,  456 => 140,  450 => 138,  448 => 137,  443 => 134,  441 => 133,  434 => 129,  424 => 122,  414 => 120,  397 => 118,  390 => 115,  387 => 112,  384 => 110,  382 => 109,  380 => 108,  377 => 107,  374 => 105,  371 => 103,  368 => 101,  366 => 100,  363 => 99,  361 => 98,  358 => 97,  350 => 94,  347 => 92,  345 => 91,  343 => 90,  326 => 88,  322 => 86,  317 => 83,  304 => 79,  300 => 78,  294 => 77,  289 => 75,  286 => 74,  284 => 73,  272 => 70,  268 => 69,  262 => 68,  252 => 66,  249 => 65,  247 => 64,  243 => 61,  237 => 58,  232 => 57,  229 => 56,  225 => 54,  184 => 53,  181 => 52,  178 => 51,  175 => 50,  171 => 48,  166 => 47,  161 => 45,  158 => 44,  155 => 43,  153 => 42,  148 => 41,  128 => 39,  126 => 38,  109 => 37,  106 => 36,  98 => 35,  94 => 34,  89 => 32,  82 => 27,  80 => 26,  76 => 24,  70 => 23,  66 => 22,  61 => 21,  55 => 20,  46 => 14,  42 => 13,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
