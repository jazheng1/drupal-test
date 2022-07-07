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

/* @components/dropbutton/dropbutton.twig */
class __TwigTemplate_2ec39204ae818f7efa4b17600f3b518f0bc58c7b44244d82cb4f27ededa4efa5 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/drupal.dropbutton"), "html", null, true);
        echo "

";
        // line 3
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-dropbutton", 1 => "js-dropbutton", 2 => "has-multiple", 3 => ((        // line 7
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 9
        echo "
<div ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo ">
  <ul class=\"c-dropbutton__list js-dropbutton-list\">";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "<li ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => "c-dropbutton__item"], "item.attributes"));
            echo ">";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 14)) {
                // line 15
                echo "<a ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => "c-button c-dropbutton__button"], "item.link.attributes"));
                if (twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 15)) {
                    echo " href=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                }
                echo ">
          ";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "
        </a>";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 18
$context["item"], "text_attributes", [], "any", false, false, true, 18)) {
                // line 19
                echo "<span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</span>";
            } else {
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            }
            // line 23
            echo "</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@components/dropbutton/dropbutton.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  89 => 23,  86 => 21,  79 => 19,  77 => 18,  73 => 16,  64 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 10,  47 => 9,  45 => 7,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/dropbutton/dropbutton.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/dropbutton/dropbutton.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "for" => 12, "if" => 14);
        static $filters = array("escape" => 1, "trim" => 8, "join" => 8);
        static $functions = array("attach_library" => 1, "add_attributes" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trim', 'join'],
                ['attach_library', 'add_attributes']
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
