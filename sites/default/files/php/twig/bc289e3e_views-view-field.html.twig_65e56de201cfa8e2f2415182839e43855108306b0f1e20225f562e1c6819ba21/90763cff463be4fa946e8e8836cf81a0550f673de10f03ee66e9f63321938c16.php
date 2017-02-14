<?php

/* core/themes/stable/templates/views/views-view-field.html.twig */
class __TwigTemplate_6a8c0b36a74b222f1826491f0513e3d332643f18bccc586a7fd9c6446c0e9719 extends Twig_Template
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
        $__internal_f94a325d9a1bff458926fb172531b6b80faf133b913ba03c7e1b12c2c0753ace = $this->env->getExtension("native_profiler");
        $__internal_f94a325d9a1bff458926fb172531b6b80faf133b913ba03c7e1b12c2c0753ace->enter($__internal_f94a325d9a1bff458926fb172531b6b80faf133b913ba03c7e1b12c2c0753ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/views/views-view-field.html.twig"));

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

        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["output"]) ? $context["output"] : null), "html", null, true));
        
        $__internal_f94a325d9a1bff458926fb172531b6b80faf133b913ba03c7e1b12c2c0753ace->leave($__internal_f94a325d9a1bff458926fb172531b6b80faf133b913ba03c7e1b12c2c0753ace_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/views/views-view-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a single field in a view.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view that the field belongs to.*/
/*  * - field: The field handler that can process the input.*/
/*  * - row: The raw result of the database query that generated this field.*/
/*  * - output: The processed output that will normally be used.*/
/*  **/
/*  * When fetching output from the row this construct should be used:*/
/*  * data = row[field.field_alias]*/
/*  **/
/*  * The above will guarantee that you'll always get the correct data, regardless*/
/*  * of any changes in the aliasing that might happen if the view is modified.*/
/*  **/
/*  * @see template_preprocess_views_view_field()*/
/*  *//* */
/* #}*/
/* {{ output -}}*/
/* */
