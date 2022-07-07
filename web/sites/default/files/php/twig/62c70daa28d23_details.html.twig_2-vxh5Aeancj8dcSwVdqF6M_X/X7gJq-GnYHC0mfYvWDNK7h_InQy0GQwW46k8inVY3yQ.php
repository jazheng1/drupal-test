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

/* themes/contrib/gesso/templates/form/details.html.twig */
class __TwigTemplate_d5962ce7cd2bd04819e995f434b9ff9cbab2ccd51ed205bbf8be410bf6e8a62c extends \Twig\Template
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
        // line 18
        ob_start(function () { return ''; });
        // line 19
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 20
            echo "    <div>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 20, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 23, $this->source), "html", null, true);
        echo "
  ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 24, $this->source), "html", null, true);
        echo "
";
        $context["details_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
";
        // line 27
        $this->loadTemplate("@components/details/details.twig", "themes/contrib/gesso/templates/form/details.html.twig", 27)->display(twig_array_merge($context, ["attributes" =>         // line 28
($context["attributes"] ?? null), "required" =>         // line 29
($context["required"] ?? null), "details_summary" => ((        // line 30
($context["title"] ?? null)) ? (($context["title"] ?? null)) : (t("Details"))), "details_description" =>         // line 31
($context["description"] ?? null), "details_content" =>         // line 32
($context["details_content"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  69 => 31,  68 => 30,  67 => 29,  66 => 28,  65 => 27,  62 => 26,  57 => 24,  53 => 23,  50 => 22,  44 => 20,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/form/details.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 19, "include" => 27);
        static $filters = array("escape" => 20, "t" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['escape', 't'],
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
