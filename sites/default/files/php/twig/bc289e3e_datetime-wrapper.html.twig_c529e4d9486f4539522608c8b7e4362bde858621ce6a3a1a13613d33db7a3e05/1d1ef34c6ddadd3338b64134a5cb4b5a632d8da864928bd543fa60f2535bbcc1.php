<?php

/* core/themes/classy/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_204a825d608c6c3a5a5d460edd6a60ab9934129cc12fb1b932471a75110faad3 extends Twig_Template
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
        $__internal_946eb1f4209d25d0eba63ed85aa69e6ae9feaa488fc4be48a784558741e7fac5 = $this->env->getExtension("native_profiler");
        $__internal_946eb1f4209d25d0eba63ed85aa69e6ae9feaa488fc4be48a784558741e7fac5->enter($__internal_946eb1f4209d25d0eba63ed85aa69e6ae9feaa488fc4be48a784558741e7fac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/datetime-wrapper.html.twig"));

        $tags = array("set" => 17, "if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 17
        $context["title_classes"] = array(0 => "label", 1 => ((        // line 19
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 23
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 24
            echo "  <h4";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h4>
";
        }
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        // line 27
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 28
            echo "  <div class=\"form-item--error-message\">
    <strong>";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "</strong>
  </div>
";
        }
        // line 32
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 33
            echo "  <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "</div>
";
        }
        
        $__internal_946eb1f4209d25d0eba63ed85aa69e6ae9feaa488fc4be48a784558741e7fac5->leave($__internal_946eb1f4209d25d0eba63ed85aa69e6ae9feaa488fc4be48a784558741e7fac5_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  75 => 32,  69 => 29,  66 => 28,  64 => 27,  60 => 26,  52 => 24,  50 => 23,  48 => 20,  47 => 19,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override of a datetime form wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The form element to be output, usually a datelist, or datetime.*/
/*  * - title: The title of the form element.*/
/*  * - title_attributes: HTML attributes for the title wrapper.*/
/*  * - description: Description text for the form element.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  **/
/*  * @see template_preprocess_datetime_wrapper()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set title_classes = [*/
/*     'label',*/
/*     required ? 'js-form-required',*/
/*     required ? 'form-required',*/
/*   ]*/
/* %}*/
/* {% if title %}*/
/*   <h4{{ title_attributes.addClass(title_classes) }}>{{ title }}</h4>*/
/* {% endif %}*/
/* {{ content }}*/
/* {% if errors %}*/
/*   <div class="form-item--error-message">*/
/*     <strong>{{ errors }}</strong>*/
/*   </div>*/
/* {% endif %}*/
/* {% if description %}*/
/*   <div class="description">{{ description }}</div>*/
/* {% endif %}*/
/* */