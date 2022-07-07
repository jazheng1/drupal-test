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

/* themes/contrib/gesso/templates/form/form-element.html.twig */
class __TwigTemplate_e3bc07a493d01e7fd509d4a80fcb5a6c0cf8ed7e2cf8f2f9389bf3f62ae27d42 extends \Twig\Template
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
        // line 47
        $context["class_type"] = (((($context["type"] ?? null) == "textfield")) ? ("text") : (($context["type"] ?? null)));
        // line 48
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => ("c-form-item--id-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 49
($context["name"] ?? null), 49, $this->source))), 1 => "js-form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["type"] ?? null), 51, $this->source))), 3 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["name"] ?? null), 52, $this->source)))], " "));
        // line 54
        echo "
";
        // line 55
        $this->loadTemplate("@components/form-item/form-item.twig", "themes/contrib/gesso/templates/form/form-element.html.twig", 55)->display(twig_array_merge($context, ["modifier_classes" =>         // line 56
($context["classes"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 56,  49 => 55,  46 => 54,  44 => 52,  43 => 51,  42 => 49,  41 => 48,  39 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/form/form-element.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 47, "include" => 55);
        static $filters = array("trim" => 53, "join" => 53, "clean_class" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['trim', 'join', 'clean_class'],
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
