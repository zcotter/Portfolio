<?php

/* @VisitsSummary/_sparklines.twig */
class __TwigTemplate_df492e95ed1355792b3209517f4eea37634924d71b85663e3ccc1a44770afb52 extends Twig_Template
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
        echo "<div id='leftcolumn'>
    <div class=\"sparkline\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbVisits")));
        echo "
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", (("<strong>" . $this->getContext($context, "nbVisits")) . "</strong>")));
        if ($this->getContext($context, "displayUniqueVisitors")) {
            echo ",
            ";
            // line 5
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbUniqueVisitors", (("<strong>" . $this->getContext($context, "nbUniqVisitors")) . "</strong>")));
        }
        // line 6
        echo "    </div>
    <div class=\"sparkline\">
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineAvgVisitDuration")));
        echo "
        ";
        // line 9
        $context["averageVisitDuration"] = call_user_func_array($this->env->getFilter('sumtime')->getCallable(), array($this->getContext($context, "averageVisitDuration")));
        // line 10
        echo "        ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_AverageVisitDuration", (("<strong>" . $this->getContext($context, "averageVisitDuration")) . "</strong>")));
        echo "
    </div>
    <div class=\"sparkline\">
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineBounceRate")));
        echo "
        ";
        // line 14
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbVisitsBounced", (("<strong>" . $this->getContext($context, "bounceRate")) . "%</strong>")));
        echo "
    </div>
    <div class=\"sparkline\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineActionsPerVisit")));
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbActionsPerVisit", (("<strong>" . $this->getContext($context, "nbActionsPerVisit")) . "</strong>")));
        echo "
    </div>
    ";
        // line 20
        if (((array_key_exists("showActionsPluginReports", $context)) ? (_twig_default_filter($this->getContext($context, "showActionsPluginReports"), false)) : (false))) {
            // line 21
            echo "\t<div class=\"sparkline\">
        ";
            // line 22
            echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineAvgGenerationTime")));
            echo "
\t\t";
            // line 23
            $context["averageGenerationTime"] = call_user_func_array($this->env->getFilter('sumtime')->getCallable(), array($this->getContext($context, "averageGenerationTime")));
            // line 24
            echo "\t\t";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_AverageGenerationTime", (("<strong>" . $this->getContext($context, "averageGenerationTime")) . "</strong>")));
            echo "
\t</div>
    ";
        }
        // line 27
        echo "</div>

<div id='rightcolumn'>
    ";
        // line 30
        if (((array_key_exists("showActionsPluginReports", $context)) ? (_twig_default_filter($this->getContext($context, "showActionsPluginReports"), false)) : (false))) {
            // line 31
            echo "        ";
            if ($this->getContext($context, "showOnlyActions")) {
                // line 32
                echo "            <div class=\"sparkline\">
                ";
                // line 33
                echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbActions")));
                echo "
                ";
                // line 34
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbActionsDescription", (("<strong>" . $this->getContext($context, "nbActions")) . "</strong>")));
                echo "
            </div>
        ";
            } else {
                // line 37
                echo "            <div class=\"sparkline\">
                ";
                // line 38
                echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbPageviews")));
                echo "
                ";
                // line 39
                echo trim(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbPageviewsDescription", (("<strong>" . $this->getContext($context, "nbPageviews")) . "</strong>"))));
                echo ",
                ";
                // line 40
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbUniquePageviewsDescription", (("<strong>" . $this->getContext($context, "nbUniquePageviews")) . "</strong>")));
                echo "
            </div>
            ";
                // line 42
                if ($this->getContext($context, "displaySiteSearch")) {
                    // line 43
                    echo "                <div class=\"sparkline\">
                    ";
                    // line 44
                    echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbSearches")));
                    echo "
                    ";
                    // line 45
                    echo trim(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbSearchesDescription", (("<strong>" . $this->getContext($context, "nbSearches")) . "</strong>"))));
                    echo ",
                    ";
                    // line 46
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbKeywordsDescription", (("<strong>" . $this->getContext($context, "nbKeywords")) . "</strong>")));
                    echo "
                </div>
            ";
                }
                // line 49
                echo "            <div class=\"sparkline\">
                    ";
                // line 50
                echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbDownloads")));
                echo "
                    ";
                // line 51
                echo trim(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbDownloadsDescription", (("<strong>" . $this->getContext($context, "nbDownloads")) . "</strong>"))));
                echo ",
                    ";
                // line 52
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbUniqueDownloadsDescription", (("<strong>" . $this->getContext($context, "nbUniqueDownloads")) . "</strong>")));
                echo "
            </div>
            <div class=\"sparkline\">
                    ";
                // line 55
                echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbOutlinks")));
                echo "
                    ";
                // line 56
                echo trim(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbOutlinksDescription", (("<strong>" . $this->getContext($context, "nbOutlinks")) . "</strong>"))));
                echo ",
                    ";
                // line 57
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbUniqueOutlinksDescription", (("<strong>" . $this->getContext($context, "nbUniqueOutlinks")) . "</strong>")));
                echo "
            </div>
            ";
            }
            // line 60
            echo "    ";
        }
        // line 61
        echo "    <div class=\"sparkline\">
            ";
        // line 62
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineMaxActions")));
        echo "
            ";
        // line 63
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_MaxNbActions", (("<strong>" . $this->getContext($context, "maxActions")) . "</strong>")));
        echo "
    </div>
</div>
<div style=\"clear:both;\"></div>

";
        // line 68
        $this->env->loadTemplate("_sparklineFooter.twig")->display($context);
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "@VisitsSummary/_sparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 69,  196 => 68,  188 => 63,  184 => 62,  181 => 61,  178 => 60,  172 => 57,  168 => 56,  164 => 55,  158 => 52,  154 => 51,  150 => 50,  147 => 49,  141 => 46,  137 => 45,  133 => 44,  130 => 43,  128 => 42,  123 => 40,  119 => 39,  115 => 38,  112 => 37,  106 => 34,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  89 => 27,  82 => 24,  80 => 23,  76 => 22,  73 => 21,  71 => 20,  66 => 18,  62 => 17,  56 => 14,  52 => 13,  45 => 10,  43 => 9,  39 => 8,  35 => 6,  32 => 5,  27 => 4,  37 => 9,  33 => 8,  28 => 6,  23 => 3,  19 => 1,);
    }
}
