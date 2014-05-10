<?php

/* @Live/_actionsList.twig */
class __TwigTemplate_4e37d444a98a7bd3625291cccdb144154233836c0f965ff2e67b0c53d4ac9ae3 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "actionDetails"));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "action", true), "customVariables", array(), "any", true, true)) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CustomVariables_CustomVariables")), "html", null, true);
                echo "
            ";
                // line 5
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "action"), "customVariables"));
                foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                    // line 6
                    echo "                ";
                    $context["name"] = ("customVariablePageName" . $this->getContext($context, "id"));
                    // line 7
                    echo "                ";
                    $context["value"] = ("customVariablePageValue" . $this->getContext($context, "id"));
                    // line 8
                    echo "                - ";
                    echo $this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "name"), array(), "array");
                    echo " ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "value"), array(), "array")) > 0)) {
                        echo " = ";
                        echo $this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "value"), array(), "array");
                    }
                    // line 9
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "        ";
            }
            // line 11
            echo "    ";
            $context["customVariablesTooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "    ";
            if ((((!$this->getAttribute($this->getContext($context, "clientSideParameters"), "filterEcommerce")) || ($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder")) || ($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceAbandonedCart"))) {
                // line 13
                echo "        <li class=\"";
                if ($this->getAttribute($this->getContext($context, "action", true), "goalName", array(), "any", true, true)) {
                    echo "goal";
                } else {
                    echo "action";
                }
                echo "\"
            title=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "serverTimePretty"), "html", null, true);
                if (($this->getAttribute($this->getContext($context, "action", true), "url", array(), "any", true, true) && twig_length_filter($this->env, trim($this->getAttribute($this->getContext($context, "action"), "url"))))) {
                    // line 15
                    echo "
";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "url"), "html", null, true);
                }
                if (twig_length_filter($this->env, trim($this->getContext($context, "customVariablesTooltip")))) {
                    // line 17
                    echo "
";
                    // line 18
                    echo twig_escape_filter($this->env, trim($this->getContext($context, "customVariablesTooltip")), "html", null, true);
                }
                // line 19
                if ($this->getAttribute($this->getContext($context, "action", true), "generationTime", array(), "any", true, true)) {
                    // line 20
                    echo "
";
                    // line 21
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnGenerationTime")), "html", null, true);
                    echo ": ";
                    echo $this->getAttribute($this->getContext($context, "action"), "generationTime");
                }
                // line 22
                if ($this->getAttribute($this->getContext($context, "action", true), "timeSpentPretty", array(), "any", true, true)) {
                    // line 23
                    echo "
";
                    // line 24
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeOnPage")), "html", null, true);
                    echo ": ";
                    echo $this->getAttribute($this->getContext($context, "action"), "timeSpentPretty");
                }
                echo "\">
            <div>
            ";
                // line 26
                if ((($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder") || ($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceAbandonedCart"))) {
                    // line 27
                    echo "            ";
                    // line 28
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                    echo "\"/>
                ";
                    // line 29
                    if (($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder")) {
                        // line 30
                        echo "                    <strong>";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceOrder")), "html", null, true);
                        echo "</strong>
                    <span style='color:#666;'>(";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "orderId"), "html", null, true);
                        echo ")</span>
                ";
                    } else {
                        // line 33
                        echo "                    <strong>";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
                        echo "</strong>

                    ";
                        // line 36
                        echo "                ";
                    }
                    // line 37
                    echo "                <p>
                <span ";
                    // line 38
                    if ((!$this->getContext($context, "isWidget"))) {
                        echo "style='margin-left:20px;'";
                    }
                    echo ">
                    ";
                    // line 39
                    if (($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder")) {
                        // line 41
                        ob_start();
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        echo ": ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenue"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                        echo "
";
                        // line 42
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "revenueSubTotal")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Subtotal")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenueSubTotal"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                        }
                        // line 43
                        echo "
";
                        // line 44
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "revenueTax")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Tax")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenueTax"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                        }
                        // line 45
                        echo "
";
                        // line 46
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "revenueShipping")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Shipping")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenueShipping"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                        }
                        // line 47
                        echo "
