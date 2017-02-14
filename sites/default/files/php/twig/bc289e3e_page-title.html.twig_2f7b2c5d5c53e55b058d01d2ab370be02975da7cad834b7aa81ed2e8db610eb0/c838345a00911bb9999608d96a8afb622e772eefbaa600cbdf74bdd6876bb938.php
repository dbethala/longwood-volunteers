<?php

/* @classy/content/page-title.html.twig */
class __TwigTemplate_19274ab96bb0d945b0f793c77eb264298e7385d51870163d354616f7ef6bd92c extends Twig_Template
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
        $__internal_c8ab602090413671d4306411ba2faf7dbbe4fdab73cdb190cbb916da5ea86f46 = $this->env->getExtension("native_profiler");
        $__internal_c8ab602090413671d4306411ba2faf7dbbe4fdab73cdb190cbb916da5ea86f46->enter($__internal_c8ab602090413671d4306411ba2faf7dbbe4fdab73cdb190cbb916da5ea86f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@classy/content/page-title.html.twig"));

        $tags = array("if" => 16);
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
";
        // line 16
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 17
            echo "  <h1";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "page-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
";
        }
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
";
        
        $__internal_c8ab602090413671d4306411ba2faf7dbbe4fdab73cdb190cbb916da5ea86f46->leave($__internal_c8ab602090413671d4306411ba2faf7dbbe4fdab73cdb190cbb916da5ea86f46_prof);

    }

    public function getTemplateName()
    {
        return "@classy/content/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  52 => 17,  50 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for page titles.*/
/*  **/
/*  * Available variables:*/
/*  * - title_attributes: HTML attributes for the page title element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  *//* */
/* #}*/
/* {{ title_prefix }}*/
/* {% if title %}*/
/*   <h1{{ title_attributes.addClass('page-title') }}>{{ title }}</h1>*/
/* {% endif %}*/
/* {{ title_suffix }}*/
/* */
