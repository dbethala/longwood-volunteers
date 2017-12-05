<?php

/* {# inline_template_start #}<div class="banner" id="tools-banner">
<h1 class="banner-title" id="tools-title">
Volunteer Services
</h1>
<img class="banner-image" id="tools-banner-image"> {{ field_image }} </img>
</div> */
class __TwigTemplate_628d99d82a17e1d072e5f40c1614048043a22724aa67e93adc838a735e566efd extends Twig_Template
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
        echo "<div class=\"banner\" id=\"tools-banner\">
<h1 class=\"banner-title\" id=\"tools-title\">
Volunteer Services
</h1>
<img class=\"banner-image\" id=\"tools-banner-image\"> ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo " </img>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"banner\" id=\"tools-banner\">
<h1 class=\"banner-title\" id=\"tools-title\">
Volunteer Services
</h1>
<img class=\"banner-image\" id=\"tools-banner-image\"> {{ field_image }} </img>
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"banner\" id=\"tools-banner\">
<h1 class=\"banner-title\" id=\"tools-title\">
Volunteer Services
</h1>
<img class=\"banner-image\" id=\"tools-banner-image\"> {{ field_image }} </img>
</div>", "");
    }
}
