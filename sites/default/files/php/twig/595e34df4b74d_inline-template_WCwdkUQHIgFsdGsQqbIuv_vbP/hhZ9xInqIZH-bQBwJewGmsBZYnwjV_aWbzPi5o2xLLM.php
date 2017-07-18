<?php

/* {# inline_template_start #}<a href=http://volunteer.longwoodgardens.org/node/264>Obtain Safety Shoes</a> */
class __TwigTemplate_3ff437918d094d3717ce2b17f4299740fb5cc8706dea5fb1a434ba00eff436ec extends Twig_Template
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
        echo "<a href=http://volunteer.longwoodgardens.org/node/264>Obtain Safety Shoes</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=http://volunteer.longwoodgardens.org/node/264>Obtain Safety Shoes</a>";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<a href=http://volunteer.longwoodgardens.org/node/264>Obtain Safety Shoes</a>";
    }
}
