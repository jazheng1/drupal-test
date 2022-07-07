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

/* @components/article/article.twig */
class __TwigTemplate_8680468d71a9855f82a97337f9347fc10abf4ec00b0a4c3065c8c8f1acb1ab28 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'admin_info' => [$this, 'block_admin_info'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "c-article", 1 => ((        // line 3
($context["modifier_classes"] ?? null)) ? (($context["modifier_classes"] ?? null)) : (""))], " "));
        // line 5
        echo "
<article ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gesso_helper\TwigExtension\AddAttributesTwigExtension']->addAttributes($context, ["class" => ($context["classes"] ?? null)]));
        echo ">
  ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 7, $this->source), "html", null, true);
        echo "
  ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 13, $this->source), "html", null, true);
        echo "

  ";
        // line 15
        if (($context["show_admin_info"] ?? null)) {
            // line 16
            echo "    ";
            if ( !($context["admin_info"] ?? null)) {
                // line 17
                echo "      ";
                ob_start(function () { return ''; });
                // line 18
                echo "        ";
                $this->loadTemplate("@components/message/message.twig", "@components/article/article.twig", 18)->display(twig_array_merge($context, ["heading" => "Status message", "messages" => [0 => "This is a status message about <em class=\"placeholder\">something</em> that has been updated. <a href=\"#\">This is a link</a>."]]));
                // line 22
                echo "        ";
                $this->loadTemplate("@components/button-group/button-group.twig", "@components/article/article.twig", 22)->display(twig_array_merge($context, ["heading" => "Primary tabs", "element" => "nav", "button_modifier_classes" => "c-button--base", "buttons" => [0 => ["text" => "View", "active" => true], 1 => ["text" => "Edit"], 2 => ["text" => "Delete"], 3 => ["text" => "Revisions"]]]));
                // line 42
                echo "      ";
                $context["admin_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $this->displayBlock('admin_info', $context, $blocks);
            // line 48
            echo "  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if (($context["show_footer"] ?? null)) {
            // line 51
            echo "    <footer class=\"c-article__footer\">
      ";
            // line 52
            $this->displayBlock('footer', $context, $blocks);
            // line 80
            echo "    </footer>
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "</article>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->loadTemplate("@components/page-title/page-title.twig", "@components/article/article.twig", 9)->display(twig_array_merge($context, ["page_title" =>         // line 10
($context["title"] ?? null)]));
        // line 12
        echo "  ";
    }

    // line 45
    public function block_admin_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["admin_info"] ?? null), 46, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 52
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        ";
        if ( !($context["date"] ?? null)) {
            // line 54
            echo "          ";
            ob_start(function () { return ''; });
            // line 55
            echo "            ";
            $this->loadTemplate("@components/date/date.twig", "@components/article/article.twig", 55)->display(twig_array_merge($context, ["date_format" =>             // line 56
($context["date_format"] ?? null)]));
            // line 58
            echo "          ";
            $context["date"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ( !($context["author"] ?? null)) {
            // line 62
            echo "          ";
            ob_start(function () { return ''; });
            // line 63
            echo "            ";
            $this->loadTemplate("@components/author/author.twig", "@components/article/article.twig", 63)->display(twig_array_merge($context, ["author" =>             // line 64
($context["author_name"] ?? null)]));
            // line 66
            echo "          ";
            $context["author"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "        ";
        }
        // line 68
        echo "
        ";
        // line 69
        $this->loadTemplate("@components/list/list.twig", "@components/article/article.twig", 69)->display(twig_array_merge($context, ["modifier_classes" => "c-list--pipeline", "list" => [0 => ["content" =>         // line 72
($context["date"] ?? null)], 1 => ["content" =>         // line 73
($context["author"] ?? null)]]]));
        // line 76
        echo "
        ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 77, $this->source), "html", null, true);
        echo "
        ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rdf_metadata"] ?? null), 78, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "    ";
        $this->loadTemplate("@components/wysiwyg/wysiwyg.twig", "@components/article/article.twig", 84)->display(twig_array_merge($context, ["content" =>         // line 85
($context["content"] ?? null)]));
        // line 87
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@components/article/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 87,  204 => 85,  202 => 84,  198 => 83,  192 => 78,  188 => 77,  185 => 76,  183 => 73,  182 => 72,  181 => 69,  178 => 68,  175 => 67,  172 => 66,  170 => 64,  168 => 63,  165 => 62,  163 => 61,  160 => 60,  157 => 59,  154 => 58,  152 => 56,  150 => 55,  147 => 54,  144 => 53,  140 => 52,  133 => 46,  129 => 45,  125 => 12,  123 => 10,  121 => 9,  117 => 8,  112 => 88,  110 => 83,  107 => 82,  103 => 80,  101 => 52,  98 => 51,  96 => 50,  93 => 49,  90 => 48,  88 => 45,  85 => 44,  82 => 43,  79 => 42,  76 => 22,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  59 => 13,  57 => 8,  53 => 7,  49 => 6,  46 => 5,  44 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@components/article/article.twig", "/var/www/html/web/themes/contrib/gesso/source/03-components/article/article.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 8, "if" => 15, "include" => 18);
        static $filters = array("trim" => 4, "join" => 4, "escape" => 7);
        static $functions = array("add_attributes" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
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
