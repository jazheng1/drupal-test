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

/* @layouts/region/region.twig */
class __TwigTemplate_4f7142d38432cc537da02af476cd0a03a3c3099414f6dc275cc9821df40634e5 extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => ("l-" . ((        // line 2
($context["region_name"] ?? null)) ? (($context["region_name"] ?? null)) : ("region"))), 1 => ((        // line 3
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
        if ((($context["is_demo"] ?? null) &&  !($context["region_content"] ?? null))) {
            // line 12
            echo "  ";
            $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@global/gesso.macro.twig", "@layouts/region/region.twig", 12)->unwrap();
            // line 13
            echo "  ";
            $context["region_content"] = twig_call_macro($macros["macros"], "macro_sample_content", ["Region Layout Content"], 13, $context, $this->getSourceContext());
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region_content"] ?? null), 21, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@layouts/region/region.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  92 => 20,  87 => 26,  83 => 24,  80 => 23,  77 => 20,  71 => 18,  69 => 17,  65 => 16,  62 => 15,  58 => 13,  55 => 12,  53 => 11,  50 => 10,  48 => 8,  47 => 6,  44 => 5,  42 => 3,  41 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@layouts/region/region.twig", "/var/www/html/web/themes/contrib/gesso/source/02-layouts/region/region.twig");
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
