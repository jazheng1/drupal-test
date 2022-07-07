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

/* themes/contrib/gesso/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_db24191d308757ddc2d76f3a51524ad5e6dedcbd64bdfabff1f6a8844346482b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "block--admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block--admin.html.twig", "themes/contrib/gesso/templates/block/block--system-menu-block.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "  ";
        $this->loadTemplate("themes/contrib/gesso/templates/block/block--system-menu-block.html.twig", "themes/contrib/gesso/templates/block/block--system-menu-block.html.twig", 37, "1851285847")->display(twig_array_merge($context, ["attributes" => "", "modifier_classes" => ("l-nav--" . \Drupal\Component\Utility\Html::getClass(        // line 39
($context["derivative_plugin_id"] ?? null))), "title_element" => "h2", "hide_title" => (twig_get_attribute($this->env, $this->source,         // line 41
($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 41) == "0"), "title" => twig_get_attribute($this->env, $this->source,         // line 42
($context["configuration"] ?? null), "label", [], "any", false, false, true, 42), "nav_id" => ("nav-" . \Drupal\Component\Utility\Html::getUniqueId(\Drupal\Component\Utility\Html::getId(        // line 43
($context["derivative_plugin_id"] ?? null))))]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 43,  56 => 42,  55 => 41,  54 => 39,  52 => 37,  48 => 36,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/block/block--system-menu-block.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/block/block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 37);
        static $filters = array("clean_class" => 39, "unique_id" => 43, "clean_id" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                ['clean_class', 'unique_id', 'clean_id'],
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


/* themes/contrib/gesso/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_db24191d308757ddc2d76f3a51524ad5e6dedcbd64bdfabff1f6a8844346482b___1851285847 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 37
        return "@layouts/nav/nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@layouts/nav/nav.twig", "themes/contrib/gesso/templates/block/block--system-menu-block.html.twig", 37);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 47, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 47,  143 => 46,  132 => 37,  57 => 43,  56 => 42,  55 => 41,  54 => 39,  52 => 37,  48 => 36,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/block/block--system-menu-block.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/block/block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
