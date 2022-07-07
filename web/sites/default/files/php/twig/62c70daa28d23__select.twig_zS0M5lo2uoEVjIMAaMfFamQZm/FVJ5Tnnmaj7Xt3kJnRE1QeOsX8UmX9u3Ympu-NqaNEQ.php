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

/* @components/form-item/form-item--select/_select.twig */
class __TwigTemplate_187093471064fe29cbd39bfe04336835c90c23e2ae991f70cb199e5a98f941fe extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-form-item__select", 1 => "c-form-item--select", 2 => ((        // line 4
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : ("")), 3 => (((        // line 5
($context["is_required"] ?? null) || ($context["required"] ?? null))) ? ("is-required") : (""))], " "));
        // line 7
        echo "
";
        // line 8
        $context["attributes_to_add"] = ["class" =>         // line 9
($context["classes"] ?? null)];
        // line 11
        echo "
";
        // line 12
        if (($context["id"] ?? null)) {
            // line 13
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 13, $this->source), ["id" =>             // line 14
($context["id"] ?? null)]);
        }
        // line 17
        echo "
";
        // line 18
        if ((($context["is_disabled"] ?? null) || ($context["disabled"] ?? null))) {
            // line 19
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 19, $this->source), ["disabled" => "disabled"]);
        }
        // line 23
        echo "
";
        // line 24
        if ((($context["is_required"] ?? null) || ($context["required"] ?? null))) {
            // line 25
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 25, $this->source), ["required" => "required", "aria-required" => "true"]);
        }
        // line 30
        echo "
";
        // line 32
        if (($context["described_by"] ?? null)) {
            // line 33
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 33, $this->source), ["aria-describedby" =>             // line 34
($context["described_by"] ?? null)]);
        }
        // line 37
        echo "
";
        // line 38
        ob_start(function () { return ''; });
        // line 39
        echo "  <select ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 39, $this->source)));
        echo ">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 41
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 41) == "optgroup")) {
                // line 42
                echo "        <optgroup label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 44
                    echo "            <option value=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 44)) ? (" selected=\"selected\"") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "disabled", [], "any", false, false, true, 44)) ? (" disabled=\"disabled\"") : ("")));
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        </optgroup>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 47
$context["option"], "type", [], "any", false, false, true, 47) == "option")) {
                // line 48
                echo "        <option value=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 48)) ? (" selected=\"selected\"") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "disabled", [], "any", false, false, true, 48)) ? (" disabled=\"disabled\"") : ("")));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "</option>
      ";
            }
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </select>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
    }

    public function getTemplateName()
    {
        return "@components/form-item/form-item--select/_select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  149 => 51,  143 => 50,  132 => 48,  130 => 47,  127 => 46,  113 => 44,  109 => 43,  104 => 42,  101 => 41,  97 => 40,  92 => 39,  90 => 38,  87 => 37,  84 => 34,  82 => 33,  80 => 32,  77 => 30,  73 => 25,  71 => 24,  68 => 23,  64 => 19,  62 => 18,  59 => 17,  56 => 14,  54 => 13,  52 => 12,  49 => 11,  47 => 9,  46 => 8,  43 => 7,  41 => 5,  40 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/form-item/form-item--select/_select.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/form-item/form-item--select/_select.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 12, "apply" => 38, "for" => 40);
        static $filters = array("trim" => 6, "join" => 6, "merge" => 13, "escape" => 42, "spaceless" => 38);
        static $functions = array("add_attributes" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'apply', 'for'],
                ['trim', 'join', 'merge', 'escape', 'spaceless'],
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
