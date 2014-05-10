<?php

/* @Live/getVisitList.twig */
class __TwigTemplate_c27687df31fc8f58a811bd9ce5da5e0164ae7f039444ac02cb0546cde16541a3 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visits"), "getRows", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitInfo"]) {
            // line 2
            echo "<li>
    <div>
        <div class=\"visitor-profile-visit-title-row\"><h2 class=\"visitor-profile-visit-title\" data-idvisit=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "idVisit"), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ClickToViewMoreAboutVisit")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visit")), "html", null, true);
            echo " #";
            echo twig_escape_filter($this->env, $this->getContext($context, "startCounter"), "html", null, true);
            echo "</h2>";
            if (($this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "visitDuration"), "method") != 0)) {
                echo "<span>&nbsp;- (";
                echo $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "visitDurationPretty"), "method");
                echo ")</span>";
            }
            echo "<span class=\"visitor-profile-date\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "serverDateTimePrettyFirstAction"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "serverDatePrettyFirstAction"), "method"), "html", null, true);
            echo "</span></div>
        <ol class=\"visitor-profile-actions\">
            ";
            // line 6
            $this->env->loadTemplate("@Live/_actionsList.twig")->display(array_merge($context, array("actionDetails" => $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "actionDetails"), "method"), "clientSideParameters" => array("filterEcommerce" => false, "idSite" => $this->getContext($context, "idSite"), "pageUrlNotDefined" => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnPageURL"))))), "overrideLinkStyle" => false)));
            // line 13
            echo "        </ol>
    </div>
</li>
";
            // line 16
            $context["startCounter"] = ($this->getContext($context, "startCounter") + 1);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/getVisitList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  63 => 13,  36 => 2,  274 => 4,  271 => 3,  256 => 1,  251 => 62,  246 => 59,  226 => 56,  223 => 55,  206 => 54,  203 => 53,  201 => 52,  198 => 51,  152 => 42,  140 => 39,  136 => 38,  133 => 37,  131 => 36,  129 => 35,  123 => 34,  115 => 31,  107 => 28,  99 => 27,  88 => 22,  84 => 21,  79 => 20,  65 => 19,  45 => 15,  40 => 4,  28 => 9,  23 => 8,  21 => 7,  462 => 142,  456 => 140,  450 => 138,  448 => 137,  443 => 134,  441 => 133,  434 => 129,  424 => 122,  414 => 120,  397 => 118,  390 => 115,  387 => 112,  384 => 110,  382 => 109,  380 => 108,  377 => 107,  374 => 105,  371 => 103,  368 => 101,  366 => 100,  363 => 99,  361 => 98,  358 => 97,  350 => 94,  347 => 92,  345 => 91,  343 => 90,  326 => 88,  322 => 86,  317 => 83,  304 => 79,  300 => 78,  294 => 77,  289 => 75,  286 => 74,  284 => 73,  272 => 70,  268 => 2,  262 => 68,  252 => 66,  249 => 65,  247 => 64,  243 => 61,  237 => 58,  232 => 58,  229 => 56,  225 => 54,  184 => 50,  181 => 52,  178 => 48,  175 => 47,  171 => 48,  166 => 47,  161 => 45,  158 => 46,  155 => 43,  153 => 42,  148 => 41,  128 => 39,  126 => 38,  109 => 37,  106 => 36,  98 => 35,  94 => 34,  89 => 32,  82 => 27,  80 => 26,  76 => 24,  70 => 23,  66 => 22,  61 => 6,  55 => 20,  46 => 14,  42 => 13,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
