<?php

/* modules/yamlform/templates/yamlform-composite-name.html.twig */
class __TwigTemplate_6818b94961d8962c7f7b98b06aef8aa585ed6fa8d2aefa5c6937187af009363b extends Twig_Template
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
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("yamlform/yamlform.element.composite"), "html", null, true));
        echo "
";
        // line 17
        if ((isset($context["flexbox"]) ? $context["flexbox"] : null)) {
            // line 18
            echo "  <div class=\"yamlform-flexbox\">
    ";
            // line 19
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array())) {
                // line 20
                echo "      <div class=\"yamlform-flex yamlform-flex--2\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 22
            echo "    ";
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first", array())) {
                // line 23
                echo "      <div class=\"yamlform-flex yamlform-flex--3\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 25
            echo "    ";
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle", array())) {
                // line 26
                echo "      <div class=\"yamlform-flex yamlform-flex--2\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 28
            echo "    ";
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "last", array())) {
                // line 29
                echo "      <div class=\"yamlform-flex yamlform-flex--3\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "last", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 31
            echo "    ";
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "suffix", array())) {
                // line 32
                echo "      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "suffix", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 34
            echo "    ";
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "degree", array())) {
                // line 35
                echo "      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "degree", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 37
            echo "  </div>
";
        } else {
            // line 39
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
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

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation of a name composite form element.
 *
 * Available variables:
 * - content: The name form element to be output.
 * - flexbox: Determines if Flexbox layout should be applied to the composite
 *   element.
 *
 * @see template_preprocess_yamlform_name()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('yamlform/yamlform.element.composite') }}
{% if flexbox %}
  <div class=\"yamlform-flexbox\">
    {% if content.title %}
      <div class=\"yamlform-flex yamlform-flex--2\"><div class=\"yamlform-flex--container\">{{ content.title }}</div></div>
    {% endif %}
    {% if content.first %}
      <div class=\"yamlform-flex yamlform-flex--3\"><div class=\"yamlform-flex--container\">{{ content.first }}</div></div>
    {% endif %}
    {% if content.middle %}
      <div class=\"yamlform-flex yamlform-flex--2\"><div class=\"yamlform-flex--container\">{{ content.middle }}</div></div>
    {% endif %}
    {% if content.last %}
      <div class=\"yamlform-flex yamlform-flex--3\"><div class=\"yamlform-flex--container\">{{ content.last }}</div></div>
    {% endif %}
    {% if content.suffix %}
      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">{{ content.suffix }}</div></div>
    {% endif %}
    {% if content.degree %}
      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">{{ content.degree }}</div></div>
    {% endif %}
  </div>
{% else %}
  {{ content }}
{% endif %}
";
    }
}
