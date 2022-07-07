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

/* @components/form-item/form-item.twig */
class __TwigTemplate_6976e8119fd899fae444dbc59d98f17e56509b37ea84422d1b280e0b4a19a67f extends \Twig\Template
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
        $context["class_type"] = (((($context["type"] ?? null) == "textfield")) ? ("text") : (($context["type"] ?? null)));
        // line 2
        echo "
";
        // line 3
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-form-item", 1 => ("c-form-item--" . $this->sandbox->ensureToStringAllowed(        // line 5
($context["class_type"] ?? null), 5, $this->source)), 2 => ((!twig_in_filter(        // line 6
($context["label_display"] ?? null), [0 => "after", 1 => "before"])) ? ("has-no-label") : ("")), 3 => (((!twig_in_filter(        // line 7
($context["label_display"] ?? null), [0 => "invisible"]) && twig_in_filter(($context["label_display"] ?? null), [0 => "after"]))) ? ("has-visible-label-after") : ("")), 4 => ((        // line 8
($context["errors"] ?? null)) ? ("has-error") : ("")), 5 => ((((        // line 9
($context["disabled"] ?? null) == "disabled") || ($context["is_disabled"] ?? null))) ? ("is-disabled") : ("")), 6 => ((((        // line 10
($context["required"] ?? null) == "required") || ($context["is_required"] ?? null))) ? ("is-required") : ("")), 7 => ((        // line 11
($context["is_full_width"] ?? null)) ? ("is-full-width") : ("")), 8 => ((        // line 12
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 14
        echo "
";
        // line 15
        $context["description_classes"] = twig_trim_filter(twig_join_filter([0 => "c-form-item__description", 1 => (((        // line 17
($context["description_display"] ?? null) == "invisible")) ? ("u-visually-hidden") : (""))], " "));
        // line 19
        echo "
  ";
        // line 20
        $context["description_attributes_to_add"] = ["class" =>         // line 21
($context["description_classes"] ?? null)];
        // line 23
        echo "
  ";
        // line 24
        if (($context["id"] ?? null)) {
            // line 25
            echo "    ";
            $context["description_attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["description_attributes_to_add"] ?? null), 25, $this->source), ["id" => ($this->sandbox->ensureToStringAllowed(            // line 26
($context["id"] ?? null), 26, $this->source) . "-description")]);
            // line 28
            echo "  ";
        }
        // line 29
        echo "
<div ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo ">
  ";
        // line 31
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 32
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 32, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if ((($context["prefix"] ?? null) || ($context["suffix"] ?? null))) {
            // line 36
            echo "  <div class=\"c-form-item__element\">
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (($context["prefix"] ?? null)) {
            // line 40
            echo "      <span class=\"c-form-item__prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 40, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 43))) {
            // line 44
            echo "      <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["description_attributes_to_add"] ?? null), 44, $this->source), "description.attributes"));
            echo ">
        ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 49, $this->source), "html", null, true);
        echo "

    ";
        // line 51
        if (($context["suffix"] ?? null)) {
            // line 52
            echo "      <span class=\"c-form-item__suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 52, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if ((($context["prefix"] ?? null) || ($context["suffix"] ?? null))) {
            // line 56
            echo "  </div>
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        if ((($context["label_display"] ?? null) == "after")) {
            // line 60
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 60, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 62
        echo "
  ";
        // line 63
        if (($context["errors"] ?? null)) {
            // line 64
            echo "    <div class=\"c-form-item__error-message\">
      ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 65, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 69))) {
            // line 70
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["description_attributes_to_add"] ?? null), 70, $this->source), "description.attributes"));
            echo ">
      ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@components/form-item/form-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 74,  189 => 71,  184 => 70,  182 => 69,  179 => 68,  173 => 65,  170 => 64,  168 => 63,  165 => 62,  159 => 60,  157 => 59,  154 => 58,  150 => 56,  148 => 55,  145 => 54,  139 => 52,  137 => 51,  132 => 49,  129 => 48,  123 => 45,  118 => 44,  116 => 43,  113 => 42,  107 => 40,  105 => 39,  102 => 38,  98 => 36,  96 => 35,  93 => 34,  87 => 32,  85 => 31,  81 => 30,  78 => 29,  75 => 28,  73 => 26,  71 => 25,  69 => 24,  66 => 23,  64 => 21,  63 => 20,  60 => 19,  58 => 17,  57 => 15,  54 => 14,  52 => 12,  51 => 11,  50 => 10,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/form-item/form-item.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/form-item/form-item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 24);
        static $filters = array("trim" => 13, "join" => 13, "merge" => 25, "escape" => 32);
        static $functions = array("add_attributes" => 30);

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
