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

/* @components/view/views-view/views-view.twig */
class __TwigTemplate_729f422d2ea281dbdfd43c46e7dd295ffc960c8397aa18a1a6b51cf5072e17cd extends \Twig\Template
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
        // line 1
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-view", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
<";
        // line 6
        ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
        echo " ";
        echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]);
        echo ">
  ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 7, $this->source), "html", null, true);
        echo "
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "

  ";
        // line 11
        if (($context["header"] ?? null)) {
            // line 12
            echo "    <div class=\"c-view__header\">";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 13, $this->source), "html", null, true);
            // line 14
            echo "</div>
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        if (($context["exposed"] ?? null)) {
            // line 18
            echo "    <div class=\"c-view__exposed\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 19, $this->source), "html", null, true);
            // line 20
            echo "</div>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 23, $this->source), "html", null, true);
        echo "

  ";
        // line 25
        if (($context["rows"] ?? null)) {
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 26, $this->source), "html", null, true);
        } elseif (        // line 27
($context["empty"] ?? null)) {
            // line 28
            echo "    <div class=\"c-view__empty\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 29, $this->source), "html", null, true);
            // line 30
            echo "</div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 33, $this->source), "html", null, true);
        echo "
  ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 34, $this->source), "html", null, true);
        echo "
  ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 35, $this->source), "html", null, true);
        echo "

  ";
        // line 37
        if (($context["footer"] ?? null)) {
            // line 38
            echo "    <div class=\"c-view__footer\">";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 39, $this->source), "html", null, true);
            // line 40
            echo "</div>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 43, $this->source), "html", null, true);
        echo "
</";
        // line 44
        ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@components/view/views-view/views-view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  138 => 43,  135 => 42,  131 => 40,  129 => 39,  127 => 38,  125 => 37,  120 => 35,  116 => 34,  112 => 33,  109 => 32,  105 => 30,  103 => 29,  101 => 28,  99 => 27,  97 => 26,  95 => 25,  90 => 23,  87 => 22,  83 => 20,  81 => 19,  79 => 18,  77 => 17,  74 => 16,  70 => 14,  68 => 13,  66 => 12,  64 => 11,  59 => 9,  55 => 8,  51 => 7,  45 => 6,  42 => 5,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/view/views-view/views-view.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/view/views-view/views-view.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 6);
        static $functions = array("add_attributes" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
