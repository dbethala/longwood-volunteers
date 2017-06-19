<?php

/* modules/jssor/templates/views-view-jssor.html.twig */
class __TwigTemplate_ad588b5a5551e637e697b1399122314857aebbc578dab60c3f4c85960599d93d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 23, "for" => 32);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 22
        echo "
";
        // line 23
        if (($context["title"] ?? null)) {
            // line 24
            echo "  <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
";
        }
        // line 26
        echo "

<div id=\"";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slider_id"] ?? null), "html", null, true));
        echo "\" style=\"position: relative; margin: 0 auto; top: 0; left: 0; width: 1300px; height: 600px; overflow: hidden;\">

  <!-- Slides Container -->
  <div data-u=\"slides\" style=\"cursor: move; position: absolute; left: 0; top: 0; width: 1300px; height: 600px; overflow: hidden;\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            echo "      <div>
        ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </div>

  <!-- Bullet navigator -->
  ";
        // line 40
        if (($context["bulletnavigator"] ?? null)) {
            // line 41
            echo "    <div u=\"navigator\" class=\"jssorb";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bulletskin"] ?? null), "html", null, true));
            echo "\" style=\"position: absolute; bottom: 16px; right: 6px;\">
      <div u=\"prototype\" style=\"position: absolute; width: 16px; height: 16px;\"></div>
    </div>
  ";
        }
        // line 45
        echo "
  <!-- Arrows navigator -->
  ";
        // line 47
        if (($context["arrownavigator"] ?? null)) {
            // line 48
            echo "    <span data-u=\"arrowleft\" class=\"jssora";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["arrowskin"] ?? null), "html", null, true));
            echo "l\"></span>
    <span data-u=\"arrowright\" class=\"jssora";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["arrowskin"] ?? null), "html", null, true));
            echo "r\"></span>
  ";
        }
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/jssor/templates/views-view-jssor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  107 => 49,  102 => 48,  100 => 47,  96 => 45,  88 => 41,  86 => 40,  81 => 37,  72 => 34,  69 => 33,  65 => 32,  58 => 28,  54 => 26,  48 => 24,  46 => 23,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/jssor/templates/views-view-jssor.html.twig", "/var/www/html/volunteer.longwoodgardens.org/modules/jssor/templates/views-view-jssor.html.twig");
    }
}
