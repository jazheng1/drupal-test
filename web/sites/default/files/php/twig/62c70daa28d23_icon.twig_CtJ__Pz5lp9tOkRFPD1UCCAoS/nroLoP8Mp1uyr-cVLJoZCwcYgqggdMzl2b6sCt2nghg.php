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

/* @components/icon/icon.twig */
class __TwigTemplate_8de6637e5cffa71c337a88d4fe99fc0520330fa3dbec3a3de76bfc6355f6e7a7 extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-icon", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
";
        // line 6
        if (($context["is_demo"] ?? null)) {
            // line 7
            echo "  ";
            $context["icons"] = [0 => "angle-double-left", 1 => "angle-double-right", 2 => "angle-down", 3 => "angle-left", 4 => "angle-right", 5 => "angle-up", 6 => "rss", 7 => "facebook", 8 => "linkedin", 9 => "twitter", 10 => "close"];
            // line 20
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["icons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 21
                echo "    <p>
      <svg ";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
                echo " role=\"img\"";
                if (($context["is_hidden"] ?? null)) {
                    echo " aria-hidden=\"true\"";
                }
                echo ">
        ";
                // line 23
                if (($context["label"] ?? null)) {
                    echo "<title>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 23, $this->source), "html", null, true);
                    echo "</title>";
                }
                // line 24
                echo "        <use xlink:href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gesso_image_path"] ?? null), 24, $this->source), "html", null, true);
                echo "/sprite.artifact.svg#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["icon"], 24, $this->source), "html", null, true);
                echo "\"></use>
      </svg>
      ";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["icon"], 26, $this->source), "html", null, true);
                echo "
    </p>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 30
            ob_start(function () { return ''; });
            // line 31
            echo "    <svg ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
            echo " role=\"img\"";
            if (($context["is_hidden"] ?? null)) {
                echo " aria-hidden=\"true\"";
            }
            echo ">
      ";
            // line 32
            if (($context["label"] ?? null)) {
                echo "<title>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 32, $this->source), "html", null, true);
                echo "</title>";
            }
            // line 33
            echo "      <use xlink:href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gesso_image_path"] ?? null), 33, $this->source), "html", null, true);
            echo "/sprite.artifact.svg#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null), 33, $this->source), "html", null, true);
            echo "\"></use>
    </svg>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "@components/icon/icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  101 => 32,  92 => 31,  90 => 30,  80 => 26,  72 => 24,  66 => 23,  58 => 22,  55 => 21,  50 => 20,  47 => 7,  45 => 6,  42 => 5,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/icon/icon.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/icon/icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6, "for" => 20, "spaceless" => 30);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 23);
        static $functions = array("add_attributes" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'spaceless'],
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
