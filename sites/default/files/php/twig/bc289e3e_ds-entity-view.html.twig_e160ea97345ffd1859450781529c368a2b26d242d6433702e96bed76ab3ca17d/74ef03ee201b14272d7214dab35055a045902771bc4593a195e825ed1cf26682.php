<?php

/* modules/ds/templates/ds-entity-view.html.twig */
class __TwigTemplate_951647f19028f2688b113245d3c347977f15795b5a4dea22a9bca61987e976e6 extends Twig_Template
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
        $__internal_567bbfd6bfcf7628045eaddc61a1c4d1e1c00084c5419ebf653d251cc9a20d81 = $this->env->getExtension("native_profiler");
        $__internal_567bbfd6bfcf7628045eaddc61a1c4d1e1c00084c5419ebf653d251cc9a20d81->enter($__internal_567bbfd6bfcf7628045eaddc61a1c4d1e1c00084c5419ebf653d251cc9a20d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/ds/templates/ds-entity-view.html.twig"));

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

        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_567bbfd6bfcf7628045eaddc61a1c4d1e1c00084c5419ebf653d251cc9a20d81->leave($__internal_567bbfd6bfcf7628045eaddc61a1c4d1e1c00084c5419ebf653d251cc9a20d81_prof);

    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-entity-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Entity View*/
/*  **/
/*  * Available variables:*/
/*  * - content: The render array which contains the layout*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */
