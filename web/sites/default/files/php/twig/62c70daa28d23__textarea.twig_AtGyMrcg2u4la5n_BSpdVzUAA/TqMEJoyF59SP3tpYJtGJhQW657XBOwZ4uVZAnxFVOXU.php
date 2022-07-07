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

/* @components/form-item/form-item--textarea/_textarea.twig */
class __TwigTemplate_fcd19e1c4534dd91b79b9707fb4586985ccc70ed085ef9a1972aa5fe5f48166f extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-form-item__textarea", 1 => ((        // line 3
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
        if (($context["cols"] ?? null)) {
            // line 19
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 19, $this->source), ["cols" => ($this->sandbox->ensureToStringAllowed(            // line 20
($context["cols"] ?? null), 20, $this->source) . "")]);
        }
        // line 23
        echo "
";
        // line 25
        if (($context["rows"] ?? null)) {
            // line 26
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 26, $this->source), ["rows" => ($this->sandbox->ensureToStringAllowed(            // line 27
($context["rows"] ?? null), 27, $this->source) . "")]);
        }
        // line 30
        echo "
";
        // line 32
        if (($context["placeholder"] ?? null)) {
            // line 33
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 33, $this->source), ["placeholder" =>             // line 34
($context["placeholder"] ?? null)]);
        }
        // line 37
        echo "
";
        // line 39
        if ((($context["disabled"] ?? null) || ($context["is_disabled"] ?? null))) {
            // line 40
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 40, $this->source), ["disabled" => "disabled"]);
        }
        // line 44
        echo "
";
        // line 46
        if ((($context["required"] ?? null) || ($context["is_required"] ?? null))) {
            // line 47
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 47, $this->source), ["required" => "required", "aria-required" => "true"]);
        }
        // line 52
        echo "
";
        // line 54
        if (($context["described_by"] ?? null)) {
            // line 55
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 55, $this->source), ["aria-describedby" =>             // line 56
($context["described_by"] ?? null)]);
        }
        // line 59
        echo "
<textarea ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 60, $this->source)));
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 60, $this->source), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "@components/form-item/form-item--textarea/_textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 60,  116 => 59,  113 => 56,  111 => 55,  109 => 54,  106 => 52,  102 => 47,  100 => 46,  97 => 44,  93 => 40,  91 => 39,  88 => 37,  85 => 34,  83 => 33,  81 => 32,  78 => 30,  75 => 27,  73 => 26,  71 => 25,  68 => 23,  65 => 20,  63 => 19,  61 => 18,  58 => 16,  55 => 13,  53 => 12,  51 => 11,  48 => 9,  46 => 7,  45 => 6,  42 => 5,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/form-item/form-item--textarea/_textarea.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/form-item/form-item--textarea/_textarea.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11);
        static $filters = array("trim" => 4, "join" => 4, "merge" => 12, "escape" => 60);
        static $functions = array("add_attributes" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'join', 'merge', 'escape'],
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
