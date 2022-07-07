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

/* @components/button-group/button-group.twig */
class __TwigTemplate_b7ba0674b66bf9c961dc7eacc479ffc3c5a2d414645322c798fe6540c18794f0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'link' => [$this, 'block_link'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-button-group", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        if (($context["buttons"] ?? null)) {
            // line 7
            echo "  <";
            ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
            echo "
    class=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 8, $this->source), "html", null, true);
            echo "\"";
            // line 9
            if ((($context["element"] ?? null) != "nav")) {
                echo " role=\"group\"";
            }
            // line 10
            echo "    aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 10, $this->source), "html", null, true);
            // line 11
            echo "\">
    <ul class=\"c-button-group__list\">
      ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 14
                echo "        ";
                $context["button_classes"] = twig_trim_filter(twig_join_filter([0 => "c-button-group__link", 1 => "c-button", 2 => ((                // line 17
($context["button_modifier_classes"] ?? null)) ? (($context["button_modifier_classes"] ?? null)) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                 // line 18
$context["button"], "active", [], "any", false, false, true, 18)) ? ("is-active") : (""))], " "));
                // line 20
                echo "
        <li class=\"c-button-group__item";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["button"], "active", [], "any", false, false, true, 21)) {
                    echo " is-active";
                }
                echo "\">
          ";
                // line 22
                $this->displayBlock('link', $context, $blocks);
                // line 30
                echo "        </li>
      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
  </";
            // line 33
            ((($context["element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true))) : (print ("div")));
            echo ">
";
        }
    }

    // line 22
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "url", [], "any", true, true, true, 23)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "url", [], "any", false, false, true, 23), 23, $this->source), "#0")) : ("#0")), "html", null, true);
        echo "\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_classes"] ?? null), 23, $this->source), "html", null, true);
        echo "\">
              ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
              ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "active", [], "any", false, false, true, 25)) {
            // line 26
            echo "                <span class=\"u-visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(((array_key_exists("active_label", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["active_label"] ?? null), 26, $this->source), "(active)")) : ("(active)"))));
            echo "</span>
              ";
        }
        // line 28
        echo "            </a>
          ";
    }

    public function getTemplateName()
    {
        return "@components/button-group/button-group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 28,  142 => 26,  140 => 25,  136 => 24,  129 => 23,  125 => 22,  118 => 33,  115 => 32,  100 => 30,  98 => 22,  92 => 21,  89 => 20,  87 => 18,  86 => 17,  84 => 14,  67 => 13,  63 => 11,  60 => 10,  56 => 9,  53 => 8,  48 => 7,  46 => 6,  43 => 5,  41 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/button-group/button-group.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/button-group/button-group.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6, "for" => 13, "block" => 22);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 7, "default" => 23, "t" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'block'],
                ['trim', 'join', 'escape', 'default', 't'],
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
