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

/* themes/contrib/gesso/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_c743a6b8095074a35fcc91f28518f8eb733247a6607fd2de83dc855672936974 extends \Twig\Template
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
        // line 15
        return "block--admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block--admin.html.twig", "themes/contrib/gesso/templates/block/block--system-branding-block.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "    ";
            $this->loadTemplate("@components/site-logo/site-logo.twig", "themes/contrib/gesso/templates/block/block--system-branding-block.html.twig", 19)->display(twig_array_merge($context, ["attributes" => "", "url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "site_logo" =>             // line 22
($context["site_logo"] ?? null)]));
            // line 24
            echo "  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($context["site_name"] ?? null)) {
            // line 27
            echo "    ";
            $this->loadTemplate("@components/site-name/site-name.twig", "themes/contrib/gesso/templates/block/block--system-branding-block.html.twig", 27)->display(twig_array_merge($context, ["attributes" => "", "url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "site_name" =>             // line 30
($context["site_name"] ?? null)]));
            // line 32
            echo "  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if (($context["site_slogan"] ?? null)) {
            // line 35
            echo "    ";
            $this->loadTemplate("@components/site-slogan/site-slogan.twig", "themes/contrib/gesso/templates/block/block--system-branding-block.html.twig", 35)->display(twig_array_merge($context, ["attributes" => "", "site_slogan" =>             // line 37
($context["site_slogan"] ?? null)]));
            // line 39
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/gesso/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 39,  81 => 37,  79 => 35,  77 => 34,  74 => 33,  71 => 32,  69 => 30,  67 => 27,  65 => 26,  62 => 25,  59 => 24,  57 => 22,  55 => 19,  52 => 18,  48 => 17,  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gesso/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/contrib/gesso/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "include" => 19);
        static $filters = array();
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
                ['path']
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
