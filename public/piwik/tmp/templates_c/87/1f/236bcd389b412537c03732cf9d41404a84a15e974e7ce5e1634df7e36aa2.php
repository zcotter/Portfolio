<?php

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_871f236bcd389b412537c03732cf9d41404a84a15e974e7ce5e1634df7e36aa2 extends Twig_Template
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
        echo "<div class=\"top_bar_sites_selector ";
        if (($this->getContext($context, "currentModule") == "CoreHome")) {
            echo "sites_selector_in_dashboard";
        }
        echo "\">
    <label>";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo "</label>
    <div piwik-siteselector class=\"sites_autocomplete\"></div>

</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  67 => 9,  58 => 8,  90 => 24,  82 => 12,  74 => 20,  69 => 18,  39 => 3,  26 => 2,  63 => 9,  49 => 11,  33 => 6,  52 => 12,  48 => 6,  21 => 3,  28 => 5,  24 => 3,  144 => 38,  138 => 36,  131 => 33,  128 => 32,  121 => 31,  116 => 29,  104 => 26,  100 => 25,  96 => 13,  92 => 23,  87 => 22,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 8,  44 => 8,  35 => 6,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  139 => 46,  136 => 35,  132 => 37,  129 => 36,  126 => 35,  119 => 22,  117 => 21,  112 => 28,  110 => 17,  108 => 27,  102 => 13,  89 => 9,  83 => 7,  75 => 10,  72 => 19,  70 => 45,  66 => 17,  60 => 15,  55 => 7,  53 => 10,  50 => 9,  41 => 11,  38 => 29,  36 => 28,  32 => 26,  30 => 6,  22 => 2,  56 => 12,  54 => 13,  51 => 10,  47 => 10,  45 => 32,  42 => 4,  40 => 5,  37 => 10,  34 => 3,  29 => 5,);
    }
}
