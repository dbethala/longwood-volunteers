<?php

/* core/themes/classy/templates/field/image-formatter.html.twig */
class __TwigTemplate_b19a7d02c9b8c6179a0c15b0c7d34cc4e3757a814a8bd1184d651dd33ca868e2 extends Twig_Template
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
        $__internal_5769a93c60129717e52c7727fd29d74e3082830d523f4bca651fcd2949d7cfae = $this->env->getExtension("native_profiler");
        $__internal_5769a93c60129717e52c7727fd29d74e3082830d523f4bca651fcd2949d7cfae->enter($__internal_5769a93c60129717e52c7727fd29d74e3082830d523f4bca651fcd2949d7cfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/image-formatter.html.twig"));

        $tags = array("if" => 15);
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

        // line 15
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 16
            echo "  <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
            echo "</a>
";
        } else {
            // line 18
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
            echo "
";
        }
        
        $__internal_5769a93c60129717e52c7727fd29d74e3082830d523f4bca651fcd2949d7cfae->leave($__internal_5769a93c60129717e52c7727fd29d74e3082830d523f4bca651fcd2949d7cfae_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  48 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a formatted image field.*/
/*  **/
/*  * Available variables:*/
/*  * - image: A collection of image data.*/
/*  * - image_style: An optional image style.*/
/*  * - path: An optional array containing the link 'path' and link 'options'.*/
/*  * - url: An optional URL the image can be linked to.*/
/*  **/
/*  * @see template_preprocess_image_formatter()*/
/*  *//* */
/* #}*/
/* {% if url %}*/
/*   <a href="{{ url }}">{{ image }}</a>*/
/* {% else %}*/
/*   {{ image }}*/
/* {% endif %}*/
/* */
