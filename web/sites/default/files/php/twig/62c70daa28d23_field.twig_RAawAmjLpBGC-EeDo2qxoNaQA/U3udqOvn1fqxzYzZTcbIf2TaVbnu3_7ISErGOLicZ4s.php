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

/* @components/field/field.twig */
class __TwigTemplate_6dc403a4149d51a3c250e463cf188efb19e43f355420f3a057c382316d85e98e extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-field", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        if ( !($context["label_display"] ?? null)) {
            // line 7
            echo "  ";
            if (($context["is_inline"] ?? null)) {
                // line 8
                echo "    ";
                $context["label_display"] = "inline";
                // line 9
                echo "  ";
            }
        }
        // line 11
        echo "
";
        // line 12
        $context["title_classes"] = twig_trim_filter(twig_join_filter([0 => "c-field__label", 1 => (((        // line 14
($context["label_display"] ?? null) == "inline")) ? ("is-inline") : ("")), 2 => (((        // line 15
($context["label_display"] ?? null) == "visually_hidden")) ? ("u-visually-hidden") : (""))], " "));
        // line 17
        echo "
<";
        // line 18
        ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
        echo " ";
        echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]);
        echo ">
  ";
        // line 19
        if ( !($context["hide_label"] ?? null)) {
            // line 20
            echo "<";
            ((($context["label_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label_element"] ?? null), "html", null, true))) : (print ("h3")));
            echo " ";
            echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["title_classes"] ?? null)], "title_attributes");
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 20, $this->source), "html", null, true);
            echo "</";
            ((($context["label_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label_element"] ?? null), "html", null, true))) : (print ("h3")));
            echo ">";
        }
        // line 22
        if ( !($context["hide_content_wrapper"] ?? null)) {
            echo "<div class=\"c-field__content\">";
        }
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["field_items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            // line 25
            if (($context["show_separator"] ?? null)) {
                // line 26
                (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 26)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["separator"] ?? null), "html", null, true))) : (print ("")));
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        if ( !($context["hide_content_wrapper"] ?? null)) {
            echo "</div>";
        }
        // line 30
        echo "</";
        ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@components/field/field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 30,  126 => 29,  111 => 26,  109 => 25,  107 => 24,  90 => 23,  86 => 22,  75 => 20,  73 => 19,  67 => 18,  64 => 17,  62 => 15,  61 => 14,  60 => 12,  57 => 11,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/field/field.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/field/field.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6, "for" => 23);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 18);
        static $functions = array("add_attributes" => 18);

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
