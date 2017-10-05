<?php

/* modules/yamlform/templates/yamlform-confirmation.html.twig */
class __TwigTemplate_6c31917c2e6b9948bd14c8acab74224aecc643caed92582e1b548b57095319da extends Twig_Template
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
        $tags = array("if" => 18);
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("yamlform/yamlform.confirmation"), "html", null, true));
        echo "
<div";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "yamlform-confirmation"), "method"), "html", null, true));
        echo ">
  ";
        // line 18
        if ((isset($context["progress"]) ? $context["progress"] : null)) {
            // line 19
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["progress"]) ? $context["progress"] : null), "html", null, true));
            echo "
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 23
            echo "    <div class=\"yamlform-confirmation__message\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
            echo "</div>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if ((isset($context["back"]) ? $context["back"] : null)) {
            // line 27
            echo "  <div class=\"yamlform-confirmation__back\">
    <a href=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["back_url"]) ? $context["back_url"] : null), "html", null, true));
            echo "\" rel=\"back\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["back_label"]) ? $context["back_label"] : null), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["back_attributes"]) ? $context["back_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["back_label"]) ? $context["back_label"] : null), "html", null, true));
            echo "</a>
  </div>
  ";
        }
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  78 => 28,  75 => 27,  73 => 26,  70 => 25,  64 => 23,  62 => 22,  59 => 21,  53 => 19,  51 => 18,  47 => 17,  43 => 16,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to form confirmation.
 *
 * Available variables:
 * - progress: Progress bar.
 * - message: Confirmation message.
 * - back_url: URL to the previous form submission.
 *
 * @see template_preprocess_yamlform_confirmation()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('yamlform/yamlform.confirmation') }}
<div{{ attributes.addClass('yamlform-confirmation') }}>
  {% if progress %}
    {{ progress }}
  {% endif %}

  {% if message %}
    <div class=\"yamlform-confirmation__message\">{{ message }}</div>
  {% endif %}

  {% if back %}
  <div class=\"yamlform-confirmation__back\">
    <a href=\"{{ back_url }}\" rel=\"back\" title=\"{{ back_label }}\"{{ back_attributes }}>{{ back_label }}</a>
  </div>
  {% endif %}
</div>
";
    }
}
