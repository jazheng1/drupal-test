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

/* themes/contrib/gesso/templates/form/input.html.twig */
class __TwigTemplate_a6f83e1c8e604ccf1f3299364da6bf4bddd637bd2caefd5d5617279278c0d31d extends \Twig\Template
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
        // line 13
        $context["classes"] = [0 => ((        // line 14
($context["dropbutton"] ?? null)) ? ("c-dropbutton__button") : ("")), 1 => ((        // line 15
($context["is_required"] ?? null)) ? ("is-required") : (""))];
        // line 17
        echo "
";
        // line 18
        $context["remove_classes"] = [0 => "field-add-more-submit", 1 => ("form-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 20
($context["type"] ?? null), 20, $this->source))), 2 => "required"];
        // line 23
        echo "
";
        // line 24
        $this->loadTemplate("@components/form-item/_input.twig", "themes/contrib/gesso/templates/form/input.html.twig", 24)->display(twig_array_merge($context, ["modifier_classes" => twig_trim_filter(twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["attributes"] ?? null), "removeClass", [0 => ($context["remove_classes"] ?? null)], "method", false, false, true, 25), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 25), "class", [], "any", false, false, true, 25), " "))]));
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 27, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 27,  53 => 25,  52 => 24,  49 => 23,  47 => 20,  46 => 18,  43 => 17,  41 => 15,  40 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/form/input.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 24);
        static $filters = array("clean_class" => 20, "trim" => 25, "join" => 25, "escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'trim', 'join', 'escape'],
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
