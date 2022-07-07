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

/* themes/contrib/gesso/templates/content/node--full.html.twig */
class __TwigTemplate_a06bee0cc4da49c164060367456ef684ef3c19fa13f62d930812e57fa1e55951 extends \Twig\Template
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
        // line 69
        $context["classes"] = [0 => ((twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 70)) ? ("is-promoted") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 71)) ? ("is-sticky") : ("")), 2 => (( !twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 72)) ? ("is-unpublished") : (""))];
        // line 74
        echo "
";
        // line 75
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 75);
        // line 76
        echo "
";
        // line 77
        ob_start(function () { return ''; });
        // line 78
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region_status"] ?? null), 78, $this->source), "html", null, true);
        echo "
";
        $context["admin_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "
";
        // line 81
        $context["show_admin_info"] = false;
        // line 82
        echo "
";
        // line 83
        if (twig_trim_filter(twig_striptags(($context["admin_info"] ?? null), "<drupal-render-placeholder>"))) {
            // line 84
            echo "  ";
            $context["show_admin_info"] = true;
        }
        // line 86
        echo "
";
        // line 87
        $this->loadTemplate("@templates/page/page.twig", "themes/contrib/gesso/templates/content/node--full.html.twig", 87)->display(twig_array_merge($context, ["title" =>         // line 88
($context["label"] ?? null), "show_admin_info" =>         // line 89
($context["show_admin_info"] ?? null), "admin_info" =>         // line 90
($context["admin_info"] ?? null), "show_footer" => ((        // line 91
($context["display_submitted"] ?? null)) ? (true) : (false)), "date" =>         // line 92
($context["date"] ?? null), "author" =>         // line 93
($context["author_name"] ?? null), "author_picture" =>         // line 94
($context["author_picture"] ?? null), "rdf_metadata" =>         // line 95
($context["metadata"] ?? null), "content" =>         // line 96
($context["content"] ?? null)]));
        // line 98
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/content/node--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 98,  86 => 96,  85 => 95,  84 => 94,  83 => 93,  82 => 92,  81 => 91,  80 => 90,  79 => 89,  78 => 88,  77 => 87,  74 => 86,  70 => 84,  68 => 83,  65 => 82,  63 => 81,  60 => 80,  54 => 78,  52 => 77,  49 => 76,  47 => 75,  44 => 74,  42 => 72,  41 => 71,  40 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/content/node--full.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/content/node--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69, "if" => 83, "include" => 87);
        static $filters = array("escape" => 78, "trim" => 83, "striptags" => 83);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['escape', 'trim', 'striptags'],
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
