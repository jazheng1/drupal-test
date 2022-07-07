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

/* themes/contrib/gesso/templates/layout/page.html.twig */
class __TwigTemplate_9d0aad310d71c8ed6633a7f248575cad34f62f93bd39a77f7e34bcb9097a9709 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'site_content' => [$this, 'block_site_content'],
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 45
        return "@layouts/site-container/site-container.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@layouts/site-container/site-container.twig", "themes/contrib/gesso/templates/layout/page.html.twig", 45);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_site_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
  ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
  ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
  ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "

  <main id=\"main\" class=\"c-main\" role=\"main\" tabindex=\"-1\">
    ";
        // line 54
        $this->displayBlock('main_content', $context, $blocks);
        // line 66
        echo "  </main>

  ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
";
    }

    // line 54
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "      <div class=\"l-constrain\">
        ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
        ";
        // line 57
        $this->loadTemplate("@components/page-title/page-title.twig", "themes/contrib/gesso/templates/layout/page.html.twig", 57)->display(twig_array_merge($context, ["attributes" => "", "page_title" => (($__internal_compile_0 =         // line 59
($context["page"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null)]));
        // line 61
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "status", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
        ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
        ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "postscript", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 63,  103 => 62,  98 => 61,  96 => 59,  95 => 57,  91 => 56,  88 => 55,  84 => 54,  78 => 68,  74 => 66,  72 => 54,  66 => 51,  62 => 50,  58 => 49,  53 => 48,  49 => 47,  38 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 54, "include" => 57);
        static $filters = array("escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include'],
                ['escape'],
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
