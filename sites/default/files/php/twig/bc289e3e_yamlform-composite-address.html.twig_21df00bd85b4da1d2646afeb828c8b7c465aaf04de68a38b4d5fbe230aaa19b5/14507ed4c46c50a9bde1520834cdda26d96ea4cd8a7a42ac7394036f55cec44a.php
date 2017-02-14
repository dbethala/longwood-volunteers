<?php

/* modules/yamlform/templates/yamlform-composite-address.html.twig */
class __TwigTemplate_b3d97d4f404311d6720769b4e1f758951ba0e4b776a28753c3bf206bd31b2602 extends Twig_Template
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
        $__internal_f332a1c569efbc24b833c900fe538865e7b60a85f6f0b6f10f843792d95f40ef = $this->env->getExtension("native_profiler");
        $__internal_f332a1c569efbc24b833c900fe538865e7b60a85f6f0b6f10f843792d95f40ef->enter($__internal_f332a1c569efbc24b833c900fe538865e7b60a85f6f0b6f10f843792d95f40ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/yamlform/templates/yamlform-composite-address.html.twig"));

        $tags = array("if" => 17);
        $filters = array();
        $functions = array("attach_library" => 16);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("yamlform/yamlform.element.composite"), "html", null, true));
        echo "
";
        // line 17
        if ((isset($context["flexbox"]) ? $context["flexbox"] : null)) {
            // line 18
            echo "
  ";
            // line 19
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "address", array())) {
                // line 20
                echo "    <div class=\"yamlform-flexbox\">
      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "address", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 24
            echo "
  ";
            // line 25
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "address_2", array())) {
                // line 26
                echo "    <div class=\"yamlform-flexbox\">
      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "address_2", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 30
            echo "
  <div class=\"yamlform-flexbox\">
    ";
            // line 32
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "city", array())) {
                // line 33
                echo "      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "city", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 35
            echo "    ";
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "state_province", array())) {
                // line 36
                echo "      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "state_province", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 38
            echo "    ";
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "postal_code", array())) {
                // line 39
                echo "      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "postal_code", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 41
            echo "  </div>

  ";
            // line 43
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "country", array())) {
                // line 44
                echo "    <div class=\"yamlform-flexbox\">
      <div class=\"yamlform-flex yamlform-flex--1\"><div class=\"yamlform-flex--container\">";
                // line 45
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "country", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 48
            echo "
";
        } else {
            // line 50
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
";
        }
        
        $__internal_f332a1c569efbc24b833c900fe538865e7b60a85f6f0b6f10f843792d95f40ef->leave($__internal_f332a1c569efbc24b833c900fe538865e7b60a85f6f0b6f10f843792d95f40ef_prof);

    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-composite-address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  125 => 48,  119 => 45,  116 => 44,  114 => 43,  110 => 41,  104 => 39,  101 => 38,  95 => 36,  92 => 35,  86 => 33,  84 => 32,  80 => 30,  74 => 27,  71 => 26,  69 => 25,  66 => 24,  60 => 21,  57 => 20,  55 => 19,  52 => 18,  50 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of an address composite form element.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The address form element to be output.*/
/*  * - flexbox: Determines if Flexbox layout should be applied to the composite*/
/*  *   element.*/
/*  **/
/*  * @see template_preprocess_yamlform_name()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('yamlform/yamlform.element.composite') }}*/
/* {% if flexbox %}*/
/* */
/*   {% if content.address %}*/
/*     <div class="yamlform-flexbox">*/
/*       <div class="yamlform-flex yamlform-flex--1"><div class="yamlform-flex--container">{{ content.address }}</div></div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if content.address_2 %}*/
/*     <div class="yamlform-flexbox">*/
/*       <div class="yamlform-flex yamlform-flex--1"><div class="yamlform-flex--container">{{ content.address_2 }}</div></div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <div class="yamlform-flexbox">*/
/*     {% if content.city %}*/
/*       <div class="yamlform-flex yamlform-flex--1"><div class="yamlform-flex--container">{{ content.city }}</div></div>*/
/*     {% endif %}*/
/*     {% if content.state_province %}*/
/*       <div class="yamlform-flex yamlform-flex--1"><div class="yamlform-flex--container">{{ content.state_province }}</div></div>*/
/*     {% endif %}*/
/*     {% if content.postal_code %}*/
/*       <div class="yamlform-flex yamlform-flex--1"><div class="yamlform-flex--container">{{ content.postal_code }}</div></div>*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   {% if content.country %}*/
/*     <div class="yamlform-flexbox">*/
/*       <div class="yamlform-flex yamlform-flex--1"><div class="yamlform-flex--container">{{ content.country }}</div></div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* {% else %}*/
/*   {{ content }}*/
/* {% endif %}*/
/* */
