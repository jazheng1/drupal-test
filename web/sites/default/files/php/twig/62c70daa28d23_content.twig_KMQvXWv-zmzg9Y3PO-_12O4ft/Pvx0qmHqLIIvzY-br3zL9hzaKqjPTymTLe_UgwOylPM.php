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

/* @layouts/content/content.twig */
class __TwigTemplate_920e0b6406c812faaf7885d39e218199b91d5f185b3813bf8779897c9d1223fc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "l-content", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        $context["constrain_classes"] = twig_trim_filter(twig_join_filter([0 => "l-constrain", 1 => ((        // line 8
($context["constrain_modifier_classes"] ?? null)) ? (($context["constrain_modifier_classes"] ?? null)) : (""))], " "));
        // line 10
        echo "
";
        // line 11
        if ((($context["is_demo"] ?? null) &&  !($context["content_content"] ?? null))) {
            // line 12
            echo "  ";
            $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@global/gesso.macro.twig", "@layouts/content/content.twig", 12)->unwrap();
            // line 13
            echo "  ";
            $context["content_content"] = twig_call_macro($macros["macros"], "macro_sample_content", ["Content Layout Content"], 13, $context, $this->getSourceContext());
        }
        // line 15
        echo "
<div ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo ">
  ";
        // line 17
        if (($context["has_constrain"] ?? null)) {
            // line 18
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["constrain_classes"] ?? null)]));
            echo ">
  ";
        }
        // line 20
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "  ";
        if (($context["has_constrain"] ?? null)) {
            // line 24
            echo "    </div>
  ";
        }
        // line 26
        echo "</div>
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_content"] ?? null), 21, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@layouts/content/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  91 => 20,  86 => 26,  82 => 24,  79 => 23,  76 => 20,  70 => 18,  68 => 17,  64 => 16,  61 => 15,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  47 => 8,  46 => 6,  43 => 5,  41 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@layouts/content/content.twig", "/var/www/html/web/themes/contrib/gesso/source/02-layouts/content/content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11, "import" => 12, "block" => 20);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 21);
        static $functions = array("add_attributes" => 16);

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
