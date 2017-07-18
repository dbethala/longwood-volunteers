<?php

/* modules/pdf_reader/templates/pdf-reader-embed.html.twig */
class __TwigTemplate_ea51f0d715d6566e88a1c1446f467094f2d14b568c8c346ceb28ec4b93456d97 extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array("t" => 4);
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

        // line 1
        echo "<div class = 'pdf-reader'>
    ";
        // line 2
        if (((isset($context["download_link"]) ? $context["download_link"] : null) && (isset($context["top"]) ? $context["top"] : null))) {
            // line 3
            echo "        <div class =\"download-pdf link-pdf\">
            <a href = \"";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["download_link"]) ? $context["download_link"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Click here to download")));
            echo "</a>
        </div>
    ";
        }
        // line 7
        echo "    <div class = \"pdf-reader-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["service"]) ? $context["service"] : null), "html", null, true));
        echo "\">
        <object id=\"pdf_reader\" data= \"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["file_url"]) ? $context["file_url"] : null), "html", null, true));
        echo "\" type = \"application/pdf\" width= \"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
        echo "\" height= \"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
        echo "\">
            <embed src=\"";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["file_url"]) ? $context["file_url"] : null), "html", null, true));
        echo "\" width= \"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
        echo " \" height= \"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
        echo "\" type=\"application/pdf\"><p> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["file_name"]) ? $context["file_name"] : null), "html", null, true));
        echo " </p>
            </embed>
        </object>
    </div>
    ";
        // line 13
        if (((isset($context["download_link"]) ? $context["download_link"] : null) && (isset($context["bottom"]) ? $context["bottom"] : null))) {
            // line 14
            echo "        <div class =\"download-pdf link-pdf\">
            <a href = \"";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["download_link"]) ? $context["download_link"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Click here to download")));
            echo "</a>
        </div>
    ";
        }
        // line 18
        echo "</div>






";
    }

    public function getTemplateName()
    {
        return "modules/pdf_reader/templates/pdf-reader-embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  90 => 15,  87 => 14,  85 => 13,  72 => 9,  64 => 8,  59 => 7,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class = 'pdf-reader'>
    {% if download_link and top %}
        <div class =\"download-pdf link-pdf\">
            <a href = \"{{ download_link }}\">{{ 'Click here to download'|t }}</a>
        </div>
    {% endif %}
    <div class = \"pdf-reader-{{  service }}\">
        <object id=\"pdf_reader\" data= \"{{file_url}}\" type = \"application/pdf\" width= \"{{width}}\" height= \"{{height}}\">
            <embed src=\"{{file_url}}\" width= \"{{width}} \" height= \"{{height}}\" type=\"application/pdf\"><p> {{file_name}} </p>
            </embed>
        </object>
    </div>
    {% if download_link and bottom %}
        <div class =\"download-pdf link-pdf\">
            <a href = \"{{ download_link }}\">{{ 'Click here to download'|t }}</a>
        </div>
    {% endif %}
</div>






";
    }
}
