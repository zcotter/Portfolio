<?php

/* @VisitFrequency/_sparklines.twig */
class __TwigTemplate_1bf66520d73e00a47150a0b5c1c69a9f8e4c836a7648ff29487eaadfe6fb88d0 extends Twig_Template
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
        echo "<div class=\"sparkline\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbVisitsReturning")));
        echo "
    ";
        // line 3
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitFrequency_ReturnVisits", (("<strong>" . $this->getContext($context, "nbVisitsReturning")) . "</strong>")));
        echo "
</div>
<div class=\"sparkline\">
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineNbActionsReturning")));
        echo "
    ";
        // line 7
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitFrequency_ReturnActions", (("<strong>" . $this->getContext($context, "nbActionsReturning")) . "</strong>")));
        echo "
</div>
<div class=\"sparkline\">
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineActionsPerVisitReturning")));
        echo "
    ";
        // line 11
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitFrequency_ReturnAvgActions", (("<strong>" . $this->getContext($context, "nbActionsPerVisitReturning")) . "</strong>")));
        echo "
</div>
<div class=\"sparkline\">
    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineAvgVisitDurationReturning")));
        echo "
    ";
        // line 15
        $context["avgVisitDurationReturning"] = call_user_func_array($this->env->getFilter('sumtime')->getCallable(), array($this->getContext($context, "avgVisitDurationReturning")));
        // line 16
        echo "    ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitFrequency_ReturnAverageVisitDuration", (("<strong>" . $this->getContext($context, "avgVisitDurationReturning")) . "</strong>")));
        echo "
</div>
<div class=\"sparkline\">
    ";
        // line 19
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array($this->getContext($context, "urlSparklineBounceRateReturning")));
        echo "
    ";
        // line 20
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitFrequency_ReturnBounceRate", (("<strong>" . $this->getContext($context, "bounceRateReturning")) . "%</strong>")));
        echo "
</div>
";
        // line 22
        $this->env->loadTemplate("_sparklineFooter.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "@VisitFrequency/_sparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  69 => 20,  65 => 19,  58 => 16,  56 => 15,  52 => 14,  46 => 11,  42 => 10,  36 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
