<?php

/* @VisitorInterest/index.twig */
class __TwigTemplate_dc2c42411b1127cd578084c1335e76498ea56ef53951bdfeae81ce34eb29cf63 extends Twig_Template
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
        echo "<h2 piwik-enriched-headline>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorInterest_VisitsPerDuration")), "html", null, true);
        echo "</h2>
";
        // line 2
        echo $this->getContext($context, "dataTableNumberOfVisitsPerVisitDuration");
        echo "

<h2 piwik-enriched-headline>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorInterest_VisitsPerNbOfPages")), "html", null, true);
        echo "</h2>
";
        // line 5
        echo $this->getContext($context, "dataTableNumberOfVisitsPerPage");
        echo "

<h2 piwik-enriched-headline>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorInterest_visitsByVisitCount")), "html", null, true);
        echo "</h2>
";
        // line 8
        echo $this->getContext($context, "dataTableNumberOfVisitsByVisitNum");
        echo "

<h2 piwik-enriched-headline>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorInterest_VisitsByDaysSinceLast")), "html", null, true);
        echo "</h2>
";
        // line 11
        echo $this->getContext($context, "dataTableNumberOfVisitsByDaysSinceLast");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@VisitorInterest/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  47 => 10,  42 => 8,  38 => 7,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
