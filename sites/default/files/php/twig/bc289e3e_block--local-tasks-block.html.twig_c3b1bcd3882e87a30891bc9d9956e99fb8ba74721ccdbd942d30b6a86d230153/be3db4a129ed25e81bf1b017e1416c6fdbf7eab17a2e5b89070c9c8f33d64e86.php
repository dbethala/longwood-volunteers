<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_b701294ab18b9b657d2d02c6d2593f2f543e86fd0866025786df6b1eaaf30f64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fd304c3c9aff1b542f4310a144415e7e442ab39611b1b3773d4d28059ccda79 = $this->env->getExtension("native_profiler");
        $__internal_4fd304c3c9aff1b542f4310a144415e7e442ab39611b1b3773d4d28059ccda79->enter($__internal_4fd304c3c9aff1b542f4310a144415e7e442ab39611b1b3773d4d28059ccda79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd304c3c9aff1b542f4310a144415e7e442ab39611b1b3773d4d28059ccda79->leave($__internal_4fd304c3c9aff1b542f4310a144415e7e442ab39611b1b3773d4d28059ccda79_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0bc9f66c0cba1d2771b5d5b84c25b4959b28fbe371e5b5b457a0232d2a82a09 = $this->env->getExtension("native_profiler");
        $__internal_f0bc9f66c0cba1d2771b5d5b84c25b4959b28fbe371e5b5b457a0232d2a82a09->enter($__internal_f0bc9f66c0cba1d2771b5d5b84c25b4959b28fbe371e5b5b457a0232d2a82a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_f0bc9f66c0cba1d2771b5d5b84c25b4959b28fbe371e5b5b457a0232d2a82a09->leave($__internal_f0bc9f66c0cba1d2771b5d5b84c25b4959b28fbe371e5b5b457a0232d2a82a09_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
