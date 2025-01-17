<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/view/template/common/ishithemeoption.twig */
class __TwigTemplate_f1929f712277bd6d36fda60c4a59ac1102d4c06e11350f1d2af13ec34f6a164e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
     <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_themeoption"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
   ";
        // line 17
        if (($context["success"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 22
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"card panel-default\">
      <div class=\"card-header\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"theme_section\">
            <h3>Themes configuration</h3> 
            <div class=\"row mb-3\">
              <div class=\"col-sm-6 row\">
                <label class=\"col-sm-4 col-form-label\" for=\"input-bg-color\">";
        // line 35
        echo ($context["entry_themecolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" name=\"themecolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 37
        echo ($context["themecolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>           
              <div class=\"row mb-3\">
                <div class=\"row col-sm-6\">
                  <label class=\"col-sm-4 col-form-label\" for=\"input-breadcrumb_image\">";
        // line 43
        echo ($context["entry_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-8\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 46
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-breadcrumb_image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                      <input type=\"hidden\" name=\"breadcrumb_image\" value=\"";
        // line 47
        echo ($context["breadcrumb_image"] ?? null);
        echo "\" id=\"input-breadcrumb_image\"/>
                      <div class=\"card-body\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-breadcrumb_image\" data-oc-thumb=\"#thumb-breadcrumb_image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 49
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-breadcrumb_image\" data-oc-thumb=\"#thumb-breadcrumb_image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 50
        echo ($context["button_clear"] ?? null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row col-sm-6\">
                  <label class=\"col-sm-4 col-form-label\" for=\"input-bg-color\">";
        // line 56
        echo ($context["entry_breadcrumb_color"] ?? null);
        echo "</label>
                  <div class=\"col-sm-8\">
                    <input type=\"text\" name=\"breadcrumb_color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 58
        echo ($context["breadcrumb_color"] ?? null);
        echo "\">
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <div class=\"col-4 row\">
                  <label class=\"col-sm-6 col-form-label\" for=\"input-subcategory_type\">";
        // line 64
        echo ($context["entry_subcategorylist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-6\">
                    <select name=\"subcategory_type\" id=\"input-subcategory_type\" class=\"form-control\">
                      <option value=\"none\" ";
        // line 67
        if ((($context["subcategory_type"] ?? null) == "none")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["text_none"] ?? null);
        echo "</option>
                      <option value=\"grid\" ";
        // line 68
        if ((($context["subcategory_type"] ?? null) == "grid")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["text_grid"] ?? null);
        echo "</option>
                      <option value=\"slider\" ";
        // line 69
        if ((($context["subcategory_type"] ?? null) == "slider")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["text_slider"] ?? null);
        echo "</option>
                    </select>
                  </div>
                </div>
                <div class=\"col-sm-4 row\">
                  <label class=\"col-sm-6 col-form-label\" for=\"input-category-counter\">";
        // line 74
        echo ($context["entry_category_counter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-6\">
                    <label class=\"switch\">
                      ";
        // line 77
        if (($context["category_counter"] ?? null)) {
            // line 78
            echo "                        <input type=\"checkbox\" name=\"category_counter\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-category-counter\" />
                      ";
        } else {
            // line 80
            echo "                        <input type=\"checkbox\" name=\"category_counter\" value=\"1\" class=\"primary\" id=\"input-category-counter\" />
                      ";
        }
        // line 82
        echo "                      <span class=\"slider round\"></span>
                    </label>
                  </div>
                </div>
                <div class=\"col-sm-4 row\">
                  <label class=\"col-sm-6 col-form-label\" for=\"input-product-counter\">";
        // line 87
        echo ($context["entry_product_counter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-6\">
                    <label class=\"switch\">
                      ";
        // line 90
        if (($context["product_counter"] ?? null)) {
            // line 91
            echo "                        <input type=\"checkbox\" name=\"product_counter\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-product-counter\" />
                      ";
        } else {
            // line 93
            echo "                        <input type=\"checkbox\" name=\"product_counter\" value=\"1\" class=\"primary\" id=\"input-product-counter\" />
                      ";
        }
        // line 95
        echo "                      <span class=\"slider round\"></span>
                    </label>
                  </div>
                </div>
              </div>
          </div>
          <div class=\"theme_section\">
            <h3>Header configuration</h3> 
            <div class=\"row mb-3\">
              <div class=\"col-sm-6 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-bg-color\">";
        // line 105
        echo ($context["entry_headernav_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"headernav_bgcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 107
        echo ($context["headernav_bgcolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-6 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-headernav_textcolor\">";
        // line 111
        echo ($context["entry_headernav_textcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"headernav_textcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 113
        echo ($context["headernav_textcolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <div class=\"col-sm-4 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-bg-color\">";
        // line 119
        echo ($context["entry_header_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"header_bgcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 121
        echo ($context["header_bgcolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-4 row pt-3 mb-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-header_textcolor\">";
        // line 125
        echo ($context["entry_header_textcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"header_textcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 127
        echo ($context["header_textcolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-4 row pt-3 mb-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-header_text_hovercolor\">";
        // line 131
        echo ($context["entry_header_text_hovercolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"header_text_hovercolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 133
        echo ($context["header_text_hovercolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>
          </div>
          <div class=\"theme_section\">
            <h3>Button configuration</h3> 
            <div class=\"row mb-3\">
              <div class=\"col-sm-6 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-bg-color\">";
        // line 142
        echo ($context["entry_btn_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"btn_bgcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 144
        echo ($context["btn_bgcolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-6 row pt-3 mb-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-btnhover_bgcolor\">";
        // line 148
        echo ($context["entry_btnhover_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"btnhover_bgcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 150
        echo ($context["btnhover_bgcolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 row pt-3 mb-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-bg-color\">";
        // line 156
        echo ($context["entry_btn_textcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"btn_textcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 158
        echo ($context["btn_textcolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-6 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-btnhover_textcolor\">";
        // line 162
        echo ($context["entry_btnhover_textcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"btnhover_textcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 164
        echo ($context["btnhover_textcolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>
          </div>
          <div class=\"theme_section\">
            <h3 class=\"mb-4\">Footer configuration</h3> 
            <div class=\"row mb-3\">
              <div class=\"row mb-3 col-sm-6\">
                <label class=\"col-sm-4 col-form-label\" for=\"input-footer_bgimage\">";
        // line 173
        echo ($context["entry_footer_bgimage"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <div id=\"image\" class=\"card image\">
                    <img src=\"";
        // line 176
        echo ($context["footerthumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-footer_bgimage\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                    <input type=\"hidden\" name=\"footer_bgimage\" value=\"";
        // line 177
        echo ($context["footer_bgimage"] ?? null);
        echo "\" id=\"input-footer_bgimage\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-footer_bgimage\" data-oc-thumb=\"#thumb-footer_bgimage\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 179
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-footer_bgimage\" data-oc-thumb=\"#thumb-footer_bgimage\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 180
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6 row\">
                <label class=\"col-sm-4 col-form-label\" for=\"input-footer_bgcolor\">";
        // line 186
        echo ($context["entry_footer_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" name=\"footer_bgcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 188
        echo ($context["footer_bgcolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <div class=\"col-sm-4 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-footer_titlecolor\">";
        // line 194
        echo ($context["entry_footer_titlecolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"footer_titlecolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 196
        echo ($context["footer_titlecolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-4 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-footer_textcolor\">";
        // line 200
        echo ($context["entry_footer_textcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"footer_textcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 202
        echo ($context["footer_textcolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-4 row pt-3\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-footer_text_hovercolor\">";
        // line 206
        echo ($context["entry_footer_text_hovercolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <input type=\"text\" name=\"footer_text_hovercolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 208
        echo ($context["footer_text_hovercolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <div class=\"col-sm-6 row\">
                <label class=\"col-sm-4 col-form-label\" for=\"input-footerafter_bgcolor\">";
        // line 214
        echo ($context["entry_footerafter_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" name=\"footerafter_bgcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 216
        echo ($context["footerafter_bgcolor"] ?? null);
        echo "\">
                </div>
              </div>
              <div class=\"col-sm-6 row\">
                <label class=\"col-sm-4 col-form-label\" for=\"input-footerafter_textcolor\">";
        // line 220
        echo ($context["entry_footerafter_textcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" name=\"footerafter_textcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 222
        echo ($context["footerafter_textcolor"] ?? null);
        echo "\">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
  .theme_section {
    border-bottom: 2px solid #eee;
    padding: 20px 0;
  }
  /* The switch - the box around the slider */
      .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
      }

      /* Hide default HTML checkbox */
      .switch input {display:none;}

      /* The slider */
      .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
      }

      .slider:before {
        position: absolute;
        content: \"\";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
      }
      input.default:checked + .slider {
        background-color: #444;
      }
      input.primary:checked + .slider {
        background-color: #2196F3;
      }
      input.success:checked + .slider {
        background-color: #8bc34a;
      }
      input.info:checked + .slider {
        background-color: #3de0f5;
      }
      input.warning:checked + .slider {
        background-color: #FFC107;
      }
      input.danger:checked + .slider {
        background-color: #f44336;
      }

      input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
      }

      input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
      }

      /* Rounded sliders */
      .slider.round {
        border-radius: 34px;
      }

      .slider.round:before {
        border-radius: 50%;
      }
</style>

<script type=\"text/javascript\">
    \$(document).ready( function() {
      \$('.themecolor').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
      change: function(hex, opacity) {
        jQuery('.panel .mail-preview iframe').contents().find(jQuery(this).attr('data-target')).css(jQuery(this).attr('data-property'), hex);
      }
        });

      });
    });
  </script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.min.js\"></script> 
";
        // line 342
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/ishithemeoption.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 342,  483 => 222,  478 => 220,  471 => 216,  466 => 214,  457 => 208,  452 => 206,  445 => 202,  440 => 200,  433 => 196,  428 => 194,  419 => 188,  414 => 186,  405 => 180,  401 => 179,  396 => 177,  390 => 176,  384 => 173,  372 => 164,  367 => 162,  360 => 158,  355 => 156,  346 => 150,  341 => 148,  334 => 144,  329 => 142,  317 => 133,  312 => 131,  305 => 127,  300 => 125,  293 => 121,  288 => 119,  279 => 113,  274 => 111,  267 => 107,  262 => 105,  250 => 95,  246 => 93,  242 => 91,  240 => 90,  234 => 87,  227 => 82,  223 => 80,  219 => 78,  217 => 77,  211 => 74,  199 => 69,  191 => 68,  183 => 67,  177 => 64,  168 => 58,  163 => 56,  154 => 50,  150 => 49,  145 => 47,  139 => 46,  133 => 43,  124 => 37,  119 => 35,  111 => 30,  106 => 28,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/ishithemeoption.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\admin\\view\\template\\common\\ishithemeoption.twig");
    }
}
