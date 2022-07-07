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

/* themes/contrib/gesso/templates/field/field.html.twig */
class __TwigTemplate_38a5cc6ba38cf626c2e7e1e19240a12fc3b4ba7be944294f9b194768d055b561 extends \Twig\Template
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
        // line 39
        $context["classes"] = [0 => "c-field", 1 => ("c-field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 41
($context["field_name"] ?? null), 41, $this->source))), 2 => ("c-field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 42
($context["field_type"] ?? null), 42, $this->source))), 3 => ("c-field--label-" . $this->sandbox->ensureToStringAllowed(        // line 43
($context["label_display"] ?? null), 43, $this->source))];
        // line 45
        echo "
";
        // line 46
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 46);
        // line 47
        echo "
";
        // line 48
        $this->loadTemplate("@components/field/field.twig", "themes/contrib/gesso/templates/field/field.html.twig", 48)->display(twig_array_merge($context, ["element" => "div", "label_display" =>         // line 50
($context["label_display"] ?? null), "hide_label" =>         // line 51
($context["label_hidden"] ?? null), "label_element" => "div", "label" =>         // line 53
($context["label"] ?? null), "hide_content_wrapper" => false, "show_separator" => true, "separator" => ", ", "field_items" =>         // line 57
($context["items"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/field/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 57,  55 => 53,  54 => 51,  53 => 50,  52 => 48,  49 => 47,  47 => 46,  44 => 45,  42 => 43,  41 => 42,  40 => 41,  39 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/field/field.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/field/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 39, "include" => 48);
        static $filters = array("clean_class" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class'],
                []
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
