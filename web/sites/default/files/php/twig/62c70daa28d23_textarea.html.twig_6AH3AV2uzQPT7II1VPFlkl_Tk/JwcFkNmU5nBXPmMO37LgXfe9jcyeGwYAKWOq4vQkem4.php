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

/* themes/contrib/gesso/templates/form/textarea.html.twig */
class __TwigTemplate_8835843073d3b162d800b4c22979545139ede88ccbf40a2953788694f0816add extends \Twig\Template
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
        // line 16
        $context["classes"] = [0 => ((        // line 17
($context["resizable"] ?? null)) ? ("is-resizable") : (""))];
        // line 19
        echo "
";
        // line 20
        $context["remove_classes"] = [0 => "form-textarea", 1 => "required"];
        // line 24
        echo "
";
        // line 25
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["remove_classes"] ?? null)], "method", false, false, true, 25), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 25);
        // line 26
        echo "
";
        // line 27
        $this->loadTemplate("@components/form-item/form-item--textarea/_textarea.twig", "themes/contrib/gesso/templates/form/textarea.html.twig", 27)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/form/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 27,  52 => 26,  50 => 25,  47 => 24,  45 => 20,  42 => 19,  40 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/form/textarea.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/form/textarea.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "include" => 27);
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
