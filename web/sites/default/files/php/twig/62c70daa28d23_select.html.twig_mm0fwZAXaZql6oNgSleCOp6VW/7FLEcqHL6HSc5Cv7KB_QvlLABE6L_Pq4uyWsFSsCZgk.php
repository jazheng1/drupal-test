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

/* themes/contrib/gesso/templates/form/select.html.twig */
class __TwigTemplate_e4f67a190f0718c6159694b24de21a0b16f07c89663a7bacab334de874bbe1e3 extends \Twig\Template
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
        $context["remove_classes"] = [0 => "form-select", 1 => "required"];
        // line 17
        echo "
";
        // line 18
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["remove_classes"] ?? null)], "method", false, false, true, 18);
        // line 19
        echo "
";
        // line 20
        $this->loadTemplate("@components/form-item/form-item--select/_select.twig", "themes/contrib/gesso/templates/form/select.html.twig", 20)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/form/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 19,  44 => 18,  41 => 17,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/form/select.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/form/select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 20);
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
