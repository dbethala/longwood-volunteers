<?php

/* modules/pdf_reader/templates/pdf-reader-js.html.twig */
class __TwigTemplate_3332b8e47a7a7b8a6c0281c4c4ffcb95ebe88578e71b3816845fe8c640134825 extends Twig_Template
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
        echo "  <div class = \"pdf-reader-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["service"]) ? $context["service"] : null), "html", null, true));
        echo "\">
<div id=\"outerContgainer\">

  <div id=\"sidebarContainer\">
    <div id=\"toolbarSidebar\" class=\"splitToolbarButton toggled\">
      <button id=\"viewThumbnail\" class=\"toolbarButton group toggled\" title=\"Show Thumbnails\" onclick=\"PDFView.switchSidebarView('thumbs')\" tabindex=\"1\" data-l10n-id=\"thumbs\">
        <span data-l10n-id=\"thumbs_label\">";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Thumbnails")));
        echo "</span>
      </button>
      <button id=\"viewOutline\" class=\"toolbarButton group\" title=\"Show Document Outline\" onclick=\"PDFView.switchSidebarView('outline')\" tabindex=\"2\" data-l10n-id=\"outline\">
        <span data-l10n-id=\"outline_label\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Document Outline")));
        echo "</span>
      </button>
      <button id=\"viewSearch\" class=\"toolbarButton group hidden\" title=\"Search Document\" onclick=\"PDFView.switchSidebarView('search')\" tabindex=\"3\" data-l10n-id=\"search_panel\">
        <span data-l10n-id=\"search_panel_label\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Search Document")));
        echo "</span>
      </button>
    </div>
    <div id=\"sidebarContent\">
      <div id=\"thumbnailView\">
      </div>
      <div id=\"outlineView\" class=\"hidden\">
      </div>
      <div id=\"searchView\" class=\"hidden\">
        <div id=\"searchToolbar\">
          <input id=\"searchTermsInput\" class=\"toolbarField\" onkeydown='if (event.keyCode == 13) PDFView.search()'>
          <button id=\"searchButton\" class=\"textButton toolbarButton\" onclick='PDFView.search()' data-l10n-id=\"search\">";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Find")));
        echo "</button>
        </div>
        <div id=\"searchResults\"></div>
      </div>
    </div>
  </div>  <!-- sidebarContainer -->

  <div id=\"mainContainer\">
    <div class=\"toolbar\">
      <div id=\"toolbarContainer\">

        <div id=\"toolbarViewer\">
          <div id=\"toolbarViewerLeft\">
            <button id=\"sidebarToggle\" class=\"toolbarButton\" title=\"Toggle Sidebar\" tabindex=\"4\" data-l10n-id=\"toggle_slider\">
              <span data-l10n-id=\"toggle_slider_label\">";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle Sidebar")));
        echo "</span>
            </button>
            <div class=\"toolbarButtonSpacer\"></div>
            <div class=\"splitToolbarButton\">
              <button class=\"toolbarButton pageUp\" title=\"Previous Page\" onclick=\"PDFView.page--\" id=\"previous\" tabindex=\"5\" data-l10n-id=\"previous\">
                <span data-l10n-id=\"previous_label\">";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous")));
        echo "</span>
              </button>
              <div class=\"splitToolbarButtonSeparator\"></div>
              <button class=\"toolbarButton pageDown\" title=\"Next Page\" onclick=\"PDFView.page++\" id=\"next\" tabindex=\"6\" data-l10n-id=\"next\">
                <span data-l10n-id=\"next_label\">";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next")));
        echo "</span>
              </button>
            </div>
            <label id=\"pageNumberLabel\" class=\"toolbarLabel\" for=\"pageNumber\" data-l10n-id=\"page_label\">";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Page")));
        echo ": </label>
            <input type=\"number\" id=\"pageNumber\" class=\"toolbarField pageNumber\" onchange=\"PDFView.page = this.value;\" value=\"1\" size=\"4\" min=\"1\" tabindex=\"7\">
            </input>
            <span id=\"numPages\" class=\"toolbarLabel\"></span>
          </div>
          <div id=\"toolbarViewerRight\">

            <button id=\"fullscreen\" class=\"toolbarButton fullscreen\" title=\"Fullscreen\" tabindex=\"11\" data-l10n-id=\"fullscreen\" onclick=\"PDFView.fullscreen();\">
              <span data-l10n-id=\"fullscreen_label\">";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Fullscreen")));
        echo "</span>
            </button>

            <button id=\"print\" class=\"toolbarButton print\" title=\"Print\" tabindex=\"13\" data-l10n-id=\"print\" onclick=\"window.print()\">
              <span data-l10n-id=\"print_label\">";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Print")));
        echo "</span>
            </button>

            <button id=\"download\" class=\"toolbarButton download\" title=\"Download\" onclick=\"PDFView.download();\" tabindex=\"14\" data-l10n-id=\"download\">
              <span data-l10n-id=\"download_label\">";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Download")));
        echo "</span>
            </button>
            <!-- <div class=\"toolbarButtonSpacer\"></div> -->
            <a href=\"#\" id=\"viewBookmark\" class=\"toolbarButton bookmark\" title=\"Current view (copy or open in new window)\" tabindex=\"15\" data-l10n-id=\"bookmark\"><span data-l10n-id=\"bookmark_label\">";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Current View")));
        echo "</span></a>
          </div>
          <div class=\"outerCenter\">
            <div class=\"innerCenter\" id=\"toolbarViewerMiddle\">
              <div class=\"splitToolbarButton\">
                <button class=\"toolbarButton zoomOut\" title=\"Zoom Out\" onclick=\"PDFView.zoomOut();\" tabindex=\"8\" data-l10n-id=\"zoom_out\">
                  <span data-l10n-id=\"zoom_out_label\">";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Zoom Out")));
        echo "</span>
                </button>
                <div class=\"splitToolbarButtonSeparator\"></div>
                <button class=\"toolbarButton zoomIn\" title=\"Zoom In\" onclick=\"PDFView.zoomIn();\" tabindex=\"9\" data-l10n-id=\"zoom_in\">
                  <span data-l10n-id=\"zoom_in_label\">";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Zoom In")));
        echo "</span>
                </button>
              </div>
                  <span id=\"scaleSelectContainer\" class=\"dropdownToolbarButton\">
                     <select id=\"scaleSelect\" onchange=\"PDFView.parseScale(this.value);\" title=\"Zoom\" oncontextmenu=\"return false;\" tabindex=\"10\" data-l10n-id=\"zoom\">
                       <option id=\"pageAutoOption\" value=\"auto\" selected=\"selected\" data-l10n-id=\"page_scale_auto\">";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Automatic Zoom")));
        echo "</option>
                       <option id=\"pageActualOption\" value=\"page-actual\" data-l10n-id=\"page_scale_actual\">";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Actual Size")));
        echo "</option>
                       <option id=\"pageFitOption\" value=\"page-fit\" data-l10n-id=\"page_scale_fit\">";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Fit Page")));
        echo "</option>
                       <option id=\"pageWidthOption\" value=\"page-width\" data-l10n-id=\"page_scale_width\">";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Full Width")));
        echo "</option>
                       <option id=\"customScaleOption\" value=\"custom\"></option>
                       <option value=\"0.5\">50%</option>
                       <option value=\"0.75\">75%</option>
                       <option value=\"1\">100%</option>
                       <option value=\"1.25\">125%</option>
                       <option value=\"1.5\">150%</option>
                       <option value=\"2\">200%</option>
                     </select>
                  </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id=\"viewerContainer\">
      <div id=\"viewer\"></div>
    </div>

    <div id=\"loadingBox\">
      <div id=\"loading\"></div>
      <div id=\"loadingBar\"><div class=\"progress\"></div></div>
    </div>

    <div id=\"errorWrapper\" hidden='true'>
      <div id=\"errorMessageLeft\">
        <span id=\"errorMessage\"></span>
        <button id=\"errorShowMore\" onclick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_more_info\">
          ";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("More Information")));
        echo "
        </button>
        <button id=\"errorShowLess\" onclick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_less_info\" hidden='true'>
          ";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Less Information")));
        echo "
        </button>
      </div>
      <div id=\"errorMessageRight\">
        <button id=\"errorClose\" oncontextmenu=\"return false;\" data-l10n-id=\"error_close\">
          ";
        // line 130
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Close")));
        echo "
        </button>
      </div>
      <div class=\"clearBoth\"></div>
      <textarea id=\"errorMoreInfo\" hidden='true' readonly=\"readonly\"></textarea>
    </div>
  </div> <!-- mainContainer -->

