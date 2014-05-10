<?php

/* @CoreUpdater/oneClickResults.twig */
class __TwigTemplate_57e9b2f620f7a398dcda9b9462a97f33bd2f1c324cca925a6e59dec678e774ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@CoreUpdater/layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CoreUpdater/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<br/>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "feedbackMessages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        if ($this->getContext($context, "coreError")) {
            // line 10
            echo "    <br/>
    <br/>
    <div class=\"error\"><img src=\"plugins/Zeitgeist/images/error_medium.png\"/> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getContext($context, "coreError"), "html", null, true);
            echo "</div>
    <br/>
    <br/>
    <div class=\"warning\">
        <img src=\"plugins/Zeitgeist/images/warning_medium.png\"/>
        ";
            // line 17
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateHasBeenCancelledExplanation", "<br /><br />", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/update/'>", "</a>"));
            echo "
    </div>
    <br/>
    <br/>
";
        }
        // line 22
        echo "
<form action=\"index.php\">
    <input type=\"submit\" class=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
        echo "\"/>
</form>
";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/oneClickResults.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  72 => 22,  64 => 17,  56 => 12,  52 => 10,  50 => 9,  47 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
