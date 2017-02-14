<?php

/* core/themes/stable/templates/admin/system-config-form.html.twig */
class __TwigTemplate_c734b2c993cd3f558040d6ad918b6cae99eaf6903071c5c73f12edf564b120e3 extends Twig_Template
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
        $__internal_45dc952eb0e21766a3f8a29fb8cf407f5043ba2004b268067c4b42b65f46048e = $this->env->getExtension("native_profiler");
        $__internal_45dc952eb0e21766a3f8a29fb8cf407f5043ba2004b268067c4b42b65f46048e->enter($__internal_45dc952eb0e21766a3f8a29fb8cf407f5043ba2004b268067c4b42b65f46048e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/system-config-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
";
        
        $__internal_45dc952eb0e21766a3f8a29fb8cf407f5043ba2004b268067c4b42b65f46048e->leave($__internal_45dc952eb0e21766a3f8a29fb8cf407f5043ba2004b268067c4b42b65f46048e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-config-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a system settings form.*/
/*  **/
/*  * This template will be used when a system config form specifies 'config_form'*/
/*  * as its #theme callback.  Otherwise, by default, system config forms will be*/
/*  * themed by form.html.twig. This does not alter the appearance of a form at all,*/
/*  * but is provided as a convenience for themers.*/
/*  **/
/*  * Available variables:*/
/*  * - form: The confirm form.*/
/*  *//* */
/* #}*/
/* {{ form }}*/
/* */
