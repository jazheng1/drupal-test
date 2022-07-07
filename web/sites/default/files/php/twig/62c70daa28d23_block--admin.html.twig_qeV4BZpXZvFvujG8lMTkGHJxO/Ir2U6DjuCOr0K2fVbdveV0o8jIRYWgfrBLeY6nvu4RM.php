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

/* block--admin.html.twig */
class __TwigTemplate_5b51ec4b5544e876eb86ce2240e60bb46380bc1dcf871b1712a085660d74333d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $context["classes"] = [0 => "c-block", 1 => "c-block--admin"];
        // line 14
        echo "
";
        // line 15
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 15);
        // line 16
        echo "
";
        // line 17
        ob_start(function () { return ''; });
        // line 18
        echo "  ";
        $this->displayBlock('block_content', $context, $blocks);
        $context["block_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
";
        // line 23
        $this->loadTemplate("block--admin.html.twig", "block--admin.html.twig", 23, "1655852626")->display(twig_array_merge($context, ["hide_wrapper" =>  !        // line 24
($context["logged_in"] ?? null), "has_constrain" => false, "hide_content_wrapper" => true, "label" => false]));
    }

    // line 18
    public function block_block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 19, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "block--admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  64 => 18,  60 => 24,  59 => 23,  56 => 22,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  42 => 14,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "block--admin.html.twig", "themes/contrib/gesso/templates/block/block--admin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "block" => 18, "embed" => 23);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'embed'],
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


/* block--admin.html.twig */
class __TwigTemplate_5b51ec4b5544e876eb86ce2240e60bb46380bc1dcf871b1712a085660d74333d___1655852626 extends \Twig\Template
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
        // line 23
        return "@components/block/block.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@components/block/block.twig", "block--admin.html.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_content"] ?? null), 31, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "block--admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 31,  157 => 30,  146 => 23,  68 => 19,  64 => 18,  60 => 24,  59 => 23,  56 => 22,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  42 => 14,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "block--admin.html.twig", "themes/contrib/gesso/templates/block/block--admin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 31);
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
