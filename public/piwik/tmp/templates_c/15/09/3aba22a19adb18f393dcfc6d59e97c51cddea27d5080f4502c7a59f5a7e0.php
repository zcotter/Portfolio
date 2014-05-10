<?php

/* @CorePluginsAdmin/safemode.twig */
class __TwigTemplate_15093aba22a19adb18f393dcfc6d59e97c51cddea27d5080f4502c7a59f5a7e0 extends Twig_Template
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
        echo "<html>
    <head>
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        ";
        // line 30
        if ((!$this->getContext($context, "isAnonymousUser"))) {
            // line 31
            echo "            <p>
                The following error just broke Piwik";
            // line 32
            if ($this->getContext($context, "showVersion")) {
                echo " (v";
                echo twig_escape_filter($this->env, $this->getContext($context, "piwikVersion"), "html", null, true);
                echo ")";
            }
            echo ":
                <pre>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "message"), "html", null, true);
            echo "</pre>
                in
                <pre>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "line"), "html", null, true);
            echo "</pre>
            </p>
        ";
        }
        // line 38
        echo "
        ";
        // line 39
        if ($this->getContext($context, "isSuperUser")) {
            // line 40
            echo "            <p>
                If this error continues to happen, there is a good chance to fix this issue by disabling one or more of
                the Third-Party plugins. You can enable them again in the
                <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a> or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                ";
            // line 46
            if ($this->getContext($context, "pluginCausesIssue")) {
                // line 47
                echo "                    Based on the error message, the issue is probably caused by the plugin <strong>";
                echo twig_escape_filter($this->env, $this->getContext($context, "pluginCausesIssue"), "html", null, true);
                echo "</strong>.
                ";
            }
            // line 49
            echo "            </p>

            <table>
                ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "plugins"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute($this->getContext($context, "plugin"), "uninstallable") && $this->getAttribute($this->getContext($context, "plugin"), "activated"))) {
                    // line 53
                    echo "                    <tr ";
                    if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 2)) {
                        echo "style=\"background-color: #eeeeee\"";
                    }
                    echo ">
                        <td style=\"min-width:200px;\">
                            ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getContext($context, "pluginName"), "html", null, true);
                    echo "
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getContext($context, "pluginName"), "html", null, true);
                    echo "&nonce=";
                    echo twig_escape_filter($this->env, $this->getContext($context, "deactivateNonce"), "html", null, true);
                    echo "\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </table>

            ";
            // line 65
            $context["uninstalledPluginsFound"] = false;
            // line 66
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "plugins"));
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute($this->getContext($context, "plugin"), "uninstallable") && (!$this->getAttribute($this->getContext($context, "plugin"), "activated")))) {
                    // line 67
                    echo "                ";
                    $context["uninstalledPluginsFound"] = true;
                    // line 68
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
            ";
            // line 70
            if ($this->getContext($context, "uninstalledPluginsFound")) {
                // line 71
                echo "
                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    ";
                // line 78
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "plugins"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                    if (($this->getAttribute($this->getContext($context, "plugin"), "uninstallable") && (!$this->getAttribute($this->getContext($context, "plugin"), "activated")))) {
                        // line 79
                        echo "                        <tr ";
                        if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 2)) {
                            echo "style=\"background-color: #eeeeee\"";
                        }
                        echo ">
                            <td style=\"min-width:200px;\">
                                ";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getContext($context, "pluginName"), "html", null, true);
                        echo "
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getContext($context, "pluginName"), "html", null, true);
                        echo "&nonce=";
                        echo twig_escape_filter($this->env, $this->getContext($context, "uninstallNonce"), "html", null, true);
                        echo "\"
                                   target=\"_blank\" onclick=\"return confirm('";
                        // line 85
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm", $this->getContext($context, "pluginName"))), "js"), "html", null, true);
                        echo "')\">uninstall</a>
                            </td>
                        </tr>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                </table>
            ";
            }
            // line 91
            echo "
            <p>
                <br />
                We appreciate if you send the
                <a href=\"mailto:hello@piwik.org?subject=";
            // line 95
            echo twig_escape_filter($this->env, ("Fatal error in Piwik " . twig_escape_filter($this->env, $this->getContext($context, "piwikVersion"), "url")), "html", null, true);
            echo "&body=";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "message"), "url"), "html", null, true);
            echo "%20in%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "file"), "url"), "html", null, true);
            echo "%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "line"), "url"), "html", null, true);
            echo "\">error report</a>
                to the Piwik team.
            </p>

        ";
        } elseif ($this->getContext($context, "isAnonymousUser")) {
            // line 100
            echo "
            <p>Please contact the system administrator.</p>

        ";
        } else {
            // line 104
            echo "            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:";
            // line 106
            echo twig_escape_filter($this->env, $this->getContext($context, "emailSuperUser"), "html", null, true);
            echo "?subject=";
            echo twig_escape_filter($this->env, ("Fatal error in Piwik " . twig_escape_filter($this->env, $this->getContext($context, "piwikVersion"), "url")), "html", null, true);
            echo "&body=";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "message"), "url"), "html", null, true);
            echo "%20in%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "file"), "url"), "html", null, true);
            echo "%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lastError"), "line"), "url"), "html", null, true);
            echo "\">error report</a>
                to your system administrator.
            </p>
        ";
        }
        // line 110
        echo "
        </div>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/safemode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 110,  259 => 106,  255 => 104,  249 => 100,  235 => 95,  229 => 91,  225 => 89,  211 => 85,  205 => 84,  199 => 81,  191 => 79,  180 => 78,  171 => 71,  169 => 70,  166 => 69,  159 => 68,  156 => 67,  150 => 66,  148 => 65,  144 => 63,  127 => 58,  121 => 55,  113 => 53,  102 => 52,  97 => 49,  91 => 47,  89 => 46,  81 => 40,  79 => 39,  76 => 38,  68 => 35,  63 => 33,  55 => 32,  52 => 31,  50 => 30,  19 => 1,);
    }
}