</div> <!-- outerContainer -->
<div id=\"printContainer\"></div>
    </div>
  ";
        // line 141
        if (((isset($context["download_link"]) ? $context["download_link"] : null) && (isset($context["bottom"]) ? $context["bottom"] : null))) {
            // line 142
            echo "<div class =\"download-pdf link-pdf\">
  <a href = \"";
            // line 143
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["download_link"]) ? $context["download_link"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Click here to download")));
            echo "</a>
</div>
  ";
        }
        // line 146
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/pdf_reader/templates/pdf-reader-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 146,  265 => 143,  262 => 142,  260 => 141,  246 => 130,  238 => 125,  232 => 122,  200 => 93,  196 => 92,  192 => 91,  188 => 90,  180 => 85,  173 => 81,  164 => 75,  158 => 72,  151 => 68,  144 => 64,  133 => 56,  127 => 53,  120 => 49,  112 => 44,  95 => 30,  81 => 19,  75 => 16,  69 => 13,  59 => 7,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
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
<div id=\"outerContgainer\">

  <div id=\"sidebarContainer\">
    <div id=\"toolbarSidebar\" class=\"splitToolbarButton toggled\">
      <button id=\"viewThumbnail\" class=\"toolbarButton group toggled\" title=\"Show Thumbnails\" onclick=\"PDFView.switchSidebarView('thumbs')\" tabindex=\"1\" data-l10n-id=\"thumbs\">
        <span data-l10n-id=\"thumbs_label\">{{'Thumbnails'|t }}</span>
      </button>
      <button id=\"viewOutline\" class=\"toolbarButton group\" title=\"Show Document Outline\" onclick=\"PDFView.switchSidebarView('outline')\" tabindex=\"2\" data-l10n-id=\"outline\">
        <span data-l10n-id=\"outline_label\">{{'Document Outline'|t}}</span>
      </button>
      <button id=\"viewSearch\" class=\"toolbarButton group hidden\" title=\"Search Document\" onclick=\"PDFView.switchSidebarView('search')\" tabindex=\"3\" data-l10n-id=\"search_panel\">
        <span data-l10n-id=\"search_panel_label\">{{'Search Document'|t}}</span>
      </button>
    </div>
    <div id=\"sidebarContent\">
      <div id=\"thumbnailView\">
      </div>
      <div id=\"outlineView\" class=\"hidden\">
      </div>
      <div id=\"searchView\" class=\"hidden\">
        <div id=\"searchToolbar\">
          <input id=\"searchTermsInput\" class=\"toolbarField\" onkeydown='if (event.keyCode == 13) PDFView.search()'>
          <button id=\"searchButton\" class=\"textButton toolbarButton\" onclick='PDFView.search()' data-l10n-id=\"search\">{{'Find'|t}}</button>
        </div>
        <div id=\"searchResults\"></div>
      </div>
    </div>
  </div>  <!-- sidebarContainer -->

  <div id=\"mainContainer\">
    <div class=\"toolbar\">
      <div id=\"toolbarContainer\">

        <div id=\"toolbarViewer\">
          <div id=\"toolbarViewerLeft\">
            <button id=\"sidebarToggle\" class=\"toolbarButton\" title=\"Toggle Sidebar\" tabindex=\"4\" data-l10n-id=\"toggle_slider\">
              <span data-l10n-id=\"toggle_slider_label\">{{'Toggle Sidebar'|t}}</span>
            </button>
            <div class=\"toolbarButtonSpacer\"></div>
            <div class=\"splitToolbarButton\">
              <button class=\"toolbarButton pageUp\" title=\"Previous Page\" onclick=\"PDFView.page--\" id=\"previous\" tabindex=\"5\" data-l10n-id=\"previous\">
                <span data-l10n-id=\"previous_label\">{{'Previous'|t}}</span>
              </button>
              <div class=\"splitToolbarButtonSeparator\"></div>
              <button class=\"toolbarButton pageDown\" title=\"Next Page\" onclick=\"PDFView.page++\" id=\"next\" tabindex=\"6\" data-l10n-id=\"next\">
                <span data-l10n-id=\"next_label\">{{'Next'|t}}</span>
              </button>
            </div>
            <label id=\"pageNumberLabel\" class=\"toolbarLabel\" for=\"pageNumber\" data-l10n-id=\"page_label\">{{'Page'|t}}: </label>
            <input type=\"number\" id=\"pageNumber\" class=\"toolbarField pageNumber\" onchange=\"PDFView.page = this.value;\" value=\"1\" size=\"4\" min=\"1\" tabindex=\"7\">
            </input>
            <span id=\"numPages\" class=\"toolbarLabel\"></span>
          </div>
          <div id=\"toolbarViewerRight\">

            <button id=\"fullscreen\" class=\"toolbarButton fullscreen\" title=\"Fullscreen\" tabindex=\"11\" data-l10n-id=\"fullscreen\" onclick=\"PDFView.fullscreen();\">
              <span data-l10n-id=\"fullscreen_label\">{{'Fullscreen'|t}}</span>
            </button>

            <button id=\"print\" class=\"toolbarButton print\" title=\"Print\" tabindex=\"13\" data-l10n-id=\"print\" onclick=\"window.print()\">
              <span data-l10n-id=\"print_label\">{{'Print'|t}}</span>
            </button>

            <button id=\"download\" class=\"toolbarButton download\" title=\"Download\" onclick=\"PDFView.download();\" tabindex=\"14\" data-l10n-id=\"download\">
              <span data-l10n-id=\"download_label\">{{'Download'|t}}</span>
            </button>
            <!-- <div class=\"toolbarButtonSpacer\"></div> -->
            <a href=\"#\" id=\"viewBookmark\" class=\"toolbarButton bookmark\" title=\"Current view (copy or open in new window)\" tabindex=\"15\" data-l10n-id=\"bookmark\"><span data-l10n-id=\"bookmark_label\">{{'Current View'|t}}</span></a>
          </div>
          <div class=\"outerCenter\">
            <div class=\"innerCenter\" id=\"toolbarViewerMiddle\">
              <div class=\"splitToolbarButton\">
                <button class=\"toolbarButton zoomOut\" title=\"Zoom Out\" onclick=\"PDFView.zoomOut();\" tabindex=\"8\" data-l10n-id=\"zoom_out\">
                  <span data-l10n-id=\"zoom_out_label\">{{'Zoom Out'|t}}</span>
                </button>
                <div class=\"splitToolbarButtonSeparator\"></div>
                <button class=\"toolbarButton zoomIn\" title=\"Zoom In\" onclick=\"PDFView.zoomIn();\" tabindex=\"9\" data-l10n-id=\"zoom_in\">
                  <span data-l10n-id=\"zoom_in_label\">{{'Zoom In'|t}}</span>
                </button>
              </div>
                  <span id=\"scaleSelectContainer\" class=\"dropdownToolbarButton\">
                     <select id=\"scaleSelect\" onchange=\"PDFView.parseScale(this.value);\" title=\"Zoom\" oncontextmenu=\"return false;\" tabindex=\"10\" data-l10n-id=\"zoom\">
                       <option id=\"pageAutoOption\" value=\"auto\" selected=\"selected\" data-l10n-id=\"page_scale_auto\">{{'Automatic Zoom'|t}}</option>
                       <option id=\"pageActualOption\" value=\"page-actual\" data-l10n-id=\"page_scale_actual\">{{'Actual Size'|t}}</option>
                       <option id=\"pageFitOption\" value=\"page-fit\" data-l10n-id=\"page_scale_fit\">{{'Fit Page'|t}}</option>
                       <option id=\"pageWidthOption\" value=\"page-width\" data-l10n-id=\"page_scale_width\">{{'Full Width'|t}}</option>
                       <option id=\"customScaleOption\" value=\"custom\"></option>
                       <option value=\"0.5\">50%</option>
                       <option value=\"0.75\">75%</option>
                       <option value=\"1\">100%</option>
                       <option value=\"1.25\">125%</option>
                       <option value=\"1.5\">150%</option>
                       <option value=\"2\">200%</option>
                     </select>
                  </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id=\"viewerContainer\">
      <div id=\"viewer\"></div>
    </div>

    <div id=\"loadingBox\">
      <div id=\"loading\"></div>
      <div id=\"loadingBar\"><div class=\"progress\"></div></div>
    </div>

    <div id=\"errorWrapper\" hidden='true'>
      <div id=\"errorMessageLeft\">
        <span id=\"errorMessage\"></span>
        <button id=\"errorShowMore\" onclick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_more_info\">
          {{'More Information'|t}}
        </button>
        <button id=\"errorShowLess\" onclick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_less_info\" hidden='true'>
          {{'Less Information'|t}}
        </button>
      </div>
      <div id=\"errorMessageRight\">
        <button id=\"errorClose\" oncontextmenu=\"return false;\" data-l10n-id=\"error_close\">
          {{'Close'|t}}
        </button>
      </div>
      <div class=\"clearBoth\"></div>
      <textarea id=\"errorMoreInfo\" hidden='true' readonly=\"readonly\"></textarea>
    </div>
  </div> <!-- mainContainer -->

</div> <!-- outerContainer -->
<div id=\"printContainer\"></div>
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