";
                        // line 48
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "revenueDiscount")))) {
                            echo " - ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Discount")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenueDiscount"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                        }
                        $context["ecommerceOrderTooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 50
                        echo "                    <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "ecommerceOrderTooltip"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        echo ":
                    ";
                    } else {
                        // line 52
                        echo "                        ";
                        ob_start();
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                        ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", $this->getContext($context, "revenueLeft"))), "html", null, true);
                        echo ":
                    ";
                    }
                    // line 55
                    echo "                        <strong>";
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenue"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                    echo "</strong>
                    ";
                    // line 56
                    if (($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder")) {
                        // line 57
                        echo "                    </abbr>
                    ";
                    }
                    // line 58
                    echo ", ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "items"), "html", null, true);
                    echo "

                    ";
                    // line 61
                    echo "                    ";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "itemDetails")))) {
                        // line 62
                        echo "                        <ul style='list-style:square;margin-left:";
                        if ($this->getContext($context, "isWidget")) {
                            echo "15";
                        } else {
                            echo "50";
                        }
                        echo "px;'>
                            ";
                        // line 63
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "action"), "itemDetails"));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 64
                            echo "                                <li>
                                    ";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "itemSKU"), "html", null, true);
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "product"), "itemName")))) {
                                echo ": ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "itemName"), "html", null, true);
                            }
                            // line 66
                            echo "                                    ";
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "product"), "itemCategory")))) {
                                echo " (";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "itemCategory"), "html", null, true);
                                echo ")";
                            }
                            // line 67
                            echo "                                    ,
                                    ";
                            // line 68
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                            echo ": ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "quantity"), "html", null, true);
                            echo ",
                                    ";
                            // line 69
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Price")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "product"), "price"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                            echo "
                                </li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                        </ul>
                    ";
                    }
                    // line 74
                    echo "                </span>
                </p>
            ";
                } elseif ((!$this->getAttribute($this->getContext($context, "action", true), "goalName", array(), "any", true, true))) {
                    // line 77
                    echo "                ";
                    // line 78
                    echo "                ";
                    if ((!twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "pageTitle"), false)) : (false))))) {
                        // line 79
                        echo "                    <span class=\"truncated-text-line\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "pageTitle"), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 81
                    echo "                ";
                    if ($this->getAttribute($this->getContext($context, "action", true), "siteSearchKeyword", array(), "any", true, true)) {
                        // line 82
                        echo "                    ";
                        if (($this->getAttribute($this->getContext($context, "action"), "type") == "search")) {
                            // line 83
                            echo "                        <img src='";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                            echo "' title='";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                            echo "' class=\"action-list-action-icon\">
                    ";
                        }
                        // line 85
                        echo "                    <span class=\"truncated-text-line\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "siteSearchKeyword"), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 87
                    echo "                ";
                    if ((!twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "eventCategory"), false)) : (false))))) {
                        // line 88
                        echo "                    <img src='";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                        echo "' title='";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
                        echo "' class=\"action-list-action-icon\">
                    <span class=\"truncated-text-line\">";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventCategory"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventAction"), "html", null, true);
                        echo " ";
                        if ($this->getAttribute($this->getContext($context, "action", true), "eventName", array(), "any", true, true)) {
                            echo "- ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventName"), "html", null, true);
                        }
                        echo " ";
                        if ($this->getAttribute($this->getContext($context, "action", true), "eventValue", array(), "any", true, true)) {
                            echo "- ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventValue"), "html", null, true);
                        }
                        echo "</span>
                ";
                    }
                    // line 91
                    echo "                ";
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "url")))) {
                        // line 92
                        echo "                    ";
                        if ((($this->getAttribute($this->getContext($context, "action"), "type") == "action") && (!twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "pageTitle"), false)) : (false)))))) {
                            echo "<p>";
                        }
                        // line 93
                        echo "                    ";
                        if ((($this->getAttribute($this->getContext($context, "action"), "type") == "download") || ($this->getAttribute($this->getContext($context, "action"), "type") == "outlink"))) {
                            // line 94
                            echo "                        <img src='";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                            echo "' class=\"action-list-action-icon\">
                    ";
                        }
                        // line 96
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "url"), "html", null, true);
                        echo "\" target=\"_blank\" class=\"";
                        if (twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "eventCategory"), false)) : (false)))) {
                            echo "action-list-url";
                        }
                        echo " truncated-text-line\"
                       ";
                        // line 97
                        if (((!array_key_exists("overrideLinkStyle", $context)) || $this->getContext($context, "overrideLinkStyle"))) {
                            echo "style=\"";
                            if ((($this->getAttribute($this->getContext($context, "action"), "type") == "action") && (!twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "pageTitle"), false)) : (false)))))) {
                                echo "margin-left: 9px;";
                            }
                            echo "text-decoration:underline;\"";
                        }
                        echo ">
                       ";
                        // line 98
                        if ((!twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "eventCategory"), false)) : (false))))) {
                            // line 99
                            echo "                            (url)
                       ";
                        } else {
                            // line 101
                            echo "                           ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "url"), "html", null, true);
                            echo "
                       ";
                        }
                        // line 103
                        echo "                    </a>
                    ";
                        // line 104
                        if ((($this->getAttribute($this->getContext($context, "action"), "type") == "action") && (!twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "pageTitle"), false)) : (false)))))) {
                            echo "</p>";
                        }
                        // line 105
                        echo "                ";
                    } elseif ((($this->getAttribute($this->getContext($context, "action"), "type") != "search") && ($this->getAttribute($this->getContext($context, "action"), "type") != "event"))) {
                        // line 106
                        echo "                    <p>
                    <span style=\"margin-left: 9px;\">";
                        // line 107
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clientSideParameters"), "pageUrlNotDefined"), "html", null, true);
                        echo "</span>
                    </p>
                ";
                    }
                    // line 110
                    echo "            ";
                } else {
                    // line 111
                    echo "                ";
                    // line 112
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                    echo "\" />
                <strong>";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "goalName"), "html", null, true);
                    echo "</strong>
                ";
                    // line 114
                    if (($this->getAttribute($this->getContext($context, "action"), "revenue") > 0)) {
                        echo ", ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                        echo ":
                    <strong>";
                        // line 115
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenue"), $this->getAttribute($this->getContext($context, "clientSideParameters"), "idSite")));
                        echo "</strong>
                ";
                    }
                    // line 117
                    echo "            ";
                }
                // line 118
                echo "            </div>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/_actionsList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 118,  445 => 115,  439 => 114,  435 => 113,  430 => 112,  425 => 110,  419 => 107,  416 => 106,  413 => 105,  409 => 104,  406 => 103,  400 => 101,  396 => 99,  394 => 98,  384 => 97,  375 => 96,  369 => 94,  366 => 93,  361 => 92,  341 => 89,  334 => 88,  331 => 87,  325 => 85,  317 => 83,  314 => 82,  311 => 81,  305 => 79,  302 => 78,  300 => 77,  291 => 72,  280 => 69,  274 => 68,  271 => 67,  264 => 66,  258 => 65,  255 => 64,  242 => 62,  239 => 61,  231 => 58,  227 => 57,  225 => 56,  220 => 55,  214 => 53,  209 => 52,  201 => 50,  190 => 47,  180 => 45,  173 => 44,  170 => 43,  163 => 42,  156 => 41,  154 => 39,  148 => 38,  145 => 37,  131 => 31,  126 => 30,  124 => 29,  117 => 27,  107 => 24,  102 => 22,  92 => 19,  89 => 18,  86 => 17,  82 => 16,  76 => 14,  67 => 13,  64 => 12,  44 => 8,  38 => 6,  34 => 5,  29 => 4,  655 => 200,  637 => 197,  635 => 196,  632 => 195,  625 => 190,  623 => 189,  618 => 186,  612 => 185,  606 => 183,  600 => 181,  598 => 180,  594 => 179,  591 => 178,  585 => 175,  578 => 174,  576 => 173,  569 => 171,  566 => 170,  560 => 167,  557 => 166,  555 => 165,  552 => 164,  546 => 161,  543 => 160,  541 => 159,  537 => 157,  532 => 155,  529 => 154,  526 => 153,  521 => 151,  518 => 150,  515 => 149,  512 => 148,  506 => 147,  501 => 146,  496 => 144,  490 => 143,  487 => 142,  484 => 141,  481 => 140,  477 => 139,  474 => 138,  471 => 137,  465 => 134,  459 => 133,  455 => 132,  452 => 131,  450 => 117,  447 => 129,  443 => 128,  436 => 127,  431 => 125,  428 => 111,  426 => 123,  420 => 122,  417 => 121,  415 => 120,  405 => 119,  401 => 118,  393 => 117,  389 => 115,  387 => 114,  382 => 113,  380 => 112,  376 => 110,  372 => 108,  367 => 107,  364 => 106,  358 => 91,  352 => 101,  349 => 100,  343 => 99,  338 => 98,  333 => 97,  328 => 95,  324 => 94,  318 => 92,  307 => 91,  299 => 89,  297 => 88,  295 => 74,  293 => 86,  290 => 85,  287 => 84,  282 => 83,  278 => 82,  272 => 80,  269 => 79,  263 => 76,  256 => 74,  251 => 63,  249 => 72,  246 => 71,  244 => 70,  241 => 69,  238 => 68,  235 => 67,  232 => 66,  219 => 64,  215 => 63,  211 => 62,  208 => 61,  205 => 60,  202 => 59,  197 => 58,  193 => 48,  186 => 54,  183 => 46,  181 => 52,  177 => 51,  172 => 49,  166 => 48,  161 => 47,  158 => 46,  153 => 45,  146 => 43,  142 => 36,  137 => 40,  129 => 39,  114 => 35,  106 => 33,  104 => 23,  88 => 28,  71 => 27,  69 => 26,  61 => 11,  58 => 10,  52 => 9,  46 => 15,  40 => 12,  37 => 11,  35 => 10,  23 => 2,  139 => 41,  136 => 33,  133 => 35,  130 => 34,  127 => 33,  125 => 38,  122 => 37,  119 => 28,  115 => 26,  111 => 27,  105 => 25,  99 => 23,  97 => 21,  94 => 20,  91 => 29,  85 => 18,  83 => 17,  79 => 15,  72 => 14,  66 => 13,  57 => 11,  49 => 16,  45 => 9,  41 => 7,  30 => 8,  28 => 6,  26 => 3,  21 => 2,  19 => 1,);
    }
}
