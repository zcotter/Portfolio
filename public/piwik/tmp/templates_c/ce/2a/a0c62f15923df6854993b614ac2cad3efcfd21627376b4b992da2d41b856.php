<?php

/* @CorePluginsAdmin/macros.twig */
class __TwigTemplate_ce2aa0c62f15923df6854993b614ac2cad3efcfd21627376b4b992da2d41b856 extends Twig_Template
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
        // line 54
        echo "
";
        // line 58
        echo "
";
        // line 65
        echo "
";
        // line 95
        echo "
";
        // line 109
        echo "
";
        // line 128
        echo "

";
    }

    // line 1
    public function gettablePluginUpdates($_pluginsHavingUpdate = null, $_nonce = null, $_isTheme = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsHavingUpdate" => $_pluginsHavingUpdate,
            "nonce" => $_nonce,
            "isTheme" => $_isTheme,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    <div class='entityContainer'>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr>
                <th>";
            // line 7
            if ($this->getContext($context, "isTheme")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
                <th class=\"num\">";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo "</th>
                <th>";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
                <th class=\"status\">";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
                <th class=\"action-links\">";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody id=\"plugins\">
            ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pluginsHavingUpdate"));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 16
                echo "                <tr ";
                if ($this->getAttribute($this->getContext($context, "plugin"), "isActivated")) {
                    echo "class=\"active-plugin\"";
                } else {
                    echo "class=\"inactive-plugin\"";
                }
                echo ">
                    <td class=\"name\">
                        <a href=\"javascript:void(0);\" data-pluginName=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html_attr");
                echo "\">
                            ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"vers\">
                        ";
                // line 23
                if ($this->getAttribute($this->getContext($context, "plugin"), "repositoryChangelogUrl")) {
                    // line 24
                    echo "                            <a href=\"javascript:void(0);\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Changelog")), "html", null, true);
                    echo "\" data-activePluginTab=\"changelog\" data-pluginName=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "currentVersion"), "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "latestVersion"), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "currentVersion"), "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "latestVersion"), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </td>
                    <td class=\"desc\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "description"), "html", null, true);
                echo "
                        ";
                // line 31
                echo $this->getAttribute($this, "missingRequirementsPleaseUpdateNotice", array(0 => $this->getContext($context, "plugin")), "method");
                echo "
                    </td>
                    <td class=\"status\">
                        ";
                // line 34
                if ($this->getAttribute($this->getContext($context, "plugin"), "isActivated")) {
                    // line 35
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 37
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                    echo "
                        ";
                }
                // line 39
                echo "                    </td>
                    <td class=\"togl action-links\">
                        ";
                // line 41
                if ((0 == twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements")))) {
                    // line 42
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "pluginName" => $this->getAttribute($this->getContext($context, "plugin"), "name"), "nonce" => $this->getContext($context, "nonce")))), "html", null, true);
                    echo "\">Update</a>
                        ";
                } else {
                    // line 44
                    echo "                            -
                        ";
                }
                // line 46
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tbody>
        </table>
    </div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getpluginDeveloper($_owner = null)
    {
        $context = $this->env->mergeGlobals(array(
            "owner" => $_owner,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            if (("piwik" == $this->getContext($context, "owner"))) {
                echo "<img title=\"Piwik\" alt=\"Piwik\" style=\"padding-bottom:2px;height:11px;\" src=\"plugins/Zeitgeist/images/logo-marketplace.png\"/>";
            } else {
                echo twig_escape_filter($this->env, $this->getContext($context, "owner"), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getfeaturedIcon($_align = "")
    {
        $context = $this->env->mergeGlobals(array(
            "align" => $_align,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_FeaturedPlugin")), "html", null, true);
            echo "\"
         src=\"plugins/CorePluginsAdmin/images/rating_important.png\"
         align=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getContext($context, "align"), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getpluginsFilter($_isTheme = null, $_isMarketplaceEnabled = null)
    {
        $context = $this->env->mergeGlobals(array(
            "isTheme" => $_isTheme,
            "isMarketplaceEnabled" => $_isMarketplaceEnabled,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "
    <p class=\"pluginsFilter entityContainer\">
        <span class=\"origin\">
            <strong>";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Origin")), "html", null, true);
            echo "</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">";
            // line 71
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"noncore\" href=\"#\">";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginThirdParty")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>";
            // line 77
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">";
            // line 79
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        ";
            // line 83
            if ($this->getContext($context, "isMarketplaceEnabled")) {
                // line 84
                echo "            <span class=\"getNewPlugins\">
                ";
                // line 85
                if ($this->getContext($context, "isTheme")) {
                    // line 86
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browseThemes", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewThemes")), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 88
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browsePlugins", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewPlugins")), "html", null, true);
                    echo "</a>
                ";
                }
                // line 90
                echo "            </span>
        ";
            }
            // line 92
            echo "    </p>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getmissingRequirementsPleaseUpdateNotice($_plugin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "plugin" => $_plugin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "plugin"), "missingRequirements") && (0 < twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements"))))) {
                // line 98
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "plugin"), "missingRequirements"));
                foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                    // line 99
                    echo "<p class=\"missingRequirementsNotice\">
                ";
                    // line 100
                    $context["requirement"] = twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "req"), "requirement"));
                    // line 101
                    echo "                ";
                    if (("Php" == $this->getContext($context, "requirement"))) {
                        // line 102
                        echo "                    ";
                        $context["requirement"] = "PHP";
                        // line 103
                        echo "                ";
                    }
                    // line 104
                    echo "                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_MissingRequirementsNotice", $this->getContext($context, "requirement"), $this->getAttribute($this->getContext($context, "req"), "actualVersion"), $this->getAttribute($this->getContext($context, "req"), "requiredVersion"))), "html", null, true);
                    echo "
            </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function getmissingRequirementsInfo($_pluginName = null, $_metadata = null, $_missingRequirements = null, $_marketplacePluginNames = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginName" => $_pluginName,
            "metadata" => $_metadata,
            "missingRequirements" => $_missingRequirements,
            "marketplacePluginNames" => $_marketplacePluginNames,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 111
            echo "    ";
            $context["causedBy"] = "";
            // line 112
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "missingRequirements"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dependency"]) {
                // line 113
                echo "        ";
                $context["causedBy"] = ((($this->getContext($context, "causedBy") . twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "dependency"), "requirement"))) . " ") . $this->getAttribute($this->getContext($context, "dependency"), "causedBy"));
                // line 114
                echo "        ";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    // line 115
                    echo "            ";
                    $context["causedBy"] = ($this->getContext($context, "causedBy") . ", ");
                    // line 116
                    echo "        ";
                }
                // line 117
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
    ";
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginRequirement", $this->getContext($context, "pluginName"), $this->getContext($context, "causedBy"))), "html", null, true);
            echo "

    ";
            // line 121
            if ((((array_key_exists("metadata", $context) && $this->getAttribute($this->getContext($context, "metadata", true), "support", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getContext($context, "metadata"), "support"), "email")) && !twig_in_filter($this->getContext($context, "pluginName"), $this->getContext($context, "marketplacePluginNames")))) {
                // line 125
                echo "        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_EmailToEnquireUpdatedVersion", (((("<a href=\"mailto:" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "metadata"), "support"), "email"), "html_attr")) . "\">") . $this->getAttribute($this->getAttribute($this->getContext($context, "metadata"), "support"), "email")) . "</a>"), $this->getContext($context, "pluginName")));
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 130
    public function gettablePlugins($_pluginsInfo = null, $_pluginNamesHavingSettings = null, $_activateNonce = null, $_deactivateNonce = null, $_uninstallNonce = null, $_isTheme = null, $_marketplacePluginNames = null, $_displayAdminLinks = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsInfo" => $_pluginsInfo,
            "pluginNamesHavingSettings" => $_pluginNamesHavingSettings,
            "activateNonce" => $_activateNonce,
            "deactivateNonce" => $_deactivateNonce,
            "uninstallNonce" => $_uninstallNonce,
            "isTheme" => $_isTheme,
            "marketplacePluginNames" => $_marketplacePluginNames,
            "displayAdminLinks" => $_displayAdminLinks,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 131
            echo "
<div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

    <h2 id=\"uninstallPluginConfirm\">";
            // line 134
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm")), "html", null, true);
            echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>

</div>

<div class='entityContainer'>
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th>";
            // line 144
            if ($this->getContext($context, "isTheme")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
            <th>";
            // line 145
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 146
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
            ";
            // line 147
            if ($this->getContext($context, "displayAdminLinks")) {
                // line 148
                echo "            <th class=\"action-links\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
                echo "</th>
            ";
            }
            // line 150
            echo "        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 153
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pluginsInfo"));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 154
                echo "            ";
                $context["isZeitgeist"] = ($this->getContext($context, "isTheme") && ($this->getContext($context, "name") == "Zeitgeist"));
                // line 155
                echo "            ";
                if ((($this->getAttribute($this->getContext($context, "plugin", true), "alwaysActivated", array(), "any", true, true) && (!$this->getAttribute($this->getContext($context, "plugin"), "alwaysActivated"))) || $this->getContext($context, "isTheme"))) {
                    // line 156
                    echo "                <tr ";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                        echo "class=\"active-plugin\"";
                    } else {
                        echo "class=\"inactive-plugin\"";
                    }
                    echo " data-filter-status=\"";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                        echo "active";
                    } else {
                        echo "inactive";
                    }
                    echo "\" data-filter-origin=\"";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) {
                        echo "core";
                    } else {
                        echo "noncore";
                    }
                    echo "\">
                    <td class=\"name\" style=\"white-space:nowrap;\">
                        <a name=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                    echo "\"></a>
                        ";
                    // line 159
                    if (((!$this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) && twig_in_filter($this->getContext($context, "name"), $this->getContext($context, "marketplacePluginNames")))) {
                        // line 160
                        echo "<a href=\"javascript:void(0);\"
                               data-pluginName=\"";
                        // line 161
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                        echo "\"
                               >";
                        // line 162
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 164
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 166
                    echo "                        <span class=\"plugin-version\" ";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CorePluginTooltip")), "html", null, true);
                        echo "\"";
                    }
                    echo ">(";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
                    } else {
                        echo "v";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "version"), "html", null, true);
                    }
                    echo ")</span>

                        ";
                    // line 168
                    if (twig_in_filter($this->getContext($context, "name"), $this->getContext($context, "pluginNamesHavingSettings"))) {
                        // line 169
                        echo "                            <br /><br />
                            <a href=\"";
                        // line 170
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CoreAdminHome", "action" => "pluginSettings"))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                        echo "\" class=\"settingsLink\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 172
                    echo "                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-missingrequirements\">
                            ";
                    // line 175
                    if (($this->getAttribute($this->getContext($context, "plugin", true), "missingRequirements", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements"))) {
                        // line 176
                        echo "                                ";
                        echo $this->getAttribute($this, "missingRequirementsInfo", array(0 => $this->getContext($context, "name"), 1 => $this->getAttribute($this->getContext($context, "plugin"), "info"), 2 => $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements"), 3 => $this->getContext($context, "marketplacePluginNames")), "method");
                        echo "
                                <br />
                            ";
                    }
                    // line 179
                    echo "                        </div>
                        <div class=\"plugin-desc-text\">

                            ";
                    // line 182
                    echo nl2br($this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "description"));
                    echo "

                            ";
                    // line 184
                    if (((!twig_test_empty((($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "homepage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "homepage"))) : ("")))) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "homepage"), array(0 => "http://piwik.org", 1 => "http://www.piwik.org", 2 => "http://piwik.org/", 3 => "http://www.piwik.org/")))) {
                        // line 187
                        echo "                            <span class=\"plugin-homepage\">
                                <a href=\"";
                        // line 188
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "homepage"), "html", null, true);
                        echo "\">(";
                        echo strtr(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginHomepage")), array(" " => "&nbsp;"));
                        echo ")</a>
                            </span>
                            ";
                    }
                    // line 191
                    echo "                        </div>
                        ";
                    // line 192
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "license", array(), "any", true, true)) {
                        // line 193
                        echo "                        <div class=\"plugin-license\">
                            ";
                        // line 194
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "<a title=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LicenseHomepage")), "html", null, true);
                            echo "\" target=\"_blank\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "license_homepage"), "html", null, true);
                            echo "\">";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "license"), "html", null, true);
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "</a>";
                        }
                        // line 195
                        echo "                        </div>
                        ";
                    }
                    // line 197
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                        // line 198
                        echo "                        <div class=\"plugin-author\">
                            <cite>By
                            ";
                        // line 200
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                            // line 201
                            ob_start();
                            // line 202
                            echo "                            ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "authors"));
                            $context['loop'] = array(
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            );
                            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                                if ($this->getAttribute($this->getContext($context, "author"), "name")) {
                                    // line 203
                                    echo "                                ";
                                    if ($this->getAttribute($this->getContext($context, "author", true), "homepage", array(), "any", true, true)) {
                                        // line 204
                                        echo "                                    <a title=\"";
                                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_AuthorHomepage")), "html", null, true);
                                        echo "\" href=\"";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "author"), "homepage"), "html", null, true);
                                        echo "\" target=\"_blank\">";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "author"), "name"), "html", null, true);
                                        echo "</a>
                                ";
                                    } else {
                                        // line 206
                                        echo "                                    ";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "author"), "name"), "html", null, true);
                                        echo "
                                ";
                                    }
                                    // line 208
                                    echo "                                ";
                                    if (($this->getAttribute($this->getContext($context, "loop"), "index") < twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "authors")))) {
                                        // line 209
                                        echo "                                        ,
                                    ";
                                    }
                                    // line 211
                                    echo "                            ";
                                    ++$context['loop']['index0'];
                                    ++$context['loop']['index'];
                                    $context['loop']['first'] = false;
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 212
                            echo "                            ";
                            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        }
                        // line 213
                        echo ".</cite>
                        </div>
                        ";
                    }
                    // line 216
                    echo "                    </td>
                    <td class=\"status\" ";
                    // line 217
                    if ($this->getContext($context, "isZeitgeist")) {
                        echo "style=\"border-left-width:0px;\"";
                    }
                    echo ">
                        ";
                    // line 218
                    if ((!$this->getContext($context, "isZeitgeist"))) {
                        // line 220
                        if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                            // line 221
                            echo "                            ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                            echo "
                        ";
                        } else {
                            // line 223
                            echo "                            ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                            echo "
                            ";
                            // line 224
                            if (($this->getAttribute($this->getContext($context, "plugin"), "uninstallable") && $this->getContext($context, "displayAdminLinks"))) {
                                echo " <br/> - <a data-pluginName=\"";
                                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                                echo "\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                                echo "&nonce=";
                                echo twig_escape_filter($this->env, $this->getContext($context, "uninstallNonce"), "html", null, true);
                                echo "'>";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionUninstall")), "html", null, true);
                                echo "</a>";
                            }
                            // line 225
                            echo "                        ";
                        }
                    }
                    // line 228
                    echo "                    </td>

                    ";
                    // line 230
                    if ($this->getContext($context, "displayAdminLinks")) {
                        // line 231
                        echo "                    <td class=\"togl action-links\" ";
                        if ($this->getContext($context, "isZeitgeist")) {
                            echo "style=\"border-left-width:0px;\"";
                        }
                        echo ">
                        ";
                        // line 232
                        if ((!$this->getContext($context, "isZeitgeist"))) {
                            // line 234
                            if (($this->getAttribute($this->getContext($context, "plugin", true), "invalid", array(), "any", true, true) || $this->getAttribute($this->getContext($context, "plugin"), "alwaysActivated"))) {
                                // line 235
                                echo "                            -
                        ";
                            } else {
                                // line 237
                                echo "                            ";
                                if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                                    // line 238
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                                    echo "&nonce=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "deactivateNonce"), "html", null, true);
                                    echo "'>";
                                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Deactivate")), "html", null, true);
                                    echo "</a>
                            ";
                                } elseif ($this->getAttribute($this->getContext($context, "plugin"), "missingRequirements")) {
                                    // line 240
                                    echo "                                -
                            ";
                                } else {
                                    // line 242
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                                    echo "&nonce=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "activateNonce"), "html", null, true);
                                    echo "'>";
                                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Activate")), "html", null, true);
                                    echo "</a>
                            ";
                                }
                                // line 244
                                echo "                        ";
                            }
                        }
                        // line 247
                        echo "                    </td>
                    ";
                    }
                    // line 249
                    echo "                </tr>
            ";
                }
                // line 251
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "        </tbody>
    </table>
