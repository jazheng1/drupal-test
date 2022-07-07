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

/* @components/block/block.twig */
class __TwigTemplate_83d7d90d3eebd58a7d02fb22481f58ccd95fc431b031fcad0c9e51d503bfe5aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-block", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        $context["title_classes"] = twig_trim_filter(twig_join_filter([0 => "c-block__title"], " "));
        // line 9
        echo "
";
        // line 10
        $context["content_classes"] = twig_trim_filter(twig_join_filter([0 => "c-block__content"], " "));
        // line 13
        echo "
";
        // line 14
        $context["constrain_classes"] = twig_trim_filter(twig_join_filter([0 => "l-constrain", 1 => ((        // line 16
($context["constrain_modifier_classes"] ?? null)) ? (($context["constrain_modifier_classes"] ?? null)) : (""))], " "));
        // line 18
        echo "
";
        // line 19
        if ( !($context["hide_wrapper"] ?? null)) {
            // line 20
            echo "  <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
            echo ">
";
        }
        // line 22
        echo "
  ";
        // line 23
        if (($context["has_constrain"] ?? null)) {
            // line 24
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["constrain_classes"] ?? null)]));
            echo ">
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 27, $this->source), "html", null, true);
        echo "
  ";
        // line 28
        if (($context["label"] ?? null)) {
            // line 29
            echo "    <";
            ((($context["label_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label_element"] ?? null), "html", null, true))) : (print ("h2")));
            echo " ";
            echo $this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["title_classes"] ?? null)], "title_attributes");
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 29, $this->source), "html", null, true);
            echo "</";
            ((($context["label_element"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label_element"] ?? null), "html", null, true))) : (print ("h2")));
            echo ">
  ";
        }
        // line 31
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 31, $this->source), "html", null, true);
        echo "

  ";
        // line 33
        if ( !($context["hide_content_wrapper"] ?? null)) {
            // line 34
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["content_classes"] ?? null)], "content_attributes"));
            echo ">
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "
  ";
        // line 41
        if ( !($context["hide_content_wrapper"] ?? null)) {
            // line 42
            echo "    </div>
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if (($context["has_constrain"] ?? null)) {
            // line 46
            echo "    </div>
  ";
        }
        // line 48
        echo "
";
        // line 49
        if ( !($context["hide_wrapper"] ?? null)) {
            // line 50
            echo "  </div>
";
        }
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_content"] ?? null), 38, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@components/block/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 38,  150 => 37,  144 => 50,  142 => 49,  139 => 48,  135 => 46,  133 => 45,  130 => 44,  126 => 42,  124 => 41,  121 => 40,  119 => 37,  116 => 36,  110 => 34,  108 => 33,  102 => 31,  90 => 29,  88 => 28,  84 => 27,  81 => 26,  75 => 24,  73 => 23,  70 => 22,  64 => 20,  62 => 19,  59 => 18,  57 => 16,  56 => 14,  53 => 13,  51 => 10,  48 => 9,  46 => 6,  43 => 5,  41 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/block/block.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/block/block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 19, "block" => 37);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 27);
        static $functions = array("add_attributes" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
