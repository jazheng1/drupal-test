<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @components/form-item/_input.twig */
class __TwigTemplate_a44df4b0ddd5b11049653eb15b2a70dbf29afafafb1663d706ad08ee8e15fdc7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => ("c-form-item__" . $this->sandbox->ensureToStringAllowed(        // line 2
($context["type"] ?? null), 2, $this->source)), 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        $context["attributes_to_add"] = ["class" =>         // line 7
($context["classes"] ?? null)];
        // line 9
        echo "
";
        // line 11
        if (($context["id"] ?? null)) {
            // line 12
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 12, $this->source), ["id" =>             // line 13
($context["id"] ?? null)]);
        }
        // line 16
        echo "
";
        // line 18
        if (($context["name"] ?? null)) {
            // line 19
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 19, $this->source), ["name" =>             // line 20
($context["name"] ?? null)]);
        }
        // line 23
        echo "
";
        // line 25
        if (($context["type"] ?? null)) {
            // line 26
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 26, $this->source), ["type" =>             // line 27
($context["type"] ?? null)]);
        }
        // line 30
        echo "
";
        // line 32
        if (($context["size"] ?? null)) {
            // line 33
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 33, $this->source), ["size" => ($this->sandbox->ensureToStringAllowed(            // line 34
($context["size"] ?? null), 34, $this->source) . "")]);
        }
        // line 37
        echo "
";
        // line 39
        if ( !twig_test_empty(($context["max_length"] ?? null))) {
            // line 40
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 40, $this->source), ["maxlength" => ($this->sandbox->ensureToStringAllowed(            // line 41
($context["max_length"] ?? null), 41, $this->source) . "")]);
        }
        // line 44
        echo "
";
        // line 46
        if (($context["placeholder"] ?? null)) {
            // line 47
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 47, $this->source), ["placeholder" =>             // line 48
($context["placeholder"] ?? null)]);
        }
        // line 51
        echo "
";
        // line 53
        if (($context["step"] ?? null)) {
            // line 54
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 54, $this->source), ["step" => ($this->sandbox->ensureToStringAllowed(            // line 55
($context["step"] ?? null), 55, $this->source) . "")]);
        }
        // line 58
        echo "
";
        // line 60
        if (($context["min"] ?? null)) {
            // line 61
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 61, $this->source), ["min" => ($this->sandbox->ensureToStringAllowed(            // line 62
($context["min"] ?? null), 62, $this->source) . "")]);
        }
        // line 65
        echo "
";
        // line 67
        if (($context["max"] ?? null)) {
            // line 68
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 68, $this->source), ["max" => ($this->sandbox->ensureToStringAllowed(            // line 69
($context["max"] ?? null), 69, $this->source) . "")]);
        }
        // line 72
        echo "
";
        // line 74
        if (($context["accept"] ?? null)) {
            // line 75
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 75, $this->source), ["accept" =>             // line 76
($context["accept"] ?? null)]);
        }
        // line 79
        echo "
";
        // line 81
        if ((($context["disabled"] ?? null) || ($context["is_disabled"] ?? null))) {
            // line 82
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 82, $this->source), ["disabled" => "disabled"]);
        }
        // line 86
        echo "
";
        // line 88
        if ((($context["required"] ?? null) || ($context["is_required"] ?? null))) {
            // line 89
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 89, $this->source), ["required" => "required", "aria-required" => "true"]);
        }
        // line 94
        echo "
";
        // line 96
        if (($context["is_checked"] ?? null)) {
            // line 97
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 97, $this->source), ["checked" => "checked"]);
        }
        // line 101
        echo "
";
        // line 103
        if (($context["described_by"] ?? null)) {
            // line 104
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 104, $this->source), ["aria-describedby" =>             // line 105
($context["described_by"] ?? null)]);
        }
        // line 108
        echo "
<input ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 109, $this->source)));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@components/form-item/_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 109,  186 => 108,  183 => 105,  181 => 104,  179 => 103,  176 => 101,  172 => 97,  170 => 96,  167 => 94,  163 => 89,  161 => 88,  158 => 86,  154 => 82,  152 => 81,  149 => 79,  146 => 76,  144 => 75,  142 => 74,  139 => 72,  136 => 69,  134 => 68,  132 => 67,  129 => 65,  126 => 62,  124 => 61,  122 => 60,  119 => 58,  116 => 55,  114 => 54,  112 => 53,  109 => 51,  106 => 48,  104 => 47,  102 => 46,  99 => 44,  96 => 41,  94 => 40,  92 => 39,  89 => 37,  86 => 34,  84 => 33,  82 => 32,  79 => 30,  76 => 27,  74 => 26,  72 => 25,  69 => 23,  66 => 20,  64 => 19,  62 => 18,  59 => 16,  56 => 13,  54 => 12,  52 => 11,  49 => 9,  47 => 7,  46 => 6,  43 => 5,  41 => 3,  40 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/form-item/_input.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/form-item/_input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11);
        static $filters = array("trim" => 4, "join" => 4, "merge" => 12);
        static $functions = array("add_attributes" => 109);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'join', 'merge'],
                ['add_attributes']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
