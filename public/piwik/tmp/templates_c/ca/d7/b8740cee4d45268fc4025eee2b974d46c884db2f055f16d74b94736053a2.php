<?php

/* @CoreHome/_menu.twig */
class __TwigTemplate_cad7b8740cee4d45268fc4025eee2b974d46c884db2f055f16d74b94736053a2 extends Twig_Template
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
        echo "<div class=\"Menu--dashboard\">
    <ul class=\"Menu-tabList\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menu"));
        foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
            // line 4
            echo "            <li id=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "level2"), "_url"))), "html", null, true);
            echo "\">
                <a href=\"#";
            // line 5
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "level2"), "_url"))), 1), "html", null, true);
            echo "\"
                   onclick=\"return piwikMenu.onItemClick(this);\">";
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "level1"))), "html", null, true);
            echo "</a>
                <ul>
                ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "level2"));
            foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                // line 9
                echo "                    ";
                if ((twig_slice($this->env, $this->getContext($context, "name"), 0, 1) != "_")) {
                    // line 10
                    echo "                        <li>
                            <a href='#";
                    // line 11
                    echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "urlParameters"), "_url"))), 1), "html", null, true);
                    echo "'
                               onclick='return piwikMenu.onItemClick(this);'>
                                ";
                    // line 13
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "name"))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </ul>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</div>
<div class=\"nav_sep\"></div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  67 => 9,  58 => 8,  90 => 24,  82 => 12,  74 => 20,  69 => 18,  39 => 3,  26 => 2,  63 => 17,  49 => 11,  33 => 6,  52 => 12,  48 => 10,  21 => 3,  28 => 5,  24 => 3,  144 => 38,  138 => 36,  131 => 33,  128 => 32,  121 => 31,  116 => 29,  104 => 26,  100 => 25,  96 => 13,  92 => 23,  87 => 22,  85 => 21,  80 => 20,  77 => 21,  71 => 14,  68 => 13,  62 => 12,  59 => 8,  44 => 8,  35 => 6,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  139 => 46,  136 => 35,  132 => 37,  129 => 36,  126 => 35,  119 => 22,  117 => 21,  112 => 28,  110 => 17,  108 => 27,  102 => 13,  89 => 9,  83 => 7,  75 => 10,  72 => 19,  70 => 45,  66 => 17,  60 => 15,  55 => 7,  53 => 10,  50 => 9,  41 => 8,  38 => 29,  36 => 6,  32 => 5,  30 => 6,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 4,  40 => 5,  37 => 10,  34 => 3,  29 => 5,);
    }
}
