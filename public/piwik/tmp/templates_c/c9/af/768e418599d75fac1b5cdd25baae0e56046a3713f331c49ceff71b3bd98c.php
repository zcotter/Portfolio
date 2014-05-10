<?php

/* @CoreHome/_siteSelect.twig */
class __TwigTemplate_c9af768e418599d75fac1b5cdd25baae0e56046a3713f331c49ceff71b3bd98c extends Twig_Template
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
        // line 16
        ob_start();
        // line 17
        echo "    <div class=\"custom_select_all\" style=\"clear: both;\">
        <a href=\"#\" ";
        // line 18
        if ((array_key_exists("showAllSitesItem", $context) && ($this->getContext($context, "showAllSitesItem") == false))) {
            echo "style=\"display:none;\"";
        }
        echo ">
            ";
        // line 19
        if (array_key_exists("allSitesItemText", $context)) {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "allSitesItemText"), "html", null, true);
            echo "
            ";
        } else {
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MultiSitesSummary")), "html", null, true);
            echo "
            ";
        }
        // line 24
        echo "        </a>
    </div>
";
        $context["sitesSelector_allWebsitesLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "<div class=\"sites_autocomplete ";
        if ((twig_length_filter($this->env, $this->getContext($context, "sites")) > 1)) {
            echo "sites_autocomplete--dropdown";
        }
        echo "\"
        ";
        // line 28
        if (array_key_exists("siteSelectorId", $context)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "siteSelectorId"), "html", null, true);
            echo "\"";
        }
        // line 29
        echo "        ";
        if (((!array_key_exists("switchSiteOnSelect", $context)) || $this->getContext($context, "switchSiteOnSelect"))) {
            echo "data-switch-site-on-select=\"1\"";
        }
        echo ">
    <div class=\"custom_select\">

        <a href=\"#\" onclick=\"return false\" class=\"custom_select_main_link\" data-loading=\"0\" data-siteid=\"";
        // line 32
        if (array_key_exists("idSite", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "idSite"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sites"), 0, array(), "array"), "idsite"), "html", null, true);
        }
        echo "\">
            <span>";
        // line 33
        if (array_key_exists("siteName", $context)) {
            echo $this->getContext($context, "siteName");
        } else {
            echo $this->getAttribute($this->getAttribute($this->getContext($context, "sites"), 0, array(), "array"), "name");
        }
        echo "</span>
        </a>

        <div class=\"custom_select_block\">
            ";
        // line 37
        if ((array_key_exists("allWebsitesLinkLocation", $context) && ($this->getContext($context, "allWebsitesLinkLocation") == "top"))) {
            // line 38
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "sitesSelector_allWebsitesLink"), "html", null, true);
            echo "
            ";
        }
        // line 40
        echo "            <div class=\"custom_select_container\">
                <ul class=\"custom_select_ul_list\">
                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sites"));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 43
            echo "                        <li ";
            if ((((!array_key_exists("showSelectedSite", $context)) || ($this->getContext($context, "showSelectedSite") == false)) && ($this->getContext($context, "idSite") == $this->getAttribute($this->getContext($context, "info"), "idsite")))) {
                echo " style=\"display: none;\"";
            }
            echo ">
                            <a href=\"#\" data-siteid=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "idsite"), "html", null, true);
            echo "\">";
            echo $this->getAttribute($this->getContext($context, "info"), "name");
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </ul>
            </div>
            ";
        // line 49
        if (((!array_key_exists("allWebsitesLinkLocation", $context)) || ($this->getContext($context, "allWebsitesLinkLocation") == "bottom"))) {
            // line 50
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "sitesSelector_allWebsitesLink"), "html", null, true);
            echo "
            ";
        }
        // line 52
        echo "            <div class=\"custom_select_search\" ";
        if (($this->getContext($context, "show_autocompleter") == false)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                <input type=\"text\" length=\"15\" class=\"websiteSearch inp\"/>
                <input type=\"hidden\" class=\"max_sitename_width\" value=\"130\"/>
                <input type=\"submit\" value=\"Search\" class=\"but\"/>
                <img title=\"Clear\" class=\"reset\" style=\"position: relative; top: 4px; left: -44px; cursor: pointer; display: none;\"
                     src=\"plugins/CoreHome/images/reset_search.png\"/>
            </div>
        </div>
    </div>
    ";
        // line 61
        if (array_key_exists("inputName", $context)) {
            // line 62
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "inputName"), "html", null, true);
            echo "\" value=\"";
            if (array_key_exists("idSite", $context)) {
                echo twig_escape_filter($this->env, $this->getContext($context, "idSite"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sites"), 0, array(), "array"), "idsite"), "html", null, true);
            }
            echo "\"/>
    ";
        }
        // line 64
        echo "</div>
<script type=\"text/javascript\">
    \$(document).ready(function () { piwik.initSiteSelectors(); });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 29,  44 => 24,  35 => 6,  26 => 2,  90 => 37,  82 => 22,  69 => 18,  39 => 8,  63 => 9,  33 => 6,  59 => 8,  52 => 12,  48 => 15,  21 => 17,  28 => 5,  24 => 18,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 38,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 27,  46 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 16,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 13,  60 => 12,  55 => 10,  53 => 34,  50 => 9,  41 => 8,  38 => 22,  36 => 27,  32 => 20,  30 => 19,  22 => 2,  56 => 28,  54 => 13,  51 => 10,  47 => 10,  45 => 31,  42 => 9,  40 => 7,  37 => 10,  34 => 3,  29 => 4,);
    }
}
