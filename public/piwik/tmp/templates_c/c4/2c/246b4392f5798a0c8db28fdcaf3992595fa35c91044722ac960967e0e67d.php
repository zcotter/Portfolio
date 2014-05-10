<?php

/* _jsGlobalVariables.twig */
class __TwigTemplate_c42c246b4392f5798a0c8db28fdcaf3992595fa35c91044722ac960967e0e67d extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    var piwik = {};
    piwik.token_auth = \"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "token_auth"), "html", null, true);
        echo "\";
    piwik.piwik_url = \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "piwikUrl"), "html", null, true);
        echo "\";
    piwik.cacheBuster = \"";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "cacheBuster"), "html", null, true);
        echo "\";
    ";
        // line 6
        if ($this->getContext($context, "userLogin")) {
            echo "piwik.userLogin = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "userLogin"), "js"), "html", null, true);
            echo "\";";
        }
        // line 7
        echo "
    ";
        // line 8
        if (array_key_exists("idSite", $context)) {
            echo "piwik.idSite = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "idSite"), "html", null, true);
            echo "\";";
        }
        // line 9
        echo "
    ";
        // line 10
        if (array_key_exists("siteName", $context)) {
            echo "piwik.siteName = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "siteName"), "js"), "html", null, true);
            echo "\";";
        }
        // line 11
        echo "
    ";
        // line 12
        if (array_key_exists("siteMainUrl", $context)) {
            echo "piwik.siteMainUrl = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "siteMainUrl"), "js"), "html", null, true);
            echo "\";";
        }
        // line 13
        echo "
    ";
        // line 14
        if (array_key_exists("period", $context)) {
            echo "piwik.period = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "period"), "html", null, true);
            echo "\";";
        }
        // line 15
        echo "
";
        // line 20
        echo "    piwik.currentDateString = \"";
        echo twig_escape_filter($this->env, ((array_key_exists("date", $context)) ? (_twig_default_filter($this->getContext($context, "date"), ((array_key_exists("endDate", $context)) ? (_twig_default_filter($this->getContext($context, "endDate"), "")) : ("")))) : (((array_key_exists("endDate", $context)) ? (_twig_default_filter($this->getContext($context, "endDate"), "")) : ("")))), "html", null, true);
        echo "\";
";
        // line 21
        if (array_key_exists("startDate", $context)) {
            // line 22
            echo "    piwik.startDateString = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "startDate"), "html", null, true);
            echo "\";
    piwik.endDateString = \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "endDate"), "html", null, true);
            echo "\";
    piwik.minDateYear = ";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "minDateYear"), "html", null, true);
            echo ";
    piwik.minDateMonth = parseInt(\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "minDateMonth"), "html", null, true);
            echo "\", 10);
    piwik.minDateDay = parseInt(\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "minDateDay"), "html", null, true);
            echo "\", 10);
    piwik.maxDateYear = ";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "maxDateYear"), "html", null, true);
            echo ";
    piwik.maxDateMonth = parseInt(\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getContext($context, "maxDateMonth"), "html", null, true);
            echo "\", 10);
    piwik.maxDateDay = parseInt(\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "maxDateDay"), "html", null, true);
            echo "\", 10);
";
        }
        // line 31
        echo "    ";
        if (array_key_exists("language", $context)) {
            echo "piwik.language = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "language"), "html", null, true);
            echo "\";";
        }
        // line 32
        echo "
    piwik.hasSuperUserAccess = ";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((array_key_exists("hasSuperUserAccess", $context)) ? (_twig_default_filter($this->getContext($context, "hasSuperUserAccess"), 0)) : (0)), "js"), "html", null, true);
        echo ";
    piwik.config = {};
";
        // line 35
        if (array_key_exists("clientSideConfig", $context)) {
            // line 36
            echo "    piwik.config = ";
            echo twig_jsonencode_filter($this->getContext($context, "clientSideConfig"));
            echo ";
";
        }
        // line 38
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.jsGlobalVariables"));
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "_jsGlobalVariables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  138 => 36,  131 => 33,  128 => 32,  121 => 31,  116 => 29,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  87 => 22,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 11,  44 => 8,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,  139 => 46,  136 => 35,  132 => 37,  129 => 36,  126 => 35,  119 => 22,  117 => 21,  112 => 28,  110 => 17,  108 => 27,  102 => 13,  89 => 9,  83 => 7,  75 => 48,  72 => 47,  70 => 45,  66 => 44,  60 => 41,  55 => 38,  53 => 10,  50 => 9,  41 => 7,  38 => 29,  36 => 28,  32 => 26,  30 => 7,  22 => 1,  56 => 12,  54 => 11,  51 => 10,  47 => 33,  45 => 32,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,);
    }
}
