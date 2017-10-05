<?php

/* modules/fontyourface/templates/font--teaser.html.twig */
class __TwigTemplate_86fc29ccd50797ce821e2c333838349b55f35871d2200b5e7b93686e0d81b857 extends Twig_Template
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
        $tags = array("if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
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

        // line 18
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <div class=\"fontyourface-header\">
    <h4>";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["font_title"]) ? $context["font_title"] : null), "html", null, true));
        echo "</h4>
    <h5>";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "pid", array()), "html", null, true));
        echo "</h5>
  </div>
  <div class=\"fontyourface-preview\">
    ";
        // line 24
        if ((isset($context["font_preview"]) ? $context["font_preview"] : null)) {
            // line 25
            echo "      <span class=\"fontyourface-preview\" style=\"line-height: 40px\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["font_preview"]) ? $context["font_preview"] : null), "html", null, true));
            echo "</span>
    ";
        } else {
            // line 27
            echo "      <span class=\"fontyourface-preview\" style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["font_style_inline"]) ? $context["font_style_inline"] : null), "html", null, true));
            echo " font-size: 40px; line-height: 40px\">AaGg</span>
    ";
        }
        // line 29
        echo "  </div>
  <div class=\"fontyourface-operations\">
    ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["operation_links"]) ? $context["operation_links"] : null), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/fontyourface/templates/font--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  73 => 29,  67 => 27,  61 => 25,  59 => 24,  53 => 21,  49 => 20,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file font.html.twig
 * Default theme implementation to present Font data.
 *
 * This template is used when viewing Font pages.
 *
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 * - attributes: HTML attributes for the container element.
 *
 * @see template_preprocess_font()
 *
 * @ingroup themeable
 */
#}
<div{{ attributes }}>
  <div class=\"fontyourface-header\">
    <h4>{{ font_title }}</h4>
    <h5>{{- content.pid }}</h5>
  </div>
  <div class=\"fontyourface-preview\">
    {% if font_preview %}
      <span class=\"fontyourface-preview\" style=\"line-height: 40px\">{{- font_preview }}</span>
    {% else %}
      <span class=\"fontyourface-preview\" style=\"{{- font_style_inline }} font-size: 40px; line-height: 40px\">AaGg</span>
    {% endif %}
  </div>
  <div class=\"fontyourface-operations\">
    {{ operation_links }}
  </div>
</div>
";
    }
}
