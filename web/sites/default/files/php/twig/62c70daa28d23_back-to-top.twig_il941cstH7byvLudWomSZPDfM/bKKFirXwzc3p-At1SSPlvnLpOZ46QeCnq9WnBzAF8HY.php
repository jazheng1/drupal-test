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

/* @components/back-to-top/back-to-top.twig */
class __TwigTemplate_9b22ecba1d07370580d356682a5b95898024ba7cb6b7dad1007c8033b0da464e extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gesso/back_to_top"), "html", null, true);
        echo "

";
        // line 3
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-back-to-top", 1 => ((        // line 5
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : ("")), 2 => ((        // line 6
($context["is_demo"] ?? null)) ? ("c-back-to-top--storybook-show") : (""))], " "));
        // line 8
        echo "
<a href=\"#";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_element"] ?? null), 9, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo " title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 9, $this->source), "html", null, true);
        echo "\" aria-hidden=\"true\" tabindex=\"-1\">
  ";
        // line 10
        $this->loadTemplate("@components/icon/icon.twig", "@components/back-to-top/back-to-top.twig", 10)->display(twig_array_merge($context, ["is_demo" => false, "is_hidden" => false, "label" =>         // line 13
($context["text"] ?? null), "modifier_classes" => "c-icon--back-to-top", "icon_name" => "angle-up"]));
        // line 17
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@components/back-to-top/back-to-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  60 => 13,  59 => 10,  51 => 9,  48 => 8,  46 => 6,  45 => 5,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/back-to-top/back-to-top.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/back-to-top/back-to-top.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "include" => 10);
        static $filters = array("escape" => 1, "trim" => 7, "join" => 7);
        static $functions = array("attach_library" => 1, "add_attributes" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
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
