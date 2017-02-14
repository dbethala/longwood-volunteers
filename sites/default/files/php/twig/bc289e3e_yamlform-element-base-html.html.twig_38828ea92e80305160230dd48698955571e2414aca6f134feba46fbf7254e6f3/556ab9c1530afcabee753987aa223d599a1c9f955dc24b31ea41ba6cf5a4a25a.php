<?php

/* modules/yamlform/templates/yamlform-element-base-html.html.twig */
class __TwigTemplate_73e80afc717a34ced5dcf1f9881c95b1994478e03c6aac45c08ba04fb6624160 extends Twig_Template
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
        $__internal_bf8593eef0a3fe2c99462c1fadde907cc22d237254a66075827e765c7052c594 = $this->env->getExtension("native_profiler");
        $__internal_bf8593eef0a3fe2c99462c1fadde907cc22d237254a66075827e765c7052c594->enter($__internal_bf8593eef0a3fe2c99462c1fadde907cc22d237254a66075827e765c7052c594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/yamlform/templates/yamlform-element-base-html.html.twig"));

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
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo "<b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</b><br/>";
        }
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "<br/><br/>
";
        
        $__internal_bf8593eef0a3fe2c99462c1fadde907cc22d237254a66075827e765c7052c594->leave($__internal_bf8593eef0a3fe2c99462c1fadde907cc22d237254a66075827e765c7052c594_prof);

    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-element-base-html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form base element as html.*/
/*  **/
/*  * Available variables:*/
/*  * - element: The element.*/
/*  * - title: The label for the element.*/
/*  * - value: The content for the element.*/
/*  * - options Associative array of options for element.*/
/*  *   - multiline: Flag to determine if value spans multiple lines.*/
/*  *   - email: Flag to determine if element is for an email.*/
/*  *//* */
/* #}*/
/* {% if title %}<b>{{ title }}</b><br/>{% endif %}*/
/* {{ value }}<br/><br/>*/
/* */
