<?php

/* modules/responsive_menu/templates/responsive-menu-block-toggle.html.twig */
class __TwigTemplate_e5f9115388644d6ce331bff6cbc59c39dac0423e83a8a437234e22d528062bf5 extends Twig_Template
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
        $__internal_68841503c3f30d8acc8aac005652e193fb519dd1bc28ebb8a19adb52577f30e8 = $this->env->getExtension("native_profiler");
        $__internal_68841503c3f30d8acc8aac005652e193fb519dd1bc28ebb8a19adb52577f30e8->enter($__internal_68841503c3f30d8acc8aac005652e193fb519dd1bc28ebb8a19adb52577f30e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/responsive_menu/templates/responsive-menu-block-toggle.html.twig"));

        $tags = array();
        $filters = array("t" => 8);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('t'),
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

        // line 7
        echo "<a id=\"toggle-icon\" class=\"toggle responsive-menu-toggle-icon\" title=\"Menu\" href=\"#off-canvas\">
  <span class=\"icon\"></span><span class=\"label\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Menu")));
        echo "</span>
</a>";
        
        $__internal_68841503c3f30d8acc8aac005652e193fb519dd1bc28ebb8a19adb52577f30e8->leave($__internal_68841503c3f30d8acc8aac005652e193fb519dd1bc28ebb8a19adb52577f30e8_prof);

    }

    public function getTemplateName()
    {
        return "modules/responsive_menu/templates/responsive-menu-block-toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  46 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to output the menu toggle icon (burger).*/
/*  *//* */
/* #}*/
/* <a id="toggle-icon" class="toggle responsive-menu-toggle-icon" title="Menu" href="#off-canvas">*/
/*   <span class="icon"></span><span class="label">{{ 'Menu'|t }}</span>*/
/* </a>*/
