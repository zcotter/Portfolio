<?php

/* @CoreUpdater/newVersionAvailable.twig */
class __TwigTemplate_48e3dbc69988903e7fa419de876de91fd58c548c8a44c57512f574db618dd9e5 extends Twig_Template
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
        // line 2
        $context["pluginsMacro"] = $this->env->loadTemplate("@CorePluginsAdmin/macros.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<br/>
<p><strong>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ThereIsNewVersionAvailableForUpdate")), "html", null, true);
        echo "</strong></p>

";
        // line 8
        if ($this->getContext($context, "can_auto_update")) {
            // line 9
            echo "    <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YouCanUpgradeAutomaticallyOrDownloadPackage", $this->getContext($context, "piwik_new_version"))), "html", null, true);
            echo "</p>
";
        } else {
            // line 11
            echo "    <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SystemCheckAutoUpdateHelp")), "html", null, true);
            echo "</p>
    <p>";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YouMustDownloadPackageOrFixPermissions", $this->getContext($context, "piwik_new_version"))), "html", null, true);
            echo "
        ";
            // line 13
            echo $this->getContext($context, "makeWritableCommands");
            echo "
    </p>
";
        }
        // line 16
        echo "
";
        // line 17
        if ($this->getContext($context, "incompatiblePlugins")) {
            // line 18
            echo "    <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_IncompatbilePluginsWillBeDisabledInfo", $this->getContext($context, "piwik_new_version"))), "html", null, true);
            echo "</p>

    <ul style=\"list-style: disc;\">
    ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "incompatiblePlugins"));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 22
                echo "        <li>";
                echo $context["pluginsMacro"]->getmissingRequirementsInfo($this->getAttribute($this->getContext($context, "plugin"), "getPluginName"), $this->getAttribute($this->getContext($context, "plugin"), "getInformation"), $this->getAttribute($this->getContext($context, "plugin"), "getMissingDependencies", array(0 => $this->getContext($context, "piwik_new_version")), "method"), $this->getContext($context, "marketplacePlugins"));
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </ul>
    <p> </p>
";
        }
        // line 27
        echo "
";
        // line 28
        if ($this->getContext($context, "can_auto_update")) {
            // line 29
            echo "<form id=\"oneclickupdate\" action=\"index.php\">
    <input type=\"hidden\" name=\"module\" value=\"CoreUpdater\"/>
    <input type=\"hidden\" name=\"action\" value=\"oneClickUpdate\"/>
    <input type=\"submit\" class=\"submit\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateAutomatically")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 34
        echo "    <a style=\"margin-left:50px;\" class=\"submit button\"
       href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "piwik_latest_version_url"), "html", null, true);
        echo "?cb=";
        echo twig_escape_filter($this->env, $this->getContext($context, "piwik_new_version"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_DownloadX", $this->getContext($context, "piwik_new_version"))), "html", null, true);
        echo "</a><br/>
    ";
        // line 36
        if ($this->getContext($context, "can_auto_update")) {
            // line 37
            echo "</form>
";
        }
        // line 39
        echo "<br/>
<a href=\"index.php\">&laquo; ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_BackToPiwik")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/newVersionAvailable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 40,  126 => 39,  122 => 37,  120 => 36,  112 => 35,  109 => 34,  104 => 32,  99 => 29,  97 => 28,  94 => 27,  89 => 24,  80 => 22,  76 => 21,  69 => 18,  67 => 17,  64 => 16,  58 => 13,  54 => 12,  49 => 11,  43 => 9,  41 => 8,  36 => 6,  33 => 5,  30 => 4,  25 => 2,);
    }
}
