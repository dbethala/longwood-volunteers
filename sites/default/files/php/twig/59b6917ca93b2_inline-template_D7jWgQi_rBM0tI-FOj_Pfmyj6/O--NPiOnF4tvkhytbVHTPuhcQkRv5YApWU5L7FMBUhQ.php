<?php

/* {# inline_template_start #}<ul class="ql-aggregator" style="list-style-type:none">
<li><a href="https://longwoodgardens.org/volunteering/volunteer-calendar">Online Calendars</a></li>
<li><a href="https://volunteer.longwoodgardens.org/volunteer-services">New Volunteers</a></li>
<li><a href="https://volunteer.longwoodgardens.org/enrichment">E-News</a></li>
<li><a href="https://volunteer.longwoodgardens.org/enrichment">Links to Learning</a></li>
<li><a href="https://volunteer.longwoodgardens.org/volunteer-services">Volunteer Services</a></li>
<li><a href="https://volunteer.longwoodgardens.org/enrichment">Guest Engagement Resources</a></li>
<li><a href="https://longwoodgardens.org/">Longwood Website"</a></li>
<li><a href="https://volunteer.longwoodgardens.org/sitemap">Sitemap</a></li>
</ul> */
class __TwigTemplate_5ed3701766cc0be84783b044a9163759324ba9d58c198fcc2ef48b8971156213 extends Twig_Template
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
        echo "<ul class=\"ql-aggregator\" style=\"list-style-type:none\">
<li><a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/volunteer-services\">New Volunteers</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">E-News</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">Links to Learning</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/volunteer-services\">Volunteer Services</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">Guest Engagement Resources</a></li>
<li><a href=\"https://longwoodgardens.org/\">Longwood Website\"</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/sitemap\">Sitemap</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<ul class=\"ql-aggregator\" style=\"list-style-type:none\">
<li><a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/volunteer-services\">New Volunteers</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">E-News</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">Links to Learning</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/volunteer-services\">Volunteer Services</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">Guest Engagement Resources</a></li>
<li><a href=\"https://longwoodgardens.org/\">Longwood Website\"</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/sitemap\">Sitemap</a></li>
</ul>";
    }

    public function getDebugInfo()
    {
        return array (  52 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<ul class=\"ql-aggregator\" style=\"list-style-type:none\">
<li><a href=\"https://longwoodgardens.org/volunteering/volunteer-calendar\">Online Calendars</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/volunteer-services\">New Volunteers</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">E-News</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">Links to Learning</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/volunteer-services\">Volunteer Services</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/enrichment\">Guest Engagement Resources</a></li>
<li><a href=\"https://longwoodgardens.org/\">Longwood Website\"</a></li>
<li><a href=\"https://volunteer.longwoodgardens.org/sitemap\">Sitemap</a></li>
</ul>";
    }
}
