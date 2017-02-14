<?php

/* core/themes/classy/templates/misc/rdf-metadata.html.twig */
class __TwigTemplate_4d907d55163271ad4919fbd4d432e1f046281789d872c4c8093cef96b4e4c8a6 extends Twig_Template
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
        $__internal_abb1e67bad4ae6ce662f44896d70423f0278c4e16ad59af2031b362a4f6f2208 = $this->env->getExtension("native_profiler");
        $__internal_abb1e67bad4ae6ce662f44896d70423f0278c4e16ad59af2031b362a4f6f2208->enter($__internal_abb1e67bad4ae6ce662f44896d70423f0278c4e16ad59af2031b362a4f6f2208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/misc/rdf-metadata.html.twig"));

        $tags = array("for" => 18);
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

        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metadata"]) ? $context["metadata"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
            // line 19
            echo "  <span";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["attributes"], "addClass", array(0 => "rdf-meta", 1 => "hidden"), "method"), "html", null, true));
            echo "></span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_abb1e67bad4ae6ce662f44896d70423f0278c4e16ad59af2031b362a4f6f2208->leave($__internal_abb1e67bad4ae6ce662f44896d70423f0278c4e16ad59af2031b362a4f6f2208_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/rdf-metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for empty spans with RDF attributes.*/
/*  **/
/*  * The XHTML+RDFa doctype allows either <span></span> or <span /> syntax to*/
/*  * be used, but for maximum browser compatibility, W3C recommends the*/
/*  * former when serving pages using the text/html media type, see*/
/*  * http://www.w3.org/TR/xhtml1/#C_3.*/
/*  **/
/*  * Available variables:*/
/*  * - metadata: Each item within corresponds to its own set of attributes,*/
/*  *   and therefore, needs its own 'attributes' element.*/
/*  **/
/*  * @see template_preprocess_rdf_metadata()*/
/*  *//* */
/* #}*/
/* {% for attributes in metadata %}*/
/*   <span{{ attributes.addClass('rdf-meta', 'hidden') }}></span>*/
/* {% endfor %}*/
/* */