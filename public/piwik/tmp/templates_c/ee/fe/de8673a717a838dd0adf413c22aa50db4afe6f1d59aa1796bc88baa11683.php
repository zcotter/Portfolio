<?php

/* @CoreHome/_dataTableFooter.twig */
class __TwigTemplate_eefede8673a717a838dd0adf413c22aa50db4afe6f1d59aa1796bc88baa11683 extends Twig_Template
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
        echo "<div class=\"dataTableFeatures\">

    <div class=\"dataTableFooterNavigation\">
        ";
        // line 4
        if ($this->getAttribute($this->getContext($context, "properties"), "show_offset_information")) {
            // line 5
            echo "            <span>
                <span class=\"dataTablePages\"></span>
            </span>
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ($this->getAttribute($this->getContext($context, "properties"), "show_pagination_control")) {
            // line 11
            echo "            <span>
                <span class=\"dataTablePrevious\">&lsaquo; ";
            // line 12
            if ($this->getAttribute($this->getContext($context, "clientSideParameters", true), "dataTablePreviousIsFirst", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_First")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Previous")), "html", null, true);
            }
            echo " </span>
                <span class=\"dataTableNext\">";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Next")), "html", null, true);
            echo " &rsaquo;</span>
            </span>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "properties"), "show_search")) {
            // line 18
            echo "            <span class=\"dataTableSearchPattern\">
                <input type=\"text\" class=\"searchInput\" length=\"15\" />
                <input type=\"submit\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
            echo "\" />
            </span>
        ";
        }
        // line 23
        echo "    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Zeitgeist/images/loading-blue.gif\"/> ";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
        echo "</span>

    ";
        // line 27
        if ($this->getAttribute($this->getContext($context, "properties"), "show_footer_icons")) {
            // line 28
            echo "        <div class=\"dataTableFooterIcons\">
            <div class=\"dataTableFooterWrap\">
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "footerIcons"));
            foreach ($context['_seq'] as $context["_key"] => $context["footerIconGroup"]) {
                // line 31
                echo "                    <div class=\"tableIconsGroup\">
                    <span class=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "footerIconGroup"), "class"), "html", null, true);
                echo "\">
                    ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "footerIconGroup"), "buttons"));
                foreach ($context['_seq'] as $context["_key"] => $context["footerIcon"]) {
                    // line 34
                    echo "                        <span>
                            ";
                    // line 35
                    if (($this->getAttribute($this->getContext($context, "properties"), "show_active_view_icon") && ($this->getAttribute($this->getContext($context, "clientSideParameters"), "viewDataTable") == $this->getAttribute($this->getContext($context, "footerIcon"), "id")))) {
                        // line 36
                        echo "                                <img src=\"plugins/Zeitgeist/images/data_table_footer_active_item.png\" class=\"dataTableFooterActiveItem\"/>
                            ";
                    }
                    // line 38
                    echo "                            <a class=\"tableIcon ";
                    if (($this->getAttribute($this->getContext($context, "clientSideParameters"), "viewDataTable") == $this->getAttribute($this->getContext($context, "footerIcon"), "id"))) {
                        echo "activeIcon";
                    }
                    echo "\" data-footer-icon-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "footerIcon"), "id"), "html", null, true);
                    echo "\">
                                <img width=\"16\" height=\"16\" title=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "footerIcon"), "title"), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "footerIcon"), "icon"), "html", null, true);
                    echo "\"/>
                                ";
                    // line 40
                    if ($this->getAttribute($this->getContext($context, "footerIcon", true), "text", array(), "any", true, true)) {
                        echo "<span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "footerIcon"), "text"), "html", null, true);
                        echo "</span>";
                    }
                    // line 41
                    echo "                            </a>
                        </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                    </span>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIconGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                <div class=\"tableIconsGroup\">
                    ";
            // line 48
            if (twig_test_empty($this->getContext($context, "footerIcons"))) {
                // line 49
                echo "                        <img src=\"plugins/Zeitgeist/images/data_table_footer_active_item.png\" class=\"dataTableFooterActiveItem\"/>
                    ";
            }
            // line 51
            echo "                    <span class=\"exportToFormatIcons\">
                        <a class=\"tableIcon\" var=\"export\">
                            <img width=\"16\" height=\"16\" src=\"plugins/Zeitgeist/images/export.png\" title=\"";
            // line 53
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportThisReport")), "html", null, true);
            echo "\"/>
                        </a>
                    </span>
\t\t\t\t    <span class=\"exportToFormatItems\" style=\"display:none;\">
\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Export")), "html", null, true);
            echo ":
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable"), "html", null, true);
            echo "\" format=\"CSV\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit"), "html", null, true);
            echo "\">CSV</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable"), "html", null, true);
            echo "\" format=\"TSV\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit"), "html", null, true);
            echo "\">TSV (Excel)</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable"), "html", null, true);
            echo "\" format=\"XML\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit"), "html", null, true);
            echo "\">XML</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable"), "html", null, true);
            echo "\" format=\"JSON\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit"), "html", null, true);
            echo "\">Json</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable"), "html", null, true);
            echo "\" format=\"PHP\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit"), "html", null, true);
            echo "\">Php</a>
                        ";
            // line 63
            if ($this->getAttribute($this->getContext($context, "properties"), "show_export_as_rss_feed")) {
                // line 64
                echo "                            |
                            <a target=\"_blank\" methodToCall=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable"), "html", null, true);
                echo "\" format=\"RSS\" filter_limit=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit"), "html", null, true);
                echo "\" date=\"last10\">
                                <img border=\"0\" src=\"plugins/Zeitgeist/images/feed.png\"/>
                            </a>
                        ";
            }
            // line 69
            echo "\t\t\t\t    </span>
                    ";
            // line 70
            if ($this->getAttribute($this->getContext($context, "properties"), "show_export_as_image_icon")) {
                // line 71
                echo "                        <span id=\"dataTableFooterExportAsImageIcon\">
                            <a class=\"tableIcon\" href=\"#\" onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\">
                                <img title=\"";
                // line 73
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportAsImage")), "html", null, true);
                echo "\" src=\"plugins/Zeitgeist/images/image.png\"/>
                            </a>
                        </span>
                    ";
            }
            // line 77
            echo "                </div>

            </div>
            <div class=\"limitSelection ";
            // line 80
            if (((!$this->getAttribute($this->getContext($context, "properties"), "show_pagination_control")) && (!$this->getAttribute($this->getContext($context, "properties"), "show_limit_control")))) {
                echo " hidden";
            }
            echo "\"
                 title=\"";
            // line 81
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RowsToDisplay")), "html", null, true);
            echo "\"></div>
            <div class=\"tableConfiguration\">
                <a class=\"tableConfigurationIcon\" href=\"#\"></a>
                <ul>
                    ";
            // line 85
            if ($this->getAttribute($this->getContext($context, "properties"), "show_flatten_table")) {
                // line 86
                echo "                        ";
                if (($this->getAttribute($this->getContext($context, "clientSideParameters", true), "flat", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "clientSideParameters"), "flat") == 1))) {
                    // line 87
                    echo "                            <li>
                                <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                            </li>
                        ";
                }
                // line 91
                echo "                        <li>
                            <div class=\"configItem dataTableFlatten\"></div>
                        </li>
                    ";
            }
            // line 95
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "properties"), "show_exclude_low_population")) {
                // line 96
                echo "                        <li>
                            <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                        </li>
                    ";
            }
            // line 100
            echo "                </ul>
            </div>
            ";
            // line 102
            if ((call_user_func_array($this->env->getFunction('isPluginLoaded')->getCallable(), array("Annotations")) && (!$this->getAttribute($this->getContext($context, "properties"), "hide_annotations_view")))) {
                // line 103
                echo "                <div class=\"annotationView\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_IconDesc")), "html", null, true);
                echo "\">
                    <a class=\"tableIcon\">
                        <img width=\"16\" height=\"16\" src=\"plugins/Zeitgeist/images/annotations.png\"/>
                    </a>
                    <span>";
                // line 107
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_Annotations")), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 110
            echo "
            <div class=\"foldDataTableFooterDrawer\" title=\"";
            // line 111
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Close")), "html_attr");
            echo "\"
                    ><img width=\"7\" height=\"4\" src=\"plugins/Morpheus/images/sortasc_dark.png\"></div>

        </div>
        <div class=\"expandDataTableFooterDrawer\" title=\"";
            // line 115
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExpandDataTableFooter")), "html_attr");
            echo "\"
                ><img width=\"7\" height=\"4\" src=\"plugins/Morpheus/images/sortdesc_dark.png\" style=\"\"></div>
    ";
        }
        // line 118
        echo "
    <div class=\"datatableRelatedReports\">
        ";
        // line 120
        if (((!twig_test_empty($this->getAttribute($this->getContext($context, "properties"), "related_reports"))) && $this->getAttribute($this->getContext($context, "properties"), "show_related_reports"))) {
            // line 121
            echo "            ";
            echo $this->getAttribute($this->getContext($context, "properties"), "related_reports_title");
            echo "
            <ul style=\"list-style:none;";
            // line 122
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "related_reports")) == 1)) {
                echo "display:inline-block;";
            }
            echo "}\">
                <li><span href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "self_url"), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "title"), "html", null, true);
            echo "</span></li>

                ";
            // line 125
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "properties"), "related_reports"));
            foreach ($context['_seq'] as $context["reportUrl"] => $context["reportTitle"]) {
                // line 126
                echo "                    <li><span href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "reportUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "reportTitle"), "html", null, true);
                echo "</span></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reportUrl'], $context['reportTitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </ul>
        ";
        }
        // line 130
        echo "    </div>

    ";
        // line 132
        if (($this->getAttribute($this->getContext($context, "properties", true), "show_footer_message", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "properties"), "show_footer_message"))))) {
            // line 133
            echo "        <div class='datatableFooterMessage'>";
            echo $this->getAttribute($this->getContext($context, "properties"), "show_footer_message");
            echo "</div>
    ";
        }
        // line 135
        echo "
