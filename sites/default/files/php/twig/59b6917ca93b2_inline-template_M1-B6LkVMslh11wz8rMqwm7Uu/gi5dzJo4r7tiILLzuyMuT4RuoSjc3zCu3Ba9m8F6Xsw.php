<?php

/* {# inline_template_start #}<a href="https://longwoodgardens.org/volunteering/volunteer-calendar">Online Calendars</a> */
class __TwigTemplate_82246934d1aff6b1af22eda871e57e519fe8d905846022638160d69944097059 extends Twig_Template
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
        echo "<a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a>";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a>";
    }
}
