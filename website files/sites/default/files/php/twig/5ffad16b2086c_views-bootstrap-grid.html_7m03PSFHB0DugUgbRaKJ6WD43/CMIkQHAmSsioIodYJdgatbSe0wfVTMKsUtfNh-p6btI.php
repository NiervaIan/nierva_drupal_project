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

/* modules/views_bootstrap/templates/views-bootstrap-grid.html.twig */
class __TwigTemplate_e935b74ee988ac78b5b983d3884e58feadfa839014885dc1c20aed04be45e6ee extends \Twig\Template
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
        // line 16
        $context["classes"] = [0 => "views-view-grid", 1 => twig_get_attribute($this->env, $this->source,         // line 18
($context["options"] ?? null), "alignment", [], "any", false, false, true, 18)];
        // line 22
        $context["row_classes"] = [0 => "row"];
        // line 27
        $context["col_classes"] = [0 => "col", 1 =>         // line 29
($context["col_xs"] ?? null), 2 =>         // line 30
($context["col_sm"] ?? null), 3 =>         // line 31
($context["col_md"] ?? null), 4 =>         // line 32
($context["col_lg"] ?? null)];
        // line 35
        if (($context["title"] ?? null)) {
            // line 36
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 36, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 38
        echo "<div id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 38, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">
  ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "alignment", [], "any", false, false, true, 39) == "horizontal")) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 41
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 41), "addClass", [0 => ($context["row_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 41)) ? (("row-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 41), 41, $this->source))) : (""))], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                echo ">
        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 43
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 43), "addClass", [0 => ($context["col_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 43)) ? (("col-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 43), 43, $this->source))) : (""))], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo ">
            ";
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "
          </div>
          ";
                    // line 46
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 46) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "xs", [], "any", false, false, true, 46))) {
                        // line 47
                        echo "            <div class=\"clearfix visible-xs-block\"></div>
          ";
                    }
                    // line 49
                    echo "
          ";
                    // line 50
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 50) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "sm", [], "any", false, false, true, 50))) {
                        // line 51
                        echo "            <div class=\"clearfix visible-sm-block\"></div>
          ";
                    }
                    // line 53
                    echo "
          ";
                    // line 54
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 54) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "md", [], "any", false, false, true, 54))) {
                        // line 55
                        echo "            <div class=\"clearfix visible-md-block\"></div>
          ";
                    }
                    // line 57
                    echo "
          ";
                    // line 58
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 58) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "lg", [], "any", false, false, true, 58))) {
                        // line 59
                        echo "            <div class=\"clearfix visible-lg-block\"></div>
          ";
                    }
                    // line 61
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "  ";
        } else {
            // line 65
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "attributes", [], "any", false, false, true, 65), "addClass", [0 => ($context["row_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 65)) ? (("row-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, true, 65), 65, $this->source))) : (""))], "method", false, false, true, 65), 65, $this->source), "html", null, true);
            echo ">
      ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 67
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 67), "addClass", [0 => ($context["col_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 67)) ? (("col-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 67), 67, $this->source))) : (""))], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                echo ">
          ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 69
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </div>
        ";
                // line 72
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 72) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "xs", [], "any", false, false, true, 72))) {
                    // line 73
                    echo "          <div class=\"clearfix visible-xs-block\"></div>
        ";
                }
                // line 75
                echo "
        ";
                // line 76
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 76) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "sm", [], "any", false, false, true, 76))) {
                    // line 77
                    echo "          <div class=\"clearfix visible-sm-block\"></div>
        ";
                }
                // line 79
                echo "
        ";
                // line 80
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 80) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "md", [], "any", false, false, true, 80))) {
                    // line 81
                    echo "          <div class=\"clearfix visible-md-block\"></div>
        ";
                }
                // line 83
                echo "
        ";
                // line 84
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 84) % twig_get_attribute($this->env, $this->source, ($context["sizes"] ?? null), "lg", [], "any", false, false, true, 84))) {
                    // line 85
                    echo "          <div class=\"clearfix visible-lg-block\"></div>
        ";
                }
                // line 87
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "    </div>
  ";
        }
        // line 90
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 90,  272 => 88,  258 => 87,  254 => 85,  252 => 84,  249 => 83,  245 => 81,  243 => 80,  240 => 79,  236 => 77,  234 => 76,  231 => 75,  227 => 73,  225 => 72,  222 => 71,  213 => 69,  209 => 68,  204 => 67,  187 => 66,  182 => 65,  179 => 64,  164 => 62,  150 => 61,  146 => 59,  144 => 58,  141 => 57,  137 => 55,  135 => 54,  132 => 53,  128 => 51,  126 => 50,  123 => 49,  119 => 47,  117 => 46,  112 => 44,  107 => 43,  90 => 42,  85 => 41,  67 => 40,  65 => 39,  58 => 38,  52 => 36,  50 => 35,  48 => 32,  47 => 31,  46 => 30,  45 => 29,  44 => 27,  42 => 22,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-grid.html.twig", "C:\\xampp\\htdocs\\la_belle\\modules\\views_bootstrap\\templates\\views-bootstrap-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 35, "for" => 40);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
