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

/* modules/views_bootstrap/templates/views-bootstrap-media-object.html.twig */
class __TwigTemplate_beb1d791e78c24e02fc3302f5faf8af13419e046ba24e22577ff7e607077cf76 extends \Twig\Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "<div class=\"media\">

              ";
            // line 6
            if ((($context["image_class"] ?? null) == "media-left")) {
                // line 7
                echo "                  <div class=\"pull-left\">
                      ";
                // line 8
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "
                  </div>
              ";
            }
            // line 11
            echo "
              ";
            // line 12
            if ((($context["image_class"] ?? null) == "media-middle")) {
                // line 13
                echo "                  <div class=\"media-middle\">
                      ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                  </div>
              ";
            }
            // line 17
            echo "
              <div class=\"media-body\">
                    ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["row"], "heading", [], "any", false, false, true, 19)) {
                // line 20
                echo "                          <h3 class=\"media-heading\">
                              ";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "heading", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "
                          </h3>
                    ";
            }
            // line 24
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["row"], "body", [], "any", false, false, true, 24)) {
                // line 25
                echo "                        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "body", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "
                    ";
            }
            // line 27
            echo "
                  ";
            // line 28
            if ((($context["image_class"] ?? null) == "media-right")) {
                // line 29
                echo "                      <div class=\"pull-right\">
                          ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "
                      </div>
                  ";
            }
            // line 33
            echo "
              </div>
          </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-media-object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 37,  117 => 33,  111 => 30,  108 => 29,  106 => 28,  103 => 27,  97 => 25,  94 => 24,  88 => 21,  85 => 20,  83 => 19,  79 => 17,  73 => 14,  70 => 13,  68 => 12,  65 => 11,  59 => 8,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-media-object.html.twig", "C:\\xampp\\htdocs\\la_belle\\modules\\views_bootstrap\\templates\\views-bootstrap-media-object.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "if" => 6);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
