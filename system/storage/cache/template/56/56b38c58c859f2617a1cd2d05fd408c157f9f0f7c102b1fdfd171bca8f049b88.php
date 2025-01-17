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

/* extension/ishitimmerwithimageblock/admin/view/template/module/ishitimmerwithimageblock.twig */
class __TwigTemplate_7c57d8204cc1e4cc888a0eb875759028823dfa6a1421d5139b57061fac693a93 extends Template
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
      \t<div class=\"float-end\">
\t        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-reply\"></i></a>
    \t</div>
      \t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"card panel-default\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i>";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\" data-oc-toggle=\"ajax\">
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active fade show\" role=\"tabpanel\" id=\"tab-general\" aria-labelledby=\"tab1\">
\t\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 33
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t            <div class=\"col-sm-10\">
\t\t\t\t              <input type=\"text\" name=\"name\" value=\"";
        // line 35
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t              <div id=\"error-name\" class=\"invalid-feedback\"></div>
\t\t\t\t            </div>
\t\t\t\t        </div>

\t\t\t\t        <div class=\"row mb-3\">
\t\t\t\t\t        <div class=\"col-sm-6 row\">
\t\t\t\t\t            <label class=\"col-sm-4 col-form-label\" for=\"input-image\">";
        // line 42
        echo ($context["entry_beforeimage"] ?? null);
        echo "</label>
