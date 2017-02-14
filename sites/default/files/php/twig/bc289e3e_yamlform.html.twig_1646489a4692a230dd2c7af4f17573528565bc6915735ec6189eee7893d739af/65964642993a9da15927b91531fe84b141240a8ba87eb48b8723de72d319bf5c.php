<?php

/* modules/yamlform/templates/yamlform.html.twig */
class __TwigTemplate_776cf2053443512a0230f2ac463251cc372d9ac5bd381f2f8a45424d51e8c8c7 extends Twig_Template
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
        $__internal_607d1663b28e5b4053f7791f7126e5636d6d7f1de1c17ae56cc35082f3917016 = $this->env->getExtension("native_profiler");
        $__internal_607d1663b28e5b4053f7791f7126e5636d6d7f1de1c17ae56cc35082f3917016->enter($__internal_607d1663b28e5b4053f7791f7126e5636d6d7f1de1c17ae56cc35082f3917016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/yamlform/templates/yamlform.html.twig"));

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

        // line 24
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
</form>
";
        
        $__internal_607d1663b28e5b4053f7791f7126e5636d6d7f1de1c17ae56cc35082f3917016->leave($__internal_607d1663b28e5b4053f7791f7126e5636d6d7f1de1c17ae56cc35082f3917016_prof);

    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 27,  55 => 26,  51 => 25,  46 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme implementation for a 'yamlform' element.*/
/*  **/
/*  * This is an copy of the form.html.twig theme_wrapper which includes the*/
/*  * 'title_prefix' and 'title_suffix' variables needed for*/
/*  * contextual links to appear.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The child elements of the form.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_yamlform()*/
/*  * @see _yamlform_form_after_build()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <form{{ attributes }}>*/
/*   {{ title_prefix }}*/
/*   {{ children }}*/
/*   {{ title_suffix }}*/
/* </form>*/
/* */