<?php

/* @Installation/_integrityDetails.twig */
class __TwigTemplate_d644eef5e9153d2d66d1d606a6edfd0b5aebbf7f5c67293e08b48c6c8f4f2df4 extends Twig_Template
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
        if ((!array_key_exists("warningMessages", $context))) {
            // line 2
            echo "    ";
            $context["warningMessages"] = $this->getAttribute($this->getContext($context, "infos"), "integrityErrorMessages");
        }
        // line 4
        echo "<div id=\"integrity-results\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SystemCheckFileIntegrity")), "html", null, true);
        echo "\" style=\"display:none; font-size: 62.5%;\">
    <table>
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "warningMessages"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 7
            echo "            <tr>
                <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "msg"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </table>
</div>
<script type=\"text/javascript\">
    <!--
    \$(function () {
        \$(\"#integrity-results\").dialog({
            modal: true,
            autoOpen: false,
            width: 600,
            buttons: {
                Ok: function () {
                    \$(this).dialog('close');
                }
            }
        });
    });
    \$('#more-results').click(function () {
        \$('#integrity-results').dialog('open');
    }).hover(function () {
        \$(this).addClass(\"ui-state-hover\");
    },
    function () {
        \$(this).removeClass(\"ui-state-hover\");
    }).mousedown(function () {
        \$(this).addClass(\"ui-state-active\");
    }).mouseup(function () {
        \$(this).removeClass(\"ui-state-active\");
    });
    //-->
</script>
";
    }

    public function getTemplateName()
    {
        return "@Installation/_integrityDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  35 => 7,  25 => 4,  21 => 2,  19 => 1,  276 => 98,  274 => 97,  271 => 96,  264 => 92,  260 => 90,  254 => 88,  251 => 87,  247 => 85,  241 => 83,  235 => 81,  233 => 80,  228 => 77,  226 => 76,  223 => 75,  219 => 73,  213 => 71,  211 => 70,  206 => 69,  204 => 68,  201 => 67,  196 => 65,  192 => 64,  184 => 58,  174 => 55,  170 => 54,  166 => 53,  158 => 48,  154 => 47,  150 => 46,  146 => 45,  143 => 44,  137 => 41,  133 => 40,  130 => 39,  128 => 38,  123 => 37,  117 => 35,  114 => 34,  112 => 33,  109 => 32,  103 => 30,  101 => 29,  97 => 28,  92 => 27,  89 => 26,  82 => 22,  77 => 20,  73 => 18,  64 => 16,  60 => 15,  56 => 14,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  38 => 8,  33 => 5,  31 => 6,  28 => 3,);
    }
}
