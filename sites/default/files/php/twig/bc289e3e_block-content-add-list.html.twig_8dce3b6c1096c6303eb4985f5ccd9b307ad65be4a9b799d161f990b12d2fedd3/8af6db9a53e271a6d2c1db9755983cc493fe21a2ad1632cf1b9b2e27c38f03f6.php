<?php

/* core/themes/seven/templates/block-content-add-list.html.twig */
class __TwigTemplate_0833495ea6c31df0ec829029f40ff38e8bd0ce097a6a4604f02a87420fc91f54 extends Twig_Template
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
        $__internal_bccc935033129a330abf0185404688da788e71777c739b870280376d192589b6 = $this->env->getExtension("native_profiler");
        $__internal_bccc935033129a330abf0185404688da788e71777c739b870280376d192589b6->enter($__internal_bccc935033129a330abf0185404688da788e71777c739b870280376d192589b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block-content-add-list.html.twig"));

        $tags = array("for" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 20
        echo "<ul class=\"admin-list\">
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 22
            echo "    <li class=\"clearfix\">
      <a href=\"";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "url", array()), "html", null, true));
            echo "\"><span class=\"label\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true));
            echo "</span><div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true));
            echo "</div></a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
        
        $__internal_bccc935033129a330abf0185404688da788e71777c739b870280376d192589b6->leave($__internal_bccc935033129a330abf0185404688da788e71777c739b870280376d192589b6_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block-content-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  56 => 23,  53 => 22,  49 => 21,  46 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Seven's theme implementation to display a list of custom block types.*/
/*  **/
/*  * Displays the list of available custom block types for creation.*/
/*  **/
/*  * Available variables:*/
/*  * - types: A collection of all the available custom block types.*/
/*  *   Each type contains:*/
/*  *   - url: A link to add a block of this type.*/
/*  *   - description: A description of this custom block type.*/
/*  *   - label: The title of the custom block type.*/
/*  *   - path: A path for the link to add a block of this type.*/
/*  **/
/*  * @see template_preprocess_block_content_add_list()*/
/*  * @see seven_preprocess_block_content_add_list()*/
/*  *//* */
/*  #}*/
/* <ul class="admin-list">*/
/*   {% for type in types %}*/
/*     <li class="clearfix">*/
/*       <a href="{{ type.url }}"><span class="label">{{ type.label }}</span><div class="description">{{ type.description }}</div></a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
