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

/* @components/breadcrumb/breadcrumb.twig */
class __TwigTemplate_26f576620eb89bf16f314ea1953244365d2c5137a372889b4ff4c7fd1f534271 extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-breadcrumb", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        $context["title_classes"] = twig_trim_filter(twig_join_filter([0 => "c-breadcrumb__title", 1 => ((        // line 8
($context["title_modifier_classes"] ?? null)) ? (($context["title_modifier_classes"] ?? null)) : ("")), 2 => ((        // line 9
($context["hide_title"] ?? null)) ? ("u-visually-hidden") : (""))], " "));
        // line 11
        echo "
";
        // line 12
        $context["breadcrumb_id"] = \Drupal\Component\Utility\Html::getUniqueId("breadcrumb-label");
        // line 13
        echo "
<nav ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["aria-labelledby" =>         // line 15
($context["breadcrumb_id"] ?? null), "class" =>         // line 16
($context["classes"] ?? null), "role" => "navigation"]));
        // line 18
        echo ">
  <div class=\"l-constrain\">
    <";
        // line 20
        ((($context["title_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true))) : (print ("h2")));
        echo "
      ";
        // line 21
        echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["id" =>         // line 23
($context["breadcrumb_id"] ?? null), "class" =>         // line 24
($context["title_classes"] ?? null)], "title_attributes");
        // line 27
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 27, $this->source), "Breadcrumb")) : ("Breadcrumb")), "html", null, true);
        echo "</";
        ((($context["title_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_element"] ?? null), "html", null, true))) : (print ("h2")));
        echo ">
    <ol class=\"c-breadcrumb__list\">
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "        <li class=\"c-breadcrumb__item\">
          ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 31)) {
                // line 32
                echo "            <a class=\"c-breadcrumb__link\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</a>
          ";
            } else {
                // line 34
                echo "            <span aria-current=\"page\">
              ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
            </span>
          ";
            }
            // line 38
            echo "        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </ol>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "@components/breadcrumb/breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  107 => 38,  101 => 35,  98 => 34,  90 => 32,  88 => 31,  85 => 30,  81 => 29,  73 => 27,  71 => 24,  70 => 23,  69 => 21,  65 => 20,  61 => 18,  59 => 16,  58 => 15,  57 => 14,  54 => 13,  52 => 12,  49 => 11,  47 => 9,  46 => 8,  45 => 6,  42 => 5,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/breadcrumb/breadcrumb.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/breadcrumb/breadcrumb.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 29, "if" => 31);
        static $filters = array("trim" => 4, "join" => 4, "unique_id" => 12, "escape" => 20, "default" => 27);
        static $functions = array("add_attributes" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['trim', 'join', 'unique_id', 'escape', 'default'],
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
