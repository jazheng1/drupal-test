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

/* themes/contrib/gesso/templates/content/node--teaser.html.twig */
class __TwigTemplate_a97fa45e53a5724c6ddf1aeab99b1b78c976525243c99cd9489ee16bd6700022 extends \Twig\Template
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
        // line 69
        $context["classes"] = [0 => ((twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 70)) ? ("is-promoted") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 71)) ? ("is-sticky") : ("")), 2 => (( !twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 72)) ? ("is-unpublished") : (""))];
        // line 74
        echo "
";
        // line 75
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 75);
        // line 76
        echo "
";
        // line 77
        $this->loadTemplate("@components/teaser/teaser.twig", "themes/contrib/gesso/templates/content/node--teaser.html.twig", 77)->display(twig_array_merge($context, ["modifier_classes" => "", "title_modifier_classes" => "", "title_element" => "h2", "url" =>         // line 81
($context["url"] ?? null), "title" =>         // line 82
($context["label"] ?? null), "date" =>         // line 83
($context["date"] ?? null), "rdf_metadata" =>         // line 84
($context["metadata"] ?? null), "summary" =>         // line 85
($context["content"] ?? null)]));
        // line 87
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/content/node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 87,  57 => 85,  56 => 84,  55 => 83,  54 => 82,  53 => 81,  52 => 77,  49 => 76,  47 => 75,  44 => 74,  42 => 72,  41 => 71,  40 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/content/node--teaser.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/content/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69, "include" => 77);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                [],
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
