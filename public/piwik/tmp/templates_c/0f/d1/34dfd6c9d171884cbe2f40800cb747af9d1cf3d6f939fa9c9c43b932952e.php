<?php

/* @SegmentEditor/getSelector.twig */
class __TwigTemplate_0fd134dfd6c9d171884cbe2f40800cb747af9d1cf3d6f939fa9c9c43b932952e extends Twig_Template
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
        echo "<div id=\"SegmentEditor\" style=\"display:none;\">
    <div class=\"segmentationContainer listHtml\">
        <span class=\"segmentationTitle\"></span>

        <ul class=\"submenu\">
            <li>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SelectSegmentOfVisitors")), "html", null, true);
        echo "
                <div class=\"segmentList\">
                    <ul>
                    </ul>
                </div>
            </li>
        </ul>
        ";
        // line 13
        if ($this->getContext($context, "authorizedToCreateSegments")) {
            // line 14
            echo "            <a class=\"add_new_segment\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddNewSegment")), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 16
            echo "            <ul class=\"submenu\">
            <li> <span class='youMustBeLoggedIn'>";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_YouMustBeLoggedInToCreateSegments")), "html", null, true);
            echo "
                <br/>&rsaquo; <a href='index.php?module=";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "loginModule"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a> </span>
            </li>
            </ul>
        ";
        }
        // line 22
        echo "    </div>

    <div class=\"initial-state-rows\">";
        // line 24
        echo "<div class=\"segment-add-row initial\"><div>
        <span>+ ";
        // line 25
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DragDropCondition"));
        echo "</span>
    </div></div>
    <div class=\"segment-and\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorAND"));
        echo "</div>
    <div class=\"segment-add-row initial\"><div>
        <span>+ ";
        // line 29
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DragDropCondition"));
        echo "</span>
    </div></div>
    </div>

    <div class=\"segment-row-inputs\">
        <div class=\"segment-input metricListBlock\">
            <select title=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_ChooseASegment")), "html", null, true);
        echo "\" class=\"metricList\">
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "segmentsByCategory"));
        foreach ($context['_seq'] as $context["category"] => $context["segmentsInCategory"]) {
            // line 37
            echo "                <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "category"), "html", null, true);
            echo "\">
                    ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "segmentsInCategory"));
            foreach ($context['_seq'] as $context["_key"] => $context["segmentInCategory"]) {
                // line 39
                echo "                        <option data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "segmentInCategory"), "type"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "segmentInCategory"), "segment"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "segmentInCategory"), "name"), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segmentInCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </optgroup>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['segmentsInCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </select>
        </div>
        <div class=\"segment-input metricMatchBlock\">
            <select title=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Matches")), "html", null, true);
        echo "\">
                <option value=\"==\">";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationEquals")), "html", null, true);
        echo "</option>
                <option value=\"!=\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationNotEquals")), "html", null, true);
        echo "</option>
                <option value=\"<=\">";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationAtMost")), "html", null, true);
        echo "</option>
                <option value=\">=\">";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationAtLeast")), "html", null, true);
        echo "</option>
                <option value=\"<\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationLessThan")), "html", null, true);
        echo "</option>
                <option value=\">\">";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationGreaterThan")), "html", null, true);
        echo "</option>
                <option value=\"=@\">";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationContains")), "html", null, true);
        echo "</option>
                <option value=\"!@\">";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OperationDoesNotContain")), "html", null, true);
        echo "</option>
            </select>
        </div>
        <div class=\"segment-input metricValueBlock\">
            <input type=\"text\" title=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Value")), "html", null, true);
        echo "\">
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"segment-rows\">
        <div class=\"segment-row\">
            <a href=\"#\" class=\"segment-close\"></a>
            <a href=\"#\" class=\"segment-loading\"></a>
        </div>
    </div>
    <div class=\"segment-or\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorOR")), "html", null, true);
        echo "</div>
    <div class=\"segment-add-or\"><div>
            ";
        // line 70
        ob_start();
        echo "<span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorOR")), "html", null, true);
        echo "</span>";
        $context["orCondition"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        echo "            <a href=\"#\"> + ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddANDorORCondition", $this->getContext($context, "orCondition")));
        echo " </a>
        </div>
    </div>
    <div class=\"segment-and\">";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorAND")), "html", null, true);
        echo "</div>
    <div class=\"segment-add-row\"><div>
            ";
        // line 76
        ob_start();
        echo "<span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_OperatorAND")), "html", null, true);
        echo "</span>";
        $context["andCondition"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "            <a href=\"#\">+ ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddANDorORCondition", $this->getContext($context, "andCondition")));
        echo "</a>
        </div>
    </div>
    <div class=\"segment-element\">
        <div class=\"segment-nav\">
            <h4 class=\"visits\"><span id=\"available_segments\"><strong>
                <select id=\"available_segments_select\"></select>
            </strong></span></h4>
            <div class=\"scrollable\">
            <ul>
                ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "segmentsByCategory"));
        foreach ($context['_seq'] as $context["category"] => $context["segmentsInCategory"]) {
            // line 88
            echo "                <li data=\"visit\">
                    <a class=\"metric_category\" href=\"#\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getContext($context, "category"), "html", null, true);
            echo "</a>
                    <ul style=\"display:none;\">
                        ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "segmentsInCategory"));
            foreach ($context['_seq'] as $context["_key"] => $context["segmentInCategory"]) {
                // line 92
                echo "                            <li data-metric=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "segmentInCategory"), "segment"), "html", null, true);
                echo "\"><a class=\"ddmetric\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "segmentInCategory"), "name"), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segmentInCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    </ul>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['segmentsInCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </ul>
            </div>
            <div class=\"custom_select_search\">
                <a href=\"#\"></a>
                <input type=\"text\" aria-haspopup=\"true\" aria-autocomplete=\"list\" role=\"textbox\" autocomplete=\"off\" class=\"inp ui-autocomplete-input\" id=\"segmentSearch\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
        echo "\" length=\"15\">
            </div>
        </div>
        <div class=\"segment-content\">
            ";
        // line 105
        if ($this->getContext($context, "isSuperUser")) {
            // line 106
            echo "            <div class=\"segment-top\">
                ";
            // line 107
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_ThisSegmentIsVisibleTo")), "html", null, true);
            echo " <span id=\"enable_all_users\"><strong>
                        <select id=\"enable_all_users_select\">
                            <option selected=\"1\" value=\"0\">";
            // line 109
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_VisibleToMe")), "html", null, true);
            echo "</option>
                            <option value=\"1\">";
            // line 110
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_VisibleToAllUsers")), "html", null, true);
            echo "</option>
                        </select>
                    </strong></span>

                ";
            // line 114
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentIsDisplayedForWebsite")), "html", null, true);
            echo "<span id=\"visible_to_website\"><strong>
                        <select id=\"visible_to_website_select\">
                            <option selected=\"\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getContext($context, "idSite"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentDisplayedThisWebsiteOnly")), "html", null, true);
            echo "</option>
                            <option value=\"0\">";
            // line 117
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SegmentDisplayedAllWebsites")), "html", null, true);
            echo "</option>
                        </select>
                    </strong></span>
                ";
            // line 120
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_And")), "html", null, true);
            echo " <span id=\"auto_archive\"><strong>
                        <select id=\"auto_archive_select\">
                            <option selected=\"1\" value=\"0\">";
            // line 122
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AutoArchiveRealTime")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DefaultAppended")), "html", null, true);
            echo "</option>
                            <option value=\"1\">";
            // line 123
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AutoArchivePreProcessed")), "html", null, true);
            echo " </option>
                        </select>
                    </strong></span>

            </div>
            ";
        }
        // line 129
        echo "            <h3>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Name")), "html", null, true);
        echo ": <span  class=\"segmentName\"></span> <a class=\"editSegmentName\" href=\"#\">";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit"))), "html", null, true);
        echo "</a></h3>
        </div>
        <div class=\"segment-footer\">
            <span class=\"segmentFooterNote\">The Segment Editor was <a class='crowdfundingLink' href='http://crowdfunding.piwik.org/custom-segments-editor/' target='_blank'>crowdfunded</a> with the awesome support of 80 companies and Piwik users worldwide!</span>
            <a class=\"delete\" href=\"#\">";
        // line 133
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
        echo "</a>
            <a class=\"close\" href=\"#\">";
        // line 134
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Close")), "html", null, true);
        echo "</a>
            <button class=\"saveAndApply\">";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_SaveAndApply")), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>

