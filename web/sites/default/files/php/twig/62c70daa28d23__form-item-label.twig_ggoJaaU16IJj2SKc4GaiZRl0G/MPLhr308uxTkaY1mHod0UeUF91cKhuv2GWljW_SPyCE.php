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

/* @components/form-item/_form-item-label.twig */
class __TwigTemplate_fe5c662a0f433c9edca9fdb421f03aa95e7547efd14a0aea65a6df9ae71c815a extends \Twig\Template
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
        $context["label_classes"] = twig_trim_filter(twig_join_filter([0 => "c-form-item__label", 1 => ((        // line 3
($context["is_disabled"] ?? null)) ? ("is-disabled") : ("")), 2 => ((        // line 4
($context["is_required"] ?? null)) ? ("is-required") : ("")), 3 => (((        // line 5
($context["label_display"] ?? null) == "invisible")) ? ("u-visually-hidden") : ("")), 4 => ((        // line 6
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 8
        echo "
";
        // line 9
        $context["attributes_to_add"] = ["class" =>         // line 10
($context["label_classes"] ?? null)];
        // line 12
        echo "
";
        // line 13
        if (($context["id"] ?? null)) {
            // line 14
            echo "  ";
            $context["attributes_to_add"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 14, $this->source), ["for" =>             // line 15
($context["id"] ?? null)]);
        }
        // line 18
        echo "
<label ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["attributes_to_add"] ?? null), 19, $this->source)));
        echo ">";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 20, $this->source), "html", null, true);
        echo "

  ";
        // line 22
        if (($context["is_required"] ?? null)) {
            // line 23
            ob_start(function () { return ''; });
            // line 24
            echo "      <span class=\"c-form-item__required-marker\">
        <span class=\"u-visually-hidden\">
          ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("This field is required."));
            echo "
        </span>
      </span>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        // line 31
        echo "</label>
";
    }

    public function getTemplateName()
    {
        return "@components/form-item/_form-item-label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  80 => 26,  76 => 24,  74 => 23,  72 => 22,  67 => 20,  64 => 19,  61 => 18,  58 => 15,  56 => 14,  54 => 13,  51 => 12,  49 => 10,  48 => 9,  45 => 8,  43 => 6,  42 => 5,  41 => 4,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/form-item/_form-item-label.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/form-item/_form-item-label.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 13, "spaceless" => 23);
        static $filters = array("trim" => 7, "join" => 7, "merge" => 14, "escape" => 20, "t" => 26);
        static $functions = array("add_attributes" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'spaceless'],
                ['trim', 'join', 'merge', 'escape', 't'],
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