\t\t\t\t\t            <div class=\"col-sm-8\">
\t\t\t\t\t              <div id=\"image\" class=\"card image\">
\t\t\t\t\t                <img src=\"";
        // line 45
        echo ($context["beforeimagethumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-beforeimage\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t                <input type=\"hidden\" name=\"beforeimage\" value=\"";
        // line 46
        echo ($context["beforeimage"] ?? null);
        echo "\" id=\"input-beforeimage\" />
\t\t\t\t\t                <div class=\"card-body\">
\t\t\t\t\t                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-beforeimage\" data-oc-thumb=\"#thumb-beforeimage\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 48
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-beforeimage\" data-oc-thumb=\"#thumb-beforeimage\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 49
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t                </div>
\t\t\t\t\t              </div>
\t\t\t\t\t            </div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <div class=\"col-sm-6 row\">
\t\t\t\t\t        \t<label class=\"col-sm-4 col-form-label\" for=\"input-image\">";
        // line 55
        echo ($context["entry_afterimage"] ?? null);
        echo "</label>
\t\t\t\t\t            <div class=\"col-sm-8\">
\t\t\t\t\t              <div id=\"image\" class=\"card image\">
\t\t\t\t\t                <img src=\"";
        // line 58
        echo ($context["afterimagethumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-afterimage\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t                <input type=\"hidden\" name=\"afterimage\" value=\"";
        // line 59
        echo ($context["afterimage"] ?? null);
        echo "\" id=\"input-afterimage\" />
\t\t\t\t\t                <div class=\"card-body\">
\t\t\t\t\t                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-afterimage\" data-oc-thumb=\"#thumb-afterimage\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 61
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-afterimage\" data-oc-thumb=\"#thumb-afterimage\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 62
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t                </div>
\t\t\t\t\t              </div>
\t\t\t\t\t            </div>
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"row mb-3\">
\t\t\t\t            <label class=\"col-sm-2 col-form-label\" for=\"input-image2\">";
        // line 69
        echo ($context["entry_image2"] ?? null);
        echo "</label>
\t\t\t\t            <div class=\"col-sm-4\">
\t\t\t\t              <div id=\"image\" class=\"card image\">
\t\t\t\t                <img src=\"";
        // line 72
        echo ($context["imagethumb2"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image2\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t                <input type=\"hidden\" name=\"image2\" value=\"";
        // line 73
        echo ($context["image2"] ?? null);
        echo "\" id=\"input-image2\" />
\t\t\t\t                <div class=\"card-body\">
\t\t\t\t                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image2\" data-oc-thumb=\"#thumb-image2\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 75
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image2\" data-oc-thumb=\"#thumb-image2\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 76
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t                </div>
\t\t\t\t              </div>
\t\t\t\t            </div>
\t\t\t\t            <label class=\"col-sm-2 col-form-label\" for=\"input-bg_color\">";
        // line 80
        echo ($context["entry_bg_color"] ?? null);
        echo "</label>
\t\t\t\t            <div class=\"col-sm-4\">
\t\t\t\t              <input type=\"text\" name=\"bg_color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 82
        echo ($context["bg_color"] ?? null);
        echo "\">
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"row mb-3\"> 
\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-startdate\">";
        // line 86
        echo ($context["entry_startdate"] ?? null);
        echo "</label>
\t\t\t              <div class=\"col-sm-4\">
\t\t\t                <div class=\"input-group\">
\t\t\t                  <input type=\"date\" name=\"startdate\" value=\"";
        // line 89
        echo ($context["startdate"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_palceholderdate"] ?? null);
        echo "\"class=\"form-control\"/></div>
\t\t\t                <!-- ";
        // line 90
        if (($context["error_startdate"] ?? null)) {
            // line 91
            echo "\t\t\t                <div class=\"text-danger\">";
            echo ($context["error_startdate"] ?? null);
            echo "</div>
\t\t\t                ";
        }
        // line 92
        echo " -->
\t\t\t              </div>
\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-enddate\">";
        // line 94
        echo ($context["entry_enddate"] ?? null);
        echo "</label>
\t\t\t              <div class=\"col-sm-4\">
\t\t\t                <div class=\"input-group\">
\t\t\t                    <input type=\"date\" name=\"enddate\" value=\"";
        // line 97
        echo ($context["enddate"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_palceholderdate"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/></div>
\t\t\t                <!-- ";
        // line 98
        if (($context["error_enddate"] ?? null)) {
            // line 99
            echo "\t\t\t                <div class=\"text-danger\">";
            echo ($context["error_enddate"] ?? null);
            echo "</div>
\t\t\t                ";
        }
        // line 100
        echo " -->
\t\t\t              </div>
\t\t\t            </div>
\t\t\t            <div class=\"tab-pane\">
\t\t\t\t            <ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t\t              ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 106
            echo "\t\t\t\t              <li class=\"nav-item\"><a class=\"nav-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 106)) {
                echo " active ";
            }
            echo "\" href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
            echo "\" data-bs-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 106);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 106);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 106);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 106);
            echo "</a></li>
\t\t\t\t              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t            </ul>
\t\t\t\t            <div class=\"tab-content\">
\t\t\t\t              ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 111
            echo "\t\t\t\t              <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 111)) {
                echo " active ";
            }
            echo " fade show\" role=\"tabpanel\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "\">
\t\t\t\t                <div class=\"row mb-3\">
\t\t\t\t                  <label class=\"col-sm-2  col-form-label\" for=\"input-description";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
\t\t\t\t                  <div class=\"col-sm-10\">
\t\t\t\t                    <textarea name=\"module_description[";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
            echo "\" data-oc-toggle=\"ckeditor\" class=\"form-control\">";
            echo (((($__internal_compile_0 = ($context["module_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["module_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115)] ?? null) : null), "description", [], "any", false, false, false, 115)) : (""));
            echo "</textarea>
\t\t\t\t                  </div>
\t\t\t\t                </div>
\t\t\t\t              </div>
\t\t\t\t              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t\t  \t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 123
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 126
        if (($context["status"] ?? null)) {
            // line 127
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 128
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 131
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
/* The switch - the box around the slider */
.showtext{
\tdisplay:none;
}
.show{
\tdisplay:block;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

textarea.form-control {
  min-height: 150px;
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
function boxDisable(e, t) {
var id = e + 'show';

    if (t.is(':checked')) {
\t\t\$('.'+id).attr(\"style\", \"display: flex !important\");
    } else {
      \$('.'+id).attr(\"style\", \"display: none !important\");
    }
}
var testimonial_row = ";
        // line 240
        echo ($context["testimonial_row"] ?? null);
        echo ";
function addbannertab() {
\t\tvar newtab = 'tab-singlebanner'+ testimonial_row;

\t\thtml  = '<div class=\"tab-pane\" id=\"tab-singlebanner'+ testimonial_row +'\">';

\t\thtml  += '<div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">";
        // line 246
        echo ($context["entry_image"] ?? null);
        echo "</label><div class=\"col-sm-10\"><div id=\"image\" class=\"card image\"><img src=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_testimonial"] ?? null), "thumb", [], "any", false, false, false, 246);
        echo "\" alt=\"\" title=\"\" id=\"thumb-banner' + testimonial_row + '\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/><input type=\"hidden\" name=\"ishitestimonial['+ testimonial_row +'][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_testimonial"] ?? null), "image", [], "any", false, false, false, 246);
        echo "\" id=\"input-banner' + testimonial_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-banner' + testimonial_row + '\" data-oc-thumb=\"#thumb-banner' + testimonial_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button> <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-banner' + testimonial_row + '\" data-oc-thumb=\"#thumb-banner' + testimonial_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></div></div></div>'

\t\thtml  += '<div class=\"row mb-3 tab-singlebanner'+ testimonial_row +'\">';
\t\thtml  += '<label class=\"col-sm-2 col-form-label\" for=\"input-username-'+ testimonial_row +'\">";
        // line 249
        echo ($context["entry_username"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<div class=\"input-group\">';
\t\thtml  += '<input type=\"text\" name=\"ishitestimonial['+ testimonial_row +'][username]\" placeholder=\"";
        // line 252
        echo ($context["entry_username"] ?? null);
        echo "\" class=\"form-control\" id=\"input-username-{'+ testimonial_row +'\"/>';
\t\thtml  += '</div>'; 
\t\thtml  += '</div>';
\t\thtml  += '</div>';

\t\thtml  += '<div class=\"row mb-3\">';
\t\thtml  += '<label class=\"col-sm-2 col-form-label\" for=\"input-description-'+ testimonial_row +'\">";
        // line 258
        echo ($context["entry_description"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<textarea name=\"ishitestimonial['+ testimonial_row +'][description]\" placeholder=\"";
        // line 260
        echo ($context["entry_description"] ?? null);
        echo "\" rows=\"4\" id=\"input-description-'+ testimonial_row +'\" data-oc-toggle=\"ckeditor\" class=\"form-control\"></textarea>';
\t\thtml  += '</div>';
\t\thtml  += '</div>';

\t\t

\t\t\$('#tab-banner #ishi_bannertabs').append(html);
\t\t
\t\t\$('#bannerstab > li:last-child').before('<li class=\"nav-item text-start\"><a class=\"nav-link\"  href=\"#tab-singlebanner' + testimonial_row + '\" data-bs-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#bannerstab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singlebanner' + testimonial_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singlebanner' + testimonial_row + '\\').remove();\"></i> ";
        // line 268
        echo ($context["entry_banner"] ?? null);
        echo " </li>');
\t\t 
\t\t\$('#bannerstab a[href=\\'#tab-singlebanner' + testimonial_row + '\\']').tab('show');

\t\ttestimonial_row++;
\t\t\$('.themecolor').each( function() {
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
\t}
\t\$('#bannerstab a:first').tab('show');
</script>
<<script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
\t<link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
\t<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$('#language a:first').tab('show');
\t</script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready( function() {
\t\t\$('.color').each( function() {
\t\t\t\$(this).minicolors({
\t\t\tcontrol: \$(this).attr('data-control') || 'hue',
\t\t\tdefaultValue: \$(this).attr('data-defaultValue') || '',
\t\t\tformat: \$(this).attr('data-format') || 'hex',
\t\t\tkeywords: \$(this).attr('data-keywords') || '',
\t\t\tinline: \$(this).attr('data-inline') === 'true',
\t\t\tletterCase: \$(this).attr('data-letterCase') || 'lowercase',
\t\t\topacity: \$(this).attr('data-opacity'),
\t\t\tposition: \$(this).attr('data-position') || 'bottom',
\t\t\tswatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
\t\t\tchange: function(value, opacity) {
\t\t\t\tif( !value ) return;
\t\t\t\tif( opacity ) value += ', ' + opacity;
\t\t\t\tif( typeof console === 'object' ) {
\t\t\t\tconsole.log(value);
\t\t\t\t}
\t\t\t},
\t\t\ttheme: 'bootstrap',
\t\t\t});
\t\t});
\t\t});
\t</script>
\t<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'";
        // line 337
        echo ($context["ckeditor"] ?? null);
        echo "'
});
//--></script>
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
        // line 371
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishitimmerwithimageblock/admin/view/template/module/ishitimmerwithimageblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  696 => 371,  659 => 337,  587 => 268,  576 => 260,  571 => 258,  562 => 252,  556 => 249,  540 => 246,  531 => 240,  422 => 133,  417 => 131,  412 => 130,  407 => 128,  402 => 127,  400 => 126,  394 => 123,  389 => 120,  364 => 115,  357 => 113,  347 => 111,  330 => 110,  326 => 108,  297 => 106,  280 => 105,  273 => 100,  267 => 99,  265 => 98,  259 => 97,  253 => 94,  249 => 92,  243 => 91,  241 => 90,  235 => 89,  229 => 86,  222 => 82,  217 => 80,  210 => 76,  206 => 75,  201 => 73,  195 => 72,  189 => 69,  179 => 62,  175 => 61,  170 => 59,  164 => 58,  158 => 55,  149 => 49,  145 => 48,  140 => 46,  134 => 45,  128 => 42,  116 => 35,  111 => 33,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishitimmerwithimageblock/admin/view/template/module/ishitimmerwithimageblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishitimmerwithimageblock\\admin\\view\\template\\module\\ishitimmerwithimageblock.twig");
    }
}
