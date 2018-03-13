<?php

/* {# inline_template_start #}<div class="page-banners" id="scheduling-page-banner">
<div id="banner-image-scheduling">
<img class="banner-imgs" {{ field_image }} </img>
<h1 class="page-titles" id="scheduling-page-title">Scheduling</h1>
</div>
</div> */
class __TwigTemplate_a8b5170ff64e979ff34060180f4f81328c834bcd9fad49704870da3b74a23883 extends Twig_Template
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
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        echo "<div class=\"page-banners\" id=\"scheduling-page-banner\">
<div id=\"banner-image-scheduling\">
<img class=\"banner-imgs\" ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo " </img>
<h1 class=\"page-titles\" id=\"scheduling-page-title\">Scheduling</h1>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"page-banners\" id=\"scheduling-page-banner\">
<div id=\"banner-image-scheduling\">
<img class=\"banner-imgs\" {{ field_image }} </img>
<h1 class=\"page-titles\" id=\"scheduling-page-title\">Scheduling</h1>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 3,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"page-banners\" id=\"scheduling-page-banner\">
<div id=\"banner-image-scheduling\">
<img class=\"banner-imgs\" {{ field_image }} </img>
<h1 class=\"page-titles\" id=\"scheduling-page-title\">Scheduling</h1>
</div>
</div>", "");
    }
}