<div id=\"segmentEditorPanel\" class=\"js-autoLeftPanel\">
    <div id=\"segmentList\"></div>
</div>

<div class=\"ui-confirm\" id=\"segment-delete-confirm\">
    <h2>";
        // line 145
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AreYouSureDeleteSegment")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<script type=\"text/javascript\">
var availableSegments = ";
        // line 151
        echo $this->getContext($context, "savedSegmentsJson");
        echo ";
var segmentTranslations = ";
        // line 152
        echo $this->getContext($context, "segmentTranslations");
        echo ";
</script>
";
    }

    public function getTemplateName()
    {
        return "@SegmentEditor/getSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 152,  375 => 151,  368 => 147,  364 => 146,  360 => 145,  347 => 135,  343 => 134,  339 => 133,  329 => 129,  320 => 123,  314 => 122,  309 => 120,  303 => 117,  297 => 116,  292 => 114,  285 => 110,  281 => 109,  276 => 107,  273 => 106,  271 => 105,  264 => 101,  258 => 97,  250 => 94,  239 => 92,  235 => 91,  230 => 89,  227 => 88,  223 => 87,  209 => 77,  203 => 76,  198 => 74,  191 => 71,  185 => 70,  180 => 68,  167 => 58,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  123 => 43,  116 => 41,  103 => 39,  99 => 38,  94 => 37,  90 => 36,  86 => 35,  77 => 29,  72 => 27,  67 => 25,  64 => 24,  60 => 22,  51 => 18,  47 => 17,  44 => 16,  38 => 14,  36 => 13,  26 => 6,  19 => 1,);
    }
}