</div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  886 => 252,  880 => 251,  876 => 249,  872 => 247,  868 => 244,  858 => 242,  854 => 240,  844 => 238,  841 => 237,  837 => 235,  835 => 234,  833 => 232,  826 => 231,  824 => 230,  820 => 228,  816 => 225,  804 => 224,  799 => 223,  793 => 221,  791 => 220,  789 => 218,  783 => 217,  780 => 216,  775 => 213,  771 => 212,  761 => 211,  757 => 209,  754 => 208,  748 => 206,  738 => 204,  735 => 203,  723 => 202,  721 => 201,  719 => 200,  715 => 198,  712 => 197,  708 => 195,  696 => 194,  693 => 193,  691 => 192,  688 => 191,  680 => 188,  677 => 187,  675 => 184,  670 => 182,  665 => 179,  658 => 176,  656 => 175,  651 => 172,  642 => 170,  639 => 169,  637 => 168,  620 => 166,  614 => 164,  610 => 162,  606 => 161,  603 => 160,  601 => 159,  597 => 158,  575 => 156,  572 => 155,  569 => 154,  565 => 153,  560 => 150,  554 => 148,  552 => 147,  548 => 146,  544 => 145,  536 => 144,  525 => 136,  521 => 135,  517 => 134,  512 => 131,  494 => 130,  479 => 125,  477 => 121,  472 => 119,  469 => 118,  455 => 117,  452 => 116,  449 => 115,  446 => 114,  443 => 113,  425 => 112,  422 => 111,  408 => 110,  396 => 107,  387 => 104,  384 => 103,  381 => 102,  378 => 101,  376 => 100,  373 => 99,  368 => 98,  365 => 97,  354 => 96,  341 => 92,  337 => 90,  329 => 88,  321 => 86,  319 => 85,  316 => 84,  314 => 83,  308 => 80,  304 => 79,  300 => 78,  296 => 77,  289 => 73,  285 => 72,  281 => 71,  277 => 70,  272 => 67,  260 => 66,  247 => 63,  242 => 61,  239 => 60,  228 => 59,  212 => 56,  201 => 55,  186 => 49,  178 => 46,  174 => 44,  168 => 42,  166 => 41,  162 => 39,  156 => 37,  150 => 35,  148 => 34,  142 => 31,  138 => 30,  134 => 28,  114 => 24,  105 => 19,  101 => 18,  91 => 16,  87 => 15,  72 => 9,  68 => 8,  60 => 7,  53 => 2,  40 => 1,  34 => 128,  31 => 109,  28 => 95,  22 => 58,  19 => 54,  129 => 40,  126 => 26,  122 => 37,  120 => 36,  112 => 23,  109 => 34,  104 => 32,  99 => 29,  97 => 28,  94 => 27,  89 => 24,  80 => 11,  76 => 10,  69 => 18,  67 => 17,  64 => 16,  58 => 13,  54 => 12,  49 => 11,  43 => 9,  41 => 8,  36 => 6,  33 => 5,  30 => 4,  25 => 65,);
    }
}
