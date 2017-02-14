<?php

/* modules/responsive_menu/templates/responsive-menu-block-wrapper.html.twig */
class __TwigTemplate_55fb71008fb92db1bfc47b490375c6cbacbbaa443399ac3ad80da1d8362002c9 extends Twig_Template
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
        $__internal_4d60078108427f937174e20d895b523775c1dab29468027bfdf0394b34542114 = $this->env->getExtension("native_profiler");
        $__internal_4d60078108427f937174e20d895b523775c1dab29468027bfdf0394b34542114->enter($__internal_4d60078108427f937174e20d895b523775c1dab29468027bfdf0394b34542114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/responsive_menu/templates/responsive-menu-block-wrapper.html.twig"));

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
        echo "<nav class=\"responsive-menu-block-wrapper\">
  ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</nav>";
        
        $__internal_4d60078108427f937174e20d895b523775c1dab29468027bfdf0394b34542114->leave($__internal_4d60078108427f937174e20d895b523775c1dab29468027bfdf0394b34542114_prof);

    }

    public function getTemplateName()
    {
        return "modules/responsive_menu/templates/responsive-menu-block-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to wrap the output of the menu.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The menu content to be rendered.*/
/*  *//* */
/* #}*/
/* <nav class="responsive-menu-block-wrapper">*/
/*   {{ content }}*/
/* </nav>*/
