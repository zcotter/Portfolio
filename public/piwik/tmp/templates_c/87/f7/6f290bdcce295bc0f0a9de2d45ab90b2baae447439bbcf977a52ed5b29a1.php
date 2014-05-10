<?php

/* @CoreHome/_topBarTopMenu.twig */
class __TwigTemplate_87f76f290bdcce295bc0f0a9de2d45ab90b2baae447439bbcf977a52ed5b29a1 extends Twig_Template
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
        echo "<div id=\"topLeftBar\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "topMenu"));
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
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 3
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "menu", true), "_html", array(), "any", true, true)) {
                // line 4
                echo "            ";
                echo $this->getAttribute($this->getContext($context, "menu"), "_html");
                echo "
        ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "module") == $this->getContext($context, "currentModule")) && (twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "action")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "action") == $this->getContext($context, "currentAction"))))) {
                // line 6
                echo "            <span class=\"topBarElem topBarElemActive\"><strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "label"))), "html", null, true);
                echo "</strong></span>";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " |";
                }
                // line 7
                echo "        ";
            } else {
                // line 8
                echo "            <span class=\"topBarElem\" ";
                if ($this->getAttribute($this->getContext($context, "menu", true), "_tooltip", array(), "any", true, true)) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "_tooltip"), "html", null, true);
                    echo "\"";
                }
                echo ">
                <a id=\"topmenu-";
                // line 9
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "module")), "html", null, true);
                echo "\" href=\"index.php";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "menu"), "_url"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "label"))), "html", null, true);
                echo "</a>
            </span>";
                // line 10
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " | ";
                }
                // line 11
                echo "        ";
            }
            // line 12
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
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topBarTopMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  67 => 9,  58 => 8,  90 => 24,  82 => 12,  74 => 20,  69 => 18,  39 => 3,  26 => 4,  63 => 9,  49 => 11,  33 => 6,  52 => 12,  48 => 6,  21 => 3,  28 => 5,  24 => 3,  144 => 38,  138 => 36,  131 => 33,  128 => 32,  121 => 31,  116 => 29,  104 => 26,  100 => 25,  96 => 13,  92 => 23,  87 => 22,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 8,  44 => 8,  35 => 6,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  139 => 46,  136 => 35,  132 => 37,  129 => 36,  126 => 35,  119 => 22,  117 => 21,  112 => 28,  110 => 17,  108 => 27,  102 => 13,  89 => 9,  83 => 7,  75 => 10,  72 => 19,  70 => 45,  66 => 17,  60 => 15,  55 => 7,  53 => 10,  50 => 9,  41 => 11,  38 => 29,  36 => 28,  32 => 26,  30 => 6,  22 => 2,  56 => 12,  54 => 13,  51 => 10,  47 => 10,  45 => 32,  42 => 4,  40 => 5,  37 => 10,  34 => 3,  29 => 5,);
    }
}
