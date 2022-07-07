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

/* themes/contrib/gesso/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_0d1406b329863e4c7dec305e29e069dd5cc10ef252855ae47cf5ec121712ee6f extends \Twig\Template
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
        // line 14
        if (($context["primary"] ?? null)) {
            // line 15
            echo "  ";
            $context["primary_links"] = [];
            // line 16
            echo "
  ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["primary"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "    ";
                $context["primary_links"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["primary_links"] ?? null), 18, $this->source), [0 => ["text" => twig_get_attribute($this->env, $this->source, (($__internal_compile_0 =                 // line 19
$context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#link"] ?? null) : null), "title", [], "any", false, false, true, 19), "url" => twig_get_attribute($this->env, $this->source, (($__internal_compile_1 =                 // line 20
$context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#link"] ?? null) : null), "url", [], "any", false, false, true, 20), "active" => (($__internal_compile_2 =                 // line 21
$context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#active"] ?? null) : null)]]);
                // line 23
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
  ";
            // line 25
            $this->loadTemplate("@components/button-group/button-group.twig", "themes/contrib/gesso/templates/navigation/menu-local-tasks.html.twig", 25)->display(twig_to_array(["heading" => t("Primary tabs"), "element" => "nav", "button_modifier_classes" => "c-button--base", "buttons" =>             // line 29
($context["primary_links"] ?? null)]));
        }
        // line 32
        echo "
";
        // line 33
        if (($context["secondary"] ?? null)) {
            // line 34
            echo "  ";
            $context["secondary_links"] = [];
            // line 35
            echo "
  ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["secondary"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "    ";
                ob_start(function () { return ''; });
                // line 38
                echo "      <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#link"] ?? null) : null), "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\">";
                // line 39
                if ((($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#active"] ?? null) : null)) {
                    echo "<strong>";
                }
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = $context["item"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#link"] ?? null) : null), "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                // line 41
                if ((($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#active"] ?? null) : null)) {
                    echo "<span class=\"u-visually-hidden\"> (";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("active tab"));
                    echo ")</span></strong>";
                }
                // line 42
                echo "</a>
    ";
                $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 44
                echo "
    ";
                // line 45
                $context["secondary_links"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["secondary_links"] ?? null), 45, $this->source), [0 => ["content" =>                 // line 46
($context["link"] ?? null)]]);
                // line 48
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
  <h2 class=\"u-visually-hidden\">";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
  ";
            // line 51
            $this->loadTemplate("@components/list/list.twig", "themes/contrib/gesso/templates/navigation/menu-local-tasks.html.twig", 51)->display(twig_to_array(["modifier_classes" => "c-list--pipeline", "list" =>             // line 53
($context["secondary_links"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  127 => 51,  123 => 50,  120 => 49,  114 => 48,  112 => 46,  111 => 45,  108 => 44,  104 => 42,  98 => 41,  96 => 40,  92 => 39,  88 => 38,  85 => 37,  81 => 36,  78 => 35,  75 => 34,  73 => 33,  70 => 32,  67 => 29,  66 => 25,  63 => 24,  57 => 23,  55 => 21,  54 => 20,  53 => 19,  51 => 18,  47 => 17,  44 => 16,  41 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/navigation/menu-local-tasks.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/navigation/menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "set" => 15, "for" => 17, "include" => 25);
        static $filters = array("merge" => 18, "t" => 26, "escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'include'],
                ['merge', 't', 'escape'],
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
