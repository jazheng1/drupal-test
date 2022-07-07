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

/* themes/contrib/gesso/templates/navigation/pager.html.twig */
class __TwigTemplate_de4f16c717e04b59900f2de7211d6233c4e65b8952c1afdea299345b32941850 extends \Twig\Template
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
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "  ";
            $this->loadTemplate("@components/pager/pager.twig", "themes/contrib/gesso/templates/navigation/pager.html.twig", 34)->display(twig_array_merge($context, ["heading" => t("Pagination"), "pager_items" =>             // line 36
($context["items"] ?? null), "current" =>             // line 37
($context["current"] ?? null), "ellipses" =>             // line 38
($context["ellipses"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 38,  44 => 37,  43 => 36,  41 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/navigation/pager.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "include" => 34);
        static $filters = array("t" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['t'],
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
