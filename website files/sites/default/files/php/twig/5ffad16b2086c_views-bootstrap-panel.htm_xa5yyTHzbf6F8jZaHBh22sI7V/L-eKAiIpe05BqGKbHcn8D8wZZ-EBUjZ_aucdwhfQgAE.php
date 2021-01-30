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

/* modules/views_bootstrap/templates/views-bootstrap-panel.html.twig */
class __TwigTemplate_2d6e9069a70ba5705a152f0dfa2ac20b1c79708002b33609dbf0ce3b5e204671 extends \Twig\Template
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
        if (($context["group_title"] ?? null)) {
            echo "<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_title"] ?? null), 1, $this->source), "html", null, true);
            echo "</h3>";
        }
        // line 2
        echo "<div id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 2, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 4
            echo "<div class=\"panel ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["panel_class"] ?? null), 4, $this->source), "html", null, true);
            echo "\">
      ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 5)) {
                // line 6
                echo "      <div class=\"panel-heading\">
        <h4 class=\"panel-title\">
          ";
                // line 8
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "
          ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 9)) {
                    // line 10
                    echo "            <span class=\"badge pull-right\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "</span>
          ";
                }
                // line 12
                echo "        </h4>
      </div>
      ";
            }
            // line 15
            echo "      <div class=\"panel-body\">
        ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
      </div>
      ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["row"], "footer", [], "any", false, false, true, 18)) {
                // line 19
                echo "        <div class=\"panel-footer\">
            ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "footer", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 23
            echo "    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  103 => 23,  97 => 20,  94 => 19,  92 => 18,  87 => 16,  84 => 15,  79 => 12,  73 => 10,  71 => 9,  67 => 8,  63 => 6,  61 => 5,  56 => 4,  52 => 3,  45 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-panel.html.twig", "C:\\xampp\\htdocs\\la_belle\\modules\\views_bootstrap\\templates\\views-bootstrap-panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 3);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
