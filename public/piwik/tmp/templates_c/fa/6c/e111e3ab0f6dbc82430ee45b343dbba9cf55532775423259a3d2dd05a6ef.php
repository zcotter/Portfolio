<?php

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_fa6ce111e3ab0f6dbc82430ee45b343dbba9cf55532775423259a3d2dd05a6ef extends Twig_Template
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
        // line 2
        $context["test_latest_version_available"] = "3.0";
        // line 3
        $context["test_piwikUrl"] = "http://demo.piwik.org/";
        // line 4
        ob_start();
        echo twig_escape_filter($this->env, (($this->getContext($context, "piwikUrl") == "http://demo.piwik.org/") || ($this->getContext($context, "piwikUrl") == "https://demo.piwik.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "<div id=\"updateCheckLinkContainer\">
    <span class='loadingPiwik' style=\"display:none;\"><img src='plugins/Zeitgeist/images/loading-blue.gif'/></span>
    <img class=\"icon\" src=\"plugins/Zeitgeist/images/reload.png\"/>
    <a href=\"#\" id=\"checkForUpdates\"><em>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CheckForUpdates")), "html", null, true);
        echo "</em></a>
</div>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
";
        // line 14
        if ((($this->getContext($context, "isPiwikDemo") || (($this->getContext($context, "latest_version_available") && $this->getContext($context, "hasSomeViewAccess")) && (!$this->getContext($context, "isUserIsAnonymous")))) || (($this->getContext($context, "isSuperUser") && array_key_exists("adminMenu", $context)) && $this->getContext($context, "adminMenu")))) {
            // line 15
            echo "<span id=\"header_message\" class=\"";
            if (($this->getContext($context, "isPiwikDemo") || (!$this->getContext($context, "latest_version_available")))) {
                echo "header_info";
            } else {
                echo "header_alert";
            }
            echo "\">
    <span class=\"header_short\">
        ";
            // line 17
            if ($this->getContext($context, "isPiwikDemo")) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
        ";
            } elseif ($this->getContext($context, "latest_version_available")) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", $this->getContext($context, "latest_version_available"))), "html", null, true);
                echo "
        ";
            } elseif ((($this->getContext($context, "isSuperUser") && array_key_exists("adminMenu", $context)) && $this->getContext($context, "adminMenu"))) {
                // line 22
                echo "            ";
                echo $this->getContext($context, "updateCheck");
                echo "
        ";
            }
            // line 24
            echo "    </span>

    <span class=\"header_full\">
        ";
            // line 27
            if ($this->getContext($context, "isPiwikDemo")) {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
            <br />
            ";
                // line 30
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DownloadFullVersion", "<a href='http://piwik.org/'>", "</a>", "<a href='http://piwik.org'>piwik.org</a>"));
                echo "
            <br/>
        ";
            }
            // line 33
            echo "        ";
            if (($this->getContext($context, "latest_version_available") && $this->getContext($context, "isSuperUser"))) {
                // line 34
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseUpdateNow", $this->getContext($context, "latest_version_available"), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a href='?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/changelog/' target='_blank'>", "</a>"));
                echo "
            <br/>
            ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", $this->getContext($context, "piwik_version"))), "html", null, true);
                echo "
        ";
            } elseif (((($this->getContext($context, "latest_version_available") && (!$this->getContext($context, "isPiwikDemo"))) && $this->getContext($context, "hasSomeViewAccess")) && (!$this->getContext($context, "isUserIsAnonymous")))) {
                // line 38
                echo "            ";
                $context["updateSubject"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", $this->getContext($context, "latest_version_available"))), "url");
                // line 39
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", (("<a href='?module=Proxy&action=redirect&url=http://piwik.org/' target='_blank'>Piwik</a> <a href='?module=Proxy&action=redirect&url=http://piwik.org/changelog/' target='_blank'>" . $this->getContext($context, "latest_version_available")) . "</a>"), (((("<a href='mailto:" . $this->getContext($context, "superUserEmails")) . "?subject=") . $this->getContext($context, "updateSubject")) . "'>"), "</a>"));
                echo "
        ";
            } elseif ((($this->getContext($context, "isSuperUser") && array_key_exists("adminMenu", $context)) && $this->getContext($context, "adminMenu"))) {
                // line 41
                echo "            ";
                echo $this->getContext($context, "updateCheck");
                echo "
            <br />
            ";
                // line 43
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", $this->getContext($context, "piwik_version"))), "html", null, true);
                echo "
        ";
            }
            // line 45
            echo "    </span>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  114 => 39,  111 => 38,  106 => 36,  43 => 13,  78 => 24,  46 => 14,  97 => 33,  95 => 32,  91 => 30,  88 => 30,  57 => 14,  101 => 17,  79 => 11,  67 => 18,  58 => 17,  90 => 24,  82 => 12,  74 => 20,  69 => 8,  39 => 8,  26 => 4,  63 => 6,  49 => 12,  33 => 6,  52 => 5,  48 => 15,  21 => 3,  28 => 5,  24 => 3,  144 => 38,  138 => 36,  131 => 45,  128 => 32,  121 => 31,  116 => 29,  104 => 36,  100 => 34,  96 => 13,  92 => 16,  87 => 22,  85 => 28,  80 => 20,  77 => 27,  71 => 14,  68 => 13,  62 => 17,  59 => 16,  44 => 9,  35 => 6,  31 => 6,  27 => 5,  23 => 4,  19 => 2,  139 => 46,  136 => 35,  132 => 37,  129 => 36,  126 => 43,  119 => 22,  117 => 21,  112 => 28,  110 => 17,  108 => 27,  102 => 13,  89 => 9,  83 => 27,  75 => 10,  72 => 22,  70 => 45,  66 => 20,  60 => 18,  55 => 15,  53 => 10,  50 => 9,  41 => 8,  38 => 2,  36 => 7,  32 => 7,  30 => 6,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 11,  40 => 12,  37 => 10,  34 => 8,  29 => 4,);
    }
}
