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

/* themes/contrib/gesso/templates/layout/html.html.twig */
class __TwigTemplate_bd4b2ff81de4e45bda8f9793af5bc98919b611c9e7e01f9d9174744ce869e71a extends \Twig\Template
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
        // line 26
        $context["body_classes"] = [0 => ((        // line 27
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 28
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 28, $this->source))))), 2 => (( !        // line 29
($context["root_path"] ?? null)) ? ("front") : ("not-front")), 3 => ((        // line 30
($context["node_type"] ?? null)) ? (("node-page node-page--node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 4 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 33
        echo "
";
        // line 34
        $context["body_id"] = \Drupal\Component\Utility\Html::getUniqueId("top");
        // line 35
        echo "
<!DOCTYPE html>
<html";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 37, $this->source), "html", null, true);
        echo " class=\"no-js\">
  <head>
    <head-placeholder token=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 39, $this->source));
        echo "\">
    <title>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 40, $this->source), " | "));
        echo "</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <css-placeholder token=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source));
        echo "\">
  </head>
  <body ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" =>         // line 47
($context["body_classes"] ?? null), "id" =>         // line 48
($context["body_id"] ?? null)]));
        // line 49
        echo ">
    ";
        // line 50
        $this->loadTemplate("@components/skiplinks/skiplinks.twig", "themes/contrib/gesso/templates/layout/html.html.twig", 50)->display($context);
        // line 51
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 51, $this->source), "html", null, true);
        echo "
    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 52, $this->source), "html", null, true);
        echo "
    ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 53, $this->source), "html", null, true);
        echo "
    ";
        // line 54
        if (($context["include_back_to_top"] ?? null)) {
            // line 55
            echo "      ";
            $this->loadTemplate("@components/back-to-top/back-to-top.twig", "themes/contrib/gesso/templates/layout/html.html.twig", 55)->display(twig_array_merge($context, ["text" => t("Back to top"), "top_element" =>             // line 57
($context["body_id"] ?? null), "gesso_image_path" =>             // line 58
($context["gesso_image_path"] ?? null)]));
            // line 60
            echo "    ";
        }
        // line 61
        echo "    <js-bottom-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 61,  108 => 60,  106 => 58,  105 => 57,  103 => 55,  101 => 54,  97 => 53,  93 => 52,  88 => 51,  86 => 50,  83 => 49,  81 => 48,  80 => 47,  79 => 46,  74 => 44,  70 => 43,  64 => 40,  60 => 39,  55 => 37,  51 => 35,  49 => 34,  46 => 33,  44 => 31,  43 => 30,  42 => 29,  41 => 28,  40 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/layout/html.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "include" => 50, "if" => 54);
        static $filters = array("clean_class" => 28, "unique_id" => 34, "escape" => 37, "raw" => 39, "safe_join" => 40, "t" => 56);
        static $functions = array("add_attributes" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['clean_class', 'unique_id', 'escape', 'raw', 'safe_join', 't'],
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
