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

/* @layouts/nav/nav.twig */
class __TwigTemplate_064d06c165f6097de212c2fb922243839bd4b1837a8fb9453420afeff88acaf7 extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "l-nav", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        $context["title_classes"] = twig_trim_filter(twig_join_filter([0 => ((        // line 7
($context["title_modifier_classes"] ?? null)) ? (($context["title_modifier_classes"] ?? null)) : ("")), 1 => ((        // line 8
($context["hide_title"] ?? null)) ? ("u-visually-hidden") : (""))], " "));
        // line 10
        echo "
";
        // line 11
        $context["nav_id"] = \Drupal\Component\Utility\Html::getUniqueId($this->sandbox->ensureToStringAllowed(($context["nav_id"] ?? null), 11, $this->source));
        // line 12
        echo "
";
        // line 13
        if ((($context["is_demo"] ?? null) &&  !($context["nav_content"] ?? null))) {
            // line 14
            echo "  ";
            $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@global/gesso.macro.twig", "@layouts/nav/nav.twig", 14)->unwrap();
            // line 15
            echo "  ";
            $context["nav_content"] = twig_call_macro($macros["macros"], "macro_sample_content", ["Nav Layout Content"], 15, $context, $this->getSourceContext());
        }
        // line 17
        echo "
<nav ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" =>         // line 19
($context["classes"] ?? null), "role" => "navigation", "aria-labelledby" =>         // line 21
($context["nav_id"] ?? null)]));
        // line 22
        echo ">
  <";
        // line 23
        ((($context["title_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true))) : (print ("h2")));
        echo "
    ";
        // line 24
        echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["id" =>         // line 26
($context["nav_id"] ?? null), "class" =>         // line 27
($context["title_classes"] ?? null)], "title_attributes");
        // line 30
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 30, $this->source), "html", null, true);
        echo "</";
        ((($context["title_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true))) : (print ("h2")));
        echo ">
  ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "</nav>
";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_content"] ?? null), 32, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@layouts/nav/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  99 => 31,  94 => 34,  92 => 31,  85 => 30,  83 => 27,  82 => 26,  81 => 24,  77 => 23,  74 => 22,  72 => 21,  71 => 19,  70 => 18,  67 => 17,  63 => 15,  60 => 14,  58 => 13,  55 => 12,  53 => 11,  50 => 10,  48 => 8,  47 => 7,  46 => 6,  43 => 5,  41 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@layouts/nav/nav.twig", "/var/www/html/web/themes/contrib/gesso/source/02-layouts/nav/nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 13, "import" => 14, "block" => 31);
        static $filters = array("trim" => 4, "join" => 4, "unique_id" => 11, "escape" => 23);
        static $functions = array("add_attributes" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'import', 'block'],
                ['trim', 'join', 'unique_id', 'escape'],
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
