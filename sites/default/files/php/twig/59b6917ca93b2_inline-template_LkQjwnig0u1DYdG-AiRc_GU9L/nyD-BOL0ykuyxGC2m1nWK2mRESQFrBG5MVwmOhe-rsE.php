<?php

/* {# inline_template_start #}<div id="quick-links">
<li>
<a href="https://longwoodgardens.org/volunteering/volunteer-calendar">Online Calendars</a></li> */
class __TwigTemplate_266ec0177a0c7d57014b5d15e4457fed6ea673e2ca73c3e3fe686e6d3c0283df extends Twig_Template
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

        // line 1
        echo "<div id=\"quick-links\">
<li>
<a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a></li>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div id=\"quick-links\">
<li>
<a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a></li>";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div id=\"quick-links\">
<li>
<a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a></li>";
    }
}
