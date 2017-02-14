<?php

/* modules/yamlform/templates/yamlform-handler-email-summary.html.twig */
class __TwigTemplate_3f72c1cc6af8433d502f2d9b0efe8d6d1244eeb2e2439639dceee6ab3d52fc7c extends Twig_Template
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
        $__internal_b32bfa45ac57102df97521b1c16b118eb8755fdcb81c07cd9c2949df06de9bb0 = $this->env->getExtension("native_profiler");
        $__internal_b32bfa45ac57102df97521b1c16b118eb8755fdcb81c07cd9c2949df06de9bb0->enter($__internal_b32bfa45ac57102df97521b1c16b118eb8755fdcb81c07cd9c2949df06de9bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/yamlform/templates/yamlform-handler-email-summary.html.twig"));

        $tags = array("if" => 17);
        $filters = array("t" => 17);
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

        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "debug", array())) {
            echo "<b class=\"color-error\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Debugging is enabled")));
            echo "</b><br/>";
        }
        // line 18
        echo "<b>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("To:")));
        echo "</b> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "to_mail", array()), "html", null, true));
        echo "<br/>
";
        // line 19
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cc_mail", array())) {
            echo "<b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Cc:")));
            echo "</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cc_mail", array()), "html", null, true));
            echo "<br/>";
        }
        // line 20
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bcc_mail", array())) {
            echo "<b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Bcc:")));
            echo "</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bcc_mail", array()), "html", null, true));
            echo "<br/>";
        }
        // line 21
        echo "<b>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("From:")));
        echo "</b> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "from_mail", array()), "html", null, true));
        echo " ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "from_name", array())) {
            echo "&lt;";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "from_name", array()), "html", null, true));
            echo "&gt;";
        }
        echo "<br/>
<b>";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Subject:")));
        echo "</b> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subject", array()), "html", null, true));
        echo "<br/>
<b>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Settings:")));
        echo "</b> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "html", array())) ? ("HTML") : (t("Plain text")))));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "html", array()) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "attachments", array()))) ? ("/") : (""))));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "attachments", array())) ? (t("Attachments ")) : (""))));
        echo "
";
        
        $__internal_b32bfa45ac57102df97521b1c16b118eb8755fdcb81c07cd9c2949df06de9bb0->leave($__internal_b32bfa45ac57102df97521b1c16b118eb8755fdcb81c07cd9c2949df06de9bb0_prof);

    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-handler-email-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  88 => 22,  75 => 21,  67 => 20,  59 => 19,  52 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a summary of a form email handler.*/
/*  **/
/*  * Available variables:*/
/*  * - settings: The current configuration for this email handler:*/
/*  * - handler: The handler information, including:*/
/*  *   - id: The handler plugin id.*/
/*  *   - handler_id: The handler id.*/
/*  *   - label: The handler label.*/
/*  *   - description: The handler description.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if settings.debug %}<b class="color-error">{{ 'Debugging is enabled'|t }}</b><br/>{% endif %}*/
/* <b>{{ 'To:'|t }}</b> {{ settings.to_mail }}<br/>*/
/* {% if settings.cc_mail %}<b>{{ 'Cc:'|t }}</b> {{ settings.cc_mail }}<br/>{% endif %}*/
/* {% if settings.bcc_mail %}<b>{{ 'Bcc:'|t }}</b> {{ settings.bcc_mail }}<br/>{% endif %}*/
/* <b>{{ 'From:'|t }}</b> {{ settings.from_mail }} {% if settings.from_name %}&lt;{{ settings.from_name }}&gt;{% endif %}<br/>*/
/* <b>{{ 'Subject:'|t }}</b> {{ settings.subject }}<br/>*/
/* <b>{{ 'Settings:'|t }}</b> {{ settings.html ? 'HTML' : 'Plain text'|t }}{{ settings.html and settings.attachments ? '/' : '' }}{{ settings.attachments ? 'Attachments '|t : '' }}*/
/* */