</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Zeitgeist/images/loading-blue.gif\"/> ";
        // line 138
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
        echo "</span>

<div class=\"dataTableSpacer\"></div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 132,  348 => 128,  337 => 126,  326 => 123,  320 => 122,  315 => 121,  313 => 120,  309 => 118,  303 => 115,  296 => 111,  279 => 103,  277 => 102,  273 => 100,  267 => 96,  252 => 87,  247 => 85,  240 => 81,  234 => 80,  229 => 77,  222 => 73,  218 => 71,  216 => 70,  213 => 69,  204 => 65,  199 => 63,  187 => 61,  175 => 59,  169 => 58,  165 => 57,  150 => 49,  123 => 40,  108 => 38,  95 => 33,  84 => 30,  80 => 28,  78 => 27,  73 => 25,  63 => 20,  59 => 18,  54 => 16,  48 => 13,  32 => 9,  24 => 4,  453 => 118,  445 => 115,  439 => 114,  435 => 113,  430 => 112,  425 => 110,  419 => 107,  416 => 106,  413 => 105,  409 => 104,  406 => 103,  400 => 101,  396 => 99,  394 => 98,  384 => 97,  375 => 96,  369 => 138,  366 => 93,  361 => 92,  341 => 89,  334 => 88,  331 => 87,  325 => 85,  317 => 83,  314 => 82,  311 => 81,  305 => 79,  302 => 78,  300 => 77,  291 => 72,  280 => 69,  274 => 68,  271 => 67,  264 => 95,  258 => 91,  255 => 64,  242 => 62,  239 => 61,  231 => 58,  227 => 57,  225 => 56,  220 => 55,  214 => 53,  209 => 52,  201 => 64,  190 => 47,  180 => 45,  173 => 44,  170 => 43,  163 => 42,  156 => 41,  154 => 51,  148 => 48,  145 => 47,  131 => 31,  126 => 30,  124 => 29,  117 => 39,  107 => 24,  102 => 35,  92 => 19,  89 => 18,  86 => 17,  82 => 16,  76 => 14,  67 => 13,  64 => 12,  44 => 8,  38 => 6,  34 => 5,  29 => 4,  655 => 200,  637 => 197,  635 => 196,  632 => 195,  625 => 190,  623 => 189,  618 => 186,  612 => 185,  606 => 183,  600 => 181,  598 => 180,  594 => 179,  591 => 178,  585 => 175,  578 => 174,  576 => 173,  569 => 171,  566 => 170,  560 => 167,  557 => 166,  555 => 165,  552 => 164,  546 => 161,  543 => 160,  541 => 159,  537 => 157,  532 => 155,  529 => 154,  526 => 153,  521 => 151,  518 => 150,  515 => 149,  512 => 148,  506 => 147,  501 => 146,  496 => 144,  490 => 143,  487 => 142,  484 => 141,  481 => 140,  477 => 139,  474 => 138,  471 => 137,  465 => 134,  459 => 133,  455 => 132,  452 => 131,  450 => 117,  447 => 129,  443 => 128,  436 => 127,  431 => 125,  428 => 111,  426 => 123,  420 => 122,  417 => 121,  415 => 120,  405 => 119,  401 => 118,  393 => 117,  389 => 115,  387 => 114,  382 => 113,  380 => 112,  376 => 110,  372 => 108,  367 => 107,  364 => 135,  358 => 133,  352 => 130,  349 => 100,  343 => 99,  338 => 98,  333 => 125,  328 => 95,  324 => 94,  318 => 92,  307 => 91,  299 => 89,  297 => 88,  295 => 74,  293 => 110,  290 => 85,  287 => 107,  282 => 83,  278 => 82,  272 => 80,  269 => 79,  263 => 76,  256 => 74,  251 => 63,  249 => 86,  246 => 71,  244 => 70,  241 => 69,  238 => 68,  235 => 67,  232 => 66,  219 => 64,  215 => 63,  211 => 62,  208 => 61,  205 => 60,  202 => 59,  197 => 58,  193 => 62,  186 => 54,  183 => 46,  181 => 60,  177 => 51,  172 => 49,  166 => 48,  161 => 47,  158 => 53,  153 => 45,  146 => 43,  142 => 36,  137 => 44,  129 => 41,  114 => 35,  106 => 33,  104 => 36,  88 => 31,  71 => 27,  69 => 23,  61 => 11,  58 => 10,  52 => 9,  46 => 15,  40 => 12,  37 => 11,  35 => 10,  23 => 2,  139 => 41,  136 => 33,  133 => 35,  130 => 34,  127 => 33,  125 => 38,  122 => 37,  119 => 28,  115 => 26,  111 => 27,  105 => 25,  99 => 34,  97 => 21,  94 => 20,  91 => 32,  85 => 18,  83 => 17,  79 => 15,  72 => 14,  66 => 13,  57 => 17,  49 => 16,  45 => 9,  41 => 7,  30 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
