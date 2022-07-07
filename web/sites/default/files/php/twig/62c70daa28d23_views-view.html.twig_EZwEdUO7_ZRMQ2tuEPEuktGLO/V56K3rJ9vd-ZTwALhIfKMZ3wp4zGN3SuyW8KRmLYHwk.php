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

/* themes/contrib/gesso/templates/views/views-view.html.twig */
class __TwigTemplate_09f2edce1b53c13abe1670b138cd4876cfaf886764cc78714fa46a73436df16d extends \Twig\Template
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
        // line 34
        $context["classes"] = [0 => "c-view", 1 => ("c-view--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), 2 => ("c-view--display-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["display_id"] ?? null), 37, $this->source)), 3 => "view", 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : (""))];
        // line 41
        echo "
";
        // line 42
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42);
        // line 43
        echo "
";
        // line 44
        $this->loadTemplate("@components/view/views-view/views-view.twig", "themes/contrib/gesso/templates/views/views-view.html.twig", 44)->display(twig_array_merge($context, ["element" => "div", "header" =>         // line 46
($context["header"] ?? null), "exposed" =>         // line 47
($context["exposed"] ?? null), "attachment_before" =>         // line 48
($context["attachment_before"] ?? null), "rows" =>         // line 49
($context["rows"] ?? null), "empty" =>         // line 50
($context["empty"] ?? null), "pager" =>         // line 51
($context["pager"] ?? null), "attachment_after" =>         // line 52
($context["attachment_after"] ?? null), "more" =>         // line 53
($context["more"] ?? null), "footer" =>         // line 54
($context["footer"] ?? null), "feed_icons" =>         // line 55
($context["feed_icons"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 55,  61 => 54,  60 => 53,  59 => 52,  58 => 51,  57 => 50,  56 => 49,  55 => 48,  54 => 47,  53 => 46,  52 => 44,  49 => 43,  47 => 42,  44 => 41,  42 => 39,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/views/views-view.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "include" => 44);
        static $filters = array("clean_class" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class'],
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
