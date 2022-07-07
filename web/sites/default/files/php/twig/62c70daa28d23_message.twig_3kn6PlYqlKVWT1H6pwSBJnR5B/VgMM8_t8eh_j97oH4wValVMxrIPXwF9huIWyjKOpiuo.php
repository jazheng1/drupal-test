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

/* @components/message/message.twig */
class __TwigTemplate_3dc6943b1c2842bd274aa0294201ea55f8a981159a2b16aa7df7ef55d7347f0f extends \Twig\Template
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
        if ((($context["type"] ?? null) == "error")) {
            // line 2
            echo "  ";
            $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-message", 1 => "c-message--error", 2 => ((            // line 5
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        } elseif ((        // line 7
($context["type"] ?? null) == "warning")) {
            // line 8
            echo "  ";
            $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-message", 1 => "c-message--warning", 2 => ((            // line 11
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        } else {
            // line 14
            echo "  ";
            $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-message", 1 => "c-message--status", 2 => ((            // line 17
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        }
        // line 20
        echo "
<div ";
        // line 21
        if ((($context["type"] ?? null) == "error")) {
            echo " role=\"alert\" ";
        } else {
            echo " role=\"contentinfo\" ";
        }
        echo " ";
        if (($context["heading"] ?? null)) {
            echo "aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 21, $this->source), "html", null, true);
            echo "\"";
        }
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo ">
  <div class=\"c-message__content\">
    <h2 class=\"u-visually-hidden\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 23, $this->source), "html", null, true);
        echo "</h2>
    ";
        // line 24
        if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 1)) {
            // line 25
            echo "      <ul class=\"c-message__list\">
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 27
                echo "          <li class=\"c-message__item\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 27, $this->source), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      </ul>
    ";
        } else {
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 31, $this->source)), "html", null, true);
        }
        // line 33
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@components/message/message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  103 => 31,  99 => 29,  90 => 27,  86 => 26,  83 => 25,  81 => 24,  77 => 23,  60 => 21,  57 => 20,  54 => 17,  52 => 14,  49 => 11,  47 => 8,  45 => 7,  43 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/message/message.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/message/message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "for" => 26);
        static $filters = array("trim" => 6, "join" => 6, "escape" => 21, "length" => 24, "first" => 31);
        static $functions = array("add_attributes" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['trim', 'join', 'escape', 'length', 'first'],
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
