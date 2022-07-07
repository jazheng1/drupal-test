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

/* @components/dropdown-menu/dropdown-menu.twig */
class __TwigTemplate_67fb0bfb0c19ec84901ea0d8f0eb81428c9f5a1f83069dee2cc6f694c640f845 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gesso/dropdown_menu"), "html", null, true);
        echo "

";
        // line 81
        echo "
";
        // line 82
        $macros["dropdown_menu"] = $this->macros["dropdown_menu"] = $this;
        // line 83
        echo "
";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["dropdown_menu"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null), ($context["menu_class"] ?? null), ($context["item_class"] ?? null), ($context["link_class"] ?? null)], 84, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 3
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, $__menu_class__ = null, $__item_class__ = null, $__link_class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "menu_class" => $__menu_class__,
            "item_class" => $__item_class__,
            "link_class" => $__link_class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            echo "  ";
            $macros["dropdown_menu"] = $this;
            // line 5
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 6
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 7
                    echo "      ";
                    $context["additional_classes"] = [0 => "c-dropdown-menu"];
                    // line 10
                    echo "      ";
                    if (($context["menu_class"] ?? null)) {
                        // line 11
                        echo "        ";
                        $context["additional_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["additional_classes"] ?? null), 11, $this->source), $this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null), 11, $this->source));
                        // line 12
                        echo "      ";
                    }
                    // line 13
                    echo "      ";
                    $context["additional_attributes"] = ["class" =>                     // line 14
($context["additional_classes"] ?? null)];
                    // line 16
                    echo "<ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["additional_attributes"] ?? null), 16, $this->source)));
                    echo ">
  ";
                } else {
                    // line 18
                    echo "  <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => [0 => "c-dropdown-menu__subnav"]]));
                    echo ">
    ";
                }
                // line 20
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 21
                    echo "      ";
                    $context["item_classes"] = [0 => "c-dropdown-menu__item"];
                    // line 22
                    echo "      ";
                    $context["link_classes"] = [0 => "c-dropdown-menu__link"];
                    // line 23
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 24
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null), 24, $this->source), [0 => "js-top-level"]);
                        // line 25
                        echo "      ";
                    }
                    // line 26
                    echo "
      ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 27)) {
                        // line 28
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null), 28, $this->source), [0 => "has-subnav"]);
                        // line 29
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null), 29, $this->source), [0 => "has-subnav"]);
                        // line 30
                        echo "      ";
                    }
                    // line 31
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 31)) {
                        // line 32
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null), 32, $this->source), [0 => "is-active-trail"]);
                        // line 33
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null), 33, $this->source), [0 => "is-active-trail"]);
                        // line 34
                        echo "      ";
                    }
                    // line 35
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "is_collapsed", [], "any", false, false, true, 35)) {
                        // line 36
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null), 36, $this->source), [0 => "is-collapsed"]);
                        // line 37
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null), 37, $this->source), [0 => "is-collapsed"]);
                        // line 38
                        echo "      ";
                    }
                    // line 39
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 39)) {
                        // line 40
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null), 40, $this->source), [0 => "is-expanded"]);
                        // line 41
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null), 41, $this->source), [0 => "is-expanded"]);
                        // line 42
                        echo "      ";
                    }
                    // line 43
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["original_link"] ?? null) : null), "options", [], "any", false, false, true, 43), "attributes", [], "any", false, false, true, 43), "class", [], "any", false, false, true, 43)) {
                        // line 44
                        echo "        ";
                        $context["original_link_class"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["original_link"] ?? null) : null), "options", [], "any", false, false, true, 44), "attributes", [], "any", false, false, true, 44), "class", [], "any", false, false, true, 44);
                        // line 45
                        echo "        ";
                        if ( !twig_test_iterable(($context["original_link_class"] ?? null))) {
                            // line 46
                            echo "          ";
                            $context["original_link_class"] = [0 => ($context["original_link_class"] ?? null)];
                            // line 47
                            echo "        ";
                        }
                        // line 48
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null), 48, $this->source), $this->sandbox->ensureToStringAllowed(($context["original_link_class"] ?? null), 48, $this->source));
                        // line 49
                        echo "      ";
                    }
                    // line 50
                    echo "      ";
                    if (($context["item_class"] ?? null)) {
                        // line 51
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null), 51, $this->source), $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 51, $this->source));
                        // line 52
                        echo "      ";
                    }
                    // line 53
                    echo "      ";
                    if (($context["link_class"] ?? null)) {
                        // line 54
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null), 54, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_class"] ?? null), 54, $this->source));
                        // line 55
                        echo "      ";
                    }
                    // line 56
                    echo "
      ";
                    // line 57
                    $context["additional_item_attributes"] = ["class" =>                     // line 58
($context["item_classes"] ?? null)];
                    // line 60
                    echo "
      ";
                    // line 61
                    $context["link_attributes"] = ["class" =>                     // line 62
($context["link_classes"] ?? null)];
                    // line 64
                    echo "
      <li ";
                    // line 65
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["additional_item_attributes"] ?? null), 65, $this->source)));
                    echo ">
        ";
                    // line 66
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 66) == "<button>")) {
                        // line 67
                        echo "          ";
                        // line 68
                        echo "          <button ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 68, $this->source)));
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                        echo "</button>
        ";
                    } else {
                        // line 70
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 70), 70, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 70), 70, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 70, $this->source)), "html", null, true);
                        echo "
        ";
                    }
                    // line 72
                    echo "
        ";
                    // line 73
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 73)) {
                        // line 74
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["dropdown_menu"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 74, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 76
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "  </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@components/dropdown-menu/dropdown-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 78,  271 => 76,  265 => 74,  263 => 73,  260 => 72,  254 => 70,  246 => 68,  244 => 67,  242 => 66,  238 => 65,  235 => 64,  233 => 62,  232 => 61,  229 => 60,  227 => 58,  226 => 57,  223 => 56,  220 => 55,  217 => 54,  214 => 53,  211 => 52,  208 => 51,  205 => 50,  202 => 49,  199 => 48,  196 => 47,  193 => 46,  190 => 45,  187 => 44,  184 => 43,  181 => 42,  178 => 41,  175 => 40,  172 => 39,  169 => 38,  166 => 37,  163 => 36,  160 => 35,  157 => 34,  154 => 33,  151 => 32,  148 => 31,  145 => 30,  142 => 29,  139 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  122 => 22,  119 => 21,  114 => 20,  108 => 18,  102 => 16,  100 => 14,  98 => 13,  95 => 12,  92 => 11,  89 => 10,  86 => 7,  83 => 6,  80 => 5,  77 => 4,  58 => 3,  52 => 84,  49 => 83,  47 => 82,  44 => 81,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/dropdown-menu/dropdown-menu.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/dropdown-menu/dropdown-menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 82, "macro" => 3, "if" => 5, "set" => 7, "for" => 20);
        static $filters = array("escape" => 1, "merge" => 11);
        static $functions = array("attach_library" => 1, "add_attributes" => 16, "link" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape', 'merge'],
                ['attach_library', 'add_attributes', 'link']
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
