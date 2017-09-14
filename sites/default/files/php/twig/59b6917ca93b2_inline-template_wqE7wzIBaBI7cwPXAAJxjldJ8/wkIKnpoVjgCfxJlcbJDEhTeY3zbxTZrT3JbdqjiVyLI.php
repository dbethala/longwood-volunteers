<?php

/* {# inline_template_start #}<div class="banner" id="resources-banner">
<h1 class="banner-title" id="resources-title">
Enrichment
</h1>
<img class="banner-image" id="resources-banner-image"> {{ field_image }} </img>
</div> */
class __TwigTemplate_f66709b8e185158ccdd6d2b04726cc9ab8451e36ab6815218956711204a7cc5f extends Twig_Template
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
        echo "<div class=\"banner\" id=\"resources-banner\">
<h1 class=\"banner-title\" id=\"resources-title\">
Enrichment
</h1>
<img class=\"banner-image\" id=\"resources-banner-image\"> ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo " </img>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"banner\" id=\"resources-banner\">
<h1 class=\"banner-title\" id=\"resources-title\">
Enrichment
</h1>
<img class=\"banner-image\" id=\"resources-banner-image\"> {{ field_image }} </img>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  48 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"banner\" id=\"resources-banner\">
<h1 class=\"banner-title\" id=\"resources-title\">
Enrichment
</h1>
<img class=\"banner-image\" id=\"resources-banner-image\"> {{ field_image }} </img>
</div>";
    }
}
