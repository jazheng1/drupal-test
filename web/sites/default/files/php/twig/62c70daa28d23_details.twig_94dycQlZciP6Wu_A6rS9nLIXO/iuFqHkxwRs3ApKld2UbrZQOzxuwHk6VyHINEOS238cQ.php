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

/* @components/details/details.twig */
class __TwigTemplate_4d6a30bbf36cb38575542c6f01dee7227a15c50db8237ccd61f023457f2579da extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-details", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        $context["summary_classes"] = twig_trim_filter(twig_join_filter([0 => "c-details__summary", 1 => ((        // line 8
($context["required"] ?? null)) ? ("is-required") : (""))], " "));
        // line 10
        echo "
<details ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo ">
  ";
        // line 12
        if (($context["details_summary"] ?? null)) {
            // line 13
            echo "    <summary ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["summary_classes"] ?? null), "role" => "button"]));
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["details_summary"] ?? null), 13, $this->source), "html", null, true);
            echo "</summary>
  ";
        }
        // line 15
        echo "  <div class=\"c-details__content\">
    ";
        // line 16
        if (($context["details_description"] ?? null)) {
            // line 17
            echo "      <div class=\"c-details__description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["details_description"] ?? null), 17, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 19
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["details_content"] ?? null), 19, $this->source), "html", null, true);
        echo "
  </div>
</details>
";
    }

    public function getTemplateName()
    {
        return "@components/details/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  70 => 17,  68 => 16,  65 => 15,  57 => 13,  55 => 12,  51 => 11,  48 => 10,  46 => 8,  45 => 6,  42 => 5,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/details/details.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/details/details.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 12);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 13);
        static $functions = array("add_attributes" => 11);

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
