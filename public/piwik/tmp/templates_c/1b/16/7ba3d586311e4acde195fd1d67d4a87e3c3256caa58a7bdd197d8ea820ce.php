<?php

/* @Live/getSimpleLastVisitCount.twig */
class __TwigTemplate_1b167ba3d586311e4acde195fd1d67d4a87e3c3256caa58a7bdd197d8ea820ce extends Twig_Template
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
        echo "<div class='simple-realtime-visitor-widget' data-refreshAfterXSecs=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "refreshAfterXSecs"), "html", null, true);
        echo "\" data-last-minutes=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "lastMinutes"), "html", null, true);
        echo "\" data-translations=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getContext($context, "translations")), "html", null, true);
        echo "\">
    <div class='simple-realtime-visitor-counter' title=\"";
        // line 2
        if (($this->getContext($context, "visitors") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NbVisitor")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NbVisitors", $this->getContext($context, "visitors"))), "html", null, true);
        }
        echo "\">
        <div>";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "visitors"), "html", null, true);
        echo "</div>
    </div>
    <br/>

    <div class='simple-realtime-elaboration'>
        ";
        // line 8
        ob_start();
        // line 9
        echo "            <span class=\"simple-realtime-metric\" data-metric=\"visits\">";
        if (($this->getContext($context, "visits") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OneVisit")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", $this->getContext($context, "visits"))), "html", null, true);
        }
        echo "</span>
        ";
        $context["visitsMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "        ";
        ob_start();
        // line 12
        echo "            <span class=\"simple-realtime-metric\" data-metric=\"actions\">";
        if (($this->getContext($context, "actions") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OneAction")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitsSummary_NbActionsDescription", $this->getContext($context, "actions"))), "html", null, true);
        }
        echo "</span>
        ";
        $context["actionsMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "        ";
        ob_start();
        // line 15
        echo "            <span class=\"simple-realtime-metric\" data-metric=\"minutes\">";
        if (($this->getContext($context, "lastMinutes") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OneMinute")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NMinutes", $this->getContext($context, "lastMinutes"))), "html", null, true);
        }
        echo "</span>
        ";
        $context["minutesMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_SimpleRealTimeWidget_Message", $this->getContext($context, "visitsMessage"), $this->getContext($context, "actionsMessage"), $this->getContext($context, "minutesMessage")));
        echo "
    </div>
</div>
<script type=\"text/javascript\">\$(document).ready(function () {require('piwik/Live').initSimpleRealtimeVisitorWidget();});</script>";
    }

    public function getTemplateName()
    {
        return "@Live/getSimpleLastVisitCount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  82 => 17,  72 => 15,  69 => 14,  59 => 12,  56 => 11,  46 => 9,  44 => 8,  36 => 3,  28 => 2,  19 => 1,);
    }
}
