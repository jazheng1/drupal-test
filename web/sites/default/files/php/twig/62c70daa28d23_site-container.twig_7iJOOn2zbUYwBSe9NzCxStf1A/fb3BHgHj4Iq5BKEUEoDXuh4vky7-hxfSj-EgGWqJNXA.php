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

/* @layouts/site-container/site-container.twig */
class __TwigTemplate_33c526af038ff712ccd2b80ad73f1172380cbc9b212563b4a45730010451ae8f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'site_content' => [$this, 'block_site_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "l-site-container", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        if ((($context["is_demo"] ?? null) &&  !($context["site_container_content"] ?? null))) {
            // line 7
            echo "  ";
            $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@global/gesso.macro.twig", "@layouts/site-container/site-container.twig", 7)->unwrap();
            // line 8
            echo "  ";
            $context["site_container_content"] = twig_call_macro($macros["macros"], "macro_sample_content", ["Site Container Layout Content"], 8, $context, $this->getSourceContext());
        }
        // line 10
        echo "
<div ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo ">
  ";
        // line 12
        $this->displayBlock('site_content', $context, $blocks);
        // line 15
        echo "</div>
";
    }

    // line 12
    public function block_site_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_container_content"] ?? null), 13, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@layouts/site-container/site-container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  69 => 12,  64 => 15,  62 => 12,  58 => 11,  55 => 10,  51 => 8,  48 => 7,  46 => 6,  43 => 5,  41 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@layouts/site-container/site-container.twig", "/var/www/html/web/themes/contrib/gesso/source/02-layouts/site-container/site-container.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6, "import" => 7, "block" => 12);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 13);
        static $functions = array("add_attributes" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'import', 'block'],
                ['trim', 'join', 'escape'],
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
