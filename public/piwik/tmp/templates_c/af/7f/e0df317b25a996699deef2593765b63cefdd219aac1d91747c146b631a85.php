<?php

/* @CoreUpdater/layout.twig */
class __TwigTemplate_af7fe0df317b25a996699deef2593765b63cefdd219aac1d91747c146b631a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; ";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/themes/base/jquery-ui.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getBaseCss\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/simple_structure.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/CoreHome/stylesheets/jquery.ui.autocomplete.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/CoreUpdater/stylesheets/updateLayout.css\" />

    <script type=\"text/javascript\" src=\"libs/jquery/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery-ui.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/javascripts/donate.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreUpdater/javascripts/updateLayout.js\"></script>
    <script type=\"text/javascript\">";
        // line 19
        echo call_user_func_array($this->env->getFunction('getJavascriptTranslations')->getCallable(), array());
        echo "</script>
    ";
        // line 20
        if ((call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LayoutDirection")) == "rtl")) {
            // line 21
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/rtl.css\"/>
    ";
        }
        // line 23
        echo "
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>
</head>
<body id=\"simple\">
<div id=\"contentsimple\">
    <div id=\"title\">
        <img title='Piwik' alt=\"Piwik\" src=\"plugins/Morpheus/images/logo-header.png\" style=\"margin-left:10px;\"/>
        <span id=\"subh1\"> # ";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "</span>
    </div>
    ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "</div>
</body>
</html>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 33,  69 => 34,  67 => 32,  62 => 30,  53 => 23,  49 => 21,  43 => 19,  26 => 5,  20 => 1,  76 => 32,  72 => 22,  64 => 17,  56 => 12,  52 => 10,  50 => 9,  47 => 20,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
