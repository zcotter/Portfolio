<?php

/* @CoreHome/_notifications.twig */
class __TwigTemplate_c6b8220b4f7d4e3269c6bb5486db23a5d2cc62fd5a51fbc5aa4dcfc07356e726 extends Twig_Template
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
        echo "<div id=\"notificationContainer\">
    ";
        // line 2
        if (twig_length_filter($this->env, $this->getContext($context, "notifications"))) {
            // line 3
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notifications"));
            foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                // line 4
                echo "
            ";
                // line 5
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getAttribute($this->getContext($context, "n"), "message"), array("id" => $this->getContext($context, "notificationId"), "type" => $this->getAttribute($this->getContext($context, "n"), "type"), "title" => $this->getAttribute($this->getContext($context, "n"), "title"), "noclear" => $this->getAttribute($this->getContext($context, "n"), "hasNoClear"), "context" => $this->getAttribute($this->getContext($context, "n"), "context"), "raw" => $this->getAttribute($this->getContext($context, "n"), "raw")), false));
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 17,  79 => 11,  67 => 9,  58 => 8,  90 => 24,  82 => 12,  74 => 20,  69 => 8,  39 => 8,  26 => 4,  63 => 6,  49 => 12,  33 => 6,  52 => 5,  48 => 10,  21 => 2,  28 => 5,  24 => 3,  144 => 38,  138 => 36,  131 => 33,  128 => 32,  121 => 31,  116 => 29,  104 => 26,  100 => 25,  96 => 13,  92 => 16,  87 => 22,  85 => 21,  80 => 20,  77 => 11,  71 => 14,  68 => 13,  62 => 12,  59 => 16,  44 => 9,  35 => 6,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  139 => 46,  136 => 35,  132 => 37,  129 => 36,  126 => 35,  119 => 22,  117 => 21,  112 => 28,  110 => 17,  108 => 27,  102 => 13,  89 => 9,  83 => 7,  75 => 10,  72 => 19,  70 => 45,  66 => 17,  60 => 15,  55 => 15,  53 => 10,  50 => 9,  41 => 8,  38 => 2,  36 => 7,  32 => 5,  30 => 6,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 9,  40 => 5,  37 => 10,  34 => 3,  29 => 4,);
    }
}
