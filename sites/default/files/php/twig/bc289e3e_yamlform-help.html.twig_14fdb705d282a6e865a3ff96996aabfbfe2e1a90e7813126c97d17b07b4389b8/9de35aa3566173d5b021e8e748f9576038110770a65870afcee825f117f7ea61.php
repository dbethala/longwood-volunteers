<?php

/* modules/yamlform/templates/yamlform-help.html.twig */
class __TwigTemplate_615abd5ec94ed577aa8ac29e588a1518fb49ae8510712f4a10502ec5866fc9a6 extends Twig_Template
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
        $__internal_fc12a49deb63104e656cd8e21e7660df2510202e46ee894507b11bc76ac27976 = $this->env->getExtension("native_profiler");
        $__internal_fc12a49deb63104e656cd8e21e7660df2510202e46ee894507b11bc76ac27976->enter($__internal_fc12a49deb63104e656cd8e21e7660df2510202e46ee894507b11bc76ac27976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/yamlform/templates/yamlform-help.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 17);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library')
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

        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("yamlform/yamlform.help"), "html", null, true));
        echo "
";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true));
        echo "
";
        
        $__internal_fc12a49deb63104e656cd8e21e7660df2510202e46ee894507b11bc76ac27976->leave($__internal_fc12a49deb63104e656cd8e21e7660df2510202e46ee894507b11bc76ac27976_prof);

    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme implementation for form help.*/
/*  **/
/*  * Available variables*/
/*  * - title: Help title.*/
/*  * - content: Help content.*/
/*  * - youtube_id: YouTube video id.*/
/*  * - help: A render array content help title and content inside a details element.*/
/*  **/
/*  * @see template_preprocess_yamlform_help()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('yamlform/yamlform.help') }}*/
/* {{ help }}*/
/* */