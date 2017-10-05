<?php

/* modules/webform/templates/webform-handler-email-summary.html.twig */
class __TwigTemplate_28d1abadf4cc5fb1f9a21ac46c55a07a142d4d7ad1f0ef187c2414f05dd8636e extends Twig_Template
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
        $tags = array("if" => 13);
        $filters = array("t" => 13, "length" => 20, "join" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t', 'length', 'join'),
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

        // line 13
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "debug", array())) {
            echo "<b class=\"color-error\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Debugging is enabled")));
            echo "</b><br />";
        }
        // line 14
        echo "<b>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("To:")));
        echo "</b> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "to_mail", array()), "html", null, true));
        echo "<br />
";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cc_mail", array())) {
            echo "<b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("CC:")));
            echo "</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cc_mail", array()), "html", null, true));
            echo "<br />";
        }
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bcc_mail", array())) {
            echo "<b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("BCC:")));
            echo "</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bcc_mail", array()), "html", null, true));
            echo "<br />";
        }
        // line 17
        echo "<b>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("From:")));
        echo "</b> ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "from_name", array())) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "from_name", array()), "html", null, true));
        }
        echo " &lt;";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "from_mail", array()), "html", null, true));
        echo "&gt;<br />
<b>";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Subject:")));
        echo "</b> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subject", array()), "html", null, true));
        echo "<br />
<b>";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Settings:")));
        echo "</b> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "html", array())) ? ("HTML") : (t("Plain text")))));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "html", array()) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "attachments", array()))) ? ("/") : (""))));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "attachments", array())) ? (t("Attachments ")) : (""))));
        echo "<br />
";
        // line 20
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "states", array())) > 1) ||  !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "states", array()), "completed", array()))) {
            // line 21
            echo "<b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sent when:")));
            echo "</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "states", array()), "; "), "html", null, true));
            echo "<br />
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-handler-email-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  97 => 20,  89 => 19,  83 => 18,  72 => 17,  64 => 16,  56 => 15,  49 => 14,  43 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a summary of a webform email handler.
 *
 * Available variables:
 * - settings: The current configuration for this email handler.
 * - handler: The email handler.
 *
 * @ingroup themeable
 */
#}
{% if settings.debug %}<b class=\"color-error\">{{ 'Debugging is enabled'|t }}</b><br />{% endif %}
<b>{{ 'To:'|t }}</b> {{ settings.to_mail }}<br />
{% if settings.cc_mail %}<b>{{ 'CC:'|t }}</b> {{ settings.cc_mail }}<br />{% endif %}
{% if settings.bcc_mail %}<b>{{ 'BCC:'|t }}</b> {{ settings.bcc_mail }}<br />{% endif %}
<b>{{ 'From:'|t }}</b> {% if settings.from_name %}{{ settings.from_name }}{% endif %} &lt;{{ settings.from_mail }}&gt;<br />
<b>{{ 'Subject:'|t }}</b> {{ settings.subject }}<br />
<b>{{ 'Settings:'|t }}</b> {{ settings.html ? 'HTML' : 'Plain text'|t }}{{ settings.html and settings.attachments ? '/' : '' }}{{ settings.attachments ? 'Attachments '|t : '' }}<br />
{% if (settings.states|length > 1 or not settings.states.completed) %}
<b>{{ 'Sent when:'|t }}</b> {{ settings.states|join('; ') }}<br />
{% endif %}
";
    }
}
