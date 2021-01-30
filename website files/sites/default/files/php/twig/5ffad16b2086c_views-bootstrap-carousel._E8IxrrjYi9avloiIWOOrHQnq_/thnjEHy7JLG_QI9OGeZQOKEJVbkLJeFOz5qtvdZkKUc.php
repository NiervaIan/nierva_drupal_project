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

/* modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_426efdc0edb560ee672242edcb6c657e9d804669c33fcacac2d7a0df3e49f268 extends \Twig\Template
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
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views_bootstrap/components"), "html", null, true);
        echo "

<div id=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 24, $this->source), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null), 24, $this->source), "html", null, true);
        echo "\" data-pause=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pause"] ?? null), 24, $this->source), "html", null, true);
        echo "\" data-wrap=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrap"] ?? null), 24, $this->source), "html", null, true);
        echo "\">

  ";
        // line 27
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 28
            echo "    <ol class=\"carousel-indicators\">
      ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 30
                echo "        ";
                $context["indicator_classes"] = [0 => ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 30)) ? ("active") : (""))];
                // line 31
                echo "        <li class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null), 31, $this->source), " "), "html", null, true);
                echo "\" data-target=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 31, $this->source), "html", null, true);
                echo "\" data-slide-to=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 31, $this->source), "html", null, true);
                echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </ol>
  ";
        }
        // line 35
        echo "
  ";
        // line 37
        echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
            // line 39
            echo "      ";
            $context["row_classes"] = [0 => "item", 1 => ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 39)) ? ("active") : (""))];
            // line 40
            echo "      <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 40), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">
        ";
            // line 41
            if ((($context["display"] ?? null) == "fields")) {
                // line 42
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "
        ";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 43) || twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 43))) {
                    // line 44
                    echo "          <div class=\"carousel-caption\">
            ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 45)) {
                        // line 46
                        echo "              <h3>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                        echo "</h3>
            ";
                    }
                    // line 48
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 48)) {
                        // line 49
                        echo "              <p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        echo "</p>
            ";
                    }
                    // line 51
                    echo "          </div>
        ";
                }
                // line 53
                echo "        ";
            } else {
                // line 54
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 56
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
        // line 58
        echo "  </div>

  ";
        // line 61
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 62
            echo "    <a class=\"left carousel-control\" href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 62, $this->source), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
            echo "</span>
    </a>
    <a class=\"right carousel-control\" href=\"#";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 66, $this->source), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
            echo "</span>
    </a>
  ";
        }
        // line 71
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 71,  217 => 68,  212 => 66,  207 => 64,  201 => 62,  198 => 61,  194 => 58,  179 => 56,  173 => 54,  170 => 53,  166 => 51,  160 => 49,  157 => 48,  151 => 46,  149 => 45,  146 => 44,  144 => 43,  139 => 42,  137 => 41,  132 => 40,  129 => 39,  112 => 38,  109 => 37,  106 => 35,  102 => 33,  81 => 31,  78 => 30,  61 => 29,  58 => 28,  55 => 27,  44 => 24,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig", "C:\\xampp\\htdocs\\la_belle\\modules\\views_bootstrap\\templates\\views-bootstrap-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 27, "for" => 29, "set" => 30);
        static $filters = array("escape" => 22, "join" => 31, "t" => 64);
        static $functions = array("attach_library" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
                ['attach_library']
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
