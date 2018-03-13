<?php

/* modules/yamlform/templates/yamlform-composite-name.html.twig */
class __TwigTemplate_d63c53914dd8aec842d3f0574606bcf728b64e70654463e8ff18162e6bfd1b20 extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array();
        $functions = array("attach_library" => 16);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("yamlform/yamlform.element.composite"), "html", null, true));
        echo "
";
        // line 17
        if (($context["flexbox"] ?? null)) {
            // line 18
            echo "  <div class=\"yamlform-flexbox\">
    ";
            // line 19
            if ($this->getAttribute(($context["content"] ?? null), "title", array())) {
                // line 20
                echo "      <div class=\"yamlform-flex yamlform-flex--2\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "title", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 22
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "first", array())) {
                // line 23
                echo "      <div class=\"yamlform-flex yamlform-flex--3\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "first", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 25
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "middle", array())) {
                // line 26
                echo "      <div class=\"yamlform-flex yamlform-flex--2\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "middle", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 28
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "last", array())) {
                // line 29
                echo "      <div class=\"yamlform-flex yamlform-flex--3\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "last", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 31
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "suffix", array())) {
                // line 32
                echo "      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "suffix", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 34
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "degree", array())) {
                // line 35
                echo "      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "degree", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 37
            echo "  </div>
";
        } else {
            // line 39
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-composite-name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  105 => 37,  99 => 35,  96 => 34,  90 => 32,  87 => 31,  81 => 29,  78 => 28,  72 => 26,  69 => 25,  63 => 23,  60 => 22,  54 => 20,  52 => 19,  49 => 18,  47 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/yamlform/templates/yamlform-composite-name.html.twig", "/var/www/html/volunteer.longwoodgardens.org/modules/yamlform/templates/yamlform-composite-name.html.twig");
    }
}
