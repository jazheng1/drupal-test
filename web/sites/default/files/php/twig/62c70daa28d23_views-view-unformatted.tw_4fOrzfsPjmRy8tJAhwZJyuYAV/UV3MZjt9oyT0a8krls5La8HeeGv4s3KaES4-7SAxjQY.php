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

/* @components/view/views-view-unformatted/views-view-unformatted.twig */
class __TwigTemplate_8f7be853c3efc94e09ec521655d9030773504dcfbf3971b7e419654d4db8d290 extends \Twig\Template
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
        $context["title_classes"] = twig_trim_filter(twig_join_filter([0 => ((        // line 2
($context["title_modifier_classes"] ?? null)) ? (($context["title_modifier_classes"] ?? null)) : (""))], " "));
        // line 4
        echo "
";
        // line 5
        $context["row_classes"] = twig_trim_filter(twig_join_filter([0 => ((        // line 6
($context["has_default_class"] ?? null)) ? ("c-view__row") : ("")), 1 => ((        // line 7
($context["row_modifier_classes"] ?? null)) ? (($context["row_modifier_classes"] ?? null)) : (""))], " "));
        // line 9
        echo "
";
        // line 10
        if (($context["has_default_class"] ?? null)) {
            // line 11
            echo "  ";
            $context["hide_row_wrapper"] = false;
        }
        // line 13
        echo "
";
        // line 14
        if (($context["title"] ?? null)) {
            // line 15
            echo "  <";
            ((($context["title_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true))) : (print ("h3")));
            echo " ";
            echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["title_classes"] ?? null)], "title_attributes");
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 15, $this->source), "html", null, true);
            echo "</";
            ((($context["title_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true))) : (print ("h3")));
            echo ">
";
        }
        // line 17
        echo "
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "  ";
            if (($context["hide_row_wrapper"] ?? null)) {
                // line 20
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
  ";
            } else {
                // line 22
                echo "    <";
                ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
                echo " ";
                echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["row_classes"] ?? null)], "row.attributes");
                echo ">";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                // line 24
                echo "</";
                ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
                echo ">
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@components/view/views-view-unformatted/views-view-unformatted.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  97 => 23,  91 => 22,  85 => 20,  82 => 19,  78 => 18,  75 => 17,  63 => 15,  61 => 14,  58 => 13,  54 => 11,  52 => 10,  49 => 9,  47 => 7,  46 => 6,  45 => 5,  42 => 4,  40 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/view/views-view-unformatted/views-view-unformatted.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/view/views-view-unformatted/views-view-unformatted.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 10, "for" => 18);
        static $filters = array("trim" => 3, "join" => 3, "escape" => 15);
        static $functions = array("add_attributes" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
